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
    <title>Dashboard</title>
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
    <!-- <link rel="stylesheet" href="./css/create_account.css"> -->


</head>

<body id="page-top">
    <!-- <div id="wrapper">
        <div class="folding-square">
            <span class="square"></span>
            <span class="square"></span>
            <span class="square"></span>
            <span class="square"></span>
        </div>
    </div> -->

    <?php
    //  Topbar 
    require('../php/header.php');
    // End of Topbar

    ?>
    <!--  -->
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card my-2 mx-2 ">
                <div class="card-title py-2 pl-2">
                    <button type="button" class="btn btn-info" data-backdrop="static" data-toggle="modal" data-target="#AddAdmin">Add New admin </button>
                    <a href="SA_index.php" class="btn btn-secondary ">Home</a>

                    <div class="card-body">
                        <p id="delete-message"></p>
                        <div class="container-fluid" id="table_admin_display">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <td>N°</td>
                                        <td>Name</td>
                                        <td>Surname</td>
                                        <td>Sex</td>
                                        <td>Date of birth</td>
                                        <td>Matricule</td>
                                        <td class="">Functions</td>
                                        <td class="text-center"> Edit </td>
                                        <td class="text-center"> Delete </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    global $con;
                                    $i = 1;
                                    $query = "select distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, admins.code,admins.function from persons,admins where persons.id_person=admins.id_person";
                                    $result = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // take note about this dot near the equalsign,they should be together
                                         echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>' . $row['name'] . '</td>
                                            <td>' . $row['surname'] . '</td>
                                            <td>' . $row['sex'] . '</td>
                                            <td>' . $row['date_of_birth'] . '</td>
                                            <td>' . $row['code'] . '</td>
                                            <td>' . $row['function'] . '</td>
                                            <td class="text-center"><button class="btn btn-success " id="btn_edit_student" data-id =' . $row['id_person'] . '><span class ="fa fa-edit"></span></button></td>
                                            <td class="text-center"><button class="btn btn-danger" id="btn_delete_student" data-id1 =' . $row['id_person'] . '><span class ="fa fa-trash"></span></button></td>
                                        </tr>';
                                        $i = $i+1;
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                    //  Main content 

                    include('./php/modals.php');
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
        </div>


        <!-- Bootstrap core JavaScript-->
        <script src="../Myvendor1/jquery/jquery.min.js"></script>
        <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script> <!-- helps to impliment dropdown-->

        <!-- Core plugin JavaScript-->
        <script src="../Myvendor1/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./js/sb-admin-2.min.js"></script>
        <!-- <script src="./js/My_course_CRUD.js"></script> -->
            <script src="./js/My_admin_CRUD.js"></script> 
        <!-- <script src="./js/My_student_CRUD.js"></script> -->
        <!-- <script src="./js/myjs.js"></script> -->

        <script src="../Myvendor1/bootstrap-4.0.0/js/bootstrap.min.js"></script>
        <!-- <script src="./js/create_account.js"></script> -->

        <!-- Page level plugins -->
        <script src="../Myvendor1/datatables/jquery.dataTables.min.js"></script>
        <script src="../Myvendor1/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="./js/demo/datatables-demo.js"></script>
        <!-- <script src="./includes/Student_CRUD_functions.php"></script> -->

</body>

</html>