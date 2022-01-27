<div class="card mx-2 h-100">
    <div class="card-title">
    <div class="card-header d-sm-flex d-md-flex justify-content-between">
            <div class=""><a href="SA_index.php" class="btn btn-secondary col py-2 mt-3">Home</a></div>
            <div class=" "><button type="button" class="btn btn-info col py-2 mt-3" data-backdrop="static" data-toggle="modal" data-target="#AddAdmin">Add New Admin </button>
            </div>
        </div>

        <div class="card-body d-sm-flex-column">
            <div class="text-center ">
                <h3 class="text-responsive">LIST OF ALL ADMINS</h3>
            </div>
            <p id="delete-message"></p>
            <div class="scrollable px-3" id="table_admin_display">
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
                                            <td>' . $i . '</td>
                                            <td>' . $row['name'] . '</td>
                                            <td>' . $row['surname'] . '</td>
                                            <td>' . $row['sex'] . '</td>
                                            <td>' . $row['date_of_birth'] . '</td>
                                            <td>' . $row['code'] . '</td>
                                            <td>' . $row['function'] . '</td>
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