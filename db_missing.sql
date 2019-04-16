-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 06:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_missing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mfi`
--

CREATE TABLE `tbl_mfi` (
  `mid` int(11) UNSIGNED NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `ddate` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `lastplace` varchar(150) DEFAULT NULL,
  `contact_add` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mphone` varchar(20) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mfi`
--

INSERT INTO `tbl_mfi` (`mid`, `mname`, `ddate`, `status`, `description`, `lastplace`, `contact_add`, `img`, `mphone`, `id`) VALUES
(1, 'certificate', '2018-12-19', 'Missing', 'i have lost my certificate', 'Dhanmondi', 'Dhanmondi', 'image/download.jpg', '01813748923', 0),
(2, 'certificate', '2018-12-13', 'Found', 'i have lost my passport', 'mirpur', 'sagardari', 'image/download1.jpg', '01813748923', 3),
(3, 'nid', '2018-11-29', 'Found', 'Nid card found last days', 'mohammadpur', 'mohammadpur', 'image/79b7c96a19d60a1c41fcf0ea40c8e363.jpg', '018233413748', 3),
(4, 'Mobile Phone', '2018-12-05', 'Missing', 'i have lost my mobile phone', 'khulna', 'jessore', 'image/1543224040.jpeg', '019878263111', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msg`
--

CREATE TABLE `tbl_msg` (
  `id` int(11) NOT NULL,
  `rgs_id` int(11) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `cAddress` varchar(255) NOT NULL,
  `cMessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_msg`
--

INSERT INTO `tbl_msg` (`id`, `rgs_id`, `contactEmail`, `cAddress`, `cMessage`) VALUES
(1, 4, 'contactEmail', 'cAddress', 'cMessage'),
(2, 4, 'coffe@gmail.com', '454dsfsf', 'sdgsf'),
(3, 4, '2342@gmail.com', '234', 'aswdf'),
(4, 3, 'mohammadmasud34@gmail.com', 'meherpur', 'i have got your Product'),
(5, 4, 'coffe@gmail.com', 'uiyiiui', 'iojipopo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rgs`
--

CREATE TABLE `tbl_rgs` (
  `id` int(11) UNSIGNED NOT NULL,
  `rname` varchar(50) DEFAULT NULL,
  `rpsw` varchar(20) DEFAULT NULL,
  `remail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rgs`
--

INSERT INTO `tbl_rgs` (`id`, `rname`, `rpsw`, `remail`) VALUES
(1, 'kisan', '81dc9bdb52d04dc20036', 'kisan@gmail.com'),
(2, 'Shuvo', '202cb962ac59075b964b', 'mohammadmasud34@gmail.com'),
(3, 'masud', '81dc9bdb52d04dc20036', 'masud@gmail.com'),
(4, 'Shuvo', 'd41d8cd98f00b204e980', 'mohammadshuvo205@gmail.com'),
(5, 'Shuvo', 'd41d8cd98f00b204e980', 'mohammadmasud2055@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mfi`
--
ALTER TABLE `tbl_mfi`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rgs`
--
ALTER TABLE `tbl_rgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mfi`
--
ALTER TABLE `tbl_mfi`
  MODIFY `mid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rgs`
--
ALTER TABLE `tbl_rgs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
