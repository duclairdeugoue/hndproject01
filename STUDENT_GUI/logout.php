
<?php

$_SESSION['user_is_logged_in'] = false;
session_destroy();
header('location: index.php');
// include('../HND%20PROJECT%20DEMO')
?>