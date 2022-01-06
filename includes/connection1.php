<?php
    
    $con = mysqli_connect('localhost','root','','school_management');
    if(!$con)
    {
        die('Please check your connection' . mysqli_connect_error());
    }
    
?>