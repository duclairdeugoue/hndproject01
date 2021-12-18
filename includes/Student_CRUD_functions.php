<?php

require_once('connection.php');

//Insert Record Function
function InsertRecord()
{
    global $con;
    $UserName = $_POST['UName'];
    $UserEmail = $_POST['UEmail'];
    // echo $UserName,$UserEmail; helps verify if the data have been gotten from jQuery

    $query = "insert into user_record (UserName,UserEmail) values ('$UserName','$UserEmail')";
    $result = mysqli_query($con, $query);

    if (!$result) {
        echo 'please check your query';
    } else {
        echo 'Your record has been successfuly entered into our Database';
    }
}
// Diplay data function

function display_record()
{
    global $con;
    $value = "";
    $value = '<table class="table table-bordered">
                <tr>
                    <td>User ID</td>
                    <td>User Name</td>
                    <td>User Email</td>
                    <td class="text-center"> Edit </td>
                    <td class="text-center"> Delete </td>
                </tr>';
    $query = "select * from user_record";
    $result = mysqli_query($con,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        // take note about this dot near the equalsign,they should be together
        $value.= '<tr>
                    <td>'.$row['id'] .'</td>
                    <td>'.$row['UserName'] .'</td>
                    <td>'.$row['UserEmail'] .'</td>
                    <td class="text-center"><button class="btn btn-success " id="btn_edit" data-id ='.$row['id'].'><span class ="fa fa-edit"></span></button></td>
                    <td class="text-center"><button class="btn btn-danger" id="btn_delete" data-id1 ='.$row['id'].'><span class ="fa fa-trash"></span></button></td>
                 </tr>';
    }
    // take note about this dot near the equalsign,they should be together
    $value.= '</table>';
    //  
    echo json_encode(['status'=>'success','html'=>$value]);
    // echo json_encode({status:"success", html:$value});
}

// Get particular record 

function get_record()
{
    global $con;
    $UserID = $_POST['UserID'];
    $query  = "select * from user_record where id = '$UserID'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $User_data[] = "";
        $User_data[0]=$row['id'];
        $User_data[1]=$row['UserName'];
        $User_data[2]=$row['UserEmail'];
    }

    echo  json_encode($User_data);
}


// Update function
function update_value()
{
    global $con;
    $Update_ID = $_POST['U_ID'];
    $Update_User = $_POST['U_User'];
    $Update_Email = $_POST['U_Email'];

    $query = "update user_record set UserName =' $Update_User',UserEmail = ' $Update_Email' where id ='$Update_ID'";
    $result = mysqli_query($con,$query);

    if(!$result){
        echo 'Please check your Query';
    }
    else
    {
        echo 'Your Record has Been Update';
    }
}


function delete_record()
{
    global $con;
    $Del_ID = $_POST['Del_ID'];
    
    $query = "delete from user_record where id = '$Del_ID'";
    $result = mysqli_query($con,$query);
     
    if(!$result){
        echo 'Please check your Query';
    }
    else
    {
        echo 'Your Record has Been Deleted';
    }
    
}

?>
