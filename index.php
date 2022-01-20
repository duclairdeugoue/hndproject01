<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link rel="stylesheet" href="./Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./css/sb-admin-2.min.css"> -->
    <link rel="stylesheet" href="./Myvendor1/fontawesome/css/all.min.css">
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />

    <link rel="stylesheet" href="./css/homepageStyle.css">

</head>

<body>

    <div class="tm-container container-fluid">
        <div class="container-fluid">
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <img src="./img/HND -1.png" height="25%" width="100%" class="d-sm-block" alt="">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                        </div>
                    </div>
                </div>
                <div class="tm-col-right">

                </div>

            </div>

            <div class="tm-row container">
                <div class="tm-col-left">
                </div>
                <div class="tm-col-right">     
                     <h2 class="text-center" style="font-size: 20px;">Please Login here</h2>
                    <!-- Login form -->
                    <form action="loginProcess.php" method="POST" enctype="multipart/form-data" class="form login-form">
                        <p id="msg" class="text-danger p-2" style="font-size: 18px; font-weight:bold;"></p>
                        <div class="form-group">
                            <label for="uname"> User name :</label>
                            <input type="text" class="form-control text-light " style="background-color:rgba(0,0,0,0.4);" id="input-box" name="uname" autocomplete="off" autofocus required>

                        </div>
                        <div class="form-group">
                            <label for="pwd"> Password :</label>
                            <input type="password" class="form-control text-light" style="background-color:rgba(0,0,0,0.4);" name="pwd" autocomplete="off" autofocus required>
                        </div>
                        <div class="form-group text-center p-3">
                            <button type="submit" name="login" class="btn btn-success m-2 px-4" style="font-size: 16px;" value="login">Login</button>

                            <h4 class="h6 small" style="font-size: 16px;"><a href="#" class="text-info">Forget password</a> </h4>
                            <h4 class="h6 small" style="font-size: 16px;"><a href="./Create_account.php" class="text-info">Create an Account</a> </h4>
                        </div>
                    </form>

                </div>
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

        </div>
        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
        <footer class="footer-sticky text-right p-2">
            <p class="">@ Copyright 2021-<?php echo date('Y'); ?> DoubleD Co.

        </footer>
    </div>
    <script src="./Myvendor1/jquery/jQuery-3.5.1.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
    <script src="./Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

    <!-- <script src="./js/verify-signature.js"></script> -->
</body>

</html>