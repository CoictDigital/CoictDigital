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
-- Table structure for table `course_allocation`
--

CREATE TABLE `course_allocation` (
  `id` int(50) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `evaluator` varchar(50) DEFAULT NULL,
  `assistant` varchar(50) DEFAULT NULL,
  `instructor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_allocation`
--

INSERT INTO `course_allocation` (`id`, `course_name`, `semester`, `evaluator`, `assistant`, `instructor`) VALUES
(1, 'Introduction to	Informatics	and	\r\nMicrocomputers', '1', '', 'Mr Masembo', 'Ms.Lilian Mkonyi'),
(9, 'Computer Organization and	\r\nArchitecture I', '1', '', 'Mr.Mwita Sogorya', 'Dr.Diana Rwegasira'),
(11, 'Introduction	to	Information	\r\nSystems', '1', '', '', 'Dr.Ruthbetha	Kateule'),
(12, 'Programming in C', '1', '', 'Mr Kishiwa', 'Dr.Masoud	Mahundi'),
(13, 'Measurements & Instrumentation Engineering	I', '1', '', 'Dr	Lujara', 'Dr.Jacqueline Damas'),
(14, 'Computer Network Design	and	Administration', '1', '', 'Mr Zedekia', 'Dr.Yona Andengelile'),
(15, 'Principles	of Computer	Graphics', '1', '', '', 'Dr.James Chambua'),
(16, 'Data Abstraction and Algorithms', '1', '', '', 'Dr.Godfrey Justo'),
(17, 'Mobile	Applications Development', '1', '', '', 'Dr.Kennedy Frank'),
(18, 'Multimedia	System', '1', '', '', 'Dr.Mercy	Mbise'),
(19, 'Principles of	Database Systems', '1', '', 'Mr	Masembo', 'Mr.Henry	Kalisti'),
(20, 'Structured Systems Analysis & Design', '1', '', '', 'Dr.Salome	Maro'),
(21, 'Principles	of	Operating Systems', '1', '', 'Dr Charles Tarimo', 'Dr.Fatuma	Simba'),
(22, 'Human	Computer Interaction', '1', '', '', ' Dr.Joseph Cosmas'),
(23, 'Software Engineering', '1', '', '', 'Dr.Juma Lungo	/ Dr.Leonard Peter'),
(24, 'Final Year Project', '1', '', '', 'FYP Team'),
(25, 'Trends and Social-cultural	implications of	information Technology', '1', '', '', 'Mr.Hassan	Omary'),
(26, 'Microcomputer Systems I', '1', '', '', 'Dr.Burchard Bagile'),
(27, 'Management of Information Systems', '1', '', '', 'Dr.Honest	Kimaro'),
(28, 'IT Audit and Controls', '1', '', '', 'Dr.Aron Kondoro'),
(29, 'System	Administration in Linux', '1', '', '', 'Dr.Jimmy Mbelwa'),
(30, 'Environmental Management	Information	Systems', '1', '', '', 'Dr.Wilfred Senyoni'),
(31, 'Software Quality Assurance and Testing', '1', '', '', 'Dr.Wilbard Nyamwihula'),
(32, 'Modern	Control	Systems	Engineering', '1', '', '', 'Mr.Daudi	Charles / Ms.Merina Marcellino'),
(33, 'Computer Organization and Architecture	III', '1', '', '', 'Dr.Hellen	Maziku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_allocation`
--
ALTER TABLE `course_allocation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_allocation`
--
ALTER TABLE `course_allocation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
