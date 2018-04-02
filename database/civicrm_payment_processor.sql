
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
DROP TABLE IF EXISTS `civicrm_payment_processor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_payment_processor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Payment Processor ID',
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Which Domain is this match entry for',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Payment Processor Name.',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Payment Processor Description.',
  `payment_processor_type_id` int(10) unsigned DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this processor active?',
  `is_default` tinyint(4) DEFAULT NULL COMMENT 'Is this processor the default?',
  `is_test` tinyint(4) DEFAULT NULL COMMENT 'Is this processor for a test site?',
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature` text COLLATE utf8_unicode_ci,
  `url_site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_api` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_recur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_button` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_mode` int(10) unsigned NOT NULL COMMENT 'Billing Mode (deprecated)',
  `is_recur` tinyint(4) DEFAULT NULL COMMENT 'Can process recurring contributions',
  `payment_type` int(10) unsigned DEFAULT '1' COMMENT 'Payment Type: Credit or Debit (deprecated)',
  `payment_instrument_id` int(10) unsigned DEFAULT '1' COMMENT 'Payment Instrument ID',
  `accepted_credit_cards` text COLLATE utf8_unicode_ci COMMENT 'array of accepted credit card types',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name_test_domain_id` (`name`,`is_test`,`domain_id`),
  KEY `FK_civicrm_payment_processor_domain_id` (`domain_id`),
  KEY `FK_civicrm_payment_processor_payment_processor_type_id` (`payment_processor_type_id`),
  CONSTRAINT `FK_civicrm_payment_processor_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`),
  CONSTRAINT `FK_civicrm_payment_processor_payment_processor_type_id` FOREIGN KEY (`payment_processor_type_id`) REFERENCES `civicrm_payment_processor_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_payment_processor` WRITE;
/*!40000 ALTER TABLE `civicrm_payment_processor` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_payment_processor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

