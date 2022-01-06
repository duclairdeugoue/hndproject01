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
    <title>Student list</title>
    <!-- <link rel="stylesheet" href="./Myvendor1/bootstrap-4.0.0-dist/css/bootstrap.min.css"> -->
    <!-- this is bootstrap version 4.6 -->
    <link rel="stylesheet" href="../Myvendor1/bootstrap-4.0.0-dist/icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Myvendor1/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <!-- Custom fonts for this template-->
    <link href="../Myvendor1/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/modal_fullscreen-bs5.css">
    <link rel="stylesheet" href="./css/text-style.css">

</head>

<body id="page-top">
    <?php
    //  Topbar 
    require('../php/header.php');
    // End of Topbar

    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="">
            <div class="card mx-2 ">
                <div class="card-title ">
                    <div class="card-header d-sm-flex d-md-flex justify-content-between">
                        <div class=""><a href="SA_index.php" class="btn btn-secondary col py-2 mt-3">Home</a></div>
                        <div class=" "><button type="button" class="btn btn-info col py-2 mt-3" data-backdrop="static" data-toggle="modal" data-target="#Addstudent">Add New Student </button>
                        </div>
                        <!-- <span class="col-9 mt-3"></span> -->

                    </div>
                    <div class="card-body d-sm-flex-column">
                        <!-- <div class="bg-info">tester</div> -->
                        <div class="text-center ">
                            <h3 class="text-responsive">LIST OF ALL STUDENTS</h3>
                        </div>
                        <div class="scrollable" id="">
                            <table class="table table-bordered " id="dataTable"  cellspacing="0">
                                <thead>
                                    <tr>
                                        <td>N°</td>
                                        <td>Name</td>
                                        <td>Surname</td>
                                        <td>Sex</td>
                                        <td>Date of birth</td>
                                        <td>Matricule</td>
                                        <td>Speciality</td>
                                        <td>level</td>
                                        <td class="text-center"> Edit </td>
                                        <td class="text-center"> Delete </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    global $con;
                                    $i = 1;
                                    $query = "select distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,students.speciality,students.level from persons,students where persons.id_person=students.id_person";
                                    $result = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // take note about this dot near the equalsign,they should be together
                                        echo '<tr>
                                            <td>' . $i . '</td>
                                            <td>' . $row['name'] . '</td>
                                            <td>' . $row['surname'] . '</td>
                                            <td>' . $row['sex'] . '</td>
                                            <td>' . $row['date_of_birth'] . '</td>
                                            <td>' . $row['matricule'] . '</td>
                                            <td>' . $row['speciality'] . '</td>
                                            <td>' . $row['level'] . '</td>
                                            <td class="text-center"><button class="btn btn-success " id="btn_edit_student" data-id =' . $row['id_person'] . '><span class ="fa fa-edit"></span></button></td>
                                            <td class="text-center"><button class="btn btn-danger" id="btn_delete_student" data-id1 =' . $row['id_person'] . '><span class ="fa fa-trash"></span></button></td>
                                        </tr>';
                                        $i = $i + 1;
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End of Footer -->
                    <div class="card-footer">
                        <?php include('./php/main_footer.php'); ?>
                    </div>
                </div>
                <!-- Modal for the create student -->
                <?php include('./Add_student/SA_regist_Student.php'); ?>


                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../Myvendor1/jquery/jquery.min.js"></script>
    <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script> <!-- helps to impliment dropdown-->

    <!-- Core plugin JavaScript-->
    <script src="../Myvendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>
    <!-- <script src="./js/My_course_CRUD.js"></script>
        <script src="./js/My_admin_CRUD.js"></script> -->
    <script src="./js/My_student_CRUD.js"></script>
    <!-- <script src="./js/myjs.js"></script> -->

    <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <!-- <script src="./js/create_account.js"></script> -->

    <!-- Page level plugins -->
    <script src="../Myvendor1/datatables/jquery.dataTables.min.js"></script>
    <script src="../Myvendor1/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./js/demo/datatables-demo.js"></script>
    <!-- <script src="./includes/Student_CRUD_functions.php"></script> -->

</body>

</html>