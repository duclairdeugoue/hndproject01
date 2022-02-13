<script>
    // alert('Logout.php');
</script>
<?php
    $_SESSION['duser_is_logged_in'] = false;
    unset($_SESSION["dpwd"]);
    unset($_SESSION["duname"]);
    session_destroy();
    header('location: index.php');
    // include('../HND%20PROJECT%20DEMO')
?>