<?php
	// Connect to the database
	require 'accounts/connectScriptLogin.php';  
	
	// Grab all the items from the inventory
	$sql = "SELECT * FROM Inventory";
	$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");


	// If the user checksout
 	if(isset($_POST["submit"])){
    
     // Grab the userid
     $userid =  $_SESSION['UserID'];
     
      // Create an order for the individual
     $sql = "INSERT INTO Orders (UserID) VALUES ('$userid')";
     $result = mysqli_query($conn,$sql) or die("Bad Query: $sql");
     $orderid = mysqli_insert_id($conn);
     
      // Create an order for each item that is primary key linked to the order above. Append all the required info
     foreach($_SESSION["cart_items"] as $item){
       $productid = $item['Pid'];
       $quantity = $item["Quantity"];
       $sql = "INSERT INTO OrderItem VALUES ('$orderid','$userid','$productid','$quantity')";
       $result = mysqli_query($conn,$sql) or die("Bad Query: $sql");
       unset($_SESSION['cart_items']);
     
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
	<meta name="description" content="Our DVD selling website">
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
    
      
      	<div class="content">
          <?php
          
          if(!empty($_SESSION["cart_items"])){
            // If the cart has something in it, display a table for the cart
            $totalQty = 0;
            $totalPrice = 0;
          	echo '<table  width="100%"  text-align="center" >
            <tbody>
			<tr>
    		<th style="text-align:left;">Name</th>
            <th style="text-align:right;" width="10%">Quantity</th>
    		<th style="text-align:right;" width="10%">Unit Price</th>
            <th style="text-align:right;" width="10%">Price</th>
			</tr>';
          	
            // Printout for each item
          	foreach($_SESSION["cart_items"] as $item){
              	$rowPrice = $item["Quantity"]*$item["Price"];
                
              
              ?>
          		<tr>
                <td style="text-align:left;"><?php echo $item["Name"];?></td>
                <td style="text-align:right;"><?php echo  $item["Quantity"];?></td>
                <td style="text-align:right;"><?php echo "$ " . $item["Price"];?></td>
                <td style="text-align:right;"><?php echo "$ "  . number_format($rowPrice,2);?></td>
         		</tr>
          
                 
         	<?php	
              $totalQty += $item["Quantity"];
              $totalPrice += $rowPrice;
   		    }
              
            ?>
          <tr>
          <!--Printout for totals -->
          <td style="text-align:right;"><strong>Total:</strong></td>
          <td align="right" colspan="2"><strong><?php echo $totalQty; ?></strong></td>
          <td align="right"><strong><?php echo "$ ".number_format($totalPrice, 2); ?></strong></td>
          </tr>
          <?php 
          echo '</tbody>
          </table>';
           echo"<form method='POST'><td><button type='submit' name='submit' id='submit' value='{$_SESSION['UserID']}'>Checkout</button></tr></form>";
    
     
          }else{
            
          
          ?>
          
          <div class="no-records" style='text-align:center'>Your Cart is Empty</div>
			
          <?php 
          }
          ?>
          <!-- Script to update theme of the site to match the current theme -->
          <?php
			require 'colourScript.php';
       	?>
          

      </div>
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