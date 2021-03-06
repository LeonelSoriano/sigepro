-- MySQL dump 10.13  Distrib 5.6.27, for linux-glibc2.5 (i686)
--
-- Host: localhost    Database: sigepro
-- ------------------------------------------------------
-- Server version	5.6.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES UTF8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(11) DEFAULT NULL,
  `codigo_objetivo` int(11) DEFAULT NULL,
  `codigo_meta` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_entrega` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `fecha_pausa` varchar(255) DEFAULT NULL,
  `fecha_inicio` varchar(255) DEFAULT NULL,
  `usuario_creador` varchar(255) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `fecha_eliminado` date NOT NULL DEFAULT '0002-11-30',
  `hora_entrega` time DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `metas` (`codigo_proyecto`),
  CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `metas` (`codigo_objetivo`),
  CONSTRAINT `actividades_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `metas` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,NULL,NULL,1,'activi','nete','2000-01-01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0002-11-30',NULL),(3,NULL,NULL,4,'123','asd','2016-05-11',NULL,NULL,NULL,'1','127.0.0.1',1,NULL,NULL,'2016-05-30','03:05:00'),(4,NULL,NULL,4,'ejemplo2','ejemplo2','2016-05-19',NULL,NULL,NULL,'1','127.0.0.1',2,NULL,NULL,'0002-11-30','18:10:00');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `sentencia` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `modulo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria`
--

LOCK TABLES `auditoria` WRITE;
/*!40000 ALTER TABLE `auditoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `codigo` int(11) NOT NULL,
  `codigo_departamento` int(11) DEFAULT NULL,
  `codigo_alterno` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_empresa` (`codigo_departamento`),
  KEY `codigo_departamento` (`codigo_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,1,'1','soldador','solda');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuraciones`
--

DROP TABLE IF EXISTS `configuraciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuraciones` (
  `codigo` int(11) NOT NULL,
  `tipo_bd` varchar(255) DEFAULT NULL,
  `ubicacion_ip` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuraciones`
--

LOCK TABLES `configuraciones` WRITE;
/*!40000 ALTER TABLE `configuraciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `configuraciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_empresa` int(11) DEFAULT NULL,
  `codigo_alterno` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_empresa` (`codigo_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,1,'1','herreria','herr');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_alterno` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `nombre_corto` varchar(255) DEFAULT NULL,
  `rif` varchar(20) DEFAULT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL,
  `telefono_responsable` varchar(255) DEFAULT NULL,
  `correo_responsable` varchar(255) DEFAULT NULL,
  `periodo` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'1','polar ca','polar','123','1123','caracas','04125698745','ramon antonio','04142549867','hola@hola.com','1');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Creado'),(2,'Iniciado'),(3,'Pausado'),(4,'Finalizado'),(5,'Eliminado');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas`
--

DROP TABLE IF EXISTS `metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(11) DEFAULT NULL,
  `codigo_objetivo` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_entrega` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `fecha_pausa` varchar(255) DEFAULT NULL,
  `fecha_inicio` varchar(255) DEFAULT NULL,
  `hora_entrega` varchar(255) DEFAULT NULL,
  `hora_creacion` varchar(255) DEFAULT NULL,
  `hora_pausa` varchar(255) DEFAULT NULL,
  `hora_inicio` varchar(255) DEFAULT NULL,
  `usuario_creador` varchar(255) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `fecha_eliminado` date NOT NULL DEFAULT '0002-11-30',
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  CONSTRAINT `metas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `objetivos` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas`
--

LOCK TABLES `metas` WRITE;
/*!40000 ALTER TABLE `metas` DISABLE KEYS */;
INSERT INTO `metas` VALUES (1,NULL,1,'mneta','merata2','2000-01-01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0002-11-30'),(3,NULL,NULL,'coidgi meta','alias meta','2016-05-24',NULL,NULL,NULL,'01:15',NULL,NULL,NULL,'1','127.0.0.1',1,NULL,NULL,'0002-11-30'),(4,NULL,3,'soy una meta','soy un alia smeta','2016-05-19',NULL,NULL,NULL,'01:10',NULL,NULL,NULL,'1','127.0.0.1',1,NULL,NULL,'0002-11-30'),(5,NULL,3,'asd','ads','2016-05-18',NULL,NULL,NULL,'02:25',NULL,NULL,NULL,'1','127.0.0.1',1,NULL,NULL,'2016-05-29'),(6,3,3,'asd',NULL,'2016-05-17',NULL,NULL,NULL,'02:05',NULL,NULL,NULL,'1','127.0.0.1',0,NULL,NULL,'0002-11-30');
/*!40000 ALTER TABLE `metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objetivos`
--

DROP TABLE IF EXISTS `objetivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objetivos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_pausa` date DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `hora_entrega` time DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL,
  `hora_pausa` time DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha_eliminado` date NOT NULL DEFAULT '0002-11-30',
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo` (`codigo`,`codigo_proyecto`),
  CONSTRAINT `objetivos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyectos` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objetivos`
--

LOCK TABLES `objetivos` WRITE;
/*!40000 ALTER TABLE `objetivos` DISABLE KEYS */;
INSERT INTO `objetivos` VALUES (1,1,'leonel2',NULL,'2016-05-16',NULL,NULL,NULL,'14:25:00',NULL,NULL,NULL,1,'127.0.0.1',NULL,NULL,0,'0002-11-30'),(3,1,'objetivo2','aias objetivo2','2016-05-23',NULL,NULL,NULL,'19:25:00',NULL,NULL,NULL,1,'127.0.0.1',NULL,NULL,1,'0002-11-30'),(4,1,'lleno','lleono','2016-05-25',NULL,NULL,NULL,'08:25:00',NULL,NULL,NULL,1,'127.0.0.1',NULL,NULL,1,'2016-05-29'),(5,1,NULL,NULL,NULL,NULL,NULL,NULL,'16:00:00',NULL,NULL,NULL,1,'127.0.0.1',NULL,NULL,NULL,'0002-11-30');
/*!40000 ALTER TABLE `objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_actividades`
--

DROP TABLE IF EXISTS `observadores_actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_actividades` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_objetivo`,`codigo_meta`,`codigo_actividad`,`codigo_usuario`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `observadores_actividades_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `actividades` (`codigo_proyecto`),
  CONSTRAINT `observadores_actividades_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `actividades` (`codigo_objetivo`),
  CONSTRAINT `observadores_actividades_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `actividades` (`codigo_meta`),
  CONSTRAINT `observadores_actividades_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `actividades` (`codigo`),
  CONSTRAINT `observadores_actividades_ibfk_5` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_actividades`
--

LOCK TABLES `observadores_actividades` WRITE;
/*!40000 ALTER TABLE `observadores_actividades` DISABLE KEYS */;
INSERT INTO `observadores_actividades` VALUES (1,NULL,NULL,NULL,3,2),(8,NULL,NULL,NULL,4,1);
/*!40000 ALTER TABLE `observadores_actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_metas`
--

DROP TABLE IF EXISTS `observadores_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_metas` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_objetivo`,`codigo_meta`,`codigo_usuario`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `observadores_metas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `metas` (`codigo_proyecto`),
  CONSTRAINT `observadores_metas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `metas` (`codigo_objetivo`),
  CONSTRAINT `observadores_metas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `metas` (`codigo`),
  CONSTRAINT `observadores_metas_ibfk_4` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_metas`
--

LOCK TABLES `observadores_metas` WRITE;
/*!40000 ALTER TABLE `observadores_metas` DISABLE KEYS */;
INSERT INTO `observadores_metas` VALUES (1,NULL,NULL,3,2),(2,NULL,NULL,4,2),(3,NULL,NULL,5,1),(6,NULL,NULL,6,1),(7,NULL,NULL,6,2);
/*!40000 ALTER TABLE `observadores_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_objetivos`
--

DROP TABLE IF EXISTS `observadores_objetivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_objetivos` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` int(255) DEFAULT NULL,
  `codigo_objetivo` int(11) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_objetivos`
--

LOCK TABLES `observadores_objetivos` WRITE;
/*!40000 ALTER TABLE `observadores_objetivos` DISABLE KEYS */;
INSERT INTO `observadores_objetivos` VALUES (3,2,6),(5,1,3),(6,1,4),(7,2,4),(9,1,1);
/*!40000 ALTER TABLE `observadores_objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_proyectos`
--

DROP TABLE IF EXISTS `observadores_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_proyectos` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_usuario`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `observadores_proyectos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyectos` (`codigo`),
  CONSTRAINT `observadores_proyectos_ibfk_2` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_proyectos`
--

LOCK TABLES `observadores_proyectos` WRITE;
/*!40000 ALTER TABLE `observadores_proyectos` DISABLE KEYS */;
INSERT INTO `observadores_proyectos` VALUES (2,10,1);
/*!40000 ALTER TABLE `observadores_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_tareas`
--

DROP TABLE IF EXISTS `observadores_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_tareas` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `codigo_tarea` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_objetivo`,`codigo_meta`,`codigo_actividad`,`codigo_tarea`,`codigo_usuario`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  KEY `codigo_tareas` (`codigo_tarea`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `observadores_tareas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `tareas` (`codigo_proyecto`),
  CONSTRAINT `observadores_tareas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `tareas` (`codigo_objetivo`),
  CONSTRAINT `observadores_tareas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `tareas` (`codigo_meta`),
  CONSTRAINT `observadores_tareas_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `tareas` (`codigo_actividad`),
  CONSTRAINT `observadores_tareas_ibfk_6` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_tareas`
--

LOCK TABLES `observadores_tareas` WRITE;
/*!40000 ALTER TABLE `observadores_tareas` DISABLE KEYS */;
INSERT INTO `observadores_tareas` VALUES (2,NULL,NULL,NULL,NULL,3,2);
/*!40000 ALTER TABLE `observadores_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_pausa` date DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `hora_entrega` time DEFAULT NULL,
  `hora_creacion` time DEFAULT NULL,
  `hora_pausa` time DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha_eliminado` date NOT NULL DEFAULT '0002-11-30',
  PRIMARY KEY (`codigo`),
  KEY `proyectos_usuarios_fk` (`usuario_creador`),
  CONSTRAINT `proyectos_usuarios_fk` FOREIGN KEY (`usuario_creador`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES (1,'hola',NULL,'2016-05-19','2016-05-19',NULL,'2016-05-06','09:30:00','00:00:28',NULL,'09:25:00',1,'127.0.0.1',NULL,NULL,0,'0002-11-30'),(8,'asd','asd','2016-05-31','2016-05-19',NULL,'2016-05-01','00:00:00','00:01:19',NULL,'12:00:00',1,'127.0.0.1',NULL,NULL,NULL,'0002-11-30'),(9,'descripcion','alias','2016-05-23','2016-05-20',NULL,'2016-05-19','09:10:00','23:57:43',NULL,'23:05:00',1,'127.0.0.1',NULL,NULL,NULL,'0002-11-30'),(10,'hola',NULL,'2016-05-10',NULL,NULL,NULL,'09:30:00',NULL,NULL,NULL,1,'127.0.0.1',NULL,NULL,0,'2016-05-29');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos_economicos`
--

DROP TABLE IF EXISTS `recursos_economicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos_economicos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_ingreso` varchar(255) DEFAULT NULL,
  `saldo_inicial` varchar(255) DEFAULT NULL,
  `saldo` varchar(255) DEFAULT NULL,
  `debito` varchar(255) DEFAULT NULL,
  `credito` varchar(255) DEFAULT NULL,
  `fecha_movimiento` varchar(255) DEFAULT NULL,
  `codigo_referencia` int(11) DEFAULT NULL COMMENT 'Es el codigo de la Tarea',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos_economicos`
--

LOCK TABLES `recursos_economicos` WRITE;
/*!40000 ALTER TABLE `recursos_economicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `recursos_economicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos_fisicos`
--

DROP TABLE IF EXISTS `recursos_fisicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos_fisicos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_ingreso` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos_fisicos`
--

LOCK TABLES `recursos_fisicos` WRITE;
/*!40000 ALTER TABLE `recursos_fisicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `recursos_fisicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_actividades`
--

DROP TABLE IF EXISTS `responsables_actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_actividades` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_objetivo`,`codigo_meta`,`codigo_actividad`,`codigo_usuario`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  CONSTRAINT `responsables_actividades_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `actividades` (`codigo_proyecto`),
  CONSTRAINT `responsables_actividades_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `actividades` (`codigo_objetivo`),
  CONSTRAINT `responsables_actividades_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `actividades` (`codigo_meta`),
  CONSTRAINT `responsables_actividades_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `actividades` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_actividades`
--

LOCK TABLES `responsables_actividades` WRITE;
/*!40000 ALTER TABLE `responsables_actividades` DISABLE KEYS */;
INSERT INTO `responsables_actividades` VALUES (1,NULL,NULL,NULL,3,1),(2,NULL,NULL,NULL,3,2),(7,NULL,NULL,NULL,4,1);
/*!40000 ALTER TABLE `responsables_actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_metas`
--

DROP TABLE IF EXISTS `responsables_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_metas` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_objetivo`,`codigo_meta`,`codigo_usuario`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `responsables_metas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `metas` (`codigo_proyecto`),
  CONSTRAINT `responsables_metas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `metas` (`codigo_objetivo`),
  CONSTRAINT `responsables_metas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `metas` (`codigo`),
  CONSTRAINT `responsables_metas_ibfk_4` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_metas`
--

LOCK TABLES `responsables_metas` WRITE;
/*!40000 ALTER TABLE `responsables_metas` DISABLE KEYS */;
INSERT INTO `responsables_metas` VALUES (4,NULL,NULL,6,1);
/*!40000 ALTER TABLE `responsables_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_objetivos`
--

DROP TABLE IF EXISTS `responsables_objetivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_objetivos` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_objetivo` int(11) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_usuario`,`codigo_objetivo`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `responsables_objetivos_ibfk_3` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_objetivos`
--

LOCK TABLES `responsables_objetivos` WRITE;
/*!40000 ALTER TABLE `responsables_objetivos` DISABLE KEYS */;
INSERT INTO `responsables_objetivos` VALUES (1,3,1),(2,4,1),(3,4,2);
/*!40000 ALTER TABLE `responsables_objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_proyectos`
--

DROP TABLE IF EXISTS `responsables_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_proyectos` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_usuario`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `responsables_proyectos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyectos` (`codigo`),
  CONSTRAINT `responsables_proyectos_ibfk_2` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_proyectos`
--

LOCK TABLES `responsables_proyectos` WRITE;
/*!40000 ALTER TABLE `responsables_proyectos` DISABLE KEYS */;
INSERT INTO `responsables_proyectos` VALUES (3,10,2);
/*!40000 ALTER TABLE `responsables_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_tareas`
--

DROP TABLE IF EXISTS `responsables_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_tareas` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `codigo_tarea` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_usuario`,`codigo_objetivo`,`codigo_meta`,`codigo_actividad`,`codigo_tarea`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  KEY `codigo_tareas` (`codigo_tarea`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `responsables_tareas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `tareas` (`codigo_proyecto`),
  CONSTRAINT `responsables_tareas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `tareas` (`codigo_objetivo`),
  CONSTRAINT `responsables_tareas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `tareas` (`codigo_meta`),
  CONSTRAINT `responsables_tareas_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `tareas` (`codigo_actividad`),
  CONSTRAINT `responsables_tareas_ibfk_6` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_tareas`
--

LOCK TABLES `responsables_tareas` WRITE;
/*!40000 ALTER TABLE `responsables_tareas` DISABLE KEYS */;
INSERT INTO `responsables_tareas` VALUES (3,NULL,NULL,NULL,NULL,3,1),(4,NULL,NULL,NULL,NULL,3,2);
/*!40000 ALTER TABLE `responsables_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas`
--

DROP TABLE IF EXISTS `tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_pausa` date DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `porcentaje` float DEFAULT NULL,
  `usuario_creador` varchar(255) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha_final` datetime DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `completado` date NOT NULL DEFAULT '0002-11-30',
  `fecha_eliminado` date NOT NULL DEFAULT '0002-11-30',
  `hora_entrega` time DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `actividades` (`codigo_proyecto`),
  CONSTRAINT `tareas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `actividades` (`codigo_objetivo`),
  CONSTRAINT `tareas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `actividades` (`codigo_meta`),
  CONSTRAINT `tareas_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `actividades` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` VALUES (1,NULL,NULL,NULL,4,'prueba','prueba2','2016-06-08',NULL,NULL,NULL,12,'1',NULL,2,NULL,NULL,'0002-11-30','0002-11-30',NULL),(3,NULL,NULL,NULL,4,'tarea ejemplo2','tarea ejemplo2','2016-05-19',NULL,NULL,NULL,12,'1','127.0.0.1',1,NULL,NULL,'0002-11-30','0002-11-30','09:30:00');
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas_recursos_economicos`
--

DROP TABLE IF EXISTS `tareas_recursos_economicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas_recursos_economicos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_recurso_economico` int(11) DEFAULT NULL,
  `codigo_tarea` int(11) DEFAULT NULL,
  `cantidad_utilizada` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_recurso_fisico` (`codigo_recurso_economico`),
  KEY `codigo_tarea` (`codigo_tarea`),
  CONSTRAINT `tareas_recursos_economicos_ibfk_1` FOREIGN KEY (`codigo_recurso_economico`) REFERENCES `recursos_fisicos` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas_recursos_economicos`
--

LOCK TABLES `tareas_recursos_economicos` WRITE;
/*!40000 ALTER TABLE `tareas_recursos_economicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tareas_recursos_economicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas_recursos_fisicos`
--

DROP TABLE IF EXISTS `tareas_recursos_fisicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas_recursos_fisicos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_recurso_fisico` int(11) DEFAULT NULL,
  `codigo_tarea` int(11) DEFAULT NULL,
  `cantidad_utilizada` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_recurso_fisico` (`codigo_recurso_fisico`),
  KEY `codigo_tarea` (`codigo_tarea`),
  CONSTRAINT `tareas_recursos_fisicos_ibfk_1` FOREIGN KEY (`codigo_recurso_fisico`) REFERENCES `recursos_fisicos` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas_recursos_fisicos`
--

LOCK TABLES `tareas_recursos_fisicos` WRITE;
/*!40000 ALTER TABLE `tareas_recursos_fisicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tareas_recursos_fisicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_usuarios`
--

DROP TABLE IF EXISTS `tipos_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `nombre_corto` varchar(255) DEFAULT NULL,
  `indicador` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_usuarios`
--

LOCK TABLES `tipos_usuarios` WRITE;
/*!40000 ALTER TABLE `tipos_usuarios` DISABLE KEYS */;
INSERT INTO `tipos_usuarios` VALUES (1,'administrador','admin',1),(2,'observador','obser',2),(3,'responsable','respon',3);
/*!40000 ALTER TABLE `tipos_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `identificacion` varchar(255) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `codigo_cargo` int(255) DEFAULT NULL,
  `descripcion_perfil` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `intereses` varchar(255) DEFAULT NULL,
  `codigo_tipo_usuario` int(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `codigo_empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_tipo_usuario` (`codigo_tipo_usuario`),
  KEY `codigo_empresa` (`codigo_cargo`),
  KEY `codigo_cargo` (`codigo_cargo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`codigo_tipo_usuario`) REFERENCES `tipos_usuarios` (`codigo`),
  CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`codigo_cargo`) REFERENCES `cargos` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'leonel','123','leonel2','soriano','123456789','hola@hola.net','2001/05/05',1,'12','','01463562587','123asd','',1,'hola soy direccion ññññññ',1),(2,'soriano','123','soriano','leonel','1233','hola@hola.net','2001/05/05',1,'23',NULL,'213213','123','23213',3,'asd',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-04  0:06:02
