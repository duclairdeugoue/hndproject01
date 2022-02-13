<?php
include './includes/connection1.php';


function returnSpecialityNameAndLevel()
{
    global $con;
    // using the specLevel of the delegate to return his speciality name and level
    //Query
    $query  = "SELECT s.speciality_name,l.level_id, sl.speciality_id,sl.speclevel
               FROM specialities_levels sl,levels l,specialities s 
               WHERE s.speciality_id = sl.speciality_id 
               AND l.level_id = sl.level_id 
               AND sl.speclevel = " . $_SESSION['spec_and_level'] . "";

    //run query 
    $result = mysqli_query($con, $query);
    //Result check
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $specialityName  = strtoupper($row['speciality_name']);
            $level  = $row['level_id'];
            $_SESSION['specLevelID'] = $row['speclevel'];

            // echo " Welcome ".$_SESSION['duname']." and Speciality and level has id ".$_SESSION['specLevelID']; 

        }
    } else {
        echo "Speciality name and level doesnot exist";
    }
    echo "  <p id='title-message' class='h4 text-secondary text-center' style = 'font-weight : bold;'>LIST OF 
         " . $specialityName . " " . $level . " STUDENTS</p>";
}
function returnSpecialityCourses()
{
}

function displayAttendance()
{
    global $con;
    $value = "";
    $value =  "<table class='table table-bordered p-3 m-3' id='dataTable' width='100%' cellspacing='0'>
        <thead>
            <tr>
                <th>No</th>
                <th>Matricule</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Sex</th>
                <th class='text-center'> Present </th>
                <th class='text-center'> Absent </th>
            </tr>
        </thead>
        <tbody>";

    $value .= '';

    $i = 1;
    $query = "SELECT distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth,students.matricule 
              FROM persons,students 
              WHERE persons.id_person=students.id_person
              AND speclevel =" . $_SESSION['specLevelID'] . "";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        // take note about this dot near the equalsign,they should be together
        $value .= "<tr>
                    <td>" . $i . "</td>
                    <td>" . $row["matricule"] . "<input type = hidden ></td>
                    <td>" . $row["name"] . "  " .  $row["surname"] . "</td>
                    <td>" . $row["date_of_birth"] . "</td>
                    <td>" . $row["sex"] . "</td>
                    
                    <td class='text-center'><input name = attendance_status" . $row['matricule'] . " type = 'radio' value = 'present' class = 'form-control text-success' ></td>
                    <td class='text-center'><input name = attendance_status" . $row['matricule'] . " type = 'radio' value = 'absent' class = 'form-control text-danger'  ></td>
                </tr>";

        $i = $i + 1;
    }
    // take note about this dot near the equalsign,they should be together

    // echo "<script> alert('Working'); </script>";

    $value .= "   </tbody>
    </table>";
    echo "<div class = 'container'>" . $value . "</div>";
}
?>