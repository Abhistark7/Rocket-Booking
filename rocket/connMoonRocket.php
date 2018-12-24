<?php


    if(!empty($_POST))
	{

    $con = mysqli_connect('localhost','root','');

    if(!$con){
        
        echo 'Not connected to server';
    }

    if(!mysqli_select_db($con,'rocket'))
    {
        echo 'Database not selected';
    }

    $rocket = $_POST['rocket_val'];
    $payload = $_POST['select_val'];
        
    switch ($payload) {
    case "1 seat":
        $cost = "$60M";
        break;
    case "2 seats":
        $cost = "$90M";
        break;
    case "3 seats":
        $cost = "$120M";
        break;
    case "4 seats":
        $cost = "$160M";
        break;
    default:
        $cost = "$60M";
}
    
    //get last id
    $get_last_id = "SELECT index_no FROM last_index WHERE id =1";
    $result = $con->query($get_last_id);
    while($row = $result->fetch_assoc()) {
    $last_id = $row['index_no'];
    }
        
    $sql = "UPDATE rocket_booking SET rocket = '$rocket', payload = '$payload', cost = '$cost' WHERE id = '$last_id' ";

    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        header("Location: http://localhost/rocket/reviewBooking.php"); /* Redirect browser */
        exit();
    }
    }

?>