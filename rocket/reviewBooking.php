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
$cost = "";


$get_last_id = "SELECT index_no FROM last_index WHERE id =1";
    $result = $conn->query($get_last_id);
    while($row = $result->fetch_assoc()) {
    $last_id = $row['index_no'];
    }

$sql = "SELECT name, date, rocket, payload, cost FROM rocket_booking WHERE id='$last_id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $date = $row['date'];
        $rocket = $row['rocket'];
        $payload = $row['payload'];
        $cost = $row['cost'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>




<!DOCTYPE html>
<html>

    <head>
    
        <title> Review Booking</title>
        
        <link rel="stylesheet" type="text/css" href="review_booking.css">
    
    
    </head>

    <body>
    
    <div class="redTab">
        <h1 class="book_text_heading">BOOK A  ROCKET &nbsp;&nbsp;&nbsp; >  &nbsp;&nbsp;&nbsp; Payload delivery to orbit &nbsp;&nbsp;&nbsp;> &nbsp;&nbsp;&nbsp;Select rocket &nbsp;&nbsp;&nbsp;> &nbsp;&nbsp;&nbsp;Review booking</h1>
    </div>
        
    <div class="container"> 
        
        <p class="review_title">Review Booking</p>
        
        <div class="enter_name">
        
        <h2 class="name_text">Name</h2>
            
        <h2 class="name_val"><?= $name ?></h2>
        
        </div>
        
        <div class="sel_date">
        
        <h2 class="sel_date_text">Selected Date</h2>
            
        <h2 class="sel_date_val"><?= $date ?></h2>
        
        </div>
        
        <div class="sel_rocket">
        
        <h2 class="sel_rocket_text">Selected Rocket</h2>
            
        <h2 class="sel_rocket_val"><?= $rocket ?></h2>
        
        </div>
        
        <div class="sel_seats">
        
        <h2 class="sel_seats_text">Selected Seats</h2>
            
        <h2 class="sel_seats_val"> <?= $payload ?> </h2>
        
        </div>
        
        <div class="est_cost">
        
        <h2 class="est_cost_text">Estimated Cost</h2>
            
        <h2 class="est_cost_val"><?= $cost ?></h2>
        
        </div>
        
        <p class="confirm_detail">I, hereby confirm the booking</p>
        
        <div class="next_button">
        <form action="moon_booked.php">
                <input id="go_button" type="image" src="go_button@2x.png" alt="Submit" height="80">
        </form>
        </div>
        
        
    </div>
    
    
    </body>


</html>