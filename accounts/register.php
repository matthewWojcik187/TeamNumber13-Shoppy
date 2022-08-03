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
    <meta charset="UTF-8">
    <title>Shoppy</title>
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website About Us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="OB" rel="stylesheet" type="text/css" href="../Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="../Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="../Shoppy3.css">
    <link rel="stylesheet" type="text/css" href="ShoppyLogin.css">
    <script src = "Validate.js"></script>
    
    </head>
    <body>
        <div id = "account"> 
            <button id="accountBtn" onclick="window.location.href = 'login.php'">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Account
          </button>
            <button id="cartBtn" onclick="window.location.href = '../cartPage.php'">
              Cart
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </button>
          </div>
        <div id = "title">
     
            <img id="logoOB" src="../Logo.png" onmouseenter="src='../Logo2.png'" onmouseleave="src='../Logo.png'" onclick="window.location.href='../Shoppy.php'"alt="Shoppy" height="100%">
              <img id="logoPP" src="../Shoppy_LogoPP1.png" onmouseenter="src='../Shoppy_LogoPP2.png'" onmouseleave="src='../Shoppy_LogoPP1.png'" onclick="window.location.href='../Shoppy.php'"alt="Shoppy" height="100%">
              <img id="logoRG" src="../Shoppy_LogoRG1.png" onmouseenter="src='../Shoppy_LogoRG2.png'" onmouseleave="src='../Shoppy_LogoRG1.png'" onclick="window.location.href='../Shoppy.php'"alt="Shoppy" height="100%">
             
        </div>
      <div id = "navigation"> 
          <button id="productBtn" onclick="window.location.href = '../productsPage.php'" style="flex-grow: 5">Products</button>
          <button id="promoBtn" onclick="window.location.href = '../promotions.php'" style="flex-grow: 5">Promotions</button>
          <button id="aboutBtn" onclick="window.location.href = '../AboutUs.php'" style="flex-grow: 5">About Us</button> 
        </div>
      <div class="content">
      <form action="" method="post" onsubmit="return val()">
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
      <?php
				require '../colourScript.php';
       		?>
      <div id="footer">
        
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="Help.php">Help</a>
        &emsp;
        <a href="faq.php">Frequently Asked Questions</a>
        
      </div>
    </body>
</html>