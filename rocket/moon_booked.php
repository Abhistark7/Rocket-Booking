<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rocket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 

$name = "";
$date = "";
$rocket = "";
$payload = "";


$get_last_id = "SELECT index_no FROM last_index WHERE id =1";
    $result = $conn->query($get_last_id);
    while($row = $result->fetch_assoc()) {
    $last_id = $row['index_no'];
    }


$sql = "SELECT name, date, rocket, payload FROM rocket_booking WHERE id='$last_id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $date = $row['date'];
        $rocket = $row['rocket'];
        $payload = $row['payload'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>

<html>

    <head>
    
        <title>Booking Confirmed!</title>
        <link rel="stylesheet" type="text/css" href="moonBooked.css">
    
    </head>
    

    
    <body>
     
    <div class="redTab">
        <h1 class="book_text_heading">BOOK A  ROCKET &nbsp;&nbsp;&nbsp; >  &nbsp;&nbsp;&nbsp; Booking successful</h1>
        <img src="home_page.svg" id="home_icon" onclick='window.location.href="http://localhost/rocket/landingPage.html"'>
        <h1 class="go_home" onclick='window.location.href="http://localhost/rocket/landingPage.html"'>Go Home</h1>
    </div>
    
    <div class="container">
        
        <h1 class="booking_heading">Booking Successful!</h1>
        
        <p class="booking-desp1">Congrats! you have successfuly booked your,</p>
        <p class="booking-desp2">rocket please make the payment from the link </p>
        <p class="booking-desp3">sent to your email in 24 hrs to avoid cancellation,</p>
        <p class="booking-desp4">Thank You</p>
        
        <div class="ticket">
        
        <p class="tick-name"> <?= $name ?></p>
        <p class="tick-rocket">  <?= $rocket ?></p>
        <p class="tick-payload">  <?= $payload ?></p>
        <p class="tick-date"> <?= $date ?></p>
        
        
        </div>
        
        
    </div>
    
    
    </body>

</html>