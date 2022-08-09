<?php
		// Connect script + run a query to pull the inventory
		require 'connectScript.php';
		$sql = "SELECT * FROM Inventory";
			$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Shoppy</title>
    <!-- Meta data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website products page">
    <meta name="keywords" content="DVD, E-Commerce, Products, Shoppy, Info, Information, List, Movies, Posters">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Scripts used -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
          	// Display a table of items for the user to selection from.
          	$size = 40;
          	echo '<table  width="100%">';
			
          	$row_count = 0;
          	if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_array($result)){
                $image_source = $row['img'];
                $row_count++;
                if ($row_count==1) echo "<tr>";
                
                echo"<td width='33%'><img src=images/$image_source id='moviePoster' alt='moviePoster' width='$size%' height='auto'><br><br> 
                
                <a href='productDetails.php?ID={$row['Name']}' >{$row["Name"]}</a><br></td>";
                
                if ($row_count==3) {
                 
         		echo "</tr>";
                 
         		$row_count=0;
   				 }
              
              }
              if ($row_count>0) echo "</tr>";
				echo '</table>';
				}
            ?>
			
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