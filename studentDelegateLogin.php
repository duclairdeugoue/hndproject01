<?php
session_start();
include "./includes/connection1.php";

global $con;
$idstudent = $_SESSION['id'];
$query = "SELECT function from students where id_person = '$idstudent' AND function = 'Delegate'";
$result = mysqli_query($con,$query);
$function = -1;
if ($result) {
    
    while($row = mysqli_fetch_assoc($result))
    {
        $function = $row["function"];
        echo $function;
    }
        
    if($function == "Delegate"){
        header('location: Attendance/L_index.php');
        exit;
    }
    else{
        header("location: index.php");
        exit;
    }

} 
else {
    echo "Please check you query";

}

?>
