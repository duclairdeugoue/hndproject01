<?php

if(!isset($_SESSION['auser_is_logged_in']) || !$_SESSION['auname'])
{
    header('location:../index.php');
    exit;
}
?>