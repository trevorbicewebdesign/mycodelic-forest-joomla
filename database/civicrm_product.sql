
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
DROP TABLE IF EXISTS `civicrm_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Required product/premium name',
  `description` text COLLATE utf8_unicode_ci COMMENT 'Optional description of the product/premium.',
  `sku` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional product sku or code.',
  `options` text COLLATE utf8_unicode_ci COMMENT 'Store comma-delimited list of color, size, etc. options for the product.',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Full or relative URL to uploaded image - fullsize.',
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Full or relative URL to image thumbnail.',
  `price` decimal(20,2) DEFAULT NULL COMMENT 'Sell price or market value for premiums. For tax-deductible contributions, this will be stored as non_deductible_amount in the contribution record.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type.',
  `min_contribution` decimal(20,2) DEFAULT NULL COMMENT 'Minimum contribution required to be eligible to select this premium.',
  `cost` decimal(20,2) DEFAULT NULL COMMENT 'Actual cost of this product. Useful to determine net return from sale or using this as an incentive.',
  `is_active` tinyint(4) NOT NULL COMMENT 'Disabling premium removes it from the premiums_premium join table below.',
  `period_type` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'rolling' COMMENT 'Rolling means we set start/end based on current day, fixed means we set start/end for current year or month\n      (e.g. 1 year + fixed -> we would set start/end for 1/1/06 thru 12/31/06 for any premium chosen in 2006) ',
  `fixed_period_start_day` int(11) DEFAULT '101' COMMENT 'Month and day (MMDD) that fixed period type subscription or membership starts.',
  `duration_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'year',
  `duration_interval` int(11) DEFAULT NULL COMMENT 'Number of units for total duration of subscription, service, membership (e.g. 12 Months).',
  `frequency_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'month' COMMENT 'Frequency unit and interval allow option to store actual delivery frequency for a subscription or service.',
  `frequency_interval` int(11) DEFAULT NULL COMMENT 'Number of units for delivery frequency of subscription, service, membership (e.g. every 3 Months).',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_product_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_product_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_product` WRITE;
/*!40000 ALTER TABLE `civicrm_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

