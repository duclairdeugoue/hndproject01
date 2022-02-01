<?php

if(!isset($_SESSION['suser_is_logged_in']) || !$_SESSION['sauname'])
{
    header('location:../index.php');
    exit;
}
?>