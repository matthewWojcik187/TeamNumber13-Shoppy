<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <title>Shoppy</title>
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	  <meta name="description" content="Our DVD selling website Help">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="OB" rel="stylesheet" type="text/css" href="Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="Shoppy3.css">
    
    </head>
    <body>
        <div id = "account"> 
            <button id="accountBtn" onclick="window.location.href = 'accounts/login.php';">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Account
          </button>
            <button id="cartBtn" onclick="window.location.href = 'cartPage.php';">
              Cart
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </button>
          </div>
        <div id = "title">
     
            <img id="logoOB" src="Logo.png" onmouseenter="src='Logo2.png'" onmouseleave="src='Logo.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
              <img id="logoPP" src="Shoppy_LogoPP1.png" onmouseenter="src='Shoppy_LogoPP2.png'" onmouseleave="src='Shoppy_LogoPP1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
              <img id="logoRG" src="Shoppy_LogoRG1.png" onmouseenter="src='Shoppy_LogoRG2.png'" onmouseleave="src='Shoppy_LogoRG1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
             
        </div>
      <div id = "navigation"> 
          <button id="productBtn" onclick="window.location.href = 'productsPage.php'" style="flex-grow: 5">Products</button>
          <button id="promoBtn" onclick="window.location.href = 'promotions.php'" style="flex-grow: 5">Promotions</button>
          <button id="aboutBtn" onclick="window.location.href = 'AboutUs.php'" style="flex-grow: 5">About Us</button> 
        </div>

      <div id = "productInfo"><br>
        <h1>User Help Guide</h1><br>
        <h2 id = "FaqQuestion">How to make an account</h2>
        <div>Click the account icon in the top left corner. Here you can log in to an existing account with a username and password. To make a new account select "register" and enter a username, email, and password.</div><br>
        <h2 id = "FaqQuestion">How to find movies</h2>
        <div>Use the navigation bar under the Shoppy logo and click the Products tab. This is where we post all of the products we currently offer.</div><br>
        <h2 id = "FaqQuestion">How to make a purchase</h2>
        <div>From the products page, when you click the name of a movie you want, you will be directed to that movie's page. To add a product to the cart, you must first be logged in to an account. Click on the account icon in the top left to log in or register a new account. Then, go back to the product page, enter the quantity you would like to purchase and click the add to cart button.</div><br>
        <h2 id = "FaqQuestion">How to see our promotions</h2>
        <div>Using the top navigation bar, click on the promotions tab. Here, all of the current promotions will cycle through the images.</div><br>
        <h2 id = "FaqQuestion">How to learn more about Shoppy</h2>
        <div>Using the top navigation bar, click on the about us tab. Here, you can choose to read about our company background or the team behind Shoppy.</div><br><br>
             
  		
        <h3>For more help: <a href="faq.php">Frequently Asked Questions</a></h3>
      </div>
      
      
      
      
      <div id="footer">
        
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="Help.php">Help</a>
        &emsp;
        <a href="faq.php">Frequently Asked Questions</a>
        
      </div>
      <?php
			require 'colourScript.php';
       	?>
    </body>
</html>