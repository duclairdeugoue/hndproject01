<?php
    
    $con = mysqli_connect('localhost','Doubled','123','school_management');
    if(!$con)
    {
        die('Please check your connection' . mysqli_error());
    }
?>