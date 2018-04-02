
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
DROP TABLE IF EXISTS `civicrm_contact_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_contact_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Contact Type ID',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Internal name of Contact Type (or Subtype).',
  `label` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'localized Name of Contact Type.',
  `description` text COLLATE utf8_unicode_ci COMMENT 'localized Optional verbose description of the type.',
  `image_URL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'URL of image if any.',
  `parent_id` int(10) unsigned DEFAULT NULL COMMENT 'Optional FK to parent contact type.',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this entry active?',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this contact type a predefined system type',
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact_type` (`name`),
  KEY `FK_civicrm_contact_type_parent_id` (`parent_id`),
  CONSTRAINT `FK_civicrm_contact_type_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `civicrm_contact_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_contact_type` WRITE;
/*!40000 ALTER TABLE `civicrm_contact_type` DISABLE KEYS */;
INSERT INTO `civicrm_contact_type` (`id`, `name`, `label`, `description`, `image_URL`, `parent_id`, `is_active`, `is_reserved`) VALUES (1,'Individual','Individual',NULL,NULL,NULL,1,1);
INSERT INTO `civicrm_contact_type` (`id`, `name`, `label`, `description`, `image_URL`, `parent_id`, `is_active`, `is_reserved`) VALUES (2,'Household','Household',NULL,NULL,NULL,1,1);
INSERT INTO `civicrm_contact_type` (`id`, `name`, `label`, `description`, `image_URL`, `parent_id`, `is_active`, `is_reserved`) VALUES (3,'Organization','Organization',NULL,NULL,NULL,1,1);
/*!40000 ALTER TABLE `civicrm_contact_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

