<?php

    $con = mysqli_connect('localhost','root','','software');
    if(!$con)
    {
        die('Please check your connection' . mysqli_connect_error());
    }
?>