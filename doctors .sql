-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 12:22 PM
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
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `field` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `chamber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `field`, `name`, `qualification`, `chamber`) VALUES
(1, 'general', 'Dr M ali', '	\r\nArthroscopy & Arthroplasty Surgeon\r\nMBBS', 'apollo hospital'),
(2, 'general', 'Dr nanda kumar katak', 'MBBS, MS (Orthopaedics), SICOT Diploma', 'apollo hospital'),
(3, 'general', 'Dr. amit kapoor', 'MBBS, D. Ortho, DNB\r\nConsultant', 'apollo hospital'),
(4, 'general', 'Dr. O.F.G kibria', 'MBBS, MS (Ortho.)\r\nConsultant – Orthopaedics', 'apollo hospital'),
(5, 'heart ', 'Dr. Shams munwar', 'MBBS, MRCP (UK), D.Card. (London)\r\nSenior Consultant', 'apollo hospital'),
(6, 'Gyne', 'Dr. Gulshan ara', 'MBBS, MCPS, MS (Obs./Gynae.)\r\nConsultant', 'apollo hospital'),
(7, 'general', 'Dr. N. A. Kamrul Ahs', 'MBBS, MS(london)', 'bangladesh shishu hospital'),
(8, 'Hematology', '	Professor Dr. A. B.', 'MBBS (India), MPhil Path (Hons), FCPS (Hematology)', 'Green View Clinic'),
(9, 'Psychiatry', 'Professor Dr. A.A. Q', 'MBBS, PGT ( USA )', 'MUKTI ( Manashik & Madakashakti Niramoy Kendra Ltd. )'),
(10, 'Urology', 'Professor Dr. A.K.M.', 'MBBS, FCPS, FRCS, FICS', 'Care Hospital ( BD ) Ltd.'),
(11, 'General Surgeon', 'Professor Dr. ( Brig', 'MBBS, FCPS ( Surgery )', 'Ibn Sina Diagnostic & Imaging Center'),
(12, 'Skin ', 'Professor Dr. Siraju', 'MBBS, DDSC(UK)', 'Rainbow Heart Consultation Center'),
(13, 'Medicine', 'Professor Dr. (Rtd) ', 'MBBS, MRCP(U.K), FRCP, FACP(USA)', 'Monowara Hospital (pvt) Ltd'),
(14, 'Child-Pediatric', 'Dr. A B M Shahidul A', '	MBBS, MCPS, DCH, FCPS', 'Central Hospital Limited'),
(15, 'Surgical Oncology', 'Dr. A F M Anowar Hos', 'MBBS, FCPS, MS', 'Ibn Sina Diagnostic & Imaging Center'),
(16, 'Liver ', 'Dr. A H M Rowshon', 'MBBS, FCPS (Med.), MD(Gastro)', '	Popular Diagnostic Centre Ltd - Dhanmondi Branch'),
(17, 'Thyroid', 'Dr. A H M Shahidul I', 'MBBS, MD', 'Thyroid Clinic'),
(18, 'Cancer', 'Dr. A K M Hamidur Ra', 'MBBS, DMRT', 'Ibn Sina Diagnostic & Imaging Center\r\n'),
(19, 'Medicine', 'Dr. A K M Motiur Rah', 'MBBS, MPH, MD\r\n', 'Popular Diagnostic Centre Ltd - Dhanmondi Br'),
(20, 'Skin ', 'Profesosr Dr. A Masu', 'MBBS, DDV, DD, MS', 'Comfort Diagnostic Centre '),
(21, 'Medicine', 'Dr. A, B, Siddiq', 'MBBS, MD(Internal Medicine)', 'Saic Digital Diagnostic Lab'),
(22, 'Orthopaedic', 'Dr. A. B. M.Ruhul Am', 'MBBS, BCS, D-Ortho.', 'Medison Diagnostic Center\r\n'),
(23, 'General', 'Professor Dr. A. A. ', 'MBBS, FCPS (Surgery), FICS, WHO-Fellow (Japan)', '	Comfort Diagnostic Ce');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
