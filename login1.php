<?php
// Start session

// Check if user is already logged in
if (isset($_SESSION['email'])) {
    // Redirect to shop1.php if already logged in
    header('Location: shop1.php');
    exit();
}

include('header.php');
require('functions.php');
?>


<section class="hero-login">
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-12 text-center">
                <h1>
                    Account
                </h1>
                <div aria-label="breadcrumb" class="d-flex justify-content-center" >
                    <ol class="breadcrumb ">
                      <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-dark cc">Home</a></li>
                      <span class="breadcrumb-item active text-dark text-center" aria-current="page">Account</span>
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
                  <a href="login1.php" class="customBtn activeBtn" id="login-button">Login</a><br />
                  <a href="signup.php" class="customBtn" id="signup-button">Signup</a>
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
                    <form id="loginForm" method="post">
  <div class="position-relative my-3 inputGroup text-center">
    <span class="position-absolute"><i class="far fa-envelope"></i></span>
    <input type="email" class="border-0 border-bottom w-100" placeholder="Enter Email" name="email" id="email">
  </div>
  <div class="position-relative my-3 inputGroup text-center">
    <span class="position-absolute"><i class="far fa-eye-slash"></i></span>
    <input type="password" class="border-0 border-bottom w-100" placeholder="Password" name="password" id="password">
  </div>
  <div class="d-flex align-items-center justify-content-between pt-2">
    <a class="linkFlare" href="#"><small>Forgot Password?</small></a>
    <button type="submit" class="btn btn-accent px-4 rounded-pill" onclick="login()">LOGIN</button>
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


    function bb(){
        alert();
    }
  function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Check if email and password are provided
    if (!email || !password) {
        alert('Please provide both email and password.');
        return;
    }

    // Send login request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login_process.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                console.log('Login successful');
                // Redirect to shop1.php on successful login
                window.location.href = 'shop1.php';
            } else {
                console.log('Login failed:', response.message);
                alert('Login failed. Please check your credentials and try again.');
            }
        } else {
            console.error('An error occurred while processing the login:', xhr.status);
            alert('An error occurred while processing the login. Please try again later.');
        }
    };
    xhr.onerror = function() {
        console.error('An error occurred while processing the login.');
        alert('An error occurred while processing the login. Please try again later.');
    };
    xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
}
</script>




















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>