<?php
session_start();
    
include './includes/connection1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css">
</head>

<body>

    <table>
        <?php
        global $con;


        if (isset($_POST['login'])) {
            
            $name_b = $_POST['uname'];
            $password_b = $_POST['pwd'];

            $name = mysqli_real_escape_string($con, $name_b);
            $password = mysqli_real_escape_string($con, $password_b);
            $query = "SELECT person_type from persons where login = '$name' AND password = '$password'  ";
            $result = mysqli_query($con, $query);
            $ptype = -1;
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ptype =  $row["person_type"];
                }
                if ($ptype == 0) {
                    $_SESSION['uname'] = $name_b;
                    $_SESSION['pwd'] = $password_b;
                    $_SESSION['user_is_logged_in'] = true;

                    header('location: SADMIN_GUI_1.0/SA_index.php');
                    exit;
                } elseif ($ptype == 1) {
                    $_SESSION['uname'] = $name_b;
                    $_SESSION['pwd'] = $password_b;
                    $_SESSION['user_is_logged_in'] = true;

                    header('location: ADMIN_GUI_2.0/A_index.php');
                    exit;
                } elseif ($ptype == 2) {
                    $_SESSION['uname'] = $name_b;
                    $_SESSION['pwd'] = $password_b;
                    $_SESSION['user_is_logged_in'] = true;
                    // require("./STUDENT_GUI/index.php");
                    header('location: STUDENT_GUI/S_index.php');
                    exit;
                }   
                 elseif ($ptype == 3) {
                    $_SESSION['uname'] = $name_b;
                    $_SESSION['pwd'] = $password_b;
                    $_SESSION['user_is_logged_in'] = true;
                    // require("./STUDENT_GUI/index.php");
                    header('location: LECTURER_GUI/L_index.php');
                    exit;
                 }
                 else {
                    require('index.php');
                    echo " <script>
                    $(document).ready(function() {
                        $('#msg').html('Please check your information');
                    });
                </script>";
                }
            }
        }
        if(!isset($_POST['login'])){
            header('location:index.php');
            exit;
        }
        header('location:index.php');

        ?>
    </table>

</body>

</html>