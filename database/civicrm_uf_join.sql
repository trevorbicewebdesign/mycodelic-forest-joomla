
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
DROP TABLE IF EXISTS `civicrm_uf_join`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_uf_join` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique table ID',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this join currently active?',
  `module` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Module which owns this uf_join instance, e.g. User Registration, CiviDonate, etc.',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of table where item being referenced is stored. Modules which only need a single collection of uf_join instances may choose not to populate entity_table and entity_id.',
  `entity_id` int(10) unsigned DEFAULT NULL COMMENT 'Foreign key to the referenced item.',
  `weight` int(11) NOT NULL DEFAULT '1' COMMENT 'Controls display order when multiple user framework groups are setup for concurrent display.',
  `uf_group_id` int(10) unsigned NOT NULL COMMENT 'Which form does this field belong to.',
  `module_data` longtext COLLATE utf8_unicode_ci COMMENT 'Json serialized array of data used by the ufjoin.module',
  PRIMARY KEY (`id`),
  KEY `index_entity` (`entity_table`,`entity_id`),
  KEY `FK_civicrm_uf_join_uf_group_id` (`uf_group_id`),
  CONSTRAINT `FK_civicrm_uf_join_uf_group_id` FOREIGN KEY (`uf_group_id`) REFERENCES `civicrm_uf_group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_uf_join` WRITE;
/*!40000 ALTER TABLE `civicrm_uf_join` DISABLE KEYS */;
INSERT INTO `civicrm_uf_join` (`id`, `is_active`, `module`, `entity_table`, `entity_id`, `weight`, `uf_group_id`, `module_data`) VALUES (1,1,'User Registration',NULL,NULL,1,1,NULL);
INSERT INTO `civicrm_uf_join` (`id`, `is_active`, `module`, `entity_table`, `entity_id`, `weight`, `uf_group_id`, `module_data`) VALUES (2,1,'User Account',NULL,NULL,1,1,NULL);
INSERT INTO `civicrm_uf_join` (`id`, `is_active`, `module`, `entity_table`, `entity_id`, `weight`, `uf_group_id`, `module_data`) VALUES (3,1,'Profile',NULL,NULL,1,1,NULL);
INSERT INTO `civicrm_uf_join` (`id`, `is_active`, `module`, `entity_table`, `entity_id`, `weight`, `uf_group_id`, `module_data`) VALUES (4,1,'Profile',NULL,NULL,2,2,NULL);
INSERT INTO `civicrm_uf_join` (`id`, `is_active`, `module`, `entity_table`, `entity_id`, `weight`, `uf_group_id`, `module_data`) VALUES (5,1,'Profile',NULL,NULL,11,12,NULL);
/*!40000 ALTER TABLE `civicrm_uf_join` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

