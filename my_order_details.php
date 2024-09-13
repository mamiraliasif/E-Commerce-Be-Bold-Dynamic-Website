<?php 
require('header.php');
require('functions.php');
$added_on = date('Y-m-d h:i:s');

if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}

// Redirect to login1.php if user is not logged in
if (!isset($_SESSION['USER_ID'])) {
    echo '<script>window.location.href = "login1.php";</script>';
    exit();
}

// Get the order ID from the URL and sanitize it
$order_id = get_safe_value($conn, $_GET['id']);

// Fetch order details from the database
$res = mysqli_query($conn, "SELECT DISTINCT(order_detail.id), order_detail.*, product.name, product.image FROM order_detail, product, `orderr` WHERE order_detail.order_id='$order_id' AND `orderr`.user_id='{$_SESSION['USER_ID']}' AND order_detail.product_id=product.id");

$total_price = 0; // Initialize total price
$total_qty = 1; // Initialize total quantity

?>

<!-- Styling (unchanged) -->
<style>
/* Wishlist Table Styles */
.wishlist-area {
    padding-top: 100px;
    background-color: #f9f9f9;
}

.wishlist-table table {
    width: 100%;
    border-collapse: collapse;
}

.wishlist-table th,
.wishlist-table td {
    padding: 15px;
    border: 1px solid #ddd;
    text-align: left;
}

.wishlist-table th {
    background-color: #f5f5f5;
}

.wishlist-table tbody tr:nth-child(even) {
    background-color: #fff;
}

.wishlist-table tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}

.wishlist-table tbody td.product-thumbnail img {
    max-width: 100px;
    height: auto;
}

.wishlist-table tbody td.product-name {
    width: 25%;
}

.wishlist-table tbody td.product-price,
.wishlist-table tbody td.product-name {
    font-weight: bold;
}

/* General Styles */
.container {
    max-width: 1170px;
    margin: 0 auto;
    padding: 0 15px;
}
.product-image {
    max-width: 200px; /* Adjust as needed */
    max-height: 200px; /* Adjust as needed */
    /* Additional styles if needed */
}

@media (max-width: 767px) {
    .container {
        padding: 0 10px;
    }
}
</style>

<!-- Order details and breadcrumbs (unchanged) -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="shop1.php">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">Order Details</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wishlist-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-content">
                    <form action="#">
                        <div class="wishlist-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Product Name</th>
                                        <th class="product-thumbnail">Product Image</th>
                                        <th class="product-name">Qty</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-price">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Loop through the results and calculate totals
                                    while($row = mysqli_fetch_assoc($res)) {
                                        // Fetch and calculate the price and total price for each product
                                        $price = floatval($row['price']);
                                        $qty = intval($row['qty']);
                                        $product_total = $qty * $price;

                                        // Add to total quantity and total price
                                        $total_qty += $qty;
                                        $total_price += $product_total;
                                    ?>
                                    <tr>
                                        <td class="product-name"><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td class="product-thumbnail">
                                            <img src="media/product/<?php echo htmlspecialchars($row['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($row['name'], ENT_QUOTES); ?>" class="product-image">
                                        </td>
                                        <td class="product-name"><?php echo $row['qty']; ?></td>
                                        <td class="product-price"><?php echo number_format($price, 2); ?></td>
                                        <td class="product-price"><?php echo number_format($product_total, 2); ?></td>
                                    </tr>
                                    <?php } ?>
                                    <!-- Display total quantity and total price -->
                                    <tr>
                                        <td colspan="1"></td>
                                        <td class="product-name">Total Qty</td>
                                        <td class="product-price"><?php echo $total_qty; ?></td>
                                        <td class="product-price"><?php echo number_format($total_price, 2); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>