<?php

include('header.php');
require('functions.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}

// Define variables for pagination
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$records_per_page = 8; // Number of products per page

// Calculate the offset for the query
$offset = ($page - 1) * $records_per_page;

// Fetch products for the current page
$all_products = get_all_products_paginated($conn, $offset, $records_per_page);

// Get total number of products for pagination
$total_products = count_all_products($conn);

// Calculate total number of pages
$total_pages = ceil($total_products / $records_per_page);

?>

<!-- header end  -->

<!-- hero shop start  -->
<section class="heroshop">
    <div class="container">
        <!-- shop bread start    -->
        <div class="row shopbread">
            <div class="col-12">
                <div aria-label="breadcrumb" class="d-flex justify-content-start">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none cc">Home</a></li>
                         <span class="breadcrumb-item active text-center" aria-current="page">Shop All Products</span>
                    </ol>
                </div>
            </div>
        </div>
        <!-- shop bread end    -->

        <!-- shop heading start -->
        <div class="row shoph1">
            <div class="col-12">
                <h1>
                    Shop All Products
                </h1>
            </div>
        </div>
        <!-- shop heading end -->

        <!-- result count start  -->
        <div class="row resultcount">
            <div class="col-12 p1">
                <p>
                    <!-- Showing all <?php echo $total_products; ?> results -->
                </p>
            </div>
        </div>
        <!-- result count end -->

    </div>
</section>
<!-- hero shop end -->

<!-- product grid start -->
<section class="shop-p-wraper">
    <div class="container hh">
        <div class="row justify-content-between p-1 mb-4">
            <?php if (count($all_products) > 0) {
                foreach ($all_products as $product) { ?>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 shop-p">
                        <div class="p-img">
                            <a href="productd.php?id=<?php echo $product['id']; ?>"><img src="media/product/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-fluid"></a>
                            <span class="sale">Sale!</span>
                            <!-- Add to cart button or icon here -->
                        </div>
                        <div class="p-ratting">
                        <div class="s-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                                            <span class="fa fa-star-o" data-rating="2"></span>
                                            <span class="fa fa-star-o" data-rating="3"></span>
                                            <span class="fa fa-star-o" data-rating="4"></span>
                                            <span class="fa fa-star-o" data-rating="5"></span>
                                            <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                        </div>
                            
                            <h2><?php echo $product['name']; ?></h2>
                            <span class="text-decoration-line-through cutting">$<?php echo $product['mrp']; ?></span>
                            <span class="price">$<?php echo $product['price']; ?></span>
                        </div>
                    </div>
                <?php }
            } else {
                echo "<h4 style=\"text-align: center;\">No products found</h4>";
            } ?>
        </div>
    </div>
</section>
<!-- product grid end -->

<!-- Pagination -->
<div class="container">
    <div class="row p-1 pagr">
        <div class="col-12 pagi">
            <nav aria-label="...">
                <ul class="pagination">
                <?php if ($page > 1) { ?>
                    <li class="page-item">
                        <a class="page-link" href="shop1.php?page=<?php echo $page - 1; ?>"><i class="bi bi-arrow-left"></i></a>
                    </li>
                <?php } ?>
                <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                    <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                        <a class="page-link" href="shop1.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php } ?>
                <?php if ($page < $total_pages) { ?>
                    <li class="page-item">
                        <a class="page-link" href="shop1.php?page=<?php echo $page + 1; ?>"><i class="bi bi-arrow-right"></i></a>
                    </li>
                <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
                
<!-- Pagination end -->

<!-- footer -->
<!-- <div class="search-text">
    <div class="container">
        <div class="row text-center">
            <div class="form">
                <h4 id="h4">SUBSCRIBE TO OUR NEWSLETTER</h4>
                <form id="search-form" class="form-search form-horizontal">
                    <input type="text" class="input-search" placeholder="Enter Email Address...">
                    <button type="submit" class="btn-search">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</div> -->
<?php include('footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


