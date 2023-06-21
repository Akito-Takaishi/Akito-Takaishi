-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 05:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putoexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `bvg_table`
--

CREATE TABLE `bvg_table` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bvg_table`
--

INSERT INTO `bvg_table` (`id`, `name`, `description`, `image`, `price`, `quantity`) VALUES
(1, 'Cucumber Juice', '<p>Taste the refreshing cucumber juice!</p>', 'cucumberjuice.jpg', 20.00, 0),
(2, 'Melon Juice', '<p>Taste the refreshing melon juice!</p>', 'melonjuice.jpg', 25.00, 0),
(3, '', '<p>Taste the refreshing </p>', '', 20.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` int(12) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contactno`, `subject`, `comment`) VALUES
(1, 'ADaaA', 'robert123@gmail.com', 2147483647, 'asgasg', 'ddssdfffd'),
(2, 'Law', 'sample@gmail.com', 2147483647, 'asgasg', 'podfjodjskljdo');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `name`, `description`, `image`, `price`, `quantity`) VALUES
(1, 'Puto Carrot', '<p>Taste the nutritious and delicious Puto Carrot!</p>', 'putocarrot.jpg', 8.00, 0),
(2, 'Puto Mangga', '<p>Taste the nutritious and delicious Puto Mangga!</p>', 'putomangga.jpg', 8.00, 0),
(3, 'Puto Kalabasa', '<p>Taste the nutritious and delicious Puto Kalabasa!</p>', 'putokalabasa.jpg', 8.00, 0),
(4, 'Puto Malunggay', '<p>Taste the nutritious and delicious Puto Malunggay!</p>', 'putomalunggay.jpg', 8.00, 0),
(5, 'Plain Puto', '<p>Product description!</p>', 'plainputo.jpg', 8.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bvg_table`
--
ALTER TABLE `bvg_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bvg_table`
--
ALTER TABLE `bvg_table`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
