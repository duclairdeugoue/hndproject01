<?php

    require_once('./includes/connection1.php');

    //Insert Record Function
    function Insert_Admin_Record()
    {
        global $con;
        $aname = $_POST['AName'];
        $asname = $_POST['ASname'];
        $aDOB = $_POST['ADOB'];
        $asexe = $_POST['ASex'];
        $fxn = $_POST['Afxns'];
        // $amatricule = $_POST['Amatricule'];

        // echo $aname,$asname,$aDOB,$asexe,$amatricule,$fxn;
        $query = "insert into persons(name,surname,sex,date_of_birth,person_type) values ('$aname','$asname','$asexe','$aDOB','1')";
        $result = mysqli_query($con, $query);

        $person_id = mysqli_insert_id($con);

        $query = "insert into admins(function,id_person) values ('$fxn','$person_id')";
        $result = mysqli_query($con, $query);
        if (!$result) {
            echo 'please check your query';
        } else {
            echo 'Your record has been successfuly entered into our Database';
        }
    }

?>