// The code below was largely taken from:
// https://github.com/strangerlabs/webauthn/blob/9959cb2b5f87692b8b1fecd799dd4029a3bf61b1/src/Webauthn.js#L501

const crypto = require("crypto");
const base64url = require("base64url");
const cbor = require("cbor");

function parseAttestationObject(attestationObject) {
  const attestationObjectBuffer = base64url.toBuffer(attestationObject);
  return cbor.decodeAllSync(attestationObjectBuffer)[0];
}

function hash(data) {
  return crypto
    .createHash("sha256")
    .update(data)
    .digest();
}

function verifySignature(signature, data, publicKey) {
  return crypto
    .createVerify("SHA256")
    .update(data)
    .verify(publicKey, signature);
}

function parseGetAssertAuthData(buffer) {
  const rpIdHash = buffer.slice(0, 32);
  buffer = buffer.slice(32);

  const flagsBuf = buffer.slice(0, 1);
  buffer = buffer.slice(1);

  const flags = flagsBuf[0];

  const counterBuf = buffer.slice(0, 4);
  buffer = buffer.slice(4);

  const counter = counterBuf.readUInt32BE(0);

  return { rpIdHash, flagsBuf, flags, counter, counterBuf };
}

function parseMakeCredAuthData(buffer) {
  const rpIdHash = buffer.slice(0, 32);
  buffer = buffer.slice(32);

  const flagsBuf = buffer.slice(0, 1);
  buffer = buffer.slice(1);

  const flags = flagsBuf[0];

  const counterBuf = buffer.slice(0, 4);
  buffer = buffer.slice(4);

  const counter = counterBuf.readUInt32BE(0);

  const aaguid = buffer.slice(0, 16);
  buffer = buffer.slice(16);

  const credIDLenBuf = buffer.slice(0, 2);
  buffer = buffer.slice(2);

  const credIDLen = credIDLenBuf.readUInt16BE(0);

  const credID = buffer.slice(0, credIDLen);
  buffer = buffer.slice(credIDLen);

  const COSEPublicKey = buffer;

  return {
    rpIdHash,
    flagsBuf,
    flags,
    counter,
    counterBuf,
    aaguid,
    credID,
    COSEPublicKey
  };
}

function COSEECDHAtoPKCS(COSEPublicKey) {
  const coseStruct = cbor.decodeAllSync(COSEPublicKey)[0];
  const tag = Buffer.from([0x04]);
  const x = coseStruct.get(-2);
  const y = coseStruct.get(-3);

  return Buffer.concat([tag, x, y]);
}

function ASN1toPEM(pkBuffer) {
  let type;
  if (pkBuffer.length === 65 && pkBuffer[0] === 0x04) {
    pkBuffer = Buffer.concat([
      new Buffer.from(
        "3059301306072a8648ce3d020106082a8648ce3d030107034200",
        "hex"
      ),
      pkBuffer
    ]);

    type = "PUBLIC KEY";
  } else {
    type = "CERTIFICATE";
  }

  const b64cert = pkBuffer.toString("base64");

  let PEMKey = "";
  for (let i = 0; i < Math.ceil(b64cert.length / 64); i++) {
    const start = 64 * i;
    PEMKey += b64cert.substr(start, 64) + "\n";
  }

  PEMKey = `-----BEGIN ${type}-----\n` + PEMKey + `-----END ${type}-----\n`;
  return PEMKey;
}

/**
 * This function throws! Otherwise, returns new counter number.
 * @param counter {Number} The previous counter number.
 * @param attestationObject {String} The value sent to the server when user was setting up the fingerprint scanner.
 * @param clientDataJSON {String} The data from the assertion object generated by the browser during re-login.
 * @param authenticatorData {String} The data from the assertion object generated by the browser during re-login.
 * @param signature {String} The signature we must verify.
 * @throws
 * @return {Number} The assertion counter as seen in the authenticatorData
 */
function verifyAssertion({
  counter,
  attestationObject,
  clientDataJSON,
  authenticatorData,
  signature
}) {
  const authenticatorDataBuff = base64url.toBuffer(authenticatorData);
  const authrDataStruct = parseGetAssertAuthData(authenticatorDataBuff);

  if (!(authrDataStruct.flags & 0x01)) {
    throw new Error("User was not presented during authentication!");
  }
  if (authrDataStruct.counter <= counter) {
    throw new Error("Counter didn't increase");
  }

  const clientDataHash = hash(base64url.toBuffer(clientDataJSON));
  const signatureBase = Buffer.concat([authenticatorDataBuff, clientDataHash]);
  const makeCredResp = parseAttestationObject(attestationObject);
  const { COSEPublicKey } = parseMakeCredAuthData(makeCredResp.authData) || {};
  const publicKey = ASN1toPEM(
    base64url.toBuffer(base64url.encode(COSEECDHAtoPKCS(COSEPublicKey)))
  );
  const signatureBuff = base64url.toBuffer(signature);

  // This line throws.
  verifySignature(signatureBuff, signatureBase, publicKey);

  // Save this new counter to the database now.
  return authrDataStruct.counter;
}
