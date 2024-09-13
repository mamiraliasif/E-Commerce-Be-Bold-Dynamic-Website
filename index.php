<?php
 // Start the session
require('header.php');
require('functions.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}


?>
  

    <!-- header end  -->
    
    <!-- hero  -->

    <section>
        <div class="hero">
            <div class="container-fluid bg-img ">
                <div class="container">
                  <div class="row ">
                  
                         <div class="col-lg-6 hero-txt text-light ">
                  
                                  <h6 >NEW IN TOWN</h6>
                                  <h1 >The New Beauty</h1>
                                  <h1 >Collection</h1>
                                  <h4 >This new collection brings with it the most exciting, <br> lorem ipsum dolor sit amet.</h4>
                                  <a class="" href="#"><button class="btn btn1 focus " type="submit">Shop now</button></a>
                  
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <!-- logo slider section  -->
    

    <!-- trending text section  -->
    <section class="trending-wrapper">
      <div class="container">
        <div class="row trending-text text-center pt-5">
          <h6>POPULAR PRODUCTS</h6>
        </div>
        <div class="row trending-text text-center pb-4">
            <h2>Trending Now</h2>
        </div>
      </div>
    </section>
    <!-- trending text section end  -->

    <!-- trending card section  -->
    <section class="shop-p-wraper">
      <div class="container hh">
          <div class="row justify-content-evenly ">
              <div class="col-md-3 col-sm-6 shop-p">
                  <div class="p-img">
                      <a href="pd1.html"><img src="./Images/trending-img/product-04-a-300x366.jpg" alt="product 1" class="img-fluid"></a>
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
                      <a href="pd2.html"><img src="./Images/trending-img/product-14-a-300x366.jpg" alt="product 2" class="img-fluid"></a>
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
                      <a href="productdetail.html"><img src="./Images/trending-img/product-09-a-300x366.jpg" alt="product 3" class="img-fluid"></a>
                      <span class="sale">Sale!</span>
                      <span class="cart-icon d-flex align-items-center justify-content-center"><a href="productdetail.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
                      <a href="pd3.html"><img src="./Images/trending-img/product-10-a-300x366.jpg" alt="product 4" class="img-fluid"></a>
                      <span class="sale">Sale!</span>
                      <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd3.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
          
          
      </div>
      
  </section>

    <!-- trending card section end  -->

    <!-- Best selling text product  -->

    <section class="trending-wrapper bestselling-wrapper">
      <div class="container">
        <div class="row trending-text text-center ">
          <h6>SHOP</h6>
        </div>
        <div class="row trending-text text-center pb-4">
            <h2>Best Selling</h2>
        </div>
      </div>
    </section>
  <!-- Best selling text product  -->

  <!-- Best selling cards  -->
  <section class="shop-p-wraper ">
    <div class="container hh">
        <div class="row justify-content-evenly ">
            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd2.html"><img src="./Images/trending-img/product-14-a-300x366.jpg" alt="product 1" class="img-fluid"></a>
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
          <h2>Product Name 1</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$59.00</span>
          
         
         </div>
            </div>
            

            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd1.html"><img src="./Images/trending-img/product-04-a-300x366.jpg" alt="product 2" class="img-fluid"></a>
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
          <h2>Product Name 2</h2>
          <span class="text-decoration-line-through cutting">$75.00</span>
          <span class="price">$100.00</span>
          
         
         </div>
            </div>

            <div class="col-md-3 col-sm-6 shop-p">
                <div class="p-img">
                    <a href="pd3.html"><img src="./Images/trending-img/product-10-a-300x366.jpg" alt="product 3" class="img-fluid"></a>
                    <span class="sale">Sale!</span>
                    <span class="cart-icon d-flex align-items-center justify-content-center"><a href="pd3.html"><i class="bi bi-cart-plus-fill"></i></a></span>
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
                    <a href="#"><img src="./Images/trending-img/product-09-a-300x366.jpg" alt="product 4" class="img-fluid"></a>
                    <span class="sale">Sale!</span>
                    <span class="cart-icon d-flex align-items-center justify-content-center"><a href="#"><i class="bi bi-cart-plus-fill"></i></a></span>
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
        
        
    </div>
    
</section>
   <!-- Best selling cards end  -->


   <!-- middle section  -->
   <section>
    <div class="hero pt-5 bg-light">
        <div class="container-fluid bg-img1  ">
            <div class="container">
              <div class="row ">
              
                     <div class="col-lg-6 hero-txt text-light ">
              
                              <h6 >NEW COLLECTION</h6>
                              <h2 class="middle-h2">The beauty collection</h2>
                              <h2 class="middle-h2">that makes all the</h2>
                              <h2 class="middle-h2">difference!</h2>
                              <p class="middle-h4">Aliquam vulputate, nunc vitae suscipit aliquet, libero arcu hendrerit <br> sapien.</p>
                              <a class="" href="#"><button class="btn btn1 focus " id="btn1" type="submit">Shop now</button></a>
              
                        </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
  <!-- middle section end  -->

<!-- video section start  -->
<section class="video-wrappper">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12 video">

        <video loop muted autoplay playsinline src="./3b1368ef525243daadd6443088c8880e.mp4"></video>
        <div class="overlay pt-5">

            
              <h2 class="text-center">CLEAN ORGANIC AND NATURAL COSMETIC PRODUCTS</h2>
              <p class="text-center">Deal with hyperpigmentation, Be-Bold skin lightening products are formulated to even out skin tone and restore the <br> skin’s natural color get even, clear and radiant</p>
              <span class="d-flex justify-content-center">
                <a href="skincare.html">VIEW PRODUCTS</a>
              </span>
            
            
        </div>
        

      </div>
    </div>
  </div>

</section>


<!-- video section end  -->

  <!-- review section starts  -->

  <section class="review bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 review-left">
          
            <h6 >JANE OLIVER</h6>
            <h2 >Lorem ipsum dolor sit amet,</h2>
            <h2 >consectetur adipiscing elit.</h2>
            <h2>Phasellus posuere...</h2>
            <span class="mt-4"> _________</span>
          
        </div>
        <div class="col-md-6 review-right pt-2  mt-3">
          <div class="container">
            <span class="star">⭐⭐⭐⭐⭐</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Phasellus posuere tincidunt purus, eu consectetur eros sodales <br> nec. Maecenas ac erat pretium, ultricies nibh quis, mattis massa.</p>
            <h6>JAMES OLIVER</h6>
            <span > _______</span>
          </div>
          <br><br>
          <div class="container">
            <span class="star mt-4">⭐⭐⭐⭐⭐</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Phasellus posuere tincidunt purus, eu consectetur eros sodales <br> nec. Maecenas ac erat pretium, ultricies nibh quis, mattis massa.</p>
            <h6>JAMES OLIVER</h6>
            <span > _______</span>
          </div>
          <br><br>
          <div class="container">
            <span class="star mt-4 ">⭐⭐⭐⭐⭐</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Phasellus posuere tincidunt purus, eu consectetur eros sodales <br> nec. Maecenas ac erat pretium, ultricies nibh quis, mattis massa.</p>
            <h6>JAMES OLIVER</h6>
            <span > _______</span>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!-- review section ends  -->

  <!-- background cards  -->
  <section class="bg-cards-wrapper bg-light" >
    <div class="bg-cards">
      <div class="container-fluid">
        <div class="row justify-content-evenly ">
          <div class="col-md-4 col-sm-12 crd " style="background-image: url(./Images/bg-001.jpg);">
            <div class="container">
                <div class="container ">
                  <div class="container kk">
                    <h6 >NEW COLLECTIONS</h6>
                    <h2 >Awesome</h2>
                    <h2 >Makeup Kit</h2>
                    <h2>Gift Sets</h2>
                    <h4 >Find your unique style.</h4>
                    <a class="" href="shopall.html"><button class="btn btn1 focus " type="submit">Shop now</button></a>
                  </div>
                </div>
            </div>

          </div>
          <div class="col-md-4 crd col-sm-12 "  style="background-image: url(./Images/bg-02.jpg);">
            <div class="container">
              <div class="container ">
                <div class="container kk">
                  <h6 >NEW COLLECTIONS</h6>
                  <h2 >The Ultimate</h2>
                  <h2 >Skincare</h2>
                  <h2>Regime</h2>
                  <h4 >Find your unique style.</h4>
                  <a class="" href="shop2.html"><button class="btn btn1 focus " type="submit">Shop now</button></a>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- background cards ends -->

<!-- why chooose us  -->
  <section class="why-wrapper bg-light" >
    <div class="container-fluid">
      <div class="row pt-5 whyus">
        <div class="col-12">
          <h6 class="text-center">WHY CHOOSE US</h6>
          <div class="text-center line1">________</div>
        </div>
      </div>
      <div class="row services justify-content-around">
        <div class="col-md-3 ">
          <span class="span1"><i  class="fas fa-shipping-fast text-center" ></i></span>
          <span class="span2">Fast Delivery</span>
          <p class="text-left">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit. <br> Ut elit tellus, luctus nec ullamcorper mattis.</p>
        </div>
        <div class="col-md-3">
          <span class="span1"><i class="fas fa-dolly text-center"></i></span>
          <span class="span2">Free Shipping</span>
          <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit. <br> Ut elit tellus, luctus nec ullamcorper mattis.</p>
        </div>
        <div class="col-md-3">
          <span class="span1" id="arrow"><i class="bi bi-send-arrow-down fas text-center"></i></span>
          <span class="span2">Easy Returns</span>
          <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit. <br> Ut elit tellus, luctus nec ullamcorper mattis.</p>
        </div>
      </div>
    </div>
  </section>
<!-- why chooose end  -->
<!-- footer -->

<?php require('footer.php')?>    

<!-- footer ends  -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  

  <!-- Initialize Swiper -->
  <script>
     

    var swiper = new Swiper(".card-slider", {
      slidesPerView: 6,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 19,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 60,
        },
        773: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
      },
    });
  </script>
   <!-- rating.js file -->
   <script>
    let navBar = document.querySelectorAll('.nav-link');
    let navCollapse = document.querySelector('.navbar-collapse.collapse');
    navBar.forEach(function(a){
      a.addEventListener("click",function(){
        navCollapse.classList.remove("show");
      })
    })
   </script>
    
  </body>
</html>