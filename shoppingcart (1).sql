-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 07:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(10, 'ahtesham', 'ahteshamarain3@gmail.com', '$2y$10$0ytAPBdT2020t');

-- --------------------------------------------------------

--
-- Table structure for table `adminpro`
--

CREATE TABLE `adminpro` (
  `fullname` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminpro`
--

INSERT INTO `adminpro` (`fullname`, `about`, `company`, `job`, `country`, `address`, `phone`, `email`) VALUES
('Kevin Anderson1', 'Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.', 'Lueilwitz, Wisoky and Leuschke', 'Web Designer', 'USA', 'A108 Adam Street, New York, NY 535022', '(436) 486-3538 x29071', 'email');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `catdes` varchar(255) NOT NULL,
  `catstatus` varchar(255) NOT NULL,
  `catdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `catdes`, `catstatus`, `catdate`) VALUES
(3, 'drhd', 'qsqs', '1', '2024-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `employeedata`
--

CREATE TABLE `employeedata` (
  `eid` int(11) NOT NULL,
  `efname` varchar(255) NOT NULL,
  `elname` varchar(255) NOT NULL,
  `eemail` varchar(255) NOT NULL,
  `epass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeedata`
--

INSERT INTO `employeedata` (`eid`, `efname`, `elname`, `eemail`, `epass`) VALUES
(4, 'ahtesham1', 'arain', 'ahtesham12@gmail.com', '$2y$10$VsDfSrP175YcpZnhwQQM6uyg.3OB2e1WEasIwHARBdS/A2GLUp9Um'),
(5, 'umer', 'choudry', 'ahtesham1@gmail.com', '$2y$10$kCpNnA1gG12BRXgv30BdX.T435rEnZPUNMuGwX0z1tMlZ6x2ay4y6');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `pcategory` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(41, 'ali baba', 'Baker baba', 'ali@gmail.com', 'password18'),
(42, 'Ava1', 'Baker', 'email', 'password19'),
(43, 'Ava1', 'Baker', 'email', 'password20'),
(44, 'Ava1', 'Baker', 'email', 'password1'),
(45, 'Ava1', 'Baker', 'email', 'password2'),
(46, 'Ava1', 'Baker', 'email', 'password3'),
(47, 'Ava1', 'Baker', 'email', 'password4'),
(48, 'Ava1', 'Baker', 'email', 'password5'),
(49, 'Ava1', 'Baker', 'email', 'password6'),
(50, 'Ava1', 'Baker', 'email', 'password7'),
(51, 'Ava1', 'Baker', 'email', 'password8'),
(52, 'Ava1', 'Baker', 'email', 'password9'),
(53, 'Ava1', 'Baker', 'email', 'password10'),
(54, 'Ava1', 'Baker', 'email', 'password11'),
(55, 'Ava1', 'Baker', 'email', 'password12'),
(56, 'Ava1', 'Baker', 'email', 'password13'),
(57, 'Ava1', 'Baker', 'email', 'password14'),
(58, 'Ava1', 'Baker', 'email', 'password15'),
(59, 'Ava1', 'Baker', 'email', 'password16'),
(60, 'Ava1', 'Baker', 'email', 'password17'),
(61, 'Ava1', 'Baker', 'email', 'password18'),
(62, 'Ava1', 'Baker', 'email', 'password19'),
(63, 'Ava1', 'Baker', 'email', 'password20'),
(64, 'khan', 'wkwf', 'ahtesham@121gmail.com', '$2y$10$.inPDI/ZdgBXHQ5zE5YOhuRXAImMoq8oAtlTCA7RfeFNlkK2tJUCi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`admin_email`,`admin_password`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `employeedata`
--
ALTER TABLE `employeedata`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cat fk` (`pcategory`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employeedata`
--
ALTER TABLE `employeedata`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
