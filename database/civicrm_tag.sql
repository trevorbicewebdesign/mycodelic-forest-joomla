
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
DROP TABLE IF EXISTS `civicrm_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Tag ID',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of Tag.',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional verbose description of the tag.',
  `parent_id` int(10) unsigned DEFAULT NULL COMMENT 'Optional parent id for this tag.',
  `is_selectable` tinyint(4) DEFAULT '1' COMMENT 'Is this tag selectable / displayed',
  `is_reserved` tinyint(4) DEFAULT '0',
  `is_tagset` tinyint(4) DEFAULT '0',
  `used_for` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who created this tag',
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Hex color value e.g. #ffffff',
  `created_date` datetime DEFAULT NULL COMMENT 'Date and time that tag was created.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`),
  KEY `FK_civicrm_tag_parent_id` (`parent_id`),
  KEY `FK_civicrm_tag_created_id` (`created_id`),
  CONSTRAINT `FK_civicrm_tag_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_tag_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `civicrm_tag` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_tag` WRITE;
/*!40000 ALTER TABLE `civicrm_tag` DISABLE KEYS */;
INSERT INTO `civicrm_tag` (`id`, `name`, `description`, `parent_id`, `is_selectable`, `is_reserved`, `is_tagset`, `used_for`, `created_id`, `color`, `created_date`) VALUES (1,'Non-profit','Any not-for-profit organization.',NULL,1,0,0,'civicrm_contact',NULL,NULL,NULL);
INSERT INTO `civicrm_tag` (`id`, `name`, `description`, `parent_id`, `is_selectable`, `is_reserved`, `is_tagset`, `used_for`, `created_id`, `color`, `created_date`) VALUES (2,'Company','For-profit organization.',NULL,1,0,0,'civicrm_contact',NULL,NULL,NULL);
INSERT INTO `civicrm_tag` (`id`, `name`, `description`, `parent_id`, `is_selectable`, `is_reserved`, `is_tagset`, `used_for`, `created_id`, `color`, `created_date`) VALUES (3,'Government Entity','Any governmental entity.',NULL,1,0,0,'civicrm_contact',NULL,NULL,NULL);
INSERT INTO `civicrm_tag` (`id`, `name`, `description`, `parent_id`, `is_selectable`, `is_reserved`, `is_tagset`, `used_for`, `created_id`, `color`, `created_date`) VALUES (4,'Major Donor','High-value supporter of our organization.',NULL,1,0,0,'civicrm_contact',NULL,NULL,NULL);
INSERT INTO `civicrm_tag` (`id`, `name`, `description`, `parent_id`, `is_selectable`, `is_reserved`, `is_tagset`, `used_for`, `created_id`, `color`, `created_date`) VALUES (5,'Volunteer','Active volunteers.',NULL,1,0,0,'civicrm_contact',NULL,NULL,NULL);
/*!40000 ALTER TABLE `civicrm_tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

