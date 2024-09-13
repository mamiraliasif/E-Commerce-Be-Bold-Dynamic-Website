<?php

include('header.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
  echo '<script>window.location.href = "login1.php";</script>';
  exit(); // Ensure that script execution stops after redirection
}

require('functions.php');


?>

<section>
    <div class="contact-hero">
        <div class="container-fluid bg-img ">
            <div class="container">
              <div class="row ">
              
                     <div class="col-lg-6 hero-txt text-light ">
              
                              <h6 >GET IN TOUCH</h6>
                              <h1 >Message Us</h1>
                              
                      </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="main-wrappper">

<div class="container-fluid">
  <div class="row justify-content-evenly">
    <div class="col-md-5 main-text">
      <div class="container">
        <h2>
          Contact Us
        </h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit. Ut id leo tempor, congue justo at, <br> lobortis orci.
        </p>
        <a href="#" class="text-decoration-none text-dark">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            123 Fifth Avenue, New York, NY 10160
          </span>
        </a>
        <br>
        <a href="#" class="text-decoration-none text-dark">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            contact@info.com
          </span>
        </a>
        <br>
        <a href="#" class="text-decoration-none text-dark">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            9-334-7565-9787
          </span>
        </a>
      </div>
      
    </div >
    
      <div class="col-md-5 main-text1">
      
        <div class="container">
          <div class="form h-100">
      
            <form class="mb-5" method="POST" id="contactForm"  >
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Name <span class="red">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" >
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone <span class="red">*</span></label>
                  <input type="text" class="form-control" name="phone" id="mobile"  >
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="" class="col-form-label">Email <span class="red">*</span></label>
                  <input type="email"  class="form-control" name="email" id="email"  >
                </div>
                <!-- <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Company</label>
                  <input type="text" class="form-control" name="company" id="company"  >
                </div> -->
              </div>
              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message <span class="red">*</span></label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4" style="height: 121px;" ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" onclick="send_message()" value="Send" class="btn btn-dark rounded-0 py-2 px-4" id="formbtn">
                  <!-- <button type="submit" onclick="send_message()">Sumbit</button> -->
                  <span class="submitting"></span>
                </div>
              </div>
            </form>
            <div id="form-message-warning mt-4"></div>
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>
          </div>
        </div>
      </div>
    
  </div>
</div>

</section>


<script>
    function send_message1()
    {
        alert();
    }
    function send_message() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var message = document.getElementById("message").value;

    if (name === "") {
        alert('Please enter name');
    } else if (email === "") {
        alert('Please enter email');
    } else if (mobile === "") {
        alert('Please enter phone no');
    } else if (message === "") {
        alert('Please enter message');
    } else {
        // Create a new FormData object
        var formData = new FormData();
        // Append form data to the FormData object
        formData.append('name', name);
        formData.append('email', email);
        formData.append('mobile', mobile);
        formData.append('message', message);

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configure the request
        xhr.open('POST', 'send_message.php', true);

        // Set up a callback function to handle the response
        xhr.onload = function () {
            if (xhr.status === 200) {
                // If the request was successful, display the response
                alert(xhr.responseText);
            } else {
                // If there was an error, display an error message
                alert('An error occurred while sending the message.');
            }
        };

        // Send the request with the FormData object as the data
        xhr.send(formData);
    }
}
</script>


<section class="locationwrap mt-3">
    <div class="container-fluid">
      <div class="row">

      </div>
      <div class="col-12 location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317893.9737282887!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1709331671814!5m2!1sen!2sus" width="100.1%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>




<?php include('footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

