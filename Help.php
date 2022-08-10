<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Shoppy</title>
    <!-- Meta data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website Help page">
    <meta name="keywords" content="DVD, E-Commerce, Help, Shoppy, Info, Information, Instructions, Learn, Teach">
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
      <!-- Top Div for logo -->
        <div class="jumbotron">
  			<div class="container text-center">
      			<div id = "title">
                  <img id="logoOB" src="Logo.png" onmouseenter="src='Logo2.png'" onmouseleave="src='Logo.png'" onclick="window.location.href='Shoppy.php'" alt="Shoppy" style= "height:100%">
              <img id="logoPP" src="Shoppy_LogoPP1.png" onmouseenter="src='Shoppy_LogoPP2.png'" onmouseleave="src='Shoppy_LogoPP1.png'" onclick="window.location.href='Shoppy.php'" alt="Shoppy" style= "height:100%">
              <img id="logoRG" src="Shoppy_LogoRG1.png" onmouseenter="src='Shoppy_LogoRG2.png'" onmouseleave="src='Shoppy_LogoRG1.png'" onclick="window.location.href='Shoppy.php'" alt="Shoppy" style= "height:100%">
    			</div>
        	</div>
        </div>
      <!-- Top nav bar -->
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

      <!-- Page info -->
      <div id = "productInfo"><br>
        <h1>User Help Guide</h1><br>
        <h2 >How to make an account</h2>
        <div>Click the account icon in the top left corner. Here you can log in to an existing account with a username and password. To make a new account select "register" and enter a username, email, and password.</div><br>
        <h2>How to find movies</h2>
        <div>Use the navigation bar under the Shoppy logo and click the Products tab. This is where we post all of the products we currently offer.</div><br>
        <h2>How to make a purchase</h2>
        <div>From the products page, when you click the name of a movie you want, you will be directed to that movie's page. To add a product to the cart, you must first be logged in to an account. Click on the account icon in the top left to log in or register a new account. Then, go back to the product page, enter the quantity you would like to purchase and click the add to cart button.</div><br>
        <h2>How to see our promotions</h2>
        <div>Using the top navigation bar, click on the promotions tab. Here, all of the current promotions will cycle through the images.</div><br>
        <h2>How to learn more about Shoppy</h2>
        <div>Using the top navigation bar, click on the about us tab. Here, you can choose to read about our company background or the team behind Shoppy.</div><br><br>
             
  		
        <h3>For more help: <a href="faq.php">Frequently Asked Questions</a></h3>
      </div>
      
      
      
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
      <!-- Script to update theme of the site to match the current theme -->
      <?php
			require 'colourScript.php';
       	?>
    </body>
</html>