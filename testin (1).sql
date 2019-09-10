-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 07:28 PM
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
(32, 'girls special', 'hd10.jpg', 14),
(51, 'smart mens', 'sh3.jpg', 34),
(52, 'smart mens', 'sh4.jpg', 25),
(53, 'smart mens', 'sh5.jpg', 20),
(54, 'smart mens', 'sh6.jpg', 35),
(55, 'smart mens', 'sh7.jpg', 25),
(56, 'smart mens', 'sh8.jpg', 20),
(57, 'smart mens', 'sh9.jpg', 30),
(58, 'smart mens', 'sh10.jpg', 35),
(59, 'girls special', 'n1.jpg', 67),
(60, 'girls special', 'n2.jpg', 75),
(61, 'girls special', 'n3.jpg', 80),
(62, 'girls special', 'n4.jpg', 85),
(63, 'girls special', 'n5.jpg', 90),
(64, 'girls special', 'n6.jpg', 100),
(65, 'girls special', 'n7.jpg', 85),
(66, 'girls special', 'n8.jpg', 75),
(68, 'comfortable', 'ch1.jpg', 50),
(69, 'comfortable', 'ch2.jpg', 65),
(70, 'comfortable', 'wd1.jpg', 45),
(71, 'comfortable', 'wd2.jpg', 50),
(72, 'comfortable', 'wd3.jpg', 58),
(73, 'comfortable', 'wd4.jpg', 45),
(74, 'comfortable', 'wd5.jpg', 55),
(75, 'comfortable', 'wd6.jpg', 60),
(77, 'smart mens', 'wch1.jpg', 25),
(78, 'smart mens', 'wch2.jpg', 36),
(79, 'smart mens', 'wch3.jpg', 42),
(80, 'smart mens', 'wch4.jpg', 45),
(81, 'smart mens', 'wch5.jpg', 50),
(82, 'smart mens', 'wch6.jpg', 45),
(83, 'smart mens', 'wch7.jpg', 50),
(84, 'smart mens', 'wch8.jpg', 38),
(85, 'smart gentlemen', 'sp1.jpg', 55),
(86, 'smart gentlemen', 'sp2.jpg', 62),
(87, 'smart gentlemen', 'sp3.jpg', 63),
(88, 'smart gentlemen', 'sp4.jpg', 35),
(89, 'smart gentlemen', 'sp5.jpg', 42),
(90, 'smart gentlemen', 'sp6.jpg', 45),
(91, 'smart gentlemen', 'sp7.jpg', 50),
(92, 'smart gentlemen', 'sp8.jpg', 40);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'hashika', '12345', ''),
(2, 'maduranga', 'hashika', '');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `email`, `password`) VALUES
(9, 'maduranga', 'maduranga@gmail.com', 'maduranga'),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
