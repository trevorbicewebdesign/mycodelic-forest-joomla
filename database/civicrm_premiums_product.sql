
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
DROP TABLE IF EXISTS `civicrm_premiums_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_premiums_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Contribution ID',
  `premiums_id` int(10) unsigned NOT NULL COMMENT 'Foreign key to premiums settings record.',
  `product_id` int(10) unsigned NOT NULL COMMENT 'Foreign key to each product object.',
  `weight` int(10) unsigned NOT NULL,
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type.',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_premiums_product_premiums_id` (`premiums_id`),
  KEY `FK_civicrm_premiums_product_product_id` (`product_id`),
  KEY `FK_civicrm_premiums_product_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_premiums_product_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_premiums_product_premiums_id` FOREIGN KEY (`premiums_id`) REFERENCES `civicrm_premiums` (`id`),
  CONSTRAINT `FK_civicrm_premiums_product_product_id` FOREIGN KEY (`product_id`) REFERENCES `civicrm_product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_premiums_product` WRITE;
/*!40000 ALTER TABLE `civicrm_premiums_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_premiums_product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

