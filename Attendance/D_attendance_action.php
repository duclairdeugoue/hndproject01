<?php include './database_connection.php'; ?>
<?php session_start(); ?>
<?php
function GetTotalRecords($connection,$table_name)
{
    global $connect;
    $query = "SELECT * from ".$table_name. "where speclevel = ".$_SESSION['spec_and_level']."";
    $statement = $connect->prepare($query);
    $statement->execute();
    $total_records = $statement->rowCount();

    return $total_records;
}

if (isset($_POST["action"])) {
    if ($_POST["action"] == "fetch") {

        $i = 1;
        $query =
            "SELECT distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,specialities.speciality_name,levels.level_id 
            from persons,students,specialities,levels,specialities_levels 
            where persons.id_person=students.id_person 
            and students.speclevel = specialities_levels.speclevel 
            and specialities.speciality_id = specialities_levels.speciality_id 
            and specialities_levels.level_id = levels.level_id
            and specialities_levels.speclevel = '" . $_SESSION['spec_and_level'] . "'
            and (
            ";
        //Searching
        if (isset($_POST["search"]["value"])) {
            $query .=
            'persons.name like "%'.$_POST["search"]["value"].'%"
             OR persons.surname like "%'.$_POST["search"]["value"].'%"
             OR students.matricule like "%'.$_POST["search"]["value"].'%")

            ';

        }
        //ordering by user
        if(isset($_POST["order"])){
            $query .= 
            'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].'
            ';
        }
        //ordering by default
        else{
            $query .= 
            'ORDER BY students.matricule DESC
             
            ';
        }

        //Pagination
        if($_POST["length"] != -1){
            $query .= 'LIMIT'.$_POS['start'].',' . $_POST['length'];
        }

        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();

        foreach ($result as $student_record) {

            $subArray[] = array();

            $subArray[] = $student_record['name'];
            $subArray[] = $student_record['surname'];
            $subArray[] = $student_record['sex'];
            $subArray[] = $student_record['date_of_birth'];
            $subArray[] = $student_record['matricule'];

            $data[]  = $subArray;
        }
        $output = array(
            "draw"                  => intval($_POST["draw"]),
            "recordsTotal"          => $filtered_rows,
            "recordsFiltered"       => GetTotalRecords($connect,'students'),
            "data"                  => $data
        );

        echo json_encode($output);
    }
}



?>