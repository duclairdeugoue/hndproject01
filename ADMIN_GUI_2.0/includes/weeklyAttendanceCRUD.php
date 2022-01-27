<?php
function weeklySpecialityList()
{
    global $con;

    $query = "SELECT specialities.speciality_name as 'speciality name',levels.level_id as 'level' FROM specialities,levels,specialities_levels where specialities_levels.speciality_id = specialities.speciality_id AND specialities_levels.level_id = levels.level_id";
    $result = mysqli_query($con, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {

            $specialityName = ucwords($row['speciality name']);
            $level = $row['level'];
            echo "<div class='card py-3 my-3'>
                    <div class='card-body'>
                        <h4 class='card-title'>" . $specialityName . " " . $level . "</h4>
                         <p class='card-text'>Text</p>
                    </div>
                 </div>";
        }
    } else {
        echo "<p>Please check your query</p>";
    }
}
?>