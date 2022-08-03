<?php
          if(isset($_GET['ID'])){
            require 'accounts/connectScriptLogin.php';  
			$ID = mysqli_real_escape_string($conn, $_GET['ID']);
          	$sql = "SELECT * FROM Inventory WHERE Name='$ID'";
            $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
            $row = mysqli_fetch_array($result);
          }

				//Check if user is signed in
		 if(isset($_POST["add2cart"])){
 		 
          
         	if(!empty($_SESSION["UserID"])){
              
                if(!empty($_POST["quantity"]) && ($_POST["quantity"] <= $row['Quantity'])){
                  $itemArray = array($row['Name']=>array('Name' => $row['Name'], 'Pid' => $row['ProductID'], 'Quantity' => $_POST["quantity"], 'Price' => $row['Price']));
                  if(!empty($_SESSION["cart_items"])){
                    //if(in_array($row['ProductID'],array_keys($_SESSION["cart_items"]))){
                    if(array_key_exists($row['Name'],$_SESSION["cart_items"])){
                      
                      $size = sizeof($_SESSION["cart_items"]);
                      $keys = array_keys($_SESSION["cart_items"]);
                      
                      //foreach($_SESSION["cart_items"] as $k => $v){
                      
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
    <meta charset="UTF-8">
    <title>Shoppy</title>
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website About Us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="OB" rel="stylesheet" type="text/css" href="Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="Shoppy3.css">
    
    </head>
    <body>
        <div id = "account"> 
            <button id="accountBtn" onclick="window.location.href = 'accounts/login.php'">
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
     
            <img id="logoOB" src="Logo.png" onmouseenter="src='Logo2.png'" onmouseleave="src='Logo.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
             <img id="logoPP" src="Shoppy_LogoPP1.png" onmouseenter="src='Shoppy_LogoPP2.png'" onmouseleave="src='Shoppy_LogoPP1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
             <img id="logoRG" src="Shoppy_LogoRG1.png" onmouseenter="src='Shoppy_LogoRG2.png'" onmouseleave="src='Shoppy_LogoRG1.png'" onclick="window.location.href='Shoppy.php'"alt="Shoppy" height="100%">
             
        </div>
       <?php
			require_once 'navigation.html';
        ?>
      
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
       <?php
				require 'colourScript.php';
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