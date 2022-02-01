<?php
session_start();
require '../includes/sa_loginCheck.php';
include('./includes/connection1.php');
?>

<?php require('./includes/headerLinks.php'); ?>


    <title>Adminstrator list</title>
</head>

<body id="page-top">
<?php require('../php/sa_header.php'); ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
       <?php include('./php/sidebar.php'); // End of Sidebar ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <?php include('./Add_admins/SA_view.php'); ?>

            <?php include('./php/main_footer.php'); ?>

        </div>
          
    </div>



<?php include('./includes/footerLinks.php'); ?>
