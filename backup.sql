-- MariaDB dump 10.19  Distrib 10.6.9-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: prueba
-- ------------------------------------------------------
-- Server version	10.6.9-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `itm`
--

DROP TABLE IF EXISTS `itm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itm` (
  `ctelefono` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `t1` double DEFAULT NULL,
  `t2` double DEFAULT NULL,
  `t3` double DEFAULT NULL,
  `t4` double DEFAULT NULL,
  `t5` double DEFAULT NULL,
  `t6` double DEFAULT NULL,
  `cantidad_seleccionada` varchar(30) DEFAULT NULL,
  `parcial` varchar(30) DEFAULT NULL,
  `descuento_cantidad` varchar(80) DEFAULT NULL,
  `subtotal` varchar(80) DEFAULT NULL,
  `descuento_parcial` varchar(80) DEFAULT NULL,
  `descuento_Mpago` varchar(80) DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itm`
--

LOCK TABLES `itm` WRITE;
/*!40000 ALTER TABLE `itm` DISABLE KEYS */;
INSERT INTO `itm` VALUES ('9','Dylan',1,2,3,4,5,6,'6','49800','2490','47310','9462','1040.82',36807.18),('23','Dylan',23,45,12,45,11,34,'6','616500','30825','585675','117135','12884.85',455655.15);
/*!40000 ALTER TABLE `itm` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-08 16:13:10
