-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 08:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `sc_cart`
--

CREATE TABLE `sc_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(4) NOT NULL,
  `qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sc_products`
--

CREATE TABLE `sc_products` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc_products`
--

INSERT INTO `sc_products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Apple iPhone 13', 1000, 'New iphone. not good.', 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-family-hero?wid=940&hei=1112&fmt=png-alpha&.v=1644969385433'),
(2, 'One plus 8', 800, 'good phone', 'https://www.gizmochina.com/wp-content/uploads/2019/10/oneplus_8_pro-.png'),
(3, 'Lenovo', 700, 'transparent-lenovo-vibe-k5', 'https://w7.pngwing.com/pngs/661/870/png-transparent-lenovo-vibe-k5-plus-lenovo-vibe-p1-lenovo-smartphones-android-android-gadget-mobile-phone-ram.png'),
(4, 'Lenovo', 500, 'Lenovo vibe', 'https://banner2.cleanpng.com/20180415/tqq/kisspng-lenovo-vibe-k4-note-lenovo-vibe-p1-lenovo-smartpho-atm-5ad3ec3a2b0541.3791653115238380101762.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sc_cart`
--
ALTER TABLE `sc_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_products`
--
ALTER TABLE `sc_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sc_cart`
--
ALTER TABLE `sc_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sc_products`
--
ALTER TABLE `sc_products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
