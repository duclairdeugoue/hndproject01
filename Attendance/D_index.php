<?php 
session_start();
include '../includes/d_loginCheck.php';
include './includes/headerLInks.php' ;
include './database_connection.php';
?>
<title>Student Attendance</title>
</head>
<body>
    

<div class="landingContent">
    <img src="./img/dark-mode-05.jpg" class="landingImage" alt="">
    <div class="bg"></div>
    <div class="landingMessage">
        <div class="">
            <span class="border-none"><img src="./img/undraw_profile_2.svg" alt="" class="rounded-circle landingLogo"></span>
        </div>
        <div class="">
            <h1 class="text-white text-responsive">Welcome <?php echo $_SESSION['duname'];?></h1>
            <p class="text-warning" id="returnAttenanceCheckMsg"></p>
        </div>
        <div class="">
            <a class="btn btn-success btn-responsive mt-3 px-2 py-2" href="" id="getAttendanceStatus"></a>
        </div>
    </div>


</div>

<?php  include './includes/footerLinks.php';?>

</body>

</html>