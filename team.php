<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <title>Shoppy</title>
    <meta name="author" content="Michael Schneider, Matthew Smith, Matthew Wojcik, Brandon Mailloux">
	  <meta name="description" content="Our DVD selling website About Us:Team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="OB" rel="stylesheet" type="text/css" href="Shoppy.css">
    <link id="RG" rel="stylesheet alternate" type="text/css" href="Shoppy2.css">
    <link id="PP" rel="stylesheet alternate" type="text/css" href="Shoppy3.css">
    <link rel="stylesheet" href="foundation.css">
    
    </head>
    <body>
        <div id = "account"> 
            <button id="accountBtn" onclick="window.location.href = 'accounts/login.php';">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Account
          </button>
            <button id="cartBtn" onclick="window.location.href = 'cartPage.php';">
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
      <div id = "navigation"> 
          <button id="productBtn" onclick="window.location.href = 'productsPage.php'" style="flex-grow: 5">Products</button>
          <button id="promoBtn" onclick="window.location.href = 'promotions.php'" style="flex-grow: 5">Promotions</button>
          <button id="aboutBtn" onclick="window.location.href = 'AboutUs.php'" style="flex-grow: 5">About Us</button> 
        </div>
		<div id = "productInfo">
        <p> 
          
          At Shoppy, we value our team above all else and strive to assemble the greatest team of passionate developers who love not only DVDs but life itself. Our team consists of four of the most unconventional computer science majors at the University of Windsor. Named the Busy Beavers our founding members are Matthew Smith, Matthew Wojcik, Michael Schneider, and Brandon Mailloux. Our team, also known as group 13 has dedicated itself to revolutionizing the DVD rental and distribution industry. Fun, Family, and DVDs are our biggest passions in life, and we will strive to share our passions with the world. All our employees get 15% off all of our DVDs and are expected to keep up with our industry by watching at least 5 DVDs a month outside of company time. 
          
        </p>
          
        <div>
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