<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Shoppy</title>
    <!-- Meta data for SEO -->
    <meta charset="UTF-8">
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	<meta name="description" content="Our DVD selling website About Us:Team">
    <meta name="keywords" content="DVD, E-Commerce, About us, Shoppy, Info, Information, Team, Descriptions, Workload, Developers">
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
      
      	<!-- Div for page info -->
		<div id = "productInfo">
        <h3> 
          
          At Shoppy, we value our team above all else and strive to assemble the greatest team of passionate developers who love not only DVDs but life itself. Our team consists of four of the most unconventional computer science majors at the University of Windsor. Named the Busy Beavers our founding members are Matthew Smith, Matthew Wojcik, Michael Schneider, and Brandon Mailloux. Our team, also known as group 13 has dedicated itself to revolutionizing the DVD rental and distribution industry. Fun, Family, and DVDs are our biggest passions in life, and we will strive to share our passions with the world. All our employees get 15% off all of our DVDs and are expected to keep up with our industry by watching at least 5 DVDs a month outside of company time. 
          
        </h3>
          
        <div>
          <!-- Michael Schneider info -->
          <table>
  <tr>
    <td>
    	<img src="Michael.jpg" height="300px" width="250px">
    </td>
    <td>
    <h1 style="width: 50%">Michael Schneider</h1>
          <p style="width: 50%">
          Michael Schneider is a computer science major with a minor in mathematics. He is our HR representative and jack of all trades. His work stretches into all areas of Shoppy, helping out wherever it's needed and grinding out rough outlines of webpages and Shoppy features. Micheal doesn't fear school, whether that be for the better, or worse.

          </p>
    </td>
  </tr>
</table>
        </div>
         
        <div>
          <!-- Matthew Wojcik info -->
          <table>
  <tr >
    <td>
    	<img src="Woj.jpg" height="300px" width="250px">
    </td>
    <td>
    <h1>Matthew Wojcik</h1>
          <p style="width: 50%">
Matthew Wojcik is a computer science major with a minor in mathematics. He's the leader of the Shoppy project. Shoppy is his brainchild, and as any good parent, he is dedicated to Shoppy and passionate about all that it represents. Developing a lot of the stucture and backend of Shoppy, his name is all over the PHP and dynamic pages that make up Shoppy. This photo of his is a rare find as he is very camera shy.
          </p>
    </td>
  </tr>
</table> 
        </div>
        
          <div>
            <!-- Brandon Mailloux info -->
          <table>
  <tr >
    <td>
    	<img src="Brandon.jpg" height="300px" width="250px">
    </td>
    <td>
    <h1>Brandon Mailloux</h1>
          <p style="width: 50%">
Brandon Mailloux is a computer science major with a minor in mathematics. He's our polisher (despite his obscene spelling and grammar), refining the project by ensuring webpages are formatted and aesthetically pleasing with CSS. He also wrote the content on the static webpages, including this one. He was previously our HR representative but was too paranoid all the time to thrive in the role. Never joke that he missed a test with him, otherwise he panics.          </p>
    </td>
  </tr>
</table> 
        </div>
          
        <div>
          <!-- Matthew Smith info -->
          <table>
  <tr>
    <td>
    		<img src="Smitty.jpg" height="300px" width="250px">
    </td>
    <td>
    <h1>Matthew Smith</h1>
          <p style="width: 50%">
Matthew Smith is not just a computer science major. He's a business computer science double major. He is also our lead graphic designer, with his skill and abilities on display all over Shoppy with his high-quality, custom-made advertisements. He’s no stranger to the backend either, Smitty has also aided in the devlopement of the backend PHP and dynamic webpage development. He also has a pretty recognizable father.
    </td>
  </tr>
</table> 
        </div>
       
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