<?php
	//Connect script
	require 'connectScriptLogin.php';
	// Check if there is a session
	if(!empty($_SESSION["UserID"])){
      //if so load in the users data
      $userid = $_SESSION["UserID"];
      $result = mysqli_query($conn, "SELECT * FROM UserData WHERE UserID = '$userid'");
      $row = mysqli_fetch_assoc($result);
      // double check they are an admin if not boot them from the admin consol
      $sql ="Select UserData.UserID, Admin.UserID from UserData,Admin where UserData.UserID = Admin.UserID and UserData.UserID = '$userid'";
      $result2 = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result2) == 0){
            header("Location: accountDetails.php");
          }
    }else{
      // If the session doesn't exist set them on the login page
      header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    
    <title>Shoppy</title>
    <!-- Meta data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
    <meta name="description" content="Our DVD selling website admin help page">
    <meta name="keywords" content="DVD, E-Commerce, Account, Shoppy, Admin, User, Help, Info, Information">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts used -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- Stylesheets used -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link id="OB" rel="stylesheet" type="text/css" href="../Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="../Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="../Shoppy3.css">
    <link rel="stylesheet" type="text/css" href="ShoppyLogin.css">
    
    
    </head>
    <body>
        <!-- top div for logo -->
         <div class="jumbotron">
  			<div class="container text-center">
      			<div id = "title">
                    <img id="logoOB" src="../Logo.png" onmouseenter="src='../Logo2.png'" onmouseleave="src='../Logo.png'" onclick="window.location.href='../Shoppy.php'"alt="Shoppy" height="100%">
                    <img id="logoPP" src="../Shoppy_LogoPP1.png" onmouseenter="src='../Shoppy_LogoPP2.png'" onmouseleave="src='../Shoppy_LogoPP1.png'" onclick="window.location.href='../Shoppy.php'"alt="Shoppy" height="100%">
                    <img id="logoRG" src="../Shoppy_LogoRG1.png" onmouseenter="src='../Shoppy_LogoRG2.png'" onmouseleave="src='../Shoppy_LogoRG1.png'" onclick="window.location.href='../Shoppy.php'"alt="Shoppy" height="100%">
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
                <a class="navbar-brand" href="../Shoppy.php" style="color:black;">Home</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      
              <ul class="nav navbar-nav">
                <li><a href="../productsPage.php" style="color:black;">Products</a></li>
                <li><a href="../promotions.php" style="color:black;">Promotions</a></li>
                <li><a href="../AboutUs.php" style="color:black;">About Us</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php" style="color:black;"><span class="glyphicon glyphicon-user"></span> Account</a></li>
                <li><a href="../cartPage.php" style="color:black;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
              </ul>
            </div>
  
        	</div>
	</nav>
      <!-- Admin navigation -->
       <div class="content">
      <h1>Admin Site</h1>
      <div id = "navigation"> 
            <button  onclick="window.location.href = 'adminNewProduct.php'" style="flex-grow: 5">Add new product</button>
            <button  onclick="window.location.href = 'adminGenUsers.php'" style="flex-grow: 5">Create a list of all users with emails</button>
        	<button  onclick="window.location.href = 'adminColours.php'" style="flex-grow: 5">Change site theme</button>
        	<button  onclick="window.location.href = 'adminHelp.php'" style="flex-grow: 5">Admin Help</button>
            
          </div>
     
        <!-- Div to display page info --> 
        <div id = "productInfo"><br>
          <h1>Admin Help Guide</h1><br>
          <h2 id = "FaqQuestion">Understanding the monitor</h2>
          <div>The default page on the admin site includes the database monitor. These lights indicate whether each database is operational. When the lights are green, the databases are able to be read from and written to. When the lights are red they are not working and needs an admin to investigate.</div><br>
          <h2 id = "FaqQuestion">Adding a new product</h2>
          <div>In the new product page, you can add new DVD's to sell on the site. The required information to fill out is Name, Price, Quantity(the amount that we have to sell), Description, Rating(viewer rating eg. PG, PG13, R), Genre, Release Year, and the cover image as a jpeg or png. The new product will automatically be added to the products page for users to view and purchase.</div><br>
          <h2 id = "FaqQuestion">How to view user data</h2>
          <div>By clicking "Create a list of all users with eamils", admins can view the username, email, and userid of anyone who has logged into the site. Admins can also edit usernames and emails, or delete a user from the database.</div><br>
          <h2 id = "FaqQuestion">Changing the website's colour scheme</h2>
          <div>Using the admin navigation bar, click on the "Change site theme" button. Here, there are 3 colour schemes that the admin can choose from. Clicking one of the colour combos will change the theme on all pages.</div><br>
     	<!-- Logout button -->
        <form action="logout.php">
        	<button class="logoutbtn" type="submit" action="logout.php">Logout</button>
        </form>
 
      </div>
        
        
	  
      </div>
      <!-- Footer div -->
      <footer class="container-fluid text-center">
        <div id="footer">
        <br>
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="../Help.php">Help</a>
        &emsp;
        <a href="../faq.php">Frequently Asked Questions</a>
          
      </div>
        </footer>
      
      
      <!-- Script to update theme of the site to match the current theme -->
      <?php
				require '../colourScript.php';
       		?>
      
          </body>
</html>