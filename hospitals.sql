-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 08:01 PM
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
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `address`) VALUES
(1, 'banani clinic', 'banani, c block ,rd 2'),
(2, 'uttara cresent hospital', 'uttara , d block , road 7\r\n'),
(3, 'Marie stopes maternity clinic', 'boardbazar,gazipur'),
(4, 'kc hospital', 'uttara, block 3, rd 10'),
(5, 'eye  care hospital', 'uttara , block11, rd 7'),
(6, 'labaid ', 'mirpur 10 '),
(7, 'vision physiotherapy center', 'lake road ,dhanmondi'),
(8, 'dhaka monorog clinic ', 'gulshan ,graveyard road'),
(9, 'dogma hospital ', 'gulshan,baridhara'),
(10, 'mother care hospital', 'dhanmondi,baridhara'),
(11, 'radda mch fp center', 'mirpur section 14'),
(12, 'tmss maternity center', 'mirpur, kazipara'),
(13, 'rahima maaternity clinic', 'mirpur , section 10, road 3'),
(14, 'ogsb maternity clinic', 'mirpur, zoo raod'),
(15, 'alok hospital', 'mirpur 1, kollyanpur road'),
(16, 'national institute of kidney disease', 'shyamoli'),
(17, 'mother care hospital', 'lalmatia, mirpur road'),
(18, 'doctors clinic and hospital', 'badamtuli,nayabazar'),
(19, 'medi plus general hospital', 'fatullah,sonargao'),
(20, 'icddrb tb screening and treatment center', 'uttara,sector 11, road 10'),
(21, 'medipath hospital and diagnostics', 'telipara,mogorkhal'),
(22, 'nostrum hospital', 'uttara, sector 8 ,rd 7'),
(23, 'lab one hospital', 'west uttara, sector 5'),
(24, 'the chader hashi chinhito paribarik hospital', 'kazibari ,amtola'),
(25, 'sukundir bag mridha community hospital', 'sukundirbag, hydrabad idgah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
