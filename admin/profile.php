<?php
// Start the session
session_start();

// Check if the session is not set, redirect to login page
if (!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != 'yes') {
    echo "<script>window.location.href = 'login.php';</script>";
    exit(); // Ensure that script execution stops after redirection
}

// Include necessary files
require('connection.php');
include('headeradmin.php');
require('functions.php');

// Check if the update button is clicked
if (isset($_POST['updatebtn'])) {
    // Sanitize user inputs
    $id = $_SESSION['ADMIN_ID'];
    $username = mysqli_real_escape_string($conn, $_POST['edit_username']);
    $password = mysqli_real_escape_string($conn, $_POST['edit_password']);
    
    // Update the admin user's details in the admin_users table using prepared statements
    $query = "UPDATE admin_users SET username=?, password=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $username, $password, $id);
    $query_run = mysqli_stmt_execute($stmt);
    
    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        echo "<script>window.location.href = 'profile.php';</script>"; // Redirect to profile page
        exit();
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        echo "<script>window.location.href = 'profile.php';</script>"; // Redirect to profile page
        exit();
    }
}
?>
<style>
        .ui-w-80 {
    width : 80px !important;
    height: auto;
}

.btn-default {
    border-color: rgba(24, 28, 33, 0.1);
    background  : rgba(0, 0, 0, 0);
    color       : #4E5155;
}

label.btn {
    margin-bottom: 0;
}

.btn-outline-primary {
    border-color: #26B4FF;
    background  : transparent;
    color       : #26B4FF;
}

.btn {
    cursor: pointer;
}

.text-light {
    color: #babbbc !important;
}

.btn-facebook {
    border-color: rgba(0, 0, 0, 0);
    background  : #3B5998;
    color       : #fff;
}

.btn-instagram {
    border-color: rgba(0, 0, 0, 0);
    background  : #000;
    color       : #fff;
}

.card {
    background-clip: padding-box;
    box-shadow     : 0 1px 4px rgba(24, 28, 33, 0.012);
}

.row-bordered {
    overflow: hidden;
}

.account-settings-fileinput {
    position  : absolute;
    visibility: hidden;
    width     : 1px;
    height    : 1px;
    opacity   : 1;
}

.account-settings-links .list-group-item.active {
    font-weight: bold !important;
}

html:not(.dark-style) .account-settings-links .list-group-item.active {
    background: transparent !important;
}

.account-settings-multiselect~.select2-container {
    width: 100% !important;
}

.light-style .account-settings-links .list-group-item {
    padding     : 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}

.light-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}

.material-style .account-settings-links .list-group-item {
    padding     : 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}

.material-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}

.dark-style .account-settings-links .list-group-item {
    padding     : 0.85rem 1.5rem;
    border-color: rgba(255, 255, 255, 0.03) !important;
}

.dark-style .account-settings-links .list-group-item.active {
    color: #fff !important;
}

.light-style .account-settings-links .list-group-item.active {
    color: #4E5155 !important;
}

.light-style .account-settings-links .list-group-item {
    padding     : 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
</style>


<div class="home-content">
<div class="main-title">
          <h1 class="font-weight-bold">Dashboard</h1>
        </div>
        <br><br><br>
    <div class="container-fluid">
        <!-- Table to display admin profiles -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EDIT Admin Profile</h6>
            </div>
            <div class="card-body">
                <?php
                $admin_id = $_SESSION['ADMIN_ID'];
                $query = "SELECT * FROM admin_users WHERE id=?";
                $stmt = mysqli_prepare($conn, $query);
                mysqli_stmt_bind_param($stmt, "i", $admin_id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);

                if ($row) {
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="edit_username" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Enter Username">
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="edit_password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="Enter Password">
                    </div>
                    <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                </form>
                <?php
                } else {
                    echo "Admin user not found!";
                }
                ?>
            </div>
        </div>
    </div>
</div>








