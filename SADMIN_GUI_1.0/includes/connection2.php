<?php
    
    $conn = mysqli_connect('localhost','root','','school_management');
    if(!$conn)
    {
        die('Please check your connection' . mysqli_connect_error());
    }
?>