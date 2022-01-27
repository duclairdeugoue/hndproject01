<?php include '../includes/connection1.php'; ?>
<?php

function insertDepartmentRecord()
{
    global $con;
    $depName  = strtolower($_POST['DName']);
    $specName  = strtolower($_POST['SName']);

    // echo $depName . $specName;
    $query  = "INSERT INTO departments(department_name) VALUES ('$depName')";
    $result = mysqli_query($con,$query);
    
    $departmentIdReturn = mysqli_insert_id($con);

    $query = "INSERT INTO specialities(speciality_name,department_id) VALUES ('$specName',$departmentIdReturn)";
    $result = mysqli_query($con,$query);
    if(!$result){
        echo "Please check out your query";
    }
    else{
        echo "<h3 class = 'text-bold text-success'>Your record has been successfuly entered into our Database</h3>";
    }
}

function Department_count(){
    global $con;
    $i= 0; 
    $query = "SELECT department_id FROM `departments` WHERE 1"; 
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) { 
         $i+=1;
       } 
       echo "<script>$('#department_count').html('<html>".$i."</html>');</script>";
}
?>
