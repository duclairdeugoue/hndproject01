<?php
session_start();
require '../includes/sa_loginCheck.php';

include('./includes/connection1.php');
?>
<?php require('./includes/headerLinks.php'); ?>

    <title>Dashboard</title>

</head>

<body id="page-top">

    <?php require('../php/sa_header.php'); // End of Topbar ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('./php/sidebar.php'); // End of Sidebar ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <?php include('./php/main_content_home.php'); // End of of Main content  ?>
            <?php include('./php/main_footer.php'); ?> <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

<?php include('./includes/footerLinks.php'); ?>
