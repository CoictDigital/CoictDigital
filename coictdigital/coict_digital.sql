-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: coict_digital
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumni` (
  `alumni_name` varchar(100) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `year_completed` int NOT NULL,
  `gpa` varchar(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumni`
--

LOCK TABLES `alumni` WRITE;
/*!40000 ALTER TABLE `alumni` DISABLE KEYS */;
INSERT INTO `alumni` VALUES ('Zizima, Frank Y','BSC IN BIT',2022,'4.3','zizimayotham669@gmail.com','0785248794','UDSM');
/*!40000 ALTER TABLE `alumni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `course_code` varchar(200) NOT NULL,
  `study_year` int NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `instructor` varchar(200) DEFAULT NULL,
  `venue` varchar(200) DEFAULT NULL,
  `class_size` int NOT NULL DEFAULT '0',
  `department` varchar(200) DEFAULT NULL,
  `college` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assistant` varchar(100) DEFAULT NULL,
  `semester` int DEFAULT NULL,
  PRIMARY KEY (`course_code`,`study_year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES ('IE 445',3,'Entrapreneurship for Engineer','Dr Taifa','Yombo 5',329,'CSE','CoICT','2022-05-31 14:37:03',NULL,2),('IE 445',4,'Entrapreneurship for Engineer','Dr Taifa','Yombo 5',329,'CSE','CoICT','2022-06-01 09:02:20',NULL,2);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evaluation` (
  `reg_no` varchar(200) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `study_year` int DEFAULT NULL,
  `student_programme` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluation`
--

LOCK TABLES `evaluation` WRITE;
/*!40000 ALTER TABLE `evaluation` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluation_questions`
--

DROP TABLE IF EXISTS `evaluation_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evaluation_questions` (
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
  `harassment_explanation` text,
  `id` int NOT NULL AUTO_INCREMENT,
  `programme_id` int NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `programme_id` (`programme_id`),
  CONSTRAINT `evaluation_questions_ibfk_1` FOREIGN KEY (`programme_id`) REFERENCES `programme` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluation_questions`
--

LOCK TABLES `evaluation_questions` WRITE;
/*!40000 ALTER TABLE `evaluation_questions` DISABLE KEYS */;
INSERT INTO `evaluation_questions` VALUES ('IE 445','5','2','1','2','4','3','4','3','4','1','2','1','2','2','2','4','2','3','4','Tenet',17,1,'2022-05-31 16:44:08'),('IE 445','5','2','1','2','4','3','4','3','4','1','1','1','2','2','2','4','2','3','4','',18,1,'2022-05-31 16:44:35'),('IE 445','5','2','1','2','4','3','4','3','4','1','2','1','2','2','2','4','2','3','4','Tenetur ad do ex rer',19,1,'2022-05-31 16:45:12'),('IE 445','5','2','1','2','4','3','4','3','4','1','2','1','2','2','2','4','2','3','4','Tenetur ad do ex rer',20,1,'2022-05-31 16:47:48');
/*!40000 ALTER TABLE `evaluation_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programme`
--

DROP TABLE IF EXISTS `programme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programme` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_programme` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programme`
--

LOCK TABLES `programme` WRITE;
/*!40000 ALTER TABLE `programme` DISABLE KEYS */;
INSERT INTO `programme` VALUES (1,'BSC IN CS'),(2,'BSC IN CEIT'),(3,'BSC IN BIT');
/*!40000 ALTER TABLE `programme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programme_course`
--

DROP TABLE IF EXISTS `programme_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programme_course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_programme` int NOT NULL,
  `course_code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_programme` (`id_programme`),
  KEY `course_code` (`course_code`),
  CONSTRAINT `programme_course_ibfk_1` FOREIGN KEY (`id_programme`) REFERENCES `programme` (`id`),
  CONSTRAINT `programme_course_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `courses` (`course_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programme_course`
--

LOCK TABLES `programme_course` WRITE;
/*!40000 ALTER TABLE `programme_course` DISABLE KEYS */;
INSERT INTO `programme_course` VALUES (1,1,'IE 445');
/*!40000 ALTER TABLE `programme_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'student'),(2,'senior'),(3,'staff');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_response`
--

DROP TABLE IF EXISTS `user_response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_response` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `course_code` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `response` (`course_code`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_response_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `user_response_ibfk_3` FOREIGN KEY (`course_code`) REFERENCES `courses` (`course_code`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_response`
--

LOCK TABLES `user_response` WRITE;
/*!40000 ALTER TABLE `user_response` DISABLE KEYS */;
INSERT INTO `user_response` VALUES (1,1,'IE 445');
/*!40000 ALTER TABLE `user_response` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `reg_no` varchar(250) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `role` int unsigned DEFAULT NULL,
  `student_programme` varchar(100) DEFAULT NULL,
  `study_year` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`role`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=526 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mlundi, Wanzita Raymound',NULL,'2019-04-07563','$2y$10$s7nGNNzSUmuZXwC9Tpto7O1H6jv9owqia7ynExm1mJTwjqwVZqoLK',1,'BSC IN CS',3),(422,'Mwakatimbo, Elizabeth A.',NULL,'2019-04-08908','$2y$10$/8gy4txhfdLWu4Bkgw6MVu3R6G9nT5a/4u0uH5BLpC7UkF.VGjlPO',1,'BSC IN BIT',3),(423,'Reuben, Adam William',NULL,'2019-04-10982','$2y$10$wBpfiMradIKOJMsQsCk.fOIoicfx4mIGayoQpgX25pIDEBfpjk.7m',1,'BSC IN BIT',3),(424,'Mustapha, Saidi Seifdin',NULL,'2018-04-02441','$2y$10$2QzBli2C9jf3dRiWO0E41OWx1hLLFIl5.eFPd3UNFDG.Scvt5GJ1i',1,'BSC IN BIT',3),(425,'Mlay, Calvin Swaty',NULL,'2017-04-07308','$2y$10$wHjQCDn3eDmVegt55.sEKubXdOFlUPckazRbOw5Pu1ev5I.bz93.K',1,'BSC IN BIT',3),(426,'Mrema, Gloria Huggon',NULL,'2019-04-08035','$2y$10$URI2nz.iBKhcT6Din5g0Ue95qigArn7tgTuwC0lyRxbQZtO2eYOgi',1,'BSC IN BIT',3),(427,'Kunda, Michael John',NULL,'2019-04-04658','$2y$10$5QL693wqctgRZzULoDkBseuM81E7IHj6.QoMQ6DM6kVsxGd68NbfG',1,'BSC IN BIT',3),(428,'Chiutila, Nielsen W.',NULL,'2019-04-01304','$2y$10$eUszsnOFU.6foAn1LrljfuxBDx3l/q.1KXKSgbQJ.4CA1KNUniIxC',1,'BSC IN BIT',3),(429,'Mganga, Jackson Francis',NULL,'2019-04-06965','$2y$10$p7dghk7WwFTQ66dukuCquuCbzgtzuWgMKDZK1qnzgamFFJOtuvPQW',1,'BSC IN BIT',3),(430,'Rajabu, Juma S.',NULL,'2019-04-10833','$2y$10$wcY3LZ/Czv8zqn3MP6vVgObKnvmW5ioxy1NpVPPR9N9DwjFdowCL.',1,'BSC IN BIT',3),(431,'Mallya, Habil Raphael',NULL,'2019-04-05826','$2y$10$GwPbi4Ta8eN.YDFXGQ2gIOVjnfeVK/MPX1rdJzkFOrQdpmoRAC7Pq',1,'BSC IN BIT',3),(432,'Senkoro, Daniel A.',NULL,'2019-04-11702','$2y$10$2RLFHGl8H8cqY9kFcIbmfOJnn3xydhhuByiyN16i1M1PMNL3RhlSi',1,'BSC IN BIT',3),(433,'Kapungu, Noel K',NULL,'2019-04-03618','$2y$10$2o/v5Z3taPiTRiDrOhnOluE4jQQbaQtGgckl8QIPwXM1AltKQO8LS',1,'BSC IN BIT',3),(434,'Kibonajoro, Ackram S.',NULL,'2017-04-07278','$2y$10$Gl60FhXmDXIFeX8KD3MeSOnA6v.2efJQ3X2tlCel5Ca9JP3hW/HLK',1,'BSC IN BIT',3),(435,'Mrema, Elvis G.',NULL,'2018-04-01670','$2y$10$4HnhZLHJbHgzafwH8MpbFu5/FSMGkYw0NyX5Ql08l80V.YWAuZCJe',1,'BSC IN BIT',3),(436,'Thomas, Mathias',NULL,'2019-04-12582','$2y$10$9ITFhCQe/6NUx8egvFJzXeC6WnsNoDu4iwmZG5UGcRnuQ7dxTl6Ma',1,'BSC IN BIT',3),(437,'Muhenga, Said Zuberi',NULL,'2019-04-08524','$2y$10$SFPzi5IgEVlQOtWyyXc0qu43bPT7QgQqiaUk1LsA81yWrlqXfjxPe',1,'BSC IN BIT',3),(438,'Mussa, Yussuf Hamad',NULL,'2018-04-07846','$2y$10$7EbU.UbmyQYTtPuMc1tpuuAl95DOQ2pTiKGWnqM.lvOKhrnrVk98y',1,'BSC IN BIT',3),(439,'Rweyemamu, Herdt',NULL,'2018-04-07268','$2y$10$eEM.ejsA3Cm8QQBbayh.muw7Hn/86XtWxngDhO6guXU.sTx6jmiWa',1,'BSC IN BIT',3),(440,'Kweka, Deborah C.',NULL,'2019-04-04703','$2y$10$2yC2PAlX62Gpg6xkgDmwWuU8qLiamKged3MqMMbeFw5snQGBSwYR.',1,'BSC IN BIT',3),(441,'Edward, Leonard M.',NULL,'2019-04-01677','$2y$10$avakKlkn0z/rruSEAWZjbe1u/5yzhrNXgwLqfvK/afDYYelzA1iCa',1,'BSC IN BIT',3),(442,'Mbuge, Richard Charles',NULL,'2019-04-06696','$2y$10$/3jzp7oswCSwcYRM3iBkWOoQcGVpAxLgUHNzF6arP62lHf9krL7cS',1,'BSC IN BIT',3),(443,'Mwalukisa, Walter P.',NULL,'2019-04-08989','$2y$10$ccZtZC6znl.oV9xFVJ951e8jGtFwdxXTvMjCbS6KAksNyNegt9vTi',1,'BSC IN BIT',3),(444,'Ngaharo, Neema Rashid',NULL,'2019-04-09742','$2y$10$F9UNLk8QYkl/RlCd9kWhQ.dZf8iOVzONJ6N2ygp1q/AQ6PKpVhIFy',1,'BSC IN BIT',3),(445,'Charukula, Jimmy Benjamin',NULL,'2019-04-01182','$2y$10$9V2TulMwkOhwzL//RUNdM.UXsGtEEVgVKbeorXRkGQvh81qXf1QZ2',1,'BSC IN BIT',3),(446,'Mayenga, Richard E',NULL,'2019-04-06515','$2y$10$soSBUdxQTF6EQdw.GjtcsuoDvXCjAZfX2wqj27JMyNBTdVQgiJDrO',1,'BSC IN CS',3),(447,'Mosha, Godbless Huruma',NULL,'2019-04-07868','$2y$10$XeEBCaIS1O.arZ0oUmgDBOXcZOuM96KKDNPiivoLflCxzuYFoPwr2',1,'BSC IN CS',3),(448,'Juma, Emmanuel E.',NULL,'2018-04-10886','$2y$10$gOgrwybJBCFEAyzZD1a9vOVYuS744teiiiyMpoNZXG83pJG5nAq1.',1,'BSC IN CS',3),(449,'Lemunke, Emaculate Sein',NULL,'2018-04-01671','$2y$10$vlZMXMF6gBHvg.q.ochBAubUSyT5TlpYRuMLodZ.4baIopyy83kia',1,'BSC IN CS',3),(450,'Saleh, Ttuwr Abood',NULL,'2019-04-11318','$2y$10$ZiL1ClDtfa1i7KHokYMvLeA2BHnqS1JjU4ce9r7zHlSBkIS.1Cooq',1,'BSC IN CS',3),(451,'Masali, Emanuel',NULL,'2018-04-07138','$2y$10$shhIlcuABfPHzKuwnB05yOiD/CMwmQjSoj19xzxMD7hZ3EDNsYUUi',1,'BSC IN CS',3),(452,'Mlowe, Anneth N.',NULL,'2019-04-07548','$2y$10$gNc8Jm8eEDYvnwzSToJf7uuNo5ZJ7yuFxB4lrz2.HHyZSW6OufOge',1,'BSC IN CS',3),(453,'Salum, Zuwena Hamoud',NULL,'2018-04-01698','$2y$10$d9HFhYm8OM2wdkEmAgHeKeUKbiW3rjD1DEVQShrEwtc84Rhq//GGu',1,'BSC IN CS',3),(454,'Mwilawa, Amos A.',NULL,'2019-04-09370','$2y$10$LmYXEA53VHsUTYLrtiSOUO9DEYjVIBvWbqwFvOxW5kw68VFuzvYl.',1,'BSC IN CS',3),(455,'Malamla, Millenium Anthony',NULL,'2019-04-05753','$2y$10$HZZ21N45WvIpO2/A36Cmcu5nV0OCyNuf8sGoBvDV8xo5AWm1df4Aa',1,'BSC IN CS',3),(456,'Gwesa, Fumbuka Njile',NULL,'2019-04-02215','$2y$10$RU3BZLowhkUIu0To6iJ.9.xyrgiAXe7WjApqsgWPQ/SmYksnQ1TXq',1,'BSC IN CS',3),(457,'Ndilanha, Vivian E',NULL,'2019-04-09619','$2y$10$.LmtmIoJC45zDt0FRpaKze7luITWWe7rxOL0Mj./axJerv9yJZFQ.',1,'BSC IN CS',3),(458,'Zizima, Yotham K.',NULL,'2019-04-03484','$2y$10$9iXEoWymEb84pzSCoZ2WMOeyoOxznPz0tfWWDwMFzUav2/vf79Fk.',1,'BSC IN CS',3),(459,'Mlaki, Japhet January',NULL,'2019-04-07467','$2y$10$ehs0pmnsSUdO7aA9Fyjt6.jl4qRCnEjYU9KnMTVF8V502qISMEc7q',1,'BSC IN CS',3),(460,'Mahinya, Jackson Iman',NULL,'2019-04-05566','$2y$10$PUIonABWLgJyAzxqq2xtduuRra96996NXmT4dCiwgB2yNYYpo2odO',1,'BSC IN CS',3),(461,'Mkenda, Sophia P.',NULL,'2019-04-07338','$2y$10$uoH64izFtM07WPXPOJzPqOOakR8SEJY/sT8J60xspS3bFysIxV3Sq',1,'BSC IN CS',3),(462,'Msangi, Subira Batuli',NULL,'2019-04-08137','$2y$10$fK7hY.KxUI8x4tx0p./mCeXxdpbawEa6CFhE1/7kngJmv55OR8NRC',1,'BSC IN CS',3),(463,'Felix, Aliseni F',NULL,'2019-04-01895','$2y$10$HXcnlOTi2wFClRr4iAYo5.rTq6G3M1eJrtRh7sp5uF4AFJ8bVZ2p2',1,'BSC IN CS',3),(464,'Sempombe, Nicholaus Charles',NULL,'2019-04-11676','$2y$10$WS7qo96KHXyM0NFBhxFc6.bjE6HxxxWzcC/1A7BBFWz/PrED7VzB2',1,'BSC IN CS',3),(465,'Malima, George Robert',NULL,'2019-04-05793','$2y$10$Iho0frd0TOT0Qqy0CzqRruP8PmRcK0DFpJhRjfV0bCKEpsPyx458y',1,'BSC IN CS',3),(466,'Mushi, Wilfred A.',NULL,'2019-04-08669','$2y$10$3yhwtdpCobyN7DPyqvWE5OYIFrpo1.I9w/OzX.Xd.W1AnRH4Qa7ei',1,'BSC IN CS',3),(467,'Rashidi, Jumanne Aziz',NULL,'2019-04-10935','$2y$10$PEy5dL2pAgnpsH51tbyhiehzyB8K3tWwc3QHeaNp5Zy.FuURzhRha',1,'BSC IN CS',3),(468,'Njau, Albert V.',NULL,'2019-04-09971','$2y$10$qf4cJTxHx.7x2pybSTz.Bu05NaVIG/uLvh0zcoXiN1YqdopOiFCCm',1,'BSC IN CS',3),(469,'Masika, Benard J.',NULL,'2018-04-01664','$2y$10$5Nu/Hs8bZfBLpPYhhe.YTOApkHOOkKHht666JnPqpa1/AsWak10bu',1,'BSC IN CS',3),(470,'Bukuku, Richard J.',NULL,'2018-04-01693','$2y$10$WuwV8cx7q61MFPPlisc02uMAQ38jZEyc/tel6nFBWcnTcA3oFlYkm',1,'BSC IN CS',3),(471,'Kapiligi, Latifa M.',NULL,'2018-04-07406','$2y$10$JPSIgHWCbZdoNxMA2nb.VOhnwMYtdhxBt016rZVZAwhvRVPUErxkO',1,'BSC IN CEIT',3),(472,'Kilonzo, Hussein S.',NULL,'2019-04-04179','$2y$10$ZDwg5h0YueK4Gp.6tzKZmui1LtzyJkfX.jmmnV5Z6GluQzVMFvRFy',1,'BSC IN CEIT',3),(473,'Kimambo, Boaz Godson',NULL,'2018-04-01665','$2y$10$ftaWyr2.ZyqBKwnhb40S4egALuJZmdfms1lZfxD3rdvSrZUrSTyva',1,'BSC IN CEIT',3),(474,'Kisanga, Laurence Paul',NULL,'2019-04-04362','$2y$10$mzEO9g.to1Jacf/pzv2HNep0kiEQY1Jg4oW7H/DsiDtzDbWPF7a5i',1,'BSC IN CEIT',3),(475,'John, John Boniphace',NULL,'2018-04-01685','$2y$10$eK2Urb5vQd/7yrFn66MUPuos9DFAuCkKGoRvZYHdA7E3r5O1ApJha',1,'BSC IN CEIT',3),(476,'Ngao, Prince Walter',NULL,'2018-04-01692','$2y$10$GQdJ8JoV4PN8AuUVwCbnI.huN5JYRNPnMKKAOf5AzIolWdgn/koOC',1,'BSC IN CEIT',3),(477,'Swai, Reagan Exaudi',NULL,'2019-04-12356','$2y$10$LRYVwPckG9lQ9pC4YdYPqOMvIkXb.sMriq3VE1ijnuB6UjG4yI35.',1,'BSC IN CEIT',3),(478,'Saleh, Ali A.',NULL,'2018-04-07828','$2y$10$GYlPJ/VX86U6pIDjzK3p7OmBo.ss5PQmCofmf405lqVARHb13bYVW',1,'BSC IN CEIT',3),(479,'Kibwana, Zulfa Othman',NULL,'2019-04-04003','$2y$10$IAkohJN6JLWfJiMgaPjNTOam7ln5.MZ3gr.9LWUcbICes5tbZHeE2',1,'BSC IN CEIT',3),(480,'Lwanda, Erick Peter',NULL,'2019-04-05189','$2y$10$y0ZRWo1n0ZwppsB3QuV.5O39JsGxj3cYY/ijeCyuv7zW8ZdM8EEjC',1,'BSC IN CEIT',3),(481,'Mwalyolo, Tukupala M.',NULL,'2018-04-01694','$2y$10$spdxmEnh.n79CmUYd8V/ie5FPWAANzL2sNLEx3N/ayl/bL.bASBbG',1,'BSC IN CEIT',3),(482,'Bawazi, Arshad O.',NULL,'2019-04-00767','$2y$10$6jzfAl4EduIpbZ1hsobRDuuW7IOaT7quGzCdUyhqW5TMy6vnM5k/6',1,'BSC IN CEIT',3),(483,'Mjule, Winstone M.',NULL,'2019-04-07303','$2y$10$cM1GvY7et2OZcLToQa01GuqjbbhLG/RtHpMMoBMkSksnlbBbpF8Um',1,'BSC IN CEIT',3),(484,'Simfukwe, Aaron Gervas',NULL,'2018-04-06786','$2y$10$JL4CK5d8hXqwbCpbVQ3vO.rjN8MVuLdvWn/wzoVDXFjp7daEep1TK',1,'BSC IN CEIT',3),(485,'Assey, Anna-maria Geofrey',NULL,'2019-04-00516','$2y$10$ZVwiXf.yuE2xIMDI8VxLcumUXoxJFaKhdCmAafSwDGB/NN6WJM4mS',1,'BSC IN CEIT',3),(486,'Mtui, Alex G.',NULL,'2018-04-01660','$2y$10$6yFPAk.BhzXAb1SaUPcj1Oxqy4/TBddgagRNiNGEeApvQAZyr9hEO',1,'BSC IN CEIT',3),(487,'Oshipai, Saning\'o M.',NULL,'2019-04-11554','$2y$10$zQ02Kb3fWvxXNIVlEWHiyeG9qC08R38BSBXRqZA0g.YsmXX96GrVG',1,'BSC IN CEIT',3),(488,'Kasaila, Yohana S.',NULL,'2019-04-03649','$2y$10$hhTmRRRCKvzNYmlF5N3Kx.1Kmq9ED9C.mhfl0BndrHyNeu/yNVAo6',1,'BSC IN CEIT',3),(489,'Scolastica, John S.',NULL,'2019-04-11464','$2y$10$r9fWYsdOie4KAVhtoz.yI.DvxxWLm9rME80Ia0sMRONnUDEm130By',1,'BSC IN CEIT',3),(490,'Ndyanabo, Pauletha Simon',NULL,'2019-04-09692','$2y$10$RFnlvuOTe1o3QgMIXRBa0.E3DKB.kr32Um0WcuILb7SP0xeQMBcMy',1,'BSC IN CEIT',3),(491,'Masandeko, Kelvin M.',NULL,'2018-04-01688','$2y$10$0fxikXVoSZQ03AX8owdHIOUyRgcRHXxgIQpirxdIU2qL6SvEL1GJ6',1,'BSC IN CEIT',3),(492,'Ilomo, Kaiza F',NULL,'2019-04-02632','$2y$10$SSvU/FfPjfOwUJSZxx59XuKlfv4PS9nVEV/o0XHQWO6CJ.bH0FH2e',1,'BSC IN CEIT',3),(493,'Mlangwa, Ronald D.',NULL,'2019-04-07476','$2y$10$r.RxC9TK3.yMgjXu6g9fjOf/PQHWtSbuvcPqdUGrulvDD/Dfazv/q',1,'BSC IN CEIT',3),(494,'Karoza, Alpha Obed',NULL,'2019-04-10379','$2y$10$Li/T3yzind6WWlhRN3EfkeMtLWTZP4PtE9IxiDcGyaM53zkYpW5we',1,'BSC IN CEIT',3),(495,'Senya, Collin E.',NULL,'2019-04-11704','$2y$10$cFRTMHda4PZbxz5fNCLSVOsQvYZduuyj.OUN6aHY83koewOq2zsAy',1,'BSC IN CEIT',3),(496,'Shedrack, Glastborn G.',NULL,'2019-04-11839','$2y$10$NfXhPZ3gKhujO6FEl/WnN.AbpHU1d8iFn.woMBDMRzAM3XBkn13b6',1,'BSC IN CS',3),(497,'Shemdoe, Erick I.',NULL,'2018-04-02411','$2y$10$hFlobgGEKXdfeXk9fxqu8OGs.VgSouaritG1ZZ/ljpFIYrh2DeJAe',1,'BSC IN CS',3),(498,'Kheri, Ibrahim Ramadhan',NULL,'2019-04-03950','$2y$10$0KJqRTt.GAXOLpcjH6PhoekKY3BNpatgmRBLYiuq89SbqL6vohE22',1,'BSC IN CS',3),(499,'Lyaganda, Masanja',NULL,'2019-04-05208','$2y$10$QVB9zhsqyyA029c0WFN.1u1BL9wJNiWll9EgAmQp56RRDtBlSXgVu',1,'BSC IN CS',3),(500,'Minja, Arthur Benjamin',NULL,'2019-04-07251','$2y$10$ZQMOWawiLOjzd5z.hGM4SOE/dIwxX.c1VxoXBnuqJESsIohUEftFe',1,'BSC IN CS',3),(501,'Kajubu, Azim Khalid',NULL,'2018-04-01663','$2y$10$xWFhn6iS6F4iifxq9TCb5.c.r3nAkO9WoWMidoDa1RubcFC7f50JG',1,'BSC IN CS',3),(502,'Woiso, Gabriela R.',NULL,'2019-04-13149','$2y$10$dQ6udgrdIWRbMnGEM57wDut2zeM3RDVrilHDXXdJJykeKL6/FS/Mi',1,'BSC IN CS',3),(503,'Moses, Richard Estomih',NULL,'2018-04-02438','$2y$10$s6LZ9btKAVpWELlns9Qk/eiDYzuiAxQPlNWd/NnXwVqf0UClM0ypS',1,'BSC IN CS',3),(504,'Rwehumbiza, Aron',NULL,'2018-04-01662','$2y$10$k3QMwEIPvns7ePZXGnYg4uQBEcTQuTEUbhC.yjeYKm/elZYl0BQCm',1,'BSC IN CS',3),(505,'Masami, Rodney Paul',NULL,'2019-04-06109','$2y$10$sW0/Nvz1t1fIIOk4DxB.Z.OwF1xuOkMc89psuxXkcqPocL2OIXgGa',1,'BSC IN CS',3),(506,'Michese, Deogratius Henry',NULL,'2019-04-07167','$2y$10$y7WWUXZ1AJFI1AQD9Z5DOeM.qtGzOcIzxygFGZ/HgWNeqrhj/TQjq',1,'BSC IN CS',3),(507,'Liwaha, Jackson Stephen',NULL,'2019-04-04957','$2y$10$Q0uJOr4n6tf6X3V.Rw7ob.9C/0/p/9dajUbqVD6c3LE5NoiYGFfmq',1,'BSC IN CS',3),(508,'Akaka, Thomas D.',NULL,'2019-04-00180','$2y$10$L8c1zJEq.uyw0DsWksC6jeinzdDBBWNA6mzb86Qoa1M8kW4i54e8.',1,'BSC IN CS',3),(509,'Mniachi, Mariam Ally',NULL,'2019-04-07642','$2y$10$cW0c4DQP5sIENipssxFzbuIdbwqEdNrxurVHH0nl.EyY0hlykN0rO',1,'BSC IN CS',3),(510,'Mahenge, Christina',NULL,'2019-04-05542','$2y$10$9l0p1Xsv0NoOB5xxg7DKZemANTqNm4q6oum8tn.QKPPCI6Ux.Sx2C',1,'BSC IN CS',3),(511,'Mwemezi, Angela Jovin',NULL,'2019-04-09335','$2y$10$h4sA6c3OfVWOM5E3KnqL5uPuri.oOy6xLql/TIIzBnb0nvO6nN07K',1,'BSC IN CS',3),(512,'Mbalyo, Daniel John',NULL,'2019-04-06561','$2y$10$B53szXncdis6O5861xXvtOvs8Nrn17cRatjbusucp8x9QP2ljn1Ma',1,'BSC IN CS',3),(513,'Ndilanha, Vivian E',NULL,'2019-04-09619','$2y$10$12nuzRBdfMKaJwNq3sqmEOhoZIW7O7JpAWyWTeSFVteV39okXA/Rq',1,'BSC IN CS',3),(514,'Massay, Emanuel Tlatlaa',NULL,'2018-04-01672','$2y$10$6omKiO18R3rb9qM4HFl2Q.iBILz0DbhTj.xMRA07UWKWYAsxNvNZi',1,'BSC IN CS',3),(515,'Kanuwa, Shabani Ramadhani',NULL,'2019-04-03565','$2y$10$OVX0GoIFR5RcgPlywekHseQa2z4shfJFxWxnW1kda4yQXGBPSzTr2',1,'BSC IN CS',3),(516,'Kyaruzi, Shamira S.',NULL,'2019-04-04743','$2y$10$jQcPey5Re/JoUjwh68gilesqrMCRCjm7kxHno14bM5/nxStAnO26u',1,'BSC IN CS',3),(517,'Issa, Hilal H.',NULL,'2018-04-01682','$2y$10$.i8azWwTiUkGnJOJh5zBbO6UEryXjAYfOHd.EtQ.csRX49tWRFaam',1,'BSC IN CS',3),(518,'Jebe, Mbelwa A.',NULL,'2019-04-02822','$2y$10$6zG.K5GHeaICDXXOibLx0.zQNp.xALfXemURxnGZtAjMN6cBkL8D.',1,'BSC IN CS',3),(519,'Machuve, Alice T.',NULL,'2019-04-05343','$2y$10$AjAHeMggh5jesrXScxgtgu0wk3ljRSp61N213sR.IsiEmd50vf2ge',1,'BSC IN CS',3),(520,'Kapfumvuti, Dion Ishe',NULL,'2019-04-01597','$2y$10$ae74dFPdvNqY/IMWwM2JYOkh9dMR9UJo7MOf6S0fEbh7BYVEb57XS',1,'BSC IN CS',3),(521,'Xibona, Jesse A.',NULL,'2019-04-12918','$2y$10$8UBZxcFGzlHQ5MQa7EqxTefpkSA/Hct9SBcQgyRdo4TKtggaz6Jbq',1,'BSC IN BIT',3),(522,'Mwakwilusa, Imani A.',NULL,'2018-04-01684','$2y$10$YGUAYKm0S3rwTv8pEizBdunPa.U1LpcUGRrzqeh4vTrI/5YPTvqHe',1,'BSC IN BIT',3),(523,'David, Beatrice',NULL,'2019-04-01510','$2y$10$6oEPjjnuyOxvamjfgHhZfeO5ntCUM3974plBtvMAStIQSV4mCGCXa',1,'BSC IN BIT',3),(524,'Ikunda, Elvis Neville',NULL,'2018-04-01669','$2y$10$9zzsI3u5X36JOH.WByAPU.6VeECtnNFLxeOdWkU882MdGcLeU0omK',1,'BSC IN BIT',3),(525,'Dr Mathew Mndeme Mdeme','mathewmndeme@udsm.ac.tz',NULL,'$2y$10$ByiCtnUm.PiQDYiNFl4UrOC6QNjP9WIbu3oeAdNtNq1GS4qr/kvfe',2,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-01 10:44:48