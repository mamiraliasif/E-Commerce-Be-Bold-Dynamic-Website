


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="../assets/css/themify-icons.css">
      <link rel="stylesheet" href="../assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/css/style1.css">
      <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <!-- icons Cdn -->
   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- icons CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<script src="../min.js"></script>
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <div class="logo-name">Be-Bold</div>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="dashboard1.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="Links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="profile.php">
                    <i class="bx bx-user"></i>
                    <span class="Links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="user.php">
                    <i class="bx bx-chat"></i>
                    <span class="Links_name">Client Details</span>
                </a>
                <span class="tooltip">Client</span>
            </li>
            <li>
                <a href="categories.php">
                    <i class="bx bx-chat"></i>
                    <span class="Links_name">Categories</span>
                </a>
                <span class="tooltip">Categories</span>
            </li>
            <li>
                <a href="stats.php">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="Links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="order_master.php">
                    <i class="bx bx-cart-alt"></i>
                    <span class="Links_name">Order Master</span>
                </a>
                <span class="tooltip">Order Master</span>
            </li>
            <li>
                <a href="comments.php">
                    <i class="bx bx-heart"></i>
                    <span class="Links_name">Comments & Reviews</span>
                </a>
                <span class="tooltip">Reviews</span>
            </li>
            <li>
                <a href="contact_us.php">
                    <i class="bx bx-bot"></i>
                    <span class="Links_name">Conatact Us</span>
                </a>
                <span class="tooltip">Conatact Us</span>
            </li>
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile_details">
                    <img src="../profileimg.jpeg" alt="">
                    <div class="name_job">
                        <div class="name">Amir Khan</div>
                        <div class="job">Web Designer</div>
                    </div>
                </div>
                <a href="#" onclick="document.getElementById('logout_form').submit();"><i class="bx bx-log-out" id="log_out"></i></a>

<form id="logout_form" action="logout.php" method="post">
    <input type="hidden" name="logout_btn" value="1">
</form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

