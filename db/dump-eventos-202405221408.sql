-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: eventos
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `insc_acessibilidade`
--

DROP TABLE IF EXISTS `insc_acessibilidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `insc_acessibilidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inscricao` int(11) DEFAULT NULL,
  `auditiva` tinyint(1) DEFAULT '0',
  `fisica` tinyint(1) DEFAULT '0',
  `visual` tinyint(1) DEFAULT '0',
  `intelectual` tinyint(1) DEFAULT '0',
  `mental` tinyint(1) DEFAULT '0',
  `outra_def` tinyint(1) DEFAULT '0',
  `qual_def` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acompanhante` tinyint(1) DEFAULT '0',
  `andador` tinyint(1) DEFAULT '0',
  `cadeirarodas` tinyint(1) DEFAULT '0',
  `caoguia` tinyint(1) DEFAULT '0',
  `leituraorofacial` tinyint(1) DEFAULT '0',
  `muleta` tinyint(1) DEFAULT '0',
  `audiodescricao` tinyint(1) DEFAULT '0',
  `legenda` tinyint(1) DEFAULT '0',
  `libras` tinyint(1) DEFAULT '0',
  `lugarcadeirante` tinyint(1) DEFAULT '0',
  `lugarcaoguia` tinyint(1) DEFAULT '0',
  `outra_neces` tinyint(1) DEFAULT '0',
  `qual_neces` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_inscricao` (`id_inscricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insc_acessibilidade`
--

LOCK TABLES `insc_acessibilidade` WRITE;
/*!40000 ALTER TABLE `insc_acessibilidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `insc_acessibilidade` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-22 14:08:57
