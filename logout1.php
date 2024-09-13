<?php
session_start(); // Start session

// Destroy session to logout the user
session_destroy();

// Redirect to login1.php after logout
header('Location: login1.php');
exit();
?>