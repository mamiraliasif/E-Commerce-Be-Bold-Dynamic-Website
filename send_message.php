<?php
require('connection.php');
require('functions.php');

$name = get_safe_value($conn, $_POST['name']);
$email = get_safe_value($conn, $_POST['email']);
$mobile = get_safe_value($conn, $_POST['mobile']);
$comment = get_safe_value($conn, $_POST['message']);
$added_on = date('Y-m-d h:i:s');

// Insert data into database
$insert_query = "INSERT INTO contact_us (name, email, mobile, comment, added_on) VALUES ('$name', '$email', '$mobile', '$comment', '$added_on')";
$result = mysqli_query($conn, $insert_query);

if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>