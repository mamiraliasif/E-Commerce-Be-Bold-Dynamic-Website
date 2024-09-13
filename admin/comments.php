<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        .card {
  margin-bottom: 20px;
}
    </style>
    
    <!-- icons Cdn -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
    <div class="home-content">
    
        <div class="container mt-5">
            <h1 class="text-center mb-4">Feedback and Reviews Management</h1>
            <br><br>
            <div id="feedback-list" class="row">
              <!-- Feedback and reviews will be displayed here -->
            </div>
          </div>
              
    
       
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

    <script src="../min.js"></script>

    <script>
        const feedbacks = [
  { id: 1, user: "John Doe", product: "Product A", rating: 4, comment: "Great product!" },
  { id: 2, user: "Alice Smith", product: "Product B", rating: 5, comment: "Excellent service!" },
  { id: 3, user: "John Doe", product: "Product A", rating: 4, comment: "Great product!" },
  { id: 4, user: "Alice Smith", product: "Product B", rating: 5, comment: "Excellent service!" },
  { id: 5, user: "John Doe", product: "Product A", rating: 4, comment: "Great product!" },
  { id: 6, user: "Alice Smith", product: "Product B", rating: 5, comment: "Excellent service!" }
];

// Function to display feedback and reviews
function displayFeedbacks() {
  const feedbackList = document.getElementById("feedback-list");

  feedbacks.forEach(feedback => {
    const card = document.createElement("div");
    card.classList.add("col-md-6", "col-lg-4", "mb-4");

    card.innerHTML = `
      <div class="card p-3">
        <h2 class="card-title">${feedback.user}</h2>
        <p class="card-text">Product: ${feedback.product}</p>
        <p class="card-text">Rating: ${feedback.rating}</p>
        <p class="card-text">${feedback.comment}</p>
        <button class="btn btn-primary btn-respond" onclick="respondToFeedback(${feedback.id})">Respond</button>
      </div>
      <br>
    `;

    feedbackList.appendChild(card);
  });
}

// Function to respond to feedback
function respondToFeedback(feedbackId) {
  const response = prompt("Enter your response:");
  if (response !== null && response.trim() !== "") {
    // Perform action to save the response (e.g., send to server, update database)
    alert("Response saved successfully!");
  }
}

// Call the function to display feedbacks when the page loads
window.onload = displayFeedbacks;
    </script>
   
</body>
</html>