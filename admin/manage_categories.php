<?php
session_start();

// Check if the session is not set, redirect to login page
if (!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != 'yes') {
    echo "<script>window.location.href = 'login.php';</script>";
    exit(); // Ensure that script execution stops after redirection
}
require('connection.php');
include('headeradmin.php');
require('functions.php');
$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
    $id=get_safe_value($conn,$_GET['id']);
    $res=mysqli_query($conn,"select * from categories where id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
        $row=mysqli_fetch_assoc($res);
        $categories=$row['categories'];
    }else{
        echo "<script>window.location.href = 'categories.php';</script>";
        exit();
    }
}

if(isset($_POST['submit'])){
    $categories=get_safe_value($conn,$_POST['categories']);
    $res=mysqli_query($conn,"select * from categories where categories='$categories'");
    $check=mysqli_num_rows($res);
    if($check>0){
        if(isset($_GET['id']) && $_GET['id']!=''){
            $getData=mysqli_fetch_assoc($res);
            if($id==$getData['id']){
            
            }else{
                $msg="Categories already exist";
            }
        }else{
            $msg="Categories already exist";
        }
    }
    
    if($msg==''){
        if(isset($_GET['id']) && $_GET['id']!=''){
            mysqli_query($conn,"update categories set categories='$categories' where id='$id'");
        }else{
            mysqli_query($conn,"insert into categories(categories,status) values('$categories','1')");
        }
        echo "<script>window.location.href = 'categories.php';</script>";
        exit();
    }
}
?>

<div class="home-content">
    <main class="main-container">
        <div class="main-title">
            <h1 class="font-weight-bold">Manage Categories</h1>
        </div>

        <div class="content pb-0">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                            <form method="post">
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="categories" class="form-control-label">Categories</label>
                                        <input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
                                    </div>
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Submit</span>
                                    </button>
                                    <div class="field_error"><?php echo $msg?></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


