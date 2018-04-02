
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
DROP TABLE IF EXISTS `civicrm_mailing_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mailing_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mailing_id` int(10) unsigned NOT NULL COMMENT 'The ID of a previous mailing to include/exclude recipients.',
  `group_type` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Are the members of the group included or excluded?.',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of table where item being referenced is stored.',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'Foreign key to the referenced item.',
  `search_id` int(11) DEFAULT NULL COMMENT 'The filtering search. custom search id or -1 for civicrm api search',
  `search_args` text COLLATE utf8_unicode_ci COMMENT 'The arguments to be sent to the search function',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_mailing_group_mailing_id` (`mailing_id`),
  CONSTRAINT `FK_civicrm_mailing_group_mailing_id` FOREIGN KEY (`mailing_id`) REFERENCES `civicrm_mailing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mailing_group` WRITE;
/*!40000 ALTER TABLE `civicrm_mailing_group` DISABLE KEYS */;
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (19,6,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (22,7,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (29,8,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (32,4,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (41,11,'Include','civicrm_group',10,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (44,12,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (45,9,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (46,10,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (47,13,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (53,15,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (54,16,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (55,16,'Include','civicrm_group',10,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (58,17,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (59,17,'Include','civicrm_group',10,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (67,18,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (68,18,'Include','civicrm_group',10,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (69,18,'Include','civicrm_group',13,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (74,20,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (75,20,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (76,21,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (77,21,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (78,22,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (79,22,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (80,23,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (81,23,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (84,24,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (163,25,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (164,25,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (193,26,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (194,26,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (199,27,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (200,27,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (201,28,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (202,28,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (203,29,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (204,29,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (205,30,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (206,30,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (207,31,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (208,31,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (211,32,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (212,32,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (213,33,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (214,33,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (217,34,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (218,34,'Include','civicrm_group',4,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (219,35,'Include','civicrm_group',11,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (220,19,'Include','civicrm_group',9,NULL,NULL);
INSERT INTO `civicrm_mailing_group` (`id`, `mailing_id`, `group_type`, `entity_table`, `entity_id`, `search_id`, `search_args`) VALUES (221,19,'Include','civicrm_group',10,NULL,NULL);
/*!40000 ALTER TABLE `civicrm_mailing_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

