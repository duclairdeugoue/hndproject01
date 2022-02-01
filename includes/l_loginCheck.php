<?php

if(!isset($_SESSION['luser_is_logged_in']) || !$_SESSION['luname'])
{
    header('location:../index.php');
    exit;
}
?>