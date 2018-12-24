<!DOCTYPE html>
<html>
    
    <head>
    
    <title>Fill Details</title>
    <link rel="stylesheet" type="text/css" href="moonForm.css">
        
    </head>
    
    <body>
    
    <div class="redTab">
        <h1 class="book_text_heading">BOOK A  ROCKET &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp;  Payload delivery to orbit</h1>

        </div>
        
        
    <div class="container">
        
        <img class="moon_img" src="satellite.png">
        <p class="journey_title">Payload delivery to Orbit</p>
        <p class="journey_detail">Send payload such as satellites to orbit or cargo to the ISS</p>
        
        </div>
        
        <form action="connPayloadForm.php" method="post">
        
        <div class="select_dates">
        
        <h2 class="sel_date_text">Select available dates</h2>
            
        <select class="date_val" name="date_val">
        <option value="19th July, 2019">19th July, 2019</option>
        <option value="25th August, 2019">25th August, 2019</option>
        <option value="30th December, 2019">30th December, 2019</option>
        <option value="5th March, 2020">5th March, 2020</option>
        </select>
        
        </div>
        
        <div class="enter_name">
        
        <h2 class="name_text">Name</h2>
            
        <input type="text" class="name_val" name="name" placeholder="Enter Name"><br>
        
        </div>
        
        <div class="enter_id">
        
        <h2 class="passport_text">Passport ID</h2>
            
        <input type="text" class="passport_val" name="passport" placeholder="Enter ID"><br>
        
        </div>
        
        <div class="enter_email">
        
        <h2 class="email_text">Email ID</h2>
            
        <input type="text" class="email_val" name="email" placeholder="Enter Email"><br>
        
        </div>
        
        <div class="enter_country">
        
        <h2 class="country_text">Country</h2>
            
        <input type="text" class="country_val" name="country" placeholder="Enter Country"><br>
        
        </div>
        
        <div class="next_button">
                <input id="go_button" type="image" src="go_button@2x.png" alt="Submit" height="80">
        </div>
            
        </form>
        
    </body>
    
    
</html>