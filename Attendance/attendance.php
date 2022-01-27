<?php
session_start();
include "headerLinks.php"; ?>

<title>attendance</title>



<style>
    /* this style help to design the input field for the live search  */
    /* body {
            font-family: Arail, sans-serif;
        } */

    /* Formatting search box */
    .search-box,
    .search-box1 {
        /* width: 300px; */
        position: relative;
        display: inline-block;
        /* font-size: 14px; */
    }

    /* .search-box input[type="text"] {
            height: 32px;
            padding: 5px 10px;
            border: 1px solid #CCCCCC;
            font-size: 14px;
        } */

    .result,
    .result1 {
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }

    .search-box input[type="text"],
    .search-box1 input[type="text"],
    .result,
    .result1 {
        width: 100%;
        box-sizing: border-box;
    }

    /* Formatting result items */
    .result p,
    .result1 p {
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

    .result p:hover,
    .result1 p:hover {
        background: blue;
    }
</style>
<script>
    //This script help to manage the period depending on the session
    function change_session() {
        var sessiontype = document.getElementById("session").value;
        if (sessiontype == "") {
            alert('Please fill the session input');

        } else if (sessiontype == "Morning") {
            document.getElementById("period").addEventListener("click", function() {
                document.getElementById('hide').style.display = 'block';
                document.getElementById('hide1').style.display = 'block';
                document.getElementById('show1').style.display = 'none';
                document.getElementById('show2').style.display = 'none';


            });

        } else if (sessiontype == "Afternoon") {
            document.getElementById("period").addEventListener("click", function() {

                document.getElementById('show1').style.display = 'block';
                document.getElementById('show2').style.display = 'block';
                document.getElementById('hide').style.display = 'none';
                document.getElementById('hide1').style.display = 'none';

            });
        }
        return 0;

    }

    function change_period() {
        change_session();
    }
</script>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
</script>
</head>

<body onload="startTime()">


    <?php
    //  Topbar 
    require('../php/header.php');
    // End of Topbar

    ?>
    <div class="container-fluid">

        <div class="row">
            <h1 class="col-sm-6">Welcome <?php echo  $_SESSION['uname']; ?></h1>
            <h1 class="col-sm-6 text-right"><i id="txt"></i></h1>
        </div>
        <div class="container">
            <div class="row ">
                <ul class="nav mx-auto my-3">
                    <li class="nav-item"><a href="L_index.php" class="nav-link btn btn-dark  m-2">Dashboard</a></li>
                    <li class="nav-item"><a href="attendance.php" class="nav-link btn btn-primary m-2">Attendance</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-dark disabled m-2">Tutorials</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-dark disabled m-2">Practicals</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-dark disabled m-2">Others</a></li>
                </ul>
            </div>

        </div>
        <div id="wrapper">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="">
                <div class="card my-2 mx-2 ">
                    <div class="card-title my-1 ml-1">
                        <div class="card-header">
                            <p class="p-2 text-center text-danger" id="errormsg"></p>
                            <form class="form-inline d-md-flex justify-content-around" method="POST" action="attendance_process.php">
                                <div class="form-group p-2 search-box">
                                    <label for="speciality" class="text-dark">Select speciality: </label>
                                    <input type="text" autocomplete="off" class="form-control mt-2" name="speciality" id="speciality" placeholder="Search speciality..." required>
                                    <div class="result bg-secondary text-white"></div>
                                </div>
                                <div class="form-group p-2 d-inline-block">
                                    <label for="">Level: </label>
                                    <select class="form-control mt-2" id="level" name="level" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group p-2 search-box1">
                                    <label for="course">Select course: </label>
                                    <input type="text" autocomplete="off" class="form-control mt-2" name="course" id="course" placeholder="Search course..." required>
                                    <div class="result1 bg-secondary text-white"></div>
                                </div>
                                <div class="form-group p-2 d-inline-block">
                                    <label for="">Select session: </label>
                                    <select class="form-control mt-2" id="session" name="session" id="session" required>
                                        <option value=""></option>
                                        <option value="Morning">Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>
                                <div class="form-group p-2 d-inline-block">
                                    <label for="">Select period: </label>
                                    <select class="form-control mt-2" name="period" id="period" required>

                                        <option id="" value=""></option>
                                        <option id="hide" class="morn" style="display: none;" value="morningOne">08-10</option>
                                        <option id="hide1" class="morm" style="display: none;" value="morningTwo">10-12</option>
                                        <option id="show1" class="after" value="afterOne" style="display: none;">12-15</option>
                                        <option id="show2" class="after" value="afterTwo" style="display: none;">15-17</option>
                                    </select>
                                </div>
                                <div class="form-group p-2 ">
                                    <button class="btn btn-success mt-4 " id="search_now" name="search_now">Search Now</button>
                                </div>
                            </form>
                        </div>

                        <div class="card-body">



                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>
                </div>

            </div>
            <?php
            include('./php/modals.php');

            // End of of Main content
            ?>


            <?php include "footerLinks.php"; ?>
            <script>
                $(document).ready(function() {
                    $("#session").change(function () { 
                        change_session();
                    });
                    $("#period").click(function () { 
                        change_period();
                        
                    });
                    
                })
            </script>

            <script>
                // scprit to display speciality list
                $(document).ready(function() {
                    $('.search-box input[type="text"]').on("keyup input", function() {
                        /* Get input value on change */
                        var inputVal = $(this).val();
                        var resultDropdown = $(this).siblings(".result");
                        if (inputVal.length) {
                            $.get("backend-search.php", {
                                term: inputVal
                            }).done(function(data) {
                                // Display the returned data in browser
                                resultDropdown.html(data);
                            });
                        } else {
                            resultDropdown.empty();
                        }
                    });

                    // Set search input value on click of result item
                    $(document).on("click", ".result p", function() {
                        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                        $(this).parent(".result").empty();
                    });
                });
            </script>
            <script>
                // script to display speciality course list
                $(document).ready(function() {
                    $('.search-box1 input[type="text"]').on("keyup input", function() {
                        /* Get input value on change */
                        var inputVal = $(this).val();
                        var Speciality = $('#speciality').val();
                        var Level = $('#level').val();

                        var resultDropdown = $(this).siblings(".result1");
                        if (inputVal.length) {
                            $.get("backend-search1.php", {
                                term: inputVal,
                                Spt: Speciality,
                                Lvl: Level
                            }).done(function(data) {
                                // Display the returned data in browser
                                resultDropdown.html(data);
                            });
                        } else {
                            resultDropdown.empty();
                        }
                    });

                    // Set search input value on click of result item
                    $(document).on("click", ".result1 p", function() {
                        $(this).parents(".search-box1").find('input[type="text"]').val($(this).text());
                        $(this).parent(".result1").empty();
                    });
                });
            </script>

            <!-- <script src="./js/attendance.js"></script> -->


</body>

</html>