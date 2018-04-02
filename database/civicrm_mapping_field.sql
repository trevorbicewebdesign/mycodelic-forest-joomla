
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
DROP TABLE IF EXISTS `civicrm_mapping_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mapping_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mapping Field ID',
  `mapping_id` int(10) unsigned NOT NULL COMMENT 'Mapping to which this field belongs',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mapping field key',
  `contact_type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contact Type in mapping',
  `column_number` int(10) unsigned NOT NULL COMMENT 'Column number for mapping set',
  `location_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Location type of this mapping, if required',
  `phone_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Which type of phone does this number belongs.',
  `im_provider_id` int(10) unsigned DEFAULT NULL COMMENT 'Which type of IM Provider does this name belong.',
  `website_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Which type of website does this site belong',
  `relationship_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Relationship type, if required',
  `relationship_direction` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grouping` int(10) unsigned DEFAULT '1' COMMENT 'Used to group mapping_field records into related sets (e.g. for criteria sets in search builder\n      mappings).\n    ',
  `operator` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'SQL WHERE operator for search-builder mapping fields (search criteria).',
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'SQL WHERE value for search-builder mapping fields.',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_mapping_field_mapping_id` (`mapping_id`),
  KEY `FK_civicrm_mapping_field_location_type_id` (`location_type_id`),
  KEY `FK_civicrm_mapping_field_relationship_type_id` (`relationship_type_id`),
  CONSTRAINT `FK_civicrm_mapping_field_location_type_id` FOREIGN KEY (`location_type_id`) REFERENCES `civicrm_location_type` (`id`),
  CONSTRAINT `FK_civicrm_mapping_field_mapping_id` FOREIGN KEY (`mapping_id`) REFERENCES `civicrm_mapping` (`id`),
  CONSTRAINT `FK_civicrm_mapping_field_relationship_type_id` FOREIGN KEY (`relationship_type_id`) REFERENCES `civicrm_relationship_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mapping_field` WRITE;
/*!40000 ALTER TABLE `civicrm_mapping_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_mapping_field` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

