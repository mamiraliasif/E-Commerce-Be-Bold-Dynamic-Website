<!-- header.php -->
<?php 
session_start();
require('connection.php');

// Check if email session is set
if (isset($_SESSION['email'])) {
    $emailSet = true; // Set a flag indicating email session is set
} else {
    $emailSet = false; // Set a flag indicating email session is not set
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

?>
<header class="header-wrap sticky-top">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- font Awesome cdn  -->
<script src="https://kit.fontawesome.com/7cc056dfea.js" crossorigin="anonymous"></script>

<!-- bootstrap icons cdn  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="jquery-3.7.1.min.js"></script>
<!-- font open sans  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets\css\productd.css">
<link rel="stylesheet" href="assets\css\contact.css">
<link rel="stylesheet" href="assets\css\about.css">
<!-- font Marcellus  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="assets\css\login.css"> 
<link rel="stylesheet" href="assets\css\shop.css">
<!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./Images/logo-regular.png" alt="Be Bold" class="img-fluid">
            </a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-sharp fa-solid fa-bars-staggered"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav menu">
                <li class="nav-item text-left text-uppercase">
                  <a class="nav-link hover-line" href="shop1.php">SHOPALL</a>
                </li>
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
            // Redirect to categories1.php with category ID as parameter
            echo '<a class="nav-link hover-line" href="categories1.php?id=' . $category['id'] . '">' . $category['categories'] . '</a>';
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
    <!-- Logout and My Order links -->
    <?php if($emailSet): ?>
                    <!-- Logout link -->
                    <li class="nav-item text-left text-uppercase" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout">
                        <a class="nav-link" href="logout1.php"><i class="bi bi-box-arrow-left"></i></a>
                    </li>
                    <!-- My Order link -->
                    <li class="nav-item text-left text-uppercase" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Order">
                        <a class="nav-link" href="my_order.php"><i class="bi bi-basket"></i></a>
                    </li>
                <?php else: ?>
                    <!-- Login link -->
                    <li class="nav-item text-left text-uppercase">
                        <a class="nav-link" href="login1.php"><i class="fa-solid fa-user"></i></a>
                    </li>
                <?php endif; ?>

                <?php 
					 $cart = $_SESSION['cart'];
					 $count = count($cart);
				?>
                <!-- Cart link -->
                <li class="nav-item text-left text-uppercase">  <a class="nav-link" href="cart.php">
                  <!-- <span>$59.00</span> -->
                  <i class="fa-solid fa-cart-shopping cart"></i>
                  <span class="cart1 text-center"><?php echo $count?></span>
              </a></li>
            </ul>
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
