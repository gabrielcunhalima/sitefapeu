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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `IDProjeto` int(11) NOT NULL,
  `dataInicioEvento` datetime DEFAULT NULL,
  `dataFinalEvento` datetime DEFAULT NULL,
  `Titulo` text COLLATE utf8_unicode_ci,
  `Local` text COLLATE utf8_unicode_ci,
  `Descricao` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NumConta` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDRubrica` int(11) DEFAULT NULL,
  `IDSubRubrica` int(11) DEFAULT NULL,
  `_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,1152023,'2025-03-31 00:00:00','1974-10-12 00:00:00','iure','optio','Ex ullam quo rerum. Eligendi veritatis ut cum labore reprehenderit molestias tempore. Ut fuga officiis quae quia eligendi sunt nihil ut.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',99,99,NULL,NULL),(2,2082079,'2025-02-23 00:00:00','1984-05-05 00:00:00','excepturi','voluptatem','Aut consequatur aspernatur vel ea et at. Aut distinctio vel aliquam a eos quia. Hic non culpa accusamus nisi aperiam.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(3,2004886,'2024-02-23 00:00:00','2002-01-04 00:00:00','fuga','laboriosam','Soluta adipisci odio est asperiores quas. Dicta itaque ab eos. Atque laborum nesciunt minus eaque.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(4,1,'2024-02-23 00:00:00','1992-10-15 00:00:00','id','voluptas','Et dolores officia praesentium accusantium. Quis sed saepe nemo enim. Eaque corrupti sit qui vero.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(5,24518,'2024-02-23 00:00:00','1981-07-17 00:00:00','aut','sit','Id ullam voluptatem ea explicabo. Et in ad amet asperiores et. Provident tenetur voluptatem omnis rerum sunt doloribus tempore.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(6,613660800,'2024-02-23 00:00:00','1976-06-08 00:00:00','et','aut','Aut doloribus temporibus quia amet voluptatem. Ducimus veniam perspiciatis et velit eum temporibus et. Sunt est et voluptas quo aut soluta sequi.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(7,5832807,'2024-02-23 00:00:00','1992-08-26 00:00:00','similique','provident','Eos et accusamus velit vel. Eaque delectus enim rerum quia accusantium fugiat. Quis perferendis quo et sint. Fuga vero consequatur eaque quia dolor nobis atque.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(8,443697205,'2024-02-23 00:00:00','1981-11-02 00:00:00','recusandae','repudiandae','Qui officiis occaecati quo placeat provident voluptas quod. Aperiam amet dolorum debitis cumque veniam perferendis. Nihil sunt ut ut quae totam debitis.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(9,2434,'2025-02-23 00:00:00','1981-09-01 00:00:00','quas','accusantium','Repellat in dolor delectus quo nam quod totam error. Consequatur velit voluptatem porro voluptatum qui consequatur. Eveniet ipsa qui non.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(10,5174686,'2024-02-23 00:00:00','2020-11-30 00:00:00','id','deleniti','Enim qui inventore esse quos qui vel. Nostrum cumque doloremque a in sed. Nesciunt non praesentium culpa dolores.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL,NULL,NULL),(11,234234,NULL,NULL,NULL,NULL,NULL,'2024-05-13 18:28:45','2024-05-13 18:28:45',NULL,NULL,NULL,NULL,NULL),(14,234234,NULL,NULL,NULL,NULL,NULL,'2024-05-13 18:31:57','2024-05-13 18:31:57',NULL,NULL,NULL,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(15,9991991,'2024-05-13 00:00:00','2024-06-22 00:00:00','TESTE DE CADASTRO',NULL,'EVENTO PARA TESTAR CADASTRO\r\nDE NOVO EVENTO\r\nETC','2024-05-13 20:10:36','2024-05-13 20:10:36','123456',1,NULL,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(16,9991991,'2024-05-13 00:00:00','2024-06-22 00:00:00','TESTE DE CADASTRO',NULL,'EVENTO PARA TESTAR CADASTRO\r\nDE NOVO EVENTO\r\nETC','2024-05-13 20:11:20','2024-05-13 20:11:20','123456',1,2,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(17,9991991,'2024-05-13 00:00:00','2024-12-09 00:00:00','teste1231321321321','ufsc','lero lero leorelroerleo roelroeroeroelroleorleorloelr','2024-05-13 20:12:32','2024-05-13 20:12:32','1258793-6',99,99,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(18,21321,'2024-05-13 00:00:00','2024-05-22 00:00:00','3','5','4','2024-05-13 20:48:35','2024-05-13 20:48:35','2',1,1,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(19,999,'2024-05-13 00:00:00','2024-06-25 00:00:00','4','6','5','2024-05-13 21:50:56','2024-05-13 21:50:56','3',1,2,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(20,8888,'2024-05-13 00:00:00','2026-12-01 00:00:00','6','4','5','2024-05-13 22:25:36','2024-05-13 22:25:36','7',9,8,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(21,99,'2024-05-14 00:00:00','2025-09-01 00:00:00','55','66','77','2024-05-14 15:18:31','2024-05-14 15:18:31','66',88,77,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(22,777,'2024-05-14 00:00:00','2025-12-31 00:00:00','333','111','222','2024-05-14 15:42:36','2024-05-14 15:42:36','444',666,555,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(23,9999,'2024-05-14 00:00:00','2024-05-31 00:00:00','teste','teste','teste','2024-05-14 18:24:45','2024-05-14 18:24:45','7',9,8,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(24,0,'2024-05-14 00:00:00','2025-05-31 00:00:00','6666','6666666','66666','2024-05-14 19:24:23','2024-05-14 19:24:23','666',6,66,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(25,789456,'2024-05-19 00:00:00','2025-12-31 00:00:00','4','6','5','2024-05-14 21:56:24','2024-05-14 21:56:24','3',1,2,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL);
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_config`
--

DROP TABLE IF EXISTS `eventos_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos_config` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_evento` int(10) unsigned NOT NULL,
  `PagamentoBoleto` int(11) DEFAULT '0',
  `PagamentoCartao` int(11) DEFAULT '0',
  `PagamentoPIX` int(11) DEFAULT NULL,
  `QuantidadeParcelas` int(11) DEFAULT NULL,
  `VencimentoPagamento` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ControleVagasModalidade` int(11) DEFAULT '0',
  `ControleVagasGeral` int(11) DEFAULT '0',
  `_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eventos_config_id_evento_foreign` (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_config`
--

LOCK TABLES `eventos_config` WRITE;
/*!40000 ALTER TABLE `eventos_config` DISABLE KEYS */;
INSERT INTO `eventos_config` VALUES (1,1,1,0,1,1,'2024-06-07 11:41:24',NULL,NULL,1,0,NULL,''),(2,2,1,0,1,1,'2024-06-07 11:41:24',NULL,NULL,0,1,NULL,''),(3,9,1,1,0,1,'2024-06-07 11:41:24',NULL,NULL,0,1,NULL,''),(4,19,0,1,1,3,'2024-05-13 00:00:00','2024-05-13 22:11:35','2024-05-13 22:11:35',1,0,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(5,20,0,0,1,NULL,'2024-08-30 00:00:00','2024-05-13 22:25:46','2024-05-13 22:25:46',1,0,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',NULL),(6,21,1,0,1,NULL,'2024-05-31 00:00:00','2024-05-14 15:19:43','2024-05-14 15:19:43',1,0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(7,22,1,0,1,NULL,'2024-05-14 00:00:00','2024-05-14 15:42:42','2024-05-14 15:42:42',1,0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(8,23,1,1,1,NULL,'2024-05-24 00:00:00','2024-05-14 18:25:51','2024-05-14 18:25:51',1,0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(9,24,1,0,NULL,NULL,'2024-05-31 00:00:00','2024-05-14 19:24:29','2024-05-14 19:24:29',1,0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(10,25,1,0,NULL,NULL,'2024-05-31 00:00:00','2024-05-14 21:56:31','2024-05-14 21:56:31',1,0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL);
/*!40000 ALTER TABLE `eventos_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_lote`
--

DROP TABLE IF EXISTS `eventos_lote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos_lote` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_evento` int(10) unsigned NOT NULL,
  `id_modalidade` int(10) unsigned NOT NULL,
  `InicioLote` datetime NOT NULL,
  `FimLote` datetime NOT NULL,
  `id_formapagamento` int(10) unsigned NOT NULL,
  `valor` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eventos_lote_id_evento_foreign` (`id_evento`),
  KEY `eventos_lote_id_modalidade_foreign` (`id_modalidade`),
  KEY `eventos_lote_id_formapagamento_foreign` (`id_formapagamento`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_lote`
--

LOCK TABLES `eventos_lote` WRITE;
/*!40000 ALTER TABLE `eventos_lote` DISABLE KEYS */;
INSERT INTO `eventos_lote` VALUES (1,1,1,'2024-05-06 16:55:45','2024-05-19 17:55:47',1,2.14,NULL,NULL,NULL,NULL),(2,1,2,'2024-05-06 16:55:58','2024-05-18 16:56:01',1,3.15,NULL,NULL,NULL,NULL),(3,2,1,'2024-05-06 16:55:45','2024-05-06 16:55:47',1,92.14,NULL,NULL,NULL,NULL),(4,2,2,'2024-05-06 16:55:58','2024-05-06 16:56:01',1,103.15,NULL,NULL,NULL,NULL),(5,9,1,'2024-05-06 16:55:45','2024-06-06 16:55:47',1,200,NULL,NULL,NULL,NULL),(6,9,2,'2024-05-06 16:55:58','2024-06-06 16:56:01',1,150,NULL,NULL,NULL,NULL),(7,1,1,'2024-05-07 13:55:45','2024-06-08 16:55:47',1,3,NULL,NULL,NULL,NULL),(8,24,1,'2024-05-01 00:00:00','2024-07-06 00:00:00',2,6,'2024-05-14 21:08:14','2024-05-14 21:08:14','yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(9,24,3,'2024-05-01 00:00:00','2024-06-07 00:00:00',2,5,'2024-05-14 21:14:41','2024-05-14 21:14:41','yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(11,24,3,'2333-02-22 00:00:00','2232-03-23 00:00:00',1,231223,'2024-05-14 21:31:01','2024-05-14 21:31:01','yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(12,25,1,'2024-05-14 00:00:00','2024-06-29 00:00:00',1,23,'2024-05-14 21:57:30','2024-05-14 21:57:30','yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(13,1,1,'2024-05-06 16:55:45','2024-05-19 17:55:47',2,1.7,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `eventos_lote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_vagas`
--

DROP TABLE IF EXISTS `eventos_vagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos_vagas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_evento` int(10) unsigned NOT NULL,
  `id_modalidade` int(10) unsigned NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscritos` int(11) NOT NULL DEFAULT '0',
  `_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eventos_vagas_id_evento_foreign` (`id_evento`),
  KEY `eventos_vagas_id_modalidade_foreign` (`id_modalidade`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_vagas`
--

LOCK TABLES `eventos_vagas` WRITE;
/*!40000 ALTER TABLE `eventos_vagas` DISABLE KEYS */;
INSERT INTO `eventos_vagas` VALUES (1,1,1,30,NULL,'2024-05-07 18:03:00',2,NULL,NULL),(2,1,2,30,NULL,NULL,0,NULL,NULL),(3,2,1,15,NULL,NULL,0,NULL,NULL),(4,2,2,15,NULL,NULL,0,NULL,NULL),(5,9,1,150,NULL,'2024-05-07 17:56:56',0,NULL,NULL),(6,9,2,150,NULL,NULL,0,NULL,NULL),(7,1,3,10,NULL,NULL,0,NULL,NULL),(17,24,2,66,'2024-05-14 20:25:49','2024-05-14 20:34:27',0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(18,25,1,23,'2024-05-14 21:57:09','2024-05-14 21:57:09',0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(16,24,3,2,'2024-05-14 20:25:10','2024-05-14 20:25:10',0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(19,25,2,44,'2024-05-14 21:57:13','2024-05-14 21:57:13',0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL),(20,25,3,112,'2024-05-14 21:57:17','2024-05-14 21:57:17',0,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',NULL);
/*!40000 ALTER TABLE `eventos_vagas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formapagamento`
--

DROP TABLE IF EXISTS `formapagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formapagamento` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formapagamento`
--

LOCK TABLES `formapagamento` WRITE;
/*!40000 ALTER TABLE `formapagamento` DISABLE KEYS */;
INSERT INTO `formapagamento` VALUES (1,'BOLETO',NULL,NULL),(2,'PIX',NULL,NULL),(3,'CARTÃO DE CRÉDITO 1X',NULL,NULL),(4,'CARTÃO DE CRÉDITO 2X',NULL,NULL),(5,'CARTÃO DE CRÉDITO 3X',NULL,NULL),(6,'CARTÃO DE CRÉDITO 4X',NULL,NULL);
/*!40000 ALTER TABLE `formapagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscricao` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_evento` int(10) unsigned NOT NULL,
  `id_modalidade` int(10) unsigned NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomeCompleto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomeCracha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datanascimento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `action` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_formapagamento` int(11) DEFAULT NULL,
  `StatusPagamento` int(11) DEFAULT '0',
  `ArqRetorno` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UsuarioRespBaixa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inscricao_id_evento_foreign` (`id_evento`),
  KEY `inscricao_id_modalidade_foreign` (`id_modalidade`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscricao`
--

LOCK TABLES `inscricao` WRITE;
/*!40000 ALTER TABLE `inscricao` DISABLE KEYS */;
INSERT INTO `inscricao` VALUES (42,'GEf6LP9JBsBvi7g2o2XFHlLfsZLGPFivAJQM3n6L',1,2,'67059619020','DAVYD M','DAVYD','UFSC','FLORIPA','CE','BRASIL','48484894848','2000-01-01','davydcm@gmail.com','4','2024-05-10 18:17:47','2024-05-10 18:17:47',NULL,1,0,NULL,NULL),(41,'GEf6LP9JBsBvi7g2o2XFHlLfsZLGPFivAJQM3n6L',1,2,'05388757986','DAVYD M','DAVYD','UFSC','FLORIPA','CE','BRASIL','48484894848','2000-01-01','davydcm@gmail.com','4','2024-05-10 18:17:35','2024-05-10 18:17:35',NULL,1,0,NULL,NULL),(40,'GEf6LP9JBsBvi7g2o2XFHlLfsZLGPFivAJQM3n6L',1,1,'423423424','davyd','davyd','12132132','131321','AM','teste','2313123','2000-01-01','teaste@adad.com','3','2024-05-10 11:22:29','2024-05-10 11:22:29',NULL,1,0,NULL,NULL),(34,'proP3OYgDwzdc4azOsDY0Louyiufiy97WWQf9san',1,1,'05388757986','ABOBRINHA','teste','teste','teste','MT','teste','222','2000-01-01','teste','7','2024-05-09 17:13:45','2024-05-14 18:23:16',NULL,1,1,'a--contemboleto.RET',NULL),(38,'proP3OYgDwzdc4azOsDY0Louyiufiy97WWQf9san',1,1,'3','3','3','3','3','EX','3','3','2024-05-08','3','8','2024-05-09 13:07:19','2024-05-14 18:23:16',NULL,1,1,'a--contemboleto.RET',NULL),(43,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',9,1,'74100066090','DAVYD CM','davyd','ufsc','floripa','AP','brasil','121321321','2003-02-01','davyd@fa.com.','4','2024-05-13 13:41:34','2024-05-13 13:41:34',NULL,1,0,NULL,NULL),(44,'qShoTWuS8id0LcOJgoszxLyWHxIKXxanh8TRPN8b',9,1,'04703996006','teste','asfafasf','asafaf','asfafafasf','AM','qwrqrq','4481818','2221-05-01','tewtwtw@afasfsa.com','2','2024-05-13 13:45:00','2024-05-13 13:45:00',NULL,1,0,NULL,NULL),(45,'yOmdei7zMXbRyW6VTsApaTP6RE5JtziDaSFypW7Z',25,1,'05388757986','davyd','davyd','daaa','asdad','AC','asdad','4234234','2020-10-01','sdad@asdasd.com','1','2024-05-14 18:59:32','2024-05-14 18:59:32',NULL,1,0,NULL,NULL),(46,'cWFmt2Pgz3RHdkKFY8CLvIhKa66WQwbfX5bkEx4D',25,1,'123456789','joao','joao','ufsc','florianopolis','SC','brasil','4899991513','2000-01-01','joao@gmail.com','3','2024-05-15 14:02:58','2024-05-15 14:02:58',NULL,1,0,NULL,NULL),(47,'cWFmt2Pgz3RHdkKFY8CLvIhKa66WQwbfX5bkEx4D',1,1,'58945881034','pix','pix','pix','pix','AL','pix','151515','2000-01-01','asa@asaa.com','3','2024-05-15 18:17:25','2024-05-15 18:17:25',NULL,2,0,NULL,NULL),(48,'cWFmt2Pgz3RHdkKFY8CLvIhKa66WQwbfX5bkEx4D',1,1,'37757208041','pix2','pix','pix','pix','EX','pix','2131','2000-01-01','tsad@asda.com','3','2024-05-15 18:34:33','2024-05-15 18:34:33',NULL,2,0,NULL,NULL),(49,'cWFmt2Pgz3RHdkKFY8CLvIhKa66WQwbfX5bkEx4D',1,1,'50691181020','ppixx','ppixx','ppixx','ppixx','DF','ppixx','2141412','2000-01-01','ppixx@ppixx.com','3','2024-05-15 18:54:39','2024-05-15 18:54:39',NULL,2,0,NULL,NULL),(50,'cWFmt2Pgz3RHdkKFY8CLvIhKa66WQwbfX5bkEx4D',1,1,'35470420035','ppppixxx','ppppixxx','ppppixxx','ppppixxx','DF','ppppixxx','241414','2000-01-01','ppppixxx','5','2024-05-15 19:45:24','2024-05-15 19:45:24',NULL,2,0,NULL,NULL);
/*!40000 ALTER TABLE `inscricao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscricao_acessibilidade`
--

DROP TABLE IF EXISTS `inscricao_acessibilidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscricao_acessibilidade` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_inscricao` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inscricao_acessibilidade_id_inscricao_foreign` (`id_inscricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscricao_acessibilidade`
--

LOCK TABLES `inscricao_acessibilidade` WRITE;
/*!40000 ALTER TABLE `inscricao_acessibilidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscricao_acessibilidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_05_02_180919_eventos',1),(5,'2024_05_02_181407_eventos_config',1),(6,'2024_05_02_181826_formapagamento',1),(7,'2024_05_02_181916_eventos_lote',1),(8,'2024_05_02_182300_modalidade',1),(9,'2024_05_02_182313_eventos_vagas',1),(10,'2024_05_02_183421_inscricao',1),(11,'2024_05_02_183732_inscricao_acessibilidade',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modalidade`
--

DROP TABLE IF EXISTS `modalidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modalidade` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidade`
--

LOCK TABLES `modalidade` WRITE;
/*!40000 ALTER TABLE `modalidade` DISABLE KEYS */;
INSERT INTO `modalidade` VALUES (1,'Estudantes',NULL,NULL),(2,'Comunidade',NULL,NULL),(3,'PCD',NULL,NULL);
/*!40000 ALTER TABLE `modalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('VXVY2SrOzbqHUd7tYiGEhkOcQXkdqYqxs5SXnNmR',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY1dGbXQyUGd6M1JIZGtLRlk4Q0x2SWhLYTY2V1F3YmZYNWJrRXg0RCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovL2xvY2FsaG9zdDo4MDgwL2V2ZW50b3MvcHVibGljL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9ldmVudG9zL3B1YmxpYy9mb3JtLzI1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1715803139),('RHJGyHaeFv9GwyYAMmhakAmHKsbkPmCmy7H35ZkB',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEtER1RWOEVSZDF4b3pRWkVoVDdENnFGNlE2WUd4Mzl1aVdKa1hkNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9ldmVudG9zL3B1YmxpYy9sb2dpbiI7fX0=',1715861038);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_cpf_unique` (`cpf`),
  UNIQUE KEY `usuarios_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'05388757986','Davyd Martins','dmartins@fapeu.org.br','$2y$12$Umq/4jUHwXJNcxqbvHsJz.nD603ZdIFMR.fzCvrY7QHnx5kskJ2He',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'eventos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-16  9:09:08
