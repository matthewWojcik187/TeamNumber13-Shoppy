<?php
		//Connect to server/database
		require 'connectScript.php';
		// Pull the colour scheme from the database
        $sql = "SELECT ID FROM Colour";
      	$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
        $row = mysqli_fetch_array($result);

        //Check the ID and update the stylesheets
        if($row['ID'] == 1){
         	echo '<script type="text/JavaScript"> 
    		 document.getElementById("OB").rel = "stylesheet";
              document.getElementById("RG").rel = "stylesheet alternate";
              document.getElementById("PP").rel = "stylesheet alternate";
    	 </script>';
        }
        
		//Check the ID and update the stylesheets
        if($row['ID'] == 2){
         	echo '<script type="text/JavaScript"> 
    		 document.getElementById("RG").rel = "stylesheet";
              document.getElementById("PP").rel = "stylesheet alternate";
              document.getElementById("OB").rel = "stylesheet alternate";
    	 </script>';
        }
        
		//Check the ID and update the stylesheets
        if($row['ID'] == 3){
            
         	echo '<script type="text/JavaScript"> 
    		 document.getElementById("PP").rel = "stylesheet";
              document.getElementById("RG").rel = "stylesheet alternate";
              document.getElementById("OB").rel = "stylesheet alternate";
    	 </script>';
        }
?>