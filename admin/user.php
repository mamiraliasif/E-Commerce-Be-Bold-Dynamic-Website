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

// Check if 'type' and 'id' parameters are set for deletion
if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
    $type = get_safe_value($conn, $_GET['type']);
    $id = get_safe_value($conn, $_GET['id']);
    
    if($type == 'delete') {
        // Prepare and execute the delete statement
        $delete_sql = "DELETE FROM user WHERE id = ?";
        $stmt = mysqli_prepare($conn, $delete_sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    }
}

// Fetch all users
$sql = "SELECT * FROM user ORDER BY id DESC";
$res = mysqli_query($conn, $sql);
?>

<div class="home-content">
    <main class="main-container">
        <div class="main-title">
            <h1 class="font-weight-bold">User/Clients</h1>
        </div>

        <div class="content pb-0">
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">User/Clients </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i = 1;
                                            while($row = mysqli_fetch_assoc($res)) { ?>
                                            <tr>
                                                <td class="serial"><?php echo $i ?></td>
                                                <td><?php echo htmlspecialchars($row['id']) ?></td>
                                                <td><?php echo htmlspecialchars($row['name']) ?></td>
                                                <td><?php echo htmlspecialchars($row['l_name']) ?></td>
                                                <td><?php echo htmlspecialchars($row['email']) ?></td>
                                                <td><?php echo htmlspecialchars($row['password']) ?></td>
                                                <td><?php echo htmlspecialchars($row['added_on']) ?></td>
                                                <td>
                                                    <?php
                                                    echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this user?\");'>Delete</a></span>";
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
    </main>
</div>

         

        

        
        </main>

        </div>



    
       
 
