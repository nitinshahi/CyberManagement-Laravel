-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 03:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybercare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `Email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_computers`
--

CREATE TABLE `tbl_computers` (
  `id` int(11) NOT NULL,
  `computername` varchar(30) NOT NULL,
  `computerlocation` varchar(30) NOT NULL,
  `entrydate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_computers`
--

INSERT INTO `tbl_computers` (`id`, `computername`, `computerlocation`, `entrydate`) VALUES
(1, 'DELL', 'cabin101', '2021-03-25 00:59:44'),
(2, 'ASUS', 'cabin102', '2021-03-25 01:24:53'),
(3, 'LENEVO', 'cabin103', '2021-03-25 01:25:26'),
(4, 'RAZOR', 'cabin104', '2021-03-25 04:30:24'),
(5, 'HP', 'cabin105', '2021-03-25 06:02:08'),
(6, 'ACER', 'cabin106', '2021-03-25 06:19:20'),
(7, 'msi', 'cabin107', '2021-03-25 06:31:51'),
(8, 'desktop', 'cabin107', '2021-03-25 06:35:38'),
(9, 'ACER', 'cabin106', '2021-03-25 06:41:48'),
(10, 'desktop', 'cabin100', '2021-03-25 09:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `useraddress` varchar(200) NOT NULL,
  `mobilenumber` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `computername` varchar(120) NOT NULL,
  `intime` timestamp NOT NULL DEFAULT current_timestamp(),
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `fees` int(11) DEFAULT NULL,
  `remarks` varchar(120) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `useraddress`, `mobilenumber`, `email`, `computername`, `intime`, `outtime`, `fees`, `remarks`, `status`) VALUES
(1, 'nitin', 'ktm', 9810293291, 'nitin@gmail.com', 'DELL', '2021-03-25 01:14:43', NULL, 0, NULL, '1'),
(2, 'pranil', 'tamchepakha', 9810293845, 'pranil@gmail.com', 'ASus', '2021-03-25 01:29:33', '2021-03-25 06:17:14', 10, 'ok', '1'),
(3, 'Ram', 'dallu', 9874152369, 'ram789@gmail.com', 'DELL', '2021-03-25 06:10:28', '2021-03-25 06:17:26', NULL, NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_computers`
--
ALTER TABLE `tbl_computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_computers`
--
ALTER TABLE `tbl_computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
