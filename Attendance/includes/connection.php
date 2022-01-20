<?php

    $con = mysqli_connect('localhost','Doubled','123','software');
    if(!$con)
    {
        die('Please check your connection' . mysqli_error());
    }
?>