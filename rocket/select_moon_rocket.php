<!DOCTYPE html>
<html>

    <head>
    
    <title> Select Rocket</title>
    <link rel="stylesheet" type="text/css" href="selectMoonRocket.css">
    
    </head>
    
    <body>
        
        
    
    <div class="redTab">
        <h1 class="book_text_heading">BOOK A  ROCKET &nbsp;&nbsp;&nbsp; >  &nbsp;&nbsp;&nbsp; Journey to the moon &nbsp;&nbsp;&nbsp;> &nbsp;&nbsp;&nbsp;Select rocket</h1>
    </div>
        
    <div class="container">
        
        <h1 class="select_heading">Select Rocket and seats</h1>
        
        <div class="image-slider">
        
        <button type="image" class="left_blue" onclick="plusDivs(-1)">&#10094;</button>
        <button type="image" class="right_blue" onclick="plusDivs(+1)">&#10095;</button> 
            
        <img class="rocket_img" src="Falcon_Heavy.jpg" height="400px">
        <img class="rocket_img" src="soyuz.jpg" height="400px">
        <img class="rocket_img" src="Long_march7.jpg" height="400px">
        <img class="rocket_img" src="gslv.jpg" height="400px">
        <img class="rocket_img" src="blue_origin.jpg" height="400px">
        <img class="rocket_img" src="PSLV.jpg" height="400px">
        <img class="rocket_img" src="saturnV.jpg" height="400px">
            
        
        
        </div>
        
        <form action="connMoonRocket.php" method="post">
        
        <div class="available_rockets">
        
        <h2 class="available_text">Available Rockets</h2>
            
        <select class="rocket_val" name="rocket_val">
        <option value="Falcon Heavy">Falcon Heavy</option>
        <option value="Soyuz">Soyuz</option>
        <option value="Long MArch 7">Long March 7</option>
        <option value="GSLV">GSLV</option>
        <option value="Blue Origin">Blue Origin</option>
        <option value="PSLV">PSLV</option>
        <option value="Saturn V">Saturn V</option>
    
        </select>
        
        </div>
        
        <div class="select_seats">
        
        <h2 class="seats_text">Select seats</h2>
            
        <select class="select_val" name="select_val">
        <option value="1 seat">1</option>
        <option value="2 seats">2</option>
        <option value="3 seats">3</option>
        <option value="4 seats">4</option>
        </select>
        
        </div>
        
        <div class="next_button">
        
                <input id="go_button" type="image" src="go_button@2x.png" alt="Submit" height="80">
        
        </div>
        </form>
        
        </div>
        <script>
        
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("rocket_img");
            if (n > x.length) {slideIndex = 1} 
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
        }
        x[slideIndex-1].style.display = "block"; 
        }
        
        </script>
    
    </body>


</html>