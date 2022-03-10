<?php session_start(); ?>
<?php //include './database_connection.php'; 
?>
<?php include './includes/connection1.php'; ?>
<?php include './includes/attendance_function.php'; ?>


<?php

if ($_POST["action"] == "checkAttendance") {
    $data = "";
    $query = "SELECT attendance_details.attendance_detail_id,attendance_details.speclevel,attendance_details.date
    from attendance_details
    where attendance_details.date = CURRENT_DATE
    and attendance_details.speclevel = " . $_SESSION['spec_and_level'] . "";


    $result = mysqli_query($con, $query);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount == 0) {
        // $currentDay = date("d");
        // $currentMonth = date("m");
        // $currentYear = date("Y");
        // $currentDate = $currentYear."-".$currentMonth."-".$currentDay;
        $data = "Start Attendance Now";
        $returnMessage = "";
        $baseURL = "./D_attendance.php";
        echo json_encode(["status" => "success", "html" => $returnMessage, "urlRedirect" => $baseURL, "returnMessage" => $data]);
    } else if ($rowCount <= 3) {
        $data = "Continue Attendance";
        $baseURL = "./D_attendance.php";
        $returnMessage = "";
        echo json_encode(["status" => "success", "html" => $returnMessage, "urlRedirect" => $baseURL, "returnMessage" => $data]);
    } else if ($rowCount == 4) {
        $data = "Daily Attendance completed";
        $baseURL  = "./delegate_logout.php";
        $returnMessage = "Logout";
        echo json_encode(["status" => "success", "html" => $data, "urlRedirect" => $baseURL, "returnMessage" => $returnMessage]);
    }
}


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

// Displaying attendance list
if ($_POST["action"] == "fetchStudentAttendanceList") {

    $currentDay = date("d");
    $currentMonth = date("m");
    $currentYear = date("y");
    $currentDate = $currentYear . "/" . $currentMonth . "/" . $currentDay;
    $data = "<table class='table table-striped table-bordered' id='dailyAttendanceView' cellspacing='1'>
    <thead>
        <tr>
            <td class='text-center' style='font-weight: bold;'>No</td>
            <td class='text-center' style='font-weight: bold;'>Matricule</td>
            <td class='text-center' style='font-weight: bold;'>Student Name</td>
            <td class='text-center' style='font-weight: bold;'>Attendance Date</td>
            <td class='text-center' style='font-weight: bold;'>Period</td>
            <td class='text-center' style='font-weight: bold;'>Course</td>
            <td class='text-center' style='font-weight: bold;'>Attendance Status</td>
        </tr>
    </thead>
    <tbody>";
    $i = 1;
    $query = "SELECT persons.id_person,persons.name,persons.surname,students.matricule,attendance_details.date,attendance_details.attendance_detail_id,attendance_details.speclevel,attendance_details.period,attendance_records.presence,attendance_details.id_course,courses.title,courses.id_course 
    from persons,students,specialities,levels,specialities_levels,attendance_details,attendance_records,courses 
    where persons.id_person=students.id_person 
    and students.speclevel = attendance_details.speclevel 
    and specialities.speciality_id = specialities_levels.speciality_id 
    and specialities_levels.level_id = levels.level_id
    and students.matricule = attendance_records.matricule
    and attendance_details.attendance_detail_id = attendance_records.attendance_detail_id
    and specialities_levels.speclevel = students.speclevel
    and attendance_details.id_course = courses.id_course
    and attendance_details.date = CURRENT_DATE
    and specialities_levels.speclevel = " . $_SESSION['spec_and_level'] . "";


    $result = mysqli_query($con, $query);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount <= 0) {
        $data_eror = "Attendance not yet performed, Click on << Create New Attendance >> button";
        echo json_encode(["status" => "success", "html" => $data, "allRows" => $data_eror]);
    } else {

        // $row["presence"] = -1;
        while ($row = mysqli_fetch_assoc($result)) {
            // take note about this dot near the equalsign,they should be together
            $data .= '<tr>
            <td class = "text-center">' . $i . '</td>
            <td class = "text-center">' . $row['matricule'] . '</td>
            <td class = "text-center">' . $row['name'] . ' ' . $row['surname'] . '</td>
            <td class = "text-center">' . $row['date'] . '</td>
            <td class = "text-center">' . $row['period'] . '</td>
            <td class = "text-center">' . $row['title'] . '</td>';
            if ($row["presence"] == "present") {
                $data .= '<td class = "text-center text-light"><span class = "bg-success p-2 my-1">present</span></td>';
            } else if ($row["presence"] == "absent") {
                $data .= '<td class = "text-center text-light"><span class = "bg-danger p-2 my-1"> absent </span></td>';
            }

            $data .= '</tr>';

            $i = $i + 1;
        }
        $data .= "</tbody></table>";
        echo json_encode(["status" => "success", "html" => $data]);
    }
}


if ($_POST["action"] == "performStudentAttendance") {

    $attendanceCourse = $_POST["attendanceCourse"];

    $attendancePeriod = $_POST["attendancePeriod"];


    // Attendance verificaion

    $errorAttendanceCourse = "";
    $errorAttendanceExist  = "";

    // error validation 
    $error = 0;
    $errorno = 0;

    if (empty($attendanceCourse)) {
        $errorAttendanceCourse = "Please fill in the field or input a valid data";
        $error++;
        if ($error > 0) {
            $output = array(
                "error"                  => true,
                "errorAttendanceCourse"   => $errorAttendanceCourse,
                // "errorAttendanceExist"   => $errorAttendanceExist
            );

            // echo json_encode(["error" => "true","errorAttendanceExist" => $errorAttendanceExist]);
        }
    } else {

        $attendanceDate = $_POST["currentDate"];
        $specialityAttendance = $_POST["specialityAttendance"];
        $errorAttendanceCourse = "";
        
        $query = "SELECT * FROM `attendance_details` WHERE speclevel = '$specialityAttendance' AND date = '$attendanceDate' AND period = '$attendancePeriod'";
        $result = mysqli_query($con, $query);

        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
            $errorAttendanceExist  = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                         <span aria-hidden='true'>&times;</span>
                                         <span class='sr-only'>Close</span>
                                    </button>
                                    <strong>Delegate, Attendance already exist</strong> You should check in on some of those fields below.
                            </div>";
            $error++;
        }

        if ($error > 0) {
            $output = array(
                "error"                  => true,
                "errorAttendanceCourse"   => $errorAttendanceCourse,
                "errorAttendanceExist"   => $errorAttendanceExist
            );

            // echo json_encode(["error" => "true","errorAttendanceExist" => $errorAttendanceExist]);
        } else {


            $attendanceDate = $_POST["currentDate"];
            $specialityAttendance = $_POST["specialityAttendance"];

            // Collecting date separately
            $currentDay = date("d");
            $currentMonth = date("m");
            $currentYear = date("Y");

            // get idcourse
            $idcourse = getCourseID($attendanceCourse);

            if ($idcourse == false) {
                $errorAttendanceCourse = "Please check the courses entered";
                $output = array(
                    "error"                  => true,
                    "errorAttendanceCourse"   => $errorAttendanceCourse,
                );
                // echo json_encode($output);

            }
            if ($idcourse == true) {

                $isAttendanceComplete = dailyAttendanceCount();


                if ($isAttendanceComplete == true) {

                    $attendanceDate = $_POST["currentDate"];
                    $specialityAttendance = $_POST["specialityAttendance"];

                   

                    // get idcourse
                    $idcourse = getCourseID($attendanceCourse);

                    $attendancePeriod = $_POST["attendancePeriod"];
                    $student_id = $_POST["studentID"];
                    // $attendance_status = $_POST["attendanceStatus"];

                    $query = "INSERT INTO attendance_details(speclevel,date,period,id_course,status) VALUES ('$specialityAttendance','$attendanceDate','$attendancePeriod','$idcourse','completed')";
                    $result = mysqli_query($con,$query);

                    if($result){

                        $attendanceDetailsID = mysqli_insert_id($con);
                        
                        $data = "";
                        for ($count = 0; $count < count($student_id); $count++) {
                             // Collecting date separately
                            $currentDay = date("d");
                            $currentMonth = date("m");
                            $currentYear = date("Y");
                            $student_id = $_POST["studentID"];
                            $_SESSION["attendance_status"] = $_POST["attendanceStatus".$student_id[$count]];

                            // $data .= $student_id[$count] . "and" . $attendance_status;

                            $query = "INSERT INTO attendance_records(matricule,presence,day,month,year,attendance_detail_id) VALUES ('$student_id[$count]','".$_SESSION['attendance_status']."','$currentDay','$currentMonth','$currentYear','$attendanceDetailsID')";
                            // $statement = mysqli_prepare($con,$query);
                            $statement = mysqli_query($con,$query);

                        }
                        $output = array(
                            "success"                  => true,
                            "successMessage"           => "Attendance has been added successfully"
                        );
                    }
                    
                    
                }
                if ($isAttendanceComplete == false) {

                    $attendanceDate = $_POST["currentDate"];
                    $specialityAttendance = $_POST["specialityAttendance"];

                   

                    // get idcourse
                    $idcourse = getCourseID($attendanceCourse);

                    $attendancePeriod = $_POST["attendancePeriod"];
                    $student_id = $_POST["studentID"];
                    // $attendance_status = $_POST["attendanceStatus"];

                    $query = "INSERT INTO attendance_details(speclevel,date,period,id_course,status) VALUES ('$specialityAttendance','$attendanceDate','$attendancePeriod','$idcourse','pending')";
                    $result = mysqli_query($con,$query);

                    if($result){

                        $attendanceDetailsID = mysqli_insert_id($con);
                        
                        $data = "";
                        for ($count = 0; $count < count($student_id); $count++) {
                             // Collecting date separately
                            $currentDay = date("d");
                            $currentMonth = date("m");
                            $currentYear = date("Y");
                            $student_id = $_POST["studentID"];
                            $_SESSION["attendance_status"] = $_POST["attendanceStatus".$student_id[$count]];

                            // $data .= $student_id[$count] . "and" . $attendance_status;

                            $query = "INSERT INTO attendance_records(matricule,presence,day,month,year,attendance_detail_id) VALUES ('$student_id[$count]','".$_SESSION['attendance_status']."','$currentDay','$currentMonth','$currentYear','$attendanceDetailsID')";
                            // $statement = mysqli_prepare($con,$query);
                            $statement = mysqli_query($con,$query);

                        }
                        $output = array(
                            "success"                  => true,
                            "successMessage"           => "Attendance has been added successfully"
                        );
                    }
                    
                    
                   
                }
            }
        }
    }


    echo json_encode($output);
}





?>


   