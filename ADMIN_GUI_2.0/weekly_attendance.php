<?php
session_start();
require '../includes/a_loginCheck.php';
include './includes/connection1.php';
?>
<?php include('./includes/headerLinks.php'); ?>
<title>Daily Attendance</title>
</head>

<body id="page-top">

    <?php require('../php/a_header.php'); ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('./php/sidebar.php'); // End of Sidebar 
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <?php include('./weeklyAttendance/main_content_attendance.php'); ?>
        </div>
        <!-- End of Content Wrapper -->
        <?php include('../php/footer.php'); // End of of Main content  
        ?>

    </div>

    </div>

    <?php include('./includes/footerLinks.php') ?>