<?php

if(!isset($_SESSION['duser_is_logged_in']) || !$_SESSION['duname'])
{
    header('location:../index.php');
    exit;
}
?>