<?php
    //  session_start();
    
    //  if(isset($_SESSION['sadmin_is_logged_in'])){
    //     header('location: SADMIN_GUI_1.0/SA_index.php');
    //  }
    //  if(isset( $_SESSION['admin_is_logged_in'])){
    //     header('location: ADMIN_GUI_2.0/A_index.php');
    //  }
    //  if(isset( $_SESSION['student_is_logged_in'])){
    //     header('location: STUDENT_GUI/S_index.php');
    //  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="./Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Myvendor1/fontawesome/css/all.min.css">
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />


</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                    <img src="./img/HND -1.png" height="25%" width="100%" class="d-sm-block" alt="">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <!-- <h1 class="tm-sitename text-uppercase">Double D</h1>
                            <p class="tm-slogon">Welcome to our new platform</p> -->
                            
                        </div>
                    </div>
                </div>
                <div class="tm-col-right">
                    <h2 class="mb-5 tm-content-title text-center ">Please Login here</h2>
                </div>
                
            </div>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <!-- Login form -->

                        <form action="loginProcess.php" method="POST" enctype="multipart/form-data" class="form  login-form p-3">
                            <p id="msg" class="text-danger"></p>
                            <div class="form-group">
                                <label for="uname"> User-name :</label>
                                <input type="text" class="form-control text-light " style="background-color:rgba(0,0,0,0.4);" id="input-box" name="uname" required>

                            </div>
                            <div class="form-group">
                                <label for="pwd"> Password :</label>
                                <input type="password" class="form-control text-light" style="background-color:rgba(0,0,0,0.4);" name="pwd" required>
                            </div>
                            <div class="form-group text-center p-3">
                                <button type="submit" name="login" class="btn btn-success m-2" value="login">Login</button>

                                <h4 class="h6 small"><a href="#" class="text-info">Forget password</a> </h4>
                                <h4 class="h6 small"><a href="./Create_account.php" class="text-info">Create an Account</a> </h4>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>

        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2021 DoubleD Co.

                </footer>
            </div>
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>
    <script>

    </script>
   

    <script src="./Myvendor1/jquery/jQuery-3.5.1.min.js"></script>
    <script src="./Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
    <script src="./js/verify-signature.js"></script>
</body>

</html>