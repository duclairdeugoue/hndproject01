<?php

if(!isset($_SESSION['user_is_logged_in']) || !$_SESSION['uname'])
{
    header('location:../index.php');
    exit;
}
?>