-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 02:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coict_digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_invigilation`
--

CREATE TABLE `exam_invigilation` (
  `id` int(11) NOT NULL,
  `day` date NOT NULL,
  `from_time` varchar(5) NOT NULL,
  `to_time` varchar(6) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `invigilators` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_invigilation`
--

INSERT INTO `exam_invigilation` (`id`, `day`, `from_time`, `to_time`, `course_name`, `venue`, `invigilators`) VALUES
(3, '2022-06-16', '8:30', '10:30', 'PRINCIPLES OF OPERATING SYSTEM', 'YOMBO5', 'DR. FATUMA SIMBA'),
(4, '0000-00-00', '7:30', '10:30', 'FYP', 'B307', 'DR TAIFA'),
(5, '0000-00-00', '7:30', '18:30', 'ENTREPRENEURSHIP', 'B302', 'DR HELLEN MAZIKU'),
(6, '0000-00-00', '8:30', '18:30', 'HUMAN COMPUTER INTERACTION', 'DO1', 'DR TAIFA'),
(7, '0000-00-00', '9:30', '14:30', 'ENTREPRENEURSHIP', 'DO1', 'DR JIMMY MBELWA'),
(8, '0000-00-00', '8:30', '10:30', 'PRINCIPLES OF OPERATING SYSTEM', 'YOMBO 5', 'DR COSMAS MUSHI'),
(9, '0000-00-00', '8:00', '10:30', 'ENTREPRENEURSHIP', 'DO1', 'Dr. ARON R. KONDORO'),
(10, '0000-00-00', '8:30', '10:30', 'BUSINESS INTELLIGENCE', 'B 305', 'DR HONEST C. KIMARO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_invigilation`
--
ALTER TABLE `exam_invigilation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_invigilation`
--
ALTER TABLE `exam_invigilation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
