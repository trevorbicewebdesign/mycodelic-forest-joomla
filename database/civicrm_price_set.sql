
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
DROP TABLE IF EXISTS `civicrm_price_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_price_set` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Price Set',
  `domain_id` int(10) unsigned DEFAULT NULL COMMENT 'Which Domain is this price-set for',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Variable name/programmatic handle for this set of price fields.',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Displayed title for the Price Set.',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this price set active',
  `help_pre` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display before fields in form.',
  `help_post` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display after fields in form.',
  `javascript` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional Javascript script function(s) included on the form with this price_set. Can be used for conditional',
  `extends` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'What components are using this price set?',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type(for membership price sets only).',
  `is_quick_config` tinyint(4) DEFAULT '0' COMMENT 'Is set if edited on Contribution or Event Page rather than through Manage Price Sets',
  `is_reserved` tinyint(4) DEFAULT '0' COMMENT 'Is this a predefined system price set  (i.e. it can not be deleted, edited)?',
  `min_amount` int(10) unsigned DEFAULT '0' COMMENT 'Minimum Amount required for this set.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`),
  KEY `FK_civicrm_price_set_domain_id` (`domain_id`),
  KEY `FK_civicrm_price_set_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_price_set_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`),
  CONSTRAINT `FK_civicrm_price_set_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_price_set` WRITE;
/*!40000 ALTER TABLE `civicrm_price_set` DISABLE KEYS */;
INSERT INTO `civicrm_price_set` (`id`, `domain_id`, `name`, `title`, `is_active`, `help_pre`, `help_post`, `javascript`, `extends`, `financial_type_id`, `is_quick_config`, `is_reserved`, `min_amount`) VALUES (1,NULL,'default_contribution_amount','Contribution Amount',1,NULL,NULL,NULL,'2',NULL,1,1,0);
INSERT INTO `civicrm_price_set` (`id`, `domain_id`, `name`, `title`, `is_active`, `help_pre`, `help_post`, `javascript`, `extends`, `financial_type_id`, `is_quick_config`, `is_reserved`, `min_amount`) VALUES (2,NULL,'default_membership_type_amount','Membership Amount',1,NULL,NULL,NULL,'3',2,1,1,0);
/*!40000 ALTER TABLE `civicrm_price_set` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

