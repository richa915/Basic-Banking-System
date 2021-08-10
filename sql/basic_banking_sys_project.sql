-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 04:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic banking sys project`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `balance`, `phone`, `address`) VALUES
(1, 'Ankush', 290, 9800924557, 'MG Road, Bhopal'),
(2, 'Vani', 1675, 9444924557, 'AB Road, Delhi'),
(3, 'Drishti', 2205, 8876560012, 'Z Building, Mumbai'),
(4, 'Vivaan', 640, 9007651128, 'Q Building, Gurugram'),
(5, 'Shalini', 1150, 7776560012, 'M Building, Pune'),
(6, 'Ravi', 785, 8507651128, 'CP Road, Indore'),
(7, 'Mansi', 720, 7897756012, 'Ring Road, Nagpur'),
(8, 'Saurav', 1140, 8665098126, 'Salt Lake, Kolkata'),
(9, 'Chetna', 920, 9677876542, 'PQ Building, Ahmednagar'),
(10, 'Joseph', 670, 8899709543, 'Wadala, Nashik'),
(11, 'Shaili', 1000, 9987600987, 'GP Road, Mumbai'),
(12, 'Mahesh', 650, 987660987, 'Gangapur Road, Pune'),
(13, 'Meena', 875, 8997678907, 'QA Building, Gangtok');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sno` int(11) NOT NULL,
  `from_acc` varchar(25) NOT NULL,
  `to_acc` varchar(25) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `date_time` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sno`, `from_acc`, `to_acc`, `amount`, `date_time`) VALUES
(6, 'Vani', 'Ankush', 100, '2021-08-10 01:47:10'),
(7, 'Shalini', 'Ravi', 120, '2021-08-10 01:49:24'),
(8, 'Ankush', 'Saurav', 290, '2021-08-10 02:13:23'),
(9, 'Chetna', 'Joseph', 200, '2021-08-10 15:35:31'),
(10, 'Ankush', 'Vani', 500, '2021-08-10 16:17:40'),
(11, 'Ankush', 'Drishti', 900, '2021-08-10 16:35:38'),
(12, 'Drishti', 'Vani', 300, '2021-08-10 16:43:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
