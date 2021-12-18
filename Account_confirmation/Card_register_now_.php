<div id="myDiv" class=" animate-bottom centered container p-5 py-sm-2 px-sm-auto py-lg-5 px-lg-auto ">

    <div class="card ">
        <div class="card-header">
            <h1 class="h5 text-secondary">Registeration Form</h1>
        </div>
        <div class="card-body">
            <p id="message"></p>
            <form action="./Register_now_process.php" method="POST" class="form text-dark">
                <div class="form-group">
                    <label for="">User-Name</label>
                    <input type="text" class="form-control my-2 " name="Uname" id="username" required>

                </div>
                <div class="form-group ">
                    <label for="">Password :</label>
                    <input type="password" class="form-control my-2" name="pass" id="pwd" required>
                </div>
                <div class="form-group ">
                    <p id="distinct_pass" class="text-danger"></p>
                    <label for="">Confirm password :</label>
                    <input type="password" class="form-control my-2" name="cpass" id="cpwd" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success p-2" name="Register_now" id="">Register Now</button>
                    <a type="button" href="../index.php" class="btn btn-danger p-2" id="">Cancel</a>
                </div>
            </form>

        </div>
    </div>
</div>