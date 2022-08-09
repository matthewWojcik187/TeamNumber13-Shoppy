<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Shoppy</title>
    <!-- Meta Data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website About Us: Company Background">
    <meta name="keywords" content="DVD, E-Commerce, About us, Background, Company, Shoppy, History, Headquarters">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts used -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Stylesheets used -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link id="OB" rel="stylesheet" type="text/css" href="Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="Shoppy3.css">
    
    </head>
    <body>
      <!-- top div for logo -->
        <div class="jumbotron">
  			<div class="container text-center">
      			<div id = "title">
            		<img id="logoOB" src="Logo.png" onmouseenter="src='Logo2.png'" onmouseleave="src='Logo.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
              		<img id="logoPP" src="Shoppy_LogoPP1.png" onmouseenter="src='Shoppy_LogoPP2.png'" onmouseleave="src='Shoppy_LogoPP1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
              		<img id="logoRG" src="Shoppy_LogoRG1.png" onmouseenter="src='Shoppy_LogoRG2.png'" onmouseleave="src='Shoppy_LogoRG1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
    			</div>
        	</div>
        </div>
      
 <!-- Navigation bar to get around the site -->
      <nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>
      			<a class="navbar-brand" href="Shoppy.php" style="color:black;">Home</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      
                <ul class="nav navbar-nav">
                  <li><a href="productsPage.php" style="color:black;">Products</a></li>
                  <li><a href="promotions.php" style="color:black;">Promotions</a></li>
                  <li><a href="AboutUs.php" style="color:black;">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="accounts/login.php" style="color:black;"><span class="glyphicon glyphicon-user"></span> Account</a></li>
                  <li><a href="cartPage.php" style="color:black;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
    		</div>
  
        </div>
	</nav>
	  <!-- Div fo background info -->
      <div id = "productInfo"><br>Shoppy is a highly successful comprised by a group of intelligent and driven individuals. The collaborative team works together to provide customers with the movies that they are looking for.
        The team members in Shoppy were not brought together only to create this current website, in fact they started out working together on a different project in a different course.
        In the previous class, group members Matthew Smith, Matthew Wojcik, Michael Schneider, and Brandon Mailloux had come together to form the "Busy Beavers."<br><br>
        
        The Busy Beavers built such a strong connection together while working on the previous project that, when they saw that all the group members were in the same class for this new project for Kobti, 
        they all decided to get the band back together for one more *dam* rodeo. The team worked tirelessly and communicated vigilantly to ensure that the user experience was sublime and unforgettable.
        
        <h1>Our Headquarters is on Oakwood Ave in Belle River Ontario</h1>
      
      <div id="googleMap" style="width:100%;height:400px;"></div>
       </div>

<!-- Javascript to produce the map using the google maps API -->
<script>
function myMap() {

var mapProp= {
  center:new google.maps.LatLng(42.28909519254287, -82.76558963804273),
  zoom:17,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marker = new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
});

marker.setMap(map);
}
</script>

 	  <!-- Javascript to hold the map api key -->
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiRzMaTIniEJGEkIMail0I7Nl4Q0PrR1w&callback=myMap"></script>
      <!-- Script to update theme of the site to match the current theme -->
      <?php
			require 'colourScript.php';
       	?>
      <!-- Footer div -->
      <footer class="container-fluid text-center">
        <div id="footer">
        <br>
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="Help.php">Help</a>
        &emsp;
        <a href="faq.php">Frequently Asked Questions</a>
          
      </div>
        </footer>
    </body>
</html>