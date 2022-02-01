
<?php 
session_start();
include "headerLinks.php"; 
?>

<title>attendanceprocess</title>
</head>
<body>
    

<?php 

    if(isset($_POST['search_now'])){
        global $con;
        $speciality_select  = $_POST['speciality'];
        $level_select = $_POST['level'];
        $course_select = $_POST['course'];
        $session_select = $_POST['session'];
        $period_select = $_POST['period'];
        
        echo $speciality_select . $level_select . $course_select . $session_select . $period_select;
        // include('./display_attendance_record.php');

        echo "  <p id='title-message' class='h4 text-info text-center'>List of ".$speciality_select." students</p>";
        // <div class="row" id="table_display_attendance"> -->
        $value = "";
        $value =  "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Matricule</th>
                    <th>Name</th>
                    <th>Speciality</th>
                    <th>Date of Birth</th>
                    <th>Sex</th>
                    <th class='text-center'> Present </th>
                    <th class='text-center'> Absent </th>
                </tr>
            </thead>
            <tbody>";

            // and students.speciality = $speciality_select AND students.level = $level_select
                
                $value .= '';

                $i = 1;
                $query = "SELECT distinct persons.id_person,persons.name,persons.surname,persons.sex,persons.date_of_birth,students.matricule,students.speciality,students.level from persons,students where persons.id_person=students.id_person and students.level = '$level_select' ";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    // take note about this dot near the equalsign,they should be together
                    $value .= "<tr>
                                <td>" . $i . "</td>
                                <td>" . $row["matricule"] . "</td>
                                <td>" . $row["name"] . "  " .  $row["surname"] . "</td>
                                <td>" . $row["speciality"] . $row["level"] . "</td>
                                <td>" . $row["date_of_birth"] . "</td>
                                <td>" . $row["sex"] . "</td>
                                <td class='text-center'><button class='btn btn-success ' id='btn_edit' data-id =" . $row["matricule"] . "><span class ='bi bi-check'></span></button></td>
                                <td class='text-center'><button class='btn btn-danger' id='btn_delete' data-id1 =" . $row["matricule"] . "><span class ='bi bi-x'></span></button></td>
                            </tr>";

                    $i = $i + 1;
                }
                // take note about this dot near the equalsign,they should be together
                
                // echo "<script> alert('Working'); </script>";
            
            $value .="   </tbody>
        </table>";
        // echo $value;
    }


?>

<?php include "footerLinks.php"; ?>

</body>

</html>