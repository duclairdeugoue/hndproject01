<?php
require_once("./includes/connection1.php");
$_SESSION['auser_is_logged_in'] = false;

unset($_SESSION["apwd"]);
unset($_SESSION["auname"]);

session_destroy();

mysqli_close($con);

header('location: index.php');
exit;

    
?>