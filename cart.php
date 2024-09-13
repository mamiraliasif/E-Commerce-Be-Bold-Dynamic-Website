<?php
include('header.php');
require('functions.php');

if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}

$cart = $_SESSION['cart'];

?>

<section class="hero-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>YOUR SHOPPING CART</h1>
                <div aria-label="breadcrumb" class="d-flex justify-content-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-dark cc text-center">Home</a></li>
                        <span class="breadcrumb-item active text-dark text-center" aria-current="page">YOUR SHOPPING CART</span>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-100 h-custom" id="cartwrap">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="h5">Shopping Cart</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($cart as $key => $value) {
                                $sql = "SELECT * FROM product where id = $key";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $pname = $row['name']; // Fetch product name from database
                                $qty = $value['quantity']; // Fetch quantity from session cart
                                $price = $row['price']; // Fetch price from database
                                $totalPrice = intval($qty) * floatval($price); // Calculate total price

                            ?>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="media/product/<?php echo $row['image'] ?>" class="img-fluid rounded-3" style="width: 120px;" alt="Product">
                                            <div class="flex-column ms-4">
                                                <p class="mb-2"><?php echo $pname; ?></p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row">
                                            <button class="btn btn-link px-2" onclick="updateQuantity('<?php echo $row['id']; ?>', 'minus')">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input id="quantity_<?php echo $row['id']; ?>" min="0" name="quantity" value="<?php echo $qty; ?>" type="number" class="form-control form-control-sm" style="width: 50px;" onchange="updateQuantity('<?php echo $row['id']; ?>', 'update')" />
                                            <button class="btn btn-link px-2" onclick="updateQuantity('<?php echo $row['id']; ?>', 'plus')">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;"><?php echo '$' . $price; ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;"><?php echo '$' . $totalPrice; ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row">
                                            <a href="removeFromCart.php?id=<?php echo $row['id']; ?>">
                                                <span class="bt">Remove</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-dark btn-block btn-lg" id="bt1">
                    <div class="d-flex justify-content-between">
                        <a href="index.php"><span style="color:white">Continue Shopping</span></a>
                    </div>
                </button>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <button type="button" class="btn btn-dark btn-block btn-lg" id="bt2">
                    <div class="d-flex justify-content-between">
                        <a href="checkout.php"><span style="color:white">Checkout</span></a>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function updateQuantity(pid, type) {
        var qty = document.getElementById('quantity_' + pid).value;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'updateCart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                window.location.href = 'cart.php';
            } else {
                console.error('Request failed. Status: ' + xhr.status);
            }
        };
        var params = 'pid=' + encodeURIComponent(pid) + '&qty=' + encodeURIComponent(qty) + '&type=' + encodeURIComponent(type);
        xhr.send(params);
    }
</script>

<style>
    .empty-cart-message {
        font-size: 1.2rem;
        color: #6c757d;
        padding: 20px;
        animation: slideInDown 0.5s ease forwards;
    }

    @keyframes slideInDown {
        0% {
            opacity: 0;
            transform: translateY(-100%);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    a {
        text-decoration: none !important;
        text: white !important;
    }

    a:visited {
        color: white !important;
    }
</style>
