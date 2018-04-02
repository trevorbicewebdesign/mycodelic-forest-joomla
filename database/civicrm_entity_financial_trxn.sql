
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
DROP TABLE IF EXISTS `civicrm_entity_financial_trxn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_entity_financial_trxn` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'May contain civicrm_financial_item, civicrm_contribution, civicrm_financial_trxn, civicrm_grant, etc',
  `entity_id` int(10) unsigned NOT NULL,
  `financial_trxn_id` int(10) unsigned DEFAULT NULL,
  `amount` decimal(20,2) NOT NULL COMMENT 'allocated amount of transaction to this entity',
  PRIMARY KEY (`id`),
  KEY `UI_entity_financial_trxn_entity_table` (`entity_table`),
  KEY `UI_entity_financial_trxn_entity_id` (`entity_id`),
  KEY `FK_civicrm_entity_financial_trxn_financial_trxn_id` (`financial_trxn_id`),
  CONSTRAINT `FK_civicrm_entity_financial_trxn_financial_trxn_id` FOREIGN KEY (`financial_trxn_id`) REFERENCES `civicrm_financial_trxn` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_entity_financial_trxn` WRITE;
/*!40000 ALTER TABLE `civicrm_entity_financial_trxn` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_entity_financial_trxn` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

