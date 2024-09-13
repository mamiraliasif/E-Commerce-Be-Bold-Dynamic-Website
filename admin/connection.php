<?php
$server = "localhost";
$username = "root";
$password = "";
$db= "mydatabase1";


$conn = new mysqli("$server", "$username", "$password", "$db");

if (!$conn) {

    echo " Connection Un-Successful";
}

?>