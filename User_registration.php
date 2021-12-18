    <div class="container-fluid">
        <div class="">
            <div class="card mt-5">
                <div class="card-title my-2 ml-5">
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registration">Add New User </button> -->
                </div>
                <div class="card-body">
                    <p id="delete-message"></p>
                    <div class="" id="table_display"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Registration">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="">Registration Form</h1>
                </div>
                <div class="modal-body">
                    <p id="message"></p>
                    <form class="">
                        <input type="text" class="form-control my-2" placeholder="User-Name" id="UserName">
                        <input type="email" class="form-control my-2" placeholder="User-Email" id="UserEmail">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn_register">Register Now</button>
                    <button type="button" class="btn btn-danger" id="btn_close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="Update">
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
                    <button type="button" class="btn btn-success" id="btn_Update">Update  Now</button>
                    <button type="button" class="btn btn-danger" id="btn_close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete">
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
    </div>
    <!-- Button to Open the Modal -->
    