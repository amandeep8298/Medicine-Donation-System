-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 01:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sing`
--

-- --------------------------------------------------------

--
-- Table structure for table `sing`
--

CREATE TABLE `sing` (
  `sno` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` int(100) NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `Address1` varchar(30) NOT NULL,
  `pin` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dt` datetime NOT NULL,
  `who` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sing`
--

INSERT INTO `sing` (`sno`, `fname`, `mail`, `phone`, `gender`, `city`, `Address1`, `pin`, `password`, `dt`, `who`) VALUES
(50, 'Satyam ', 'vivaswan@gmail.com', 2147483647, 'on', 'Bhopal', 'sistec hostel ', 123456, '789456', '2021-11-20 12:23:24', 'Member'),
(51, 'Anjali ', 'onjali@gmail.com', 2147483647, 'female', 'Bhopal', 'opp bhopal ', 456789, '456321', '2021-11-20 12:24:42', 'gender'),
(52, 'anjali', 'onjali@gmail.com', 2147483647, 'female', 'Bhopal', 'opp bhopal ', 456789, '852369', '2021-11-21 11:46:56', 'member'),
(53, 'amandeep', 'mj0466828@gmail.com', 2147483647, 'female', 'Bhopal', 'mkaj ', 461331, '741258', '2021-11-21 11:53:08', 'member'),
(54, 'aman', 'mj0466828@gmail.com', 1234567890, 'male', 'bhopal', 'Near Sunrays School Harda ', 461331, '123456', '2021-11-21 11:00:51', 'member'),
(55, 'mansik', 'mj0466828@gmail.com', 2147483647, 'female', 'Bhopal', 'mkaj ', 461331, '123456', '2021-11-21 15:33:56', 'ngo'),
(56, 'aman deep', 'onjali@gmail.com', 2147483647, 'on', 'Bhopal', 'opp bhopal ', 456789, '123456', '2021-11-21 15:40:27', 'Member'),
(57, 'aman deep', 'onjali@gmail.com', 2147483647, 'on', 'Bhopal', 'opp bhopal ', 456789, '123456', '2021-11-21 15:47:03', 'Member'),
(58, 'aman deep', 'onjali@gmail.com', 2147483647, 'on', 'Bhopal', 'opp bhopal ', 456789, '123456', '2021-11-21 15:47:07', 'Member'),
(59, 'aman deep', 'shreejajoshi29@gmail.com', 2147483647, 'on', 'Bhopal', 'jkih ', 456123, '123456', '2021-11-21 15:48:02', 'Member'),
(60, 'aman deep', 'shreejajoshi29@gmail.com', 2147483647, 'on', 'Bhopal', 'jkih ', 456123, '123456', '2021-11-21 15:48:50', 'Member'),
(61, 'onjala', 'onjali@gmail.com', 2147483647, 'on', 'Bhopal', 'opp bhopal ', 456789, '741258', '2021-11-21 15:49:17', 'Member'),
(62, 'onjala', 'onjali@gmail.com', 2147483647, 'on', 'Bhopal', 'opp bhopal ', 456789, '741258', '2021-11-21 15:50:20', 'Member'),
(63, 'lhnflcv', 'onjali@gmail.com', 2147483647, 'female', 'Bhopal', 'opp bhopal ', 123456, '852963', '2021-11-21 15:59:30', 'member'),
(64, 'shree', 'sh@gmail.com', 1526349887, 'female', 'Bhopal', 'bhopal ', 461331, '123456', '2021-11-24 08:03:40', 'gender'),
(65, 'shreeeeeee', 'sh@gmail.com', 1526349887, 'on', 'Bhopal', 'indore ', 461331, '456789', '2021-11-24 08:08:44', 'Member'),
(66, 'kavi', 'sh@gmail.com', 1526349887, 'female', 'Bhopal', 'indore ', 461331, '789654', '2021-11-24 08:10:09', 'ngo'),
(67, 'kavi', 'sh@gmail.com', 1526349887, 'female', 'Bhopal', 'indore ', 461331, '789456', '2021-11-24 08:10:27', 'ngo'),
(68, 'kavi', 'sh@gmail.com', 1526349887, 'female', 'Bhopal', 'indore ', 461331, '789456', '2021-11-24 08:12:52', 'ngo'),
(69, 'sotyam', 'sh@gmail.com', 1526349887, 'female', 'Bhopal', 'bhopal ', 461331, '741852', '2021-11-24 13:11:15', 'ngo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sing`
--
ALTER TABLE `sing`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sing`
--
ALTER TABLE `sing`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
