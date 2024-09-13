# E-Commerce Be-Bold Dynamic Website

**E-Commerce Be-Bold** is a dynamic PHP-based e-commerce website with full CRUD functionality and session management. It features an admin panel for managing products and categories, and a client-facing site where users can browse and make purchases. The website includes comprehensive user and admin login systems, cart functionality, and order management, with additional analytics and contact forms.

## Features
- **Admin Panel**: Manage products, categories, and view analytics. Admin login with fixed credentials (username: `admin`, password: `admin`).
- **Client Side**: Users can create profiles, browse categories, add items to the cart, and manage orders.
- **Cart Functionality**: Add, remove, and manage items in the cart.
- **Order Management**: View order details and manage order status.
- **Contact Us Form**: Users can send messages, which are displayed on the admin side.
- **Responsive Design**: Ensures a seamless experience across different devices.

## Installation

1. **Clone the Repository**
   
   ```bash
   git clone https://github.com/yourusername/e-commerce-be-bold.git



2. **Set Up the Database**
   
- Import the database using the provided SQL file. Use the following command in your MySQL environment:
    ```bash
    mysql -u yourusername -p yourdatabase < mydatabase1.sql
- Update the database connection settings in config.php with your database credentials.

3. **Configure the Application**

- Ensure your web server (e.g., Apache, Nginx) is running.
- Place the project files in your web server's root directory.

4. **Access the Website**

- Navigate to http://localhost/yourproject in your web browser.

## Usage
- **Admin Login:** Use username admin and password admin.
- **User Registration:** Users can create their own profiles and log in.

## Contributing
Contributions are welcome! Please submit issues or pull requests.
