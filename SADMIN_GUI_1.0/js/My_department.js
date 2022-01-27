$(document).ready(function () {

    insertNewDepartment();

})

function insertNewDepartment() {
    $(document).on('click', '#btn_add_department', function () {
        // Collecting data from the form
        var DepartmentName = $("#departmentName").val();
        var SpecialityName = $("#specialityName").val();
        // debugging
        // alert("working and data are" + DepartmentName + SpecialityName);

        // using error handlers
        if (DepartmentName == "" && SpecialityName == "") {
            $("#message_1").html("Please fill in the blank spaces");
        }
        else if (DepartmentName == "") {
            $("#message_a").html("Department name was not filled");
        }
        else if (SpecialityName == "") {
            $("#message_b").html("Speciality name was not filled");
        }
        else {

            // AJax request
            $.ajax(
                {
                    url: "Add_departments/SA_insert.php",
                    method: "post",
                    data: { DName: DepartmentName, SName: SpecialityName },
                    success: function (data) {
                        $('#message_1').html(data);
                        $('#Add_departments').modal('show');
                        // to reset form after validation,help to avoid reloading the page
                        $('form').trigger('reset');
                    }
                }
            );
        }

    })
    $(document).on('click', '#btn_close', function () {
        $('form').trigger('reset');
        $('#message_a').html('');
        $('#message_b').html('');
        $('#message_1').html('');
    })

}