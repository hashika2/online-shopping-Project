-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 10:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `image`, `price`) VALUES
(1, 'mens max', 'sm1.jpg', 45),
(2, 'mens max', 'sm2.jpg', 56),
(3, 'mens max', 'sm3.jpg', 55),
(4, 'mens max', 'sm4.jpg', 65),
(5, 'smart mens', 'pp2.jpg', 20),
(6, 'smart mens', 'pp3.jpg', 25),
(7, 'smart mens', 'pp4.jpg', 30),
(8, 'smart mens', 'pp5.jpg', 23),
(9, 'smart mens', 'pp6.jpg', 20),
(10, 'smart mens', 'pp7.jpg', 10),
(11, 'smart mens', 'pp8.jpg', 12),
(12, 'smart mens', 'pp9.jpg', 26),
(13, 'smart for mens', 'sm5.jpg', 56),
(14, 'smart for mens', 'sm6.jpg', 20),
(15, 'smart for mens', 'sm7.jpg', 12),
(16, 'smart for mens', 'sm8.jpg', 35),
(24, 'girls special', 'hd1.jpg', 14),
(25, 'girls special', 'hd2.jpg', 15),
(26, 'girls special', 'hd3.jpg', 19),
(27, 'girls special', 'hd4.jpg', 25),
(28, 'girls special', 'hd5.jpg', 22),
(29, 'girls special', 'hd6.jpg', 25),
(30, 'girls special', 'hd7.jpg', 30),
(31, 'girls special', 'hd8.jpg', 15),
(32, 'girls special', 'hd10.jpg', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
