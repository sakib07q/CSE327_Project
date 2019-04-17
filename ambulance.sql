-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 08:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `charges` varchar(30) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `Name`, `contact`, `charges`, `images`) VALUES
(1, 'Apollo Hospitals Dhaka\r\n', '+8801714-090000', '500', 'images/ApolloHospitalAmbu_zps95879c9e.jpg'),
(2, 'Apanjon Ambulance Service\r\n', '9125420', '500', 'images/download.jpg'),
(3, 'Alif Ambulance\r\n', '8117576', '500', 'images/Alif-Ambulance-Service-400x280.jpg'),
(4, 'Ad-Din Hospital\r\n', '+880-2- 9362929\r\n', '350', 'images/ambulance.jpg'),
(5, 'Anju-Man-E-Mufidul Islam\r\n', '+880-2-9336611', '500', 'images/15_photo_47406.jpg'),
(6, 'Bangabondhu Sheikh Mujib Medical University (BSMMU) (PG Hospital)', '+880-2-8614001-5', '500', 'images/bsmmu.png'),
(7, 'Bangladesh Medical College Hospital\r\n', '+880-2-9118202', '500', 'images/bangmed.jpg'),
(8, 'CMH (Dhaka)\r\n', '+880-2-8822779\r\n\r\n', '500', 'images/cmh.png'),
(9, 'Dhaka Eye Hospital\r\n', '+880-2-8014476', '500', 'images/eye.jpg'),
(10, 'Dhaka Medical College Hospital', '+880-2-9669340\r\n\r\n', '500', 'images/dhamek.jpg'),
(11, 'Fire Brigade Ambulance Service\r\n', '+880-2-9553333-7', '500', 'images/fire_service.jpg'),
(12, 'Heart Hospital', '+880-2-9803302', '500', 'images/heart.png'),
(13, 'Life Line Healthcare Limited\r\n', '+8801199-899919', '350', 'images/lifeline.jpg'),
(14, 'Green Ambulance Service', '8612412', '500', 'images/green.jpg'),
(15, 'Rafa Ambulance Service\r\n', '9110663', '500', 'images/rafa.jpg'),
(16, 'BIRDEM\r\n', '9661551-60', '500', 'images/BIRDEM-General-Hospital-3rd-slide.jpg'),
(17, 'Dhaka City Corporation (Mirpur Control Room)\r\n', '9004734', '500', 'images/dcc.jpg'),
(18, 'Shahid Suhrawardi Hospital, Ambulance Service\r\n', '9130800', '500', 'images/sohra.jpg'),
(19, 'Shishu Hospital, Ambulance Service\r\n', '8116061-2', '500', 'images/Dhaka Shishu (Child) Hospital.jpg'),
(20, 'Square Hospital\r\n', '+880-2-8144466', '500', 'images/square.jpg'),
(21, 'labaid', '0171330088', '400', 'images/labaid.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
