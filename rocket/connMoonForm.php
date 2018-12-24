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

    $moon = 'MOON';
    $date = $_POST['date_val'];
    $name = $_POST['name'];
    $passport = $_POST['passport'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $rocket = "Falcon Heavy";
    $payload = "4000 Kgs";
    $cost = "$60M";
    $sql = "INSERT INTO rocket_booking (booking_type, date, name, passport_id, email_id, country, rocket, payload, cost) VALUES ('$moon','$date', 
    '$name', '$passport', '$email', '$country', '$rocket', '$payload', '$cost')";
        
    //get & set last id
    
    $get_last_id = "SELECT index_no FROM last_index WHERE id =1";
    $result = $con->query($get_last_id);
    while($row = $result->fetch_assoc()) {
    $last_id = $row['index_no'];
    }
        
    $last_id = $last_id + 1;
    $set_last_id = "UPDATE last_index SET index_no= '$last_id' WHERE id = 1";
    $res = mysqli_query($con,$set_last_id);

    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        header("Location: http://localhost/rocket/select_moon_rocket.php"); /* Redirect browser */
        exit();
    }
    }

?>