<?php
session_start();
require '../includes/loginCheck.php';
include('./includes/connection1.php');
?>
<?php require('./includes/headerLinks.php'); ?>
    <title>Student list</title>

</head>

<body id="page-top">
    <?php require('../php/header.php'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="">
           
            <?php include('./Add_student/SA_view.php');?>
            <?php include('./php/main_footer.php'); ?>  <!-- End of Footer -->
        </div>
    </div>
<?php include('./includes/footerLinks.php'); ?>
    
        

            