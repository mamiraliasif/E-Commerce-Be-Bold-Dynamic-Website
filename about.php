<?php

include('header.php');
require('functions.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}

?>

<section>
    <div class="contact-hero" >
        <div class="container-fluid bg-img " id="abouthero">
            <div class="container">
              <div class="row ">
              
                     <div class="col-lg-6 hero-txt text-light ">
              
                              <h6 >A FEW WORDS</h6>
                              <h1 >About Us</h1>
                              
                      </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="belowhero">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-5 belowleft">
                <h2>
                    Lorem ipsum dolor sit
                </h2>
                <h2>
                    amet, consectetur
                </h2>
                <h2>
                    adipiscing elit.
                </h2>
                <h5>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </h5>
                <span>________</span>
            </div>
            <div class="col-md-5 belowright">
                <h4>Cras ut ultricies risus. Etiam ac malesuada</h4>
                <h4>lectus. Sed congue nisi vitae lorem</h4>
                <h4>ullamcorper laoreet. In eget tellus mauris.</h4>
                <h4>
                    Phasellus id ligula.
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed <br> rhoncus eget enim eget tincidunt. In finibus nisi ex, eu <br> interdum urna euismod sit amet. Morbi sollicitudin in magna <br> sed tristique. Nulla pharetra sapien eros, sit amet bibendum <br> nibh consectetur quis. Curabitur tortor dolor, fringilla eu <br> fringilla id, dignissim in urna. </p>

                <p>
                    Morbi sollicitudin in magna sed tristique. Nulla pharetra  <br> eros, sit amet bibendum nibh consectetur quis. Curabitur <br> tortor dolor, fringilla eu fringilla id.
                </p>
            </div>
        </div>
    </div>

 </section>



 <section class="aboutproduct">

    <div class="container bg-img">
        <div class="row">
            <div class="col-12 text-center text-light product-txt">
                <h2>
                    About Our Products
                </h2>
                <span>
                    ________
                </span>
                <h4>
                    Proin at velit sed elit varius porttitor. Ut a suscipit quam, eu congue odio. Sed <br> eget viverra est. Vivamus ut sodales neque. Sed vel dui et dolor placerat egestas <br>id lacinia mauris
                </h4>
            </div>
        </div>
        
    </div>

</section>



<section class="ownerwrapper">
    <div class="container owner">
        <div class="row">
            <div class="col-md-6 left">
                <img src="./aboutimgs/about-01.jpg" alt="">
            </div>
            <div class="col-md-6 right text-end">
                <h6>
                    ABOUT ME
                </h6>
                <h2>
                    Hi, I'm Diana!
                </h2>
                <h4>
                    I'm a 32 years old women entrepreneur, <br> living in Miami, Florida
                </h4>
                
                <span>
                    ________
                </span>
                <p>
                    Sed ut fringilla dolor. Morbi suscipit a nunc eu finibus. Nam <br> rutrum mattis velit eget volutpat. Fusce egestas mi urna, id <br> pulvinar ipsum dictum eget. Mauris in dolor velit. Vestibulum <br> finibus felis non massa commodo molestie at id justo. Quisque <br>sollicitudin elit sit amet facilisis euismod. Fusce at arcu sed. 
                </p>
                <p>
                    Nam rutrum mattis velit eget volutpat. Fusce egestas mi urna, <br> id pulvinar ipsum dictum eget.
                </p>
                
            </div>
        </div>
    </div>

</section>


<section class="why-wrapper">
    <div class="container-fluid">
      <div class="row mt-5 whyus">
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

 <?php include('footer.php');?>
