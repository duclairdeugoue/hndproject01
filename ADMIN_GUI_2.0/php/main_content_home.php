<div id="content" class="bg-light">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800 p-2">Dashboard</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Begin Page Content -->
    <div class="container ">
        <!-- Content Row -->
        <div class="row">

            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4"  href = "./daily_attendance.php">
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
                                <span class="">Daily Attendance</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1"><?php echo dailyAttendanceCount(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="./weekly_attendance.php">
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
                                <span class="">Weekly Attendance</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1">7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="./monthly_attendance.php">
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
                                <span class="">Monthly Attendance</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1">10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card Example -->
            <a class=" dropdown-item col-xl-3 col-md-6 mb-4" href="./yearlyAttendance.php">
                <div class="align-items-center">
                    <div class="card border-left-warning shadow h-100 pt-3 align-items-center">
                        <div class="card-body ">
                            <div class=" container-fluid no-gutters ">
                                <i class="fab fa-paypal fa-3x text-primary"></i>
                            </div>
                        </div>
                        <div class="card-footer container-fluid">
                            <div class="text-xs font-weight-bold no-gutters  text-uppercase d-flex justify-content-between ">
                                <span class="">Yearly Attendance</span>
                                <span class="rounded-circle bg-secondary text-white-50 px-1">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Content Row -->


    </div>