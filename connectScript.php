<?php
$servername = "localhost";
$username = "wojcikm_Shoppy";
$password = "Shoppy123";
$dbname = "wojcikm_Shoppy";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

?>