-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 06:40 AM
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
-- Database: `old_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `ovrelations`
--

CREATE TABLE `ovrelations` (
  `o_ids` varchar(20) NOT NULL,
  `v_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ovrelations`
--

INSERT INTO `ovrelations` (`o_ids`, `v_ids`) VALUES
('789456', 12),
('789456', 12),
('123', 12),
('789456', 13),
('789456', 12),
('789456', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ovrelations`
--
ALTER TABLE `ovrelations`
  ADD KEY `o_ids` (`o_ids`),
  ADD KEY `v_ids` (`v_ids`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ovrelations`
--
ALTER TABLE `ovrelations`
  ADD CONSTRAINT `ovrelations_ibfk_1` FOREIGN KEY (`o_ids`) REFERENCES `organizations` (`registration_numbers`),
  ADD CONSTRAINT `ovrelations_ibfk_2` FOREIGN KEY (`v_ids`) REFERENCES `stakeholders` (`s_ids`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
