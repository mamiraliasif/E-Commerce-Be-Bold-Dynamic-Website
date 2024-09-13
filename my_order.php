<?php
 // Start the session
require('header.php');
require('functions.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}
if (!isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.location.href='index.php';</script>";
}


?>

<style>
    .ht__bradcaump__area {
    padding: 150px 0;
}

/* Style for the breadcrumb text */
.ht__bradcaump__wrap {
    color: #fff;
}

/* Style for the breadcrumb navigation links */
.bradcaump-inner .breadcrumb-item {
    color: #fff;
    text-transform: uppercase;
}

/* Style for the breadcrumb separator icon */
.brd-separetor {
    color: #fff;
}

/* Style for the table */
.wishlist-table {
    width: 100%;
    margin-top: 30px;
}

/* Style for the table header */
.wishlist-table th {
    font-weight: bold;
    font-size: 16px;
    color: #333;
    background-color: #f4f4f4;
    padding: 15px 10px;
    text-align: left;
}

/* Style for the table body */
.wishlist-table td {
    font-size: 14px;
    color: #666;
    padding: 15px 10px;
    border-bottom: 1px solid #f4f4f4;
}

/* Style for alternate rows */
.wishlist-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Style for the table actions */
.product-add-to-cart a {
    color: #007bff;
    text-decoration: none;
}

.product-add-to-cart a:hover {
    text-decoration: underline;
}
</style>


<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="shop1.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Thank You</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
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
                                                <th class="product-thumbnail">Order ID</th>
                                                <th class="product-name"><span class="nobr">Order Date</span></th>
                                                <th class="product-price"><span class="nobr"> Address </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Order Status </span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											// $uid=$_SESSION['email'];
											// $res = mysqli_query($conn, "SELECT orderr.*, order_status.name AS order_status_str FROM orderr INNER JOIN order_status ON order_status.id = orderr.order_status WHERE orderr.user_id='$uid'");
                                            $uid = $_SESSION['USER_ID']; // Correct session variable for the user ID
                                            $res = mysqli_query($conn, "SELECT orderr.*, order_status.name AS order_status_str FROM orderr INNER JOIN order_status ON order_status.id = orderr.order_status WHERE orderr.user_id='$uid'");

											if (mysqli_num_rows($res) > 0) {
                                                while($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                                <tr>
                                                    <td class="product-add-to-cart"><a href="my_order_details.php?id=<?php echo $row['id']?>"> <?php echo $row['id']?></a></td>
                                                    <td class="product-name"><?php echo $row['added_on']?></td>
                                                    <td class="product-name">
                                                        <?php echo $row['address']?><br/>
                                                        <?php echo $row['city']?><br/>
                                                        <?php echo $row['pincode']?>
                                                    </td>
                                                    <td class="product-name"><?php echo $row['payment_type']?></td>
                                                    <td class="product-name"><?php echo $row['payment_status']?></td>
                                                    <td class="product-name"><?php echo $row['order_status_str']?></td>
                                                </tr>
                                            <?php
                                                }
                                            } else {
                                                echo "<tr><td colspan='6'>No orders found.</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        						
<?php require('footer.php')?>        