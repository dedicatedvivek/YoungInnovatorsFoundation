-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 12:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yifngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `v_ids` int(11) NOT NULL,
  `v_a_ids` int(10) NOT NULL,
  `v_a_dates` int(10) NOT NULL,
  `v_attendeds` int(10) NOT NULL,
  `v_leavenotes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donor_ids` int(11) NOT NULL,
  `d_ids` int(11) NOT NULL,
  `d_amounts` bigint(20) NOT NULL,
  `d_dates` date NOT NULL,
  `d_modes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `donor_view`
-- (See below for the actual view)
--
CREATE TABLE `donor_view` (
);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `registration_numbers` varchar(20) NOT NULL,
  `o_names` varchar(30) NOT NULL,
  `o_types` varchar(20) NOT NULL,
  `o_addresses` varchar(100) NOT NULL,
  `contact_nos` bigint(10) NOT NULL,
  `file_names` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stakeholders`
--

CREATE TABLE `stakeholders` (
  `s_ids` int(10) NOT NULL,
  `s_names` varchar(100) NOT NULL,
  `emails` varchar(100) NOT NULL,
  `addresses` varchar(100) NOT NULL,
  `contact_nos` bigint(250) NOT NULL,
  `types` varchar(20) DEFAULT NULL,
  `job_types` varchar(20) NOT NULL,
  `dobs` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stakeholders`
--

INSERT INTO `stakeholders` (`s_ids`, `s_names`, `emails`, `addresses`, `contact_nos`, `types`, `job_types`, `dobs`) VALUES
(1, 'abcdefg', 'mdwvmk', 'mvkdlmk', 123456789, 'donors', 'nvdn', '2019-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_ids` int(10) NOT NULL,
  `st_names` varchar(20) NOT NULL,
  `st_fathernames` varchar(20) NOT NULL,
  `st_mothernames` varchar(20) NOT NULL,
  `st_father_contact_nos` bigint(250) NOT NULL,
  `st_mother_contact_nos` bigint(250) NOT NULL,
  `addresses` varchar(100) NOT NULL,
  `dobs` date NOT NULL,
  `st_emails` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `st_a_ids` int(10) NOT NULL,
  `st_dates` date NOT NULL,
  `st_attendeds` int(10) NOT NULL,
  `st_leavenotes` varchar(50) NOT NULL,
  `st_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `volunteer_name`
-- (See below for the actual view)
--
CREATE TABLE `volunteer_name` (
);

-- --------------------------------------------------------

--
-- Structure for view `donor_view`
--
DROP TABLE IF EXISTS `donor_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `donor_view`  AS  select `stakeholders`.`s_ids` AS `s_ids`,`stakeholders`.`s_names` AS `s_names`,`stakeholders`.`emails` AS `emails`,`stakeholders`.`addresses` AS `addresses`,`stakeholders`.`contact_no` AS `contact_no`,`stakeholders`.`types` AS `types`,`stakeholders`.`job_types` AS `job_types`,`stakeholders`.`dob` AS `dob` from `stakeholders` where (`stakeholders`.`types` = 'donors') ;

-- --------------------------------------------------------

--
-- Structure for view `volunteer_name`
--
DROP TABLE IF EXISTS `volunteer_name`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `volunteer_name`  AS  select `stakeholders`.`s_ids` AS `s_ids`,`stakeholders`.`s_names` AS `s_names`,`stakeholders`.`emails` AS `emails`,`stakeholders`.`addresses` AS `addresses`,`stakeholders`.`contact_no` AS `contact_no`,`stakeholders`.`types` AS `types`,`stakeholders`.`job_types` AS `job_types`,`stakeholders`.`dob` AS `dob` from `stakeholders` where (`stakeholders`.`types` = 'volunteers') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`v_a_ids`),
  ADD KEY `v_ids` (`v_ids`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`d_ids`),
  ADD KEY `donor_id` (`donor_ids`);

--
-- Indexes for table `stakeholders`
--
ALTER TABLE `stakeholders`
  ADD PRIMARY KEY (`s_ids`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_ids`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`st_a_ids`),
  ADD KEY `st_ids` (`st_ids`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `v_a_ids` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `d_ids` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stakeholders`
--
ALTER TABLE `stakeholders`
  MODIFY `s_ids` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `st_ids` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `st_a_ids` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_ibfk_1` FOREIGN KEY (`v_ids`) REFERENCES `stakeholders` (`s_ids`);

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`donor_ids`) REFERENCES `stakeholders` (`s_ids`);

--
-- Constraints for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD CONSTRAINT `student_attendances_ibfk_1` FOREIGN KEY (`st_ids`) REFERENCES `students` (`st_ids`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
