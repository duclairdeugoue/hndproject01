// $(document).ready(function()
// {
//     insert_record();
//     view_record();
//     get_record();
//     update_record();
//     delete_record();
// })

//insert record in the Darabase
function insert_record()
{
  $(document).on("click", "#btn_register", function ()
  {
    var User = $("#UserName").val();
    var Email = $("#UserEmail").val();
    // console.log(User,Email);  help test the function if the value display properly

    if (User == "" || Email == "") {
      $("#message").html("Please fill in the blank space");
    } else {
      // Ajax Request
      $.ajax({
        url: "insert.php", // send request to
        method: "post", // send requst method
        data: { UName: User, UEmail: Email }, // data to send
        success: function (
          data //if the request is sucessful
        )
        {
          // help to display any message in the modal precisely in the <p> tag
          $("#message").html(data);
          $("#Registration").modal("show");
          // to reset form after validation,help to avoid reloading the page
          $("form").trigger("reset");
          view_record();
        },
      });
    }
  });
  $(document).on("click", "#btn_close", function ()
  {
    $("form").trigger("reset");
    $("#message").html("");
  });
}

// Display Records
function view_record()
{
  $.ajax({
    url: "view.php",
    method: "post",
    success: function (data)
    {
      // Getting data from PHP page and asign to data variable
      data = $.parseJSON(data);
      if ((data.status = "success")) {
        // We need to put '.html' to convert the var data to an html document
        // console.log(data.html);  just for testing
        $("#table_display").html(data.html);
      }
    },
  });
}
// get particular record
function get_record()
{
  $(document).on("click", "#btn_edit", function ()
  {
    // Note here that 'attr is an attribute of the element button so it helps take the value of the particular id of a record
    var PK = $(this).attr("data-id");
    // console.log(ID); Just for testing

    // Ajax request
    $.ajax({
      url: "get_data.php",
      method: "post",
      data: { UserID: PK },
      dataType: "JSON",
      success: function (data)
      {
        // console.log(data[1]);
        $("#Up_User_ID").val(data[0]);
        $("#Up_UserName").val(data[1]);
        $("#Up_UserEmail").val(data[2]);

        $("#Update").modal("show");
      },
    });
  });
}
// Update record
function update_record()
{
  $(document).on("click", "#btn_Update", function ()
  {
    var UpdateID = $("#Up_User_ID").val();
    var UpdateUser = $("#Up_UserName").val();
    var UpdateEmail = $("#Up_UserEmail").val();
    // console.log(UpdateID,UpdateName,UpdateEmail);

    if (UpdateUser == "" || UpdateEmail == "") {
      $("#up-message").html("Please Fill in this blank");
      $("#Update").modal("show");
    } else {
      $.ajax({
        url: "update.php",
        method: "post",
        data: { U_ID: UpdateID, U_User: UpdateUser, U_Email: UpdateEmail },
        success: function (data)
        {
          $("#up-message").html(data);
          $("#Update").modal("show");
          view_record();
        },
      });
    }
  });
}

// Delete function
function delete_record()
{
  $(document).on("click", "#btn_delete", function ()
  {
    // console.log('Working');
    var Delete_ID = $(this).attr("data-id1");
    // console.log(Delete_ID);
    $("#delete").modal("show");
    $(document).on("click", "#btn_delete_record", function ()
    {
      $.ajax({
        url: "delete.php",
        method: "post",
        data: { Del_ID: Delete_ID },
        success: function (data)
        {
          $("#delete-message").html(data).hide(2000);
          view_record();
        },
      });
    });
  });
}

