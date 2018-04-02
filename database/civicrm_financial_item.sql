
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
DROP TABLE IF EXISTS `civicrm_financial_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_financial_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date and time the item was created',
  `transaction_date` datetime NOT NULL COMMENT 'Date and time of the source transaction',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact ID of contact the item is from',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Human readable description of this item, to ease display without lookup of source item.',
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT 'Total amount of this item',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Currency for the amount',
  `financial_account_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_financial_account',
  `status_id` int(10) unsigned DEFAULT NULL COMMENT 'Payment status: test, paid, part_paid, unpaid (if empty assume unpaid)',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The table providing the source of this item such as civicrm_line_item',
  `entity_id` int(10) unsigned DEFAULT NULL COMMENT 'The specific source item that is responsible for the creation of this financial_item',
  PRIMARY KEY (`id`),
  KEY `IX_created_date` (`created_date`),
  KEY `IX_transaction_date` (`transaction_date`),
  KEY `index_entity_id_entity_table` (`entity_id`,`entity_table`),
  KEY `FK_civicrm_financial_item_contact_id` (`contact_id`),
  KEY `FK_civicrm_financial_item_financial_account_id` (`financial_account_id`),
  CONSTRAINT `FK_civicrm_financial_item_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_financial_item_financial_account_id` FOREIGN KEY (`financial_account_id`) REFERENCES `civicrm_financial_account` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_financial_item` WRITE;
/*!40000 ALTER TABLE `civicrm_financial_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_financial_item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

