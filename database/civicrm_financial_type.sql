
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
DROP TABLE IF EXISTS `civicrm_financial_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_financial_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID of original financial_type so you can search this table by the financial_type.id and then select the relevant version based on the timestamp',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Financial Type Name.',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Financial Type Description.',
  `is_deductible` tinyint(4) DEFAULT '1' COMMENT 'Is this financial type tax-deductible? If true, contributions of this type may be fully OR partially deductible - non-deductible amount is stored in the Contribution record.',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this a predefined system object?',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this property active?',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_financial_type` WRITE;
/*!40000 ALTER TABLE `civicrm_financial_type` DISABLE KEYS */;
INSERT INTO `civicrm_financial_type` (`id`, `name`, `description`, `is_deductible`, `is_reserved`, `is_active`) VALUES (1,'Donation',NULL,1,0,1);
INSERT INTO `civicrm_financial_type` (`id`, `name`, `description`, `is_deductible`, `is_reserved`, `is_active`) VALUES (2,'Member Dues',NULL,1,0,1);
INSERT INTO `civicrm_financial_type` (`id`, `name`, `description`, `is_deductible`, `is_reserved`, `is_active`) VALUES (3,'Campaign Contribution',NULL,0,0,1);
INSERT INTO `civicrm_financial_type` (`id`, `name`, `description`, `is_deductible`, `is_reserved`, `is_active`) VALUES (4,'Event Fee',NULL,0,0,1);
/*!40000 ALTER TABLE `civicrm_financial_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

