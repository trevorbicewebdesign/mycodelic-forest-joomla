
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
DROP TABLE IF EXISTS `civicrm_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_batch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Address ID',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Variable name/programmatic handle for this batch.',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Friendly Name.',
  `description` text COLLATE utf8_unicode_ci COMMENT 'Description of this batch set.',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID',
  `created_date` datetime DEFAULT NULL COMMENT 'When was this item created',
  `modified_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID',
  `modified_date` datetime DEFAULT NULL COMMENT 'When was this item created',
  `saved_search_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Saved Search ID',
  `status_id` int(10) unsigned NOT NULL COMMENT 'fk to Batch Status options in civicrm_option_values',
  `type_id` int(10) unsigned DEFAULT NULL COMMENT 'fk to Batch Type options in civicrm_option_values',
  `mode_id` int(10) unsigned DEFAULT NULL COMMENT 'fk to Batch mode options in civicrm_option_values',
  `total` decimal(20,2) DEFAULT NULL COMMENT 'Total amount for this batch.',
  `item_count` int(10) unsigned DEFAULT NULL COMMENT 'Number of items in a batch.',
  `payment_instrument_id` int(10) unsigned DEFAULT NULL COMMENT 'fk to Payment Instrument options in civicrm_option_values',
  `exported_date` datetime DEFAULT NULL,
  `data` longtext COLLATE utf8_unicode_ci COMMENT 'cache entered data',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`),
  KEY `FK_civicrm_batch_created_id` (`created_id`),
  KEY `FK_civicrm_batch_modified_id` (`modified_id`),
  KEY `FK_civicrm_batch_saved_search_id` (`saved_search_id`),
  CONSTRAINT `FK_civicrm_batch_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_batch_modified_id` FOREIGN KEY (`modified_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_batch_saved_search_id` FOREIGN KEY (`saved_search_id`) REFERENCES `civicrm_saved_search` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_batch` WRITE;
/*!40000 ALTER TABLE `civicrm_batch` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_batch` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

