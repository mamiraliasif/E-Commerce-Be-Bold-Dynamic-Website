<?php 
require('header.php');
require('functions.php');
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    echo '<script>window.location.href = "login1.php";</script>';
    exit(); // Ensure that script execution stops after redirection
}

?>
    
<style>
     .centered-btn {
            text-align: center;
            color: #fff;
        }
</style>

    <div class="container">
        <h1>Thank You!</h1>
        <p>Your order has been placed successfully.</p>
        <p>We have sent an email confirmation with your order details.</p>
        <p>For any inquiries or assistance, please contact our customer support.</p>
        <div style="text-align: center;" >
            <a href="index.php" class="bt btn-lg" >CONTINUE SHOPPING</a>
        </div>
    </div>
<?php 
require('footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>