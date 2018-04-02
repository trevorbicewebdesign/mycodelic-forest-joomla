
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
DROP TABLE IF EXISTS `civicrm_contribution_recur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_contribution_recur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Contribution Recur ID',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'Foreign key to civicrm_contact.id .',
  `amount` decimal(20,2) NOT NULL COMMENT 'Amount to be contributed or charged each recurrence.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `frequency_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'month' COMMENT 'Time units for recurrence of payment.',
  `frequency_interval` int(10) unsigned NOT NULL COMMENT 'Number of time units for recurrence of payment.',
  `installments` int(10) unsigned DEFAULT NULL COMMENT 'Total number of payments to be made. Set this to 0 if this is an open-ended commitment i.e. no set end date.',
  `start_date` datetime NOT NULL COMMENT 'The date the first scheduled recurring contribution occurs.',
  `create_date` datetime NOT NULL COMMENT 'When this recurring contribution record was created.',
  `modified_date` datetime DEFAULT NULL COMMENT 'Last updated date for this record. mostly the last time a payment was received',
  `cancel_date` datetime DEFAULT NULL COMMENT 'Date this recurring contribution was cancelled by contributor- if we can get access to it',
  `end_date` datetime DEFAULT NULL COMMENT 'Date this recurring contribution finished successfully',
  `processor_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Possibly needed to store a unique identifier for this recurring payment order - if this is available from the processor??',
  `payment_token_id` int(10) unsigned DEFAULT NULL COMMENT 'Optionally used to store a link to a payment token used for this recurring contribution.',
  `trxn_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'unique transaction id. may be processor id, bank id + trans id, or account number + check number... depending on payment_method',
  `invoice_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'unique invoice id, system generated or passed in',
  `contribution_status_id` int(10) unsigned DEFAULT '1',
  `is_test` tinyint(4) DEFAULT '0',
  `cycle_day` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'Day in the period when the payment should be charged e.g. 1st of month, 15th etc.',
  `next_sched_contribution_date` datetime DEFAULT NULL COMMENT 'Next scheduled date',
  `failure_count` int(10) unsigned DEFAULT '0' COMMENT 'Number of failed charge attempts since last success. Business rule could be set to deactivate on more than x failures.',
  `failure_retry_date` datetime DEFAULT NULL COMMENT 'Date to retry failed attempt',
  `auto_renew` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Some systems allow contributor to set a number of installments - but then auto-renew the subscription or commitment if they do not cancel.',
  `payment_processor_id` int(10) unsigned DEFAULT NULL COMMENT 'Foreign key to civicrm_payment_processor.id',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type',
  `payment_instrument_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Payment Instrument',
  `campaign_id` int(10) unsigned DEFAULT NULL COMMENT 'The campaign for which this contribution has been triggered.',
  `is_email_receipt` tinyint(4) DEFAULT '1' COMMENT 'if true, receipt is automatically emailed to contact on each successful payment',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_contrib_trxn_id` (`trxn_id`),
  UNIQUE KEY `UI_contrib_invoice_id` (`invoice_id`),
  KEY `index_contribution_status` (`contribution_status_id`),
  KEY `UI_contribution_recur_payment_instrument_id` (`payment_instrument_id`),
  KEY `FK_civicrm_contribution_recur_contact_id` (`contact_id`),
  KEY `FK_civicrm_contribution_recur_payment_token_id` (`payment_token_id`),
  KEY `FK_civicrm_contribution_recur_payment_processor_id` (`payment_processor_id`),
  KEY `FK_civicrm_contribution_recur_financial_type_id` (`financial_type_id`),
  KEY `FK_civicrm_contribution_recur_campaign_id` (`campaign_id`),
  CONSTRAINT `FK_civicrm_contribution_recur_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `civicrm_campaign` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_contribution_recur_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_contribution_recur_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_contribution_recur_payment_processor_id` FOREIGN KEY (`payment_processor_id`) REFERENCES `civicrm_payment_processor` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_contribution_recur_payment_token_id` FOREIGN KEY (`payment_token_id`) REFERENCES `civicrm_payment_token` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_contribution_recur` WRITE;
/*!40000 ALTER TABLE `civicrm_contribution_recur` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_contribution_recur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

