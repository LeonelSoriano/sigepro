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
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `metas` (`codigo_proyecto`),
  CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `metas` (`codigo_objetivo`),
  CONSTRAINT `actividades_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `metas` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
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
  KEY `codigo_departamento` (`codigo_departamento`),
  CONSTRAINT `cargos_ibfk_2` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamentos` (`codigo`)
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
  KEY `codigo_empresa` (`codigo_empresa`),
  CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`codigo_empresa`) REFERENCES `empresas` (`codigo`)
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
INSERT INTO `empresas` VALUES (1,'1','polar ca','polar','123','1123','caracas','04125698745','ramon antonio','04142549867','hola@hola.com','1'),(2,'2','de masa','de ma','12344','2333','valencia',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
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
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  CONSTRAINT `metas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `objetivos` (`codigo_proyecto`),
  CONSTRAINT `metas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `objetivos` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas`
--

LOCK TABLES `metas` WRITE;
/*!40000 ALTER TABLE `metas` DISABLE KEYS */;
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
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo` (`codigo`,`codigo_proyecto`),
  CONSTRAINT `objetivos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyectos` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objetivos`
--

LOCK TABLES `objetivos` WRITE;
/*!40000 ALTER TABLE `objetivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_actividades`
--

DROP TABLE IF EXISTS `observadores_actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_actividades` (
  `codigo` int(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_actividades`
--

LOCK TABLES `observadores_actividades` WRITE;
/*!40000 ALTER TABLE `observadores_actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `observadores_actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_metas`
--

DROP TABLE IF EXISTS `observadores_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_metas` (
  `codigo` int(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_metas`
--

LOCK TABLES `observadores_metas` WRITE;
/*!40000 ALTER TABLE `observadores_metas` DISABLE KEYS */;
/*!40000 ALTER TABLE `observadores_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_objetivos`
--

DROP TABLE IF EXISTS `observadores_objetivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_objetivos` (
  `codigo` int(255) NOT NULL,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(11) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_objetivo`,`codigo_usuario`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  CONSTRAINT `observadores_objetivos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `objetivos` (`codigo_proyecto`),
  CONSTRAINT `observadores_objetivos_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `objetivos` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_objetivos`
--

LOCK TABLES `observadores_objetivos` WRITE;
/*!40000 ALTER TABLE `observadores_objetivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `observadores_objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_proyectos`
--

DROP TABLE IF EXISTS `observadores_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_proyectos` (
  `codigo` int(255) NOT NULL,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_usuario`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `observadores_proyectos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyectos` (`codigo`),
  CONSTRAINT `observadores_proyectos_ibfk_2` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_proyectos`
--

LOCK TABLES `observadores_proyectos` WRITE;
/*!40000 ALTER TABLE `observadores_proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `observadores_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observadores_tareas`
--

DROP TABLE IF EXISTS `observadores_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observadores_tareas` (
  `codigo` int(255) NOT NULL,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `codigo_tareas` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_objetivo`,`codigo_meta`,`codigo_actividad`,`codigo_tareas`,`codigo_usuario`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  KEY `codigo_tareas` (`codigo_tareas`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `observadores_tareas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `tareas` (`codigo_proyecto`),
  CONSTRAINT `observadores_tareas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `tareas` (`codigo_objetivo`),
  CONSTRAINT `observadores_tareas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `tareas` (`codigo_meta`),
  CONSTRAINT `observadores_tareas_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `tareas` (`codigo_actividad`),
  CONSTRAINT `observadores_tareas_ibfk_5` FOREIGN KEY (`codigo_tareas`) REFERENCES `tareas` (`codigo`),
  CONSTRAINT `observadores_tareas_ibfk_6` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observadores_tareas`
--

LOCK TABLES `observadores_tareas` WRITE;
/*!40000 ALTER TABLE `observadores_tareas` DISABLE KEYS */;
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
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
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
  `codigo` int(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_actividades`
--

LOCK TABLES `responsables_actividades` WRITE;
/*!40000 ALTER TABLE `responsables_actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsables_actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_metas`
--

DROP TABLE IF EXISTS `responsables_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_metas` (
  `codigo` int(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_metas`
--

LOCK TABLES `responsables_metas` WRITE;
/*!40000 ALTER TABLE `responsables_metas` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsables_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_objetivos`
--

DROP TABLE IF EXISTS `responsables_objetivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_objetivos` (
  `codigo` int(255) NOT NULL,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(11) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_usuario`,`codigo_objetivo`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `responsables_objetivos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `objetivos` (`codigo_proyecto`),
  CONSTRAINT `responsables_objetivos_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `objetivos` (`codigo`),
  CONSTRAINT `responsables_objetivos_ibfk_3` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_objetivos`
--

LOCK TABLES `responsables_objetivos` WRITE;
/*!40000 ALTER TABLE `responsables_objetivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsables_objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_proyectos`
--

DROP TABLE IF EXISTS `responsables_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_proyectos` (
  `codigo` int(255) NOT NULL,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_usuario`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `responsables_proyectos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyectos` (`codigo`),
  CONSTRAINT `responsables_proyectos_ibfk_2` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_proyectos`
--

LOCK TABLES `responsables_proyectos` WRITE;
/*!40000 ALTER TABLE `responsables_proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsables_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsables_tareas`
--

DROP TABLE IF EXISTS `responsables_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsables_tareas` (
  `codigo` int(255) NOT NULL,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `codigo_tareas` int(255) DEFAULT NULL,
  `codigo_usuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`,`codigo_usuario`,`codigo_objetivo`,`codigo_meta`,`codigo_actividad`,`codigo_tareas`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  KEY `codigo_tareas` (`codigo_tareas`),
  KEY `codigo_usuario` (`codigo_usuario`),
  CONSTRAINT `responsables_tareas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `tareas` (`codigo_proyecto`),
  CONSTRAINT `responsables_tareas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `tareas` (`codigo_objetivo`),
  CONSTRAINT `responsables_tareas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `tareas` (`codigo_meta`),
  CONSTRAINT `responsables_tareas_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `tareas` (`codigo_actividad`),
  CONSTRAINT `responsables_tareas_ibfk_5` FOREIGN KEY (`codigo_tareas`) REFERENCES `tareas` (`codigo`),
  CONSTRAINT `responsables_tareas_ibfk_6` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsables_tareas`
--

LOCK TABLES `responsables_tareas` WRITE;
/*!40000 ALTER TABLE `responsables_tareas` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsables_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas`
--

DROP TABLE IF EXISTS `tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas` (
  `codigo` int(11) NOT NULL,
  `codigo_proyecto` int(255) DEFAULT NULL,
  `codigo_objetivo` int(255) DEFAULT NULL,
  `codigo_meta` int(255) DEFAULT NULL,
  `codigo_actividad` int(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `fecha_entrega` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `fecha_pausa` varchar(255) DEFAULT NULL,
  `fecha_inicio` varchar(255) DEFAULT NULL,
  `porcentaje` varchar(255) DEFAULT NULL,
  `usuario_creador` varchar(255) DEFAULT NULL,
  `direccion_ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo_objetivo` (`codigo_objetivo`),
  KEY `codigo_meta` (`codigo_meta`),
  KEY `codigo_actividad` (`codigo_actividad`),
  CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `actividades` (`codigo_proyecto`),
  CONSTRAINT `tareas_ibfk_2` FOREIGN KEY (`codigo_objetivo`) REFERENCES `actividades` (`codigo_objetivo`),
  CONSTRAINT `tareas_ibfk_3` FOREIGN KEY (`codigo_meta`) REFERENCES `actividades` (`codigo_meta`),
  CONSTRAINT `tareas_ibfk_4` FOREIGN KEY (`codigo_actividad`) REFERENCES `actividades` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
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
  CONSTRAINT `tareas_recursos_economicos_ibfk_1` FOREIGN KEY (`codigo_recurso_economico`) REFERENCES `recursos_fisicos` (`codigo`),
  CONSTRAINT `tareas_recursos_economicos_ibfk_2` FOREIGN KEY (`codigo_tarea`) REFERENCES `tareas` (`codigo`)
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
  CONSTRAINT `tareas_recursos_fisicos_ibfk_1` FOREIGN KEY (`codigo_recurso_fisico`) REFERENCES `recursos_fisicos` (`codigo`),
  CONSTRAINT `tareas_recursos_fisicos_ibfk_2` FOREIGN KEY (`codigo_tarea`) REFERENCES `tareas` (`codigo`)
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_usuarios`
--

LOCK TABLES `tipos_usuarios` WRITE;
/*!40000 ALTER TABLE `tipos_usuarios` DISABLE KEYS */;
INSERT INTO `tipos_usuarios` VALUES (1,'administrador','admin',1),(2,'observador','obser',2);
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
  PRIMARY KEY (`codigo`),
  KEY `codigo_tipo_usuario` (`codigo_tipo_usuario`),
  KEY `codigo_empresa` (`codigo_cargo`),
  KEY `codigo_cargo` (`codigo_cargo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`codigo_tipo_usuario`) REFERENCES `tipos_usuarios` (`codigo`),
  CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`codigo_cargo`) REFERENCES `cargos` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'leonel','123','leonel','soriano','123456789','hola@hola.net','2001/05/05',1,'12','','01463562587','123asd','',1,'vivo en mi casa ñandú');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sigepro'
--
/*!50003 DROP PROCEDURE IF EXISTS `get_user_by_password_username` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_user_by_password_username`(IN pass VARCHAR(255), IN nameuser VARCHAR(255))
begin

	
	DECLARE total INT DEFAULT 0;
	
	select count(*) into total  from usuarios where usuarios.contrasena = pass and usuarios.usuario = nameuser;
	
	if total = 1 then
		select usuarios.codigo  as id, usuarios.usuario as nameUser, usuarios.nombre as name,
			usuarios.apellido as surName, usuarios.identificacion as idcard, usuarios.correo_electronico as email,
			usuarios.imagen as img, usuarios.skype as skype, usuarios.telefono as phone,
			usuarios.codigo_tipo_usuario as typeUser, usuarios.direccion as address
		from usuarios  where usuarios.contrasena = pass and usuarios.usuario = nameuser;
	
	else
	select -1  as id,null as nameUser, null as name,
			null as surName, null as idcard, null as email,
			null as img, null as skype, null as phone,
			null as typeUser, null as address;
	end if;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_combo_to_user` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_combo_to_user`(IN idparam INTEGER)
begin
	
	select 
		empresas.codigo as id,
		empresas.nombre as name,
		IF(departamentos.codigo_empresa = empresas.codigo, 1, 0) as active 
	from empresas,usuarios
	inner join cargos on
	cargos.codigo = usuarios.codigo_cargo
	inner join departamentos on
	departamentos.codigo = cargos.codigo_departamento
	where usuarios.codigo = idparam
	;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_combo_user_to_departament` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_combo_user_to_departament`(IN idparam INTEGER)
begin
	
	select departamentos.codigo as id,
			departamentos.nombre as name,
			IF(cargos.codigo_departamento = departamentos.codigo, 1, 0) as active 
	from departamentos,usuarios
	inner join cargos on
	cargos.codigo = usuarios.codigo_cargo
		where usuarios.codigo = idparam;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_get_combo_position_company_user` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_combo_position_company_user`(IN idparam INTEGER)
begin
	select departamentos.codigo as id,
	concat(empresas.nombre , ' | ', departamentos.nombre, ' | ',cargos.nombre , ' | '  ) as name,
	if((select usuarios.codigo_cargo from usuarios where usuarios.codigo = 1) = cargos.codigo,1,0) as active 
	from cargos
	inner join departamentos on
	departamentos.codigo = cargos.codigo_departamento
	inner join empresas
	on empresas.codigo = departamentos.codigo_empresa	
	;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_get_combo_user_to_position` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_combo_user_to_position`(IN idparam INTEGER)
begin
	select 
	cargos.codigo as id,
	cargos.nombre as name,
	IF(usuarios.codigo_cargo = cargos.codigo, 1, 0) as active 
	from cargos,usuarios
	where usuarios.codigo = idparam;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_get_combo_user_to_typeuser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_combo_user_to_typeuser`(IN idparam INTEGER)
begin
	select tipos_usuarios.codigo as id,
		tipos_usuarios.nombre as name,
		IF(tipos_usuarios.codigo = usuarios.codigo_tipo_usuario, 1, 0) as active 
	from tipos_usuarios,usuarios
	where usuarios.codigo = idparam;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_get_user_by_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_user_by_id`(IN nameuser INTEGER)
begin
	
	select 
	 usuarios.nombre as name,
	 usuarios.apellido as surname,
	 usuarios.telefono as phone,
	 usuarios.correo_electronico as email,
	 usuarios.direccion as addres,
	 sigepro.cargos.nombre as job_title,
	 sigepro.departamentos.nombre as departament,
	 sigepro.empresas.nombre as name_company,
	 sigepro.tipos_usuarios.nombre as user_type,
	 sigepro.usuarios.usuario as user_name,
	sigepro.usuarios.imagen as img,
    sigepro.usuarios.contrasena as password
	
	from usuarios
	inner join sigepro.cargos 
	on sigepro.cargos.codigo = sigepro.usuarios.codigo_cargo
	inner join sigepro.departamentos 
	on sigepro.departamentos.codigo = sigepro.cargos.codigo_departamento
	inner join sigepro.empresas
	on sigepro.empresas.codigo = sigepro.departamentos.codigo_empresa
	inner join sigepro.tipos_usuarios
	on sigepro.tipos_usuarios.codigo = sigepro.usuarios.codigo_tipo_usuario
	;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_upd_user` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_upd_user`(IN id_in       INTEGER, IN name_in VARCHAR(255),
                                                           IN surname_in  VARCHAR(255),
                                                           IN phone_in    VARCHAR(255), IN email_in VARCHAR(255),
                                                           IN address_in  VARCHAR(255), IN position_job_in INTEGER,
                                                           IN img_in      VARCHAR(255), IN user_type_int INTEGER,
                                                           IN password_in VARCHAR(255)
)
BEGIN
    IF img_in IS NOT NULL
    THEN
      UPDATE usuarios
      SET imagen = img_in
      WHERE codigo = id_in;
    END IF;

    UPDATE usuarios
    SET nombre     = name_in, apellido = surname_in, telefono = phone_in, correo_electronico = email_in,
      direccion    = address_in,
      codigo_cargo = position_job_in, codigo_tipo_usuario = user_type_int, contrasena = password_in
    WHERE codigo = id_in;
  END ;;
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

-- Dump completed on 2016-05-13 19:25:10