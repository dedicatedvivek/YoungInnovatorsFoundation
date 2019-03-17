-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 06:28 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donor_ids`, `d_ids`, `d_amounts`, `d_dates`, `d_modes`) VALUES
(1, 1, 100000, '2019-03-12', 'cash'),
(1, 2, 1000, '2019-03-05', 'cash');

-- --------------------------------------------------------

--
-- Stand-in structure for view `donor_views`
-- (See below for the actual view)
--
CREATE TABLE `donor_views` (
`s_ids` int(10)
,`s_names` varchar(100)
,`emails` varchar(100)
,`addresses` varchar(100)
,`contact_nos` bigint(250)
,`types` varchar(20)
,`job_types` varchar(20)
,`dobs` date
);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_17_042958_create_members_table', 1),
(4, '2019_03_17_043215_create_volunteers_table', 1);

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
  `file_names` varchar(100) NOT NULL,
  `v_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_ids`, `st_names`, `st_fathernames`, `st_mothernames`, `st_father_contact_nos`, `st_mother_contact_nos`, `addresses`, `dobs`, `st_emails`) VALUES
(1, 'dncdnNSANCN', 'C M ', 'C , ', 7891234561, 9999999999, 'cbddbh', '2019-03-06', 'cndjndjcnjcnjcjcnjcn');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_editor` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `volunteer_views`
-- (See below for the actual view)
--
CREATE TABLE `volunteer_views` (
`s_ids` int(10)
,`s_names` varchar(100)
,`emails` varchar(100)
,`addresses` varchar(100)
,`contact_nos` bigint(250)
,`types` varchar(20)
,`job_types` varchar(20)
,`dobs` date
);

-- --------------------------------------------------------

--
-- Structure for view `donor_views`
--
DROP TABLE IF EXISTS `donor_views`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `donor_views`  AS  select `stakeholders`.`s_ids` AS `s_ids`,`stakeholders`.`s_names` AS `s_names`,`stakeholders`.`emails` AS `emails`,`stakeholders`.`addresses` AS `addresses`,`stakeholders`.`contact_nos` AS `contact_nos`,`stakeholders`.`types` AS `types`,`stakeholders`.`job_types` AS `job_types`,`stakeholders`.`dobs` AS `dobs` from `stakeholders` where (`stakeholders`.`types` = 'donor') ;

-- --------------------------------------------------------

--
-- Structure for view `volunteer_views`
--
DROP TABLE IF EXISTS `volunteer_views`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `volunteer_views`  AS  select `stakeholders`.`s_ids` AS `s_ids`,`stakeholders`.`s_names` AS `s_names`,`stakeholders`.`emails` AS `emails`,`stakeholders`.`addresses` AS `addresses`,`stakeholders`.`contact_nos` AS `contact_nos`,`stakeholders`.`types` AS `types`,`stakeholders`.`job_types` AS `job_types`,`stakeholders`.`dobs` AS `dobs` from `stakeholders` where (`stakeholders`.`types` = 'volunteer') ;

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
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`registration_numbers`),
  ADD KEY `v_ids` (`v_ids`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `volunteers_email_unique` (`email`);

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
  MODIFY `d_ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stakeholders`
--
ALTER TABLE `stakeholders`
  MODIFY `s_ids` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `st_ids` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `st_a_ids` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_ibfk_1` FOREIGN KEY (`v_ids`) REFERENCES `stakeholders` (`s_ids`);

--
-- Constraints for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD CONSTRAINT `student_attendances_ibfk_1` FOREIGN KEY (`st_ids`) REFERENCES `students` (`st_ids`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
