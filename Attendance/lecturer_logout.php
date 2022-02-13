<script>
    // alert('Logout.php');
</script>
<?php
    $_SESSION['luser_is_logged_in'] = false;
    unset($_SESSION["lpwd"]);
    unset($_SESSION["luname"]);
    session_destroy();
    header('location: index.php');
    // include('../HND%20PROJECT%20DEMO')
?>