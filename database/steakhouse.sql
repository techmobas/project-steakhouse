-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 07:14 PM
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
-- Database: `steakhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'E10ADC3949BA59ABBE56E057F20F883E');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(12, 'Beef Steak', 'Food_Category_771.jpg', 'Yes', 'Yes'),
(13, 'Chicken Steak', 'Food_Category_286.jpeg', 'Yes', 'Yes'),
(14, 'Fish Steak', 'Food_Category_13.jpg', 'Yes', 'Yes'),
(15, 'Pork Steak', 'Food_Category_588.jpg', 'Yes', 'Yes'),
(16, 'Tempeh Steak', 'Food_Category_138.jpg', 'Yes', 'Yes'),
(17, 'Drink', 'Food_Category_656.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `email`, `full_name`, `password`, `phone_number`) VALUES
(5, 'abc@abc.id', 'ABC', '$2y$10$5beNvBEx6xi.AjyMlDGTjOJz7ibfMTRcEH5iUXUBWryyCZM6I61tC', 454325452345),
(6, 'test@test.ff', 'test', '$2y$10$FKdhqaOKvVALJTpbCsZYIemWS/701ASC4WAlK6p/StG9EcgYmbbKa', 4353466),
(7, 'claudio@mail.com', 'Claudio', '$2y$10$DF0PHH1qGmGF8ck3Hi0fwujf2eNERccDouOTNczpQKauAlN/hhSfu', 1932482948),
(8, 'ikhsan@mail.com', 'ikhsan ganteng', '$2y$10$UjtQ1KCY.Zl4UTGrPWxnoeuJeHa2Vz.P8bDiMXI8tE2rB751l7oFG', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `food_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`food_id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(12, 'BBQ Beef Steak', 'Steak daging yang dilumuri oleh saos BBQ', '85000.00', 'Food-Name-2825.jpg', 12, 'Yes', 'Yes'),
(13, 'Mushroom Sous Beef Steak', 'Steak daging yang dilumuri oleh saos jamur', '90000.00', 'Food-Name-5390.jpg', 12, 'Yes', 'Yes'),
(14, 'BBQ Fish Steak', 'Steak ikan yang dilumuri oleh saos BBQ', '82000.00', 'Food-Name-5686.jpg', 14, 'Yes', 'Yes'),
(15, 'Mushroom Sous Fish Steak', 'Steak ikan yang dilumuri oleh saos jamur', '87000.00', 'Food-Name-2341.jpg', 14, 'Yes', 'Yes'),
(16, 'BBQ Pork Steak', 'Steak babi yang dilumuri oleh saos BBQ', '100000.00', 'Food-Name-224.jpg', 15, 'Yes', 'Yes'),
(17, 'Mushroom Sous Pork Steak', 'Steak babi yang dilumuri oleh saos jamur', '105000.00', 'Food-Name-5360.jpg', 15, 'Yes', 'Yes'),
(18, 'BBQ Chicken Steak', 'Steak ayam yang dilumuri oleh saos BBQ', '76000.00', 'Food-Name-2041.jpg', 13, 'Yes', 'Yes'),
(19, 'Mushroom Sous Chicken Steak', 'Steak ayam yang dilumuri oleh saos jamur', '81000.00', 'Food-Name-6779.jpg', 13, 'Yes', 'Yes'),
(20, 'BBQ Tempeh Steak', 'Steak tempe yang dilumuri oleh saos BBQ', '83000.00', 'Food-Name-3138.jpg', 16, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `quantity_people` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `quantity_people`, `total`, `order_date`, `order_time`, `customer_id`) VALUES
(1, 3, '150000.00', '2022-06-13', '22:58:16', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `pdid` int(10) NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `food_id` int(10) UNSIGNED NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`pdid`, `order_id`, `food_id`, `qty`) VALUES
(1, 1, 18, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `food_id_2` (`food_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_id_2` (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`pdid`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `order_id_2` (`order_id`),
  ADD KEY `food_id_2` (`food_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `food_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD CONSTRAINT `tbl_food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`);

--
-- Constraints for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `tbl_order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`),
  ADD CONSTRAINT `tbl_order_detail_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `tbl_food` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
