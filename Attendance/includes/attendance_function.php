<?php
include './includes/connection1.php';
session_start();


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
// function returnSpecialityCourses()
// {
// }

function displaySpecialityStudentList()
{
?>
    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="1">
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
        <tbody>
            <?php
            global $con;
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
                echo '<tr>
                <td>' . $i . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['surname'] . '</td>
                <td>' . $row['sex'] . '</td>
                <td>' . $row['date_of_birth'] . '</td>
                <td>' . $row['matricule'] . '</td>
                
            </tr>';
                $i = $i + 1;
            }

            ?>
        </tbody>
    </table>
<?php
}

function currentDate()
{
    $currentDay = date("d");
    $currentMonth = date("m");
    $currentYear = date("Y");
    $currentDate = $currentYear . "-" . $currentMonth . "-" . $currentDay;

    return $currentDate;
}

function returnSpecialityID()
{
    global $link;
    $query = "SELECT speciality_id from specialities_levels where speclevel = " . $_SESSION['spec_and_level'] . "";
    $result = mysqli_query($link, $query);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $specialityID = $row["speciality_id"];
        }
        return $specialityID;
    }
}


function returnCourseID()
{
    global $link;
    $specID =  returnSpecialityID();
    $query = "SELECT id_course from specialities_courses where specialites_courses.speciality = " . $specID . " ";
    $result = mysqli_query($link, $query);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $courseID = $row["id_course"];
        }
        return $courseID;
    }
}



function getCourseID($courseTitle)
{
    global $con;

    $query  = "SELECT courses.id_course FROM `courses` WHERE title = '$courseTitle'";
    $result = mysqli_query($con, $query);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount <= 0) {
        return false;
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $getCID = $row["id_course"];
        }
        return $getCID;
    }
}


function dailyAttendanceCount()
{

    global $con;

    $query = "SELECT attendance_details.attendance_detail_id,attendance_details.speclevel,attendance_details.date
    from attendance_details
    where attendance_details.date = CURRENT_DATE
    and attendance_details.speclevel = " . $_SESSION['spec_and_level'] . "";


    $result = mysqli_query($con, $query);
    $rowCount = mysqli_num_rows($result);

    if($rowCount == 0 || $rowCount == 1 || $rowCount == 2){
        return false;
    }
    elseif($rowCount == 3){
        return true;
    }
}
?>