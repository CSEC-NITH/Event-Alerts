-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: HACKATHON
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CHATTABLE`
--

DROP TABLE IF EXISTS `CHATTABLE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CHATTABLE` (
  `USERNAME` varchar(30) DEFAULT NULL,
  `MESSAGE` varchar(200) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CHATTABLE`
--

LOCK TABLES `CHATTABLE` WRITE;
/*!40000 ALTER TABLE `CHATTABLE` DISABLE KEYS */;
INSERT INTO `CHATTABLE` VALUES ('hello','hii','2017-02-05 11:26:34'),('hello','hi','2017-02-05 11:28:09');
/*!40000 ALTER TABLE `CHATTABLE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MESSAGE`
--

DROP TABLE IF EXISTS `MESSAGE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MESSAGE` (
  `SEND_TO` varchar(25) DEFAULT NULL,
  `MESSAGE` varchar(300) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IMAGE_NAME` varchar(30) DEFAULT 'default.jpg',
  `LINK` varchar(200) DEFAULT NULL,
  `TITLE` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MESSAGE`
--

LOCK TABLES `MESSAGE` WRITE;
/*!40000 ALTER TABLE `MESSAGE` DISABLE KEYS */;
INSERT INTO `MESSAGE` VALUES ('All','A hackathon (also known as a hack day, hackfest or codefest) is a design sprint-like event in which computer programmers and others involved in software development','2017-02-05 11:31:53','narendra36.jpg','http://www.google.com','HACKATHON'),('All','A hackathon (also known as a hack day, hackfest or codefest) is a design sprint-like event in which computer programmers and others involved in software development','2017-02-05 11:32:45','spec1.jpg','http://www.google.com','SPEC'),('All','A hackathon (also known as a hack day, hackfest or codefest) is a design sprint-like event in which computer programmers and others involved in software development','2017-02-05 11:33:37','exe1.jpg','http://www.google.com','CodeHunt');
/*!40000 ALTER TABLE `MESSAGE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(256) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `ROLL_NO` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `CONTACT` varchar(13) DEFAULT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USERNAME` (`USERNAME`),
  UNIQUE KEY `ROLL_NO` (`ROLL_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
INSERT INTO `USER` VALUES (1,'narendra','narendra36','14MI536','na@fdfh','98765432','helloworld'),(4,'narendra','narendra365','14MI535','na@fdfh','987654321','helloworld'),(6,'ATUL','ATULK02','14MI534','atul@kumar','9876543210','hiatul'),(7,'NITIN','NITIN02','15MI535','nitin@k','9876543210','hinitin'),(10,'abhi','abhi02','14MI510','abhi@k','9876543210','hiabhi'),(12,'atul','atl','14MI545','sdj@djf','9876543211','1234567890'),(13,'nitin','iamnitin','15546','dfhdfj@dnfnd.dfd','98654321','123456789');
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-05 17:22:22
