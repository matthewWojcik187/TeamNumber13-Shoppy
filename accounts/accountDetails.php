<?php
	// Connect script
	require 'connectScriptLogin.php';
	// Check to see if a user is logged in. If so get their info.
	if(!empty($_SESSION["UserID"])){
      $userid = $_SESSION["UserID"];
      $result = mysqli_query($conn, "SELECT * FROM UserData WHERE UserID = '$userid'");
      $row = mysqli_fetch_assoc($result);
     // Else bump them back to log in
    }else{
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
	 <meta name="description" content="Our DVD selling website account details">
    <meta name="keywords" content="DVD, E-Commerce, Account, Shoppy, Login, Welcome, Message">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts used -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Stylesheets used -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ShoppyLogin.css">
    <link id="OB" rel="stylesheet" type="text/css" href="../Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="../Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="../Shoppy3.css">
    
    
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
      
      <!-- Div for the information on the account Details page. -->
      <div class='content'>
        <div class="container">
      <br>
      <h1 id = "user"></h1>
        <p>Thank you for being a member of Shoppy. We hope you enjoy all the content!</p>
        <p> As a member you can make purchases! </p>
        <?php
        	echo"Email: {$row['Email']}";
        ?>
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
          </body>
  			       <!-- Script to update theme of the site to match the current theme and grab the user id -->
  			 <?php
  			
				require '../colourScript.php';
  					if(!empty($_SESSION["UserID"])){
                      $userid = $_SESSION["UserID"];
                      $result = mysqli_query($conn, "SELECT * FROM UserData WHERE UserID = '$userid'");
                      $row = mysqli_fetch_assoc($result);
                      echo "<script>
                  		var x = document.querySelector('#user');
                  			if (!('uName' in x.dataset)) {
                       		 x.dataset.uName = '{$row['Username']}';    
                  			}
            				document.getElementById('user').innerHTML = 'Hello ' + x.dataset.uName;
            				</script>";
        			}
       		?>
</html>