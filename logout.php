<?php
    unset($_SESSION["pwd"]);
    unset($_SESSION["uname"]);
    $_SESSION['user_is_logged_in'] = false;

    session_destroy();
    header('location: index.php');
?>
