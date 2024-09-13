<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  
  <!-- icons Cdn -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="dash.css">
  <style>
    .product-card {
      margin-bottom: 20px;
      border: 1px solid #ccc;
      padding: 10px;
      width: calc(33.33% - 20px);
      margin-right: 20px;
      display: flex;
      flex-direction: column;
    }

    .product-image {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .product-actions {
      margin-top: auto;
      display: flex;
      justify-content: space-between;
    }

    .btn-edit {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px;
      transition: background-color 0.3s;
    }

    .btn-edit:hover {
      background-color: #0056b3;
    }

    .btn-delete {
      background-color: #dc3545;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-delete:hover {
      background-color: #c82333;
    }

    .product-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      margin: 0 -10px;
    }
    @media (max-width: 991px) {
      .product-card {
        width: calc(50% - 20px);
      }
    }
    @media (max-width: 767px) {
      .product-card {
        width: 100%;
      }
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
      <h2>Product Management</h2>
      <br><br>
      <div class="product-row" id="productRow"></div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    // Sample initial product data
    let products = [
      { id: 1, name: "Product 1", description: "Description for Product 1", price: 10, quantity: 10, image: "./22.jpg" },
      { id: 2, name: "Product 2", description: "Description for Product 2", price: 20, quantity: 5, image: "./33.jpg" },
      { id: 3, name: "Product 3", description: "Description for Product 3", price: 30, quantity: 8, image: "./44.jpg" },
      { id: 4, name: "Product 4", description: "Description for Product 4", price: 10, quantity: 10, image: "./22.jpg" },
      { id: 5, name: "Product 5", description: "Description for Product 5", price: 20, quantity: 5, image: "./33.jpg" },
      { id: 6, name: "Product 6", description: "Description for Product 6", price: 30, quantity: 8, image: "./44.jpg" }
    ];

    // Function to display products
    function displayProducts() {
      let productRow = document.getElementById("productRow");
      productRow.innerHTML = "";

      products.forEach(function(product) {
        let card = document.createElement("div");
        card.classList.add("product-card");

        let productName = document.createElement("h4");
        productName.textContent = product.name;

        let productImage = document.createElement("img");
        productImage.classList.add("product-image");
        productImage.src = product.image;

        let productDescription = document.createElement("p");
        productDescription.textContent = product.description;

        let productPrice = document.createElement("p");
        productPrice.textContent = "Price: $" + product.price;

        let productQuantity = document.createElement("p");
        productQuantity.textContent = "Quantity: " + product.quantity;

        let editButton = document.createElement("button");
        editButton.classList.add("btn-edit");
        editButton.textContent = "Edit";

        let deleteButton = document.createElement("button");
        deleteButton.classList.add("btn-delete");
        deleteButton.textContent = "Delete";

        let productActions = document.createElement("div");
        productActions.classList.add("product-actions");
        productActions.appendChild(editButton);
        productActions.appendChild(deleteButton);

        card.appendChild(productName);
        card.appendChild(productImage);
        card.appendChild(productDescription);
        card.appendChild(productPrice);
        card.appendChild(productQuantity);
        card.appendChild(productActions);
        productRow.appendChild(card);
      });
    }

    // Call function to display initial products
    displayProducts();
  </script>
  <script src="min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
</body>
</html>