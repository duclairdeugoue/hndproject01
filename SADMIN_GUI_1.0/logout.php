<?php
require_once("./includes/connection1.php");
$_SESSION['user_is_logged_in'] = false;
unset($_SESSION["pwd"]);
unset($_SESSION["uname"]);
session_destroy();
mysqli_close($con);
header('location: index.php');
exit;

    // include('../HND%20PROJECT%20DEMO')
?>