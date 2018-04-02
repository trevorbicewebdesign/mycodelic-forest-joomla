
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
DROP TABLE IF EXISTS `civicrm_contribution_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_contribution_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `contribution_id` int(10) unsigned NOT NULL,
  `product_option` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Option value selected if applicable - e.g. color, size etc.',
  `quantity` int(11) DEFAULT NULL,
  `fulfilled_date` date DEFAULT NULL COMMENT 'Optional. Can be used to record the date this product was fulfilled or shipped.',
  `start_date` date DEFAULT NULL COMMENT 'Actual start date for a time-delimited premium (subscription, service or membership)',
  `end_date` date DEFAULT NULL COMMENT 'Actual end date for a time-delimited premium (subscription, service or membership)',
  `comment` text COLLATE utf8_unicode_ci,
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type(for membership price sets only).',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_contribution_product_contribution_id` (`contribution_id`),
  KEY `FK_civicrm_contribution_product_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_contribution_product_contribution_id` FOREIGN KEY (`contribution_id`) REFERENCES `civicrm_contribution` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_contribution_product_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_contribution_product` WRITE;
/*!40000 ALTER TABLE `civicrm_contribution_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_contribution_product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

