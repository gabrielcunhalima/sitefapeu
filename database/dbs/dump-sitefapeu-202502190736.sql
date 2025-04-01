-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: sitefapeu
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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_unique` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'f271335542fd05d023fe90eb1ba8e1ab7c2543b36dd8454554addf2880c9bb3d','admin',NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contatos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assunto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_setor` int(11) NOT NULL,
  `mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (3,'asdas','juhorizont@gmail.com','asdasd',18,'asdsa','2025-02-11 20:04:41','2025-02-11 20:04:41');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conteudos`
--

DROP TABLE IF EXISTS `conteudos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conteudos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `corpo` text COLLATE utf8_unicode_ci NOT NULL,
  `rota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conteudos`
--

LOCK TABLES `conteudos` WRITE;
/*!40000 ALTER TABLE `conteudos` DISABLE KEYS */;
INSERT INTO `conteudos` VALUES (127,'Acordo Coletivo','','acordocoletivo','2024-09-23 20:09:10','2024-09-23 20:09:10'),(128,'Informe de Rendimentos','','informerendimentos','2024-09-23 20:09:10','2024-09-23 20:09:10'),(129,'Programa FAPEU de Inclusão','','programainclusao','2024-09-23 20:09:10','2024-09-23 20:09:10'),(130,'Vagas Disponíveis','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(131,'Contato','','contato','2024-09-23 20:09:10','2024-09-23 20:09:10'),(132,'Canal de Comunicações e Denúncias','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(126,'Formulários Colaborador','','formularioscolaborador','2024-09-23 20:09:10','2024-09-23 20:09:10'),(125,'WebMail','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(124,'ADMFlow','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(123,'DRHFlow','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(122,'Espaço do Fornecedor','','espacofornecedor','2024-09-23 20:09:10','2024-09-23 20:09:10'),(121,'Inexibilidade','','inexibilidade','2024-09-23 20:09:10','2024-09-23 20:09:10'),(120,'Dispensa de Licitação','Seleções Públicas Anteriores(clique aqui)\r\nOrdem	Processo	Orgão	Projeto	Contrato/Convenio	Seleção Pública	Data Abertura*	Objeto	Resultado	Data publicação\r\n150	 	UFSC	1452016	255/2016	092/2021	08/10/2021	Contratação de serviços de abertura de valas, limpeza de canais e terraplenagem do fundo de viveiros da Fazenda Experimenta Yakult.	 Ata de Abertura\r\nAta de Julgamento\r\n\r\nAviso de Resultado\r\n01/10/2021\r\n151	 	UFSC	0392020	66/2020	094/2021	09/12/2021	Aquisição de equipamentos e componentes de informática.	Ata de Abertura \r\n\r\nAviso de Resultado\r\n01/12/2021\r\n152	 	UFSC	0172021	250/2020	152/2021\r\n\r\nANEXO V – PLANILHA DE ENDEREÇOS_1522021\r\n05/01/2022	Contratação de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado 	23/12/2021\r\n153	 /td>	UFSC	0692020	139/2020	120/2021	29/12/2021	Contratação de serviços de reforma e manutenção do Laboratório de Educação em Rede - LED, localizado na Universidade Federal de Santa Catarina - Florianópolis/SC.	Ata de abertura e Julgamento\r\n\r\nAviso de resultado 	07/01/2022\r\n154	 	UFSC	0542020	342/2019	042/2022	17/03/2022	Contratação de serviços para levantamento de recursos específicos da sociobiodiversidade ligados à Acolhida na Colônia - Desenvolvimento de roteiros integrados de agroturismo com foco em produtos e serviços da sociobiodiversidade.	Ata de abertura e Julgamento\r\n\r\nAviso de resultado 	09/03/2022\r\n155	 	UFSC	0172021	250/2020	076/2022	22/04/2022	Contratação de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association). 	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	13/04/2022\r\n156	 	UFSC	0232021	032/2021	077/2022	26/04/2022	Contratação de serviços de comunicação de dados (SCD), na forma de instalação, manutenção e operação, com dupla abordagem, e de vazão assegurada, de 10 Gbps (Dez gigabits por segundo) em ambas as abordagens, interligando dois pontos na cidade de Florianópolis/SC, pelo período de 12 (doze) meses.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	14/04/2022\r\n157	 	BNDES	0222021	078/2021	075/2022	02/05/2022	Aquisição de 01 (um) veículo automotivo do tipo pick-up, 0 Km (zero quilometro).	\r\nAta de Abertura e Julgamento\r\n\r\nAviso de Resultado\r\n\r\n25/04/2022\r\n158	 	UFSC	0692020	139/2020	091/2022	09/05/2022	Aquisição de equipamentos (04 (quatro) Smart TV 70\"; 04 (quatro) Nobreak 6000VA; 03 (três) Tele Prompter).	 Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	02/05/2022\r\n159	 	FCEE	0662021	36/FCEE/2021	098/2022	10/05/2022	Contratação de empresa especializada em gestão de comunicação para a prestação de serviços de produção, captação, edição, finalização com experiência em televisão para transmissão de áudio e vídeo em streaming e via satélite.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	03/05/2022\r\n160	 	GIZ	0742021	81276699	083/2022\r\n\r\nQUESTIONAMENTO I	16/05/2022	Contratação de serviços de fabricação e instalação de estrutura metálica, com fornecimento de material, para a edificação do Projeto de Expansão do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, localizada em Florianópolis/SC.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	09/05/2022\r\n161	 	UFSC	0752021	082/2021	096/2022	10/06/2022	Aquisição de 01 (um) resfriador de água (chiller), com capacidade de 60.000 Kcal/h – 20 TR.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado\r\n\r\n03/06/2022\r\n162	 	FAPEU	FAPEU	S/Nº	120/2022	13/06/2022	Compromisso de fornecimento de passagens rodoviárias nacionais, compreendendo serviços de cotação de valores, reserva, emissão, marcação/remarcação, desdobramento, substituição, revalidação, cancelamento, fornecimento e endosso.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	06/06/2022\r\n163	 	IFC	0922021	IFC 207/2021	128/2022	01/07/2022	Aquisição de 01 (um) trator agrícola novo, com capota e carregador frontal.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado\r\n\r\n24/06/2022\r\n164	 	UFSC	0752021	082/2021	130/2022	01/07/2022	Contratação de serviços de manutenção preventiva, em caráter mensal, dos sistemas elétricos do Laboratório de Moluscos Marinhos (LMM), da Universidade Federal de Santa Catarina, pelo período de 12 (doze) meses.	 Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	14/07/2022\r\n165	 	UFSC	0752021	082/2021	129/2022	29/07/2022	Contratação de serviços de manutenção preventiva, em caráter mensal, dos equipamentos responsáveis pela climatização das diferentes áreas e setores do Laboratório de Moluscos Marinhos (LMM), da Universidade Federal de Santa Catarina (UFSC), pelo período de 12 (doze) meses.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	22/07/2022\r\n166	 	PETROBRAS	0252021	Petrobras 0050.0117882.21.9	147/2022	12/082022	Contratação de serviços especializados para o desenvolvimento e implementação de módulo de potência e periféricos para soldagem de pinos por arco retraído aplicados ao projeto de P&D Processo Stud Welding para Aplicação em Soldagem Área Naval.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	05/08/2022\r\n167	 	UFSC	0752021	082/2021	159/2022	30/08/2022	Compromisso de fornecimento de dióxido de carbono (CO2).	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado\r\n\r\n23/08/2022\r\n168	 	UFSC	0172021	250/2020	172/2022\r\nAnexo V Planilha de Endereços	06/09/2022	Compromisso de fornecimento de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association).	 Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	30/08/2022\r\n169	 	UFSC	0392020	066/2020	165/2022	08/09/2022	Aquisição de equipamentos de informática (04 (quatro) Desktops i7 e 04 (quatro) Notebooks i5).	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado\r\n\r\n31/08/2022\r\n170	 	UFSC	0532021	166/2021	180/2022	22/09/2022	Compromisso de fornecimento de rações para camarões marinhos - Marca GUABI.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado\r\n\r\n15/09/2022\r\n171	 	BNDES	0222021	078/2021	193/2022	17/10/2022	Aquisição de 03 (três) containers adaptados para construção do Centro Reforma da Universidade Federal de Santa Catarina - Campus Curitibanos.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado	10/10/2022\r\n172	 	EMPRESAS	0722021	SGPX202119053	222/2022	28/10/2022	Contratação de serviços de fabricação e instalação de estruturas de alumínio, com fornecimento de material, para a edificação do Projeto de Expansão do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, localizada em Florianópolis/SC.	Ata de Abertura e Julgamento \r\n\r\nAviso de Resultado	21/10/2022\r\n172	 	EMPRESAS	0722021	SGPX202119053	222/2022	28/10/2022	Contratação de serviços de fabricação e instalação de estruturas de alumínio, com fornecimento de material, para a edificação do Projeto de Expansão do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, localizada em Florianópolis/SC.	 	21/10/2022\r\n173	 	UFSC	0422021	064/2021	231/2022	28/11/2022	Aquisição de 01 (um) sistema de geração de energia solar fotovoltaica, com instalação no Laboratório de Camarões Marinhos da Universidade Federal de Santa Catarina, em Florianópolis/SC.	Ata de Abertura e Julgamento\r\n\r\nAviso de Resultado 	21/11/2022\r\n174	 	UFSC	0952021	197/2021	122/2022	02/122022	Aquisição de Solução de Tecnologia da Informação e Comunicação – SOLUÇÃO DE VIDEOCONFERÊNCIA, incluindo o fornecimento de equipamentos para auditório, projeção e captação de áudio e vídeo, infraestrutura de suporte e gestão de salas virtuais para sessões de vídeo conferência, gravação, transmissão e gerenciamento.	Ata de Abertura e Julgamento \r\n\r\nAviso de Resultado	25/11/2022\r\n175	 	UFSC	0562020	071/2020	267/2022	02/122022	Contratação de serviços de cercamento da usina piloto fotovoltaica do Centro de Pesquisa e Capacitação em Energia Solar da UFSC, localizada em Florianópolis S/C, com fornecimento de material.	Ata de Abertura e Julgamento \r\n\r\nAviso de Resultado	06/01/2023\r\n176	 	UFSC	0442022	022/2022	247/2022	17/02/2023	Contratação de serviços de conserto do telhado do Complexo Aquático do Centro de Desportos da Universidade Federal de Santa Catarina.	Ata de Abertura e Julgamento \r\n\r\nAviso de Resultado	10/02/2023\r\n177	 	EMPRESAS	0742021	81276699	004/2023	08/03/2023	Contratação de serviços de instalação de paredes em dry wall, no Centro de Pesquisa e Capacitação de Energia Solar da UFSC, em Florianópolis/SC, com fornecimento de material.	 \r\n\r\n01/03/2023\r\n178	 	EMPRESAS	0742021	81276699	003/2023	16/03/2023	Aquisição de 01 (um) elevador.	 \r\n\r\n09/03/2023\r\n179	 	EMPRESAS	0742021	81276699	015/2023	17/03/2023	Contratação de serviços de elaboração de projeto e execução de sistema de ventilação e exaustão das salas de hidrogênio e amônia do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.	 \r\n\r\n10/03/2023\r\n180	 	EMPRESAS	0742021	81276699	204/2022	21/03/2023	Contratação de serviços de fabricação e instalação de arquibancada em concreto armado, com fornecimento de material.	 \r\n\r\n14/03/2023\r\n 	 	 	 	 	 	 	 	 	 \r\n181	 	EMPRESAS	0742021	81276699	014/2023	21/03/2023	Contratação de serviços de elaboração de projeto executivo e execução da rede de controle de gases do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.	 \r\n\r\n14/03/2023\r\n 	 	 	 	 	 	 	 	 	 \r\n182	 	EMPRESAS	0742021	81276699	040/2023	30/03/2023	Contratação de serviços de execução de edificação central de armazenamento de gases do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.	 \r\n\r\n22/03/2023\r\n183	 	UFSC	0652022	114/2022	234/2022	31/03/2023	Compromisso de fornecimento de serviços gráficos, cópias e reproduções.	 \r\n\r\n24/03/2023\r\n184\r\n\r\n185	 	EMPRESAS\r\n\r\nUFFS	0742021\r\n\r\n992022	81276699\r\n\r\n44/2022\r\n032/2023\r\n\r\n090/2023	14/04/2023\r\n\r\n24/07/2023	Contratação de serviços de execução de projeto hidrossanitário, com fornecimento de material\r\n\r\nAquisição de livros novos.\r\n \r\n\r\n04/04/2023\r\n\r\n17/07/2023\r\n \r\n186	 	UFSC\r\n692020\r\n139/2020\r\n099/2023\r\n25/08/2023\r\nAquisição de equipamentos de informática, áudio e vídeo.\r\n \r\nAta de Abertura e Julgamento\r\n\r\nAviso de Resultado	18/08/2023 \r\n 187	 	 Empresas - GIZ\r\n742021 	 81276699	133/2023	 	Aquisição de mobiliário,  com entrega e montagem, para o Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, em Florianópolis/SC., visando atender  as  necessidades  de  projeto  administrado  pela FAPEU, conforme especificações constantes no Termo de Referência  – Anexo I deste instrumento convocatório\r\n 	 	\r\n21/09/23\r\n\r\n\r\n31/08/2023\r\n\r\n188	 	UFSC\r\n222021\r\n2021/0078\r\n120/2023\r\n14/09/2023\r\nFornecimento de mobiliário para o CENTRO REFORMA da Universidade Federal de Santa Catarina, campus de Curitibanos/SC.\r\n \r\nAta de Abertura e Julgamento\r\n\r\nAviso de Resultado	14/09/2023 \r\n189	 	EMPRESAS\r\n742021\r\n81276699\r\n133/2023\r\n21/09/2023\r\nAquisição de mobiliário, com entrega e montagem, para o Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, em Florianópolis/SC.\r\n \r\nAta de Abertura e Julgamento\r\n\r\nAviso de Resultado	31/08/2023 \r\n190	 	UFSC\r\n562020\r\n2020/0071\r\n126/2023\r\n26/09/2023\r\nAquisição de material elétrico e SPDA.\r\n \r\nAta de Abertura e Julgamento\r\n\r\nAviso de Resultado	14/09/23 \r\n191\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n192\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n193\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n194\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n195	 	UFSC\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nUFSC\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nUFSC\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nUFSC\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nUFSC	442022\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n442022\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n222021\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n222021\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n652022	022/2022\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n022/2022\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n2021/0078\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n2021/0078\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n114/2022	130/2023\r\n\r\nQUESTIONAMENTO 01\r\n\r\nERRATA 01\r\n\r\nERRATA 02\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n168/2023\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n169/2023\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n175/2023\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n187/2023	16/10/2023\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n10/11/2023\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n22/11/2023\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n06/12/2023\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n30/11/2023	Aquisição de 12 (doze) Raias / Balizas Antiturbulência PEQUIM - para piscina com 50m - BAT061 e assessórios, MARCA FIORE.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nAquisição de 20 (vinte) blocos de saída para natação – Modelo RIO – Marca FIORE.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nAquisição de material de construção (7.550 (sete mil quinhentos e cinquenta) palanques de eucalipto, 127.500 (cento e vinte e sete mil e quinhentos) metros de arame, 4.000 (quatro mil) balancins, 200 (duzentos) quilogramas de grampos para cerca), para entrega em Curitibanos/SC.\r\n\r\n\r\n\r\nContratação de serviços técnicos especializados de construção de 30.000 (trinta mil), metros de cerca na Reserva Legal do Assentamento Índio Galdino, localizada nos municípios de Curitibanos e Frei Rogério - SC.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nContratação de serviços de locação de equipamentos de informática em Brasília - DF, pelo período de 12 (doze) meses.\r\n \r\n\r\n26/09/23\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n 01/11/2023 14/11/2023 \r\n194	 	UFSC\r\n0222021	2021/078	1752023\r\n06/12/20233	Contratação de serviços técnicos especializados de construção de 30.000 (trinta mil), metros de cerca na Reserva Legal do Assentamento Índio Galdino, localizada nos municípios de Curitibanos e Frei Rogério - SC.\r\n \r\n\r\n\r\n01/11/2023 - 14/11/2023 \r\n195	 	UFSC\r\n0652022	114/2022	187/2023\r\n30/11/2023	Contratação de serviços de locação de equipamentos de informática em Brasília - DF, pelo período de 12 (doze) meses.\r\n \r\n\r\n\r\n \r\n196	 	FAPEU	9991991	 	013/2024\r\n19/03/2024\r\nCredenciamento de Agências de Turismo para a prestação de serviços de orçamentação e fornecimento de passagens aéreas nacionais e internacionais, compreendendo serviços de emissão, marcação, remarcação, cancelamento e seguro viagem.\r\n \r\n\r\n\r\nAviso de Resultado	19/03/2024 \r\n197	 	UFSC\r\n392022	025/2022	006/2024\r\n24/04/2024	Aquisição de 01 (um) container adaptado com entrega em Florianópolis/SC.\r\n \r\n\r\n\r\n16/04/2024 \r\n198	 	UFSC\r\n752021	082/2021	\r\n031/2024-1\r\n\r\n031/2024-2\r\n\r\n24/05/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nContratação de serviços de manutenção preventiva e corretiva de 58 (cinquenta e oito) motobombas e 6 (seis) compressores radiais do Laboratório de Moluscos Marinhos, pelo período de 12 meses.	 \r\n\r\n\r\n17/05/2024 \r\n199	 	UFSC\r\n992023	186/2023	\r\n051/2024-1\r\n\r\n051/2024-2\r\n\r\n051/2024-3\r\n\r\n051-2024-4 \r\n\r\n051-2024-5\r\n\r\n07/06/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nContratação de empresa especializada para reforma das instalações do Espaço Cultural Gênero e Diversidade – ECGD, do Centro de Filosofia e Ciências Humanas da Universidade Federal de Santa Catarina - PRÉDIO DAE001.	 \r\n\r\n\r\n17/05/2024 \r\n200	 	UFSC\r\n222022	232/2021	043/2024	\r\n24/05/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nAquisição de 18 (dezoito) monitores profissionais - (Marca/Modelo: LG 32UN500).	 \r\n\r\n\r\n17/05/2024 \r\n201	 	UFSC\r\n172021	250/2020	\r\n032/2024-1\r\n\r\n032/2024-2\r\n\r\n032/2024-3\r\n\r\n04/06/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nCompromisso de fornecimento de serviços para transporte de material biológico, entre 24 (vinte e quatro) e 72 (setenta e duas) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association)	 \r\n\r\n\r\n24/05/2024 \r\n202	 	UFSC\r\n222021	2021/0078	\r\n055/2024 \r\n\r\n055/2024-E\r\n\r\n07/06/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nAquisição de 01 (uma) mesa de tensão para determinar a curva de retenção d\'agua no solo de 0 a 0,1 bar, com entrega em Curitibanos - SC.	 \r\n\r\n\r\n28/05/2024 \r\n203	 	UFSC	1162023	48/2023	042/2024	29/05/2024	Credenciamento para contratação de serviços de transporte de passageiros, com motorista, nos estados do Paraná e Rio Grande do Sul.	 \r\n\r\n\r\n04/06/2024 \r\n204	 	UFFS	1042023	41/2023	060/2024	\r\n13/06/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nCredenciamento para contratação de serviços de transporte de passageiros, com motorista, nos estados do Paraná e Rio Grande do Sul.	 \r\n\r\n\r\n13/06/2024 \r\n205	 	UFSC	222021	2021/0078	079/2024	\r\n09/08/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nContratação de serviços para\r\nplantio de 16.000 (dezesseis mil) mudas, nos municípios de Curitibanos e Frei \r\nRogério - SC.	 	01/08/2024\r\n206	 	UFSC	752021	082/2021	099/2024	\r\n26/08/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nAquisição de 100 (cem) \r\nincubadoras de moluscos em acrílico, com entrega em Florianópolis/SC.	 	19/082024\r\n207	 	UFSC	922023	146/2023	102/2024	\r\n27/08/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nContratação de serviços de \r\nlocação de estrutura, consistindo no fornecimento e montagem de cobertura, \r\npiso, pórtico, estandes, palco e tablado, com elaboração e execução de \r\nprojetos e laudos, para a realização de Feira de Cursos da UFSC 2024, nos dias \r\n10 e 11/09/2024, em Florianópolis/SC.	 	20/08/2024\r\n208	 	UFSC	222021	2021/0078	115/2024	\r\n12/09/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nContratação de serviços para\r\nplantio de 16.000 (dezesseis mil) mudas, nos municípios de Curitibanos e Frei \r\nRogério - SC.	 	05/09/2024\r\n209	 	UFFS	1162023	48/2023	121/2024	\r\n13/09/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nContratação de serviços para \r\nprodução de material de divulgação personalizado (120 camisetas, 120 camisas \r\npolo, 1.200 estojos, 1.300 garrafas tipo sqeeze, 1.200 cadernos tipo planer, \r\n1.200 crachás, 1.200 mochilas, 1.200 canetas e 1.200 mousepads), para \r\nrealização do 1º Encontro de Pesquisa e Redes de Ensino em Educação \r\nIntegral da Região Sul (EPREI-Sul), nos dias 10 a 11/10/2024, em Chapecó/SC.	 	06/09/2024\r\n210	 	UFSC	442022	22/2022	110/2024	\r\n13/09/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\n Contratação de empresa para \r\nfornecimento e instalação de portas internas e externas, bem como serviços \r\ncomplementares, para o Complexo Aquático da UFSC, em Florianópolis/SC.	 	06/09/2024\r\n211	 	UFFS	1162023	48/2023	124/2024	\r\n20/09/2024\r\n\r\n \r\n\r\n13:00 HORAS\r\n\r\nContratação de serviços de \r\nfornecimento de 4.000 (quatro mil) refeições do tipo coffee break, para \r\nrealização do EPREISUL, nos dias 10 e 11/10/2024, em Chapecó/SC.	 	13/09/2024\r\n212	 	UFFS	1132023	46/2023	\r\n131/2024\r\n\r\n \r\n\r\nERRATA 01 (UM)\r\n\r\n30/09/2024\r\n\r\n13:00 HORAS\r\n\r\nCompromisso de fornecimento de 3.400 (três mil e quatrocentas) diárias de refeições, contendo 05 (cinco) refeições cada diária, com fornecimento de material e utensílios, no período de  Abril a Junho de 2024, no Instituto Educar - Assentamento Nossa senhora Aparecida, em Pontão/RS.	 	23/09/2023','dispensa','2024-09-23 20:09:10','2024-09-25 13:28:28'),(119,'Normas Internas FAPEU e Instituições','','normas','2024-09-23 20:09:10','2024-09-23 20:09:10'),(118,'Legislação','','legislacao','2024-09-23 20:09:10','2024-09-23 20:09:10'),(117,'Boas Práticas','','boaspraticas','2024-09-23 20:09:10','2024-09-23 20:09:10'),(116,'Política de Cookies','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(115,'Política de Privacidade','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(114,'LGPD','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(113,'Comitê de Ética e Comitê Gestão de Riscos','','comiteetica','2024-09-23 20:09:10','2024-09-23 20:09:10'),(112,'Código de Conduta','','codigoconduta','2024-09-23 20:09:10','2024-09-23 20:09:10'),(111,'Programa de Integridade','','integridade','2024-09-23 20:09:10','2024-09-23 20:09:10'),(110,'Política Anticorrupção','','anticorrupcao','2024-09-23 20:09:10','2024-09-23 20:09:10'),(109,'Habilitação Jurídica e Regularidade Fiscal','','habilitacaojuridica','2024-09-23 20:09:10','2024-09-23 20:09:10'),(108,'Seleções Públicas','','selecoespublicas','2024-09-23 20:09:10','2024-09-23 20:09:10'),(107,'Pagamentos Efetuados PF/PJ','','pagamentos','2024-09-23 20:09:10','2024-09-23 20:09:10'),(106,'Compras, Contratos e Aquisições','','compras','2024-09-23 20:09:10','2024-09-23 20:09:10'),(105,'Demonstrações Contábeis','','demonstracoescontabeis','2024-09-23 20:09:10','2024-09-23 20:09:10'),(104,'Fiscalização e Auditorias','','fiscal_auditorias','2024-09-23 20:09:10','2024-09-23 20:09:10'),(103,'Avaliação de Desempenho','','avaliacaodesempenho','2024-09-23 20:09:10','2024-09-23 20:09:10'),(102,'Relatório Anual de Gestão','','relanualgestao','2024-09-23 20:09:10','2024-09-23 20:09:10'),(101,'Relatório Técnico Semestral','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(100,'Projetos','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(99,'Formulários','','formulariosprojetos','2024-09-23 20:09:10','2024-09-23 20:09:10'),(98,'Manual de Compras e Contratações','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(97,'Espaço Coordenador','','espacocoordenador','2024-09-23 20:09:10','2024-09-23 20:09:10'),(96,'Captação de Recursos e Oportunidade','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(95,'Revista FAPEU','','revistafapeu','2024-09-23 20:09:10','2024-09-23 20:09:10'),(94,'Identidade Visual','','identidadevisual','2024-09-23 20:09:10','2024-09-23 20:09:10'),(93,'Administração','','administracao','2024-09-23 20:09:10','2024-09-23 20:09:10'),(92,'Organograma','','organograma','2024-09-23 20:09:10','2024-09-23 20:09:10'),(91,'Regimento Interno','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(90,'Estatuto','','#','2024-09-23 20:09:10','2024-09-23 20:09:10'),(89,'Sobre a FAPEU','A Fundação de Amparo à Pesquisa e Extensão Universitária – FAPEU é uma instituição de direito privado, sem fins lucrativos, que tem como objetivo principal apoiar o desenvolvimento de projetos de ensino, pesquisa, extensão, desenvolvimento institucional, científico e tecnológico e estímulo à inovação universitária.\r\n\r\nA FAPEU foi instituída como fundação de apoio à Universidade Federal de Santa Catarina em 28 de setembro de 1977, com sede e foro na cidade de Florianópolis, Santa Catarina, Brasil.','sobre','2024-09-23 20:09:10','2024-09-25 13:29:46');
/*!40000 ALTER TABLE `conteudos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2025_02_11_142744_add_link_to_posts_table',1),(2,'2025_02_11_160352_add_created_at_and_updated_at_to_posts',2),(3,'2025_02_14_103112_add_imagem_to_admins_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orcamento`
--

DROP TABLE IF EXISTS `orcamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orcamento` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProjeto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeCoordenador` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vigenciaProjeto` int(11) DEFAULT NULL,
  `nomeFinanciador` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numParcelas` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `planilhaOrcamentaria` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orcamento`
--

LOCK TABLES `orcamento` WRITE;
/*!40000 ALTER TABLE `orcamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `orcamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `corpo` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` blob,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selecoespublicas`
--

DROP TABLE IF EXISTS `selecoespublicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `selecoespublicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordem` int(11) DEFAULT NULL,
  `orgao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projeto` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contratoconvenio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `selecaopublica` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataabertura` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `objeto` varchar(1499) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ataabertura` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datapublicacao` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selecoespublicas`
--

LOCK TABLES `selecoespublicas` WRITE;
/*!40000 ALTER TABLE `selecoespublicas` DISABLE KEYS */;
INSERT INTO `selecoespublicas` VALUES (1,150,'UFSC','1452016','255/2016','092/2021','08/10/2021','Contratação de serviços de abertura de valas, limpeza de canais e terraplenagem do fundo de viveiros da Fazenda Experimenta Yakult.',' Ata de Abertura\r\nAta de Julgamento\r\n','Aviso de Resultado','01/10/2021','2025-01-27 12:09:38','2025-01-27 12:09:38'),(2,151,'UFSC','0392020','66/2020','094/2021','09/12/2021','Aquisição de equipamentos e componentes de informática.','Ata de Abertura','Aviso de Resultado','01/12/2021','2025-01-27 12:10:49','2025-01-27 12:10:49'),(3,152,'UFSC','0172021','250/2020','152/2021 - ANEXO V – PLANILHA DE ENDEREÇOS_1522021','05/01/2022','Contratação de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA.','Ata de Abertura e Julgamento','Aviso de Resultado','23/12/2021','2025-01-27 12:13:06','2025-01-27 12:13:06'),(4,153,'UFSC','0692020','139/2020','120/2021','29/12/2021','Contratação de serviços de reforma e manutenção do Laboratório de Educação em Rede - LED, localizado na Universidade Federal de Santa Catarina - Florianópolis/SC.','Ata de abertura e Julgamento','Aviso de resultado','07/01/2022','2025-01-27 12:13:45','2025-01-27 12:13:45'),(5,154,'UFSC','0542020','342/2019','042/2022','17/03/2022','Contratação de serviços para levantamento de recursos específicos da sociobiodiversidade ligados à Acolhida na Colônia - Desenvolvimento de roteiros integrados de agroturismo com foco em produtos e serviços da sociobiodiversidade.','Ata de abertura e Julgamento','Aviso de resultado','09/03/2022','2025-01-27 12:14:01','2025-01-27 12:14:01'),(6,155,'UFSC','0172021','250/2020','076/2022','22/04/2022','Contratação de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association).','Ata de Abertura e Julgamento','Aviso de Resultado','13/04/2022','2025-01-27 12:15:40','2025-01-27 12:15:40'),(7,156,'UFSC','0232021','032/2021','077/2022','26/04/2022','Contratação de serviços de comunicação de dados (SCD), na forma de instalação, manutenção e operação, com dupla abordagem, e de vazão assegurada, de 10 Gbps (Dez gigabits por segundo) em ambas as abordagens, interligando dois pontos na cidade de Florianópolis/SC, pelo período de 12 (doze) meses.','Ata de Abertura e Julgamento','Aviso de Resultado','14/04/2022','2025-01-27 12:17:38','2025-01-27 12:17:38'),(8,157,'BNDES','0222021','078/2021','075/2022','02/05/2022','Aquisição de 01 (um) veículo automotivo do tipo pick-up, 0 Km (zero quilometro).','Ata de Abertura e Julgamento','Aviso de Resultado','25/04/2022','2025-01-27 12:18:06','2025-01-27 12:18:06'),(9,158,'UFSC','0692020','139/2020','091/2022','09/05/2022','Aquisição de equipamentos (04 (quatro) Smart TV 70\"; 04 (quatro) Nobreak 6000VA; 03 (três) Tele Prompter).','Ata de Abertura e Julgamento','Aviso de Resultado','02/05/2022','2025-01-27 12:18:36','2025-01-27 12:18:36'),(10,159,'FCEE','0662021','36/FCEE/2021','098/2022','10/05/2022','Contratação de empresa especializada em gestão de comunicação para a prestação de serviços de produção, captação, edição, finalização com experiência em televisão para transmissão de áudio e vídeo em streaming e via satélite.','Ata de Abertura e Julgamento','Aviso de Resultado','03/05/2022','2025-01-27 12:50:49','2025-01-27 12:50:49'),(11,160,'GIZ','0742021','81276699','083/2022 - QUESTIONAMENTO I','16/05/2022','Contratação de serviços de fabricação e instalação de estrutura metálica, com fornecimento de material, para a edificação do Projeto de Expansão do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, localizada em Florianópolis/SC.','Ata de Abertura e Julgamento','Aviso de Resultado','09/05/2022','2025-01-27 12:51:34','2025-01-27 12:51:34'),(12,161,'UFSC','0752021','082/2021','096/2022','10/06/2022','Aquisição de 01 (um) resfriador de água (chiller), com capacidade de 60.000 Kcal/h – 20 TR.','Ata de Abertura e Julgamento','Aviso de Resultado','03/06/2022','2025-01-27 12:51:56','2025-01-27 12:51:56'),(13,162,'FAPEU','FAPEU','S/Nº','120/2022','13/06/2022','Compromisso de fornecimento de passagens rodoviárias nacionais, compreendendo serviços de cotação de valores, reserva, emissão, marcação/remarcação, desdobramento, substituição, revalidação, cancelamento, fornecimento e endosso.','Ata de Abertura e Julgamento','Aviso de Resultado','06/06/2022','2025-01-27 12:52:56','2025-01-27 12:52:56'),(14,163,'IFC','0922021','IFC 207/2021','128/2022','01/07/2022','Aquisição de 01 (um) trator agrícola novo, com capota e carregador frontal.','Ata de Abertura e Julgamento','Aviso de Resultado','24/06/2022','2025-01-27 12:53:19','2025-01-27 12:53:19'),(15,164,'UFSC','0752021','082/2021','130/2022','01/07/2022','Contratação de serviços de manutenção preventiva, em caráter mensal, dos sistemas elétricos do Laboratório de Moluscos Marinhos (LMM), da Universidade Federal de Santa Catarina, pelo período de 12 (doze) meses.','Ata de Abertura e Julgamento','Aviso de Resultado','14/07/2022','2025-01-27 12:58:39','2025-01-27 12:58:39'),(16,165,'UFSC','0752021','082/2021','129/2022','29/07/2022','Contratação de serviços de manutenção preventiva, em caráter mensal, dos equipamentos responsáveis pela climatização das diferentes áreas e setores do Laboratório de Moluscos Marinhos (LMM), da Universidade Federal de Santa Catarina (UFSC), pelo período de 12 (doze) meses.','Ata de Abertura e Julgamento','Aviso de Resultado','22/07/2022','2025-01-27 13:00:29','2025-01-27 13:00:29'),(17,166,'PETROBRAS','0252021','Petrobras 0050.0117882.21.9','147/2022','12/08/2022','Contratação de serviços especializados para o desenvolvimento e implementação de módulo de potência e periféricos para soldagem de pinos por arco retraído aplicados ao projeto de P&D Processo Stud Welding para Aplicação em Soldagem Área Naval.','Ata de Abertura e Julgamento','Aviso de Resultado','05/08/2022','2025-01-27 13:00:50','2025-01-27 13:00:50'),(18,167,'UFSC','0752021','082/2021','159/2022','30/08/2022','Compromisso de fornecimento de dióxido de carbono (CO2).','Ata de Abertura e Julgamento','Aviso de Resultado','23/08/2022','2025-01-27 13:01:35','2025-01-27 13:01:35'),(19,168,'UFSC','0172021','250/2020','172/2022 - Anexo V Planilha de Endereços','06/09/2022','Compromisso de fornecimento de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association).','Ata de Abertura e Julgamento','Aviso de Resultado','30/08/2022','2025-01-27 13:01:54','2025-01-27 13:01:54'),(20,169,'UFSC','0392020','066/2020','165/2022','08/09/2022','Aquisição de equipamentos de informática (04 (quatro) Desktops i7 e 04 (quatro) Notebooks i5).','Ata de Abertura e Julgamento','Aviso de Resultado','31/08/2022','2025-01-27 13:02:03','2025-01-27 13:02:03'),(21,170,'UFSC','0532021','166/2021','180/2022','22/09/2022','Compromisso de fornecimento de rações para camarões marinhos - Marca GUABI.','Ata de Abertura e Julgamento','Aviso de Resultado','15/09/2022','2025-01-27 13:02:11','2025-01-27 13:02:11'),(22,171,'BNDES','0222021','078/2021','193/2022','17/10/2022','Aquisição de 03 (três) containers adaptados para construção do Centro Reforma da Universidade Federal de Santa Catarina - Campus Curitibanos.','Ata de Abertura e Julgamento','Aviso de Resultado','10/10/2022','2025-01-27 13:02:22','2025-01-27 13:02:22'),(23,172,'EMPRESAS','0722021','SGPX202119053','222/2022','28/10/2022','Contratação de serviços de fabricação e instalação de estruturas de alumínio, com fornecimento de material, para a edificação do Projeto de Expansão do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, localizada em Florianópolis/SC.','Ata de Abertura e Julgamento','Aviso de Resultado','21/10/2022','2025-01-27 13:03:17','2025-01-27 13:03:17'),(24,173,'UFSC','0422021','064/2021','231/2022','28/11/2022','Aquisição de 01 (um) sistema de geração de energia solar fotovoltaica, com instalação no Laboratório de Camarões Marinhos da Universidade Federal de Santa Catarina, em Florianópolis/SC.','Ata de Abertura e Julgamento','Aviso de Resultado','21/11/2022','2025-01-27 13:03:53','2025-01-27 13:03:53'),(25,174,'UFSC','0952021','197/2021','122/2022','02/12/2022','Aquisição de Solução de Tecnologia da Informação e Comunicação – SOLUÇÃO DE VIDEOCONFERÊNCIA, incluindo o fornecimento de equipamentos para auditório, projeção e captação de áudio e vídeo, infraestrutura de suporte e gestão de salas virtuais para sessões de vídeo conferência, gravação, transmissão e gerenciamento.','Ata de Abertura e Julgamento','Aviso de Resultado','25/11/2022','2025-01-27 13:04:21','2025-01-27 13:04:21'),(26,175,'UFSC','0562020','071/2020','267/2022','02/12/2022','Contratação de serviços de cercamento da usina piloto fotovoltaica do Centro de Pesquisa e Capacitação em Energia Solar da UFSC, localizada em Florianópolis S/C, com fornecimento de material.','Ata de Abertura e Julgamento','Aviso de Resultado','06/01/2023','2025-01-27 13:04:54','2025-01-27 13:04:54'),(27,176,'UFSC','0442022','022/2022','247/2022','17/02/2023','Contratação de serviços de conserto do telhado do Complexo Aquático do Centro de Desportos da Universidade Federal de Santa Catarina.','Ata de Abertura e Julgamento','Aviso de Resultado','10/02/2023','2025-01-27 13:05:13','2025-01-27 13:05:13'),(28,177,'EMPRESAS','0742021','81276699','004/2023','08/03/2023','Contratação de serviços de instalação de paredes em dry wall, no Centro de Pesquisa e Capacitação de Energia Solar da UFSC, em Florianópolis/SC, com fornecimento de material.','','','01/03/2023','2025-01-27 13:28:34','2025-01-27 13:28:34'),(29,178,'EMPRESAS','0742021','81276699','003/2023','16/03/2023','Aquisição de 01 (um) elevador.','','','09/03/2023','2025-01-27 13:40:35','2025-01-27 13:40:35'),(30,179,'EMPRESAS','0742021','81276699','015/2023','17/03/2023','Contratação de serviços de elaboração de projeto e execução de sistema de ventilação e exaustão das salas de hidrogênio e amônia do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.','','','10/03/2023','2025-01-27 13:51:00','2025-01-27 13:51:00'),(31,180,'EMPRESAS','0742021','81276699','204/2022','21/03/2023','Contratação de serviços de fabricação e instalação de arquibancada em concreto armado, com fornecimento de material.','','','14/03/2023','2025-01-27 13:51:44','2025-01-27 13:51:44'),(32,181,'EMPRESAS','0742021','81276699','014/2023','21/03/2023','Contratação de serviços de elaboração de projeto executivo e execução da rede de controle de gases do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.','','','14/03/2023','2025-01-27 13:52:03','2025-01-27 13:52:03'),(33,182,'EMPRESAS','0742021','81276699','040/2023','30/03/2023','Contratação de serviços de execução de edificação central de armazenamento de gases do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.','','','22/03/2023','2025-01-27 13:53:22','2025-01-27 13:53:22'),(34,183,'UFSC','0652022','114/2022','234/2022','31/03/2023','Compromisso de fornecimento de serviços gráficos, cópias e reproduções.','','','24/03/2023','2025-01-27 13:53:31','2025-01-27 13:53:31'),(35,184,'EMPRESAS','0742021','81276699','032/2023','14/04/2023','Contratação de serviços de execução de projeto hidrossanitário, com fornecimento de material','Ata de Abertura e Julgamento','032/2023','04/04/2023','2025-01-27 13:55:08','2025-01-27 13:55:08'),(36,185,'UFFS','992022','44/2022','090/2023','24/07/2023','Aquisição de livros novos.','Ata de Abertura e Julgamento','090/2023','17/07/2023','2025-01-27 13:55:12','2025-01-27 13:55:12'),(37,186,'UFSC','692020','139/2020','099/2023','25/08/2023','Aquisição de equipamentos de informática, áudio e vídeo.','Ata de Abertura e Julgamento','Aviso de Resultado','18/08/2023','2025-01-27 13:56:19','2025-01-27 13:56:19'),(38,187,'Empresas - GIZ','742021','81276699','133/2023','21/09/2023','Aquisição de mobiliário, com entrega e montagem, para o Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, em Florianópolis/SC., visando atender as necessidades de projeto administrado pela FAPEU, conforme especificações constantes no Termo de Referência – Anexo I deste instrumento convocatório','Ata de Abertura e Julgamento','133/2023','31/08/2023','2025-01-27 13:56:47','2025-01-27 13:56:47'),(39,188,'UFSC','222021','2021/0078','120/2023','14/09/2023','Fornecimento de mobiliário para o CENTRO REFORMA da Universidade Federal de Santa Catarina, campus de Curitibanos/SC.','Ata de Abertura e Julgamento','Aviso de Resultado','14/09/2023','2025-01-27 13:56:50','2025-01-27 13:56:50'),(40,189,'EMPRESAS','742021','81276699','133/2023','21/09/2023','Aquisição de mobiliário, com entrega e montagem, para o Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, em Florianópolis/SC.','Ata de Abertura e Julgamento','Aviso de Resultado','31/08/2023','2025-01-27 13:57:05','2025-01-27 13:57:05'),(41,190,'UFSC','562020','2020/0071','126/2023','26/09/2023','Aquisição de material elétrico e SPDA.','Ata de Abertura e Julgamento','Aviso de Resultado','14/09/2023','2025-01-27 14:04:58','2025-01-27 14:04:58'),(42,191,'UFSC','442022','022/2022','130/2023 - QUESTIONAMENTO 01 - ERRATA 01 - ERRATA 02','16/10/2023','Aquisição de 12 (doze) Raias / Balizas Antiturbulência PEQUIM - para piscina com 50m - BAT061 e assessórios, MARCA FIORE.','Ata de Abertura e Julgamento','130/2023','26/09/2023','2025-01-27 14:05:02','2025-01-27 14:05:02'),(43,192,'UFSC','442022','022/2022','168/2023','10/11/2023','Aquisição de 20 (vinte) blocos de saída para natação – Modelo RIO – Marca FIORE.','Ata de Abertura e Julgamento','168/2023','01/11/2023','2025-01-27 14:05:05','2025-01-27 14:05:05'),(44,193,'UFSC','222021','2021/0078','169/2023','22/11/2023','Aquisição de material de construção (7.550 (sete mil quinhentos e cinquenta) palanques de eucalipto, 127.500 (cento e vinte e sete mil e quinhentos) metros de arame, 4.000 (quatro mil) balancins, 200 (duzentos) quilogramas de grampos para cerca), para entrega em Curitibanos/SC.','Ata de Abertura e Julgamento','169/2023','14/11/2023','2025-01-27 14:05:14','2025-01-27 14:05:14'),(45,194,'UFSC','0222021','2021/078','1752023','06/12/2023','Contratação de serviços técnicos especializados de construção de 30.000 (trinta mil), metros de cerca na Reserva Legal do Assentamento Índio Galdino, localizada nos municípios de Curitibanos e Frei Rogério - SC.','','','01/11/2023','2025-01-27 14:05:18','2025-01-27 14:05:18'),(46,195,'UFSC','0652022','114/2022','187/2023','30/11/2023','Contratação de serviços de locação de equipamentos de informática em Brasília - DF, pelo período de 12 (doze) meses.','','','14/11/2023','2025-01-27 14:05:22','2025-01-27 14:05:22'),(47,196,'FAPEU','9991991','','013/2024','19/03/2024','Credenciamento de Agências de Turismo para a prestação de serviços de orçamentação e fornecimento de passagens aéreas nacionais e internacionais, compreendendo serviços de emissão, marcação, remarcação, cancelamento e seguro viagem.','','','19/03/2024','2025-01-27 14:05:25','2025-01-27 14:05:25'),(48,197,'UFSC','392022','025/2022','006/2024','24/04/2024','Aquisição de 01 (um) container adaptado com entrega em Florianópolis/SC.','Ata de Abertura e Julgamento','006/2024','16/04/2024','2025-01-27 14:05:29','2025-01-27 14:05:29'),(49,198,'UFSC','752021','082/2021','031/2024-1, 031/2024-2','24/05/2024','Contratação de serviços de manutenção preventiva e corretiva de 58 (cinquenta e oito) motobombas e 6 (seis) compressores radiais do Laboratório de Moluscos Marinhos, pelo período de 12 meses.','Ata de Abertura e Julgamento','031/2024','17/05/2024','2025-01-27 14:05:33','2025-01-27 14:05:33'),(50,199,'UFSC','992023','186/2023','051/2024-1, 051/2024-2, 051/2024-3, 051-2024-4, 051-2024-5','07/06/2024','Contratação de empresa especializada para reforma das instalações do Espaço Cultural Gênero e Diversidade – ECGD, do Centro de Filosofia e Ciências Humanas da Universidade Federal de Santa Catarina - PRÉDIO DAE001.','Ata de Abertura e Julgamento','051/2024','17/05/2024','2025-01-27 14:05:37','2025-01-27 14:05:37'),(51,200,'UFSC','222022','232/2021','043/2024','24/05/2024','Aquisição de 18 (dezoito) monitores profissionais - (Marca/Modelo: LG 32UN500).','Ata de Abertura e Julgamento','043/2024','17/05/2024','2025-01-27 14:05:41','2025-01-27 14:05:41'),(52,201,'UFSC','172021','250/2020','032/2024-1, 032/2024-2, 032/2024-3','04/06/2024','Compromisso de fornecimento de serviços para transporte de material biológico, entre 24 (vinte e quatro) e 72 (setenta e duas) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association).','Ata de Abertura e Julgamento','032/2024','24/05/2024','2025-01-27 14:05:48','2025-01-27 14:05:48'),(53,202,'UFSC','222021','2021/0078','055/2024, 055/2024-E','07/06/2024','Aquisição de 01 (uma) mesa de tensão para determinar a curva de retenção d\'agua no solo de 0 a 0,1 bar, com entrega em Curitibanos - SC.','Ata de Abertura e Julgamento','055/2024','28/05/2024','2025-01-27 14:05:52','2025-01-27 14:05:52'),(54,203,'UFSC','1162023','48/2023','042/2024','29/05/2024','Credenciamento para contratação de serviços de transporte de passageiros, com motorista, nos estados do Paraná e Rio Grande do Sul.','','','04/06/2024','2025-01-27 14:05:55','2025-01-27 14:05:55'),(55,204,'UFFS','1042023','41/2023','060/2024','13/06/2024','Credenciamento para contratação de serviços de transporte de passageiros, com motorista, nos estados do Paraná e Rio Grande do Sul.','','','13/06/2024','2025-01-27 14:05:59','2025-01-27 14:05:59'),(56,205,'UFSC','222021','2021/0078','079/2024','09/08/2024','Contratação de serviços para plantio de 16.000 (dezesseis mil) mudas, nos municípios de Curitibanos e Frei Rogério - SC.','','','01/08/2024','2025-01-27 14:06:37','2025-01-27 14:06:37'),(57,206,'UFSC','752021','082/2021','099/2024','26/08/2024','Aquisição de 100 (cem) incubadoras de moluscos em acrílico, com entrega em Florianópolis/SC.','Ata de Abertura e Julgamento','099/2024','19/08/2024','2025-01-27 14:16:05','2025-01-27 14:16:05'),(58,207,'UFSC','922023','146/2023','102/2024','27/08/2024','Contratação de serviços de locação de estrutura, consistindo no fornecimento e montagem de cobertura, piso, pórtico, estandes, palco e tablado, com elaboração e execução de projetos e laudos, para a realização de Feira de Cursos da UFSC 2024, nos dias 10 e 11/09/2024, em Florianópolis/SC.','Ata de Abertura e Julgamento','102/2024','20/08/2024','2025-01-27 14:16:18','2025-01-27 14:16:18'),(59,208,'UFSC','222021','2021/0078','115/2024','12/09/2024','Contratação de serviços para plantio de 16.000 (dezesseis mil) mudas, nos municípios de Curitibanos e Frei Rogério - SC.','','','05/09/2024','2025-01-27 14:16:41','2025-01-27 14:16:41'),(60,209,'UFFS','1162023','48/2023','121/2024','13/09/2024','Contratação de serviços para produção de material de divulgação personalizado (120 camisetas, 120 camisas polo, 1.200 estojos, 1.300 garrafas tipo sqeeze, 1.200 cadernos tipo planer, 1.200 crachás, 1.200 mochilas, 1.200 canetas e 1.200 mousepads), para realização do 1º Encontro de Pesquisa e Redes de Ensino em Educação Integral da Região Sul (EPREI-Sul), nos dias 10 a 11/10/2024, em Chapecó/SC.','Ata de Abertura e Julgamento','121/2024','06/09/2024','2025-01-27 14:16:45','2025-01-27 14:16:45'),(61,210,'UFSC','442022','22/2022','110/2024','13/09/2024','Contratação de empresa para fornecimento e instalação de portas internas e externas, bem como serviços complementares, para o Complexo Aquático da UFSC, em Florianópolis/SC.','','','06/09/2024','2025-01-27 14:16:49','2025-01-27 14:16:49'),(62,211,'UFFS','1162023','48/2023','124/2024','20/09/2024','Contratação de serviços de fornecimento de 4.000 (quatro mil) refeições do tipo coffee break, para realização do EPREISUL, nos dias 10 e 11/10/2024, em Chapecó/SC.','','','13/09/2024','2025-01-27 14:16:53','2025-01-27 14:16:53'),(63,212,'UFFS','1132023','46/2023','131/2024 - ERRATA 01 (UM)','30/09/2024','Compromisso de fornecimento de 3.400 (três mil e quatrocentas) diárias de refeições, contendo 05 (cinco) refeições cada diária, com fornecimento de material e utensílios, no período de Abril a Junho de 2024, no Instituto Educar - Assentamento Nossa senhora Aparecida, em Pontão/RS.','','','23/09/2023','2025-01-27 14:16:57','2025-01-27 14:16:57'),(64,213,'UFSC','262024','259/2023','146/2024','24/10/2024','Credenciamento de empresas especializadas, com experiência em atuação em ATHIS, para prestação de serviços técnicos, em atendimento a Lei Federal nº 11.888/2008, na elaboração de projetos de engenharia e arquitetura para melhorias habitacionais, planejamento e execução de obra arquitetônica de pequeno porte/instalação arquitetônica, de cunho social, elaboração e análise de orçamentos, contratação de mão-de-obra e compra de material, para o projeto Projeto 262024 - UFSC 259/2023 - PERIFERIA VIVA:FREI DAMIÃO.','','','24/10/2024','2025-01-27 14:17:01','2025-01-27 14:17:01'),(65,214,'UFSC','112024','265/2023','144/2024 - Levantamento Topográfico_Anexos','22/11/2024','Contratação de empresa especializada na execução de serviços de Levantamento Topográfico Planialtimétrico e de Detalhes, bem como Aerolevantamento, para os aeroportos de Barra do Garças (MT), Picos (PI), Teixeira de Freitas (BA) e Barra do Corda (MA).','','','01/11/2024','2025-01-27 14:17:05','2025-01-27 14:17:05'),(66,215,'UFSC','392022','25/2022','130/2024','11/11/2024','Serviço refere-se ao fornecimento e colocação de materiais e mão de obra para paredes em gesso acartonado (dry wall), como segue: Seis (06) paredes divisórias internas de 2,73 × 4,80 ms, com isolamento acústico (instalação de manta de lã de rocha no interior das paredes). Cinco (05) paredes divisórias internas de 3,20 × 4,80 ms, com isolamento acústico (instalação de manta de lã de rocha no interior das paredes). Parede do corredor de 30,60 × 3,20 ms, com isolamento acústico (instalação de manta de lã de rocha no interior das paredes). Fornecimento e instalação de onze (11) portas de madeira, de 0,80×2,10, completas. Fechamento de seis (06) buracos em paredes de alvenaria, com gesso acartonado. Retirada (das divisórias existentes) e recolocação de 30 vidros canelados nas paredes a serem construídas. Desmontagem das paredes existentes e colocação das mesmas em local determinado. O fornecedor deverá dispor de material (gesso), mão de obra, ferramentas, escadas ou andaimes baixos e limpeza grossa. Local de execução do serviço: EXR/CCA, Prédio da Agronomia, primeiro piso, sobre a biblioteca, salas de professores, Centro de Ciências Agrárias, Universidade Federal de Santa Catarina, Rodovia Admar Gonzaga, 1346, Itacorubi, Florianópolis - SC, CEP 88034-000.','','','04/11/2024','2025-01-27 14:19:14','2025-01-27 14:19:14'),(67,216,'EMPRESAS','1232023','','150/2024','15/11/2024','Contratação de pessoa jurídica na modalidade de alocação de recursos especializados para a prestação de serviços de caráter consultivo, exploratório, orientativo, colaborativo, de suporte, engenharia, desenho de metodologias, gerenciamento de projetos com foco em estruturação de ambientes de inteligência avançado em grandes organizações. Utilizando ecossistema de big data, produtos de inteligência usando business intelligence (BI) integrados por API, power apps e ferramentas de integração de big data analytics, governança centralizada de processo estruturado de inteligência orientado preponderantemente por lógica de machine learning (ML ou aprendizado de máquina), análise preditiva e integração com ERP (sistema de gestão corporativo) com plataforma de gestão e governança integrada ao processo de inteligência. Inclui também um conjunto de trilhas de formação com avenidas de conhecimento dentro das necessidades da organização, nos temas: transformação digital, inteligência artificial, governança de TIC, ferramentas avançadas de business intelligence, ecossistema de big data, tendências tecnológicas, estratégias corporativas, monitoramento da estratégia, gestão avançada de riscos organizacionais, power apps em projeto da CONTRATANTE.','','','07/11/2024','2025-01-27 14:19:24','2025-01-27 14:19:24'),(68,217,'EMPRESAS','1232023','','151/2024, 151/2024 ERRATA 01 (UM)','15/11/2024','Contratação de pessoa jurídica em modalidade de alocação de recursos especializados para a prestação de serviços de caráter consultivo, exploratório, orientativo, colaborativo, de suporte, desenho de metodologias, gerenciamento de projetos com ênfase em estudo e implementação de roadmap de cibersegurança. Inclui também a estruturação e implementação de trilhas de formação com trilhas de conhecimento dentro das necessidades da organização, nos temas envolvendo implementação de planos e roadmaps tecnológicos, mapeamento de tecnologia, mapeamento e mitigação de riscos.','','','07/11/2024','2025-01-27 14:33:55','2025-01-27 14:33:55'),(69,218,'UFSC','112024','265/2023','178/2024, 178/2024_TERMO DE REFERÊNCIA','10/01/2025','Contratação de empresa especializada para a execução dos serviços de Investigações Geotécnicas para os aeroportos de Barra do Garças (MT), de Picos (PI), de Teixeira de Freitas (BA) e de Barra do Corda (MA).','','','05/12/2024','2025-01-27 14:33:59','2025-01-27 14:33:59'),(70,219,'UFSC','112024','265/2023','180/2024, 180/2024 ANEXOS, 180/2024 ERRATA Nº 01','10/01/2025','Contratação de empresa especializada para a execução dos serviços de avaliação de pavimentos para os aeroportos de Barra do Garças (MT), de Picos (PI) e de Teixeira de Freitas (BA).','','','09/12/2024','2025-01-27 14:34:03','2025-01-27 14:34:03'),(71,220,'UFSC','112024','265/2023','190/2024, 190/2024_TR, 190/2024_ANEXO_GARÇAS, 190/2024_ANEXO_PICOS, 190/2024_ANEXO_TEIXEIRA, 190/2024_ANEXO_CORDA, QUESTIONAMENTO Nº 01 (UM)','22/01/2025','Contratação de empresa especializada na execução de serviços de Levantamento Topográfico Planialtimétrico e de Detalhes, bem como Aerolevantamento, para os aeroportos de Barra do Garças (MT), Picos (PI), Teixeira de Freitas (BA) e Barra do Corda (MA).','','','27/12/2024','2025-01-27 14:34:06','2025-01-27 14:34:06');
/*!40000 ALTER TABLE `selecoespublicas` ENABLE KEYS */;
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
INSERT INTO `sessions` VALUES ('anYaERt9IosdXzU6DdieI7V6SLMR1X8ErUf2E5lu',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1dhQ0NqeWVUM2p6QXhKTlBsTmE5Ymp2dmtocFRwc3Y3dnBNMVQzbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9sb2dpbmFkbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1739905618),('fGvSOr94scMUx7agjBMcP4MZaZPrIAv9m5AFGDER',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSVYyQ0NVbngzOE9kaHN3eE42UUdqS2lndXRCUVJGdjFYM1hPTGxnNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTU6ImFkbWluX2xvZ2dlZF9pbiI7YjoxO3M6MjA6ImFkbWluX2xvZ2dlZF9pbl90aW1lIjtpOjE3Mzk4ODY2NzI7fQ==',1739894629);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setor`
--

DROP TABLE IF EXISTS `setor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
INSERT INTO `setor` VALUES (1,'Almoxarifado','almoxarifado@fapeu.org.br'),(2,'Administrativo','gabriel.lima@fapeu.org.br'),(3,'Captação e implantação de projetos','projetos@fapeu.org.br'),(4,'Compras Nacionais','compras@fapeu.org.br'),(5,'Contas a Pagar','contaspagar@fapeu.org.br'),(6,'Contas a Receber','contasreceber@fapeu.org.br'),(7,'Departamento de Prestação de Contas','prestacaocontas@fapeu.org.br'),(8,'Diretoria Executiva','diretoria@fapeu.org.br'),(9,'Financeiro','financeiro@fapeu.org.br'),(10,'Gerência Administrativa e Financeira','gerenciafinanceira@fapeu.org.br'),(11,'Gerência de Contabilidade','contabilidade@fapeu.org.br'),(12,'Gerência de Informatica','ti_suporte@fapeu.org.br'),(13,'Gerência de Projetos','gerenciaprojetos@fapeu.org.br'),(14,'Importação','importacao@fapeu.org.br'),(15,'Jurídico','juridico@fapeu.org.br'),(16,'Licitação','licitacao@fapeu.org.br'),(17,'Recursos Humanos','rh@fapeu.org.br'),(18,'Secretária Executiva','secretaria@fapeu.org.br'),(19,'Superintendência','superintendencia@fapeu.org.br');
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sitefapeu'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-19  7:36:09
