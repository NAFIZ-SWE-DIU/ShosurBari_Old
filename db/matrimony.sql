-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 10:28 PM
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
-- Table structure for table `1bd_personal_physical`
--

CREATE TABLE `1bd_personal_physical` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `biodatagender` varchar(100) NOT NULL,
  `dateofbirth` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `physicalstatus` varchar(100) NOT NULL,
  `Skin_tones` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `1bd_personal_physical`
--

INSERT INTO `1bd_personal_physical` (`id`, `user_id`, `biodatagender`, `dateofbirth`, `height`, `weight`, `physicalstatus`, `Skin_tones`, `bloodgroup`, `profilecreationdate`) VALUES
(10, '15', '', '3-01-1997', '73 nay', '73 nay', '', 'Normal', 'A-', '2023-02-03'),
(19, '16', 'Male', '16-05-1992', 'update', 'update', 'No Problem', 'Fair', 'B-', '2023-02-08'),
(74, '81', 'Male', '17-11-1995', '99', 'kk', 'Blind', 'Fair', 'A-', '2023-02-10'),
(77, '71', 'Female', '4-05-1992', 'address updt', 'address updt', 'No Problem', 'Light', 'AB-', '2023-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `2bd_personal_lifestyle`
--

CREATE TABLE `2bd_personal_lifestyle` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `maritalstatus` varchar(100) NOT NULL,
  `smoke` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `occupation_describe` text NOT NULL,
  `dress_code` text NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2bd_personal_lifestyle`
--

INSERT INTO `2bd_personal_lifestyle` (`id`, `user_id`, `maritalstatus`, `smoke`, `occupation`, `occupation_describe`, `dress_code`, `aboutme`, `profilecreationdate`) VALUES
(11, 15, '', '', '72 nay', '72 nay', '72 nay', '72 nay', '2023-02-03'),
(19, 16, 'Divorced', 'No', 'update', '3rd 16 update', '3rd 16 update', 'hobe ki', '2023-02-08'),
(74, 81, 'Divorced', 'No', 'mama', 'mama', 'mama', 'mama', '2023-02-10'),
(77, 71, 'Divorced', 'No', 'engrstd', 'address updt', 'address updt', 'address updt', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `3bd_educational_qualifications`
--

CREATE TABLE `3bd_educational_qualifications` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `education_method` varchar(100) NOT NULL,
  `sscpassyear` varchar(10) NOT NULL,
  `current_education` varchar(500) NOT NULL,
  `maximum_education` varchar(500) NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `3bd_educational_qualifications`
--

INSERT INTO `3bd_educational_qualifications` (`id`, `user_id`, `education_method`, `sscpassyear`, `current_education`, `maximum_education`, `profilecreationdate`) VALUES
(11, 15, '', '', '72 nay', '72 nay', '2023-02-03'),
(19, 16, 'Technical', '2014', 'hobe ki', 'hobe ki', '2023-02-08'),
(74, 81, 'Genaral', '2014', 'mama', 'mama', '2023-02-10'),
(79, 71, 'Qawmimadrasa', '2014', 'address updt', 'address updt', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `4bd_address_details`
--

CREATE TABLE `4bd_address_details` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `permanent_division` varchar(100) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `childhood` varchar(200) NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `4bd_address_details`
--

INSERT INTO `4bd_address_details` (`id`, `user_id`, `permanent_division`, `present_address`, `permanent_address`, `childhood`, `profilecreationdate`) VALUES
(11, 15, '', '72 nay', '72 nay', '72 nay', '2023-02-03'),
(19, 16, 'Rusia', '3rd 16 update', '3rd 16 update', 'hobe ki', '2023-02-08'),
(74, 81, 'Korea', 'mama', 'mama', 'mama', '2023-02-10'),
(77, 71, 'Rajshahi', 'address updt', 'Natore', 'address updt', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `5bd_family_information`
--

CREATE TABLE `5bd_family_information` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `father_alive` varchar(200) NOT NULL,
  `fatheroccupation` varchar(200) NOT NULL,
  `mother_alive` varchar(200) NOT NULL,
  `motheroccupation` varchar(200) NOT NULL,
  `brosis_number` varchar(200) NOT NULL,
  `brosis_info` text NOT NULL,
  `uncle_profession` text NOT NULL,
  `family_class` varchar(100) NOT NULL,
  `financial_condition` text NOT NULL,
  `family_religious` text NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `5bd_family_information`
--

INSERT INTO `5bd_family_information` (`id`, `user_id`, `father_alive`, `fatheroccupation`, `mother_alive`, `motheroccupation`, `brosis_number`, `brosis_info`, `uncle_profession`, `family_class`, `financial_condition`, `family_religious`, `profilecreationdate`) VALUES
(11, 15, '72 nay', '72 nay', '72 nay', '72 nay', '72 nay', '72 nay', '72 nay', '', '72 nay', '72 nay', '2023-02-03'),
(19, 16, 'hobe ki', 'hobe ki', 'hobe ki', 'hobe ki', 'hobe ki', 'hobe ki', 'hobe ki', 'Average', 'hobe ki', 'hobe ki', '2023-02-08'),
(74, 81, 'mama', 'mama', 'mama', 'mama', 'mama', 'vmama', 'mama', 'Fat', 'mama', 'mama', '2023-02-10'),
(77, 71, 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'Fat', 'address updt', 'address updt', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `6bd_marriage_related_qs_male`
--

CREATE TABLE `6bd_marriage_related_qs_male` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `guardians_agree_male` varchar(100) NOT NULL,
  `allowstudy_aftermarriage` varchar(200) NOT NULL,
  `allowjob_aftermarriage` varchar(200) NOT NULL,
  `livewife_aftermarriage` varchar(200) NOT NULL,
  `profileby_male` varchar(100) NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `6bd_marriage_related_qs_male`
--

INSERT INTO `6bd_marriage_related_qs_male` (`id`, `user_id`, `guardians_agree_male`, `allowstudy_aftermarriage`, `allowjob_aftermarriage`, `livewife_aftermarriage`, `profileby_male`, `profilecreationdate`) VALUES
(11, 15, '72 nay', '72 nay', '72 nay', '72 nay', '', '2023-02-03'),
(19, 16, '3rd 16 update', '3rd 16 update', '3rd 16 update', 'hobe ki', 'Father', '2023-02-08'),
(74, 81, 'mama', 'mama', 'mama', 'mama', 'Father', '2023-02-10'),
(77, 71, 'address updt', 'address updt', 'address updt', 'address updt', 'Brother', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `7bd_marriage_related_qs_female`
--

CREATE TABLE `7bd_marriage_related_qs_female` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `guardians_agree_female` varchar(100) NOT NULL,
  `anyjob_aftermarriage` varchar(200) NOT NULL,
  `studies_aftermarriage` varchar(200) NOT NULL,
  `agree_marriage_student` varchar(200) NOT NULL,
  `profileby_female` varchar(100) NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `7bd_marriage_related_qs_female`
--

INSERT INTO `7bd_marriage_related_qs_female` (`id`, `user_id`, `guardians_agree_female`, `anyjob_aftermarriage`, `studies_aftermarriage`, `agree_marriage_student`, `profileby_female`, `profilecreationdate`) VALUES
(11, 15, '72 nay', '72 nay', '72 nay', '72 nay', '', '2023-02-03'),
(19, 16, 'hobe ki', '3rd 16 update', '3rd 16 update', '3rd 16 update', 'Uncle', '2023-02-08'),
(74, 81, 'mama', 'mama', 'mama', 'mama', 'Grandmother', '2023-02-10'),
(79, 71, 'address updt', 'address updt', 'address updt', 'address updt', 'Brother', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `8bd_religion_details`
--

CREATE TABLE `8bd_religion_details` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `yourreligion_condition` varchar(1000) NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `8bd_religion_details`
--

INSERT INTO `8bd_religion_details` (`id`, `user_id`, `religion`, `yourreligion_condition`, `profilecreationdate`) VALUES
(11, 15, '', '72 nay', '2023-02-03'),
(19, 16, 'Muslim', 'update', '2023-02-08'),
(80, 81, '', 'mama', '2023-02-10'),
(83, 71, 'Muslim', 'address updt', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `9bd_expected_life_partner`
--

CREATE TABLE `9bd_expected_life_partner` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `partner_religius` varchar(100) NOT NULL,
  `partner_district` varchar(200) NOT NULL,
  `partner_maritialstatus` varchar(100) NOT NULL,
  `partner_age` varchar(100) NOT NULL,
  `partner_skintones` varchar(100) NOT NULL,
  `partner_height` varchar(100) NOT NULL,
  `partner_education` varchar(200) NOT NULL,
  `partner_profession` varchar(200) NOT NULL,
  `partner_financial` varchar(200) NOT NULL,
  `partner_attributes` text NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `9bd_expected_life_partner`
--

INSERT INTO `9bd_expected_life_partner` (`id`, `user_id`, `partner_religius`, `partner_district`, `partner_maritialstatus`, `partner_age`, `partner_skintones`, `partner_height`, `partner_education`, `partner_profession`, `partner_financial`, `partner_attributes`, `profilecreationdate`) VALUES
(7, 15, '77 nay', '77 nay', '77 nay', '77 nay', '77 nay', '77 nay', '77 nay', '77 nay', '77 nay', 'koko', '2023-02-03'),
(20, 16, 'update', 'hobe ki', '3rd 16 update', '3rd 16 update', '3rd 16 update', '3rd 16 update', '3rd 16 update', '3rd 16 update', '3rd 16 update', '3rd 16 update', '2023-02-08'),
(79, 81, 'mama', 'mama', 'mama', 'mama', 'mama', 'mama', 'mama', 'mama', 'mama', 'mama', '2023-02-10'),
(81, 71, 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', 'address updt', '2023-02-11');

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pic1` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `pic1`) VALUES
(32, 15, 'nafiz3.png'),
(33, 16, 'neon-12.jpg'),
(35, 82, 'nafiz5.jpg'),
(36, 71, 'nafiz2.png'),
(37, 81, 'sO128U.jpg'),
(38, 138, 'RikHjG.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `profilestat` int(5) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilestat`, `fullname`, `username`, `gender`, `password`, `number`, `email`, `userlevel`) VALUES
(15, 0, '', 'nafiz', '', 'nafiz', 0, 'nafiz@gmail.com', 0),
(16, 0, '', 'noyon', '', 'noyon', 0, 'noyon@gmail.com', 0),
(71, 0, '', 'nahid', '', 'nahid', 0, 'nahid@gmail.com', 0),
(81, 0, '', 'mama', '', 'mama', 0, 'mama@gmail.com', 0),
(138, 0, 'Nafiz Noyon', 'nafis', 'male', 'nafis', 1737226404, 'nafis@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1bd_personal_physical`
--
ALTER TABLE `1bd_personal_physical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2bd_personal_lifestyle`
--
ALTER TABLE `2bd_personal_lifestyle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3bd_educational_qualifications`
--
ALTER TABLE `3bd_educational_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4bd_address_details`
--
ALTER TABLE `4bd_address_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5bd_family_information`
--
ALTER TABLE `5bd_family_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `6bd_marriage_related_qs_male`
--
ALTER TABLE `6bd_marriage_related_qs_male`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `7bd_marriage_related_qs_female`
--
ALTER TABLE `7bd_marriage_related_qs_female`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `8bd_religion_details`
--
ALTER TABLE `8bd_religion_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9bd_expected_life_partner`
--
ALTER TABLE `9bd_expected_life_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `1bd_personal_physical`
--
ALTER TABLE `1bd_personal_physical`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `2bd_personal_lifestyle`
--
ALTER TABLE `2bd_personal_lifestyle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `3bd_educational_qualifications`
--
ALTER TABLE `3bd_educational_qualifications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `4bd_address_details`
--
ALTER TABLE `4bd_address_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `5bd_family_information`
--
ALTER TABLE `5bd_family_information`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `6bd_marriage_related_qs_male`
--
ALTER TABLE `6bd_marriage_related_qs_male`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `7bd_marriage_related_qs_female`
--
ALTER TABLE `7bd_marriage_related_qs_female`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `8bd_religion_details`
--
ALTER TABLE `8bd_religion_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `9bd_expected_life_partner`
--
ALTER TABLE `9bd_expected_life_partner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
