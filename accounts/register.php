<?php
	// Connect to the server
	require 'connectScriptLogin.php';

	// If the register form is submitted
	if(isset($_POST["submit"])){
      // Gather the info from the form
      $username = $_POST["username"];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];
      $email = $_POST["email"];
      // Check to see if the user already exists
	  $sql = "SELECT * FROM Users where Username = '$username'";
      $result = mysqli_query($conn, $sql);
	  if(mysqli_num_rows($result) > 0){
        echo
          "<script>alert('Username Already exists');</script>";
      }else{
        // Check to see if the password and confirm password match
        if($password == $cpassword){
          $sql = "INSERT INTO UserData (Username , Email , Password) VALUES ('$username','$email','$password')";
    	  mysqli_query($conn,$sql) or die("Bad Query: $sql");
          // Insert into database
          echo
            "<script>alert('Registered');</script>";
          	 header("Location: login.php");
          //Else fail
        }else{
          echo
            "<script>alert('Passwords do not match');</script>";
          
        }
      }
    }


	

?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Shoppy</title>
    <!-- Meta data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website register page">
  	<meta name="keywords" content="DVD, E-Commerce, Account, Shoppy, User, Register, Username, Password, Email">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts used -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src = "Validate.js"></script>
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
      
      <!-- Registration form -->
      <div class="content">
      <form method="post" onsubmit="return val()">
  		<div class="container">
    		<h1>Register</h1>
    		<hr>
          	<label for="username"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="username" id="username" maxlength="40" required>
    		<label for="email"><b>Email</b></label>
    		<input type="text" placeholder="Enter Email" name="email" id="email" maxlength="40" required>

    		<label for="password"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" id="password" maxlength="40" required>

    		<label for="cpassword"><b>Confirm Password</b></label>
    		<input type="password" placeholder="Repeat Password" name="cpassword" id="cpassword" maxlength="40" required>
    		<hr>

    		<button type="submit" class="registerbtn" name="submit" id="submit">Register</button>
  			</div>
		
  			
</form>
      </div>
      <!-- Script to update theme of the site to match the current theme -->
      <?php
				require '../colourScript.php';
       		?>
      <footer class="container-fluid text-center">
        <!-- Footer div -->
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