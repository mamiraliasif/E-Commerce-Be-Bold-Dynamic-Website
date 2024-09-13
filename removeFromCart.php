<?php
session_start();

// Check if the product ID is provided
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Check if the product exists in the cart
    if(isset($_SESSION['cart'][$product_id])) {
        // Remove the product from the cart
        unset($_SESSION['cart'][$product_id]);
        // Redirect back to the cart page
        header("Location: cart.php");
        exit;
    } else {
        // Product not found in the cart
        echo "Product not found in the cart.";
    }
} else {
    // Product ID is not provided
    echo "Product ID is missing.";
}
?>