<?php
		// Get the id of the product to display the right info
          if(isset($_GET['ID'])){
            require 'accounts/connectScriptLogin.php';  
			$ID = mysqli_real_escape_string($conn, $_GET['ID']);
          	$sql = "SELECT * FROM Inventory WHERE Name='$ID'";
            $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
            $row = mysqli_fetch_array($result);
          }

		//Check to see if the user added something to cart
		 if(isset($_POST["add2cart"])){
 		 
          //Check if user is signed in
         	if(!empty($_SESSION["UserID"])){
              // If so add the information to the cart
                if(!empty($_POST["quantity"]) && ($_POST["quantity"] <= $row['Quantity'])){
                  $itemArray = array($row['Name']=>array('Name' => $row['Name'], 'Pid' => $row['ProductID'], 'Quantity' => $_POST["quantity"], 'Price' => $row['Price']));
                  // If the cart has item already append them.
                  if(!empty($_SESSION["cart_items"])){
                   
                    if(array_key_exists($row['Name'],$_SESSION["cart_items"])){
                      
                      $size = sizeof($_SESSION["cart_items"]);
                      $keys = array_keys($_SESSION["cart_items"]);
                      
                      
                      
                      for($i = 0; $i < $size; $i++){
                        $k = $keys[$i];
                        if($row['Name'] == $k){
                          if(empty($_SESSION["cart_items"][$k]["Quantity"])){
                            $_SESSION["cart_items"][$k]["Quantity"] = 0;
                          }
                          $_SESSION["cart_items"][$k]["Quantity"] += $_POST["quantity"];
                        }
                      }
                    }else{
                        $_SESSION["cart_items"] = array_merge($_SESSION["cart_items"],$itemArray);
                    }
                  }else{
					$_SESSION["cart_items"] = $itemArray;
                  }
                  // Once done send them to the cartpage.
                  header("Location: cartPage.php");
                }
            
              
            }else{
              // If the session doesn't exist set them on the login page
              header("Location: accounts/login.php");
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
	<meta name="description" content="Our DVD selling website product details page">
    <meta name="keywords" content="DVD, E-Commerce, Product, Shoppy, Details, Price, Description, Quantity, Genre, Rating, Cart">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts used -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Stylesheets used -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link id="OB" rel="stylesheet" type="text/css" href="Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="Shoppy3.css">
    
    </head>
    <body>
        <!-- top div for logo -->
      <div class="jumbotron">
  		<div class="container text-center">
      		<div id = "title">
            	<img id="logoOB" src="Logo.png" onmouseenter="src='Logo2.png'" onmouseleave="src='Logo.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
              	<img id="logoPP" src="Shoppy_LogoPP1.png" onmouseenter="src='Shoppy_LogoPP2.png'" onmouseleave="src='Shoppy_LogoPP1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
              	<img id="logoRG" src="Shoppy_LogoRG1.png" onmouseenter="src='Shoppy_LogoRG2.png'" onmouseleave="src='Shoppy_LogoRG1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
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
      			<a class="navbar-brand" href="Shoppy.php" style="color:black;">Home</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      
                <ul class="nav navbar-nav">
                  <li><a href="productsPage.php" style="color:black;">Products</a></li>
                  <li><a href="promotions.php" style="color:black;">Promotions</a></li>
                  <li><a href="AboutUs.php" style="color:black;">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="accounts/login.php" style="color:black;"><span class="glyphicon glyphicon-user"></span> Account</a></li>
                  <li><a href="cartPage.php" style="color:black;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
    		</div>
  
        </div>
	</nav>
       
       <!-- Display all the individual product info for that page -->
      	<div id="productInfo">
          <h1><?php echo $row['Name'] ?></h1>
	      <img src='images/<?php echo $row['img']?>' id='moviePoster' alt='moviePoster' width="400px" height="400px"> 
          <p>Rating: <?php echo $row['Rating'] ?> </p>
          <p> Genre: <?php echo $row['Genre'] ?></p>
          <p>Description: <?php echo $row['Description'] ?></p>
          <p>Price: $<?php echo $row['Price'] ?></p>
          <p>In Stock: <?php echo $row['Quantity'] ?></p>
		  <form method="POST" action="">
          	<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="1" />  <input type="submit" name ="add2cart" value="Add to Cart" id="add2cart" class="add2cart" /></div>
          </form>
      </div>
      <!-- Script to update theme of the site to match the current theme -->
       <?php
				require 'colourScript.php';
       		?>
      <!-- Footer div -->
      <footer class="container-fluid text-center">
        <div id="footer">
        <br>
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="Help.php">Help</a>
        &emsp;
        <a href="faq.php">Frequently Asked Questions</a>
          
      </div>
        </footer>
    </body>
</html>