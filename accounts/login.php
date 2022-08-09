<?php
	// Connect to the database
	require 'connectScriptLogin.php';
	// Check to see if the user exists and connect them to the right page
	if(!empty($_SESSION["UserID"])){
      $userid = $_SESSION["UserID"];
      $sql = "Select UserData.UserID, Admin.UserID from UserData,Admin where UserData.UserID = Admin.UserID and UserData.UserID = '$userid'";
      $result2 = mysqli_query($conn, $sql) or die("Bad Query: $sql");
          
      if(mysqli_num_rows($result2) > 0){
      	header("Location: accountDetailsAdmin.php");
      }else{
        header("Location: accountDetails.php");
      } 
    }

	// If the user tries to log in
	if(isset($_POST["submit"])){
      // Grab the username and password
      $username = $_POST["username"];
      $password = $_POST["password"];
      // Pull it from the database
	  $sql = "SELECT * FROM UserData where Username = '$username'";
      $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
      
      // Grab the whole row
      $row = mysqli_fetch_assoc($result);
      // It it exists check to try to log them in
	  if(mysqli_num_rows($result) > 0){
        if($password == $row["Password"]){
          $_SESSION["login"] = true;
          $_SESSION["UserID"] = $row["UserID"];
          $userid = $row["UserID"];
          $_SESSION["cart_items"] = array();
          
          $sql = "Select UserData.UserID, Admin.UserID from UserData,Admin where UserData.UserID = Admin.UserID and UserData.UserID = '$userid'";
          $result2 = mysqli_query($conn, $sql) or die("Bad Query: $sql");
          
          if(mysqli_num_rows($result2) > 0){
            header("Location: accountDetailsAdmin.php");
          }else{
          header("Location: accountDetails.php");
          } 
          // Otherwise give them an error
      }else{
        echo
            "<script>alert('Wrong Password');</script>";
      }
    }else{
        echo
            "<script>alert('No user data found');</script>";
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
	<meta name="description" content="Our DVD selling website login page">
    <meta name="keywords" content="DVD, E-Commerce, Account, Shoppy, Login, User, Form, Username, Password">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts used -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Stylesheets used -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link id="OB" rel="stylesheet" type="text/css" href="../Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="../Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="../Shoppy3.css">
    <link rel="stylesheet" type="text/css" href="ShoppyLogin.css">>
    
    
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
      
      <!-- Login form -->
      <form action="" method="POST">
         <div class='content'>
  		<div class="container">
    		<h1>Login</h1>
    		<hr>
    		<label for="username"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="username" id="username" required>

    		<label for="password"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" id="password" required>

    		<hr>

    		<button type="submit" class="registerbtn" name="submit" id="submit">Login</button>
  			</div>
       
  			<span class="container signin">
    			<p>Don't have an account yet? <a href="register.php" style="text-align:center">Register</a></p>
  			</span>
        	</div>
</form>
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
  <!-- Script to update theme of the site to match the current theme -->
  		<?php
				require '../colourScript.php';
       		?>
</html>