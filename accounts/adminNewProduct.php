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
	
	// Upload file directory
	$uploadDirectory = "../images/";
	// If the new product form was submitted
	if(isset($_POST["submit"])){
      // Collect all the data from the post
      $name = $_POST["name"];
      $price = $_POST["price"];
      $quantity = $_POST["quantity"];
      $description =  $_POST["description"];
      $rating = $_POST["rating"];
      $genre =  $_POST["genre"];
      $year = $_POST["year"];
      
      // Collect all the image data
      $fileExtensionsAllowed = ['jpeg','jpg','png'];
      $fileName = $_FILES['img']['name'];
      $fileSize = $_FILES['img']['size'];
      $fileTmpName  = $_FILES['img']['tmp_name'];
      $fileType = $_FILES['img']['type'];
      $fileExtension = strtolower(end(explode('.',$fileName)));
      
      
	  // Upload file directory
	  $uploadDirectory = "../images/";
      $uploadPath = $uploadDirectory . basename($fileName);
      //Upload the file and check for errors
      $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
      // If the file is uploaded perform the database push.
      if ($didUpload) {
          $file = basename($fileName);
      	  $sql = "INSERT INTO Inventory (Name, Price, Quantity,Description,Rating,Genre,Year, img) VALUES ('$name','$price','$quantity','$description','$rating','$genre','$year','$file')";
          mysqli_query($conn,$sql) or die("Bad Query: $sql");
          echo "The file " . $file . " has been uploaded";
          
        } else {
          echo "An error occurred. Please contact the administrator.";
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
            <button id="cartBtn" onclick="window.location.href = 'cartPage.php'">
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
      <div class='content'>
      <h1>Admin Site</h1>
      
      <div id = "navigation"> 
            <button  onclick="window.location.href = 'adminNewProduct.php'" style="flex-grow: 5">Add new product</button>
            <button  onclick="window.location.href = 'adminGenUsers.php'" style="flex-grow: 5">Create a list of all users with emails</button>
        	<button  onclick="window.location.href = 'adminColours.php'" style="flex-grow: 5">Change site theme</button>
        	<button  onclick="window.location.href = 'adminHelp.php'" style="flex-grow: 5">Admin Help</button>
            
          </div>
      <form action="" method="POST" enctype="multipart/form-data">
  		<div class="container">
    		<h1>Enter a new product: </h1>
    		<hr>
    		<label for="name"><b>Name: </b></label>
            <input type="text" placeholder="Enter Movie name" name="name" id="name" required>

            <label for="price"><b>Price:</b></label>
            <input type="text" placeholder="Enter Price" name="price" id="price" required>
          
              <label for="Quantity"><b>Quantity:</b></label>
            <input type="text" placeholder="Enter Quantity" name="quantity" id="quantity" required>
          
              <label for="Description"><b>Description:</b></label>
            <input type="text" placeholder="Enter Description" name="description" id="description" required>

            <label for="Rating"><b>Rating:</b></label>
            <input type="text" placeholder="Enter Rating" name="rating" id="rating" required>
          
              <label for="Genre"><b>Genre:</b></label>
            <input type="text" placeholder="Enter Genre" name="genre" id="genre" required>
          
              <label for="Release Year"><b>Release Year:</b></label>
            <input type="text" placeholder="Enter Release Year" name="year" id="year" required>

            
          	<label for="img"><b>Image: </b></label>
    		<input type="file" placeholder="Image" name="img" id="img" required>

    		<hr>

    		<button type="submit" class="registerbtn" name="submit" id="submit">Submit Product</button>
  			</div>

  			
</form>
      <form action="logout.php">
        	<button class="logoutbtn" type="submit" action="logout.php">Logout</button>
        </form>
      </div>
      
      <div id="footer">

        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="../Help.php">Help</a>
        &emsp;
        <a href="../faq.php">Frequently Asked Questions</a>

      </div>
          </body>
  		<?php
				require '../colourScript.php';
       		?>
</html>