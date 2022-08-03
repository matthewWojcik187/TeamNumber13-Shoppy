<?php
// Call the connect script
require 'connectScriptLogin.php';
// Terminate the session and bring them back to the login page to allow for a new connection
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");
?>