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

	// Delete user if the admin asks too
	if(isset($_POST["submit"])){
    
     $userid =  $_POST["submit"];
      
     $sql = "DELETE FROM UserData where UserID ='$userid'";
     $result = mysqli_query($conn,$sql) or die("Bad Query: $sql");
     
     }
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Shoppy</title>
    <!-- Meta data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website admin user list page">
    <meta name="keywords" content="DVD, E-Commerce, Account, Shoppy, Admin, User, Update, Delete, Edit, List">
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
      <div class='content'>
      <h1>Admin Site</h1>
      
      <div id = "navigation"> 
            <button  onclick="window.location.href = 'adminNewProduct.php'" style="flex-grow: 5">Add new product</button>
            <button  onclick="window.location.href = 'adminGenUsers.php'" style="flex-grow: 5">Create a list of all users with emails</button>
        	<button  onclick="window.location.href = 'adminColours.php'" style="flex-grow: 5">Change site theme</button>
        	<button  onclick="window.location.href = 'adminHelp.php'" style="flex-grow: 5">Admin Help</button>
            
          </div>
        
      <h2>User Data:</h2>
      
          <?php
        	// Select all users
        	$sql = "SELECT * FROM UserData";
			$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
			$count = 1;
        	// Create table
          	echo '<table width="100%"  text-align="center" >';
        	echo '<tr>
            	  <th>User Count</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  </tr>';
        	// For all rows display their info
          	if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_array($result)){
               
              
           		echo"<tr><td text-align='center' width='20%'>{$count}</td>";
                echo"<td text-align='center' width='20%'>{$row['Username']}</td>";
                echo"<td text-align='center' width='20%'>{$row['Email']}</td>";
                echo"<form method='POST' action='adminUpdateUser.php'><td text-align='center' width='20%'><button class='editbtn' type='submit' name='edit' id='edit' value='{$row['UserID']}'>Edit User</button></form>";
                echo"<form method='POST'><td text-align='center' width='20%'><button class='deletebtn' type='submit' name='delete' id='delete' value='{$row['UserID']}'>Delete User</button></tr></form>";
                
              	$count++;
              }
              
			echo '</table>';
			}
            ?>
        	<!-- Logout button -->
			<form action="logout.php">
        		<button class="logoutbtn" type="submit" action="logout.php">Logout</button>
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