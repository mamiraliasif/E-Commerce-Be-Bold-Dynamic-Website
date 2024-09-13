<?php
session_start();

// Check if the session is not set, redirect to login page
if (!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != 'yes') {
    header('Location: login.php');
    exit(); // Ensure that script execution stops after redirection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="../assets/css/dash.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <!-- icons Cdn -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        #generate-report-btn {
        background-color: #4f35a1;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
         border-radius: 5px;
         font-size: 16px;
         cursor: pointer;
         transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Add shadow */
        transition: all 0.5s ease-in;
        }

    #generate-report-btn:hover {
   background-color: #7251c1;
  transform: scale(1.1);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
}

#generate-report-btn:focus {
  outline: none; /* Remove default focus outline */
  box-shadow: 0 0 0 3px rgba(79, 53, 161, 0.5); /* Add focus shadow */
}
    </style>
</head>
<body>
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
                    <img src="./profileimg.jpeg" alt="">
                    <div class="name_job">
                        <div class="name">Amir Khan</div>
                        <div class="job">Web Designer</div>
                    </div>
                </div>
                <a href="logout.php"><i class="bx bx-log-out" id="log_out"></i></a>
            </div>
        </div>
    </div>
    <div class="home-content">



      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">Analytics and Reporting</p>
        </div>

       <br><br>

       <button id="generate-report-btn">Generate Report</button>

       <br><br>

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Top 5 Products</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Purchase and Sales Orders</p>
            <div id="area-chart"></div>
          </div>

        </div>
        <div class="charts">
            <div class="charts-card">
              <p class="chart-title">New Chart 1</p>
              <div id="new-chart-1"></div>
            </div>

            <div class="charts-card">
                <p class="chart-title">New Chart 2</p>
                <div id="new-chart-2"></div>
              </div>
            
          </div>
          
          
            

        
      </main>
       
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

    <script>
        document.getElementById("generate-report-btn").addEventListener("click", function() {
    // Logic for generating the report
    generateReport();
});

function generateReport() {
    // Add your logic here to generate the report
    // For example, you can gather data from the charts and format it into a report
    // You can use libraries like jsPDF or other preferred methods to generate the report
    alert("Report generated successfully!");
}
    </script>

    <script src="../min.js"></script>
</body>
</html>