<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="./Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css"> -->
    <!-- this is bootstrap version 4.6 -->
    <link rel="stylesheet" href="../Myvendor1/bootstrap-4.0.0-dist/icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Myvendor1/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/modal_fullscreen-bs5.css">
    <!-- <link rel="stylesheet" href="./css/create_account.css"> -->


</head>

<body id="page-top">
    
    <?php
    //  Topbar 
    require('../php/header.php');
    // End of Topbar

    ?>
    <!--  -->
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        //  Sidebar 
        include('./php/sidebar.php');
        // End of Sidebar
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <?php
            //  Main content 
             include('./Attendance_list/main_content_attendance.php');
            // End of of Main content
            ?>
            <!-- Footer -->
            <?php
            //  Main content 
            include('./php/main_footer.php');
            // End of of Main content
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- MODALS -->
    <?php
    //  Main content 
    include('./php/modals.php');
    // include('./Add_admins/SA_regist_Admin.php');
    // include('./Register_marks/index.php');
    // End of of Main content
    ?>


    <!-- Bootstrap core JavaScript-->
    <script src="../Myvendor1/jquery/jquery.min.js"></script>
    <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script> <!-- helps to impliment dropdown-->

    <!-- Core plugin JavaScript-->
    <script src="../Myvendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>
    <script src="./js/My_admin_CRUD.js"></script>
    <script src="./js/My_marks_CRUD.js"></script>
    <script src="./js/myjs.js"></script>

    <script src="../Myvendor1/bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="./js/create_account.js"></script> -->

</body>

</html>