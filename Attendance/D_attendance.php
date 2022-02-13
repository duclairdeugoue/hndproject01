<?php session_start(); ?>

<?php include '../includes/d_loginCheck.php'; ?>

<?php include "./includes/headerLInks.php"; ?>

<?php include './includes/attendance_function.php'; ?>
<!-- include "./includes/connection1.php"; -->

<title>Dashboard</title>
</head>

<body id="page-top">

    <?php require('../php/d_header.php'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="">

            <div class="card mx-4">
                <div class="card-title ">
                    <div class="card-header d-sm-flex d-md-flex justify-content-between">
                        <div class=""></div>
                        <div class=" "><button type="button" class="btn btn-info col py-2 mt-3" data-backdrop="static" data-toggle="modal" data-target="#add_attendance">Create New Attendance </button>
                        </div>

                    </div>
                    <div class="card-body d-sm-flex-column">
                        <!-- <div class="bg-info">tester</div> -->
                        <div class="text-center ">
                            <h3 class="text-responsive"><?php returnSpecialityNameAndLevel(); ?></h3>
                        </div>
                        <div class="scrollable px-3" id="">
                            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="1">
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
                                    $query = "SELECT distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,specialities.speciality_name,levels.level_id from persons,students,specialities,levels,specialities_levels where persons.id_person=students.id_person and students.speclevel = specialities_levels.speclevel and specialities.speciality_id = specialities_levels.speciality_id and specialities_levels.level_id = levels.level_id";
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
                                            <td>' . $row['speciality_name'] . '</td>
                                            <td>' . $row['level_id'] . '</td>
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

                </div>

                <!-- End of Content Wrapper -->
            </div>
        </div>
    </div>




    <?php include './php/delegate_modals.php'; ?>
    <?php include './includes/footerLinks.php'; ?>
</body>

</html>