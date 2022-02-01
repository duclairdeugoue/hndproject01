<?php
require_once("./includes/connection1.php");
$_SESSION['user_is_logged_in'] = false;

unset($_SESSION["sapwd"]);
unset($_SESSION["sauname"]);

session_destroy();

mysqli_close($con);

header('location: index.php');
exit;

    
?>