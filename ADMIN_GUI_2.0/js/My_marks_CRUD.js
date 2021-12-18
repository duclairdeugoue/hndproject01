$(document).ready(function()
{
    insert_course_record();
    // view_record();
    // get_record();
    // update_record();
    // delete_record();
})

//insert record in the Darabase
function insert_course_record()
{
    $(document).on('click','#btn_course_register',function()
    {
       
        var Ctitle = $('#Coursetitle').val(); 
        var Ccredit = $('#Coursecredit').val(); 
        var Course_outline = $('#Course_outline').val(); 
         // var Ccode = $('#Coursecode').val();
        // console.log(User,Email);  help test the function if the value display properly
        // Ccode == "" ||
        if( Ctitle == "" || Ccredit == "" || Course_outline == "")
        {
            $('#Cmessage').html('Please fill in the blank space');
        }
        else
        {
            // Ajax Request
            $.ajax(
                {
                    url :'Add_courses/insert.php',  // send request to
                    method :'post',    // send requst method
                    data :    {CST : Ctitle,CCT : Ccredit,COL : Course_outline},  // data to send
                    success:  function(data) //if the request is sucessful
                    {
                       // help to display any message in the modal precisely in thr <p> tag
                        $('#Cmessage').html(data);
                        $('#Course_Registration').modal('show');
                        // to reset form after validation,help to avoid reloading the page
                        $('form').trigger('reset');
                        view_record();


                    }
                }
            )
        }
    })
    $(document).on('click','#btn_close',function()
    {
        $('form').trigger('reset');
        $('#Cmessage').html('');
    })
    
}
 
// Display Records
// function view_record()
// {
//     $.ajax(
//         {
//             url : 'view.php',
//             method : 'post',
//             success : function(data)
//             {
//                 // Getting data from PHP page and asign to data variable
//                 data = $.parseJSON(data);
//                 if(data.status = 'success')
//                 {
//                     // We need to put '.html' to convert the var data to an html document
//                     // console.log(data.html);  just for testing
//                     $('#table_display').html(data.html);
//                 }

//             }
//         }
//     )
// }
// // get particular record
// function get_record()
// {
//     $(document).on('click','#btn_edit',function()
//     {
//         // Note here that 'attr is an attribute of the element button so it helps take the value of the particular id of a record 
//         var PK = $(this).attr('data-id');
//         // console.log(ID); Just for testing 

//         // Ajax request
//         $.ajax(
//             {
//                 url : 'get_data.php',
//                 method : 'post',
//                 data : {UserID: PK},
//                 dataType : 'JSON',
//                 success: function(data)
//                 {
//                     // console.log(data[1]);
//                     $('#Up_User_ID').val(data[0]);
//                     $('#Up_UserName').val(data[1]);
//                     $('#Up_UserEmail').val(data[2]);

//                     $('#Update').modal('show');
//                 }
//             }
//         )

//     })
// }
// Update record
// function update_record()
// { 
//     $(document).on('click','#btn_Update',function()
//     {
//         var UpdateID = $('#Up_User_ID').val();
//         var UpdateUser = $('#Up_UserName').val();
//         var UpdateEmail = $('#Up_UserEmail').val();
//         // console.log(UpdateID,UpdateName,UpdateEmail);

//         if(UpdateUser== "" || UpdateEmail == "")
//         {
//             $('#up-message').html('Please Fill in this blank');
//             $('#Update').modal('show');
//         }
//         else
//         {
//             $.ajax(
//                 {
//                     url: 'update.php',
//                     method :'post',
//                     data:{U_ID:UpdateID,U_User:UpdateUser,U_Email:UpdateEmail},
//                     success: function(data)
//                     {
//                         $('#up-message').html(data);
//                         $('#Update').modal('show');
//                         view_record();
//                     }
//                 })
//         }
//     })
    
// }

// // Delete function
// function delete_record()
// {
//     $(document).on('click','#btn_delete',function()
//     {
//         // console.log('Working');
//         var Delete_ID = $(this).attr('data-id1');
//         // console.log(Delete_ID);
//         $('#delete').modal('show');
//         $(document).on('click','#btn_delete_record',function()
//         {
//             $.ajax(
//                 {
//                     url : 'delete.php',
//                     method : 'post',
//                     data  : {Del_ID:Delete_ID},
//                     success : function(data)
//                     {
//                         $('#delete-message').html(data).hide(2000);
//                         view_record();
//                     }
//                 })
         
//         })
        

//     })
// }