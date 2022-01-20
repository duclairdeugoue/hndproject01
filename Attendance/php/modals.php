<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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



    <!-- Add Admin Modals-insert_modal -->
    <div class="modal fade" id="AddAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add A New Admin</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
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

    <!-- Add Course Modals-insert_modal -->
   


</body>

</html>