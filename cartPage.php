<?php
	
	require 'accounts/connectScriptLogin.php';  
	

	$sql = "SELECT * FROM Inventory";
	$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");


 	if(isset($_POST["submit"])){
    
     $userid =  $_SESSION['UserID'];
     
     $sql = "INSERT INTO Orders (UserID) VALUES ('$userid')";
     $result = mysqli_query($conn,$sql) or die("Bad Query: $sql");
     $orderid = mysqli_insert_id($conn);
     
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
    <meta charset="UTF-8">
    <title>Shoppy</title>
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	  <meta name="description" content="Our DVD selling website About Us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link id="OB" rel="stylesheet" type="text/css" href="Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="Shoppy3.css">
    <link rel="stylesheet" href="foundation.css">
    
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
      
      	<div class="content">
          <?php
          
          if(!empty($_SESSION["cart_items"])){
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
          <?php
			require 'colourScript.php';
       	?>
          

      </div>
      <div id="footer">
        
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">Back to top</a>
        &emsp;
        <a href="Help.php">Help</a>
        &emsp;
        <a href="faq.php">Frequently Asked Questions</a>
        
      </div>
    </body>
</html>