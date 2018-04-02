
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
DROP TABLE IF EXISTS `jos_rsfirewall_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsfirewall_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `published` (`published`),
  KEY `type` (`type`),
  KEY `ip` (`ip`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsfirewall_lists` WRITE;
/*!40000 ALTER TABLE `jos_rsfirewall_lists` DISABLE KEYS */;
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (1,'66.155.40.24',0,'','2017-02-20 01:52:03',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (2,'188.134.31.34',0,'','2017-02-20 01:52:06',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (3,'45.57.148.163',0,'','2017-02-20 08:38:39',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (4,'91.200.12.0/24',0,'','2017-02-20 09:50:20',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (5,'91.213.126.0/24',0,'','2017-02-20 09:51:08',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (7,'24.35.67.154',1,'','2017-02-22 01:07:48',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (8,'212.199.61.40',0,'','2017-05-21 23:52:12',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (9,'2603:3014:1e01:0100:f184:6294:03c2:2670',0,'','2017-05-21 23:52:23',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (10,'101.165.194.221',0,'','2017-05-21 23:52:29',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (11,'80.241.218.144',0,'','2017-05-21 23:52:31',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (12,'125.24.149.154',0,'','2017-05-21 23:52:37',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (13,'147.194.16.151',0,'','2017-05-21 23:52:42',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (14,'188.0.135.155',0,'','2017-05-21 23:52:51',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (15,'99.235.160.15',0,'','2017-05-21 23:52:57',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (16,'187.57.136.184',0,'','2017-05-21 23:53:00',1);
INSERT INTO `jos_rsfirewall_lists` (`id`, `ip`, `type`, `reason`, `date`, `published`) VALUES (17,'198.48.187.181',0,'','2017-05-21 23:53:03',1);
/*!40000 ALTER TABLE `jos_rsfirewall_lists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

