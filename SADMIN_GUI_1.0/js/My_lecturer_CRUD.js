$(document).ready(function()
{
    // alert('Working');
    insert_lecturer_record();
   
   

})

//insert record in the Darabase
function insert_lecturer_record()
{   
    
    $(document).on('click','#btn_add_lecturer',function()
    {
        
        var Lec_name = $('#lname').val();
        var Lec_sname = $('#lsname').val(); 
        var Lec_DOB = $('#lDOB').val(); 
        var Lec_sexe = $('#lsexe').val(); 
        var Lec_ptf = $('#lfxn').val();
        // var Admin_matricule = $('#amatricule').val();
        // alert(Admin_name);
        // Admin_matricule == "" ||
        // Amatricule : Admin_matricule,

        if(Lec_name == "" || Lec_sname == "" || Lec_DOB == "" || Lec_sexe == "")
        {
            $('#message_3').html('Please fill in the blank space');
            
        }
        else
        { 
            // Ajax Request
            $.ajax(
                {
                    url :'Add_lecturer/SA_insert.php',  // send request to
                    method :'post',    // send requst method
                    data :    {LName : Lec_name,LSname : Lec_sname,LDOB : Lec_DOB,LSex : Lec_sexe},  // data to send
                    success:  function(data) //if the request is sucessful
                    {
                       // help to display any message in the modal precisely in the <p> tag
                        $('#message_3').html(data);
                        $('#AddLecturer').modal('show');
                        // to reset form after validation,help to avoid reloading the page
                        $('form').trigger('reset');

                    }
                }
            )
        }
    })
    $(document).on('click','#btn_close',function()
    {
        $('form').trigger('reset');
        $('#message_3').html('');

    })

}