<?php
require('connection.php');
require('functions.php');

// Get form data
$firstName = get_safe_value($conn, $_POST['first_name']);
$lastName = get_safe_value($conn, $_POST['last_name']);
$email = get_safe_value($conn, $_POST['email']);
$password = get_safe_value($conn, $_POST['password']);
$added_on = date('Y-m-d H:i:s');

// Check if the email already exists
$sql = "SELECT * FROM user WHERE email = '$email'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);

if ($count > 0) {
    echo "User with this email already exists. Please use a different email.";
} else {
    // Insert user data into the database
    $sql = "INSERT INTO user (name, l_name, email, password, added_on) VALUES ('$firstName', '$lastName', '$email', '$password', '$added_on')";
    if (mysqli_query($conn, $sql)) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>