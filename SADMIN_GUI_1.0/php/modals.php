<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modals</title>
</head>

<body>

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
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Add department Modal_insert -->
    <div class="modal fade" id="Add_departments" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a new Department</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger" id="message_1"></p>
                    <form action="" class="form">
                    <div class="form-group">
                        <label for="departmentName">Department Name :</label>
                        <p class="text-danger" id="message_a"></p>
                        <input type="text" class="form-control p-2" id="departmentName">
                    </div>
                    <div class="form-group">
                        <label for="specialityName">Add atleast one speciality, Give the speciality name :</label>
                        <p class="text-danger" id="message_b"></p>
                        <input type="text" class="form-control p-2" id="specialityName">
                    </div>

                    <div class=" modal-footer form-group d-flex justify-content-between">

                        <button type="button" class="btn btn-success" id="btn_add_department">Add Department</button>
                        <button type="button" data-dismiss="modal" id="btn_close" class="btn btn-secondary">Cancel</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Speciality Modal_insert -->
    <div class="modal fade" id="Add_speciality" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a New Speciality</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger" id="message_0"></p>
                    <form action="" class="form">
                    <div class="form-group">
                        <label for="departmentName">Speciality Name :</label>
                        <p class="text-danger" id="message_x"></p>
                        <input type="text" class="form-control p-2" id="specialtyName">
                    </div>
                    <div class="form-group">
                        <label for="specialityName">Department id :</label>
                        <p class="text-danger" id="message_y"></p>
                        <input type="text" class="form-control p-2" id="departmentID">
                    </div>

                    <div class=" modal-footer form-group d-flex justify-content-between">

                        <button type="button" class="btn btn-success" id="btn_add_speciality">Add Speciality</button>
                        <button type="button" data-dismiss="modal" id="btn_close" class="btn btn-secondary">Cancel</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Add Admin Modals-insert_modal -->
    <div class="modal fade" id="AddAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add A New Admin</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color: red;" id="message_4"></p>
                    <form action="" class="form needs-validation">
                        <div class="d-flex row">
                            <div class="form-group col-sm-6">
                                <label for="aname">Name :</label>
                                <input type="text" class="form-control" placeholder="Enter Admin Name" id="aname">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="asname">Surname :</label>
                                <input type="text" class="form-control" placeholder="Enter Admin Surname" id="asname">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="d-flex row">
                            <div class="form-group col-sm-4">
                                <label for="aDOB">Date Of Birth :</label>
                                <input type="date" class="form-control" placeholder="Enter the DOB" id="aDOB">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="asex">Sexe :</label>
                                <select class="form-control" id="asexe" value="Male">
                                    <option value="Male">M</option>
                                    <option value="Female">F</option>
                                </select>
                                <!-- <input type="text" class="form-control" placeholder="Enter the context of the task" id="nature" name="nature" > -->
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="afxn">Function :</label>
                                <input type="text" class="form-control" placeholder="Enter the Admin function" id="afxn">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                <!-- <label for="amatricule">Matricule :</label>
                            <input type="text" class="form-control" placeholder="Enter Matricule" id="amatricule"  >
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                            </div>
                        </div>
                        <!-- <div class="d-flex row">
                        <div class="form-group col ">
                            <label for="afxn">Function :</label>
                            <input type="text" class="form-control" placeholder="Enter the context of the task" id="afxn" >                      
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                    </div> -->

                        <div class="form-group d-flex justify-content-between">
                            <button type="button" class="btn btn-success" id="btn_add_admin">Add Admin</button>
                            <button type="button" data-dismiss="modal" id="btn_close" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Add Course Modals-insert_modal -->


    <!-- Add Lecturer Modals-insert_modal -->
    <div class="modal fade" id="AddLecturer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add A New Lecturer</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color: red;" id="message_3"></p>
                    <form action="" class="form needs-validation">
                        <div class="d-flex row">
                            <div class="form-group col-sm-6">
                                <label for="lname">Name :</label>
                                <input type="text" class="form-control" placeholder="Enter Lecturer Name" id="lname">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="lsname">Surname :</label>
                                <input type="text" class="form-control" placeholder="Enter Lecturer Surname" id="lsname">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="d-flex row">
                            <div class="form-group col-sm-4">
                                <label for="lDOB">Date Of Birth :</label>
                                <input type="date" class="form-control" placeholder="Enter the DOB" id="lDOB">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="lsexe">Sexe :</label>
                                <select class="form-control" id="lsexe" value="Male">
                                    <option value="Male">M</option>
                                    <option value="Female">F</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="lptf">Portofolio :</label>
                                <input type="file" class="" placeholder="Upload your portofolio" id="lptf">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                <!-- <label for="amatricule">Matricule :</label>
                            <input type="text" class="form-control" placeholder="Enter Matricule" id="amatricule"  >
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                            </div>
                        </div>


                        <div class="form-group d-flex justify-content-between">
                            <button type="button" class="btn btn-success" id="btn_add_lecturer">Add Lecturer</button>
                            <button type="button" data-dismiss="modal" id="btn_close" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal to display speciality list -->
    <div class=" modal modal-fullscreen fade" id="Display_speciality" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"> 
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>




</body>

</html>