
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
DROP TABLE IF EXISTS `civicrm_line_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_line_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Line Item',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'table which has the transaction',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'entry in table',
  `contribution_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contribution',
  `price_field_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_price_field',
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'descriptive label for item - from price_field_value.label',
  `qty` decimal(20,2) NOT NULL COMMENT 'How many items ordered',
  `unit_price` decimal(20,2) NOT NULL COMMENT 'price of each item',
  `line_total` decimal(20,2) NOT NULL COMMENT 'qty * unit_price',
  `participant_count` int(10) unsigned DEFAULT NULL COMMENT 'Participant count for field',
  `price_field_value_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_price_field_value',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type.',
  `non_deductible_amount` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT 'Portion of total amount which is NOT tax deductible.',
  `tax_amount` decimal(20,2) DEFAULT NULL COMMENT 'tax of each item',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_line_item_value` (`entity_table`,`entity_id`,`contribution_id`,`price_field_value_id`,`price_field_id`),
  KEY `index_entity` (`entity_table`,`entity_id`),
  KEY `FK_civicrm_line_item_contribution_id` (`contribution_id`),
  KEY `FK_civicrm_line_item_price_field_id` (`price_field_id`),
  KEY `FK_civicrm_line_item_price_field_value_id` (`price_field_value_id`),
  KEY `FK_civicrm_line_item_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_line_item_contribution_id` FOREIGN KEY (`contribution_id`) REFERENCES `civicrm_contribution` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_line_item_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_line_item_price_field_id` FOREIGN KEY (`price_field_id`) REFERENCES `civicrm_price_field` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_line_item_price_field_value_id` FOREIGN KEY (`price_field_value_id`) REFERENCES `civicrm_price_field_value` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_line_item` WRITE;
/*!40000 ALTER TABLE `civicrm_line_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_line_item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

