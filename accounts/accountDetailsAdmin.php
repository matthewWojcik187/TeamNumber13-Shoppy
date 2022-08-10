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
	<meta name="description" content="Our DVD selling website account details admin">
    <meta name="keywords" content="DVD, E-Commerce, Account, Shoppy, Login, Monitor, Update">
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
                    <img id="logoOB" src="../Logo.png" onmouseenter="src='../Logo2.png'" onmouseleave="src='../Logo.png'" onclick="window.location.href='../Shoppy.php'" alt="Shoppy" style= "height:100%">
                    <img id="logoPP" src="../Shoppy_LogoPP1.png" onmouseenter="src='../Shoppy_LogoPP2.png'" onmouseleave="src='../Shoppy_LogoPP1.png'" onclick="window.location.href='../Shoppy.php'" alt="Shoppy" style= "height:100%">
                    <img id="logoRG" src="../Shoppy_LogoRG1.png" onmouseenter="src='../Shoppy_LogoRG2.png'" onmouseleave="src='../Shoppy_LogoRG1.png'" onclick="window.location.href='../Shoppy.php'" alt="Shoppy" style= "height:100%">
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
      <div class='content'>
      <h1>Admin Site</h1>
      
      <div id = "navigation"> 
            <button  onclick="window.location.href = 'adminNewProduct.php'" style="flex-grow: 5">Add new product</button>
            <button  onclick="window.location.href = 'adminGenUsers.php'" style="flex-grow: 5">Create a list of all users with emails</button>
        	<button  onclick="window.location.href = 'adminColours.php'" style="flex-grow: 5">Change site theme</button>
        	<button  onclick="window.location.href = 'adminHelp.php'" style="flex-grow: 5">Admin Help</button>
        
            
          </div>
        <!-- Monitor to check if site apps are working -->
        <h1><br>Monitor:</h1>
        
        <?php
        	$green = $green . '<div>
    			<img src="Greenlight.png" alt="green" height="100px"/></div>';
        	$red = $red . '<div>
    			<img src="Redlight.png" alt="green" height="100px"/></div>';
        
            $result = mysqli_query($conn, "SELECT * FROM UserData WHERE UserID = '10'") or die("User database: $red");
            $row = mysqli_fetch_assoc($result);
            echo "User database: $green";
            echo "<br>";
            $result = mysqli_query($conn, "SELECT * FROM Colour WHERE Name = '1'") or die("ColourScript: $red");
          	$row = mysqli_fetch_assoc($result);
            echo "ColourScript: $green";
            echo "<br>";
            $result = mysqli_query($conn, "SELECT * FROM Inventory WHERE ProductID = '10'") or die("Inventory: $red");
         	$row = mysqli_fetch_assoc($result);
            echo "Inventory database: $green";
            echo "<br>";
          
      		?>
    <br>

	  <!-- Logout button -->
      <form action="logout.php">
        	<button class="logoutbtn" type="submit" action="logout.php">Logout</button>
        </form>
        <!-- Script to update theme of the site to match the current theme -->
      		  <?php
				require '../colourScript.php';
       		?>
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
          </body>
</html>