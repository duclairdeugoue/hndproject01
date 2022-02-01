<?php
session_start();
require '../includes/l_loginCheck.php';
include "headerLinks.php";



?>

    <title>Dashboard</title>
</head>
<body>
    
    <?php
    //  Topbar 
    require('../php/l_header.php');
    // End of Topbar

    ?>
<div class="container-fluid">

    <div class="row">
        <h1 class="col-sm-6">Welcome <?php  echo  $_SESSION['luname'];  ?></h1>
        <h1 class="col-sm-6 text-right "> <i>
            <?php 
                $current_date = date('j F Y');
                echo  "Today is the " . $current_date; ?> </i></h1>

    </div>
    <div class="container">
        <div class="row ">
            <ul class="nav mx-auto my-3">
                <li class="nav-item"><a href="#" class="nav-link btn btn-primary active m-2">Dashboard</a></li>
                <li class="nav-item"><a href="attendance.php" class="nav-link btn btn-dark m-2">Attendance</a></li>
                <li class="nav-item"><a class="nav-link btn btn-dark disabled m-2">Tutorials</a></li>
                <li class="nav-item"><a class="nav-link btn btn-dark disabled m-2">Practicals</a></li>
                <li class="nav-item"><a class="nav-link btn btn-dark disabled m-2">Others</a></li>
            </ul>
        </div>
        
    </div>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio laboriosam, accusantium ratione minus laudantium delectus asperiores, facere quis deserunt voluptatem repellat nulla sequi veniam eos nostrum nemo voluptatum saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nobis rem ut deserunt! Libero dicta pariatur nisi, veritatis rem quasi eius delectus neque error enim dignissimos doloremque officia magnam sequi?
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio laboriosam, accusantium ratione minus laudantium delectus asperiores, facere quis deserunt voluptatem repellat nulla sequi veniam eos nostrum nemo voluptatum saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nobis rem ut deserunt! Libero dicta pariatur nisi, veritatis rem quasi eius delectus neque error enim dignissimos doloremque officia magnam sequi?
    </p>
    
</div>
<?php  include('./php/modals.php');  // End of of Main content?>


<?php include "footerLinks.php"?>
</body>
</html>