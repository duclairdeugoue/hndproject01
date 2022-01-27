$(document).ready(function () {

    insertNewSpeciality();

})

function insertNewSpeciality() {
    $(document).on('click', '#btn_add_speciality', function () {
        // Collecting data from the form
        var specialtyName = $("#specialtyName").val();
        var departmentID = $("#departmentID").val();
        // debugging
        // alert("working and data are" + DepartmentName + SpecialityName);

        // using error handlers
        if (specialtyName == "" && departmentID == "") {
            $("#message_0").html("Please fill in the blank spaces");
        }
        else if (specialtyName == "") {
            $("#message_x").html("speciality name was not filled");
        }
        else if (departmentID == "") {
            $("#message_y").html("department ID was not filled");
        }
        else {

            // AJax request
            $.ajax(
                {
                    url: "Add_speciality/SA_insert.php",
                    method: "post",
                    data: { Specname: specialtyName, depID: departmentID},
                    success: function (data) {
                        $('#message_0').html(data);
                        $('#Add_speciality').modal('show');
                        // to reset form after validation,help to avoid reloading the page
                        $('form').trigger('reset');
                    }
                }
            );
        }

    })
    $(document).on('click', '#btn_close', function () {
        $('form').trigger('reset');
        $('#message_x').html('');
        $('#message_y').html('');
        $('#message_0').html('');
    })

}