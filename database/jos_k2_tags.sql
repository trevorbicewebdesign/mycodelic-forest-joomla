
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
DROP TABLE IF EXISTS `jos_k2_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_k2_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `published` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `published` (`published`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_k2_tags` WRITE;
/*!40000 ALTER TABLE `jos_k2_tags` DISABLE KEYS */;
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (1,'Air',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (2,'bed',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (3,'durrable',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (4,'Air Bed',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (5,'durability',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (6,'Bruningman',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (7,'MOOP',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (8,'moop stick',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (9,'Grabber',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (10,'Burningman',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (11,'festival',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (12,'folding',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (13,'green team',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (14,'green',1);
INSERT INTO `jos_k2_tags` (`id`, `name`, `published`) VALUES (15,'eco',1);
/*!40000 ALTER TABLE `jos_k2_tags` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

