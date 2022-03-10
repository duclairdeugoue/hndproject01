<div class="card mx-2" id="content">
    <div class="card-title ">
        <div class="card-header d-sm-flex d-md-flex justify-content-between">
            <div class="">
                <!-- <a href="SA_index.php" class="btn btn-secondary col py-2 mt-3">Home</a> -->
            </div>
            <div class=" "><button type="button" class="btn btn-info col py-2 mt-3" data-backdrop="static" data-toggle="modal" data-target="#Add_speciality">Add New Speciality </button>
            </div>
            <!-- <span class="col-9 mt-3"></span> -->

        </div>
        <div class="card-body d-sm-flex-column">
            <!-- <div class="bg-info">tester</div> -->
            <div class="text-center ">
                <h3 class="text-responsive">LIST OF ALL SPECIALITIES</h3>
            </div>
            <div class="scrollable px-3" id="">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td class="text-center">N°</td>
                            <td class="text-center">Departments</td>
                            <td class="text-center">Code</td>
                            <td class="text-center">Name</td>
                            <td class="text-center">View courses </td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        global $con;
                        $i = 1;
                        $query = "SELECT department_name,speciality_id,speciality_name from departments,specialities WHERE specialities.department_id = departments.department_id";
                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($result)) {

                            // take note about this dot near the equalsign,they should be together
                            echo '<tr>
                                <td class="text-center">' . $i . '</td>
                                <td class="text-center">' . ucwords($row['department_name']) . '</td>
                                <td class="text-center">' . $row['speciality_id'] . '</td>
                                <td class="text-center">' . ucwords($row['speciality_name']) . '</td>
                                <td class="text-center"><button class="btn btn-success " id="btn_update"><span class ="fa fa-edit"></span></button></td>
                                
                            </tr>';
                            $i = $i + 1;
                        }



                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>


</div>