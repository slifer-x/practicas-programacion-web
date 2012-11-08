-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: prac_web
-- ------------------------------------------------------
-- Server version	5.5.24-5

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_path` blob,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Alex','manuelolmedo18@gmail.com','985bc13f5d90007013de20a57e91365a',NULL,NULL,NULL,NULL,NULL,NULL),(2,'Ricardo','ricardo.vargas540@hotmail.com','93270c0efaa70fc0ce16bea268d910d5',NULL,NULL,NULL,NULL,NULL,NULL),(3,'Nancy','manuelolmedo18@gmail.com','25d55ad283aa400af464c76d713c07ad','Manuel','Av. Revolucion #17','F','21213232',NULL,'2012-10-10'),(4,'Nancy','manuelolmedo18@gmail.com','25d55ad283aa400af464c76d713c07ad',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Nancy','kenys1966@hotmail.com','25d55ad283aa400af464c76d713c07ad',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Nancy','kenis1966@hotmail.com','25d55ad283aa400af464c76d713c07ad','Nancy Hurtado','Av. Revolucion #17','M','21213232',NULL,'2012-10-09'),(7,'Manuel','darkblack_15t@hotmail.com','c1ed52086b8f8e8f5902ac3a3aa935e0',NULL,NULL,NULL,NULL,NULL,NULL),(8,'Manuel','darkblack_15t@hotmail.com','25d55ad283aa400af464c76d713c07ad','Alex Meza Olmedo','Av. Revolucion #17','M','3334855161',NULL,'2012-01-11');
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

-- Dump completed on 2012-11-08  0:40:24
