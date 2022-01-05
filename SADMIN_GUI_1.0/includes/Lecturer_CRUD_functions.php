<?php
    include('../includes/connection1.php');

    //Insert Record Function
    function Insert_Lecturer_Record()
    {
        global $con;
        $lname = $_POST['LName'];
        $lsname = $_POST['LSname'];
        $lDOB = $_POST['LDOB'];
        $lsexe = $_POST['LSex'];
        // $ptf = $_POST['ptf'];
        // $amatricule = $_POST['Amatricule'];

        // echo $lname,$lsname,$lDOB,$lsexe;
        $query = "INSERT INTO persons(name,surname,sex,date_of_birth,person_type) values ('$lname','$lsname','$lsexe','$lDOB','3')";
        $result = mysqli_query($con,$query);

        $person_id = mysqli_insert_id($con);

        $query = "INSERT INTO lecturers(id_person) values ('$person_id')";
        $result = mysqli_query($con,$query);
        if (!$result) {
            echo 'please check your query';
        } else {
            echo "<h3 class = 'text-bold text-success'>Your record has been successfuly entered into our Database</h3>";
        }
    }
    // To count the number of lecturer present in the DB
    function Lecture_count(){
         global $con;
         $i= 0; 
         $query = "SELECT matricule FROM `lecturers` WHERE 1"; 
         $result = mysqli_query($con, $query);
         while ($row = mysqli_fetch_assoc($result)) { 
              $i+=1;
            } 
            echo "<script>$('#lec_count').html('<html>".$i."</html>');</script>";
    }

    // Insert_Lecturer_Record();
    // Lecture_count();
?>