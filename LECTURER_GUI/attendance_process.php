<?php
    // require('./LECTURER_GUI/includes/connection2.php');
// Diplay data function

function display_attendance_list_record()
{
    global $con;
    $speciality_select = $_POST['SName'];
    $level_select = $_POST['LSelect'];
    $course_select = $_POST['CName'];
    $session_select = $_POST['Sselect'];
    $period_select = $_POST['Pselect'];

    
    $value = "";
    $value = '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <theader> LIST OF '. $speciality_select .' Students </theader>
                <tr>
                    <td>Matricule</td>
                    <td>Name</td>
                    <td>Speciality</td>
                    <td>Sex</td>
                    <td class="text-center"> Present </td>
                    <td class="text-center"> Absent </td>
                </tr>';
                $i = 1;
                $query = "select distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,students.speciality,students.level from persons,students where persons.id_person=students.id_person";
                $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        // take note about this dot near the equalsign,they should be together
        $value.= '<tr>
                    <td>' . $i . '</td>
                    <td>' . $row['matricule'] . '</td>
                    <td>' . $row['name'] . '  '.  $row['surname'] . '</td>
                    <td>' . $row['speciality'] . $row['level'] .'</td>
                    <td>' . $row['date_of_birth'] . '</td>
                    <td>' . $row['sex'] . '</td>
                    <td class="text-center"><button class="btn btn-success " id="btn_edit" data-id ='.$row['matricule'].'><span class ="fa fa-edit"></span></button></td>
                    <td class="text-center"><button class="btn btn-danger" id="btn_delete" data-id1 ='.$row['matricule'].'><span class ="fa fa-trash"></span></button></td>
                 </tr>';

                 $i = $i + 1;
    }
    // take note about this dot near the equalsign,they should be together
    $value.= '</table>';
    //  
    echo $value;
    // echo json_encode(['status'=>'success','html'=>$value]);
    // echo json_encode({status:"success", html:$value});
}
?>

<!-- <div class="" id="table_student_display">
                                <h1 class="text-center"></h1>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    </thead>
                                    <tbody>
                                        <?php
                                        // global $con;
                                        // $speciality_type = $_POST['speciality'];
                                        // $level_type = $_POST['level'];
                                        // $course = $_POST['course'];
                                        // $session_type = $_POST['session'];
                                        // $period_type = $_POST['period'];

                                        // $i = 1;
                                        // $query = "select distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth, students.matricule,students.speciality,students.level from persons,students where persons.id_person=students.id_person";
                                        // $result = mysqli_query($con, $query);

                                        // while ($row = mysqli_fetch_assoc($result)) {
                                             //take note about this dot near the equalsign,they should be together
                                //             echo '<tr>
                                //     <td>' . $i . '</td>
                                //     <td>' . $row['name'] . '</td>
                                //     <td>' . $row['surname'] . '</td>
                                //     <td>' . $row['sex'] . '</td>
                                //     <td>' . $row['date_of_birth'] . '</td>
                                //     <td>' . $row['matricule'] . '</td>
                                //     <td>' . $row['speciality'] . '</td>
                                //     <td>' . $row['level'] . '</td>
                                //     <td class="text-center"><button class="btn btn-success " id="btn_edit_student" data-id =' . $row['id_person'] . '><span class ="fa fa-edit"></span></button></td>
                                //     <td class="text-center"><button class="btn btn-danger" id="btn_delete_student" data-id1 =' . $row['id_person'] . '><span class ="fa fa-trash"></span></button></td>
                                // </tr>';
                                //             $i = $i + 1;
                                        // }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> 