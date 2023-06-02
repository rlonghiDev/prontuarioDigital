-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: id20543955_prontuariodigital
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.2

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
-- Table structure for table `anamnese`
--

DROP TABLE IF EXISTS `anamnese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anamnese` (
  `idanamnese` int NOT NULL AUTO_INCREMENT COMMENT '	',
  `queixa` varchar(100) DEFAULT NULL,
  `historicoDoenca` varchar(100) DEFAULT NULL,
  `historicoFamiliar` varchar(100) DEFAULT NULL,
  `historicoPessoal` varchar(100) DEFAULT NULL,
  `idpaciente` int NOT NULL,
  `cid_codCid` varchar(10) NOT NULL,
  PRIMARY KEY (`idanamnese`),
  KEY `fk_anamnese_paciente1_idx` (`idpaciente`),
  KEY `fk_anamnese_cid1_idx` (`cid_codCid`),
  CONSTRAINT `fk_anamnese_paciente1` FOREIGN KEY (`idpaciente`) REFERENCES `paciente` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anamnese`
--

LOCK TABLES `anamnese` WRITE;
/*!40000 ALTER TABLE `anamnese` DISABLE KEYS */;
/*!40000 ALTER TABLE `anamnese` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cid`
--

DROP TABLE IF EXISTS `cid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cid` (
  `codCid` varchar(10) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codCid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cid`
--

LOCK TABLES `cid` WRITE;
/*!40000 ALTER TABLE `cid` DISABLE KEYS */;
/*!40000 ALTER TABLE `cid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controleLogin`
--

DROP TABLE IF EXISTS `controleLogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `controleLogin` (
  `idcontroleLogin` int NOT NULL AUTO_INCREMENT,
  `entrada` varchar(45) DEFAULT NULL,
  `saida` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int NOT NULL,
  PRIMARY KEY (`idcontroleLogin`,`usuario_idusuario`),
  KEY `fk_controleLogin_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controleLogin`
--

LOCK TABLES `controleLogin` WRITE;
/*!40000 ALTER TABLE `controleLogin` DISABLE KEYS */;
/*!40000 ALTER TABLE `controleLogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `idendereco` int NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(65) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `idtipoEndereco` int NOT NULL,
  `idusuario` int NOT NULL COMMENT '	',
  `numero` varchar(10) DEFAULT NULL,
  `observacao` varchar(100) DEFAULT NULL,
  `idpaciente` int NOT NULL,
  PRIMARY KEY (`idendereco`,`idtipoEndereco`,`idusuario`),
  KEY `fk_endereco_tipoEndereco1_idx` (`idtipoEndereco`),
  KEY `fk_endereco_usuario1_idx` (`idusuario`),
  KEY `fk_endereco_paciente1_idx` (`idpaciente`),
  CONSTRAINT `fk_endereco_paciente1` FOREIGN KEY (`idpaciente`) REFERENCES `paciente` (`idpaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (2,'Rua Santo Antônio de Pádua','Piqueri','São Paulo','SP','Brasil','02914050',2,5,'815a',NULL,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,1,6,NULL,NULL,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,1,7,NULL,NULL,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,1,8,NULL,NULL,1),(6,NULL,NULL,NULL,NULL,NULL,NULL,1,9,NULL,NULL,1),(7,NULL,NULL,NULL,NULL,NULL,NULL,1,10,NULL,NULL,1),(8,NULL,NULL,NULL,NULL,NULL,NULL,1,11,NULL,NULL,1),(9,NULL,NULL,NULL,NULL,NULL,NULL,1,12,NULL,NULL,1),(10,NULL,NULL,NULL,NULL,NULL,NULL,1,13,NULL,NULL,1),(11,'Praça da Sé','Sé','São Paulo','SP','Brasil','01001000',1,1,'1',NULL,10),(12,'Praça da Sé','Sé','São Paulo','SP','Brasil','01001000',1,1,'1',NULL,11),(13,'Praça da Sé','Sé','São Paulo','SP','Brasil','111.222.333-44',1,1,'1',NULL,12);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evolucao`
--

DROP TABLE IF EXISTS `evolucao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evolucao` (
  `idevolucao` int NOT NULL AUTO_INCREMENT,
  `dataConsulta` varchar(12) DEFAULT NULL,
  `estadoPaciente` varchar(100) DEFAULT NULL,
  `recomendacao` varchar(100) DEFAULT NULL,
  `proximaConsulta` varchar(45) DEFAULT NULL,
  `idpaciente` int NOT NULL,
  PRIMARY KEY (`idevolucao`),
  KEY `fk_evolucao_paciente1_idx` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evolucao`
--

LOCK TABLES `evolucao` WRITE;
/*!40000 ALTER TABLE `evolucao` DISABLE KEYS */;
/*!40000 ALTER TABLE `evolucao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exames`
--

DROP TABLE IF EXISTS `exames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exames` (
  `idexame` int NOT NULL AUTO_INCREMENT,
  `nomeExame` varchar(45) DEFAULT NULL,
  `tipoExame` varchar(45) DEFAULT NULL,
  `realizacao` varchar(45) DEFAULT NULL,
  `idpaciente` int NOT NULL,
  PRIMARY KEY (`idexame`),
  KEY `fk_exames_paciente1_idx` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exames`
--

LOCK TABLES `exames` WRITE;
/*!40000 ALTER TABLE `exames` DISABLE KEYS */;
/*!40000 ALTER TABLE `exames` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listaEstado`
--

DROP TABLE IF EXISTS `listaEstado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `listaEstado` (
  `idlistaEstado` int NOT NULL,
  `siglaEstado` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idlistaEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listaEstado`
--

LOCK TABLES `listaEstado` WRITE;
/*!40000 ALTER TABLE `listaEstado` DISABLE KEYS */;
/*!40000 ALTER TABLE `listaEstado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente` (
  `idpaciente` int NOT NULL AUTO_INCREMENT COMMENT '	',
  `nomePaciente` varchar(60) DEFAULT NULL,
  `dataNascimento` varchar(12) DEFAULT NULL,
  `sexoBiologico` varchar(11) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `nomePai` varchar(60) DEFAULT NULL,
  `nomeMae` varchar(60) DEFAULT NULL,
  `naturalidade` varchar(60) DEFAULT NULL,
  `convenioMedico` varchar(45) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idpaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'Paciente01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'null',NULL),(2,'Paciente teste','2023-05-19','Masculino','Masculino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(3,'Paciente teste','2023-05-26','Masculino','Masculino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(4,'Paciente teste','2023-05-26','Masculino','Masculino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(5,'Paciente teste','2023-05-26','Masculino','Masculino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(6,'Paciente teste','2023-05-26','Masculino','Masculino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(7,'Paciente teste','2023-05-26','Feminino','Feminino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(8,'Paciente teste','2023-05-26','Masculino','Masculino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(9,'Paciente teste','2023-05-26','Feminino','Feminino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(10,'Paciente teste','2023-05-26','Feminino','Feminino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(11,'Paciente teste','2023-05-26','Feminino','Feminino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','null',NULL),(12,'Paciente teste','2023-05-26','Feminino','Feminino','Nome do Pai','Nome da Mãe','Belo Horizonte','Convênio','111.222.333-44','email@teste','11999998222');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescricao`
--

DROP TABLE IF EXISTS `prescricao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prescricao` (
  `idprescricao` int NOT NULL AUTO_INCREMENT,
  `medicamento` varchar(60) DEFAULT NULL,
  `fisioterapia` varchar(60) DEFAULT NULL,
  `evitar` varchar(100) DEFAULT NULL,
  `recomendado` varchar(45) DEFAULT NULL,
  `idpaciente` int NOT NULL,
  PRIMARY KEY (`idprescricao`),
  KEY `fk_prescricao_paciente1_idx` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescricao`
--

LOCK TABLES `prescricao` WRITE;
/*!40000 ALTER TABLE `prescricao` DISABLE KEYS */;
/*!40000 ALTER TABLE `prescricao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procedimento`
--

DROP TABLE IF EXISTS `procedimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `procedimento` (
  `idprocedimento` int NOT NULL AUTO_INCREMENT,
  `tipoProcedimento` varchar(45) DEFAULT NULL,
  `nomeProcedimento` varchar(45) DEFAULT NULL,
  `dataExecucao` varchar(12) DEFAULT NULL,
  `idpaciente` int NOT NULL,
  PRIMARY KEY (`idprocedimento`),
  KEY `fk_procedimento_paciente1_idx` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedimento`
--

LOCK TABLES `procedimento` WRITE;
/*!40000 ALTER TABLE `procedimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `procedimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statusPaciente`
--

DROP TABLE IF EXISTS `statusPaciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statusPaciente` (
  `idstatusPaciente` int NOT NULL AUTO_INCREMENT,
  `inicioTratamento` varchar(12) DEFAULT NULL,
  `altaTratamento` varchar(12) DEFAULT NULL,
  `obito` varchar(12) DEFAULT NULL,
  `transferencia` varchar(12) DEFAULT NULL,
  `medicoResponsavel` varchar(45) DEFAULT NULL,
  `idpaciente` int NOT NULL,
  PRIMARY KEY (`idstatusPaciente`),
  KEY `fk_statusPaciente_paciente1_idx` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statusPaciente`
--

LOCK TABLES `statusPaciente` WRITE;
/*!40000 ALTER TABLE `statusPaciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `statusPaciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabela_doencas`
--

DROP TABLE IF EXISTS `tabela_doencas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tabela_doencas` (
  `idcid` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `codcid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idcid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabela_doencas`
--

LOCK TABLES `tabela_doencas` WRITE;
/*!40000 ALTER TABLE `tabela_doencas` DISABLE KEYS */;
INSERT INTO `tabela_doencas` VALUES (1,'Resfriado comum','J00'),(2,'Gripe','J11'),(3,'Pneumonia','J18'),(4,'Bronquite','J40'),(5,'Asma','J45'),(6,'Insuficiência cardíaca','I50'),(7,'Hipertensão arterial','I10'),(8,'Diabetes mellitus','E11'),(9,'Enxaqueca','G43'),(10,'Cefaleia tensional','G44'),(11,'Apendicite','K35'),(12,'Gastrite','K29'),(13,'Úlcera gástrica','K25'),(14,'Úlcera duodenal','K26'),(15,'Colecistite','K81'),(16,'Cálculo renal','N20'),(17,'Infecção urinária','N39'),(18,'Doença de Alzheimer','G30'),(19,'Parkinson','G20'),(20,'Esquizofrenia','F20'),(21,'Depressão','F32'),(22,'Ansiedade','F41'),(23,'Obesidade','E66'),(24,'Doença de Crohn','K50'),(25,'Colite ulcerativa','K51'),(26,'Artrite reumatoide','M05'),(27,'Osteoartrite','M15'),(28,'Fibromialgia','M79'),(29,'Câncer de mama','C50'),(30,'Câncer de pulmão','C34');
/*!40000 ALTER TABLE `tabela_doencas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoEndereco`
--

DROP TABLE IF EXISTS `tipoEndereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoEndereco` (
  `idtipoEndereco` int NOT NULL AUTO_INCREMENT,
  `tipoEndereco` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipoEndereco`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoEndereco`
--

LOCK TABLES `tipoEndereco` WRITE;
/*!40000 ALTER TABLE `tipoEndereco` DISABLE KEYS */;
INSERT INTO `tipoEndereco` VALUES (1,'Residencial'),(2,'Comercial');
/*!40000 ALTER TABLE `tipoEndereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoUsuario`
--

DROP TABLE IF EXISTS `tipoUsuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoUsuario` (
  `idtipoUsuario` int NOT NULL AUTO_INCREMENT,
  `cargoUsuario` varchar(25) DEFAULT NULL,
  `nivelAcesso` int DEFAULT NULL,
  PRIMARY KEY (`idtipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoUsuario`
--

LOCK TABLES `tipoUsuario` WRITE;
/*!40000 ALTER TABLE `tipoUsuario` DISABLE KEYS */;
INSERT INTO `tipoUsuario` VALUES (1,'administrador',0),(2,'medico',1),(3,'socorrista',2),(4,'enferemeira',3),(5,'recepcao',4),(6,'paciente',5);
/*!40000 ALTER TABLE `tipoUsuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `nomeUsuario` varchar(45) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `nivelAcesso` varchar(5) DEFAULT NULL,
  `situacao` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `idtipoUsuario` int NOT NULL,
  PRIMARY KEY (`idusuario`,`idtipoUsuario`),
  KEY `fk_usuario_tipoUsuario1_idx` (`idtipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (5,'equipeTCC','Turma TCC','equipeTCC','0','ativo','t02@dominio.com.br','(11)2093-8636','1112223331','12345678',1),(6,'drConsulta','Doutor Consulta teste','drConsulta','1','ativo','t01@dominio.com.br','11999998882','654321','123321123',2),(7,'drDerrame','Adriano','123qaz','1','ativo','t01@dominio.com.br','11999998883','1112223331',NULL,2),(9,'drBacteria','Heitor Cicrano','123qaz','1','ativo','t02@dominio.com.br','11999998222','1112223331',NULL,2),(11,'enfermeira01','Maria da Silva','123qaz','3','ativo','t03@dominio.com.br','11999998883','15234567',NULL,4),(13,'Socorrista01','Adriano','123qaz','2','inativo','t02@dominio.com.br','11-22222.2222','1112223331','21213344442',3);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `criaLinhaEndereco` AFTER INSERT ON `usuario` FOR EACH ROW begin

insert into endereco (idusuario,idtipoEndereco,idpaciente) values (new.idusuario,'1','1');

    

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-01 14:25:02
