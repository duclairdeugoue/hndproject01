$(document).ready(function()
{
    insert_student_record();
    // view_student_record();
})

//insert record in the Darabase
function insert_student_record()
{   
    
    $(document).on('click','#btn_add_student',function()
    {
        var Student_name = $('#sname').val();
        var Student_sname = $('#ssname').val(); 
        var Student_DOB = $('#sDOB').val(); 
        var Student_sexe = $('#ssexe').val(); 
        var Student_function  = $('#sfxn').val();
        var Student_department = $('#sdepartment').val();
        var Student_speciality = $('#sspeciality').val();
        var Student_level = $('#slevel').val();

        if(Student_name == "" || Student_sname == "" || Student_DOB == "" || Student_sexe == "" || Student_department == "" || Student_speciality == "" || Student_level == "")
        {
            $('#message_2').html('Please fill in the blank space');
        }
        else
        {
            
            // Ajax Request
            $.ajax(
                {
                    url :'Add_student/SA_insert.php',  // send request to
                    method :'post',    // send requst method
                    data :    {SName : Student_name,SSname : Student_sname,SDOB : Student_DOB,SSex : Student_sexe,Sfxns : Student_function,Sdepartment : Student_department,Sspeciality : Student_speciality,Slevel : Student_level},  // data to send
                    success:  function(data) //if the request is sucessful
                    {
                       // help to display any message in the modal precisely in the <p> tag
                        $('#message_2').html(data);
                        $('#Addstudent').modal('show');
                        // to reset form after validation,help to avoid reloading the page
                        $('form').trigger('reset');
                        // view_student_record();

                    }
                }
            )
        }
    })
    $(document).on('click','#btn_close',function()
    {
        $('form').trigger('reset');
        $('#message_2').html('');
    })

}

// Diplay data function

// function view_student_record()
// {
   

//     $.ajax(
//         {
//             url :'SA_view.php',
//             method : 'post',
//             success : function(data)
//             {
//                 // Getting data from PHP page and asign to data variable
//                 data = $.parseJSON(data);
//                 if(data.status = 'success')
//                 {
//                     // We need to put '.html' to convert the var data to an html document
//                     console.log(data.html);  //just for testing
//                     // $('#table_student_display').html(data.html);
//                 }

//             }
//         }
//     )
// }

