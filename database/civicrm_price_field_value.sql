
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
DROP TABLE IF EXISTS `civicrm_price_field_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_price_field_value` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Price Field Value',
  `price_field_id` int(10) unsigned NOT NULL COMMENT 'FK to civicrm_price_field',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Price field option name',
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Price field option label',
  `description` text COLLATE utf8_unicode_ci COMMENT '>Price field option description.',
  `help_pre` text COLLATE utf8_unicode_ci COMMENT 'Price field option pre help text.',
  `help_post` text COLLATE utf8_unicode_ci COMMENT 'Price field option post field help.',
  `amount` decimal(18,9) NOT NULL COMMENT 'Price field option amount',
  `count` int(10) unsigned DEFAULT NULL COMMENT 'Number of participants per field option',
  `max_value` int(10) unsigned DEFAULT NULL COMMENT 'Max number of participants per field options',
  `weight` int(11) DEFAULT '1' COMMENT 'Order in which the field options should appear',
  `membership_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Membership Type',
  `membership_num_terms` int(10) unsigned DEFAULT NULL COMMENT 'Number of terms for this membership',
  `is_default` tinyint(4) DEFAULT '0' COMMENT 'Is this default price field option',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this price field value active',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type.',
  `non_deductible_amount` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT 'Portion of total amount which is NOT tax deductible.',
  `visibility_id` int(10) unsigned DEFAULT '1' COMMENT 'Implicit FK to civicrm_option_group with name = ''visibility''',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_price_field_value_price_field_id` (`price_field_id`),
  KEY `FK_civicrm_price_field_value_membership_type_id` (`membership_type_id`),
  KEY `FK_civicrm_price_field_value_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_price_field_value_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_price_field_value_membership_type_id` FOREIGN KEY (`membership_type_id`) REFERENCES `civicrm_membership_type` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_price_field_value_price_field_id` FOREIGN KEY (`price_field_id`) REFERENCES `civicrm_price_field` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_price_field_value` WRITE;
/*!40000 ALTER TABLE `civicrm_price_field_value` DISABLE KEYS */;
INSERT INTO `civicrm_price_field_value` (`id`, `price_field_id`, `name`, `label`, `description`, `help_pre`, `help_post`, `amount`, `count`, `max_value`, `weight`, `membership_type_id`, `membership_num_terms`, `is_default`, `is_active`, `financial_type_id`, `non_deductible_amount`, `visibility_id`) VALUES (1,1,'contribution_amount','Contribution Amount',NULL,NULL,NULL,1.000000000,NULL,NULL,1,NULL,NULL,0,1,1,0.00,1);
/*!40000 ALTER TABLE `civicrm_price_field_value` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

