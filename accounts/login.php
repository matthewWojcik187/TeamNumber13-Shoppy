<?php
	require 'connectScriptLogin.php';
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

	
	if(isset($_POST["submit"])){
      $username = $_POST["username"];
      $password = $_POST["password"];
      
	  $sql = "SELECT * FROM UserData where Username = '$username'";
      $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
      
      $row = mysqli_fetch_assoc($result);
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
    <meta charset="UTF-8">
    <title>Shoppy</title>
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	  <meta name="description" content="Our DVD selling website About Us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="OB" rel="stylesheet" type="text/css" href="../Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="../Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="../Shoppy3.css">
    <link rel="stylesheet" type="text/css" href="ShoppyLogin.css">
    
    
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
      <div id="footer">
        
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="Help.php">Help</a>
        &emsp;
        <a href="faq.php">Frequently Asked Questions</a>
        
      </div>
    </body>
  		<?php
				require '../colourScript.php';
       		?>
</html>