<?php
session_start();


// Check if the session is not set, redirect to login page
if (!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != 'yes') {
    header('Location: login.php');
    exit(); // Ensure that script execution stops after redirection
}
require('connection.php');
include('headeradmin.php');
require('functions.php');

if(isset($_GET['type']) && $_GET['type']!=''){
    $type=get_safe_value($conn,$_GET['type']);
    if($type=='status'){
        $operation=get_safe_value($conn,$_GET['operation']);
        $id=get_safe_value($conn,$_GET['id']);
        if($operation=='active'){
            $status='1';
        }else{
            $status='0';
        }
        $update_status_sql="update product set status='$status' where id='$id'";
        mysqli_query($conn,$update_status_sql);
    }
    
    if($type=='delete'){
        $id=get_safe_value($conn,$_GET['id']);
        $delete_sql="delete from product where id='$id'";
        mysqli_query($conn,$delete_sql);
    }
}

$sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id desc";
$res=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/normalize.css">
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="../assets/css/themify-icons.css">
      <link rel="stylesheet" href="../assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- icons Cdn -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
<!-- Your sidebar and main content HTML here -->


    <div class="home-content">
        <div class="main-title">
            <h1 class="font-weight-bold">DASHBOARD</h1>
        </div>
        <div class="content pb-0">
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Products </h4>
                                <h4 class="box-link"><a href="manage_product.php">Add Product</a> </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>ID</th>
                                                <th>Categories</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>MRP</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
                                            while($row=mysqli_fetch_assoc($res)){?>
                                            <tr>
                                                <td class="serial"><?php echo $i?></td>
                                                <td><?php echo $row['id']?></td>
                                                <td><?php echo $row['categories']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><img src="../media/product/<?php echo $row['image']?>" alt="Product Image"></td>
                                                <td><?php echo $row['mrp']?></td>
                                                <td><?php echo $row['price']?></td>
                                                <td><?php echo $row['qty']?></td>
                                                <td>
                                                    <?php
                                                    if($row['status']==1){
                                                        echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
                                                    }else{
                                                        echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
                                                    }
                                                    echo "<span class='badge badge-edit'><a href='manage_product.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
                                                    
                                                    echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
                                                    
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Your script includes here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

    <script src="../min.js"></script>

</body>
</html>
