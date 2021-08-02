-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 04:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocerymart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(4, 'isuru', '$2y$10$POsDHUWFJ2uOULmtla0LIOyRPh9DfskWpc5Ib49YDre8IlOShm5WG', '2020-10-23 19:12:15'),
(5, 'savindi', '$2y$10$EUx1PWERR0Agw5JcOOM9ee98H4FpkCZU659/kj92v4qLXffJSeruW', '2020-10-23 19:44:42'),
(6, 'Mereesha', '$2y$10$Wh6zXfHg5Rzj.hLK3D7rCur63/zr8YSO.eWQxUqrFuEDbw3Rqp0HS', '2020-10-23 19:45:30'),
(7, 'thilanka', '$2y$10$5npUewBT/pliddwGwJHxd.5lA.9nHgnjr4evp.a7ezMWMDQpUTMyC', '2020-10-23 19:46:28'),
(8, 'nipuna', '$2y$10$HySsAjMfc/k69lNhd4IVxuCkZRn4ldLU7G83QzcoFLwARm7xOrYmy', '2020-10-23 19:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `barcode` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`barcode`, `username`, `added_at`) VALUES
(3, 'isuru', '2020-10-23 19:48:11'),
(8, 'isuru', '2020-10-23 19:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `product_type` varchar(225) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_description` varchar(225) NOT NULL,
  `choose_a_category` varchar(225) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giftcardorder`
--

CREATE TABLE `giftcardorder` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `card` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `too` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guestcart`
--

CREATE TABLE `guestcart` (
  `barcode` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `barcode`, `name`, `created_at`) VALUES
(5, 1, '1.jpg', '2020-10-23 19:15:04'),
(6, 2, '2.jpg', '2020-10-23 19:17:59'),
(7, 3, '3.jpg', '2020-10-23 19:18:53'),
(8, 4, '4.jpg', '2020-10-23 19:27:13'),
(9, 5, '5.jpg', '2020-10-23 19:30:55'),
(10, 6, '6.jpg', '2020-10-23 19:32:40'),
(11, 7, '7.jpg', '2020-10-23 19:33:54'),
(12, 8, '8.jpg', '2020-10-23 19:34:39'),
(13, 9, '9.jpg', '2020-10-23 19:35:33'),
(14, 10, '11.jpg', '2020-10-23 19:36:55'),
(15, 11, '12.jpg', '2020-10-23 19:37:34'),
(16, 12, '14.jpg', '2020-10-23 19:38:32'),
(17, 13, 'p1.jpg', '2020-10-23 19:39:44'),
(18, 14, 'p12.jpg', '2020-10-23 19:41:11'),
(19, 15, 'p10.jpg', '2020-10-23 19:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `barcode`, `name`, `item_type`, `description`, `rating`, `unit_price`, `quantity`, `added_at`) VALUES
(15, 1, 'Biscute Pack', 'Biscute', 'Different Kind Of Biscutes are in this package', 4, 160, 45, '2020-10-23 19:14:36'),
(16, 2, 'Variety Mix Pack', 'Chips', 'Taste is better than all', 3, 500, 657, '2020-10-23 19:17:52'),
(17, 3, 'Pepsi', 'Cool Drinks', 'Product of Cocacola Company', 5, 150, 700, '2020-10-23 19:18:46'),
(18, 4, 'Hutsun Curd', 'Milk Product', 'Product of Hutson Milk Product', 4, 45, 500, '2020-10-23 19:26:30'),
(19, 5, 'Cooking Powder Pack', 'Cooking Powder', 'Make your food tasty', 5, 450, 564, '2020-10-23 19:30:37'),
(20, 6, 'Fruit Jam', 'Jam', 'You would be like to buy again', 5, 780, 564, '2020-10-23 19:32:33'),
(21, 7, 'Pulse Packet', 'Pulse', 'You can buy a pack of pulse here', 3, 560, 45, '2020-10-23 19:33:48'),
(22, 8, 'Rice', 'Rice', '10 kg Rice', 5, 450, 500, '2020-10-23 19:34:34'),
(23, 9, 'Rice 50kg', '50', 'Rice 50 kg Packets are available now', 3, 2500, 500, '2020-10-23 19:35:25'),
(24, 10, 'Candy Choc', 'Chocolate', 'Here Buy Candy Choco packs', 6, 150, 600, '2020-10-23 19:36:47'),
(25, 11, 'Horlice', 'Milk Powder', 'Horlice 400g bottle', 4, 500, 300, '2020-10-23 19:37:25'),
(26, 12, 'Fresh Orange Juice', 'Juice', 'We offer you fresh Orange Joice Today', 4, 200, 46, '2020-10-23 19:38:23'),
(27, 13, 'Thumbs Up', 'Cool Drink', 'Here you can buy Thubs Up Drink', 3, 55, 300, '2020-10-23 19:39:23'),
(28, 14, 'Fresh MILK', 'Milk', 'Dhahi Fresh Milk', 6, 400, 345, '2020-10-23 19:40:59'),
(29, 15, 'Mountain Dew', 'Cool Drink', 'Mountain Dew 1.5L', 6, 150, 200, '2020-10-23 19:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tp` varchar(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `birthday` date DEFAULT NULL,
  `u_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_at`, `fullname`, `address`, `tp`, `email`, `birthday`, `u_type`) VALUES
(9, 'isuru', '$2y$10$FVgtLI0fUZqLKkQcuCFvJeIf4YGcsfBP9orpSggfVfhAOdaMk1Spy', '2020-10-23 19:47:53', 'H.M.Isuru Pathum Herath', 'B/474', '+94755371014', 'isurupethum2000@gmail.com', '2000-09-03', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `vender`
--

CREATE TABLE `vender` (
  `vender_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `type_business` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `id_number` varchar(13) NOT NULL,
  `contact_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `venderaccount`
--

CREATE TABLE `venderaccount` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venderaccount`
--

INSERT INTO `venderaccount` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'isuru', '$2y$10$rP0c8BTc6NyS9cbtYEjxueEMww2foD79jA8hpC3xWqZWW59C9SXOy', '2020-10-23 19:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `visiter`
--

CREATE TABLE `visiter` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visiter`
--

INSERT INTO `visiter` (`id`, `ip`, `added_at`) VALUES
(208, '::1', '2020-10-23 19:09:59'),
(209, '::1', '2020-10-23 19:10:04'),
(210, '::1', '2020-10-23 19:10:27'),
(211, '::1', '2020-10-23 19:16:13'),
(212, '::1', '2020-10-23 19:31:57'),
(213, '::1', '2020-10-23 19:35:39'),
(214, '::1', '2020-10-23 19:35:52'),
(215, '::1', '2020-10-23 19:39:56'),
(216, '::1', '2020-10-23 19:42:07'),
(217, '::1', '2020-10-23 19:42:18'),
(218, '::1', '2020-10-23 19:42:28'),
(219, '::1', '2020-10-23 19:46:58'),
(220, '::1', '2020-10-23 19:48:05'),
(221, '::1', '2020-10-23 19:48:13'),
(222, '::1', '2020-10-23 19:48:38'),
(223, '::1', '2020-10-23 19:49:07'),
(224, '::1', '2020-10-23 19:55:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`barcode`,`username`);

--
-- Indexes for table `guestcart`
--
ALTER TABLE `guestcart`
  ADD PRIMARY KEY (`ip`,`barcode`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `venderaccount`
--
ALTER TABLE `venderaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visiter`
--
ALTER TABLE `visiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `venderaccount`
--
ALTER TABLE `venderaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visiter`
--
ALTER TABLE `visiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
