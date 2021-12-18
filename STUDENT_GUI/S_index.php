<?php
session_start();
include('./includes/connection1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../Myvendor1/bootstrap-4.0.0-dist/icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Myvendor1/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    
    <?php
    //  Topbar 
    require('../php/header.php');
    // End of Topbar

    ?>
<div class="container">

    <div class="row">
        <h1>Welcome <?php  echo  $_SESSION['uname']; ?></h1>
    </div>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio laboriosam, accusantium ratione minus laudantium delectus asperiores, facere quis deserunt voluptatem repellat nulla sequi veniam eos nostrum nemo voluptatum saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nobis rem ut deserunt! Libero dicta pariatur nisi, veritatis rem quasi eius delectus neque error enim dignissimos doloremque officia magnam sequi?
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio laboriosam, accusantium ratione minus laudantium delectus asperiores, facere quis deserunt voluptatem repellat nulla sequi veniam eos nostrum nemo voluptatum saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nobis rem ut deserunt! Libero dicta pariatur nisi, veritatis rem quasi eius delectus neque error enim dignissimos doloremque officia magnam sequi?
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio laboriosam, accusantium ratione minus laudantium delectus asperiores, facere quis deserunt voluptatem repellat nulla sequi veniam eos nostrum nemo voluptatum saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nobis rem ut deserunt! Libero dicta pariatur nisi, veritatis rem quasi eius delectus neque error enim dignissimos doloremque officia magnam sequi?
    </p>
    
</div>
<?php
    include('./php/modals.php');
    // include('./SA_regist_Admin.php');
    // include('./Add_courses/index.php');
    // include('./Add_student/SA_regist_Student.php');
    // include('./display_view/display_student_list.php');
    // include('./display_view/display_admin_list.php');
    
    // End of of Main content
    ?>


    <!-- Bootstrap core JavaScript-->
    <script src="../Myvendor1/jquery/jquery.min.js"></script>
    <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script> <!-- helps to impliment dropdown-->

    <!-- Core plugin JavaScript-->
    <script src="../Myvendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>
    <script src="./js/My_course_CRUD.js"></script>
    <script src="./js/My_admin_CRUD.js"></script>
    <script src="./js/My_student_CRUD.js"></script>
    <!-- <script src="./js/myjs.js"></script> -->

    <script src="../Myvendor1/bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="./js/create_account.js"></script> -->
</body>
</html>