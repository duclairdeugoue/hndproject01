<?php
session_start();
require_once('./connection1.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css">
</head>

<body class="bg-dark" >
    <?php
    if (isset($_POST['Register_now'])) {

        $username = $_POST['Uname'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['cpass'];

        // echo $username,$pass,$confirm_pass;
        if ($pass == $confirm_pass) {
            $mat = $_SESSION['Confirm_matricule'];
            $query = "UPDATE persons,students SET persons.login ='$username', persons.password ='$pass' WHERE persons.id_person = students.id_person AND students.matricule = '$mat'";
            $result = mysqli_query($con,$query);

            if($result){
                echo "
                <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        <span class='sr-only'>Close</span>
                    </button>
                    <strong>Registration Successfully!</strong> Click here to login <a class = ''btn bg-info' href = '../index.php'>Login </a>
                </div>";
                session_destroy();
            }
            else{
                require_once('./Card_register_now_.php');
            echo "<script src='../Myvendor1/jquery/jQuery-3.5.1.min.js'></script> <script>
                    $(document).ready(function() {
                        $('#message').html('Please try again');
                    });
                </script>";
            }
        } else {
            require_once('./Card_register_now_.php');
            echo "<script src='../Myvendor1/jquery/jQuery-3.5.1.min.js'></script> <script>
                    $(document).ready(function() {
                        $('#distinct_pass').html('password are not the same');
                    });
                </script>";
        }
    }

    ?>
    

</body>
</html>