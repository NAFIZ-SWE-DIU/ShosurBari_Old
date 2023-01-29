-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 11:44 AM
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
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `profilecreatedby` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `education_sub` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `body_type` text NOT NULL,
  `physical_status` text NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` text NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` text NOT NULL,
  `occupation_descr` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `fathers_occupation` varchar(20) NOT NULL,
  `mothers_occupation` varchar(20) NOT NULL,
  `no_bro` int(5) NOT NULL,
  `no_sis` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `email`, `age`, `height`, `sex`, `religion`, `caste`, `subcaste`, `district`, `state`, `country`, `maritalstatus`, `profilecreatedby`, `education`, `education_sub`, `firstname`, `lastname`, `body_type`, `physical_status`, `drink`, `mothertounge`, `colour`, `weight`, `blood_group`, `diet`, `smoke`, `dateofbirth`, `occupation`, `occupation_descr`, `annual_income`, `fathers_occupation`, `mothers_occupation`, `no_bro`, `no_sis`, `aboutme`, `profilecreationdate`) VALUES
(116, 15, 'Nafizulislam.swe@gmail.com', '22', 56, 'Male', 'Muslim', 'Roman Cathaolic', 'Not Applicable', 'Trivandrum', 'Kerala', 'China', 'Single', 'Self', 'Primary', 'abcd', 'nafiz', 'noyon', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 68, 'AB -v', 'Non Veg', 'No', '1983-05-09', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', 5, 3, 'abcd abcd abcd abcd abcd bg jyy tyy  lirsnm  kjhhdfx', '2023-01-26'),
(117, 16, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '2023-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `partnerprefs`
--

CREATE TABLE `partnerprefs` (
  `id` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `agemin` varchar(3) NOT NULL,
  `agemax` int(3) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `partnerprefs`
--

INSERT INTO `partnerprefs` (`id`, `custId`, `agemin`, `agemax`, `maritalstatus`, `complexion`, `height`, `diet`, `religion`, `caste`, `subcaste`, `mothertounge`, `education`, `occupation`, `country`, `descr`) VALUES
(6, 15, '20', 28, 'Single', '', 54, 'Veg', 'Muslim', 'Thiyya', '', '', 'Degree', 'any', 'Christian', 'amon hote hobe'),
(7, 16, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `pic1` varchar(25) NOT NULL,
  `pic2` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `cust_id`, `pic1`, `pic2`) VALUES
(32, 15, 'nafiz1.png', 'nafiz2.png'),
(33, 16, '4co57dtwk64fb7lv.jpg', 'gd1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `profilestat` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilestat`, `username`, `password`, `email`, `userlevel`) VALUES
(15, 1, 'nafiz', 'nafiz', 'nafiz@gmail.com', 0),
(16, 1, 'noyon', 'noyonnoyon', 'noyon@gmail.com', 1),
(17, 0, '', '', '', 0),
(20, 0, 'nayemnoyon', 'nayemnoyon', 'nayemnoyon@gmail.com', 0),
(22, 0, 'habibhabiba', 'habibhabiba@gmail.com', 'habibhabiba', 0),
(25, 0, 'nafiz12345', 'nafiz12345', 'nafiz12345@gmail.com', 0),
(26, 0, 'nafiz123', 'nafiz123', 'nafiz123@gmail.com', 0),
(33, 0, 'nayemaive', 'nayemaive', 'nayemaive@gmail.com', 0),
(34, 0, 'nayemzim1', 'nayemzim1', 'nayemzim1@gmail.com', 0),
(38, 0, 'noyon098', 'noyon098', 'noyon098@gmail.com', 0),
(39, 0, 'noyontest', 'noyontest', 'noyontest@gmai.com', 0),
(41, 0, 'nayem09870', 'nayem09870', 'nayem09870@gmail.com', 0),
(46, 0, 'test12', 'test12', 'test12@gmail.com', 0),
(49, 0, 'dadadadi', 'dadadadi', 'dadadadi@gmail.com', 0),
(50, 0, 'test0000', 'test0000', 'test0000@gmail.com', 0),
(51, 0, 'nananani', 'nananani', 'nananani@gmail.com', 0),
(54, 0, 'nnnnnn', 'nnnnnn', 'nnnnnn', 0),
(56, 0, 'oooo', 'oooo', 'oooo@', 0),
(58, 0, 'llll', 'llll', 'llll', 0),
(61, 0, 'kmkm', 'kmkm', 'kmkm', 0),
(64, 0, 'pppp', 'pppp', 'pppp', 0),
(65, 0, 'bbbb', 'bbbb', 'bbbb', 0),
(67, 0, 'nayemmm', 'nayemmm', 'nayemmm', 0),
(69, 0, 'babama', 'babama', 'babama@gmail.com', 0),
(71, 0, 'nahid', 'nahid', 'nahid@gmail.com', 0),
(77, 0, 'sakib', 'sakib', 'sakib@gmail.com', 0),
(78, 0, 'nadim', 'nadim', 'nadim@gmail.com', 0),
(80, 0, 'nasa', 'nasa', 'nasa@gmail.com', 0),
(81, 0, 'mama', 'mama', 'mama@gmail.com', 0),
(82, 0, 'mami', 'mami', 'mami@gmail.com', 0),
(84, 0, 'mamoni', 'mamoni', 'mamoni@gmail.com', 0),
(89, 1, 'mamama', 'mamama', 'mamama', 1),
(91, 0, 'sadmanaziz', 'sadmanaziz', 'sadmanaziz@gmail.com', 0),
(93, 0, 'sadmanaziz123', 'sadmanaziz123', 'sadmanaziz123@gmail.com', 0),
(95, 0, 'sadmanaziz1230', 'sadmanaziz1230', 'sadmanaziz1230@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custId` (`custId`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
