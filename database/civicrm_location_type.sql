
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
DROP TABLE IF EXISTS `civicrm_location_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_location_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Location Type ID',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Location Type Name.',
  `display_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Location Type Display Name.',
  `vcard_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'vCard Location Type Name.',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Location Type Description.',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this location type a predefined system location?',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this property active?',
  `is_default` tinyint(4) DEFAULT NULL COMMENT 'Is this location type the default?',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_location_type` WRITE;
/*!40000 ALTER TABLE `civicrm_location_type` DISABLE KEYS */;
INSERT INTO `civicrm_location_type` (`id`, `name`, `display_name`, `vcard_name`, `description`, `is_reserved`, `is_active`, `is_default`) VALUES (1,'Home','Home','HOME','Place of residence',0,1,1);
INSERT INTO `civicrm_location_type` (`id`, `name`, `display_name`, `vcard_name`, `description`, `is_reserved`, `is_active`, `is_default`) VALUES (2,'Work','Work','WORK','Work location',0,1,NULL);
INSERT INTO `civicrm_location_type` (`id`, `name`, `display_name`, `vcard_name`, `description`, `is_reserved`, `is_active`, `is_default`) VALUES (3,'Main','Main',NULL,'Main office location',0,1,NULL);
INSERT INTO `civicrm_location_type` (`id`, `name`, `display_name`, `vcard_name`, `description`, `is_reserved`, `is_active`, `is_default`) VALUES (4,'Other','Other',NULL,'Other location',0,1,NULL);
INSERT INTO `civicrm_location_type` (`id`, `name`, `display_name`, `vcard_name`, `description`, `is_reserved`, `is_active`, `is_default`) VALUES (5,'Billing','Billing',NULL,'Billing Address location',1,1,NULL);
/*!40000 ALTER TABLE `civicrm_location_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

