<?php
session_start();
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}

if(isset($_POST['pid']) && isset($_POST['qty']) && isset($_POST['type'])) {
    $pid = $_POST['pid'];
    $qty = $_POST['qty'];
    $type = $_POST['type'];

    // Validate input data
    if(!is_numeric($pid) || !is_numeric($qty)) {
        // Handle invalid input
        exit("Invalid product ID or quantity");
    }

    // Perform the update operation based on the action type
    switch($type) {
        case 'minus':
            // Decrease quantity by 1
            $_SESSION['cart'][$pid]['quantity'] = max(0, $_SESSION['cart'][$pid]['quantity'] - 1);
            break;
        case 'plus':
            // Increase quantity by 1
            $_SESSION['cart'][$pid]['quantity'] += 1;
            break;
        case 'update':
            // Update quantity to the new value
            $_SESSION['cart'][$pid]['quantity'] = max(0, $qty);
            break;
        default:
            // Handle unknown action type
            exit("Unknown action type");
    }

    // Optionally, you can calculate the total price of the item here
    // $totalPrice = $_SESSION['cart'][$pid]['quantity'] * $product_price;

    // Optionally, you can echo a success message or updated cart data
    // echo "Cart updated successfully";
    // echo json_encode($_SESSION['cart']);
} else {
    // Handle missing parameters
    exit("Missing parameters");
}
?>
