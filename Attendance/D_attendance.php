<?php session_start(); ?>

<?php include '../includes/d_loginCheck.php'; ?>

<?php include "./includes/headerLInks.php"; ?>

<?php include './includes/attendance_function.php'; ?>
<!-- include "./includes/connection1.php"; -->

<title>Dashboard</title>
<!-- <style>
    table td,
    table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table tr:nth-child(even) {
        background-color: #848796;
        color: white;
    }

    table tr:hover {
        background-color: #6F42C1;
    }

    table tr:nth-child(odd):hover {
        color: white;
    }

    table thead {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #36B9CC;
        color: white;
    }
</style> -->
</head>

<body id="page-top">

    <?php require('../php/d_header.php'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="mx-sm-0 mx-md-4 mt-sm-3">

            <div class="card mx-4 mx-sm-1">
                <div class="card-title ">
                    <div class="card-header d-sm-flex d-md-flex justify-content-between">
                        <div class=""></div>
                        <div class=" "><button type="button" class="btn btn-info col py-2 mt-3" data-backdrop="static" data-toggle="modal" data-target="#add_attendance">Create New Attendance </button>
                        </div>

                    </div>
                    <div class="card-body d-sm-flex-column">
                        <div class="text-center ">
                            <h3 class="text-responsive"><?php returnSpecialityNameAndLevel(); ?></h3>
                        </div>
                        <div class="scrollable m-sm-2 m-md-4 pb-3" style="overflow-x:scroll;" id="">
                            <?php displaySpecialityStudentList() ?>
                        </div>
                    </div>

                </div>

                <!-- End of Content Wrapper -->
            </div>
        </div>
    </div>




    <?php include './php/delegate_modals.php'; ?>
    <?php include './includes/footerLinks.php'; ?>
</body>

</html>