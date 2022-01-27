<!-- <div class="container-fluid">
    <div class="col">
        <div class="card mt-5">
            <div class="card-title my-2 ml-5">
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registration">Add New User </button> -->
            <!-- </div>
            <div class="card-body">
                <p id="delete-message"></p>
                <div class="" id="table_display"></div>
            </div>
        </div>
    </div>
</div> --> -->

    <!-- Add Admin Modals-insert_modal -->
    <div class="modal fade" id="AddAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add A New Admin</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="message_1"></p>
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
