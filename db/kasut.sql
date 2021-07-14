-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 11:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasut`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(5) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `mi`, `lastname`, `address`, `country`, `zipcode`, `mobile`, `telephone`, `email`, `password`) VALUES
(1, 'Nasrul', 'B', 'Zaini', 'Anggerik', 'Selangor', '480', '0173884379', '123456', 'email@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`) VALUES
(3, 'Nemeziz 19.3 Firm', '350.00', '8', '5618584947575015621.jpg', 'Adidas', 'football'),
(15, 'Air Max 90 Flyease', '499.00', '10', '31869687882688561.jpg', 'Nike ', 'feature'),
(142, 'Nike React Infinity Run Flyknit', '705.00', '9', '6304174754441963625.jpg', 'Nike ', 'Running'),
(344, 'Jordan Zoom Tunner ', '609.00', '7', '760734339939051273.jpg', 'Nike ', 'feature'),
(563, '4D RUN 1.0 Shoes', '200.00', '8', '351452529074926619.jpg', 'Adidas', 'promo'),
(750, 'Crazy BYW 2.0 Shoes', '630.00', '7', '8170162762904750312.jpg', 'Adidas', 'basketball'),
(957, 'Predator Mutator 20.3 Firm Ground', '350.00', '8', '3537935657633781519.jpg', 'Adidas', 'football'),
(2828, 'Nike Mercurial Superfly 7 Academy', '369.00', '8', '9696954967791391917.jpg', 'Nike ', 'football'),
(4604, ' Puma x First Mile Erupt', '745.00', '8', '3887704646773813433.jpg', 'Puma', 'Running'),
(4664, 'King Top FG', '589.00', '10', '7006285605678524423.jpg', 'Puma', 'football'),
(4783, 'Ultraboost 20 Shoes', '780.00', '10', '7851228912481531530.jpg', 'Adidas', 'Running'),
(5784, 'Kybrid S2 EP', '545.00', '9', '183019551047189438.jpg', 'Nike ', 'basketball'),
(6345, 'Nike Air Zoom Pegasus 37 Premium', '436.00', '6', '750022234914902331.jpg', 'Nike ', 'promo'),
(7031, 'Nike React Infinity Run Flyknit Premium', '413.00', '9', '915586422293331393.jpg', 'Nike ', 'promo'),
(7159, 'Rivalry Human', '650.00', '9', '277616975128677925.jpg', 'Puma', 'feature'),
(7226, 'Super Sala Boots', '250.00', '9', '1121217325616855420.jpg', 'Adidas', 'football'),
(7578, 'Future 19.1 Netfit G/AG', '499.00', '9', '8123500541243492022.jpg', 'Puma', 'football'),
(8086, 'Legacy MM Basketball Shoes', '265.00', '7', '777837670112422414.jpg', 'Puma', 'promo'),
(9077, '4D Run 1.0 Shoes', '500.00', '9', '733330570554087878.jpg', 'Adidas', 'promo'),
(12688, 'Lquerr Origin', '389.00', '7', '645086528098322332.jpg', 'Puma', 'Running'),
(23873, 'Pro Boost Low Shoes', '480.00', '7', '7892511090802947811.jpg', 'Adidas', 'basketball'),
(35695, 'Harden Vol. 4', '630.00', '8', '623731136668434042.jpg', 'Adidas', 'feature'),
(42109, 'Legacy MM Basketball Shoes', '265.00', '9', '139598635482358184.jpg', 'Puma', 'promo'),
(49022, 'Nike Zoom Fly 3', '455.00', '7', '892641988426296952.jpg', 'Nike ', 'promo'),
(64036, 'Nike React Infinity Run Flyknit Premium', '413.00', '8', '144466280326635223.jpg', 'Nike ', 'promo'),
(67930, 'Legacy Disrupt', '349.00', '8', '9885991771002328614.jpg', 'Puma', 'basketball'),
(92263, 'Nike Zoom Rival Fly', '349.00', '9', '9398178238469390427.jpg', 'Nike ', 'Running'),
(96881, 'Puma One 20.3 FG/AG', '189.00', '10', '985206670557612824.jpg', 'Puma', 'football'),
(191543, 'Nike Air Zoom Pegasus', '545.00', '10', '6205092171561097526.jpg', 'Nike ', 'Running'),
(250408, 'D.O.N. Issue #2 Shoes', '480.00', '8', '4677925771328294510.jpg', 'Adidas', 'basketball'),
(479920, 'RS X The Unity', '569.00', '9', '76503792249570766.jpg', 'Puma', 'feature'),
(526570, 'Clyde Court London', '279.00', '10', '5833227721793598113.jpg', 'Puma', 'basketball'),
(829419, 'Nike Mercurial Superfly 7 Academy', '245.00', '10', '9696954967791391917.jpg', 'Nike ', 'football'),
(849519, 'Puma X The Hundreds', '619.00', '10', '226722398416241084.jpg', 'Puma', 'feature'),
(924970, 'Sky Modern', '659.00', '9', '7366767164423435115.jpg', 'Puma', 'basketball'),
(990912, 'Crazy BYW 2.0 Shoes', '630.00', '10', '6157208516044067412.jpg', 'Adidas', 'basketball'),
(1455206, 'Nike Phantom GT Academy', '445.00', '10', '5061926729371335518.jpg', 'Nike ', 'football'),
(4906404, ' Ultraboost DNA X Disney', '220.00', '7', '6825945969056547.jpg', 'Adidas', 'promo'),
(4937386, 'KD13 EPP', '609.00', '8', '546256723225663397.jpg', 'Nike ', 'basketball'),
(5746750, 'X9000L4 SHOES', '600.00', '7', '4401433308765423329.jpg', 'Adidas', 'Running'),
(7619418, 'Hybrid Rocket', '565.00', '10', '2808036542333731331.jpg', 'Puma', 'Running'),
(42245441, 'Duramo SL Shoes', '519.00', '8', '5186641045492867028.jpg', 'Adidas', 'Running');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(1, 71339, 20),
(2, 82631, 30),
(3, 3, 20),
(4, 4, 20),
(5, 6, 20),
(6, 7, 20),
(7, 8, 20),
(8, 9, 20),
(9, 10, 19),
(10, 11, 23),
(11, 13, 20),
(12, 14, 20),
(13, 15, 20),
(14, 16, 20),
(15, 17, 20),
(16, 19, 20),
(17, 20, 20),
(18, 21, 20),
(19, 26, 13),
(20, 28, 0),
(21, 29, 18),
(22, 30, 20),
(23, 31, 22),
(26, 431860, 38),
(27, 21561, 30),
(28, 358159, 28),
(29, 157, 25),
(30, 51292, 20),
(31, 961461, 22),
(32, 4937386, 20),
(33, 5784, 20),
(34, 517618, 10),
(35, 811408, 15),
(36, 435962, 10),
(37, 250408, 20),
(38, 23873, 15),
(39, 990912, 8),
(40, 526570, 8),
(41, 67930, 8),
(42, 924970, 9),
(43, 3149, 5),
(44, 5899234, 5),
(45, 86641, 6),
(46, 2042, 6),
(47, 829419, 14),
(48, 2828, 7),
(49, 1455206, 11),
(50, 957, 6),
(51, 7226, 14),
(52, 3, 13),
(53, 7578, 12),
(54, 4664, 14),
(55, 96881, 14),
(56, 8531, 14),
(57, 750, 16),
(58, 479920, 12),
(59, 7159, 11),
(60, 15, 13),
(61, 344, 16),
(62, 849519, 15),
(63, 35695, 13),
(64, 142, 12),
(65, 191543, 13),
(66, 92263, 12),
(67, 42245441, 12),
(68, 5746750, 12),
(69, 4783, 14),
(70, 7619418, 13),
(71, 12688, 13),
(72, 4604, 14),
(73, 82265, 14),
(74, 4733, 13),
(75, 6345, 12),
(76, 49022, 8),
(77, 7031, 12),
(78, 42109, 9),
(79, 58219, 10),
(80, 8075, 12),
(81, 64036, 13),
(82, 8759, 12),
(83, 6555, 15),
(84, 8086, 13),
(85, 4906404, 13),
(86, 9077, 12),
(87, 563, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
