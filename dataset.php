<!DOCTYPE html>
<html lang = "en">
  <head>
    
    <title>Shoppy</title>
    <!-- Meta data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website Marvel information page">
    <meta name="keywords" content="DVD, E-Commerce, Info, Information, Dataset, Marvel, Movie, Sales, Shoppy, Promotions">
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

      <div id = "productInfo" ><br>
        <h1>Marvel Movie Sales</h1>
        <!-- Taken from https://www.openintro.org/data/index.php?data=mcu_films -->
        <?php
        //We used a data set containing information of all the marvel movies from https://www.openintro.org/data/index.php?data=mcu_films
        echo "<table>\n\n";
        $f = fopen("mcu_films.csv", "r");
        while (($line = fgetcsv($f)) !== false) {
                echo "<tr>";
                foreach ($line as $cell) {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>\n";
        }
        fclose($f);
        echo "\n</table>";
        
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
      <!-- Script to update theme of the site to match the current theme -->
      <?php
			require 'colourScript.php';
       	?>
    </body>
</html>