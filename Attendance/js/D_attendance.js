$(document).ready(function ()
{

    // $('#dailyAttendanceView').DataTable();

    // displaySpecialityStudentList();
    checkAttendanceStatus();

    displayStudentsAttendanace();

    getCourseName();

    getAttendancePeriod();



    performStudentsAttendanace();
    // alert("test");


    function checkAttendanceStatus()
    {
        var fetch = "checkAttendance";

        $.ajax({

            url: "D_attendance_action.php",
            method: "post",
            data: {
                action: fetch
            },
            success: function (data)
            {
                // Getting data from PHP page and asign to data variable
                data = JSON.parse(data);
                if ((data.status = "success")) {

                    // We need to put '.html' to convert the var data to an html document
                    // console.log(data.html);  just for testing
                    $("#getAttendanceStatus").html(data.returnMessage);
                    $("#returnAttenanceCheckMsg").html(data.html);

                    $("#getAttendanceStatus").attr("href", data.urlRedirect);
                    // $('#delegate_student_list_view').DataTable();
                }
            },
        });
    }

    function displaySpecialityStudentList()
    {
        var fetch = "fetchStudentList"
        $.ajax({

            url: "D_attendance_action.php",
            method: "post",
            data: {
                action: fetch
            },
            success: function (data)
            {
                // Getting data from PHP page and asign to data variable
                data = JSON.parse(data);
                if ((data.status = "success")) {
                    // We need to put '.html' to convert the var data to an html document
                    // console.log(data.html);  just for testing
                    $("#studentListContainer").html(data.html);
                    $('#delegate_student_list_view').DataTable();
                }
            },
        });
    }
    function displayStudentsAttendanace()
    {


        var fetch = "fetchStudentAttendanceList";
        $.ajax({

            url: "D_attendance_action.php",
            method: "post",
            data: {
                action: fetch
            },
            success: function (data)
            {
                // Getting data from PHP page and asign to data variable
                data = JSON.parse(data);
                if (data.status == "success") {
                    // We need to put '.html' to convert the var data to an html document
                    // console.log(data.html);  just for testing

                    $("#studentAttendanceListContainer").html(data.html);
                    $("#dailyAttendanceView").DataTable();
                    $("#pendingAttendanceStatus").html(data.allRows);


                }
                else if (data.status == "failure") {
                    // $("#testingAjax").html(data.allRows);
                }
            },
        });

    }

    function getCourseName()
    {
        $('.search-box1 input[type="text"]').on("keyup input", function ()
        {
            /* Get input value on change */
            var inputVal = $(this).val();
            // var Speciality = $('#speciality').val();
            // var Level = $('#level').val();

            var resultDropdown = $(this).siblings(".result1");
            if (inputVal.length) {
                $.get("getCourseNameAndID.php", {
                    term: inputVal,

                }).done(function (data)
                {
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        // Set search input value on click of result item
        $(document).on("click", ".result1 p", function ()
        {
            $(this).parents(".search-box1").find('input[type="text"]').val($(this).text());
            $(this).parent(".result1").empty();
        });
    }




    function getAttendancePeriod()
    {

        var currentTime = new Date();
        var currentSeconds = currentTime.getSeconds();
        var currentMinutes = currentTime.getMinutes();
        var currentHours = currentTime.getHours();
        // alert(currentMinutes);

        if (currentHours == 8 || currentHours == 9 || (currentHours == 10 && currentMinutes < 15)) {
            // alert("Morninig section from 08 to 10");
            $("#attendancePeriod").val("08 to 10");


        }
        else if ((currentHours == 10 && currentMinutes > 15) || currentHours == 11 || (currentHours == 12 && currentMinutes < 15)) {
            // alert("Moring section from 10 to 12");
            $("#attendancePeriod").val("10 to 12");



        }
        else if ((currentHours == 12 && currentMinutes > 15) || currentHours == 13 || currentHours == 14 || currentHours == 15 || (currentHours == 15 && currentMinutes < 15)) {
            // alert("Moring section from 13 to 15");
            $("#attendancePeriod").val("13 to 15");


        }
        else if ((currentHours == 15 && currentMinutes > 15) || currentHours == 16 || currentHours == 17 || (currentHours == 17 && currentMinutes < 15)) {
            // alert("afternoon section from 15 to 17");

            $("#attendancePeriod").val("15 to 17");


        }
        else if ((currentHours == 17 && currentMinutes > 15) || currentHours == 18 || currentHours == 19 || (currentHours == 19 && currentMinutes < 15)) {
            $("#attendancePeriod").val("17 to 19");
            // alert("Moring section from 17 to 19:30");

        }
        else if ((currentHours == 19 && currentMinutes > 15) || currentHours == 20 || currentHours == 21 || (currentHours == 21 && currentMinutes < 15)) {
            $("#attendancePeriod").val("19 to 21");
            // alert("Moring section from 19:30 to 21:30");

        }
        else {
            $("#attendancePeriod").val("Not defined");
            // alert("Moring section from 19:30 to 21:
        }

    }

    function clearAttendanceForm()
    {
        $("#attendanceForm").trigger("reset");
        $("#errorMessageCourse").text("");
        getAttendancePeriod();
    }

    function performStudentsAttendanace()
    {

        // $("#currentDate").DatePicker();
        $("#attendanceForm").on('submit', function (event)
        {

            // var courseAttendance = $("#attendanceCourse").val();
            // if (courseAttendance == "" || courseAttendance == "No matches found") {
            //     // $("#add_attendance").modal("show");
            //     $("#errorMessageCourse").text("Please fill in a value or a valid course");
            // } else {

            event.preventDefault();

            $.ajax({
                url: "D_attendance_action.php",
                method: "POST",
                data: $("#attendanceForm").serialize(),
                dataType: "json",
                beforeSend: function ()
                {
                    $("#saveAttendance").val("Validate...");
                    $("#saveAttendance").attr('disabled', 'disabled');
                },

                success: function (data)
                {

                    $("#saveAttendance").val("Save Attendance");

                    $("#saveAttendance").attr('disabled', false);

                    

                    if (data.success) {
                        $("#messageOperation").html('<div class = "alert alert-success text-center">' + data.successMessage + '</div>');
                        clearAttendanceForm();
                        $("#pendingAttendanceStatus").html("");

                        $("#add_attendance").modal("hide");
                        displayStudentsAttendanace();

                        // dataTable.ajax.reload();

                    }
                  

                    if(data.error){

                        if (data.errorAttendanceCourse != '') {

                            $("#errorMessageCourse").text(data.errorAttendanceCourse);
                            

                        }
                        else if (data.errorAttendanceExist != '') {
                            // $("#errorMessageCourse").text("");
                            $("#errorMessageAttendanceExist").html(data.errorAttendanceExist);
                            clearAttendanceForm();
                            $("#messageOperation").html('');

                            $("#add_attendance").modal("hide");

                        } else {
                            $("#errorMessageCourse").text("");
                            $("#errorMessageAttendanceExist").html('');
                            

                        }

                    }

                    return false;

                }
            });
            // }
            return false;
        })

        $(document).on("click", "#btnClose", function ()
        {
            clearAttendanceForm();

        });

        // });

    }


})