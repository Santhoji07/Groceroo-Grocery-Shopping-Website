-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 10:23 AM
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
-- Database: `groceroo`
--

-- --------------------------------------------------------

--
-- Table structure for table `groceroo_admin_reg`
--

CREATE TABLE `groceroo_admin_reg` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groceroo_admin_reg`
--

INSERT INTO `groceroo_admin_reg` (`admin_id`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, 'groc_admin', 'grocerooshopping@gmail.com', 'AdMiN@1233'),
(2, 'test', '', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `groceroo_category`
--

CREATE TABLE `groceroo_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groceroo_category`
--

INSERT INTO `groceroo_category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Fruits', 'fruits2_4_3.jpg'),
(2, 'Vegetables', 'vegetables3_4_3.jpg'),
(3, 'Spices', 'spices.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groceroo_feedback`
--

CREATE TABLE `groceroo_feedback` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `groceroo_feedback`
--

INSERT INTO `groceroo_feedback` (`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES
(1, 'test', 'test@gmail.com', 123, 'excellent', 'test'),
(2, 'Meow', 'mew@gmail.com', 0, 'excellent', 'Hello World\r\nMeow ;)');

-- --------------------------------------------------------

--
-- Table structure for table `groceroo_orders`
--

CREATE TABLE `groceroo_orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `delivery_date` varchar(100) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groceroo_orders`
--

INSERT INTO `groceroo_orders` (`orders_id`, `users_id`, `delivery_date`, `payment_method`, `total_amount`) VALUES
(54, 16, '2024-06-03', 'Cash', '1333'),
(56, 16, '2024-06-15', 'Cash', '1312'),
(58, 17, '2024-06-16', 'Card', '128'),
(59, 17, '2024-06-16', 'Cash', '49'),
(60, 17, '2024-06-16', 'Card', '259'),
(61, 17, '2024-06-16', 'Card', '308'),
(62, 17, '2024-06-17', 'Cash', '49'),
(63, 17, '2024-06-16', 'Cash', '98'),
(64, 17, '2024-06-17', 'Cash', '49'),
(65, 17, '2024-06-16', 'Cash', '49'),
(66, 17, '2024-06-16', 'Cash', '196'),
(67, 17, '2024-06-17', 'Card', '308'),
(68, 17, '2024-06-17', 'Card', '196'),
(69, 17, '2024-06-17', 'Card', '196'),
(70, 17, '2024-06-17', 'Card', '196'),
(71, 17, '2024-06-17', 'Card', '259'),
(72, 17, '2024-06-17', 'Cash', '259');

-- --------------------------------------------------------

--
-- Table structure for table `groceroo_order_details`
--

CREATE TABLE `groceroo_order_details` (
  `orders_detail_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groceroo_order_details`
--

INSERT INTO `groceroo_order_details` (`orders_detail_id`, `orders_id`, `product_name`, `quantity`) VALUES
(21, 54, 'Black Pepper [100g]', 1),
(22, 54, 'Mango [500g]', 1),
(23, 54, 'Blueberry [500g]', 1),
(24, 54, 'Apple [500g]', 1),
(25, 54, 'Strawberry [500g]', 1),
(28, 56, 'Mango [500g]', 1),
(29, 56, 'Pineapple [500g]', 1),
(30, 56, 'Bell Pepper [500g]', 1),
(31, 56, 'Strawberry [500g]', 1),
(32, 56, 'Orange [500g]', 1),
(33, 56, 'Blueberry [500g]', 1),
(34, 56, 'Grapes [500g]', 1),
(35, 56, 'Apple [500g]', 1),
(36, 57, 'Apple [500g]', 1),
(37, 57, 'Orange [500g]', 1),
(38, 58, 'Orange [500g]', 1),
(39, 58, 'Apple [500g]', 1),
(40, 59, 'Orange [500g]', 1),
(41, 60, 'Strawberry [500g]', 1),
(42, 61, 'Orange [500g]', 1),
(43, 61, 'Strawberry [500g]', 1),
(44, 62, 'Grapes [500g]', 1),
(45, 63, 'Orange [500g]', 2),
(46, 64, 'Orange [500g]', 1),
(47, 65, 'Orange [500g]', 1),
(48, 66, 'Orange [500g]', 4),
(49, 67, 'Orange [500g]', 1),
(50, 67, 'Strawberry [500g]', 1),
(51, 68, 'Orange [500g]', 4),
(52, 69, 'Orange [500g]', 4),
(53, 70, 'Orange [500g]', 4),
(54, 71, 'Strawberry [500g]', 1),
(55, 72, 'Strawberry [500g]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groceroo_products`
--

CREATE TABLE `groceroo_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_status` tinyint(4) NOT NULL,
  `product_trend` tinyint(4) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groceroo_products`
--

INSERT INTO `groceroo_products` (`product_id`, `product_name`, `product_category`, `product_price`, `product_status`, `product_trend`, `product_description`, `product_image`) VALUES
(1, 'Apple [500g]', 2, '79', 0, 0, 'A sweet, crunchy fruit that comes in various colors like red, green, and yellow.', '2405311106160.jpg, 2405311106161.jpg'),
(2, 'Cavendish Banana [500g]', 1, '29', 1, 1, 'A soft, creamy fruit encased in a yellow peel, rich in potassium.', '2405311107100.jpg'),
(3, 'Orange [500g]', 1, '49', 0, 1, 'A citrus fruit known for its juicy, tangy flavor and high vitamin C content.', '2405311107550.jpg'),
(4, 'Strawberry [500g]', 1, '259', 0, 1, 'A small, red fruit with a juicy texture and sweet-tart flavor, often used in desserts.', '2405311108180.jpeg'),
(5, 'Grapes [500g]', 1, '49', 0, 1, 'Small, juicy fruits that can be green, red, or purple, often eaten fresh or used to make wine.', '2405311109440.jpg'),
(6, 'Mango [500g]', 1, '89', 0, 1, 'A tropical fruit with a sweet, creamy flesh and a large central pit.', '2405311110180.jpg'),
(7, 'Pineapple [500g]', 1, '29', 0, 1, 'A tropical fruit with a spiky exterior and sweet, tart flesh inside.', '2405311143270.jpg'),
(8, 'Bell Pepper [500g]', 2, '59', 0, 1, 'A colorful vegetable that can be sweet or slightly bitter, rich in vitamins A and C.', '2405311114430.jpg'),
(9, 'Carrot [500g]', 2, '49', 0, 1, 'A crunchy, orange root vegetable that is sweet and rich in beta-carotene.', '2405311112170.jpg, 2405311112171.jpg'),
(10, 'Broccoli [500g]', 2, '69', 0, 1, 'A green vegetable resembling a small tree, high in vitamins C and K.', '2405311112530.jpg'),
(12, 'Blueberry [500g]', 1, '699', 0, 1, 'A tiny, blue-black fruit that is sweet and packed with antioxidants.', '2405311109020.jpg'),
(15, 'Tomato [500g]', 2, '19', 0, 1, 'Often treated as a vegetable, this juicy red fruit is commonly used in salads and sauces.', '2405311115470.jpg, 2405311115471.jpg'),
(16, 'Cucumber [500g]', 2, '19', 0, 1, 'A refreshing, green vegetable with a high water content, often used in salads.', '2405311116430.png'),
(17, 'Potato [500g]', 2, '19', 0, 1, 'A starchy tuber that is a staple food in many cultures, versatile in cooking.', '2405311117540.jpg'),
(19, 'Onion [500g]', 2, '29', 0, 1, ' A bulb vegetable with a pungent flavor, used as a base for many dishes.', '2405311119130.jpg, 2405311119131.jpg'),
(20, 'Ladies Finger[500g]', 2, '39', 0, 1, 'A green, pod-like vegetable known for its slimy texture when cooked, commonly used in stews and soups.', '2405311120210.png'),
(21, 'Black Pepper [100g]', 3, '69', 0, 1, 'A pungent, spicy seasoning made from the dried berries of the Piper nigrum plant, used to add heat and flavor to a variety of dishes.', '2405311122320.png'),
(22, 'Cinnamon [100g]', 3, '89', 0, 1, 'A sweet and warm spice derived from the bark of Cinnamomum trees, often used in baking and desserts.', '2405311123040.jpg'),
(23, 'Chilli [100g]', 2, '9', 0, 1, 'A spice made from the dried and ground fruits of Capsicum plants, known for its fiery heat and vibrant red color, widely used to add spiciness to a variety of dishes.', '2405311134090.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groceroo_users_reg`
--

CREATE TABLE `groceroo_users_reg` (
  `users_id` int(11) NOT NULL,
  `users_username` varchar(100) NOT NULL,
  `users_email` varchar(150) NOT NULL,
  `users_password` varchar(100) NOT NULL,
  `users_mobile` varchar(50) NOT NULL,
  `users_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groceroo_users_reg`
--

INSERT INTO `groceroo_users_reg` (`users_id`, `users_username`, `users_email`, `users_password`, `users_mobile`, `users_address`) VALUES
(16, 'SUPRXXTH', 'supreethsharmak@hotmail.com', 'SHARMA', '9123456765', 'Goa'),
(17, 'test', 'test@gmail.com', 'test123', '9837857368', 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groceroo_admin_reg`
--
ALTER TABLE `groceroo_admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `groceroo_category`
--
ALTER TABLE `groceroo_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `groceroo_feedback`
--
ALTER TABLE `groceroo_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groceroo_orders`
--
ALTER TABLE `groceroo_orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `groceroo_order_details`
--
ALTER TABLE `groceroo_order_details`
  ADD PRIMARY KEY (`orders_detail_id`);

--
-- Indexes for table `groceroo_products`
--
ALTER TABLE `groceroo_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category` (`product_category`);

--
-- Indexes for table `groceroo_users_reg`
--
ALTER TABLE `groceroo_users_reg`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groceroo_admin_reg`
--
ALTER TABLE `groceroo_admin_reg`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groceroo_category`
--
ALTER TABLE `groceroo_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groceroo_feedback`
--
ALTER TABLE `groceroo_feedback`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groceroo_orders`
--
ALTER TABLE `groceroo_orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `groceroo_order_details`
--
ALTER TABLE `groceroo_order_details`
  MODIFY `orders_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `groceroo_products`
--
ALTER TABLE `groceroo_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `groceroo_users_reg`
--
ALTER TABLE `groceroo_users_reg`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groceroo_orders`
--
ALTER TABLE `groceroo_orders`
  ADD CONSTRAINT `groceroo_orders_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `groceroo_users_reg` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `groceroo_products`
--
ALTER TABLE `groceroo_products`
  ADD CONSTRAINT `groceroo_products_ibfk_1` FOREIGN KEY (`product_category`) REFERENCES `groceroo_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
