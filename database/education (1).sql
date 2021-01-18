-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 04:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(50) NOT NULL,
  `class` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `added_on`) VALUES
(1, '1', '2021-01-06 11:44:46'),
(2, '12', '2021-01-06 11:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_` varchar(15) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `profile_pic` text DEFAULT NULL,
  `account_type` enum('Basic','Paid') DEFAULT 'Basic',
  `class_id` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `reg_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `fullname`, `email`, `phone_`, `password`, `profile_pic`, `account_type`, `class_id`, `updated_at`, `reg_on`) VALUES
(1, 'rahul kumar', 'admin@admin.com', '09953470167', '3921aecaf4d316747fbf7e563b4bd36b8488e739e639e523b106815f225b610f9bacf0653235bdeceecfe7c219915e38633109a515c5430105e30fa81f10693cjnaCTSDiwO89Qvo4IhwLeLT5H1yPSXC5Vf8SdF13gvU=', NULL, 'Basic', NULL, NULL, '2021-01-06 22:50:38'),
(2, 'Test', 'admin@admin.com', '09953470167', '1cd4972fafc902fd504783c48a107ab067e3448f3ca8857ae58e64b16bc2030892f45c990851af07fe2cf2f205dbac43ec02c7575ee92e31c45cdb803fa612feklRglvdeDnbGdQX60hCJFx9bFd014Ctcs2Mh/VNpDAw=', NULL, 'Basic', NULL, NULL, '2021-01-06 22:52:22'),
(3, 'fasfsdf', 'rohansingh14061995@gmail.com', '3333', '280f53205f2ea43a3b96c7cb2a3058746e67786a9febe19c229abbabb27aea108f7af3f5e2ac2cd81a003a5192b5fa7a280c61d922abd2d29b0bca00f11c1612R5ejTcGTiGjdJC+Be7gxEnyDG8iyfUP4kgR84ALsAvI=', NULL, 'Basic', NULL, NULL, '2021-01-06 22:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`, `added_on`) VALUES
(1, 'Math', '2021-01-06 11:38:41'),
(2, 'English', '2021-01-06 11:39:57'),
(3, 'Hindi', '2021-01-06 11:40:32'),
(5, 'test', '2021-01-09 15:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `subject_notes`
--

CREATE TABLE `subject_notes` (
  `note_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description_` text NOT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(50) NOT NULL,
  `class_id` int(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `class_id`, `subject_id`, `title`, `video_url`, `added_on`) VALUES
(1, 1, 2, 'drheh', 'video-2021-01-07-12-18-49asdas.mp4', '2021-01-07 05:48:49'),
(2, 1, 2, 'test Teee', 'video-2021-01-07-12-18-49asdas.mp4', '2021-01-09 13:55:42'),
(3, 1, 2, 'Url Ofr Test', 'video-2021-01-07-12-18-49asdas.mp4', '2021-01-09 13:55:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
