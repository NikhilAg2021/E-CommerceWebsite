-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 08:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvl_premier_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES
(1, 'Nikon', 36000),
(2, 'Canon', 55000),
(3, 'Sony', 60000),
(4, 'Lumix', 69999),
(5, 'Blue Angles', 11000),
(6, 'Rolex', 75000),
(7, 'Jack Pierre', 9999),
(8, 'UN Watch', 11999),
(9, 'Auzfs', 1600),
(10, 'Armani', 5000),
(11, 'LEE Cooper', 900),
(12, 'Suit Up', 999),
(13, 'iphone7', 25000),
(14, 'iphonex', 100000),
(15, 'iphone 8', 35000),
(16, 'iphone6', 20000),
(17, 'Reebok Bag', 2000),
(18, 'Wildcraft Bag', 2500),
(19, 'Safari Travel Bag', 1000),
(20, 'Thule Paramount Bag', 999),
(21, 'Nike Sports', 4000),
(22, 'Power Walking Shoes', 1500),
(23, 'Reebok Sportswear', 3000),
(24, 'Adidas Sneakers', 999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `address`, `dob`, `gender`) VALUES
(6, 'pranu k', 'kp@kp.com', '7d41c1bd0ac15d9f7ecbc0769fdd7af3', '91 9807654321', 'hyd-80', '0000-00-00', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `uiid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`uiid`, `user_id`, `item_id`, `status`) VALUES
(14, 6, 6, 'confirmed'),
(21, 6, 9, 'confirmed'),
(25, 6, 13, 'confirmed'),
(26, 6, 18, 'confirmed'),
(27, 6, 23, 'confirmed'),
(28, 6, 1, 'confirmed'),
(29, 6, 6, 'confirmed'),
(30, 6, 11, 'confirmed'),
(31, 6, 16, 'confirmed'),
(32, 6, 19, 'confirmed'),
(33, 6, 22, 'confirmed'),
(34, 6, 3, 'confirmed'),
(35, 6, 1, 'confirmed'),
(36, 6, 2, 'confirmed'),
(37, 6, 3, 'confirmed'),
(38, 6, 4, 'confirmed'),
(39, 6, 5, 'confirmed'),
(40, 6, 6, 'confirmed'),
(41, 6, 7, 'confirmed'),
(42, 6, 8, 'confirmed'),
(43, 6, 9, 'confirmed'),
(44, 6, 10, 'confirmed'),
(45, 6, 11, 'confirmed'),
(46, 6, 12, 'confirmed'),
(47, 6, 13, 'confirmed'),
(48, 6, 14, 'confirmed'),
(49, 6, 15, 'confirmed'),
(50, 6, 16, 'confirmed'),
(51, 6, 17, 'confirmed'),
(52, 6, 18, 'confirmed'),
(53, 6, 19, 'confirmed'),
(54, 6, 20, 'confirmed'),
(55, 6, 21, 'confirmed'),
(56, 6, 22, 'confirmed'),
(57, 6, 23, 'confirmed'),
(58, 6, 24, 'confirmed'),
(59, 6, 3, 'confirmed'),
(60, 6, 3, 'confirmed'),
(61, 6, 3, 'confirmed'),
(62, 6, 2, 'confirmed'),
(63, 6, 1, 'confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`uiid`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `uiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
