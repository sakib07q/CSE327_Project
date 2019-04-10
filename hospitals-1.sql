-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 05:09 PM
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
  `address` varchar(100) DEFAULT NULL,
  `area` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `address`, `area`) VALUES
(1, 'banani clinic', 'banani, c block ,rd 2', 'banani'),
(2, 'uttara cresent hospital', 'uttara , d block , road 7\r\n', 'uttara'),
(3, 'Marie stopes maternity clinic', 'boardbazar,gazipur', 'gazipur'),
(4, 'kc hospital', 'uttara, block 3, rd 10', 'uttara'),
(5, 'eye  care hospital', 'uttara , block11, rd 7', 'uttara'),
(6, 'labaid ', 'mirpur 10 ', 'mirpur'),
(7, 'vision physiotherapy center', 'lake road ,dhanmondi', 'dhanmondi'),
(8, 'dhaka monorog clinic ', 'gulshan ,graveyard road', 'gulshan'),
(9, 'dogma hospital ', 'gulshan,baridhara', 'gulshan'),
(10, 'mother care hospital', 'dhanmondi,baridhara', 'dhanmondi'),
(11, 'radda mch fp center', 'mirpur section 14', 'mirpur'),
(12, 'tmss maternity center', 'mirpur, kazipara', 'mirpur'),
(13, 'rahima maaternity clinic', 'mirpur , section 10, road 3', 'mirpur'),
(14, 'ogsb maternity clinic', 'mirpur, zoo raod', 'mirpur'),
(15, 'alok hospital', 'mirpur 1, kollyanpur road', 'mirpur'),
(16, 'national institute of kidney disease', 'shyamoli', 'shyamoli'),
(17, 'mother care hospital', 'lalmatia, mirpur road', 'lalmatia'),
(18, 'doctors clinic and hospital', 'badamtuli,nayabazar', 'nayabazar'),
(19, 'medi plus general hospital', 'fatullah,sonargao', 'sonargao'),
(20, 'icddrb tb screening and treatment center', 'uttara,sector 11, road 10', 'uttara'),
(21, 'medipath hospital and diagnostics', 'telipara,mogorkhal', 'telipara'),
(22, 'nostrum hospital', 'uttara, sector 8 ,rd 7', 'uttara'),
(23, 'lab one hospital', 'west uttara, sector 5', 'uttara'),
(24, 'the chader hashi chinhito paribarik hospital', 'kazibari ,amtola', 'amtola'),
(25, 'sukundir bag mridha community hospital', 'sukundirbag, hydrabad idgah', 'sukundirbag'),
(26, 'apollo hospital', 'bashundhara e block road  plot 81', 'bashundhara'),
(27, 'square hospital', '18/F, Bir Uttam Qazi Nuruzzaman Sarak West, Panthapath, Dhaka 1205\r\n', 'panthapath'),
(28, 'ibn sina hospital', 'dhanmondi , road no 15 a', 'dhanmondi'),
(29, 'popular hospital', 'dhanmondi branch house 16', 'dhanmondi'),
(30, 'birdem hospital', '122 kazi nazrul avenue', 'karwanbazar'),
(31, 'bangladesh ent hospital', 'rapa plaza, 4/1 sobhanbag mirpur raod', 'mirpur'),
(32, 'cmh hospital', 'dhaka 1206', 'banani'),
(33, 'samorita hospital', '89/1 panthapath dhaka 1215', 'panthapath'),
(34, 'dhaka medical college', 'dhaka 1000', 'motijhil');

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
