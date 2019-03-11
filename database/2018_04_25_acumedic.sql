-- MySQL dump 10.13  Distrib 5.6.39, for Linux (x86_64)
--
-- Host: localhost    Database: acumedic
-- ------------------------------------------------------
-- Server version	5.6.39-cll-lve

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
-- Table structure for table `Diciplinas`
--

DROP TABLE IF EXISTS `Diciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Diciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `modulo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Diciplinas`
--

LOCK TABLES `Diciplinas` WRITE;
/*!40000 ALTER TABLE `Diciplinas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Diciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Gym`
--

DROP TABLE IF EXISTS `Gym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Gym` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inscripcion` date NOT NULL,
  `finsub` date NOT NULL,
  `pago` tinyint(1) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `idDiciplina` int(11) NOT NULL,
  PRIMARY KEY (`id`,`idPaciente`,`idDiciplina`),
  KEY `fk_Gym_Paciente1` (`idPaciente`),
  KEY `fk_Gym_Diciplinas1` (`idDiciplina`),
  CONSTRAINT `fk_Gym_Diciplinas1` FOREIGN KEY (`idDiciplina`) REFERENCES `Diciplinas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gym_Paciente1` FOREIGN KEY (`idPaciente`) REFERENCES `Paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Gym`
--

LOCK TABLES `Gym` WRITE;
/*!40000 ALTER TABLE `Gym` DISABLE KEYS */;
/*!40000 ALTER TABLE `Gym` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Paciente`
--

DROP TABLE IF EXISTS `Paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellidop` varchar(20) NOT NULL,
  `apellidom` varchar(20) NOT NULL,
  `edad` int(3) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `altura` decimal(10,2) DEFAULT NULL,
  `peso` decimal(10,2) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `tel` decimal(10,0) DEFAULT NULL,
  `cel` decimal(10,0) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `anfitrion` varchar(100) DEFAULT NULL,
  `gym` tinyint(1) DEFAULT NULL,
  `diplomado` tinyint(1) DEFAULT NULL,
  `nutricion` tinyint(1) DEFAULT NULL,
  `clinica` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Paciente`
--

LOCK TABLES `Paciente` WRITE;
/*!40000 ALTER TABLE `Paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `Paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uc` date DEFAULT NULL,
  `pc` date DEFAULT NULL,
  `idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`id`,`idPaciente`),
  KEY `fk_citas_Paciente1` (`idPaciente`),
  CONSTRAINT `fk_citas_Paciente1` FOREIGN KEY (`idPaciente`) REFERENCES `Paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinica`
--

DROP TABLE IF EXISTS `clinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `consulta` varchar(1000) DEFAULT NULL,
  `analisis` varchar(200) DEFAULT NULL,
  `idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`id`,`idPaciente`),
  KEY `fk_clinica_Paciente2` (`idPaciente`),
  CONSTRAINT `fk_clinica_Paciente2` FOREIGN KEY (`idPaciente`) REFERENCES `Paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinica`
--

LOCK TABLES `clinica` WRITE;
/*!40000 ALTER TABLE `clinica` DISABLE KEYS */;
/*!40000 ALTER TABLE `clinica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diplomado`
--

DROP TABLE IF EXISTS `diplomado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diplomado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inscripcion` date NOT NULL,
  `finsub` date NOT NULL,
  `pago` tinyint(1) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `idDiciplina` int(11) NOT NULL,
  PRIMARY KEY (`id`,`idPaciente`,`idDiciplina`),
  KEY `fk_diplomado_Paciente1` (`idPaciente`),
  KEY `fk_diplomado_Diciplinas1` (`idDiciplina`),
  CONSTRAINT `fk_diplomado_Diciplinas1` FOREIGN KEY (`idDiciplina`) REFERENCES `Diciplinas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_diplomado_Paciente1` FOREIGN KEY (`idPaciente`) REFERENCES `Paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diplomado`
--

LOCK TABLES `diplomado` WRITE;
/*!40000 ALTER TABLE `diplomado` DISABLE KEYS */;
/*!40000 ALTER TABLE `diplomado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesaje`
--

DROP TABLE IF EXISTS `pesaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `upesaje` datetime DEFAULT NULL,
  `ppesaje` datetime DEFAULT NULL,
  `pesoi` decimal(10,2) NOT NULL,
  `pago` tinyint(1) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`id`,`idPaciente`),
  KEY `fk_pesaje_Paciente1` (`idPaciente`),
  CONSTRAINT `fk_pesaje_Paciente1` FOREIGN KEY (`idPaciente`) REFERENCES `Paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesaje`
--

LOCK TABLES `pesaje` WRITE;
/*!40000 ALTER TABLE `pesaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesos`
--

DROP TABLE IF EXISTS `pesos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `peso` decimal(10,2) DEFAULT NULL,
  `mcorporal` decimal(10,2) DEFAULT NULL,
  `cagua` decimal(10,2) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`id`,`idPaciente`),
  KEY `fk_pesos_Paciente1` (`idPaciente`),
  CONSTRAINT `fk_pesos_Paciente1` FOREIGN KEY (`idPaciente`) REFERENCES `Paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesos`
--

LOCK TABLES `pesos` WRITE;
/*!40000 ALTER TABLE `pesos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `permisos` varchar(500) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2018-04-25 15:06:03
