<?php
session_start();
include "./includes/connection1.php";

global $con;
$idstudent = $_SESSION['id'];
$query = "SELECT speclevel,function from students where id_person = '$idstudent' AND function = 'Delegate'";
$result = mysqli_query($con,$query);
$function = -1;
if ($result) {
    
    while($row = mysqli_fetch_assoc($result))
    {
        $function = $row["function"];
        $speciality_level = $row["speclevel"];
        echo $function,$speciality_level;
    }
        
    if($function == "Delegate"){
        $_SESSION["spec_and_level"] = $speciality_level;
        header('location: Attendance/D_index.php');
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
