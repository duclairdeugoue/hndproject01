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

<body>

    <table>
        <?php
        global $con;


        if (isset($_POST['confirm'])) {
            $name_b = $_POST['Confirm_matricule'];
            $Confir_matricule = mysqli_real_escape_string($con, $name_b);
            $_SESSION['Confirm_matricule'] = $name_b;
            
            $query = "SELECT person_type from persons,students where persons.id_person = students.id_person AND students.matricule ='$Confir_matricule'";
            $result = mysqli_query($con,$query);
            if ($result) {
                $ptype = -1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $ptype =  $row["person_type"];
                }
                if($ptype == 2){
                    header('location: Register_now.php');
                }
                else{
                    require('Account_confirmation.php');
                    echo " <script>
                    $(document).ready(function() {
                        $('#warning_msg').html('Please check your information');
                    });
                </script>";
                }
                
                
            }
            else{
                echo 'Something else';
            }
               
        
        }

        ?>
    </table>

</body>

</html>