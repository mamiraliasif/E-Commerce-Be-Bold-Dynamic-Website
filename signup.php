<?php
include('header.php');
require('functions.php');


?>


<section class="hero-login">
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-12 text-center">
                <h1>
                    Create Account
                </h1>
                <div aria-label="breadcrumb" class="d-flex justify-content-center" >
                    <ol class="breadcrumb ">
                      <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-dark cc">Home</a></li>
                      <li class="breadcrumb-item"><a href="login1.php" class="text-decoration-none text-dark cc">Account</a></li>
                      <span
                        class="breadcrumb-item active text-dark text-center" aria-current="page">Create Account
                      </span>
                    </ol>
                </div>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="d-flex vh-100 justify-content-center align-items-center">
        <div class="p-2 flex-grow">
          <div class="smallContainer border shadow rounded">
            <div class="row g-0">
              <div class="col-sm-6 col-xs-12 d-none d-sm-block position-relative" id='leftCol'>
                <img src="https://images.unsplash.com/photo-1512053572163-a1a0ea7fe738?q=80&w=1921&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                <div id="pt-5 text-end w-100" class="position-absolute end-0 top-0">
                  <a href="signup.php" class="customBtn activeBtn" id="signup-button">Signup</a><br />
                  <a href="login1.php" class="customBtn" id="login-button">Login</a>
                </div>
    
              </div>
              <div class="col-sm-6 col-xs-12">
                <div class="d-flex flex-column" style="height:100%">
    
                  <div class="text-center d-sm-none d-xs-block">
                    <div class="switch-button">
                      <input class="switch-button-checkbox" type="checkbox"></input>
                      <label class="switch-button-label" for=""><span class="switch-button-label-span">Login</span></label>
                    </div>
                  </div>
    
                  <div class="my-auto p-5">
                    <div class="text-center">
                      <div>
                        <a href="index.php"><img src="./Images/logo-regular.png" height="72" /></a>
                      </div>
                      <!-- <h2 class="h3 pb-3">LOGIN</h2> -->
                    </div>
                    <form method="POST">
  <div class="position-relative my-3 inputGroup text-center">
    <span class="position-absolute"><i class="far fa-user"></i></span>
    <input type="text" class="border-0 border-bottom w-100" placeholder="ENTER FIRST NAME" name="first_name">
  </div>
  <div class="position-relative my-3 inputGroup text-center">
    <span class="position-absolute"><i class="far fa-user"></i></span>
    <input type="text" class="border-0 border-bottom w-100" placeholder="Enter LAST NAME" name="last_name">
  </div>
  <div class="position-relative my-3 inputGroup text-center">
    <span class="position-absolute"><i class="far fa-envelope"></i></span>
    <input type="email" class="border-0 border-bottom w-100" placeholder="Enter Email" name="email">
  </div>
  <div class="position-relative my-3 inputGroup text-center">
    <span class="position-absolute"><i class="far fa-eye-slash"></i></span>
    <input type="password" class="border-0 border-bottom w-100" placeholder="Password" name="password">
  </div>
  <div class="d-flex align-items-center justify-content-between pt-2">
    <a class="linkFlare" href="#"><small>Help</small></a>
    <button class="btn btn-accent px-4 rounded-pill" type="button" onclick="user_registration()">Proceed</button>
  </div>
</form>
                  </div>
                  <div>
                    
                    <div class="p-2 text-center" id="lsHeading">
                      LOGIN WITH
                    </div>

                    <div class="bg-accent-2 p-3 d-flex justify-content-evenly">
                      <i class="fab fa-facebook-square"></i>
                      <i class="fab fa-google"></i>
                      <i class="fab fa-twitter"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>




<script>

    function uu(){
        alert();
    }
  function user_registration() {
    var firstName = document.querySelector('input[name="first_name"]').value;
    var lastName = document.querySelector('input[name="last_name"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var password = document.querySelector('input[name="password"]').value;

    if (firstName === "") {
      alert('Please enter first name');
      return;
    } else if (lastName === "") {
      alert('Please enter last name');
      return;
    } else if (email === "") {
      alert('Please enter email');
      return;
    } else if (password === "") {
      alert('Please enter password');
      return;
    }

    var formData = new FormData();
    formData.append('first_name', firstName);
    formData.append('last_name', lastName);
    formData.append('email', email);
    formData.append('password', password);

    // Send registration request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'register.php', true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert(xhr.responseText);
      } else {
        alert('An error occurred while processing the registration.');
      }
    };
    xhr.send(formData);
  }
</script>






















<?php include('footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>