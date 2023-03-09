-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 12:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_haris`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'haris', 'haris@gmail.com', 'hello world'),
(2, 'umar', 'u@g.c', 'dfdfdd\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ourmenu`
--

CREATE TABLE `ourmenu` (
  `id` int(11) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `lt` text NOT NULL,
  `st` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourmenu`
--

INSERT INTO `ourmenu` (`id`, `productname`, `price`, `image`, `lt`, `st`) VALUES
(20, 'Product 1', 3.99, 'product4.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(21, 'Product 2', 5.99, '813307337_jewellery1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(22, 'Product 3', 9.99, '963280341_about1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(23, 'Product 4', 69.99, 'about2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(25, 'Product 5', 15.56, 'banner.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(26, 'Product 6', 1.99, 'catagories1.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(27, 'Product 7', 4.99, 'jew.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(28, 'Product 8', 3.55, 'jewellery2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing'),
(29, 'Product 9', 7.56, 'product2.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d', 'Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(16, 'haris', 'h@g.c', 1, '1'),
(17, '1', '1', 1, '1'),
(18, 'haris', 'haris@gmail.com', 123, 'haris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourmenu`
--
ALTER TABLE `ourmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourmenu`
--
ALTER TABLE `ourmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
