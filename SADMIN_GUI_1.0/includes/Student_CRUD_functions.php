<?php

require_once('../includes/connection2.php');

//Insert Record Function
function InsertStudent_Record()
{
    global $conn;
    $sname = $_POST['SName'];
    $ssname = $_POST['SSname'];
    $sDOB = $_POST['SDOB'];
    $ssexe = $_POST['SSex'];
    $sfxn = $_POST['Sfxns'];
    $sdepartment = $_POST['Sdepartment'];
    $sspeciality = $_POST['Sspeciality'];
    $slevel = $_POST['Slevel'];
    // $amatricule = $_POST['Amatricule'];

    // echo $aname,$asname,$aDOB,$asexe,$amatricule,$fxn;
    $query = "insert into persons(name,surname,sex,date_of_birth,person_type) values ('$sname','$ssname','$ssexe','$sDOB','2')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $person_id = mysqli_insert_id($conn);
        
        $query = "insert into students(level,speciality,Department,id_person,function) values ('$slevel','$sspeciality','$sdepartment','$person_id','$sfxn')";
        $result = mysqli_query($conn,$query);


        if (!$result) {
            echo 'please check your query';
        } else {
            echo 'Your record has been successfuly entered into our Database';
        }
    }
    else{
        echo 'Please check your informations';
    }
}
// To count the number of student present in the DB
function Student_count(){
    global $con;
    $i= 0; 
    $query = "SELECT matricule FROM `lecturers` WHERE 1"; 
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) { 
         $i+=1;
       } 
       echo "<script>$('#stud_count').html('<html>".$i."</html>');</script>";
}

// Display student record

function display_student_record()
{
    global $con;
    $i = 1;
    $value = "";
    $value = '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>N°</td>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>Sex</td>
                        <td>Date of birth</td>
                        <td>Matricule</td>
                        <td>Speciality</td>
                        <td>level</td>
                        <td class="text-center"> Edit </td>
                        <td class="text-center"> Delete </td>
                    </tr>
                </thead>';
    $query = "select distinct persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,students.speciality,students.level from persons,students where persons.id_person=students.id_person";
    $result = mysqli_query($con,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        // take note about this dot near the equalsign,they should be together
        $value.= '<tr>
                    // <td>.$i.</td>
                    <td>'.$row['name'] .'</td>
                    <td>'.$row['surname'] .'</td>
                    <td>'.$row['sex'] .'</td>
                    <td>'.$row['date_of_birth'] .'</td>
                    <td>'.$row['matricule'] .'</td>
                    <td>'.$row['speciality'] .'</td>
                    <td>'.$row['level'] .'</td>
                    <td class="text-center"><button class="btn btn-success " id="btn_edit_student" data-id ='.$row['id_person'].'><span class ="fa fa-edit"></span></button></td>
                    <td class="text-center"><button class="btn btn-danger" id="btn_delete_student" data-id1 ='.$row['id_person'].'><span class ="fa fa-trash"></span></button></td>
                 </tr>';
        // $i = $i+1;
    }
    // take note about this dot near the equalsign,they should be together
    $value.= '</table>';
    //  
    echo json_encode(['status'=>'success','html'=>$value]);
    // echo json_encode([status:"success", html:$value]);
}

