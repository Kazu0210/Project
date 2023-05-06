<?php
session_start(); // start the session

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: LP1.html");
exit;
?>
