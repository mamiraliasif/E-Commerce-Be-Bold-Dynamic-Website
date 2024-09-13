<?php
// Include necessary files and establish database connection
session_start();

// Check if the session is not set, redirect to login page
if (!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != 'yes') {
    echo "<script>window.location.href = 'login.php';</script>";
    exit(); // Ensure that script execution stops after redirection
}
require('connection.php');
include('headeradmin.php');
require('functions.php');

// Check if the 'type' parameter is set and not empty
if (isset($_GET['type']) && $_GET['type'] !== '') {
    $type = get_safe_value($conn, $_GET['type']); // Get the safe value of 'type'
    
    // Process based on the value of 'type'
    if ($type === 'status') {
        $operation = get_safe_value($conn, $_GET['operation']); // Get the safe value of 'operation'
        $id = get_safe_value($conn, $_GET['id']); // Get the safe value of 'id'

        // Set the status based on the operation
        $status = ($operation === 'active') ? '1' : '0';

        // Update the status in the database
        $update_status_sql = "UPDATE categories SET status='$status' WHERE id='$id'";
        mysqli_query($conn, $update_status_sql);
    } elseif ($type === 'delete') {
        // Check if the user confirmed the deletion
        if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
            $id = get_safe_value($conn, $_GET['id']); // Get the safe value of 'id'

            // Delete the category from the database
            $delete_sql = "DELETE FROM categories WHERE id='$id'";
            mysqli_query($conn, $delete_sql);
        } else {
            // If the deletion is not confirmed, redirect back with a confirmation prompt
            echo "<script>window.location.href = '?type=confirm_delete&id=" . $_GET['id'] . "';</script>";
            exit();
        }
    } elseif ($type === 'confirm_delete') {
        // Prompt the user for confirmation
        $id = get_safe_value($conn, $_GET['id']);
        echo "<script>
            var result = confirm('Are you sure you want to delete this category?');
            if (result) {
                window.location.href = '?type=delete&id=$id&confirm=yes';
            } else {
                window.location.href = 'dashboard.php'; // Redirect to dashboard or any other page
            }
        </script>";
        exit(); // Exit to prevent further execution
    }
}

// Fetch categories from the database
$sql = "SELECT * FROM categories ORDER BY categories ASC";
$res = mysqli_query($conn, $sql);

// Initialize an empty array to store categories
$categories = array();

// Fetch categories and store them in the $categories array
while ($row = mysqli_fetch_assoc($res)) {
    $categories[] = $row;
}
?>



    <div class="home-content">
    
        <div class="main-title">
          <h1 class="font-weight-bold">Categories</h1>
        </div>
        <div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Categories </h4>
				   <h4 class="box-link"><a href="manage_categories.php">Add Categories</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Categories</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
                         <?php
                                            $i = 1;
                                            // Iterate over the $categories array and display each category in a table row
                                            foreach ($categories as $category) {
                                                echo "<tr>";
                                                echo "<td class='serial'>$i</td>";
                                                echo "<td>" . $category['id'] . "</td>";
                                                echo "<td>" . $category['categories'] . "</td>";
                                                echo "<td>";
                                                if ($category['status'] == 1) {
                                                    echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=" . $category['id'] . "'>Active</a></span>&nbsp;";
                                                } else {
                                                    echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=" . $category['id'] . "'>Deactive</a></span>&nbsp;";
                                                }
                                                echo "<span class='badge badge-edit'><a href='manage_categories.php?id=" . $category['id'] . "'>Edit</a></span>&nbsp;";
                                                echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $category['id'] . "'>Delete</a></span>";
                                                echo "</td>";
                                                echo "</tr>";
                                                $i++;
                                            }
                                            ?>
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
