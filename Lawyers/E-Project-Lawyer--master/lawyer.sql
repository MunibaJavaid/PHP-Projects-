-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 09:23 PM
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
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(11) NOT NULL,
  `user_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` varchar(225) NOT NULL,
  `Time` varchar(225) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Lawyer` varchar(50) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `Status` varchar(225) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `user_Name`, `Email`, `Date`, `Time`, `Category`, `Lawyer`, `Message`, `Status`) VALUES
(5, 'abc', 'mujtabak419@gmail.com', '01/05/2023', '3:56 PM', 'Family Law', 'Abigail Sofia', 'dasdasda', 'Approved'),
(7, 'lmn', 'lmn@gmail.com', '12/15/2022', '11:39 PM', 'Real State Law', 'Sofia Saim', 'sdfsdfs', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `catageriws_laywers`
--

CREATE TABLE `catageriws_laywers` (
  `C_id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Icon` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catageriws_laywers`
--

INSERT INTO `catageriws_laywers` (`C_id`, `Name`, `Icon`, `Description`) VALUES
(6, 'Civil Law', 'fas fa-2x fa-landmark', 'Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.'),
(7, 'Family Law', 'fas fa-2x fa-users', 'Our attorneys are highly trained and skilled in the Family Law sector to provide the top service.'),
(8, 'Workplace Accident', 'fas fa-2x fa-business-time', 'Our attorneys are highly trained and skilled in the WorkPlace Accident Law sector to provide the top service.'),
(9, 'Criminal Law', 'fas fa-2x fa-gavel', 'Our attorneys are highly trained and skilled in the Criminal Law sector to provide the top service.'),
(10, 'Real State Law', 'fas fa-2x fa-landmark', 'Our attorneys are highly trained and skilled in the Real Stae Law sector to provide the top service.'),
(11, 'Cyber Law', 'fab fa-2x fa-battle-net', 'Our attorneys are highly trained and skilled in the Cyber Law sector to provide the top service.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Category` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Category`, `Email`, `Phone`, `Message`) VALUES
(20, 'lmn', 'Cyber Law', 'abc@gmail.com ', '75785', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `Lawyer_Id` int(11) NOT NULL,
  `Lawyer_Name` varchar(50) NOT NULL,
  `Lawyer_Category` int(11) NOT NULL,
  `Lawyer_Img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`Lawyer_Id`, `Lawyer_Name`, `Lawyer_Category`, `Lawyer_Img`) VALUES
(10, 'Charles Calib', 7, '../Main_Layout/assets/images/bg/attorney2.png'),
(11, 'Abigail Sofia', 7, '../Main_Layout/assets/images/bg/attorney1.png'),
(12, 'James Richard', 7, '../Main_Layout/assets/images/bg/attorney2.png'),
(13, 'Anthony Dylan', 7, '../Main_Layout/assets/images/bg/attorney3.png'),
(14, 'Harry Fernando', 6, '../Main_Layout/assets/images/bg/attorney4.png'),
(15, 'Richard Lawison', 6, '../Main_Layout/assets/images/bg/attorney21.png'),
(16, 'Ezra Gabriel', 6, '../Main_Layout/assets/images/bg/attorney41.png'),
(17, 'Michael Moris', 6, '../Main_Layout/assets/images/bg/attorney22.png'),
(18, 'John Elia', 8, '../Main_Layout/assets/images/bg/attorney23.png'),
(21, 'Samuel Richard', 8, '../Main_Layout/assets/images/bg/attorney23.png'),
(23, 'David Miller', 8, '../Main_Layout/assets/images/bg/attorney42.png'),
(26, 'Eliza Michael', 9, '../Main_Layout/assets/images/bg/attorney25.jpg'),
(27, 'Jason Roy', 9, '../Main_Layout/assets/images/bg/attorney44.png'),
(28, 'Adam Michel', 10, '../Main_Layout/assets/images/bg/attorney28.jpg'),
(30, 'Sofia Saim', 10, '../Main_Layout/assets/images/bg/attorney25.jpg'),
(31, 'Chan San', 10, '../Main_Layout/assets/images/bg/attorney26.jpg'),
(32, 'Ben Stokes', 11, '../Main_Layout/assets/images/bg/attorney31.jpg'),
(33, 'Ben Stokes', 11, '../Main_Layout/assets/images/bg/attorney31.jpg'),
(34, 'Sofia Abgail', 11, '../Main_Layout/assets/images/bg/attorney29.jpg'),
(36, 'Richard James', 11, '../Main_Layout/assets/images/bg/attorney32.jpg'),
(38, 'John Elia', 8, '../Main_Layout/assets/images/bg/attorney24.png'),
(39, 'Eliza Michael', 9, '../Main_Layout/assets/images/bg/attorney25.jpg'),
(40, 'Jack Moris', 9, '../Main_Layout/assets/images/bg/attorney43.png'),
(41, 'Adam Michel', 10, '../Main_Layout/assets/images/bg/attorney 45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers_info`
--

CREATE TABLE `lawyers_info` (
  `lawyers_id` int(11) NOT NULL,
  `Lawyers_Name` int(11) NOT NULL,
  `Lawyers_Experience` varchar(225) NOT NULL,
  `Lawyers_contact` varchar(225) NOT NULL,
  `Lawyers_Addres` varchar(225) NOT NULL,
  `category` int(11) NOT NULL,
  `des` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyers_info`
--

INSERT INTO `lawyers_info` (`lawyers_id`, `Lawyers_Name`, `Lawyers_Experience`, `Lawyers_contact`, `Lawyers_Addres`, `category`, `des`) VALUES
(1, 11, '13', '033344464', 'asdgadakd', 7, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Family Law Defence, a Full-Service Family Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(4, 15, '12', '+92-00000000', 'Street-05, Plot 22, Karachi', 6, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Civil Defence, a Full-Service Civil Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(5, 16, '13', '+92-00000000', 'Street-05, Plot 22, Karachi', 6, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Civil Defence, a Full-Service Civil Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(6, 17, '15', '+92-00000000', 'Street-05, Plot 22, Karachi', 6, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Civil Defence, a Full-Service Civil Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(7, 12, '11', '+92-00000000', 'Street-05, Plot 22, Karachi', 7, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Family Defence, a Full-Service Family Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(8, 13, '15', '+92-00000000', 'Street-05, Plot 22, Karachi', 7, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Family Defence, a Full-Service Family Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(9, 21, '14', '+92-00000000', 'Street-05, Plot 22, Karachi', 8, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Workplace Accident Defence, a Full-Service Workplace Accident Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(11, 23, '14', '+92-00000000', 'Street-05, Plot 22, Karachi', 8, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Workplace Accident Defence, a Full-Service Workplace Accident Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(13, 26, '11', '+92-00000000', 'Street-05, Plot 22, Karachi', 9, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Criminal Defence, a Full-Service Criminal Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(14, 27, '13', '+92-00000000', 'Street-05, Plot 22, Karachi', 9, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Criminal Defence, a Full-Service Criminal Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(16, 30, '12', '+92-00000000', 'Street-05, Plot 22, Karachi', 10, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Real State Defence, a Full-Service Real State Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(17, 31, '12', '+92-00000000', 'Street-05, Plot 22, Karachi', 10, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Real State Defence, a Full-Service Real State Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(18, 33, '19', '+92-00000000', 'Street-05, Plot 22, Karachi', 11, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Cyber Defence, a Full-Service Cyber Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(19, 34, '11', '+92-00000000', 'Street-05, Plot 22, Karachi', 11, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Cyber Defence, a Full-Service Cyber Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(20, 36, '20', '+92-00000000', 'Street-05, Plot 22, Karachi', 11, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Cyber Defence, a Full-Service Cyber Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(21, 38, '12', '+92-00000000', 'Street-05, Plot 22, Karachi', 8, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Workplace Accident Defence, a Full-Service Workplace Accident Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients'),
(22, 39, '15', '+92-00000000', 'Street-05, Plot 22, Karachi', 9, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Criminal Defence, a Full-Service Criminal Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(23, 40, '18', '+92-00000000', 'Street-05, Plot 22, Karachi', 9, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Criminal Defence, a Full-Service Criminal Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defences and satisfied clients'),
(24, 41, '16', '+92-00000000', 'Street-05, Plot 22, Karachi', 10, 'I am a senior lawyer at Savage Oykhman Law (an association of independent practices) and am the Founder of Oykhman Real State Defence, a Full-Service Real State Law firm with central law offices across Western Canada and Ontario. My professional experience consists of countless court appearances and thousands of successful defenses and satisfied clients');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_reg`
--

CREATE TABLE `lawyer_reg` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Degree` varchar(225) NOT NULL,
  `Expertise` varchar(225) NOT NULL,
  `Image` varchar(400) NOT NULL,
  `Number` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `TextArea` varchar(400) NOT NULL,
  `Status` varchar(225) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer_reg`
--

INSERT INTO `lawyer_reg` (`Id`, `Name`, `Email`, `Degree`, `Expertise`, `Image`, `Number`, `City`, `Address`, `TextArea`, `Status`) VALUES
(8, 'abc', 'abc@gmail.com', 'master', 'WorkPlace Accident', 'assets/images/bg/Desert.jpg', '545454545', 'Lahore', 'asdadada', 'dsasdads', 'Rejected'),
(9, 'lmn', 'xyz@gmail.com', 'inter', 'Real State Law', 'assets/images/bg/Desert.jpg', '45346464', 'Islamabad', 'asdada', 'fsdafsdfds', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `user_Id` int(11) NOT NULL,
  `F_Name` varchar(225) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `C_Password` varchar(225) NOT NULL,
  `Roll_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`user_Id`, `F_Name`, `L_Name`, `Email`, `Password`, `C_Password`, `Roll_type`) VALUES
(8, 'abc', 'xyz', 'abc@gmail.com', '$2y$10$GbP2LtpyQkl96GA0gqrJF.ZMzDu9es51DN5lQZ9IM3aZpTAYpGeM6', '$2y$10$dkpMqgDasJPhT8G0JUNN2eUEmlJkvN3lPI4fJI6Hgm1SY90Yb.Nve', 'V'),
(10, 'Admin', '', 'admin@gmail.com', '$2y$10$cqz0NAHEih6WNTofWfyTXuJIeLVL6pAiAV5m.CTCUpEKmwD0M0.b2', '$2y$10$H8tBvNwXjfi6XBWIbLB7MOo4nBqJBn0bRVMx7V1RmyYYY7QUQr25K', 'A'),
(11, 'lmn', 'xyz', 'lmn@gmail.com', '$2y$10$encTxuZM6A5OYNYWrVJyaOFs4Wpx6YIHoe/2.2GNjlX./n7T7iQg2', '$2y$10$O1sn0rLikyo3A366gjsomebj4R3RYUOx8BjsXfBVULTYLG1w5fyPK', 'V');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `catageriws_laywers`
--
ALTER TABLE `catageriws_laywers`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`Lawyer_Id`),
  ADD KEY `FK_Cat` (`Lawyer_Category`);

--
-- Indexes for table `lawyers_info`
--
ALTER TABLE `lawyers_info`
  ADD PRIMARY KEY (`lawyers_id`),
  ADD KEY `category` (`category`),
  ADD KEY `FK_lawyer_Name` (`Lawyers_Name`);

--
-- Indexes for table `lawyer_reg`
--
ALTER TABLE `lawyer_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catageriws_laywers`
--
ALTER TABLE `catageriws_laywers`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `Lawyer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `lawyers_info`
--
ALTER TABLE `lawyers_info`
  MODIFY `lawyers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lawyer_reg`
--
ALTER TABLE `lawyer_reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register_form`
--
ALTER TABLE `register_form`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `FK_Cat` FOREIGN KEY (`Lawyer_Category`) REFERENCES `catageriws_laywers` (`C_id`);

--
-- Constraints for table `lawyers_info`
--
ALTER TABLE `lawyers_info`
  ADD CONSTRAINT `FK_lawyer_Name` FOREIGN KEY (`Lawyers_Name`) REFERENCES `lawyers` (`Lawyer_Id`),
  ADD CONSTRAINT `lawyers_info_ibfk_1` FOREIGN KEY (`category`) REFERENCES `catageriws_laywers` (`C_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
