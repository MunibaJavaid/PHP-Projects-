-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 08:09 AM
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
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `companytester`
--

CREATE TABLE `companytester` (
  `cplrId` int(11) NOT NULL,
  `prodId` int(11) DEFAULT NULL,
  `ProductName` varchar(225) NOT NULL,
  `Remarks` varchar(225) DEFAULT NULL,
  `Result` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companytester`
--

INSERT INTO `companytester` (`cplrId`, `prodId`, `ProductName`, `Remarks`, `Result`) VALUES
(2, 8, 'Capacitor', 'Good', 'Refused'),
(3, 8, 'Capacitor', 'Good', 'send'),
(4, 8, 'Capacitor', 'excellent', 'Refused'),
(5, 8, 'Capacitor', 'excellent', 'Refused');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone_Number` decimal(10,2) NOT NULL,
  `Message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `labtesting`
--

CREATE TABLE `labtesting` (
  `sIrId` int(11) NOT NULL,
  `slrName` varchar(225) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Remarks` varchar(225) DEFAULT NULL,
  `Result` varchar(225) DEFAULT NULL,
  `ProdName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labtesting`
--

INSERT INTO `labtesting` (`sIrId`, `slrName`, `ProductId`, `Remarks`, `Result`, `ProdName`) VALUES
(4, 'Zubair', 8, 'Good', 'Rejected', 'Capacitor'),
(5, 'Zubair', 8, 'Goods', 'Rejected', 'Capacitor'),
(6, 'Zubair', 10, 'Goods', 'Approved', 'Electrical');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(225) NOT NULL,
  `ProductName` varchar(225) NOT NULL,
  `Status` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `Image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `ProductName`, `Status`, `Description`, `Image`) VALUES
(8, 'Capacitor', 'launched', 'buttons', '../MainLayout/assets/images/ln2.jpg'),
(9, 'Registers', 'holdsss', 'Registers', '../MainLayout/assets/images/register.jpg'),
(10, 'Electrical', 'launched', 'xyz', '../MainLayout/assets/images/elcrical.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Photo` varchar(400) NOT NULL,
  `Role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Name`, `Email`, `Password`, `Photo`, `Role`) VALUES
(17, 'Admin', 'admin@gmail.com', '$2y$10$.yUG/.c1loKgPWAP05T59eiGteK1x/rzKYGzzhT9GrshuIi09204y', '../SaveImages/images/laboratoryTester.jpg', 'admin'),
(18, 'Asher', 'asher@gmail.com', '$2y$10$0nUhL2TAi.xPWpnJfhdmqePNFIxBVKHQFm4kBeD3A2sz1Y7v.tCs2', '../SaveImages/images/laboratoryTester.jpg', 'CRIP'),
(19, 'Zubair', 'zubair@gmail.com', '$2y$10$4.gwTOgYPD1tIfIZ2fwktut0YTkZcvrIBPDbLyyTpLjvyVrViEaG6', '../SaveImages/images/laboratoryTester.jpg', 'LRIP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companytester`
--
ALTER TABLE `companytester`
  ADD PRIMARY KEY (`cplrId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `labtesting`
--
ALTER TABLE `labtesting`
  ADD PRIMARY KEY (`sIrId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companytester`
--
ALTER TABLE `companytester`
  MODIFY `cplrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labtesting`
--
ALTER TABLE `labtesting`
  MODIFY `sIrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
