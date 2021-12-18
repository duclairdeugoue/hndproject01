<?php
    
    $conn = mysqli_connect('localhost','Doubled','123','school_management');
    if(!$conn)
    {
        die('Please check your connection' . mysqli_error());
    }
?>