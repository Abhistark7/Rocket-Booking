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

    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        header("Location: http://localhost/rocket/select_moon_rocket.html"); /* Redirect browser */
        exit();
    }
    }

?>