<script>
    // alert('Logout.php');
</script>
<?php
$_SESSION['user_is_logged_in'] = false;
unset($_SESSION["pwd"]);
unset($_SESSION["uname"]);
session_destroy();
header('location: index.php');
    // include('../HND%20PROJECT%20DEMO')
?>