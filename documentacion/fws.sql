-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.14 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para fsw
CREATE DATABASE IF NOT EXISTS `fsw` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fsw`;

-- Volcando estructura para tabla fsw.det_rec_proy
CREATE TABLE IF NOT EXISTS `det_rec_proy` (
  `ID_OT` int(11) NOT NULL,
  `ID_RECURSO` int(11) NOT NULL,
  `ID_TAREA` int(11) DEFAULT NULL,
  KEY `ID_OT_idx` (`ID_OT`),
  KEY `ID_RECU_idx` (`ID_RECURSO`),
  KEY `ID_TAREA_idx` (`ID_TAREA`),
  CONSTRAINT `ID_OT` FOREIGN KEY (`ID_OT`) REFERENCES `orden_trabajo` (`ID_OT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_RECU` FOREIGN KEY (`ID_RECURSO`) REFERENCES `recurso` (`ID_RECURSO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_TAREA` FOREIGN KEY (`ID_TAREA`) REFERENCES `tarea` (`ID_TA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.det_rec_proy: ~0 rows (aproximadamente)
DELETE FROM `det_rec_proy`;
/*!40000 ALTER TABLE `det_rec_proy` DISABLE KEYS */;
/*!40000 ALTER TABLE `det_rec_proy` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.estatus
CREATE TABLE IF NOT EXISTS `estatus` (
  `ID_ESTATUS` int(11) NOT NULL ,
  `DESC_ESTATUS` char(45) NOT NULL,
  `TIPO_ESTATUS` char(45) NOT NULL,
  PRIMARY KEY (`ID_ESTATUS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.estatus: ~0 rows (aproximadamente)
DELETE FROM `estatus`;
/*!40000 ALTER TABLE `estatus` DISABLE KEYS */;
/*!40000 ALTER TABLE `estatus` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.oficina
CREATE TABLE IF NOT EXISTS `oficina` (
  `ID_OFICINA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_OFI` char(45) DEFAULT NULL,
  `CALLE_OFI` varchar(45) DEFAULT NULL,
  `NUM_OFI` varchar(10) DEFAULT NULL,
  `COLONIA_OFI` varchar(45) DEFAULT NULL,
  `TELEFONO_OFI` varchar(45) DEFAULT NULL,
  `CIUDAD_OFI` char(45) DEFAULT NULL,
  `LATITUD` decimal(10,7) DEFAULT NULL,
  `LONGITUD` decimal(10,7) DEFAULT NULL,
  PRIMARY KEY (`ID_OFICINA`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.oficina: ~0 rows (aproximadamente)
DELETE FROM `oficina`;
/*!40000 ALTER TABLE `oficina` DISABLE KEYS */;
/*!40000 ALTER TABLE `oficina` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.orden_trabajo
CREATE TABLE IF NOT EXISTS `orden_trabajo` (
  `ID_OT` int(11) NOT NULL AUTO_INCREMENT,
  `DESC_OT` varchar(45) DEFAULT NULL,
  `HORAS_OT` int(11) DEFAULT NULL,
  `FEC_IN_OT` date DEFAULT NULL,
  `FEC_FN_OT` date DEFAULT NULL,
  `ID_ESTATUS` int(11) DEFAULT NULL,
  `LIDER_CLIENTE_OT` char(45) DEFAULT NULL,
  `ID_PROYECTO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_OT`),
  KEY `FK_ESTAT_idx` (`ID_ESTATUS`),
  KEY `FK_PROJECT_idx` (`ID_PROYECTO`),
  CONSTRAINT `FK_ESTAT` FOREIGN KEY (`ID_ESTATUS`) REFERENCES `estatus` (`ID_ESTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_PROJECT` FOREIGN KEY (`ID_PROYECTO`) REFERENCES `proyecto` (`ID_PROYECT`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.orden_trabajo: ~0 rows (aproximadamente)
DELETE FROM `orden_trabajo`;
/*!40000 ALTER TABLE `orden_trabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `orden_trabajo` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.proyecto
CREATE TABLE IF NOT EXISTS `proyecto` (
  `ID_PROYECT` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PROYECT` varchar(45) NOT NULL,
  `DESC_PROYECT` varchar(45) NOT NULL,
  `ID_TEC` int(11) DEFAULT NULL,
  `FECHA_INI` date DEFAULT NULL,
  `FECHA_TER` date DEFAULT NULL,
  `ID_ESTATUS` int(11) DEFAULT NULL,
  `ID_OFICINA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_PROYECT`),
  KEY `FK_EST_idx` (`ID_ESTATUS`),
  KEY `FK_OFIC_idx` (`ID_OFICINA`),
  KEY `FK_TEC_idx` (`ID_TEC`),
  CONSTRAINT `FK_EST` FOREIGN KEY (`ID_ESTATUS`) REFERENCES `estatus` (`ID_ESTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_OFIC` FOREIGN KEY (`ID_OFICINA`) REFERENCES `oficina` (`ID_OFICINA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_TEC` FOREIGN KEY (`ID_TEC`) REFERENCES `tecnologia` (`ID_TEC`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.proyecto: ~0 rows (aproximadamente)
DELETE FROM `proyecto`;
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyecto` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.puesto
CREATE TABLE IF NOT EXISTS `puesto` (
  `ID_PUESTO` int(11) NOT NULL AUTO_INCREMENT,
  `DESC_PUESTO` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_PUESTO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.puesto: ~0 rows (aproximadamente)
DELETE FROM `puesto`;
/*!40000 ALTER TABLE `puesto` DISABLE KEYS */;
/*!40000 ALTER TABLE `puesto` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.recurso
CREATE TABLE IF NOT EXISTS `recurso` (
  `ID_RECURSO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_REC` char(45) DEFAULT NULL,
  `APATERNO_REC` char(45) DEFAULT NULL,
  `AMATERNO_REC` char(45) DEFAULT NULL,
  `ID_ESTATUS` int(11) DEFAULT NULL,
  `ID_TEC_PRI` int(11) DEFAULT NULL,
  `ID_TEC_SEC` int(11) DEFAULT NULL,
  `ID_PUESTO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_RECURSO`),
  KEY `FK_TEC1_idx` (`ID_TEC_PRI`),
  KEY `FK_TEC2_idx` (`ID_TEC_SEC`),
  KEY `FK_PUESTO_idx` (`ID_PUESTO`),
  CONSTRAINT `FK_PUESTO` FOREIGN KEY (`ID_PUESTO`) REFERENCES `puesto` (`ID_PUESTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_TEC1` FOREIGN KEY (`ID_TEC_PRI`) REFERENCES `tecnologia` (`ID_TEC`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_TEC2` FOREIGN KEY (`ID_TEC_SEC`) REFERENCES `tecnologia` (`ID_TEC`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.recurso: ~0 rows (aproximadamente)
DELETE FROM `recurso`;
/*!40000 ALTER TABLE `recurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `recurso` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.tarea
CREATE TABLE IF NOT EXISTS `tarea` (
  `ID_TA` int(11) NOT NULL AUTO_INCREMENT,
  `DESC_TA` varchar(45) DEFAULT NULL,
  `FEC_IN_TA` date DEFAULT NULL,
  `FEC_FN_TA` date DEFAULT NULL,
  `HORAS_TA` int(11) DEFAULT NULL,
  `ID_ESTATUS` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_TA`),
  KEY `FK_ETS_idx` (`ID_ESTATUS`),
  CONSTRAINT `FK_ETS` FOREIGN KEY (`ID_ESTATUS`) REFERENCES `estatus` (`ID_ESTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.tarea: ~0 rows (aproximadamente)
DELETE FROM `tarea`;
/*!40000 ALTER TABLE `tarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarea` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.tecnologia
CREATE TABLE IF NOT EXISTS `tecnologia` (
  `ID_TEC` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_TEC` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_TEC`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.tecnologia: ~0 rows (aproximadamente)
DELETE FROM `tecnologia`;
/*!40000 ALTER TABLE `tecnologia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tecnologia` ENABLE KEYS */;

-- Volcando estructura para tabla fsw.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_USR` varchar(45) NOT NULL,
  `PASSWORD_USR` varchar(45) NOT NULL,
  `ID_RECURSO` int(11) NOT NULL,
  `ID_ESTAT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `FK_EST_idx` (`ID_ESTAT`),
  CONSTRAINT `FK_ESTS` FOREIGN KEY (`ID_ESTAT`) REFERENCES `estatus` (`ID_ESTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla fsw.usuario: ~0 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
