-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 11:29 AM
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
  `a_ids` int(10) NOT NULL,
  `a_date` int(10) NOT NULL,
  `attended` int(10) NOT NULL,
  `leavenotes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donor_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `donor_view`
-- (See below for the actual view)
--
CREATE TABLE `donor_view` (
`s_ids` int(10)
,`s_names` varchar(100)
,`emails` varchar(100)
,`addresses` varchar(100)
,`contact_no` int(10)
,`types` varchar(20)
,`job_types` varchar(20)
,`dob` date
);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `registration_number` varchar(20) NOT NULL,
  `o_names` varchar(30) NOT NULL,
  `o_type` varchar(20) NOT NULL,
  `o_addresses` varchar(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `file_name` varchar(100) NOT NULL
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
  `contact_no` int(10) NOT NULL,
  `types` varchar(20) DEFAULT NULL,
  `job_types` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stakeholders`
--

INSERT INTO `stakeholders` (`s_ids`, `s_names`, `emails`, `addresses`, `contact_no`, `types`, `job_types`, `dob`) VALUES
(1, 'abcdefg', 'mdwvmk', 'mvkdlmk', 123456789, 'donors', 'nvdn', '2019-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_ids` int(10) NOT NULL,
  `st_names` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `father_contact_no` int(10) NOT NULL,
  `mother_contact_no` int(10) NOT NULL,
  `addresses` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `st_email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `st_a_ids` int(10) NOT NULL,
  `st_dates` date NOT NULL,
  `st_attended` int(10) NOT NULL,
  `st_leavenotes` varchar(50) NOT NULL,
  `st_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `volunteer_name`
-- (See below for the actual view)
--
CREATE TABLE `volunteer_name` (
`s_ids` int(10)
,`s_names` varchar(100)
,`emails` varchar(100)
,`addresses` varchar(100)
,`contact_no` int(10)
,`types` varchar(20)
,`job_types` varchar(20)
,`dob` date
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
  ADD PRIMARY KEY (`a_ids`),
  ADD KEY `v_ids` (`v_ids`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `stakeholders`
--
ALTER TABLE `stakeholders`
  ADD PRIMARY KEY (`s_ids`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_ids`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`st_a_ids`),
  ADD KEY `st_ids` (`st_ids`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `a_ids` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stakeholders`
--
ALTER TABLE `stakeholders`
  MODIFY `s_ids` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_ids` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
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
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `stakeholders` (`s_ids`);

--
-- Constraints for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD CONSTRAINT `student_attendance_ibfk_1` FOREIGN KEY (`st_ids`) REFERENCES `student` (`st_ids`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
