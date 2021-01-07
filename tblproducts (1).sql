-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 07:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` float NOT NULL,
  `productCode` varchar(255) NOT NULL,
  `productInstock` tinyint(1) NOT NULL,
  `productDiscount` float NOT NULL,
  `productSizes` varchar(255) NOT NULL,
  `productDetails` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`productId`, `productName`, `productPrice`, `productCode`, `productInstock`, `productDiscount`, `productSizes`, `productDetails`, `image`) VALUES
(500, 'black shoes', 30000, 'axs', 26, 100, ' M', 'good reviews', 'product-2.jpg'),
(4, 'Long shorts', 1000, 'asc', 0, 20, '  L', 'durable material', 'product-3.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
