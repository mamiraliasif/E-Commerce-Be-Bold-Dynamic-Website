<!-- footer.php -->
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
                        <a href="#">Address</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="#">Email</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 sociali">
                <h3 class="text-center" id="social">Social Media</h3>
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
