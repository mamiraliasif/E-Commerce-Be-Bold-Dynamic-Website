<?php


include('header.php');
require('functions.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}


// Get the product ID from the URL
$product_id = mysqli_real_escape_string($conn, $_GET['id']);

// Fetch product details based on the product ID
$get_product = get_productdd('', $conn, '', $product_id);

$category_id = $get_product[0]['categories_id'];

// Fetch related products based on the same category
$related_products = get_productdd('8', $conn, $category_id);
?>

<section class="container sproduct my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img src="media/product/<?php echo $get_product[0]['image']; ?>" alt="" class="img-fluid w-100 pb-4" id="mainimg">
        </div>

        <div class="col-lg-6 col-md-12 col-12 right ms-5">
            <div aria-label="breadcrumb" class="d-flex justify-content-start">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none cc">Home</a></li>
                    <li class="breadcrumb-item"><a href="categories1.php?id=<?php echo $get_product[0]['categories_id']; ?>" class="text-decoration-none cc"><?php echo $get_product[0]['categories']; ?></a></li>
                    <li class="breadcrumb-item active text-center" aria-current="page"><?php echo $get_product[0]['name']; ?></li>
                </ol>
            </div>

            <h1><?php echo $get_product[0]['name']; ?></h1>
            <span class="cutting text-decoration-line-through common">$<?php echo $get_product[0]['mrp']; ?></span>
            <span class=" common" id="price">$<?php echo $get_product[0]['price']; ?></span>
            <span class="p">In Stock</span>
            <p><?php echo $get_product[0]['short_desc']; ?></p>
            <p><?php echo $get_product[0]['description']; ?></p>

            <div class="wrapper">
       <form action="addToCart.php" method="GET" style="display: inline;">
        <input type="hidden" name="id" value="<?php echo $product_id; ?>">
        <p style="display:inline"><span class="num">Qty:</span></p>
        <input type="number" name="quantity" class="form-control" min="0">
        <button type="submit" class="bt btn-lg" style=" padding: 3px 0px;">ADD TO CART</button>
    </form>
</div>
        
            <hr>
            <span class="catagory">Category: <?php echo $get_product[0]['categories']; ?></span>
        </div>
    </div>
</section>



<section class="heroshop mt-5">
    <div class="container">
        <!-- Shop Heading -->
        <div class="row shoph1">
            <div class="col-12">
                <h1>Related Products</h1>
            </div>
        </div>
        <!-- Shop Heading -->

        <!-- Related Products -->
        <div class="row justify-content-between p-1">
            <?php foreach ($related_products as $product) : ?>
            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                <a href="productd.php?id=<?php echo $product['id']; ?>">
    <img src="media/product/<?php echo $product['image']; ?>" alt="product" class="img-fluid">
</a>
                    <!-- Other Product Details -->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Related Products -->
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 



<?php include('footer.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>