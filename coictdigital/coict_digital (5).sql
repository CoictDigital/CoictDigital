-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 08:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(200) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `instructor` varchar(200) DEFAULT NULL,
  `venue` varchar(200) DEFAULT NULL,
  `class_size` int(11) NOT NULL DEFAULT 0,
  `department` varchar(200) DEFAULT NULL,
  `college` varchar(200) DEFAULT NULL,
  `assistant` varchar(100) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `venue_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `course_title`, `instructor`, `venue`, `class_size`, `department`, `college`, `assistant`, `semester`, `venue_capacity`) VALUES
('', '', NULL, NULL, 0, NULL, NULL, NULL, NULL, 300),
(' MK 301', 'ENTREPRENEURSHIP', 'DR WINNIE NGUNI', 'YOMBO5', 35, 'CSE', 'COICT', '', 2, 500),
('CS 334', 'PRINCIPLES OF OPERATING SYSTEM', 'DR. FATUMA SIMBA', 'B307', 244, 'CSE', 'COICT', NULL, 1, 260),
('CS 335', 'SOFTWARE ENGINEERING', 'Dr. JUMA H. LUNGO', 'DO1', 269, 'CSE', 'COICT', NULL, 1, 300),
('GM 300', 'STRATEGIC MANAGEMENT', 'Dr. WINFRIDA', 'YOMBO5', 350, 'CSE', 'COICT', NULL, 1, 500),
('IE 445', 'ENTREPRENEURSHIP FOR ENGINEERS', 'DR TAIFA', 'YOMBO5', 244, 'CSE', 'COICT', NULL, 2, 500),
('IS 335', 'FYP', 'DR COSMAS MUSHI', 'COICT', 244, 'CSE', 'COICT', NULL, 2, 0),
('IS 336', 'PRINCIPLE OF SYSTEM SECURITY', 'DR HELLEN MAZIKU', 'B302', 244, 'CSE', 'COICT', NULL, 2, 200),
('IS 337', 'MOBILE COMPUTING', 'DR JIMMY MBELWA', 'B305', 244, 'CSE', 'COICT', NULL, 2, 250),
('IS 343', 'PRACTICAL TRAINING 2', 'DR. GODFREY JUSTO', 'B302', 415, 'CSE', 'COICT', NULL, 1, 200),
('IS 344', 'HUMAN COMPUTER INTERACTION', 'DR. JOSEPH MUSHI', 'B310', 244, 'CSE', 'COICT', NULL, 1, 270),
('IS 365', 'ARTIFICIAL INTELLIGENCE', 'DR CHAMBUA', 'B305', 244, 'CSE', 'COICT', NULL, 2, 250),
('IS 368', 'DATA MINING AND WAREHOUSING', 'DR KENNEDY', 'B307', 244, 'CSE', 'COICT', NULL, 2, 260),
('IS 369', 'IT AUDIT AND CONTROLS', 'Dr. ARON R. KONDORO', 'B305', 108, 'CSE', 'COICT', NULL, 1, 250),
('IS 384', 'SOFTWARE PROJECT MANAGEMENT', 'DR MATHEW MNDEME', 'B307', 35, 'CSE', 'COICT', '', 2, 260),
('IS 385', 'BUSINESS INTELLIGENCE', 'DR GODFREY N. JUSTO', 'B307', 35, 'CSE', 'COICT', '', 2, 260),
('IS 386', 'ENTERPRISE SYSTEMS', 'DR HONEST C. KIMARO', 'B307', 35, 'CSE', 'COICT', '', 2, 260),
('IS 387', 'ENVIRONMENTAL MANAGEMENT INFORMATION SYSTEM', 'Dr. WILFRED SENYONI', 'B307', 35, 'CSE', 'COICT', NULL, 1, 260);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `reg_no` varchar(200) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `study_year` int(11) DEFAULT NULL,
  `student_programme` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_questions`
--

CREATE TABLE `evaluation_questions` (
  `reg_no` varchar(200) NOT NULL,
  `course_code` varchar(200) DEFAULT NULL,
  `1` varchar(200) NOT NULL,
  `2` varchar(200) NOT NULL,
  `3` varchar(200) NOT NULL,
  `4` varchar(200) NOT NULL,
  `5` varchar(200) NOT NULL,
  `6` varchar(200) NOT NULL,
  `7` varchar(200) NOT NULL,
  `8` varchar(200) NOT NULL,
  `9` varchar(200) NOT NULL,
  `10` varchar(200) NOT NULL,
  `11` varchar(200) NOT NULL,
  `12` varchar(200) NOT NULL,
  `13` varchar(200) NOT NULL,
  `14` varchar(200) NOT NULL,
  `15` varchar(200) NOT NULL,
  `16` varchar(200) NOT NULL,
  `17` varchar(200) NOT NULL,
  `18` varchar(200) NOT NULL,
  `19` varchar(200) NOT NULL,
  `harassment_explanation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_questions`
--

INSERT INTO `evaluation_questions` (`reg_no`, `course_code`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `harassment_explanation`) VALUES
('2019-04-07563', 'IE 445', '1', '2', '3', '2', '3', '2', '4', '3', '3', '2', '2', '2', '4', '4', '2', '1', '1', '1', '3', NULL),
('2019-04-07563', 'IE 445', '3', '2', '3', '2', '3', '2', '4', '3', '3', '2', '2', '2', '4', '4', '2', '1', '1', '1', '3', NULL),
('2019-04-07563', 'IE 445', '3', '2', '3', '2', '3', '2', '4', '3', '3', '2', '2', '2', '4', '4', '2', '1', '1', '1', '3', NULL),
('2019-04-07563', 'IE 445', '5', '5', '1', '3', '1', '3', '4', '4', '3', '3', '1', '4', '2', '1', '3', '2', '2', '3', '5', 'Amet duis atque exc'),
('2019-04-07563', 'IE 445', '3', '5', '2', '1', '3', '5', '2', '2', '2', '1', '2', '2', '4', '4', '4', '3', '2', '2', '4', 'Doloribus quisquam v'),
('2019-04-09335', 'IE 445', '4', '3', '3', '3', '3', '3', '3', '3', '3', '3', '1', '3', '3', '3', '3', '3', '3', '3', '3', ''),
('2019-04-05542', 'IE 445', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', ''),
('2019-04-09335', 'IE 445', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', ''),
('2019-04-09335', 'IE 445', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', ''),
('2019-04-09335', 'IE 445', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', ''),
('2019-04-09335', 'IE 445', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '2', '2', '2', ''),
('2019-04-09335', 'IE 445', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1', '1', '1', '1', '2', '3', '3', '3', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'student'),
(2, 'senior'),
(3, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

CREATE TABLE `samples` (
  `id` int(11) NOT NULL,
  `study` varchar(23) NOT NULL,
  `semester` varchar(23) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachingmonitoring_questions`
--

CREATE TABLE `teachingmonitoring_questions` (
  `id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `starting_time` time NOT NULL,
  `ending_time` time NOT NULL,
  `venue` varchar(150) NOT NULL,
  `Number_of_students` int(10) NOT NULL,
  `attendance` varchar(200) NOT NULL,
  `reason_for_absence` varchar(200) DEFAULT NULL,
  `student_informed` varchar(200) DEFAULT 'pending',
  `session_starting_time` varchar(200) NOT NULL,
  `reason_for_startinglate` varchar(200) DEFAULT NULL,
  `session_type` varchar(200) NOT NULL,
  `teaching_mode` varchar(200) NOT NULL,
  `teaching_method` varchar(200) NOT NULL,
  `medium_of_instruction` varchar(200) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `f` varchar(200) NOT NULL,
  `g` varchar(200) NOT NULL,
  `h` varchar(200) NOT NULL,
  `i` varchar(200) NOT NULL,
  `j` varchar(200) NOT NULL,
  `special_matters` varchar(200) NOT NULL,
  `specialmatters_explanation` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachingmonitoring_questions`
--

INSERT INTO `teachingmonitoring_questions` (`id`, `semester`, `course_code`, `starting_time`, `ending_time`, `venue`, `Number_of_students`, `attendance`, `reason_for_absence`, `student_informed`, `session_starting_time`, `reason_for_startinglate`, `session_type`, `teaching_mode`, `teaching_method`, `medium_of_instruction`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `special_matters`, `specialmatters_explanation`, `date`) VALUES
(51, 0, 'GM 300', '21:25:00', '23:25:00', 'YOMBO5', 90, 'absent', 'Sickness', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-06-09 09:34:32'),
(52, 0, 'IS 385', '12:23:00', '14:23:00', 'B307', 56, 'present', '', '', 'Started late between 15-30 minutes', 'No initial teaching preparations', 'Practical', 'Student centred', 'Conventional overhead projector', 'Course in English but code-switching to Kiswahili', '5', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'yes', 'no electricity', '2022-06-09 09:34:32'),
(53, 1, 'IS 384', '21:23:00', '15:22:00', 'B307', 2, 'present', '', '', 'started_on_time', '', 'Lecture', 'Student centred', 'Power point presentation with LCD projector', '', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'yes', 'n kml,lkijuygtftg', '2022-06-09 09:34:32'),
(54, 2, 'CS 335', '21:09:00', '23:09:00', 'DO1', 78, 'present', '', '', 'Started late between 15-30 minutes', 'Change of Venue due to collision', 'Practical', 'Student centred', 'Student Presentation and practical', 'Course in English but code-switching to Kiswahili', '4', '3', '2', '2', '2', '2', '1', '1', '1', '1', 'no', '', '2022-06-09 09:34:32'),
(55, 2, 'IE 445', '02:47:00', '02:48:00', 'YOMBO5', 1, 'absent', 'Out of university campus, travelled', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-06-09 09:34:32'),
(56, 2, 'IS 387', '04:17:00', '04:17:00', 'B310', 23, 'present', '', '', 'started_on_time', '', 'Other', 'Student lead with instructor supervisor', 'Other', 'Course in Kiswahili but code-switching to English', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'yes', 'students are not attentive', '2022-06-09 09:34:32'),
(57, 1, 'IS 387', '04:29:00', '04:29:00', 'B310', 34, 'absent', 'Not informed', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-06-09 09:34:32'),
(58, 1, 'IS 343', '04:51:00', '04:51:00', 'DO1', 400, 'present', '', '', 'Started late between 15-30 minutes', 'late arrival of the students', 'Practical', 'Student centred', 'Student Presentation and practical', 'Course in English and English is used through out', 'Excellent', 'VEry good', 'Good', 'Poor', 'Very poor', 'Not applicable', 'Very poor', 'Poor', 'Good', 'Very good', 'no', '', '2022-06-09 09:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `reg_no` varchar(250) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(10) UNSIGNED DEFAULT NULL,
  `student_programme` varchar(100) DEFAULT NULL,
  `study_year` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `reg_no`, `password`, `role`, `student_programme`, `study_year`) VALUES
(421, 'Mlundi, Wanzita Raymound', NULL, '2019-04-07563', '$2y$10$s7nGNNzSUmuZXwC9Tpto7O1H6jv9owqia7ynExm1mJTwjqwVZqoLK', 1, NULL, 3),
(422, 'Mwakatimbo, Elizabeth A.', NULL, '2019-04-08908', '$2y$10$/8gy4txhfdLWu4Bkgw6MVu3R6G9nT5a/4u0uH5BLpC7UkF.VGjlPO', 1, NULL, 3),
(423, 'Reuben, Adam William', NULL, '2019-04-10982', '$2y$10$wBpfiMradIKOJMsQsCk.fOIoicfx4mIGayoQpgX25pIDEBfpjk.7m', 1, NULL, 3),
(424, 'Mustapha, Saidi Seifdin', NULL, '2018-04-02441', '$2y$10$2QzBli2C9jf3dRiWO0E41OWx1hLLFIl5.eFPd3UNFDG.Scvt5GJ1i', 1, NULL, 3),
(425, 'Mlay, Calvin Swaty', NULL, '2017-04-07308', '$2y$10$wHjQCDn3eDmVegt55.sEKubXdOFlUPckazRbOw5Pu1ev5I.bz93.K', 1, NULL, 3),
(426, 'Mrema, Gloria Huggon', NULL, '2019-04-08035', '$2y$10$URI2nz.iBKhcT6Din5g0Ue95qigArn7tgTuwC0lyRxbQZtO2eYOgi', 1, NULL, 3),
(427, 'Kunda, Michael John', NULL, '2019-04-04658', '$2y$10$5QL693wqctgRZzULoDkBseuM81E7IHj6.QoMQ6DM6kVsxGd68NbfG', 1, NULL, 3),
(428, 'Chiutila, Nielsen W.', NULL, '2019-04-01304', '$2y$10$eUszsnOFU.6foAn1LrljfuxBDx3l/q.1KXKSgbQJ.4CA1KNUniIxC', 1, NULL, 3),
(429, 'Mganga, Jackson Francis', NULL, '2019-04-06965', '$2y$10$p7dghk7WwFTQ66dukuCquuCbzgtzuWgMKDZK1qnzgamFFJOtuvPQW', 1, NULL, 3),
(430, 'Rajabu, Juma S.', NULL, '2019-04-10833', '$2y$10$wcY3LZ/Czv8zqn3MP6vVgObKnvmW5ioxy1NpVPPR9N9DwjFdowCL.', 1, NULL, 3),
(431, 'Mallya, Habil Raphael', NULL, '2019-04-05826', '$2y$10$GwPbi4Ta8eN.YDFXGQ2gIOVjnfeVK/MPX1rdJzkFOrQdpmoRAC7Pq', 1, NULL, 3),
(432, 'Senkoro, Daniel A.', NULL, '2019-04-11702', '$2y$10$2RLFHGl8H8cqY9kFcIbmfOJnn3xydhhuByiyN16i1M1PMNL3RhlSi', 1, NULL, 3),
(433, 'Kapungu, Noel K', NULL, '2019-04-03618', '$2y$10$2o/v5Z3taPiTRiDrOhnOluE4jQQbaQtGgckl8QIPwXM1AltKQO8LS', 1, NULL, 3),
(434, 'Kibonajoro, Ackram S.', NULL, '2017-04-07278', '$2y$10$Gl60FhXmDXIFeX8KD3MeSOnA6v.2efJQ3X2tlCel5Ca9JP3hW/HLK', 1, NULL, 3),
(435, 'Mrema, Elvis G.', NULL, '2018-04-01670', '$2y$10$4HnhZLHJbHgzafwH8MpbFu5/FSMGkYw0NyX5Ql08l80V.YWAuZCJe', 1, NULL, 3),
(436, 'Thomas, Mathias', NULL, '2019-04-12582', '$2y$10$9ITFhCQe/6NUx8egvFJzXeC6WnsNoDu4iwmZG5UGcRnuQ7dxTl6Ma', 1, NULL, 3),
(437, 'Muhenga, Said Zuberi', NULL, '2019-04-08524', '$2y$10$SFPzi5IgEVlQOtWyyXc0qu43bPT7QgQqiaUk1LsA81yWrlqXfjxPe', 1, NULL, 3),
(438, 'Mussa, Yussuf Hamad', NULL, '2018-04-07846', '$2y$10$7EbU.UbmyQYTtPuMc1tpuuAl95DOQ2pTiKGWnqM.lvOKhrnrVk98y', 1, NULL, 3),
(439, 'Rweyemamu, Herdt', NULL, '2018-04-07268', '$2y$10$eEM.ejsA3Cm8QQBbayh.muw7Hn/86XtWxngDhO6guXU.sTx6jmiWa', 1, NULL, 3),
(440, 'Kweka, Deborah C.', NULL, '2019-04-04703', '$2y$10$2yC2PAlX62Gpg6xkgDmwWuU8qLiamKged3MqMMbeFw5snQGBSwYR.', 1, NULL, 3),
(441, 'Edward, Leonard M.', NULL, '2019-04-01677', '$2y$10$avakKlkn0z/rruSEAWZjbe1u/5yzhrNXgwLqfvK/afDYYelzA1iCa', 1, NULL, 3),
(442, 'Mbuge, Richard Charles', NULL, '2019-04-06696', '$2y$10$/3jzp7oswCSwcYRM3iBkWOoQcGVpAxLgUHNzF6arP62lHf9krL7cS', 1, NULL, 3),
(443, 'Mwalukisa, Walter P.', NULL, '2019-04-08989', '$2y$10$ccZtZC6znl.oV9xFVJ951e8jGtFwdxXTvMjCbS6KAksNyNegt9vTi', 1, NULL, 3),
(444, 'Ngaharo, Neema Rashid', NULL, '2019-04-09742', '$2y$10$F9UNLk8QYkl/RlCd9kWhQ.dZf8iOVzONJ6N2ygp1q/AQ6PKpVhIFy', 1, NULL, 3),
(445, 'Charukula, Jimmy Benjamin', NULL, '2019-04-01182', '$2y$10$9V2TulMwkOhwzL//RUNdM.UXsGtEEVgVKbeorXRkGQvh81qXf1QZ2', 1, NULL, 3),
(446, 'Mayenga, Richard E', NULL, '2019-04-06515', '$2y$10$soSBUdxQTF6EQdw.GjtcsuoDvXCjAZfX2wqj27JMyNBTdVQgiJDrO', 1, NULL, 3),
(447, 'Mosha, Godbless Huruma', NULL, '2019-04-07868', '$2y$10$XeEBCaIS1O.arZ0oUmgDBOXcZOuM96KKDNPiivoLflCxzuYFoPwr2', 1, NULL, 3),
(448, 'Juma, Emmanuel E.', NULL, '2018-04-10886', '$2y$10$gOgrwybJBCFEAyzZD1a9vOVYuS744teiiiyMpoNZXG83pJG5nAq1.', 1, NULL, 3),
(449, 'Lemunke, Emaculate Sein', NULL, '2018-04-01671', '$2y$10$vlZMXMF6gBHvg.q.ochBAubUSyT5TlpYRuMLodZ.4baIopyy83kia', 1, NULL, 3),
(450, 'Saleh, Ttuwr Abood', NULL, '2019-04-11318', '$2y$10$ZiL1ClDtfa1i7KHokYMvLeA2BHnqS1JjU4ce9r7zHlSBkIS.1Cooq', 1, NULL, 3),
(451, 'Masali, Emanuel', NULL, '2018-04-07138', '$2y$10$shhIlcuABfPHzKuwnB05yOiD/CMwmQjSoj19xzxMD7hZ3EDNsYUUi', 1, NULL, 3),
(452, 'Mlowe, Anneth N.', NULL, '2019-04-07548', '$2y$10$gNc8Jm8eEDYvnwzSToJf7uuNo5ZJ7yuFxB4lrz2.HHyZSW6OufOge', 1, NULL, 3),
(453, 'Salum, Zuwena Hamoud', NULL, '2018-04-01698', '$2y$10$d9HFhYm8OM2wdkEmAgHeKeUKbiW3rjD1DEVQShrEwtc84Rhq//GGu', 1, NULL, 3),
(454, 'Mwilawa, Amos A.', NULL, '2019-04-09370', '$2y$10$LmYXEA53VHsUTYLrtiSOUO9DEYjVIBvWbqwFvOxW5kw68VFuzvYl.', 1, NULL, 3),
(455, 'Malamla, Millenium Anthony', NULL, '2019-04-05753', '$2y$10$HZZ21N45WvIpO2/A36Cmcu5nV0OCyNuf8sGoBvDV8xo5AWm1df4Aa', 1, NULL, 3),
(456, 'Gwesa, Fumbuka Njile', NULL, '2019-04-02215', '$2y$10$RU3BZLowhkUIu0To6iJ.9.xyrgiAXe7WjApqsgWPQ/SmYksnQ1TXq', 1, NULL, 3),
(457, 'Ndilanha, Vivian E', NULL, '2019-04-09619', '$2y$10$.LmtmIoJC45zDt0FRpaKze7luITWWe7rxOL0Mj./axJerv9yJZFQ.', 1, NULL, 3),
(458, 'Zizima, Yotham K.', NULL, '2019-04-03484', '$2y$10$9iXEoWymEb84pzSCoZ2WMOeyoOxznPz0tfWWDwMFzUav2/vf79Fk.', 1, NULL, 3),
(459, 'Mlaki, Japhet January', NULL, '2019-04-07467', '$2y$10$ehs0pmnsSUdO7aA9Fyjt6.jl4qRCnEjYU9KnMTVF8V502qISMEc7q', 1, NULL, 3),
(460, 'Mahinya, Jackson Iman', NULL, '2019-04-05566', '$2y$10$PUIonABWLgJyAzxqq2xtduuRra96996NXmT4dCiwgB2yNYYpo2odO', 1, NULL, 3),
(461, 'Mkenda, Sophia P.', NULL, '2019-04-07338', '$2y$10$uoH64izFtM07WPXPOJzPqOOakR8SEJY/sT8J60xspS3bFysIxV3Sq', 1, NULL, 3),
(462, 'Msangi, Subira Batuli', NULL, '2019-04-08137', '$2y$10$fK7hY.KxUI8x4tx0p./mCeXxdpbawEa6CFhE1/7kngJmv55OR8NRC', 1, NULL, 3),
(463, 'Felix, Aliseni F', NULL, '2019-04-01895', '$2y$10$HXcnlOTi2wFClRr4iAYo5.rTq6G3M1eJrtRh7sp5uF4AFJ8bVZ2p2', 1, NULL, 3),
(464, 'Sempombe, Nicholaus Charles', NULL, '2019-04-11676', '$2y$10$WS7qo96KHXyM0NFBhxFc6.bjE6HxxxWzcC/1A7BBFWz/PrED7VzB2', 1, NULL, 3),
(465, 'Malima, George Robert', NULL, '2019-04-05793', '$2y$10$Iho0frd0TOT0Qqy0CzqRruP8PmRcK0DFpJhRjfV0bCKEpsPyx458y', 1, NULL, 3),
(466, 'Mushi, Wilfred A.', NULL, '2019-04-08669', '$2y$10$3yhwtdpCobyN7DPyqvWE5OYIFrpo1.I9w/OzX.Xd.W1AnRH4Qa7ei', 1, NULL, 3),
(467, 'Rashidi, Jumanne Aziz', NULL, '2019-04-10935', '$2y$10$PEy5dL2pAgnpsH51tbyhiehzyB8K3tWwc3QHeaNp5Zy.FuURzhRha', 1, NULL, 3),
(468, 'Njau, Albert V.', NULL, '2019-04-09971', '$2y$10$qf4cJTxHx.7x2pybSTz.Bu05NaVIG/uLvh0zcoXiN1YqdopOiFCCm', 1, NULL, 3),
(469, 'Masika, Benard J.', NULL, '2018-04-01664', '$2y$10$5Nu/Hs8bZfBLpPYhhe.YTOApkHOOkKHht666JnPqpa1/AsWak10bu', 1, NULL, 3),
(470, 'Bukuku, Richard J.', NULL, '2018-04-01693', '$2y$10$WuwV8cx7q61MFPPlisc02uMAQ38jZEyc/tel6nFBWcnTcA3oFlYkm', 1, NULL, 3),
(471, 'Kapiligi, Latifa M.', NULL, '2018-04-07406', '$2y$10$JPSIgHWCbZdoNxMA2nb.VOhnwMYtdhxBt016rZVZAwhvRVPUErxkO', 1, NULL, 3),
(472, 'Kilonzo, Hussein S.', NULL, '2019-04-04179', '$2y$10$ZDwg5h0YueK4Gp.6tzKZmui1LtzyJkfX.jmmnV5Z6GluQzVMFvRFy', 1, NULL, 3),
(473, 'Kimambo, Boaz Godson', NULL, '2018-04-01665', '$2y$10$ftaWyr2.ZyqBKwnhb40S4egALuJZmdfms1lZfxD3rdvSrZUrSTyva', 1, NULL, 3),
(474, 'Kisanga, Laurence Paul', NULL, '2019-04-04362', '$2y$10$mzEO9g.to1Jacf/pzv2HNep0kiEQY1Jg4oW7H/DsiDtzDbWPF7a5i', 1, NULL, 3),
(475, 'John, John Boniphace', NULL, '2018-04-01685', '$2y$10$eK2Urb5vQd/7yrFn66MUPuos9DFAuCkKGoRvZYHdA7E3r5O1ApJha', 1, NULL, 3),
(476, 'Ngao, Prince Walter', NULL, '2018-04-01692', '$2y$10$GQdJ8JoV4PN8AuUVwCbnI.huN5JYRNPnMKKAOf5AzIolWdgn/koOC', 1, NULL, 3),
(477, 'Swai, Reagan Exaudi', NULL, '2019-04-12356', '$2y$10$LRYVwPckG9lQ9pC4YdYPqOMvIkXb.sMriq3VE1ijnuB6UjG4yI35.', 1, NULL, 3),
(478, 'Saleh, Ali A.', NULL, '2018-04-07828', '$2y$10$GYlPJ/VX86U6pIDjzK3p7OmBo.ss5PQmCofmf405lqVARHb13bYVW', 1, NULL, 3),
(479, 'Kibwana, Zulfa Othman', NULL, '2019-04-04003', '$2y$10$IAkohJN6JLWfJiMgaPjNTOam7ln5.MZ3gr.9LWUcbICes5tbZHeE2', 1, NULL, 3),
(480, 'Lwanda, Erick Peter', NULL, '2019-04-05189', '$2y$10$y0ZRWo1n0ZwppsB3QuV.5O39JsGxj3cYY/ijeCyuv7zW8ZdM8EEjC', 1, NULL, 3),
(481, 'Mwalyolo, Tukupala M.', NULL, '2018-04-01694', '$2y$10$spdxmEnh.n79CmUYd8V/ie5FPWAANzL2sNLEx3N/ayl/bL.bASBbG', 1, NULL, 3),
(482, 'Bawazi, Arshad O.', NULL, '2019-04-00767', '$2y$10$6jzfAl4EduIpbZ1hsobRDuuW7IOaT7quGzCdUyhqW5TMy6vnM5k/6', 1, NULL, 3),
(483, 'Mjule, Winstone M.', NULL, '2019-04-07303', '$2y$10$cM1GvY7et2OZcLToQa01GuqjbbhLG/RtHpMMoBMkSksnlbBbpF8Um', 1, NULL, 3),
(484, 'Simfukwe, Aaron Gervas', NULL, '2018-04-06786', '$2y$10$JL4CK5d8hXqwbCpbVQ3vO.rjN8MVuLdvWn/wzoVDXFjp7daEep1TK', 1, NULL, 3),
(485, 'Assey, Anna-maria Geofrey', NULL, '2019-04-00516', '$2y$10$ZVwiXf.yuE2xIMDI8VxLcumUXoxJFaKhdCmAafSwDGB/NN6WJM4mS', 1, NULL, 3),
(486, 'Mtui, Alex G.', NULL, '2018-04-01660', '$2y$10$6yFPAk.BhzXAb1SaUPcj1Oxqy4/TBddgagRNiNGEeApvQAZyr9hEO', 1, NULL, 3),
(487, 'Oshipai, Saning\'o M.', NULL, '2019-04-11554', '$2y$10$zQ02Kb3fWvxXNIVlEWHiyeG9qC08R38BSBXRqZA0g.YsmXX96GrVG', 1, NULL, 3),
(488, 'Kasaila, Yohana S.', NULL, '2019-04-03649', '$2y$10$hhTmRRRCKvzNYmlF5N3Kx.1Kmq9ED9C.mhfl0BndrHyNeu/yNVAo6', 1, NULL, 3),
(489, 'Scolastica, John S.', NULL, '2019-04-11464', '$2y$10$r9fWYsdOie4KAVhtoz.yI.DvxxWLm9rME80Ia0sMRONnUDEm130By', 1, NULL, 3),
(490, 'Ndyanabo, Pauletha Simon', NULL, '2019-04-09692', '$2y$10$RFnlvuOTe1o3QgMIXRBa0.E3DKB.kr32Um0WcuILb7SP0xeQMBcMy', 1, NULL, 3),
(491, 'Masandeko, Kelvin M.', NULL, '2018-04-01688', '$2y$10$0fxikXVoSZQ03AX8owdHIOUyRgcRHXxgIQpirxdIU2qL6SvEL1GJ6', 1, NULL, 3),
(492, 'Ilomo, Kaiza F', NULL, '2019-04-02632', '$2y$10$SSvU/FfPjfOwUJSZxx59XuKlfv4PS9nVEV/o0XHQWO6CJ.bH0FH2e', 1, NULL, 3),
(493, 'Mlangwa, Ronald D.', NULL, '2019-04-07476', '$2y$10$r.RxC9TK3.yMgjXu6g9fjOf/PQHWtSbuvcPqdUGrulvDD/Dfazv/q', 1, NULL, 3),
(494, 'Karoza, Alpha Obed', NULL, '2019-04-10379', '$2y$10$Li/T3yzind6WWlhRN3EfkeMtLWTZP4PtE9IxiDcGyaM53zkYpW5we', 1, NULL, 3),
(495, 'Senya, Collin E.', NULL, '2019-04-11704', '$2y$10$cFRTMHda4PZbxz5fNCLSVOsQvYZduuyj.OUN6aHY83koewOq2zsAy', 1, NULL, 3),
(496, 'Shedrack, Glastborn G.', NULL, '2019-04-11839', '$2y$10$NfXhPZ3gKhujO6FEl/WnN.AbpHU1d8iFn.woMBDMRzAM3XBkn13b6', 1, NULL, 3),
(497, 'Shemdoe, Erick I.', NULL, '2018-04-02411', '$2y$10$hFlobgGEKXdfeXk9fxqu8OGs.VgSouaritG1ZZ/ljpFIYrh2DeJAe', 1, NULL, 3),
(498, 'Kheri, Ibrahim Ramadhan', NULL, '2019-04-03950', '$2y$10$0KJqRTt.GAXOLpcjH6PhoekKY3BNpatgmRBLYiuq89SbqL6vohE22', 1, NULL, 3),
(499, 'Lyaganda, Masanja', NULL, '2019-04-05208', '$2y$10$QVB9zhsqyyA029c0WFN.1u1BL9wJNiWll9EgAmQp56RRDtBlSXgVu', 1, NULL, 3),
(500, 'Minja, Arthur Benjamin', NULL, '2019-04-07251', '$2y$10$ZQMOWawiLOjzd5z.hGM4SOE/dIwxX.c1VxoXBnuqJESsIohUEftFe', 1, NULL, 3),
(501, 'Kajubu, Azim Khalid', NULL, '2018-04-01663', '$2y$10$xWFhn6iS6F4iifxq9TCb5.c.r3nAkO9WoWMidoDa1RubcFC7f50JG', 1, NULL, 3),
(502, 'Woiso, Gabriela R.', NULL, '2019-04-13149', '$2y$10$dQ6udgrdIWRbMnGEM57wDut2zeM3RDVrilHDXXdJJykeKL6/FS/Mi', 1, NULL, 3),
(503, 'Moses, Richard Estomih', NULL, '2018-04-02438', '$2y$10$s6LZ9btKAVpWELlns9Qk/eiDYzuiAxQPlNWd/NnXwVqf0UClM0ypS', 1, NULL, 3),
(504, 'Rwehumbiza, Aron', NULL, '2018-04-01662', '$2y$10$k3QMwEIPvns7ePZXGnYg4uQBEcTQuTEUbhC.yjeYKm/elZYl0BQCm', 1, NULL, 3),
(505, 'Masami, Rodney Paul', NULL, '2019-04-06109', '$2y$10$sW0/Nvz1t1fIIOk4DxB.Z.OwF1xuOkMc89psuxXkcqPocL2OIXgGa', 1, NULL, 3),
(506, 'Michese, Deogratius Henry', NULL, '2019-04-07167', '$2y$10$y7WWUXZ1AJFI1AQD9Z5DOeM.qtGzOcIzxygFGZ/HgWNeqrhj/TQjq', 1, NULL, 3),
(507, 'Liwaha, Jackson Stephen', NULL, '2019-04-04957', '$2y$10$Q0uJOr4n6tf6X3V.Rw7ob.9C/0/p/9dajUbqVD6c3LE5NoiYGFfmq', 1, NULL, 3),
(508, 'Akaka, Thomas D.', NULL, '2019-04-00180', '$2y$10$L8c1zJEq.uyw0DsWksC6jeinzdDBBWNA6mzb86Qoa1M8kW4i54e8.', 1, NULL, 3),
(509, 'Mniachi, Mariam Ally', NULL, '2019-04-07642', '$2y$10$cW0c4DQP5sIENipssxFzbuIdbwqEdNrxurVHH0nl.EyY0hlykN0rO', 1, NULL, 3),
(510, 'Mahenge, Christina', NULL, '2019-04-05542', '$2y$10$9l0p1Xsv0NoOB5xxg7DKZemANTqNm4q6oum8tn.QKPPCI6Ux.Sx2C', 1, NULL, 3),
(511, 'Mwemezi, Angela Jovin', NULL, '2019-04-09335', '$2y$10$h4sA6c3OfVWOM5E3KnqL5uPuri.oOy6xLql/TIIzBnb0nvO6nN07K', 1, NULL, 3),
(512, 'Mbalyo, Daniel John', NULL, '2019-04-06561', '$2y$10$B53szXncdis6O5861xXvtOvs8Nrn17cRatjbusucp8x9QP2ljn1Ma', 1, NULL, 3),
(513, 'Ndilanha, Vivian E', NULL, '2019-04-09619', '$2y$10$12nuzRBdfMKaJwNq3sqmEOhoZIW7O7JpAWyWTeSFVteV39okXA/Rq', 1, NULL, 3),
(514, 'Massay, Emanuel Tlatlaa', NULL, '2018-04-01672', '$2y$10$6omKiO18R3rb9qM4HFl2Q.iBILz0DbhTj.xMRA07UWKWYAsxNvNZi', 1, NULL, 3),
(515, 'Kanuwa, Shabani Ramadhani', NULL, '2019-04-03565', '$2y$10$OVX0GoIFR5RcgPlywekHseQa2z4shfJFxWxnW1kda4yQXGBPSzTr2', 1, NULL, 3),
(516, 'Kyaruzi, Shamira S.', NULL, '2019-04-04743', '$2y$10$jQcPey5Re/JoUjwh68gilesqrMCRCjm7kxHno14bM5/nxStAnO26u', 1, NULL, 3),
(517, 'Issa, Hilal H.', NULL, '2018-04-01682', '$2y$10$.i8azWwTiUkGnJOJh5zBbO6UEryXjAYfOHd.EtQ.csRX49tWRFaam', 1, NULL, 3),
(518, 'Jebe, Mbelwa A.', NULL, '2019-04-02822', '$2y$10$6zG.K5GHeaICDXXOibLx0.zQNp.xALfXemURxnGZtAjMN6cBkL8D.', 1, NULL, 3),
(519, 'Machuve, Alice T.', NULL, '2019-04-05343', '$2y$10$AjAHeMggh5jesrXScxgtgu0wk3ljRSp61N213sR.IsiEmd50vf2ge', 1, NULL, 3),
(520, 'Kapfumvuti, Dion Ishe', NULL, '2019-04-01597', '$2y$10$ae74dFPdvNqY/IMWwM2JYOkh9dMR9UJo7MOf6S0fEbh7BYVEb57XS', 1, NULL, 3),
(521, 'Xibona, Jesse A.', NULL, '2019-04-12918', '$2y$10$8UBZxcFGzlHQ5MQa7EqxTefpkSA/Hct9SBcQgyRdo4TKtggaz6Jbq', 1, NULL, 3),
(522, 'Mwakwilusa, Imani A.', NULL, '2018-04-01684', '$2y$10$YGUAYKm0S3rwTv8pEizBdunPa.U1LpcUGRrzqeh4vTrI/5YPTvqHe', 1, NULL, 3),
(523, 'David, Beatrice', NULL, '2019-04-01510', '$2y$10$6oEPjjnuyOxvamjfgHhZfeO5ntCUM3974plBtvMAStIQSV4mCGCXa', 1, NULL, 3),
(524, 'Ikunda, Elvis Neville', NULL, '2018-04-01669', '$2y$10$9zzsI3u5X36JOH.WByAPU.6VeECtnNFLxeOdWkU882MdGcLeU0omK', 1, NULL, 3),
(525, 'Dr Mdeme', 'mathewmndeme@udsm.ac.tz', NULL, '$2y$10$ByiCtnUm.PiQDYiNFl4UrOC6QNjP9WIbu3oeAdNtNq1GS4qr/kvfe', 2, NULL, NULL),
(526, 'Dr. Godfrey N. Justo', 'njulumi@gmail.com', 'NULL', '$2y$10$V05tlM.T50zcfMuiSqaQje4rkRMFxW8RVSaBT7auVoDNXKwvcjAeS', 3, NULL, NULL),
(527, 'Dr. Juma H.Lungo', 'jlungo@udsm.ac.tz', 'NULL', '$2y$10$INs91UEX3aU9aHUcXlG4feIyTylg4M2N5.x/dZZxPO1HJEhuYIjoC', 3, NULL, NULL),
(528, 'Dr. Ruth Kateule', 'macky@yahoo.com', 'NULL', '$2y$10$4E2BbrrrF85az33HJAOKM.KYSsrJi.mGIFCRRL.mOAXvqzcrcu3b2', 3, NULL, NULL),
(529, 'Dr. Wilfred Senyoni', 'senyoni@gmail.com', 'NULL', '$2y$10$cI3.w6H87/gaHk7b/D9ZiuS//mDV7mSm/qamtj2SLmGIKNWvfi9L2', 3, NULL, NULL),
(530, 'Dr. Aron W. Kondoro', 'awkondoro@gmail.com', 'NULL', '$2y$10$5O0V6iwrOWNQq2d5CC71bOuGx/rE3wyHZyuY/FaTiA/OzaJ44nrBW', 3, NULL, NULL),
(531, 'Dr. Fatuma Simba', 'fatmasimba@gmail.com', 'NULL', '$2y$10$OCoJ7IiC9P8GjOwJo7cto.QsHsvBpNXw9HM3e6P0nQIrdrB6AvIHe', 3, NULL, NULL),
(532, 'Dr. Abdullah Ally', 'abdull01tzy@yahoo.com', 'NULL', '$2y$10$8plhH8ed70eUwGdisdL8HeWdWWbBnLK7fLTwKObo1q37OxuwWb8dO', 3, NULL, NULL),
(533, 'Dr. Leonard P. Binamungu', 'lepebina@udsm.ac.tz', 'NULL', '$2y$10$wC/zdjFM5YrtGwWkncaKHuYuqoKpdlphC/IMTmW1LXzXNg/MtIgK6', 3, NULL, NULL),
(534, 'Dr. Hellen Maziku', 'nahelna@gmail.com', 'NULL', '$2y$10$q7jaVp1r.Kc3R1Vh0S1tV.e9nqIB4WZ7vl3.21mOkOpT8J3T5hGZ6', 3, NULL, NULL),
(535, 'Dr. Jimmy Mbelwa', 'jmbelwa@yahoo.co.uk', 'NULL', '$2y$10$r3C70w8xzMxuUIm9UF20iOsW0lkPAhSarJ9/Y83XbnRPxJSoN5I4q', 3, NULL, NULL),
(536, 'Dr. Joseph C. Mushi', 'mushyjc@gmail.co.tz', 'NULL', '$2y$10$3xg7luWS0YdAz2N8TcLifOBirc7HLf6NptMgJXBoAYeZwArJMzap2', 3, NULL, NULL),
(537, 'Dr. James Chambua', 'james.chambua@udsm.ac.tz', 'NULL', '$2y$10$3xg7luWS0YdAz2N8TcLifOBirc7HLf6NptMgJXBoAYeZwArJMzap2', 3, NULL, NULL),
(538, 'Dr. Wilbard Nyamwihula', 'wbilungi@yahoo.com', 'NULL', '$2y$10$1jcFeycpJNKN2v6vwW6JV.naGY547CymTR/elrL76GwHndLhpk7SG', 3, NULL, NULL),
(539, 'Dr. Salome H. Maro', 'salomehonest@gmail.com', 'NULL', '$2y$10$hT59NWZzmEW1lTjfoFsYguqc2o3LHInxhyQCmvA.cTA32iq19eIE6', 3, NULL, NULL),
(540, 'Dr. Frank Kennedy', 'kenfactz@gmail.com', 'NULL', '$2y$10$iplqyDCKcIVvDqkDxOG0m.PvfZQSg5JgiJ1pCy8FAo7Z5Mb8WUKDe', 3, NULL, NULL),
(541, 'Dr. Masoud H. Mahundi', 'mmahundi97@gmail.com', 'NULL', '$2y$10$Eqatzsjz4.fb5gH9YW43DenLLFHzZI26BKjASuyvVbNqEiUpaRc92', 3, NULL, NULL),
(542, 'Dr. Daudi Mnyanghwalo', 'info@cse.udsm.ac.tz', 'NULL', '$2y$10$sLoYQbbQJo/YI/0ELysg6umIV7CC3iLrHtSLE/TCYu7pWW9dX2bnG', 3, NULL, NULL),
(543, 'Dr. Yonah Andengelile', 'yona.andengelile@gmail.com', 'NULL', '$2y$10$gwUg/VySE24sx3HImDyoeuluXwXA7I2MwcMGE4wk7ekgGMMSf36ue', 3, NULL, NULL),
(544, 'Dr. Honest C. Kimaro', 'honest_c@yahoo.com', 'NULL', '$2y$10$pUZguJhr11PyJVGwctsOBua01XSLHO2wKib5cmyge6jB7NkcpctKq', 3, NULL, NULL),
(545, 'Dr. Ellen A Kalinga', 'ellenakchale@gmail.com', 'NULL', '$2y$10$TOLdAydMXsPrYG3NWMkMxuQRr6GMLUOzl9uZkoPsorQqb.CzA5yaG', 3, NULL, NULL),
(546, 'Dr Mercy Mbise', 'mmbise@udsm.ac.tz', NULL, '$2y$10$KVCEZ5Y.OtYe2kGOS0klk.PftD/qtVOzbKilFZDGQJ9RxJeZ5qBAC', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `venue` varchar(23) NOT NULL,
  `venue_capacity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `venue`, `venue_capacity`) VALUES
(1, 'D01', 300),
(2, 'B302', 200),
(3, 'B307', 100),
(4, 'B310', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachingmonitoring_questions`
--
ALTER TABLE `teachingmonitoring_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `samples`
--
ALTER TABLE `samples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachingmonitoring_questions`
--
ALTER TABLE `teachingmonitoring_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=547;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teachingmonitoring_questions`
--
ALTER TABLE `teachingmonitoring_questions`
  ADD CONSTRAINT `teachingmonitoring_questions_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `courses` (`course_code`),
  ADD CONSTRAINT `teachingmonitoring_questions_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `courses` (`course_code`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
