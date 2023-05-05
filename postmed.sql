-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 09:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `postmed`
--

CREATE TABLE `postmed` (
  `Sno.` int(90) NOT NULL,
  `fname` varchar(34) NOT NULL,
  `medname` varchar(90) NOT NULL,
  `medcomp` varchar(90) NOT NULL,
  `meduse` varchar(100) NOT NULL,
  `city` varchar(56) NOT NULL,
  `pin` int(11) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postmed`
--

INSERT INTO `postmed` (`Sno.`, `fname`, `medname`, `medcomp`, `meduse`, `city`, `pin`, `dt`) VALUES
(1, '', 'manskk', 'fv', 'grw ', 'fvev', 461221, '2023-04-08 10:53:22'),
(2, 'Mansi', 'paracetamol', 'xyz20-23', 'fever', 'BHOPAL', 461331, '2023-04-08 14:33:18'),
(3, 'Satyam ', 'davai', 'xyz20-23', 'lelo', 'BHOPAL', 461331, '2023-04-08 14:47:43'),
(4, 'Mansi', 'davai', 'vgvj', 'fever', 'BHOPAL', 461331, '2023-04-08 14:58:04'),
(5, 'Amandeep', 'paracetamol', 'vgvj', 'fever', 'BHOPAL', 461331, '2023-04-10 00:12:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postmed`
--
ALTER TABLE `postmed`
  ADD PRIMARY KEY (`Sno.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postmed`
--
ALTER TABLE `postmed`
  MODIFY `Sno.` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
