-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `website` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(18, 'MAKEUP', 1),
(19, 'SKIN CARE', 1),
(20, 'HAIR CARE', 1),
(21, 'Amir', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(2, 'Muhammad Asif', 'asi7861234@gmail.com', '03014950145', ' scdscds', '2024-05-06 03:51:50'),
(4, 'hamza', 'qarishb@gmail.com', '5151516516', 'help me ', '2024-05-07 01:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `added_on`) VALUES
(2, 2, 'Madina Street housing colony near tameer e watan school Nankana Sahib Punjab', 'Nankana Sahib', 54000, 'COD', 500, 'success', 4, '2024-05-08 11:10:00'),
(3, 2, 'Madina Street housing colony near tameer e watan school Nankana Sahib Punjab', 'Nankana Sahib', 54000, 'COD', 2, 'success', 1, '2024-05-08 11:24:58'),
(4, 2, 'Dawood street house no 9', 'Islamabad Lahore, Punjab', 54000, 'COD', 1100, 'success', 1, '2024-05-08 11:46:00'),
(5, 0, 'Dawood street house no 9', 'Islamabad Lahore, Punjab', 54000, 'COD', 0, 'pending', 1, '2024-05-09 06:28:46'),
(6, 3, 'Dawood street house no 9', 'Islamabad Lahore, Punjab', 54000, 'COD', 0, 'pending', 2, '2024-05-09 07:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`, `added_on`) VALUES
(3, 2, 8, 1, 500, '0000-00-00 00:00:00'),
(4, 3, 13, 1, 2, '0000-00-00 00:00:00'),
(5, 4, 12, 1, 600, '0000-00-00 00:00:00'),
(6, 4, 9, 1, 500, '0000-00-00 00:00:00'),
(7, 5, 22, 0, 200, '0000-00-00 00:00:00'),
(8, 5, 21, 0, 440, '0000-00-00 00:00:00'),
(9, 6, 17, 0, 75, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing '),
(3, 'Shipped'),
(4, 'Canceled '),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `meta_tittle` text NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_tittle`, `meta_desc`, `meta_keyword`, `status`) VALUES
(15, 20, 'Product Name 1', 75, 59, 15, '659597712_product-04-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Nulla eget tortor ultrices, ultricies turpis a, accumsan turpis. Quisque\r\ndignissim semper leo ac accumsan. Quisque est nisl, bibendum ut elit quis,\r\npellentesque vehicula tellus. Sed luctus mattis ante ac posuere.', 'xasxas', ' jkdsi bisdu', ' jndsncidsu', 1),
(16, 20, 'Product Name 2', 100, 75, 6, '335019810_product-14-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Nulla eget tortor ultrices, ultricies turpis a, accumsan turpis. Quisque\r\ndignissim semper leo ac accumsan. Quisque est nisl, bibendum ut elit quis,\r\npellentesque vehicula tellus. Sed luctus mattis ante ac posuere.', 'ncdno nds', ' jds ndicn', 'd ckdnioc', 1),
(17, 20, 'Product Name 3', 110, 75, 15, '900172826_product-12-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Nulla eget tortor ultrices, ultricies turpis a, accumsan turpis. Quisque\r\ndignissim semper leo ac accumsan. Quisque est nisl, bibendum ut elit quis,\r\npellentesque vehicula tellus. Sed luctus mattis ante ac posuere.', 'sabxasbxisabi', 'aibiusabuisabiu', ' iasdubcuisabcuasbuisag', 1),
(18, 20, 'Product Name 4', 500, 200, 6, '196711944_product-18-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Nulla eget tortor ultrices, ultricies turpis a, accumsan turpis. Quisque\r\ndignissim semper leo ac accumsan. Quisque est nisl, bibendum ut elit quis,\r\npellentesque vehicula tellus. Sed luctus mattis ante ac posuere.', 'njanuisabbsaiuasi', ' iudsabiuasbhasibasuibuasbiu', 'jabuisabuibsai', 1),
(19, 19, 'Product 1', 500, 400, 16, '201222894_product-09-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\\r\\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\\r\\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\\r\\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\\r\\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\\r\\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\\r\\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\\r\\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\\r\\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\\r\\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\\r\\ndapibus dolor, eu venenatis diam nibh id massa.', 'snxjkas', '', ' bjdsb sdiubiuasbi', 1),
(20, 19, 'product 2', 800, 500, 15, '698565202_product-17-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'aaaa', 'aaa', 'aaa', 1),
(21, 19, 'product 3', 520, 440, 15, '442956268_product-10-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'aaa', 'aaa', 'aa', 1),
(22, 19, 'Product 4', 300, 200, 6, '827780134_product-11-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'hshxvs', 'wuhw', 'xbsh', 1),
(23, 19, 'product 5', 69, 30, 15, '313303543_product-12-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'snxnsa', 'immnioj', 'nonniono', 1),
(24, 19, 'product 6', 300, 250, 65, '706383528_product-03-a-400x488.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'sjxbsia', '  jsk', 'bcdsbc', 1),
(25, 19, 'product 7', 800, 600, 6, '501945499_product-15-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'shxbisa', 'x sajbiusa', 'xjnusabasi', 1),
(26, 19, 'Product 8', 300, 299, 16, '935626063_product-16-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'sbhsabcibasicub', ' djbcuibscjsbiusab', 'jkxbsaubsabcsui', 1),
(27, 18, 'Product 10', 500, 400, 5, '534261921_product-01-a-400x488.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'sxjsanx', ' xjknsao', ' sajnasnoi', 1),
(28, 18, 'product 11', 900, 750, 16, '258005623_product-05-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'sxjbsaxbasjbxuiasb', ' sjkabusaxihw', 'soihxasnjkasb', 1),
(29, 18, 'product 12', 1000, 999, 15, '824822699_product-06-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'mklnxoiashxo', 'eudhubjsabx', 'bcdcgbca', 1),
(30, 18, 'Product 13', 500, 400, 16, '474217994_product-07-a-300x366.jpg', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', 'Ut quis sollicitudin orci. Aliquam at libero non purus sodales sagittis eu ac\r\nneque. Nunc ipsum felis, vehicula eu aliquam sed, ultricies ac lacus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere\r\ncubilia curae; Nam viverra commodo finibus. Morbi laoreet lacus quis\r\nlobortis tempor. Nam tincidunt, lectus a suscipit fringilla, mauris turpis\r\ndapibus dolor, eu venenatis diam nibh id massa.', '', 'sajnxsanxioahsxn', 1),
(31, 20, 'knks', 500, 90, 6, '337441347_product-06-a-300x366.jpg', 'bcjdcd', 'jdcbdj', 'jkdbcd', 'jdbcd', 'cjkbdsjc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(2, 'hi', '846516@gmail.com', '221');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(30) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `l_name`, `email`, `password`, `added_on`) VALUES
(1, 'Muhammad', 'Asif', 'asi7861234@gmail.com', '123', '2024-05-06 16:45:04'),
(2, 'Muhammad', 'Asif', 'asi78612345@gmail.com', '123', '2024-05-08 03:50:13'),
(3, 'Muhammad', 'Asif', 'asi786123455@gmail.com', '123', '2024-05-08 04:15:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
