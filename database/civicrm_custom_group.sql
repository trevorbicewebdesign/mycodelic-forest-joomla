
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
DROP TABLE IF EXISTS `civicrm_custom_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_custom_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Custom Group ID',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Variable name/programmatic handle for this group.',
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Friendly Name.',
  `extends` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Contact' COMMENT 'Type of object this group extends (can add other options later e.g. contact_address, etc.).',
  `extends_entity_column_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_option_value.id (for option group custom_data_type.)',
  `extends_entity_column_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'linking custom group for dynamic object',
  `style` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Visual relationship between this form and its parent.',
  `collapse_display` int(10) unsigned DEFAULT '0' COMMENT 'Will this group be in collapsed or expanded mode on initial display ?',
  `help_pre` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display before fields in form.',
  `help_post` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display after fields in form.',
  `weight` int(11) NOT NULL DEFAULT '1' COMMENT 'Controls display order when multiple extended property groups are setup for the same class.',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this property active?',
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of the table that holds the values for this group.',
  `is_multiple` tinyint(4) DEFAULT NULL COMMENT 'Does this group hold multiple values?',
  `min_multiple` int(10) unsigned DEFAULT NULL COMMENT 'minimum number of multiple records (typically 0?)',
  `max_multiple` int(10) unsigned DEFAULT NULL COMMENT 'maximum number of multiple records, if 0 - no max',
  `collapse_adv_display` int(10) unsigned DEFAULT '0' COMMENT 'Will this group be in collapsed or expanded mode on advanced search display ?',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who created this custom group',
  `created_date` datetime DEFAULT NULL COMMENT 'Date and time this custom group was created.',
  `is_reserved` tinyint(4) DEFAULT '0' COMMENT 'Is this a reserved Custom Group?',
  `is_public` tinyint(4) DEFAULT '1' COMMENT 'Is this property public?',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_title_extends` (`title`,`extends`),
  UNIQUE KEY `UI_name_extends` (`name`,`extends`),
  KEY `FK_civicrm_custom_group_created_id` (`created_id`),
  CONSTRAINT `FK_civicrm_custom_group_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_custom_group` WRITE;
/*!40000 ALTER TABLE `civicrm_custom_group` DISABLE KEYS */;
INSERT INTO `civicrm_custom_group` (`id`, `name`, `title`, `extends`, `extends_entity_column_id`, `extends_entity_column_value`, `style`, `collapse_display`, `help_pre`, `help_post`, `weight`, `is_active`, `table_name`, `is_multiple`, `min_multiple`, `max_multiple`, `collapse_adv_display`, `created_id`, `created_date`, `is_reserved`, `is_public`) VALUES (1,'Custom','Custom','Contact',NULL,NULL,'Inline',1,'','',1,1,'civicrm_value_custom_1',0,NULL,NULL,0,2,'2018-01-28 15:37:34',0,1);
/*!40000 ALTER TABLE `civicrm_custom_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

