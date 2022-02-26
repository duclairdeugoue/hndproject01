<!-- Logout Modal note that this codes will not have the effects unless you put the Jquery and Js links -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="./delegate_logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>


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
            <div class="modal-body">
                <?php //attendanceForm() 
                ?>
                <!--to display the list of student of a particular speciality -->
                <table class="table table-striped table-bordered" id="attendanceForm" width="100%" cellspacing="1">
                    <thead>
                        <tr>
                            <td>N°</td>
                            <td>Name</td>
                            <td>Surname</td>
                            <td>Sex</td>
                            <td style="text-align: center;">Presence</td>
                            <td style="text-align: center;">Presence</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        global $con;
                        $i = 1;
                        $query =
                        "   SELECT distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,specialities.speciality_name,levels.level_id 
                            from persons,students,specialities,levels,specialities_levels 
                            where persons.id_person=students.id_person 
                            and students.speclevel = specialities_levels.speclevel 
                            and specialities.speciality_id = specialities_levels.speciality_id 
                            and specialities_levels.level_id = levels.level_id
                            and specialities_levels.speclevel = " . $_SESSION['spec_and_level'] . "
                        ";
                        $result = mysqli_query($con, $query);
                        if (!$result) {
                            echo "Please check your Query";
                        }
                        while ($row = mysqli_fetch_assoc($result)) {
                            // take note about this dot near the equalsign,they should be together
                            echo "<tr>
                                    <td>" . $i . "</td>
                                    <td>" . $row['name'] . "</td>
                                    <td>" . $row['surname'] . "</td>
                                    <td>" . $row['sex'] . "</td>
                                    <td style = 'text-align: center;'><button class = 'btn btn-outline-success' >Present</button></td>
                                    <td style = 'text-align: center;'><button class = 'btn btn-outline-danger'>Absent</button></td>
                   
                    
                                 </tr>";
                            $i = $i + 1;
                        }

                        ?>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save Attendance</button>
            </div>
        </div>
    </div>
</div>