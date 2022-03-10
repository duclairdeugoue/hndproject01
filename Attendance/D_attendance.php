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
<style>
    input[type = 'radio'].form-controls.presenceAbsent:after{
        width: 30px;
        height: 30px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
   }
    input[type = 'radio'].form-controls.presenceAbsent:checked:after{
        width: 30px;
        height: 30px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #E74A3B;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
    input[type = 'radio'].form-controls.presencePresent:after{
        width: 30px;
        height: 30px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
   }
    input[type = 'radio'].form-controls.presencePresent:checked:after{
        width: 30px;
        height: 30px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #1CC88A;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
</style>

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
                        <div class="">
                            <p class="h3 mb-0  p-2" style="color: violet; font-weight:bold; ">Today's Attendance List</p>
                        </div>
                        <!-- Button trigger modal -->
                        <div class=" "><button type="button" class="btn btn-success col py-2 mt-3" data-backdrop="static" id="createAttendance" data-toggle="modal" data-target="#add_attendance">Add New
                                Attendance </button>
                        </div>
                        <!-- Modal is include here for performing attendance -->
                        <!-- Mdodal for performing attendance (daily) -->

                        <!-- Modal -->
                        <div class="modal fade" id="add_attendance" tabindex="-1" role="dialog" aria-labelledby="dailyAttendance" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title text-info" style="font-weight: bold;">Daily Attendance</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="text-danger">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" id="attendanceForm" class="form" method="POST">
                                        <div class="modal-body">

                                            <div class="d-md-flex justify-content-around">

                                                <div class="form-group p-2 search-box1 col-6">
                                                    <label for="course">* Select course: </label>
                                                    <span class="text-danger" id="errorMessageCourse"></span>
                                                    <input type="text" autocomplete="off" class="form-control mt-2" name="attendanceCourse" id="attendanceCourse" placeholder="Search course..." >
                                                    <div class="result1 bg-secondary text-white"></div>
                                                </div>

                                                <div class="form-group p-2 col-2">
                                                    <label for="currentDate">Date: </label>
                                                    <input type="date" class="form-control mt-2" name="currentDate" id="currentDate" value="<?php echo currentDate(); ?>" readonly required>
                                                </div>
                                                <div class="col-2">

                                                </div>

                                                <div class="form-group p-2 d-inline-block col-2">
                                                    <label for="">Period: </label>
                                                    <input type="text" name="attendancePeriod" id="attendancePeriod" class="form-control mt-2" value="" readonly required>
                                                </div>

                                            </div>
                                            <div class=" form-group scrollable px-3" style="overflow: auto;" id="performAttendanceListContainer">


                                                <!-- to display the student list to record attendance-->

                                                <!-- Data here is coming from the backend -->

                                                <!--to display the list of student of a particular speciality -->
                                                <table class="table table-striped table-bordered" id="" width="100%" cellspacing="1">
                                                    <thead>
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Name</td>
                                                            <td>Surname</td>
                                                            <td>Sex</td>
                                                            <td style="text-align: center;">Present</td>
                                                            <td style="text-align: center;">Absent</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        global $con;
                                                        $i = 1;
                                                        $query =
                                                            "SELECT distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,specialities.speciality_name,levels.level_id 
                                                            from persons,students,specialities,levels,specialities_levels 
                                                            where persons.id_person=students.id_person 
                                                            and students.speclevel = specialities_levels.speclevel 
                                                            and specialities.speciality_id = specialities_levels.speciality_id 
                                                            and specialities_levels.level_id = levels.level_id
                                                            and specialities_levels.speclevel = " . $_SESSION['spec_and_level'] . "";

                                                        $result = mysqli_query($con, $query);
                                                        $rowCount = mysqli_num_rows($result);
                                                        if ($rowCount < 0) {
                                                            echo "No data avaialable for this speciality";
                                                        } else {


                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                                <!-- // take note about this dot near the equalsign,they should be together -->
                                                                <tr>
                                                                    <td> <?php echo $i; ?> </td>
                                                                    <td>
                                                                        <?php echo $row['name']; ?>
                                                                        <input type="hidden" name="studentID[]" id="studentID[]" value="<?php echo $row["matricule"]; ?>" />
                                                                    </td>
                                                                    <td> <?php echo $row['surname']; ?></td>
                                                                    <td> <?php echo $row['sex']; ?></td>
                                                                    <td style='text-align: center;'><input type="radio" class="form-controls presencePresent" name="attendanceStatus<?php echo $row["matricule"]; ?>" value="present" checked  /></td>
                                                                    <td style='text-align: center;'><input type="radio" class="form-controls presenceAbsent" style="" name="attendanceStatus<?php echo $row["matricule"]; ?>" value="absent"   /></td>
                                                                </tr>
                                                        <?php
                                                                $i = $i + 1;
                                                            }
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="action" id="action" value="performStudentAttendance"/>
                                            <input type="hidden" name="specialityAttendance" id="specialityAttendance" value="<?php echo $_SESSION["spec_and_level"]; ?>" />
                                            <button type="button" class="btn btn-danger" id="btnClose" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-success" id="saveAttendance" name="saveAttendance" value="Save Attendance" />
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-body d-sm-flex-column">
                        <p id="messageOperation"></p>
                        <p id="errorMessageAttendanceExist"></p>

                        <div class="text-center ">
                            <h3 class="text-responsive"><?php   ?></h3>
                        </div>
                        <div class="scrollable px-3" style="overflow: auto;" id="studentAttendanceListContainer">

                            <!-- to display the student attendance list-->
                            <!-- Data here is coming from the backend -->



                        </div>
                    </div>
                    <div class="card-footer py-2">
                        <p class="text-warning" style="text-align: center; font-weight:bold;" id="pendingAttendanceStatus"></p>
                        
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



        })
    </script>
</body>

</html>