<?php include '../includes/connection1.php'; ?>
<?php

function insertSpecialityRecord()
{
    global $con;
    $specialtyName  = strtolower($_POST['Specname']);
    $departmentID  = $_POST['depID'];

    //check if speciality exist
    $query = "SELECT department_id FROM departments WHERE department_id = '$departmentID'";
    $result = mysqli_query($con,$query);

    $row = mysqli_num_rows($result);
    if($row <= 0)
    {
        echo "<script>$('#message_y').html('Department id does not exit in our database check your information');</script>";

    }
    else
    {
        $query  = "INSERT INTO specialities(speciality_name,department_id) VALUES ('$specialtyName','$departmentID')";
        $result = mysqli_query($con,$query);

        if(!$result){
            echo "Please check out your query";
        }
        else{
            echo "<h3 class = 'text-bold text-success'>Your record has been successfuly entered into our Database</h3>";
        }
    }
}


function specialityCount()
{
    global $con;
    $i= 0; 
    $query = "SELECT speciality_id FROM `specialities` WHERE 1"; 
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) { 
         $i+=1;
       } 
       echo "<script>$('#speciality_count').html('<html>".$i."</html>');</script>";
}
?>