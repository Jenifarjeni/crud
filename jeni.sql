-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 11:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `FirstName`, `MobileNumber`, `Email`, `Address`, `ProfilePic`, `CreationDate`) VALUES
(42, 'gtr', 7776543212, 'daes@gma', '2/357 Karadichithur (soosai Nagar) Kallakurichi\r\nKallakurichi Dt, chinnaselam TK\r\n606207', '1654605610.jpg', '2022-06-07 12:40:10'),
(43, 'gtr', 7776543212, 'daes@gmai', '2/357 Karadichithur (soosai Nagar) Kallakurichi\r\nKallakurichi Dt, chinnaselam TK\r\n606207', '1654604092.jpg', '2022-06-07 12:42:45'),
(44, 'Anu', 8270669338, 'jenifarjeni12032002@gmail.com', '2/357 Karadichithur (soosai Nagar) Kallakurichi\r\nKallakurichi Dt, chinnaselam TK\r\n606207', '1654604444.jpg', '2022-06-07 12:20:44'),
(45, 'raj', 8270669338, 'jenifarjeni12032002@gmail.com', '2/357 Karadichithur (soosai Nagar) Kallakurichi\r\nKallakurichi Dt, chinnaselam TK\r\n606207', '1654604480.jpg', '2022-06-07 12:21:20'),
(46, 'raj', 8270669338, 'jenifarjeni12032002@gmail.com', '2/357 Karadichithur (soosai Nagar) Kallakurichi\r\nKallakurichi Dt, chinnaselam TK\r\n606207', '1654604488.jpg', '2022-06-07 12:21:28'),
(47, 'leo', 8270669338, 'jenifarjeni12032002@gmail.com', '2/357 Karadichithur (soosai Nagar) Kallakurichi\r\nKallakurichi Dt, chinnaselam TK\r\n606207', '1654605173.jpg', '2022-06-07 12:32:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
