$(document).ready(function () {

    var dataTable = $('#attendance_table').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "D_attendance_action.php",
            method: "POST",
            data: { action: "fetch" }


        }
    });

})
