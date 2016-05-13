-- MySQL dump 10.13  Distrib 5.6.27, for linux-glibc2.5 (i686)
--
-- Host: localhost    Database: db_ismcenter
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
  `codigo_proyecto` int(11) NOT NULL,
  `codigo_objetivo` int(11) NOT NULL,
  `codigo_meta` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `hora_inicio` varchar(255) DEFAULT NULL,
  `hora_final` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `estatus` int(1) DEFAULT NULL,
  `fecha_tope` date NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,1,1,1,'contruccion de la interfaz que capturara',NULL,'2016-04-19','2016-04-20','05:25','15:50','15-04-2016 19:33:10',1,NULL,3,'0000-00-00'),(2,1,1,1,'Actividada testeada numero 2 para esta meta','Acttt2','2016-05-04','2016-05-04','06:45:35','06:45:59','04-05-2016 05:26:03',1,'127.0.0.1',4,'2016-05-18');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `codigo` int(1) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (1,'Presidente'),(2,'Programador'),(3,'DiseÃ±ador'),(4,'Analista'),(5,'Gerente');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_empresa` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `responsable` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,1,'Tecnología de la información','IT',1);
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
  `nombre` varchar(255) NOT NULL,
  `rif` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `ano_fiscal` varchar(4) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'Mantiq','J-5899565-8','Sector Tierra Negra, Edificio Alarcon, Segundo Piso','edwin marquez','04266248084','2016','mantiqt.png');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estatus`
--

DROP TABLE IF EXISTS `estatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estatus` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatus`
--

LOCK TABLES `estatus` WRITE;
/*!40000 ALTER TABLE `estatus` DISABLE KEYS */;
INSERT INTO `estatus` VALUES (1,'Por Iniciar','cfcfcf'),(2,'Iniciado','4fc0f5'),(3,'Pausado','fa002f'),(4,'Finalizado','31c57a'),(5,'Completado','b9de39'),(6,'Eliminado','fa002f');
/*!40000 ALTER TABLE `estatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estatus_recursos_financieros`
--

DROP TABLE IF EXISTS `estatus_recursos_financieros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estatus_recursos_financieros` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatus_recursos_financieros`
--

LOCK TABLES `estatus_recursos_financieros` WRITE;
/*!40000 ALTER TABLE `estatus_recursos_financieros` DISABLE KEYS */;
INSERT INTO `estatus_recursos_financieros` VALUES (1,'No Disponible'),(2,'En Uso'),(3,'Disponible');
/*!40000 ALTER TABLE `estatus_recursos_financieros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estatus_recursos_fisicos`
--

DROP TABLE IF EXISTS `estatus_recursos_fisicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estatus_recursos_fisicos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatus_recursos_fisicos`
--

LOCK TABLES `estatus_recursos_fisicos` WRITE;
/*!40000 ALTER TABLE `estatus_recursos_fisicos` DISABLE KEYS */;
INSERT INTO `estatus_recursos_fisicos` VALUES (1,'No Disponible'),(2,'Asignado'),(3,'Disponible');
/*!40000 ALTER TABLE `estatus_recursos_fisicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_auditoria`
--

DROP TABLE IF EXISTS `eventos_auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos_auditoria` (
  `codigo` int(11) NOT NULL,
  `sentencia` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `modulo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_auditoria`
--

LOCK TABLES `eventos_auditoria` WRITE;
/*!40000 ALTER TABLE `eventos_auditoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_auditoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas`
--

DROP TABLE IF EXISTS `metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(11) NOT NULL,
  `codigo_objetivo` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `hora_inicio` varchar(255) DEFAULT NULL,
  `hora_final` varchar(255) DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `fecha_tope` date NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas`
--

LOCK TABLES `metas` WRITE;
/*!40000 ALTER TABLE `metas` DISABLE KEYS */;
INSERT INTO `metas` VALUES (1,1,1,'Capturar la atencion del publico mostrando una interfaz agradable y atractiva',NULL,NULL,NULL,'15-04-2016 19:33:10',NULL,NULL,1,'127.0.0.1',1,'0000-00-00'),(2,1,1,'Holaaa','Meta testeada 2','2016-05-04','2016-05-04','04-05-2016 04:33:48','04:41:07','04:58:44',1,'127.0.0.1',4,'2016-05-19');
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
  `codigo_proyecto` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `hora_inicio` varchar(255) DEFAULT NULL,
  `hora_fin` varchar(255) DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `fecha_tope` date NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objetivos`
--

LOCK TABLES `objetivos` WRITE;
/*!40000 ALTER TABLE `objetivos` DISABLE KEYS */;
INSERT INTO `objetivos` VALUES (1,1,'Consolidar sistema de gerenciamiento de proyectos de forma solida, estable.','Objetivo #1','2016-04-19','2016-04-30','15-04-2016 19:33:10','08:00','16:00',1,'127.0.0.1',1,'0000-00-00'),(2,1,'objetivo #2','Object New','2016-05-04','2016-05-04','03-05-2016 19:40:13','04:06:45','04:07:23',1,'127.0.0.1',4,'2016-05-04');
/*!40000 ALTER TABLE `objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_proyectos`
--

DROP TABLE IF EXISTS `observadores_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_proyectos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `responsable` int(2) DEFAULT '2',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_proyectos`
--

LOCK TABLES `observadores_proyectos` WRITE;
/*!40000 ALTER TABLE `observadores_proyectos` DISABLE KEYS */;
INSERT INTO `observadores_proyectos` VALUES (1,1,1,2),(2,2,1,1);
/*!40000 ALTER TABLE `observadores_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_tareas`
--

DROP TABLE IF EXISTS `observadores_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_tareas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(11) NOT NULL,
  `codigo_objetivo` int(11) NOT NULL,
  `codigo_meta` int(11) NOT NULL,
  `codigo_actividad` int(11) NOT NULL,
  `codigo_tarea` int(11) NOT NULL,
  `codigo_usuario` int(11) DEFAULT NULL,
  `responsable` int(2) DEFAULT '2',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_tareas`
--

LOCK TABLES `observadores_tareas` WRITE;
/*!40000 ALTER TABLE `observadores_tareas` DISABLE KEYS */;
INSERT INTO `observadores_tareas` VALUES (1,1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `observadores_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `hora_inicio` varchar(255) DEFAULT NULL,
  `hora_final` varchar(255) DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `fecha_tope` date NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES (1,'Sistema de gerenciamiento de proyectos bajo diferentes plataformas','sigepro Updated','2016-05-04','2016-05-04','13-04-2016','18:45:16','18:45:26',1,NULL,4,'1999-11-30'),(2,'Sistema de gerenciamiento de proyectos bajo diferentes plataformas','sigepro #t2','2016-05-04','2016-05-04','14-04-2016','18:47:27','18:47:13',1,'',2,'1999-11-30'),(3,'Propuesta tecnologica de satelites giratorios para Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu','Satelites DevCom #2',NULL,NULL,'15-04-2016 19:33:10',NULL,NULL,1,'127.0.0.1',3,'0000-00-00'),(4,'dawd','dawdaw',NULL,NULL,'23-04-2016 06:40:59',NULL,NULL,1,'127.0.0.1',5,'0000-00-00'),(5,'Proyecto DevCommmm #3','DevLoppp #3','2016-05-03','2016-05-03','03-05-2016 16:51:33','18:30:16','18:36:07',1,'127.0.0.1',4,'2016-05-04');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos_financieros`
--

DROP TABLE IF EXISTS `recursos_financieros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos_financieros` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `monto_inicial` varchar(255) NOT NULL,
  `monto_actual` varchar(255) DEFAULT NULL,
  `estatus` int(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos_financieros`
--

LOCK TABLES `recursos_financieros` WRITE;
/*!40000 ALTER TABLE `recursos_financieros` DISABLE KEYS */;
INSERT INTO `recursos_financieros` VALUES (1,'Fondo de mantenimiento ISMCENTER','FMISMC','200000','200000',3);
/*!40000 ALTER TABLE `recursos_financieros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos_financieros_tareas`
--

DROP TABLE IF EXISTS `recursos_financieros_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos_financieros_tareas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_recurso_financiero` int(11) NOT NULL,
  `codigo_tarea` int(11) NOT NULL,
  `monto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos_financieros_tareas`
--

LOCK TABLES `recursos_financieros_tareas` WRITE;
/*!40000 ALTER TABLE `recursos_financieros_tareas` DISABLE KEYS */;
INSERT INTO `recursos_financieros_tareas` VALUES (1,1,1,'120');
/*!40000 ALTER TABLE `recursos_financieros_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos_fisicos`
--

DROP TABLE IF EXISTS `recursos_fisicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos_fisicos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `estatus` int(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos_fisicos`
--

LOCK TABLES `recursos_fisicos` WRITE;
/*!40000 ALTER TABLE `recursos_fisicos` DISABLE KEYS */;
INSERT INTO `recursos_fisicos` VALUES (1,'Computadora Vit intel core i7',NULL,3);
/*!40000 ALTER TABLE `recursos_fisicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos_fisicos_tareas`
--

DROP TABLE IF EXISTS `recursos_fisicos_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos_fisicos_tareas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_recurso_fisico` int(11) NOT NULL,
  `codigo_tarea` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos_fisicos_tareas`
--

LOCK TABLES `recursos_fisicos_tareas` WRITE;
/*!40000 ALTER TABLE `recursos_fisicos_tareas` DISABLE KEYS */;
INSERT INTO `recursos_fisicos_tareas` VALUES (1,1,1,'una pc para uno de los disenadores de la tarea');
/*!40000 ALTER TABLE `recursos_fisicos_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sino`
--

DROP TABLE IF EXISTS `sino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sino` (
  `codigo` int(1) NOT NULL AUTO_INCREMENT,
  `sino` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sino`
--

LOCK TABLES `sino` WRITE;
/*!40000 ALTER TABLE `sino` DISABLE KEYS */;
INSERT INTO `sino` VALUES (1,'Si'),(2,'No');
/*!40000 ALTER TABLE `sino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas`
--

DROP TABLE IF EXISTS `tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` int(11) NOT NULL,
  `codigo_objetivo` int(11) NOT NULL,
  `codigo_meta` int(11) NOT NULL,
  `codigo_actividad` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `hora_inicio` varchar(255) DEFAULT NULL,
  `hora_final` varchar(255) DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  `avance` varchar(128) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `fecha_tope` date NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` VALUES (1,1,1,1,1,'Diseno responsivo html5',NULL,'2016-04-14','2016-04-14','15-04-2016 19:33:10','16:40',NULL,1,'127.0.0.1','75',1,'0000-00-00'),(3,1,1,1,1,'Testeando las tareas','Tarea verificar #2','2016-05-04','2016-05-04','04-05-2016 07:24:05','07:41:37','07:42:02',1,'127.0.0.1','45',3,'2016-05-05');
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userlevelpermissions`
--

DROP TABLE IF EXISTS `userlevelpermissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userlevelpermissions` (
  `userlevelid` int(11) NOT NULL,
  `tablename` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `permission` int(11) NOT NULL,
  PRIMARY KEY (`userlevelid`,`tablename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlevelpermissions`
--

LOCK TABLES `userlevelpermissions` WRITE;
/*!40000 ALTER TABLE `userlevelpermissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `userlevelpermissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userlevels`
--

DROP TABLE IF EXISTS `userlevels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userlevels` (
  `userlevelid` int(11) NOT NULL,
  `userlevelname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`userlevelid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlevels`
--

LOCK TABLES `userlevels` WRITE;
/*!40000 ALTER TABLE `userlevels` DISABLE KEYS */;
INSERT INTO `userlevels` VALUES (-1,'Administrator'),(0,'Anonymous');
/*!40000 ALTER TABLE `userlevels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `direccion` varchar(512) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `codigo_empresa` int(11) DEFAULT NULL,
  `codigo_departamento` int(11) DEFAULT NULL,
  `cargo` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`,`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Edwin','Marquez','04266248084','emarquez1918@gmail.com','Sector Jose Antonio Paez, calle 95-1, casa 59-60',-1,1,1,2,NULL,'leonel','123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_ismcenter'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-13 19:26:37
