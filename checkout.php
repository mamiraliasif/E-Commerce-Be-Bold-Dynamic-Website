<?php 
require('header.php');
require('functions.php');

if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit();
}

if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
    ?>
    <script>
        window.location.href = 'shop1.php';
    </script>
    <?php
    exit;
}

$cart_total = 0;
$user_id = isset($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : null;

if(isset($_POST['submit'])){
    $address = get_safe_value($conn, $_POST['address']);
    $city = get_safe_value($conn, $_POST['city']);
    $pincode = get_safe_value($conn, $_POST['pincode']);
    $payment_type = get_safe_value($conn, $_POST['payment_type']);

    if(!$user_id) {
        echo "User ID is not set in session.";
        exit;
    }

    foreach($_SESSION['cart'] as $key => $val){
        $productArr = get_productdd('', $conn, '', $key);
        $price = $productArr[0]['price'];
        $qty = $val['qty'];
        $cart_total += ($price * $qty);
    }

    // Debug: Check cart total
    echo "Cart Total: " . $cart_total . "<br>";

    $payment_status = 'pending';
    if($payment_type == 'COD'){
        $payment_status = 'pending';
    }

    $order_status = '1';
    $added_on = date('Y-m-d h:i:s');

    $insert_order_query = "INSERT INTO `orderr` (user_id, address, city, pincode, payment_type, total_price, payment_status, order_status, added_on) 
                           VALUES ('$user_id', '$address', '$city', '$pincode', '$payment_type', $cart_total, '$payment_status', '$order_status', '$added_on')";

    // Debug: Check the SQL query
    echo "SQL Query: " . $insert_order_query . "<br>";

    if(mysqli_query($conn, $insert_order_query)){
        $order_id = mysqli_insert_id($conn);
        
        foreach($_SESSION['cart'] as $key => $val){
            $productArr = get_productdd('', $conn, '', $key);
            $price = $productArr[0]['price'];
            $qty = $val['qty'];
            $insert_order_detail_query = "INSERT INTO `order_detail` (order_id, product_id, qty, price) VALUES ('$order_id', '$key', '$qty', '$price')";
            mysqli_query($conn, $insert_order_detail_query);
        }
        
        unset($_SESSION['cart']);

        ?>
        <script>
            window.location.href = 'thank_you.php';
        </script>
        <?php
        exit;
    } else {
        echo "Error: " . $insert_order_query . "<br>" . mysqli_error($conn);
    }
}
?>



<style>
    .order-details {
    background-color: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.order-details__title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.order-details__item {
    margin-bottom: 20px;
}

.single-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.single-item__thumb {
    flex: 0 0 120px;
    margin-right: 10px;
}

.single-item__thumb img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.single-item__content {
    flex: 1;
}

.single-item__content a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
}

.single-item__content a:hover {
    text-decoration: underline;
}

.single-item__remove {
    flex: 0 0 40px;
}

.single-item__remove a {
    color: #aaa;
    font-size: 1.2rem;
}

.single-item__remove a:hover {
    color: #333;
}

.ordre-details__total {
    text-align: right;
}

.ordre-details__total h5 {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
}

.price {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form method="post">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Address Information
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="bilinfo">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <input type="text" name="address" class="form-control" placeholder="Street Address" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="text" name="city" class="form-control" placeholder="City/State" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="text" name="pincode" class="form-control" placeholder="Post code/ zip" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Payment Information
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="paymentinfo">
                                    <div class="single-method">
                                        <label class="form-check-label">
                                            COD <input type="radio" name="payment_type" class="form-check-input" value="COD" required>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="form-check-label">
                                            PayU <input type="radio" name="payment_type" class="form-check-input" value="payu" required>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark btn-lg">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="order-details">
                <h5 class="order-details__title">Your Order</h5>
                <div class="order-details__item">
                <?php
                            $total = 0;
                            foreach ($cart as $key => $value) {
                                $sql = "SELECT * FROM product where id = $key";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $pname = $row['name']; // Fetch product name from database
                                $qty = $value['quantity']; // Fetch quantity from session cart
                                $price = $row['price']; // Fetch price from database
                                $totalPrice = intval($qty) * floatval($price);
                                $cart_total += $totalPrice; // Calculate total price

                            ?>
<div class="single-item">
    <div class="single-item__thumb">
        <img src="media/product/<?php echo $row['image'] ?>" class="img-fluid rounded-3" style="width: 120px;" alt="Product">
    </div>
    <div class="single-item__content">
        <a href="#"><?php echo $pname ?></a>
        <span class="price"><?php echo $totalPrice ?></span>
    </div>
    <div class="single-item__remove">
        <a href="removeFromCart.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash3-fill "></i></a>
    </div>
</div>
<?php } ?>
                </div>
                <div class="ordre-details__total">
                    <h5>Order total</h5>
                    <span class="price"><?php echo $cart_total?></span>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
require('footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
