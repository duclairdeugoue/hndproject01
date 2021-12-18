$(document).ready(function()
{
    insert_admin_record();
})

//insert record in the Darabase
function insert_admin_record()
{   
    
    $(document).on('click','#btn_add_admin',function()
    {
        var Admin_name = $('#aname').val();
        var Admin_sname = $('#asname').val(); 
        var Admin_DOB = $('#aDOB').val(); 
        var Admin_sexe = $('#asexe').val(); 
        var Admin_function = $('#afxn').val();
        // var Admin_matricule = $('#amatricule').val();
        // alert(Admin_name);
        // Admin_matricule == "" ||
        // Amatricule : Admin_matricule,

        if(Admin_name == "" || Admin_sname == "" || Admin_DOB == "" || Admin_sexe == "" || Admin_function == "")
        {
            $('#message_1').html('Please fill in the blank space');
        }
        else
        {
            
            // Ajax Request
            $.ajax(
                {
                    url :'SA_insert.php',  // send request to
                    method :'post',    // send requst method
                    data :    {AName : Admin_name,ASname : Admin_sname,ADOB : Admin_DOB,ASex : Admin_sexe,Afxns : Admin_function},  // data to send
                    success:  function(data) //if the request is sucessful
                    {
                       // help to display any message in the modal precisely in the <p> tag
                        $('#message_1').html(data);
                        $('#AddAdmin').modal('show');
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
        $('#message_1').html('');
    })

}