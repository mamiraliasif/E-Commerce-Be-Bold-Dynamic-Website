<?php

// session_start();
include('header.php');
require('functions.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}

// Check if the user is logged in


// Check if 'id' key exists in the $_GET array
$cat_id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';

// Only proceed if 'id' parameter is set
if (!empty($cat_id)) {
    $get_product = get_product('', $conn, $cat_id);

    $category_name = '';
    $cat_res = mysqli_query($conn, "SELECT categories FROM categories WHERE id = '$cat_id'");
    if ($cat_row = mysqli_fetch_assoc($cat_res)) {
        $category_name = $cat_row['categories'];
    }


?>





<!-- header end  -->

<!-- hero shop start  -->

<section class="heroshop">
    <div class="container">
        <!-- shop bread start    -->
        <div class="row shopbread">
            <div class="col-12">
                <div aria-label="breadcrumb" class="d-flex justify-content-start" >
                    <ol class="breadcrumb ">
                      <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none cc">Home</a></li>
                      
                      <li class="breadcrumb-item active text-center" aria-current="page"><?php echo $category_name; ?></li>
                    </ol>
                    </ol>
                </div>
            </div>
        </div>
         <!-- shop bread end    -->

         <!-- shop heading start -->
         <div class="row shoph1">
            <div class="col-12">
                <h1>
                <h1><?php echo $category_name; ?></h1>
                </h1>
            </div>
         </div>
        <!-- shop heading end -->

        <!-- result count start  -->
         <div class="row resultcount">
            <div class="col-12 p1">
                <p>
                    <!-- Showing all 8 results -->
                </p>
            </div>
           

         </div>

        <!-- result count end -->

    </div>
</section>


<!-- hero shop end -->


<!-- product 1 strat -->
<section class="shop-p-wraper">
<?php if(count($get_product)>0) { ?>
    <div class="container hh">
        
        <div class="row justify-content-between p-1 mb-4">
        <?php
        
 // Added a semicolon at the end
foreach ($get_product as $list) {
?>
    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 shop-p">
        <div class="p-img">
            <a href="productd.php?id=<?php echo $list['id'] ?>"><img src="media/product/<?php echo $list['image'] ?>" alt="product 1" class="img-fluid"></a>
            <span class="sale">Sale!</span>
            <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd1.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
            <h2><?php echo $list['name'] ?></h2>
            <span class="text-decoration-line-through cutting">$<?php echo $list['mrp'] ?></span>
            <span class="price">$<?php echo $list['price'] ?></span>
        </div>
    </div>

    <br>
<?php } ?>

           
            
            
           
        </div>
        
        
    </div>
    
    <?php } else{
        echo "<h4 style=\"text-align: center;\">Data not Found</h4>";
    } ?> 
    <br><br><br>


    
</section>

<!-- product 1 end  -->
<!-- footer -->


  
  <?php
} else {
    // Handle case when 'id' parameter is not set
    echo "<h4 style=\"text-align: center;\">ID not provided</h4>";
}




include('footer.php');

?>
  
  <!-- footer ends  -->

 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>