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
  PRIMARY KEY (`id`),
  KEY `inscricao_id_evento_foreign` (`id_evento`),
  KEY `inscricao_id_modalidade_foreign` (`id_modalidade`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscricao`
--

LOCK TABLES `inscricao` WRITE;
/*!40000 ALTER TABLE `inscricao` DISABLE KEYS */;
INSERT INTO `inscricao` VALUES (42,'GEf6LP9JBsBvi7g2o2XFHlLfsZLGPFivAJQM3n6L',1,2,'67059619020','DAVYD M','DAVYD','UFSC','FLORIPA','CE','BRASIL','48484894848','2000-01-01','davydcm@gmail.com','4','2024-05-10 18:17:47','2024-05-10 18:17:47',NULL,1,0),(41,'GEf6LP9JBsBvi7g2o2XFHlLfsZLGPFivAJQM3n6L',1,2,'05388757986','DAVYD M','DAVYD','UFSC','FLORIPA','CE','BRASIL','48484894848','2000-01-01','davydcm@gmail.com','4','2024-05-10 18:17:35','2024-05-10 18:17:35',NULL,1,0),(40,'GEf6LP9JBsBvi7g2o2XFHlLfsZLGPFivAJQM3n6L',1,1,'423423424','davyd','davyd','12132132','131321','AM','teste','2313123','2000-01-01','teaste@adad.com','3','2024-05-10 11:22:29','2024-05-10 11:22:29',NULL,1,0),(34,'proP3OYgDwzdc4azOsDY0Louyiufiy97WWQf9san',1,1,'05388757986','ABOBRINHA','teste','teste','teste','MT','teste','222','2000-01-01','teste','7','2024-05-09 17:13:45','2024-05-09 17:13:45',NULL,1,0),(38,'proP3OYgDwzdc4azOsDY0Louyiufiy97WWQf9san',1,1,'3','3','3','3','3','EX','3','3','2024-05-08','3','8','2024-05-09 13:07:19','2024-05-09 13:07:19',NULL,1,0);
/*!40000 ALTER TABLE `inscricao` ENABLE KEYS */;
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
  `PagamentoBoleto` int(11) NOT NULL,
  `PagamentoCartao` int(11) NOT NULL,
  `PagamentoPIX` int(11) NOT NULL,
  `QuantidadeParcelas` int(11) NOT NULL,
  `VencimentoPagamento` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ControleVagasModalidade` int(11) DEFAULT '0',
  `ControleVagasGeral` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `eventos_config_id_evento_foreign` (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_config`
--

LOCK TABLES `eventos_config` WRITE;
/*!40000 ALTER TABLE `eventos_config` DISABLE KEYS */;
INSERT INTO `eventos_config` VALUES (1,1,1,1,1,1,'2024-06-07 11:41:24',NULL,NULL,1,0),(2,2,1,0,1,1,'2024-06-07 11:41:24',NULL,NULL,0,1),(3,9,1,1,0,1,'2024-06-07 11:41:24',NULL,NULL,0,1);
/*!40000 ALTER TABLE `eventos_config` ENABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
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
  PRIMARY KEY (`id`),
  KEY `eventos_lote_id_evento_foreign` (`id_evento`),
  KEY `eventos_lote_id_modalidade_foreign` (`id_modalidade`),
  KEY `eventos_lote_id_formapagamento_foreign` (`id_formapagamento`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_lote`
--

LOCK TABLES `eventos_lote` WRITE;
/*!40000 ALTER TABLE `eventos_lote` DISABLE KEYS */;
INSERT INTO `eventos_lote` VALUES (1,1,1,'2024-05-06 16:55:45','2024-05-19 17:55:47',1,2.14,NULL,NULL),(2,1,2,'2024-05-06 16:55:58','2024-05-18 16:56:01',1,3.15,NULL,NULL),(3,2,1,'2024-05-06 16:55:45','2024-05-06 16:55:47',1,92.14,NULL,NULL),(4,2,2,'2024-05-06 16:55:58','2024-05-06 16:56:01',1,103.15,NULL,NULL),(5,9,1,'2024-05-06 16:55:45','2024-05-06 16:55:47',1,200,NULL,NULL),(6,9,2,'2024-05-06 16:55:58','2024-05-06 16:56:01',1,150,NULL,NULL),(7,1,1,'2024-05-07 13:55:45','2024-05-08 16:55:47',1,3,NULL,NULL);
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
  PRIMARY KEY (`id`),
  KEY `eventos_vagas_id_evento_foreign` (`id_evento`),
  KEY `eventos_vagas_id_modalidade_foreign` (`id_modalidade`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_vagas`
--

LOCK TABLES `eventos_vagas` WRITE;
/*!40000 ALTER TABLE `eventos_vagas` DISABLE KEYS */;
INSERT INTO `eventos_vagas` VALUES (1,1,1,30,NULL,'2024-05-07 18:03:00',2),(2,1,2,30,NULL,NULL,0),(3,2,1,15,NULL,NULL,0),(4,2,2,15,NULL,NULL,0),(5,9,1,15,NULL,'2024-05-07 17:56:56',0),(6,9,2,15,NULL,NULL,0);
/*!40000 ALTER TABLE `eventos_vagas` ENABLE KEYS */;
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
  `dataInicioEvento` datetime NOT NULL,
  `dataFinalEvento` datetime NOT NULL,
  `Titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `Local` text COLLATE utf8_unicode_ci NOT NULL,
  `Descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NumConta` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDRubrica` int(11) DEFAULT NULL,
  `IDSubRubrica` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,1152023,'2025-03-31 00:00:00','1974-10-12 00:00:00','iure','optio','Ex ullam quo rerum. Eligendi veritatis ut cum labore reprehenderit molestias tempore. Ut fuga officiis quae quia eligendi sunt nihil ut.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',99,99),(2,2082079,'2025-02-23 00:00:00','1984-05-05 00:00:00','excepturi','voluptatem','Aut consequatur aspernatur vel ea et at. Aut distinctio vel aliquam a eos quia. Hic non culpa accusamus nisi aperiam.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(3,2004886,'2024-02-23 00:00:00','2002-01-04 00:00:00','fuga','laboriosam','Soluta adipisci odio est asperiores quas. Dicta itaque ab eos. Atque laborum nesciunt minus eaque.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(4,1,'2024-02-23 00:00:00','1992-10-15 00:00:00','id','voluptas','Et dolores officia praesentium accusantium. Quis sed saepe nemo enim. Eaque corrupti sit qui vero.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(5,24518,'2024-02-23 00:00:00','1981-07-17 00:00:00','aut','sit','Id ullam voluptatem ea explicabo. Et in ad amet asperiores et. Provident tenetur voluptatem omnis rerum sunt doloribus tempore.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(6,613660800,'2024-02-23 00:00:00','1976-06-08 00:00:00','et','aut','Aut doloribus temporibus quia amet voluptatem. Ducimus veniam perspiciatis et velit eum temporibus et. Sunt est et voluptas quo aut soluta sequi.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(7,5832807,'2024-02-23 00:00:00','1992-08-26 00:00:00','similique','provident','Eos et accusamus velit vel. Eaque delectus enim rerum quia accusantium fugiat. Quis perferendis quo et sint. Fuga vero consequatur eaque quia dolor nobis atque.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(8,443697205,'2024-02-23 00:00:00','1981-11-02 00:00:00','recusandae','repudiandae','Qui officiis occaecati quo placeat provident voluptas quod. Aperiam amet dolorum debitis cumque veniam perferendis. Nihil sunt ut ut quae totam debitis.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(9,2434,'2025-02-23 00:00:00','1981-09-01 00:00:00','quas','accusantium','Repellat in dolor delectus quo nam quod totam error. Consequatur velit voluptatem porro voluptatum qui consequatur. Eveniet ipsa qui non.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL),(10,5174686,'2024-02-23 00:00:00','2020-11-30 00:00:00','id','deleniti','Enim qui inventore esse quos qui vel. Nostrum cumque doloremque a in sed. Nesciunt non praesentium culpa dolores.','2024-05-06 22:55:02','2024-05-06 22:55:02','203142-6',NULL,NULL);
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidade`
--

LOCK TABLES `modalidade` WRITE;
/*!40000 ALTER TABLE `modalidade` DISABLE KEYS */;
INSERT INTO `modalidade` VALUES (1,'Estudantes',NULL,NULL),(2,'Comunidade',NULL,NULL);
/*!40000 ALTER TABLE `modalidade` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-13  9:13:46
