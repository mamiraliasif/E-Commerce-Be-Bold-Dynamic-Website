# E-Commerce Be-Bold Dynamic Website

E-Commerce Be-Bold is a dynamic PHP-based e-commerce website with full CRUD functionality and session management. It features an admin panel for managing products and categories, and a client-facing site where users can browse and make purchases. The website includes comprehensive user and admin login systems, cart functionality, and order management, with additional analytics and contact forms.

## Features

### Admin Panel
- Manage products and categories.
- View analytics and user messages.
- Admin login with fixed credentials (username: **admin**, password: **admin**).

### Client Side
- Users can create profiles, browse categories, and add items to the cart.
- Manage orders and track order status.

### Cart Functionality
- Add, remove, and manage items in the cart.

### Order Management
- View order details and manage order status.

### Contact Us Form
- Users can send messages, which are displayed on the admin side.

### Responsive Design
- Ensures a seamless experience across different devices.

## Installation

### Clone the Repository
```sh
git clone https://github.com/yourusername/e-commerce-be-bold.git
```

### Set Up the Database
Import the database using the provided SQL file. Use the following command in your MySQL environment:
```sh
mysql -u yourusername -p yourdatabase < mydatabase1.sql
```
Update the database connection settings in `config.php` with your database credentials.

### Configure the Application
1. Ensure your web server (e.g., Apache, Nginx) is running.
2. Place the project files in your web server's root directory.

### Access the Website
Navigate to `http://localhost/yourproject` in your web browser.

## Usage

### Admin Login
- Use the following credentials:
  - **Username:** admin
  - **Password:** admin

### User Registration
- Users can create their own profiles and log in.

## Frontend Website Link
The frontend of the website is hosted on Netlify. You can access it here:
[Be-Bold Store](#https://66e14d46606808bcdc8e616b--bebold-store.netlify.app/) 

## Contributing
Contributions are welcome! Please submit issues or pull requests.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.
