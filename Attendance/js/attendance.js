$(document).ready(function () {
    view_attendance_record();
    // test_record();
})

function test_record() {

}
// Display attendance list of student Records
function view_attendance_record() {
    $(document).on('click', '#search_now', function () {
        // alert('Working');

        // Collecting data from the form
        var Speciallity_select = $('#speciality').val();
        var level_select = $('#level').val();
        var course_select = $('#course').val();
        var session_select = $('#session').val();
        var peroid_select = $('#period').val();

        if (Speciallity_select == "" || level_select == "" || course_select == "" || session_select == "" || peroid_select == "") {

            $("#errormsg").html('Please fill in the blank space');
        }
        else {
            $.get("display_attendance_record.php", {
                SName: Speciallity_select
            }).done(function(data) {
                // Display the returned data in browser
                // data = $.parseJSON(data);
                if (data.status = 'success') {
                    // We need to put '.html' to convert the var data to an html document
                    console.log(data.html);  //just for testing
                    // $('#table_display_attendance').html(data.html);
                }
    
            });
            // $.ajax(
            //     {
            //         url: 'display_attendance_record.php',
            //         method: 'post',
            //         // data :    {SName : Speciallity_select,LSelect : level_select,CName : course_select,Sselect : session_select,Pselect : peroid_select}, 
            //         success: function (data) {
            //             // Getting data from PHP page and asign to data variable
            //             data = $.parseJSON(data);
            //             if (data.status = 'success') {
            //                 // We need to put '.html' to convert the var data to an html document
            //                 // console.log(data.html);  just for testing
            //                 $('#table_display_attendance').html(data.html);
            //             }

            //         }
            //     }
            // )
        }


    })

}