<?php
session_start();
// Include the database connection and functions file
require('connection.php');
require('functions.php');

// Get the email and password from the POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the email and password match an existing user in the database
$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    // User found, set session variables and send success response
    $user = mysqli_fetch_assoc($res);
    $_SESSION['email'] = $email;
    $_SESSION['USER_ID'] = $user['id']; // Set user ID session variable
    $_SESSION['USER_LOGIN'] = 'yes'; // Set user login session variable
    $response = array('success' => true);
    echo json_encode($response);
} else {
    // User not found, send error response
    $response = array('success' => false, 'message' => 'Invalid email or password');
    echo json_encode($response);
}

?>