<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="dash.css">
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
                <i class="bx bx-search" ></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="dasboard.html">
                    <i class="bx bx-grid-alt" ></i>
                    <span class="Links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="profile.html">
                    <i class="bx bx-user" ></i>
                    <span class="Links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="product.html">
                    <i class="bx bx-chat" ></i>
                    <span class="Links_name">Product</span>
                </a>
                <span class="tooltip">Product</span>
            </li>
            <li>
                <a href="stats.html">
                    <i class="bx bx-pie-chart-alt-2" ></i>
                    <span class="Links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="cos.html">
                    <i class="bx bx-cart-alt" ></i>
                    <span class="Links_name">Customer Details</span>
                </a>
                <span class="tooltip">Customer </span>
            </li>
            <li>
                <a href="comments.html">
                    <i class="bx bx-heart" ></i>
                    <span class="Links_name">Comments & Reviews</span>
                </a>
                <span class="tooltip">Reviews</span>
            </li>
            <li>
                <a href="login.html">
                    <i class="bx bx-bot" ></i>
                    <span class="Links_name">Login</span>
                </a>
                <span class="tooltip">Login</span>
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
                <a href="login.html"><i class="bx bx-log-out" id="log_out"></i></a>
            </div>
        </div>
    </div>
    <div class="home-content">
    
            <div class="container">
                <h1>Customer Details</h1>
                <br><br>
                <div id="customer-list" class="row">
                  <!-- Customer details will be inserted here -->
                </div>
              </div>
              
    
       
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

    <script src="min.js"></script>
    <script>
        const customers = [
  { name: "John Doe", city: "New York", email: "john@example.com", phone: "123-456-7890" },
  { name: "Alice Smith", city: "Los Angeles", email: "alice@example.com", phone: "987-654-3210" },
  { name: "John Doe", city: "New York", email: "john@example.com", phone: "123-456-7890" },
  { name: "Alice Smith", city: "Los Angeles", email: "alice@example.com", phone: "987-654-3210" },
   { name: "John Doe", city: "New York", email: "john@example.com", phone: "123-456-7890" },
  { name: "Alice Smith", city: "Los Angeles", email: "alice@example.com", phone: "987-654-3210" },
];

// Function to display customer details
function displayCustomers() {
  const customerList = document.getElementById("customer-list");

  customers.forEach(customer => {
    const card = document.createElement("div");
    card.classList.add("col-md-6", "card");

    card.innerHTML = `
      <div class="card-body">
        <h5 class="card-title">${customer.name}</h5>
        <p class="card-text">City: ${customer.city}</p>
        <p class="card-text">Email: ${customer.email}</p>
        <p class="card-text">Phone: ${customer.phone}</p>
      </div>
    `;

    customerList.appendChild(card);
  });
}

// Call the function to display customers when the page loads
window.onload = displayCustomers;
    </script>
</body>
</html>