<?php
// Database connection

$connect = new PDO("mysql:host = localhost,dbname = school_attendance","root","");

if(!$connect){
    echo 'Please check your connnection';
}
?>