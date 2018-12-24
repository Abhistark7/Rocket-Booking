<?php

$booking_type = 'moon';
$date = filter_input(INPUT_POST, 'date');
$name = filter_input(INPUT_POST, 'name');
$passport = filter_input(INPUT_POST, 'passport');
$email = filter_input(INPUT_POST, 'email');
$country = filter_input(INPUT_POST, 'country');
$rocket = 'falcon';
$payload = '2 seats';
$cost = '$60M';



if(!empty($date) && !empty(name) && !empty($passport) !empty(email) !empty(country)){
    
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "rocket";

    //Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $ dbname);
    
    if(mysqli_connect_error()){
        echo "error";
        die('Connect Error ('. my_sqli_connect_errno() .') ' . mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO rocket_booking (booking_type, date, name, passport_id, email_id, country, rocket, payload, cost) values ('$booking_type','$date','$name','$passport','$email','$country','$rocket','$payload','$cost')";
        if($conn->query($sql)){
            echo "record updated!";
        } else {
            echo "record not updated!";
        }
    }
    
    $conn->close();
}

else {
    echo "Every field is compulsory";
    die();
}


?>