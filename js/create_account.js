var myVar;
// Page loader
function myFunction() {
  myVar = setTimeout(showPage, 5000);
}

function showPage() {
  document.getElementById("wrapper").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

