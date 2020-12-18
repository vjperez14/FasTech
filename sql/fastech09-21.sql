-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2020 at 05:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
  `requestee` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  `issue` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apt_id`, `requestee`, `name`, `phone`, `email`, `address`, `service`, `date`, `time`, `issue`, `ticket`) VALUES
(8, NULL, 'Vince John Perez', 9359148135, 'perezvj.main@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Troubleshooting & Networking Installation', '2020-09-24', '08:40:00.00000', 'asdasd', 'Jt2j23mh80HJbw=='),
(10, NULL, 'Vince John Perez', 9359148135, 'perezvj.main@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Hardware & Software Repair and Installation', '2020-09-07', '09:28:00.00000', 'asd', 'QDg68C7zxU6UUw=='),
(11, NULL, 'Vince John Perez', 9359148135, 'perezvj.main@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Hardware & Software Repair and Installation', '2020-09-09', '10:22:00.00000', 'asdasd', 'k4vwQnzMjEExoQ=='),
(12, NULL, 'Vince John Perez', 9359148135, 'perezvj14@gmail.com', 'Unit 5315 Flora Vista Peacock St.', 'Hardware & Software Repair and Installation', '2020-09-24', '10:41:00.00000', 'asd', '90Q1E9cTDE+uxw=='),
(13, NULL, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', '17 c Daffodil stweet', 'Hardware & Software Repair and Installation', '2020-09-22', '4:44 PM', 'eksdi', '6TCfMSeeRDowxQ=='),
(14, NULL, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'dasfasf', 'Hardware & Software Repair and Installation', '2020-09-28', '8:12 PM', 'asgag', 'Bg7qEs+D7yXEvQ=='),
(15, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'xdjfhxcf', 'Troubleshooting & Networking Installation', '2020-09-22', '9:48 PM', 'shrsdh', 'THtXKj7i4qCG1w=='),
(21, 48, '5rsedfg sgdsdhsd', 9123456786, 'qaz@gmail.com', 'xdfhxfxfb', 'Troubleshooting & Networking Installation', '2020-09-30', '10:07 PM', 'tasete', 'kV2Lb4tzwfX3CQ=='),
(22, 48, '5rsedfg sgdsdhsd', 91234567898, 'qaz@gmail.com', 'qwrafssag', 'Troubleshooting & Networking Installation', '2020-09-29', '10:09 PM', 'http://localhost/latest/images/2.png', 'QtRncBmdLwrlXg=='),
(23, 48, '5rsedfg sgdsdhsd', 9123456789, 'qaz@gmail.com', 'asfasf', 'Troubleshooting & Networking Installation', '2020-09-21', '10:11 PM', 'http://localhost/latest/images/2.pnggas', 'p0w83504vehFiA=='),
(24, 48, '5rsedfg sgdsdhsd', 9123456789, 'qaz@gmail.com', 'qwrrqwr', 'Hardware & Software Repair and Installation', '2020-09-29', '10:12 PM', 'afssgasga', 'mBj2H2JNscWzSQ=='),
(25, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'savdsdv', 'Troubleshooting & Networking Installation', '2020-09-01', '10:28 PM', 'asfsfaasf', 'ED0IVXxl030f3Q=='),
(26, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'wdasda', 'Virus and Malware Removal', '2020-09-28', '10:38 PM', 'asdasd', '8sBTQKZm2FD37w=='),
(27, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'dDC7O/RbpPDdsw=='),
(28, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'PX3FvuZyWNUtgg=='),
(29, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'YH/DHczQnSrUSA=='),
(30, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'ycJ1CXeSiavcBQ=='),
(31, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'c0NS1jg6/fNBhg=='),
(32, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'la/186OVy683qA=='),
(33, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'DJsLpcw2N1j1TA=='),
(34, 48, 'John Micko  Rapanot', 9123456789, 'qwer1234@gmail.com', 'qwrqwrqwr', 'Troubleshooting & Networking Installation', '2020-09-29', '10:41 PM', 'qwrqwr', 'w9SnJTouzPGp3Q=='),
(35, 48, 'John Micko  Rapanot', 9123456798, 'qwer1234@gmail.com', 'agsgasgas', 'Troubleshooting & Networking Installation', '2020-09-28', '11:00 PM', 'asgasg', 'TTXUbQVhVzVyEA==');

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
(47, 'Vince', 'Perez', 'vjperez14@yahoo.com', 'ae2b1fca515949e5d54fb22b8ed95575', 9359148135),
(48, 'John Micko ', 'Rapanot', 'qwer1234@gmail.com', '5d93ceb70e2bf5daa84ec3d0cd2c731a', 9123456789),
(49, '5rsedfg', 'sgdsdhsd', 'qaz@gmail.com', '962012d09b8170d912f0669f6d7d9d07', 9123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`apt_id`),
  ADD KEY `FK_id` (`requestee`);

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
  MODIFY `apt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `registered_accounts`
--
ALTER TABLE `registered_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `FK_id` FOREIGN KEY (`requestee`) REFERENCES `registered_accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
