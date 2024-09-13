<?php
 session_start();
// Initialize cart session variable if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['id'])) {
    if (isset($_GET['quantity'])) {
        $quantity = $_GET['quantity'];
    } else {
        $quantity = 1;
    }
    $id = $_GET['id'];

    $_SESSION['cart'][$id] = array('quantity' => $quantity);
    header("Location: productd.php?id=$id");
    exit;
    // echo '<pre>';
    // print_r($_SESSION['cart']);
    // echo '<pre>';
}
?>
