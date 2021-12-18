<!-- <div class="container-fluid">
    <div class="col">
        <div class="card mt-5">
            <div class="card-title my-2 ml-5">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registration">Add New User </button> 
            </div>
            <div class="card-body">
                <p id="delete-message"></p>
                <div class="" id="table_display"></div>
            </div>
        </div>
    </div>
</div>  -->

    <!-- Add Admin Modals-insert_modal -->
    <div class="modal fade" id="Addstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add A New Student</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="message_2"></p>
                    <form action="" class="form needs-validation">
                        <div class="d-flex row">
                            <div class="form-group col-sm-6">
                                <label for="sname">Name :</label>
                                <input type="text" class="form-control" placeholder="Enter Student Name" id="sname">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ssname">Surname :</label>
                                <input type="text" class="form-control" placeholder="Enter Student Surname" id="ssname">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="d-flex row">
                            <div class="form-group col-sm-4">
                                <label for="sDOB">Date Of Birth :</label>
                                <input type="date" class="form-control" placeholder="Enter the DOB" id="sDOB">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="ssexe">Sexe :</label>
                                <select class="form-control" id="ssexe" value ="Male" >
                                    <option value="Male">M</option>
                                    <option value="Female">F</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="sfxn">Function :</label>
                                <input type="text" class="form-control" placeholder="Enter function" id="sfxn">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                <!-- <label for="amatricule">Matricule :</label>
                            <input type="text" class="form-control" placeholder="Enter Matricule" id="amatricule"  >
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                            </div>
                        </div>
                        <div class="d-flex row">
                            <div class="form-group col-sm-6">
                                <label for="sdepartment">Department:</label>
                                <select class="form-control" id="sdepartment" value="CE">
                                    <option value="CE">Computer Engineering</option>
                                    <option value="ACT">Accounting</option>
                                    <option value="BNF">Banking and Finance</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="sspeciality">Speciality</label>
                                <select class="form-control" id="sspeciality" value="SWE">
                                    <option value="SWE">Software Engineering</option>
                                    <option value="NWS">Network and Security</option>
                                    <option value="TEL">Telecomunication</option>
                                    <option value="ACC">Accounting</option>
                                </select>
                                <!-- <input type="text" class="form-control" placeholder="Enter the context of the task" id="nature" name="nature" > -->
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="slevel">Level:</label>
                                <select class="form-control" id="slevel" value="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                <!-- <label for="amatricule">Matricule :</label>
                            <input type="text" class="form-control" placeholder="Enter Matricule" id="amatricule"  >
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <button type="button" class="btn btn-success" id="btn_add_student">Add Student</button>
                            <button type="button" data-dismiss="modal" id="btn_close" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

<!-- Update Modal -->
<!-- <div class="modal fade" id="Update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="">Update Form</h1>
            </div>
            <div class="modal-body">
                <p id="up-message"></p>
                <form class="">
                    <input type="hidden" class="form-control my-2" placeholder="User-Email" id="Up_User_ID">
                    <input type="text" class="form-control my-2" placeholder="User-Name" id="Up_UserName">
                    <input type="email" class="form-control my-2" placeholder="User-Email" id="Up_UserEmail">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_Update">Update Now</button>
                <button type="button" class="btn btn-danger" id="btn_close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->

<!-- Delete Modal -->
<!-- <div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="">Delete Record</h1>
            </div>
            <div class="modal-body">

                <p>Do you Want To Delete the Record ?</p>
                <button type="button" class="btn btn-success" id="btn_delete_record">Delete Now</button>
                <button type="button" class="btn btn-danger" id="btn_close" data-dismiss="modal">Close</button>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div> -->
