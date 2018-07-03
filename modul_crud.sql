-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: modul_crud
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
-- Current Database: `modul_crud`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `modul_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `modul_crud`;

--
-- Table structure for table `md_data_mhs`
--

DROP TABLE IF EXISTS `md_data_mhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `md_data_mhs` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(10) NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  `tempat_lahir_mhs` varchar(50) NOT NULL,
  `tgl_lahir_mhs` date NOT NULL,
  `alamat_mhs` varchar(200) NOT NULL,
  `wali_mhs` varchar(200) NOT NULL,
  `spp_mhs` int(11) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `md_data_mhs`
--

LOCK TABLES `md_data_mhs` WRITE;
/*!40000 ALTER TABLE `md_data_mhs` DISABLE KEYS */;
INSERT INTO `md_data_mhs` VALUES (5,'2215205205','Jos','Pati','1992-06-06','Malang','Jono',1000),(6,'2215205210','Jono','Blitar','1998-02-04','Malang','Kopral Jono',10000);
/*!40000 ALTER TABLE `md_data_mhs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-03 13:22:07
