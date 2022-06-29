-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 10:42 PM
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
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `year_completed` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `employedat` varchar(100) NOT NULL,
  `employedas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `Name`, `sex`, `programme`, `year_completed`, `email`, `contact`, `occupation`, `employedat`, `employedas`) VALUES
(1, 'zizima y kambaye', 'male', 'bsc in business information technology', '2022', 'zizimayotham669@gmail.com', '0785248794', 'employed', 'udsm', 'it'),
(2, 'mlaki, Japhet January', 'male', 'bsc in Computer Science', '2022', 'mlaki3434@gmail.com', '078888', 'Self employed', 'TRA', 'IT OFFICER'),
(3, 'Juma s Rajabu', 'male', 'bsc in business information technology', '2022', 'jumarajabu69@gmail.com', '0785248794', 'employed', 'udsm', 'it'),
(4, 'Angela J Mwenezi', 'female', 'bsc in Computer Science', '2022', 'mwemezianjera9@gmail.com', '0785248794', 'employed', 'udsm', 'it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
