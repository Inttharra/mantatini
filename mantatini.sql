-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2022 at 11:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mantatini`
--
CREATE DATABASE IF NOT EXISTS `mantatini` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mantatini`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `firstname`, `lastname`, `password`) VALUES
(1, 40500, 'ทับทิม', 'เนตรมณี', 'ruby'),
(2, 40501, 'ทิพากร', 'อธิวัชรโยธิน', 'tawan'),
(3, 40502, 'ณัชชา', 'ธนเกียรติโกศล', 'chacha'),
(4, 40503, 'มินทรา', 'เกศวิริยสกุล', 'minny'),
(5, 40504, 'นาราลักษณ์', 'พวงผกา', 'phakasorn'),
(6, 40505, 'ม่านมุก', 'ทิพจักราธิวงค์', 'mook');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_code`, `subject_name`) VALUES
(1, 12200, 'สาขาการเงินการลงทุน'),
(2, 12201, 'สาขาการจัดการ'),
(3, 12202, 'สาขาการบัญชี'),
(4, 12203, 'สาขาคอมพิวเตอร์ธุรกิจ'),
(5, 12204, 'สาขาการจัดการโลจิสติกส์'),
(6, 12205, 'สาขาธุรกิจเกมและอีสปอร์ต'),
(7, 12206, 'การผลิตดนตรี'),
(8, 12207, 'เทคโนโลยีวิศวกรรมดนตรี'),
(9, 12208, 'การประพันธ์เพลง'),
(10, 12209, 'การแสดงขับร้อง');

-- --------------------------------------------------------

--
-- Table structure for table `subject_register`
--

CREATE TABLE `subject_register` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_register`
--

INSERT INTO `subject_register` (`id`, `student_id`, `subject_code`, `time`) VALUES
(1, 40500, 12203, '2022-09-04 10:30:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_register`
--
ALTER TABLE `subject_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject_register`
--
ALTER TABLE `subject_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
