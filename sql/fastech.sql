-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 04:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastech`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `apt_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(5) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apt_id`, `name`, `phone`, `email`, `address`, `service`, `date`, `time`, `issue`, `ticket`) VALUES
(8, 'Vince John Perez', 9359148135, 'perezvj.main@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Troubleshooting & Networking Installation', '2020-09-24', '08:40:00.00000', 'asdasd', 'Jt2j23mh80HJbw=='),
(10, 'Vince John Perez', 9359148135, 'perezvj.main@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Hardware & Software Repair and Installation', '2020-09-07', '09:28:00.00000', 'asd', 'QDg68C7zxU6UUw=='),
(11, 'Vince John Perez', 9359148135, 'perezvj.main@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Hardware & Software Repair and Installation', '2020-09-09', '10:22:00.00000', 'asdasd', 'k4vwQnzMjEExoQ=='),
(12, 'Vince John Perez', 9359148135, 'perezvj14@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Hardware & Software Repair and Installation', '2020-09-24', '10:41:00.00000', 'asd', '90Q1E9cTDE+uxw==');

-- --------------------------------------------------------

--
-- Table structure for table `registered_accounts`
--

CREATE TABLE `registered_accounts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(35) NOT NULL,
  `phone` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_accounts`
--

INSERT INTO `registered_accounts` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`) VALUES
(46, 'Vince', 'Perez', 'perezvj14@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', 9359148135),
(47, 'Vince', 'Perez', 'vjperez14@yahoo.com', 'ae2b1fca515949e5d54fb22b8ed95575', 9359148135);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`apt_id`);

--
-- Indexes for table `registered_accounts`
--
ALTER TABLE `registered_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `apt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registered_accounts`
--
ALTER TABLE `registered_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
