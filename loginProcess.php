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
    <title>Authentification</title>
    <link rel="stylesheet" href="./Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <!-- <link href="css/templatemo-diagoona.css" rel="stylesheet" /> -->

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
            $query = "SELECT person_type,id_person from persons where login = '$name' AND password = '$password'  ";
            $result = mysqli_query($con, $query);
            $ptype = -1;
            $function = "Testing";
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ptype =  $row["person_type"];
                    $id = $row["id_person"];
                }
                if ($ptype == 0) {
                    $_SESSION['sauname'] = $name_b;
                    $_SESSION['sapwd'] = $password_b;
                    $_SESSION['suser_is_logged_in'] = true;

                    header('location: SADMIN_GUI_1.0/SA_index.php');
                    exit;
                } elseif ($ptype == 1) {
                    $_SESSION['auname'] = $name_b;
                    $_SESSION['apwd'] = $password_b;
                    $_SESSION['auser_is_logged_in'] = true;

                    header('location: ADMIN_GUI_2.0/A_index.php');
                    exit;
                } elseif ($ptype == 2) {
                    $_SESSION['duname'] = $name_b;
                    $_SESSION['dpwd'] = $password_b;
                    $_SESSION['duser_is_logged_in'] = true;
                    $_SESSION['id']  = $id;
                    $_SESSION['role']  = $_row['function'];
                    
                    header("location: studentDelegateLogin.php");
                    exit;
                    
                }   
                //  elseif ($ptype == 3) {
                //     $_SESSION['duname'] = $name_b;
                //     $_SESSION['dpwd'] = $password_b;
                //     $_SESSION['duser_is_logged_in'] = true;
                //     // require("./STUDENT_GUI/index.php");
                //     header('location: Attendance/D_attendance.php');
                //     exit;
                //  }
                 else {
                    require('index.php');
                    // header("location:index.php");
                    echo "  <script>
                                $(document).ready(function() {
                                    $('#msg').html('Please check your information');
                                });
                            </script>"
                    ;
                }
            }
        }
        if(!isset($_POST['login'])){
            mysqli_close($con);
            header('location:index.php');
            exit;
        }
        header('location:index.php');

        ?>
    </table>

</body>

</html>