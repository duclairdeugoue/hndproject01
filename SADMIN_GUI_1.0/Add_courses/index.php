<?php //header('location:../index.php');?>
    <!-- <div class="row">
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
    </div> -->
    <div class="modal fade" id="Course_Registration">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="">Course Registration </h1>
                </div>
                <div class="modal-body">
                    <p id="Cmessage"></p>
                    <form class="">
                        <!-- <input type="text" class="form-control my-2" placeholder="Enter course code" id="Coursecode"> -->
                        <input type="text" class="form-control my-2" placeholder="Enter course title" id="Coursetitle">
                        <input type="text" class="form-control my-2" placeholder="Course credits" id="Coursecredit">
                        <input type="text" class="form-control my-2" placeholder="Code of speciality" id="Specialitycode">
                        <input type="text" class="form-control my-2" placeholder="Speciality of course" id="Coursespeciality">
                        <input type="text" class="form-control my-2" placeholder="For level" id="Courselevel">
                        <input type="text" class="form-control my-2" placeholder="Preview of course" id="Course_outline">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn_course_register">Register Now</button>
                    <button type="button" class="btn btn-danger" id="btn_close" data-dismiss="modal">Close</button>
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
                    <button type="button" class="btn btn-success" id="btn_Update">Update  Now</button>
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
    </div>
-->