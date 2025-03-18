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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `corpo` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `agendamento` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'desenho','TESTE STESTE TE STES','123','2024-09-23 14:14:25','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(2,'joias','ASDAD ASDAS DAS DAS DAS DAS DAS DAS dASJjDBASVHD AS VIH ASDVHIASASFwa vA^DÂSjbASJDbaskbaew~bslãsr','3','2024-09-23 14:14:35','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(3,'desenho','DASDAS AS DASd ASD AS','5','2024-09-23 14:15:03','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(4,'joias','DAS AS DASDAS DAS DSA DAS','6','2024-09-23 14:15:22','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(5,'joias','DASDAS DAS DAS DAS AS DA','7','2024-09-23 14:15:36','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(6,'desenho','TESTE STESTE TE STES','8','2024-09-23 14:14:25','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(7,'joias','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','9','2024-09-23 14:14:35','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(21,'tesss','stesss','0','2024-09-23 19:56:25','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(8,'desenho','321','321','2024-09-23 14:15:03','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(9,'joias','DAS AS DASDAS DAS DSA DAS','234','2024-09-23 14:15:22','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(10,'joias','DASDAS DAS DAS DAS AS DA','51','2024-09-23 14:15:36','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(11,'kaigi','Testando','54','2024-09-23 17:42:23','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(12,'desenho','adsda','545','2024-09-23 17:44:38','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(13,'asdas','dasdas','6345','2024-09-23 17:44:48','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(14,'teeeeeeeeeeeee','Testeeeeeee','745','2024-09-23 18:38:03','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(15,'a','a','75','2024-09-23 18:48:03','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(16,'a','as','234','2024-09-23 18:49:09','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(17,'a','as','554','2024-09-23 18:49:17','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(18,'a','as','774','2024-09-23 18:49:47','2024-10-08 17:35:08',NULL,NULL,NULL,NULL),(19,'asda','asda','123','2024-09-23 18:49:55','2024-10-08 18:44:37','prediofapeu.png',NULL,NULL,NULL),(20,'a','a','a','2024-09-23 19:49:11','2024-10-08 18:05:58','ufsc.png',NULL,NULL,NULL),(27,'TITULO','CORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a aCORPO aa a a a a a a a','s','2024-09-25 13:58:38','2024-10-08 18:46:13','confies.png',NULL,NULL,NULL),(28,'teste','teste','teste','2024-10-08 19:07:21','2024-10-15 17:34:03','1728927630103.jpeg',NULL,NULL,NULL),(29,'desenho','TESTE','dasas','2024-10-08 19:11:53','2024-10-15 17:24:50','1728414713.jpg',NULL,NULL,NULL),(48,'NOVO SITE DA FAPEU','TESTANDO NOVO SITE DA FAPEU','novo-site-da-fapeu','2024-10-08 20:04:07','2024-10-15 17:24:50','1728417847.jpg',NULL,NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionario_aptidao`
--

DROP TABLE IF EXISTS `questionario_aptidao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questionario_aptidao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta1` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `pergunta2` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `pergunta3` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `pergunta4` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `pergunta5` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `pergunta6` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `pergunta7` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `termo` enum('sim','nao') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionario_aptidao`
--

LOCK TABLES `questionario_aptidao` WRITE;
/*!40000 ALTER TABLE `questionario_aptidao` DISABLE KEYS */;
/*!40000 ALTER TABLE `questionario_aptidao` ENABLE KEYS */;
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
  `processo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projeto` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contratoconvenio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `licitacao` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataabertura` timestamp NULL DEFAULT NULL,
  `objeto` varchar(555) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datapublicacao` timestamp NULL DEFAULT NULL,
  `ataabertura` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1201 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selecoespublicas`
--

LOCK TABLES `selecoespublicas` WRITE;
/*!40000 ALTER TABLE `selecoespublicas` DISABLE KEYS */;
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
INSERT INTO `sessions` VALUES ('v6KYyx6xxPxV7fv8aYwwNtRBbEzqnvLIYcw9ZB2S',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTThOdkw4ckgwUkwxWUFpaVp0Z3NCQ3UwZ1RzZk5RYm92Z2ZrbWtKMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zb2JyZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1737555165);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
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
  `perfil` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'123','123',NULL,'$2y$12$K.cJXIWdCeVZMTmaGdXFquLgDZFyY7WUMPLWfliIPAoOU3WSfj8DC',NULL,NULL,NULL,'1');
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

-- Dump completed on 2025-01-22 11:21:04
