<?php
session_start();

// Check if the session is not set, redirect to login page
if (!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != 'yes') {
    header('Location: login.php');
    exit(); // Ensure that script execution stops after redirection
}
require('connection.php');
require('functions.php');
$cat_id = mysqli_real_escape_string($conn, $_GET['id']);
$get_product = get_product( '' , $conn , $cat_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font Awesome cdn  -->
    <script src="https://kit.fontawesome.com/7cc056dfea.js" crossorigin="anonymous"></script>

    <!-- bootstrap icons cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- font open sans  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- font Marcellus  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="productd.css">
    <title>Product Detail - Be Bold</title>
</head>
<body>


     <!-- header  -->

     <header class="header-wrap sticky-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="./Images/logo-regular.png" alt="Be Bold" class="img-fluid">
            </a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-sharp fa-solid fa-bars-staggered"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                
            
            
            <ul class="navbar-nav menu">
            <?php

// Check if categories session is set

// Fetch categories from session
$categories = getAllActive("categories");
if ($categories) {
    if (mysqli_num_rows($categories) > 0) {
        foreach ($categories as $category) {
            // Convert category name to lowercase and remove spaces to use as URL slug
            $urlSlug = strtolower(str_replace(' ', '', $category['categories']));
            echo '<li class="nav-item text-left text-uppercase">';
            echo '<a class="nav-link hover-line" href="' . $urlSlug . '.html">' . $category['categories'] . '</a>';
            echo '</li>';
        }
    }
} else {
    // Handle case when categories query fails
    echo '<li class="nav-item text-left text-uppercase">';
    echo '<a class="nav-link hover-line" href="#">Categories Not Available</a>';
    echo '</li>';
}

function getAllActive($table)
{
    global $conn; // Make $conn accessible within the function
    $query = "SELECT * FROM $table WHERE status = 1";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
        return false;
    }
    return $result;
}
?>
<li class="nav-item text-left text-uppercase">
                <a class="nav-link hover-line" href="about.php">About</a>
              </li>
              <li class="nav-item text-left text-uppercase">
                <a class="nav-link hover-line" href="contact.php">Contact</a>
              </li>
                </ul>
                <ul class="navbar-nav menu1 d-flex">
                    <li class="nav-item text-left text-uppercase">
                        <a class="nav-link " href="login.html"><i class="fa-solid fa-user"></i>
                        </a></li>
                    <li class="nav-item text-left text-uppercase">  <a class="nav-link" href="cart.html">
                            <span>$59.00</span>
                            <i class="fa-solid fa-cart-shopping cart"></i>
                            <span class="cart1 text-center">1</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
</header>

 <script>
   document.addEventListener("DOMContentLoaded", function () {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const menu = document.querySelector(".menu");
    const menu1 = document.querySelector(".menu1");
  
    navbarToggler.addEventListener("click", function () {
      menu.classList.toggle("left-align");
      menu1.classList.toggle("hide");
    });
  });
 </script>


  <!-- header end  -->


    <!-- hero start  -->

    
        <section class="container sproduct my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12">
                    <img src="./pd2/product-14-a-600x731.jpg" alt="" class="img-fluid w-100 pb-4" id="mainimg">
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="./pd2/product-14-a.jpg" width="100%" alt="" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="./pd2/product-14-b.jpg" width="100%" alt="" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="./pd2/product-14-c.jpg" width="100%" alt="" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="./pd2/product-bg-02.jpg" width="100%" alt="" class="small-img">
                        </div>
                    </div>
                </div>
                
                    <div class="col-lg-6 col-md-12 col-12 right ms-5">
                        <div aria-label="breadcrumb" class="d-flex justify-content-start" >
                            <ol class="breadcrumb ">
                              <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none cc">Home</a></li>
                              <li class="breadcrumb-item"><a href="skincare.html" class="text-decoration-none cc">Skin Care</a></li>
                              <li class="breadcrumb-item active text-center" aria-current="page">Product Name 11</li>
                            </ol>
                        </div>
                        <div class="pname">
                            <a href="">Skin Care</a>
                        </div>
                        <h1>
                            Product Name 11
                        </h1>
                        <span class="cutting text-decoration-line-through common">
                            $75.00
                        </span >
                        <span class=" common" id="price">
                            $59.00
                        </span >
                        <span class="p">
                            & Free Shipping
                        </span>
                        <p>
                            Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac <br>neque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus. <br>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere <br> cubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis <br>
                            lobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis <br> dapibus dolor, eu venenatis diam nibh id massa.
                        </p>
                        <p>
                            Nulla eget tortor ultrices, ultricies turpis a, accumsan turpis. Quisque <br> dignissim semper leo ac accumsan. Quisque est nisl, bibendum ut elit quis, <br>
                            pellentesque vehicula tellus. Sed luctus mattis ante ac posuere.
                        </p>
                        <div class="wrapper ">
                            <span class="minus">-</span>
                            <span class="num">01</span>
                            <span class="plus">+</span>
                            <span class="bt">
                                ADD TO CART
                            </span>
                          </div>
                          <hr>
                          <span class="catagory">Category: Skin Care</span>
                    </div>
                
        
            </div>
        </section>

     <!-- hero end  --> 

     <!-- tab section start  -->

    <section class="Tabwrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" aria-current="page" href="#description">Description</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#revi" data-bs-toggle="tab">Reviews (0)</a>
                        </ul>
                        <div class="tab-content">
                            <div id="description" class="fade active tab-pane show">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>
                                            More about the product
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac massa eget urna tempor vehicula vel id nisi. <br> Pellentesque sed felis auctor, molestie lectus vitae, elementum orci. In et nunc consequat, semper tellus eget, euismod <br> quam.
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-5 " id="bg-img">
                                    <div class="col-12">
                                        <h6 class="text-center text-light" id="h6">NUNC SED JUSTO</h6>
                                        <h3 class="text-center text-light">Cras vehicula semper ex, et fermentum tortor varius eget <br> interdum et malesuada fames ac ante</h3>
                                        <span class="d-flex justify-content-center text-light">_______</span>
                                    </div>
                                </div>


                                <div class="row mt-1 pfeatures">
                                    <div class="col-md-6 left">
                                        <h3>
                                            Product's Features
                                        </h3>
                                        <span>_______</span>
                                    </div>
                                    <div class="col-md-6 right">
                                        <h4>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit. Ut elit tellus, luctus nec ullamcorper mattis.
                                        </h4>
                                        <div class="mt-4 vv">
                                            <i class="faa fa-regular fa-circle-dot"></i>
                                            <span>
                                                Nunc sed justo at nisi commodo varius
                                            </span>
                                        </div>
                                        <hr>
                                        <div class="mt-4">
                                            <i class="faa fa-regular fa-circle-dot"></i>
                                            <span>
                                                Ut eu urna enim. Curabitur posuere fermentum
                                            </span>
                                        </div>
                                        <hr>
                                        <div class="mt-4"><i class="faa fa-regular fa-circle-dot"></i>
                                            <span>
                                                Curabitur at orci nec urna aliquet porta
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5 align-items-center" id="bg-img1">
                                    
                                        <div class="col-12">
                                            <div class="container">
                                                <div class="container">

                                                    <div class="container">
                                                        <h6 class="text-light mt-4">
                                                            BLUETOOTH CONNECTION
                                                        </h6>
                                                        <h3 class="text-light">
                                                            Always connected to your <br> mobile phone!
                                                        </h3 class="text-light">
                                                        <span class="text-light">
                                                            ______
                                                        </span>
                                                        <h4 class="text-light mt-4">
                                                            Ut eu urna enim. Curabitur posuere <br> fermentum libero, pretium dignissim est <br> lacinia nec. Aenean dapibus ante sed <br> pharetra scelerisque.
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    

                                </div>
                            </div>
                            <div id="revi" class=" tab-pane fade ">
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <p>There are no reviews yet.</p>
                                    </div>
                                    <div class="col-12 boxwrapper">
                                        <div class="container box">
                                            
                                            <section>
                                                <div class="row d-flex justify-content-center">
                                                  <div class="col-md-10 col-xl-8 text-center">
                                                    <h3 class="mb-4">Testimonials</h3>
                                                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                                                      numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                                                      quisquam eum porro a pariatur veniam.
                                                    </p>
                                                  </div>
                                                </div>
                                              
                                                <div class="row text-center">
                                                  <div class="col-md-4 mb-5 mb-md-0">
                                                    <div class="d-flex justify-content-center mb-4">
                                                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                                        class="rounded-circle shadow-1-strong" width="150" height="150" />
                                                    </div>
                                                    <h5 class="mb-3">Maria Smantha</h5>
                                                    <h6 class="text-primary mb-3">Model</h6>
                                                    <p class="px-xl-3">
                                                      <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
                                                      adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                                                      tenetur.
                                                    </p>
                                                    <ul class="list-unstyled d-flex justify-content-center mb-0">
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="col-md-4 mb-5 mb-md-0">
                                                    <div class="d-flex justify-content-center mb-4">
                                                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                                        class="rounded-circle shadow-1-strong" width="150" height="150" />
                                                    </div>
                                                    <h5 class="mb-3">Lisa Cudrow</h5>
                                                    <h6 class="text-primary mb-3">Hair Designer</h6>
                                                    <p class="px-xl-3">
                                                      <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
                                                      exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                                                    </p>
                                                    <ul class="list-unstyled d-flex justify-content-center mb-0">
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <div class="col-md-4 mb-0">
                                                    <div class="d-flex justify-content-center mb-4">
                                                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                                        class="rounded-circle shadow-1-strong" width="150" height="150" />
                                                    </div>
                                                    <h5 class="mb-3">John Smith</h5>
                                                    <h6 class="text-primary mb-3">Skin Specialist</h6>
                                                    <p class="px-xl-3">
                                                      <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
                                                      dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                                                    </p>
                                                    <ul class="list-unstyled d-flex justify-content-center mb-0">
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      <li>
                                                        <i class="fas fa-star fa-sm text-warning"></i>
                                                      </li>
                                                      
                                                    </ul>
                                                  </div>
                                                </div>
                                              </section>

                                        </div>
                                    </div>

                                </div>
                                
                                    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </section>

    <!-- tab section end  -->


    <section class="heroshop mt-5">
        <div class="container">
           
    
             <!-- shop heading start -->
             <div class="row shoph1">
                <div class="col-12">
                    <h1>
                        Related Products
                    </h1>
                </div>
             </div>
            <!-- shop heading end -->

    
        </div>
    </section>

    <!-- product 1 strat -->
<section class="shop-p-wraper">
    <div class="container hh">
        <div class="row justify-content-between p-1">
            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd1.html"><img src="./haircare/product-04-a-300x366.jpg" alt="product 1" class="img-fluid"></a>
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
          <h2>Product Name 1</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$59.00</span>
          
         
         </div>
            </div>
            

            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd2.html"><img src="./haircare/product-14-a-300x366.jpg" alt="product 2" class="img-fluid"></a>
                    <span class="sale">Sale!</span>
                    <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd2.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          <h2>Product Name 2</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$100.00</span>
          
         
         </div>
            </div>

            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd5.html"><img src="./haircare/product-12-a-300x366.jpg" alt="product 3" class="img-fluid"></a>
                    <span class="sale">Sale!</span>
                    <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd5.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          <h2>Product Name 3</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$110.00</span>
          
         
         </div>
            </div>

            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd9.html"><img src="./haircare/product-18-a-300x366.jpg" alt="product 4" class="img-fluid"></a>
                    <span class="sale">Sale!</span>
                    <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd9.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          <h2>Product Name 4</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$59.00</span>
          
         
         </div>
            </div>

            
            
           
        </div>
        <div class="row justify-content-between p-1">
            <div class="col-md-3 col-sm-6 shop-p">
              <div class="p-img">
                <a href="pd19.html"><img src="./haircare/product-13-a-300x366.jpg "alt="product 5" class="img-fluid"></a>
                <span class="sale">Sale!</span>
                <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd19.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          <h2>Product Name 5</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$59.00</span>
          
         
         </div>
            </div>
            

            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd10.html"><img src="./haircare/product-19-a-300x366.jpg" alt="product 6" class="img-fluid"></a>
                    <span class="sale">Sale!</span>
                    <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd10.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          <h2>Product Name 6</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$100.00</span>
          
         
         </div>
            </div>

            <div class="col-md-3 col-sm-6 shop-p">
              <div class="p-img">
                <a href="pd12.html"><img src="./haircare/product-20-b-300x366.jpg" alt="product 7" class="img-fluid"></a>
                <span class="sale">Sale!</span>
                <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd12.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          <h2>Product Name 7</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$110.00</span>
          
         
         </div>
            </div>

            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd2.html"><img src="./haircare/product-14-a-300x366.jpg" alt="product 8" class="img-fluid"></a>
                    <span class="sale">Sale!</span>
                    <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd2.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          <h2>Product Name 8</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$59.00</span>
          
         
         </div>
            </div>

            
            
           
        </div>
        
        
    </div>
    
</section>

<!-- product 1 end  -->

<!-- footer -->

<div class="search-text"> 
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
  </div>
  
  <footer>
  <div class="container">
    <div class="row">
             <div class="col-md-3 col-sm-4 col-xs-12">
               <span class="logo"><a href="index.html"><img src="./Images/logo-regular.png" alt="logo" class="img-fluid"></a></span>
             </div>
             
             <div class="col-md-3 col-sm-6 col-xs-12">
    <ul class="menu text-left">
        <span>Menu</span>    
        <?php
        // Fetch categories from the database
        $categories = getAllActive("categories");
        if ($categories && mysqli_num_rows($categories) > 0) {
            while ($row = mysqli_fetch_assoc($categories)) {
                // Convert category name to lowercase and remove spaces to use as URL slug
                $urlSlug = strtolower(str_replace(' ', '', $row['categories']));
                echo '<li>';
                echo '<a href="' . $urlSlug . '.html">' . $row['categories'] . '</a>';
                echo '</li>';
            }
        } else {
            // Handle case when categories are not available
            echo '<li>';
            echo '<a href="#">Categories Not Available</a>';
            echo '</li>';
        }
        ?>
    </ul>
</div>
        
             <div class="col-md-3 col-sm-4 col-xs-12">
               <ul class="address text-left">
                 <span>Contact</span>       
                 <li>
                    <i class="fa fa-phone" aria-hidden="true"></i> 
                    <a href="#">Phone</a>
                 </li>
                 <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> 
                    <a href="#">Adress</a>
                 </li> 
                 <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i> 
                    <a href="#">Email</a>
                 </li> 
                </ul>
             </div>
             <div class="col-md-3 col-sm-4 col-xs-12 sociali">
              
                <h3 class="text-center" id="social">Scoial Media</h3>
                    <hr>
                        <div class="text-center center-block">
                            <p class="txt-railway">- Join Us -</p>
                            <br />
                                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                              <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                              <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                </div>
                    
                
             </div>
         </div> 
     </div>
  </footer>
  
  <section class="footerbottom">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>Copyright © 2024 Be Bold | Powered by Be Bold</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- footer ends  -->




   

    
      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
      <div class="elfsight-app-41bcd829-84b4-4689-9c92-8ca414892d2c" data-elfsight-app-lazy></div>


    <script>
        let Mainimg = document.getElementById("mainimg");
        let smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function (){
            Mainimg.src = smallimg[0].src;
        }

        smallimg[1].onclick = function (){
            Mainimg.src = smallimg[1].src;
        }

        smallimg[2].onclick = function (){
            Mainimg.src = smallimg[2].src;
        }

        smallimg[3].onclick = function (){
            Mainimg.src = smallimg[3].src;
        }
    </script>

    <script>
        const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");

        let a = 1;

        plus.addEventListener("click", ()=>{
            a++;
            a = (a < 10) ? "0" + a : a;
            num.innerText=a;
        })
        minus.addEventListener("click", ()=>{
            if (a > 1){
                a--;
                a = (a < 10) ? "0" + a : a;
                num.innerText=a;
            }
        })
    </script>



     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>