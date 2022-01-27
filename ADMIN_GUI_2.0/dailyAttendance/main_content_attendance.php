<div id="content" class="bg-light">
    <div class="d-sm-flex align-items-center justify-content-between container-fluid">
        <h1 class="h3 mb-0 text-gray-800 p-2">Daily Attendance</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report Now
        </a>
    </div>

    <div class="card-columns container">
        <div class='card py-3 my-3 border-left-danger shadow '>
            <div class='card-body'>
                <div class="row">
                    <div class="col">
                        <h4 class='card-title text-danger'>Pending Attendance</h4>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-300 text-danger"></i>
                    </div>

                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10%</div>
                    </div>
                    <div class="col">
                        <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <!-- <p class='card-text'>Text</p> -->
            </div>

        </div>
        <div class='card py-3 my-3 border-left-warning shadow '>
            <div class='card-body'>
                <div class="row">
                    <div class="col">
                        <h4 class='card-title text-warning'>In process Attendance</h4>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-300 text-warning"></i>
                    </div>

                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">40%</div>
                    </div>
                    <div class="col">
                        <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <!-- <p class='card-text'>Text</p> -->
            </div>

        </div>
        <div class='card py-3 my-3 border-left-success shadow '>
            <div class='card-body'>
                <div class="row">
                    <div class="col">
                        <h4 class='card-title text-success'>Complete Attendance</h4>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-300 text-success"></i>
                    </div>

                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                    </div>
                    <div class="col">
                        <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <!-- <p class='card-text'>Text</p> -->
            </div>

        </div>
        
    </div>
    <div class="container-fluid">
        <?php dailySpecialityList(); ?>

    </div>