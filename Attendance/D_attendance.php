<?php session_start(); ?>

<?php include '../includes/d_loginCheck.php'; ?>

<?php include "./includes/headerLInks.php"; ?>

<?php include './includes/attendance_function.php'; ?>

<?php //include './D_attendance_action.php' 
?>
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
                    <div class="card-header d-sm-flex d-md-flex justify-content-between bg-gray">
                        <div class=""></div>
                        <!-- Button trigger modal -->
                        <div class=" "><button type="button" class="btn btn-success col py-2 mt-3" data-backdrop="static" data-toggle="modal" data-target="#add_attendance">Create New
                                Attendance </button>
                        </div>

                    </div>
                    <div class="card-body d-sm-flex-column">
                        <div class="text-center ">
                            <h3 class="text-responsive"><?php returnSpecialityNameAndLevel(); ?></h3>
                        </div>
                        <div class="scrollable m-sm-2 m-md-4 pb-3" style="overflow-x:scroll;" id="studentListContainer">
                            <?php //displaySpecialityStudentList(); 
                            ?>
                            <!-- to display the student attendance list-->

                            </table>

                        </div>
                    </div>
                    <div class="card-footer py-2">
                        <p id="testingAjax"></p>
                    </div>

                </div>

                <!-- End of Content Wrapper -->
            </div>
        </div>
    </div>




    <?php include './php/delegate_modals.php'; ?>
    <?php include './includes/footerLinks.php'; ?>
    <!-- Script -->
    <script>
        $(document).ready(function() {


            displaySpecialityStudentList();

            function displaySpecialityStudentList() {
                var fetch = "fetchStudentList"
                $.ajax({

                    url: "D_attendance_action.php",
                    method: "post",
                    data: {
                        action: fetch
                    },
                    success: function(data) {
                        // Getting data from PHP page and asign to data variable
                        data = JSON.parse(data);
                        if ((data.status = "success")) {
                            // We need to put '.html' to convert the var data to an html document
                            // console.log(data.html);  just for testing
                            $("#studentListContainer").html(data.html);
                            $('#delegate_student_list_view').DataTable();
                        }
                    },
                });
            }

            function performStudentsAttendanace() {

            }
        })
    </script>
</body>

</html>