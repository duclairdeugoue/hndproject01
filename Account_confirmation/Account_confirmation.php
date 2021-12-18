<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagoona HTML CSS Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="../Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Myvendor1/fontawesome/css/all.min.css">
    <link href="../css/templatemo-diagoona.css" rel="stylesheet" />
</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">DoubleD</h1>
                            <p class="tm-slogon">Welcome to our new platform</p>
                        </div>
                    </div>
                </div>
                <div class="tm-col-right">
                    <h2 class="mb-5 tm-content-title text-center text-i">Please Enter your Matricule <br> for Confirmation</h2>
                </div>
            </div>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <!-- confirmation-form -->
                        <form action="./confirmation_process.php" method="POST" class="form login-form p-5 ">
                            <p class="text-warning" id="warning_msg"></p>
                            <div class="form-group">
                                <label for="matricule"> Matricule :</label>
                                <input type="text" class="form-control text-center" id="Confirm_matricule" name="Confirm_matricule" required>
                            </div>

                            <div class="form-group d-flex justify-content-around">
                                <button type="submit" name="confirm" class="btn btn-success">Confirm</button>
                                <a href="../index.php" class="btn btn-danger" id="">Cancel</a>
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

    <script src="../Myvendor1/jquery/jQuery-3.5.1.min.js"></script>
    <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <script src="../js/jquery.backstretch.min.js"></script>
    <script src="../js/slideshow_confimation.js"></script>
</body>

</html>