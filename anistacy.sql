-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 07:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anistacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(15, 'Wrist Band', 300, 'p8.jpg', 1),
(16, 'Anya Pillow', 800, 'p12.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `catagory_id` int(11) NOT NULL,
  `catagory_title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`catagory_id`, `catagory_title`, `image`) VALUES
(1, 'T-shirt', 'p10.jpg'),
(2, 'Shoes', 'p7.jpg'),
(3, 'kimono', 'p6.jpg'),
(4, 'More', 'p12.jpg'),
(5, 'Bracelets', 'p8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `total_products` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'Sadia Islam', '01937081420', 'sadiaodhora1406@gmail.com', 'cash on delivery', 'House 07,Road 02, sector 03, Tushardhara,Kadamtali,Matuail', 'none', 'Dhaka', 'Dhaka', 'Bangladesh', '1362', 'Anya Pillow (1) , Killua T-shirt (1) ', '1100'),
(2, 'Sadia Islam', '01937081420', 'jolkonnaodhora@gmail.com', 'cash on delivery', 'None', 'eefrg', 'Dhaka', 'Dhaka', 'Bangladesh', '1362', 'Killua T-shirt (1) ', '400'),
(3, 'Sadia Islam', '01937081420', 'sadiaodhora1406@gmail.com', 'cash on delivery', 'House 07,Road 02, sector 03, Tushardhara,Kadamtali,Matuail', 'grhth', 'Dhaka', 'Dhaka', 'Bangladesh', '1362', 'Killua T-shirt (1) ', '400'),
(4, 'Neha', '01937081420', 'jolkonnaodhora@gmail.com', 'cash on delivery', 'None', 'dsfsdgf', 'Dhaka', 'Dhaka', 'Bangladesh', '1362', 'Wrist Band (1) , Anya Pillow (1) ', '1100');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `ID` int(11) NOT NULL,
  `P_NAME` varchar(100) NOT NULL,
  `PRICE` varchar(100) NOT NULL,
  `QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`ID`, `P_NAME`, `PRICE`, `QUANTITY`) VALUES
(1, 'Wrist Band', '200', 1),
(2, 'Itachi Sneakers', '1200', 1),
(3, 'Hoodie', '700', 1),
(4, 'Kimono', '800', 1),
(5, 'Killua T-shirt', '300', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_keywords` varchar(250) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `catagory_id`, `product_image`, `product_price`, `date`, `status`) VALUES
(1, 'Killua T-shirt', 'T-Shirt', 'Modern', 1, 'p10.jpg', 400, '2022-09-04 17:20:01', 'true'),
(2, 'Anya Pillow', 'Pillow', 'Pillow', 4, 'p12.jpg', 800, '2022-09-04 17:38:43', 'true'),
(3, 'Wrist Band', 'Naruto Wrist Band', 'Bracelet', 5, 'p8.jpg', 300, '2022-09-04 17:51:40', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Odhora', 'jolkonnaodhora@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Sadia', 'sadiaodhora1406@gmail.com', 'user', '099ebea48ea9666a7da2177267983138'),
(3, 'SadiaIslam', '190204010@aust.edu', 'user', 'fcea920f7412b5da7be0cf42b8c93759'),
(4, 'xyz', 'sadiaodhora@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Sadia', 'sadiaodhora@gmail.com', 'user', '7753e15a726cfc917086a0f19a8b2bea'),
(7, 'Neha', 'nehanawar@gmail.com', 'user', '674f3c2c1a8a6f90461e8a66fb5550ba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
