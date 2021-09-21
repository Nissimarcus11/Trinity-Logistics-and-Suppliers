-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql312.epizy.com
-- Generation Time: Apr 29, 2021 at 01:58 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28433540_trinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `Locations`
--

CREATE TABLE `Locations` (
  `prefix` varchar(3) NOT NULL DEFAULT 'LOC',
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `supplierID` varchar(7) NOT NULL,
  `address` varchar(150) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Locations`
--

INSERT INTO `Locations` (`prefix`, `id`, `supplierID`, `address`, `district`, `state`, `pincode`, `latitude`, `longitude`, `Description`) VALUES
('LOC', 0001, 'TLS0001', 'Inavolu', 'Guntur', 'Andhra Pradesh', 522237, 16.4935, 80.5015, 'Demo Location');

-- --------------------------------------------------------

--
-- Table structure for table `ProductID`
--

CREATE TABLE `ProductID` (
  `prefix` varchar(3) NOT NULL DEFAULT 'PID',
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ProductID`
--

INSERT INTO `ProductID` (`prefix`, `id`, `Name`) VALUES
('PID', 0001, 'Product1'),
('PID', 0002, 'product 2'),
('PID', 0009, 'Product 3');

-- --------------------------------------------------------

--
-- Table structure for table `Product Locations`
--

CREATE TABLE `Product Locations` (
  `SNo` int(10) NOT NULL,
  `ProductID` varchar(7) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `LocationID` varchar(7) NOT NULL,
  `SupplierID` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product Locations`
--

INSERT INTO `Product Locations` (`SNo`, `ProductID`, `Name`, `description`, `LocationID`, `SupplierID`) VALUES
(4, 'PID0002', 'rithu', 'Near,highway,tour hills,rajamahendravaram', 'LOC0001', 'TLS0002');

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `prefix` varchar(3) NOT NULL DEFAULT 'TLS',
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`prefix`, `id`, `name`, `email`, `phone`, `description`) VALUES
('TLS', 0001, 'John Doe', 'johndoe@example.com', 9876543210, 'Hello, I am an example user. '),
('TLS', 0002, 'Admin', 'admin.tls@gmail.com', 8179594081, 'Admin'),
('TLS', 0003, 'ruthvija', 'ruthvija.18MIS7191@vitap.ac.in', 6304017714, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `User_login`
--

CREATE TABLE `User_login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_login`
--

INSERT INTO `User_login` (`Username`, `Password`, `Email`) VALUES
('rakesh', 'd18a70f2eda9cb59786d953fd9ccd2a086726cb602e40bbb0b2d18328d6ae8849d796eeffcbb3ef66949acb5dbe17f5f8729', 'rb@gmail.com'),
('sidwick', '62c63187573961c61db0943b344a171e431009e0d4e110b0852499d19f8b3f6a10a41cd8374ff9499257d7b6788850d70c2c', 'sidwick@yahoo.com'),
('rakesh18', 'd18a70f2eda9cb59786d953fd9ccd2a086726cb602e40bbb0b2d18328d6ae8849d796eeffcbb3ef66949acb5dbe17f5f8729', 'rakesh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Locations`
--
ALTER TABLE `Locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplierID` (`supplierID`);

--
-- Indexes for table `ProductID`
--
ALTER TABLE `ProductID`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `Product Locations`
--
ALTER TABLE `Product Locations`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`prefix`,`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `User_login`
--
ALTER TABLE `User_login`
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Locations`
--
ALTER TABLE `Locations`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `ProductID`
--
ALTER TABLE `ProductID`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Product Locations`
--
ALTER TABLE `Product Locations`
  MODIFY `SNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
