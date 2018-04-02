
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
DROP TABLE IF EXISTS `civicrm_financial_trxn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_financial_trxn` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_financial_account_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to financial_account table.',
  `to_financial_account_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to financial_financial_account table.',
  `trxn_date` datetime DEFAULT NULL COMMENT 'date transaction occurred',
  `total_amount` decimal(20,2) NOT NULL COMMENT 'amount of transaction',
  `fee_amount` decimal(20,2) DEFAULT NULL COMMENT 'actual processor fee if known - may be 0.',
  `net_amount` decimal(20,2) DEFAULT NULL COMMENT 'actual funds transfer amount. total less fees. if processor does not report actual fee during transaction, this is set to total_amount.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `is_payment` tinyint(4) DEFAULT '0' COMMENT 'Is this entry either a payment or a reversal of a payment?',
  `trxn_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Transaction id supplied by external processor. This may not be unique.',
  `trxn_result_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'processor result code',
  `status_id` int(10) unsigned DEFAULT NULL COMMENT 'pseudo FK to civicrm_option_value of contribution_status_id option_group',
  `payment_processor_id` int(10) unsigned DEFAULT NULL COMMENT 'Payment Processor for this financial transaction',
  `payment_instrument_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to payment_instrument option group values',
  `card_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to accept_creditcard option group values',
  `check_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Check number',
  `pan_truncation` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Last 4 digits of credit card',
  PRIMARY KEY (`id`),
  KEY `UI_ftrxn_trxn_id` (`trxn_id`),
  KEY `UI_ftrxn_payment_instrument_id` (`payment_instrument_id`),
  KEY `UI_ftrxn_check_number` (`check_number`),
  KEY `FK_civicrm_financial_trxn_from_financial_account_id` (`from_financial_account_id`),
  KEY `FK_civicrm_financial_trxn_to_financial_account_id` (`to_financial_account_id`),
  KEY `FK_civicrm_financial_trxn_payment_processor_id` (`payment_processor_id`),
  CONSTRAINT `FK_civicrm_financial_trxn_from_financial_account_id` FOREIGN KEY (`from_financial_account_id`) REFERENCES `civicrm_financial_account` (`id`),
  CONSTRAINT `FK_civicrm_financial_trxn_payment_processor_id` FOREIGN KEY (`payment_processor_id`) REFERENCES `civicrm_payment_processor` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_financial_trxn_to_financial_account_id` FOREIGN KEY (`to_financial_account_id`) REFERENCES `civicrm_financial_account` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_financial_trxn` WRITE;
/*!40000 ALTER TABLE `civicrm_financial_trxn` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_financial_trxn` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

