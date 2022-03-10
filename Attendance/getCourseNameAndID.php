<?php

session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "school_management");

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
function returnLevelID()
{
    global $link;
    $query = "SELECT level_id from specialities_levels where speclevel = " . $_SESSION['spec_and_level'] . "";
    $result = mysqli_query($link, $query);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $levelID = $row["level_id"];
        }
        return $levelID;
    }
}


// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_REQUEST["term"])) {
$lvl = returnLevelID();
$spcID = returnSpecialityID();
    // Prepare a select statement
    $sql = "SELECT * FROM specialities_courses,courses
    WHERE specialities_courses.id_course = courses.id_course 
    AND specialities_courses.speciality_id = ".$spcID." AND courses.level = ".$lvl." AND courses.title LIKE ?";
    // $sql = "SELECT * FROM specialities,courses WHERE title LIKE ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters
        $param_term = $_REQUEST["term"] . '%';

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
            if (mysqli_num_rows($result) > 0) {
                // Fetch result rows as an associative array
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "<p>" . $row["title"] . "</p>";
                }
            } else {
                echo "<p>No matches found</p>";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// close connection
mysqli_close($link);
