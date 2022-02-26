<?php session_start(); ?>
<?php //include './database_connection.php'; ?>
<?php include './includes/connection1.php'; ?>


<?php

if ($_POST['action'] == "fetchStudentList") {
    $data = "";
    $data .= "<table class='table table-striped table-bordered' id='delegate_student_list_view' width='100%' cellspacing='1'>

    <thead>
        <tr>
            <td>N°</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Sex</td>
            <td>Date of birth</td>
            <td>Matricule</td>
        </tr>
    </thead>
    <tbody>";

    $i = 1;
    $query = "SELECT distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,specialities.speciality_name,levels.level_id 
              from persons,students,specialities,levels,specialities_levels 
              where persons.id_person=students.id_person 
              and students.speclevel = specialities_levels.speclevel 
              and specialities.speciality_id = specialities_levels.speciality_id 
              and specialities_levels.level_id = levels.level_id
              and specialities_levels.speclevel = " . $_SESSION['spec_and_level'] . "";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "Please check your Query";
    }
    while ($row = mysqli_fetch_assoc($result)) {
        // take note about this dot near the equalsign,they should be together
        $data .= '<tr>
            <td>' . $i . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['surname'] . '</td>
            <td>' . $row['sex'] . '</td>
            <td>' . $row['date_of_birth'] . '</td>
            <td>' . $row['matricule'] . '</td>
            
        </tr>';
        $i = $i + 1;
    }
    $data .= "</tbody></table>";
}
echo json_encode(["status" => "success", "html" => $data]);

?>


   