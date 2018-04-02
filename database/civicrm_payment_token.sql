
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
DROP TABLE IF EXISTS `civicrm_payment_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_payment_token` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Payment Token ID',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact ID for the owner of the token',
  `payment_processor_id` int(10) unsigned NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Externally provided token string',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date created',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'Contact ID of token creator',
  `expiry_date` datetime DEFAULT NULL COMMENT 'Date this token expires',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Email at the time of token creation. Useful for fraud forensics',
  `billing_first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Billing first name at the time of token creation. Useful for fraud forensics',
  `billing_middle_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Billing middle name at the time of token creation. Useful for fraud forensics',
  `billing_last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Billing last name at the time of token creation. Useful for fraud forensics',
  `masked_account_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Holds the part of the card number or account details that may be retained or displayed',
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'IP used when creating the token. Useful for fraud forensics',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_payment_token_contact_id` (`contact_id`),
  KEY `FK_civicrm_payment_token_payment_processor_id` (`payment_processor_id`),
  KEY `FK_civicrm_payment_token_created_id` (`created_id`),
  CONSTRAINT `FK_civicrm_payment_token_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_payment_token_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_payment_token_payment_processor_id` FOREIGN KEY (`payment_processor_id`) REFERENCES `civicrm_payment_processor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_payment_token` WRITE;
/*!40000 ALTER TABLE `civicrm_payment_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_payment_token` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

