<div id="content" class="bg-light">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" data-toggle="modal" data-target="#Display_speciality">
                <div class=" align-items-center">
                    <div class="card border-left-primary shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fas fa-user fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Specialities</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1" id="speciality_count">
                                    <?php
                                    global $con;
                                    $i = 0;
                                    $query = "SELECT speciality_id FROM `specialities` WHERE 1";
                                    $result = mysqli_query($con, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $i += 1;
                                    }
                                    echo $i;

                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="#" data-toggle="modal" data-target="#newtask">
                <div class="align-items-center">
                    <div class="card border-left-danger shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fas fa-user fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid ">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Clubs</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1">7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="#" data-toggle="modal" data-target="#newtask">
                <div class="align-items-center">
                    <div class="card border-left-info shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fas fa-warehouse fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Internship</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1">103</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="#" data-toggle="modal" data-target="#newtask">
                <div class="align-items-center">
                    <div class="card border-left-warning shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fab fa-paypal fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Payments</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Content Row -->

        <div class="row">
            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" data-backdrop="static" data-toggle="modal" href="#Addstudent">
                <div class="align-items-center">
                    <div class="card border-left-primary shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fas fa-book fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Add Student</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1" id="stud_count">
                                    <?php
                                    global $con;
                                    $i = 0;
                                    $query = "SELECT matricule FROM `students` WHERE 1";
                                    $result = mysqli_query($con,$query);
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $i += 1;
                                    }
                                    echo $i;

                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="#AddLecturer" data-backdrop="static" data-toggle="modal">
                <div class="align-items-center">
                    <div class="card border-left-danger shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Add Lecturer</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1 " id="lec_count">
                                    <?php
                                        global $con;
                                        $i = 0;
                                        $query = "SELECT matricule FROM `lecturers` WHERE 1";
                                        $result = mysqli_query($con,$query);
                                        while ($row = mysqli_fetch_assoc($result)) {

                                        $i += 1;
                                    }
                                    echo $i;

                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card Example New Task -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" data-backdrop="static" data-toggle="modal" href="#AddAdmin">
                <!-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> -->
                <div class="align-items-center  ">
                    <div class="card border-left-info shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fas fa-tasks fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Add Admin</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1" id="admin_count">
                                <?php
                                        global $con;
                                        $i = 0;
                                        $query = "SELECT code FROM `admins` WHERE 1";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {

                                        $i += 1;
                                    }
                                    echo $i;

                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="#Course_Registration" data-backdrop="static" data-toggle="modal">
                <div class="align-items-center">
                    <div class="card border-left-warning shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fas fa-user fa-3x text-primary"></i>
                            </div>
                            <!-- <div class="h6 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Add Course</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1" id="Course_count">
                                <?php
                                        global $con;
                                        $i = 0;
                                        $query = "SELECT id_course FROM `courses` WHERE 1";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {

                                        $i += 1;
                                    }
                                    echo $i;

                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>