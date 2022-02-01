<?php
session_start();
require '../includes/sa_loginCheck.php';

include('./includes/connection1.php');
?>
<?php require('./includes/headerLinks.php'); ?>

<title>Specialities list</title>
</head>

<body id="page-top">

<?php require('../php/sa_header.php'); ?>
    <div id="wrapper">

        <?php include('./php/sidebar.php'); ?>
        <!-- Content Wrapper -->

        <div id="content-wrapper" class="p-2">

            <?php include('./Add_speciality/SA_view.php'); ?>
            <!-- End of Content Wrapper -->
            <?php include('./php/main_footer.php'); ?>


        </div>
    </div>
<?php include('./includes/footerLinks.php'); ?>