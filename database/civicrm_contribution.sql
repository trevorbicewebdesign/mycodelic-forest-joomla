
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
DROP TABLE IF EXISTS `civicrm_contribution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_contribution` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Contribution ID',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact ID',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type for (total_amount - non_deductible_amount).',
  `contribution_page_id` int(10) unsigned DEFAULT NULL COMMENT 'The Contribution Page which triggered this contribution',
  `payment_instrument_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Payment Instrument',
  `receive_date` datetime DEFAULT NULL COMMENT 'Date contribution was received - not necessarily the creation date of the record',
  `non_deductible_amount` decimal(20,2) DEFAULT '0.00' COMMENT 'Portion of total amount which is NOT tax deductible. Equal to total_amount for non-deductible financial types.',
  `total_amount` decimal(20,2) NOT NULL COMMENT 'Total amount of this contribution. Use market value for non-monetary gifts.',
  `fee_amount` decimal(20,2) DEFAULT NULL COMMENT 'actual processor fee if known - may be 0.',
  `net_amount` decimal(20,2) DEFAULT NULL COMMENT 'actual funds transfer amount. total less fees. if processor does not report actual fee during transaction, this is set to total_amount.',
  `trxn_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'unique transaction id. may be processor id, bank id + trans id, or account number + check number... depending on payment_method',
  `invoice_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'unique invoice id, system generated or passed in',
  `invoice_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Human readable invoice number',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `cancel_date` datetime DEFAULT NULL COMMENT 'when was gift cancelled',
  `cancel_reason` text COLLATE utf8_unicode_ci,
  `receipt_date` datetime DEFAULT NULL COMMENT 'when (if) receipt was sent. populated automatically for online donations w/ automatic receipting',
  `thankyou_date` datetime DEFAULT NULL COMMENT 'when (if) was donor thanked',
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Origin of this Contribution.',
  `amount_level` text COLLATE utf8_unicode_ci,
  `contribution_recur_id` int(10) unsigned DEFAULT NULL COMMENT 'Conditional foreign key to civicrm_contribution_recur id. Each contribution made in connection with a recurring contribution carries a foreign key to the recurring contribution record. This assumes we can track these processor initiated events.',
  `is_test` tinyint(4) DEFAULT '0',
  `is_pay_later` tinyint(4) DEFAULT '0',
  `contribution_status_id` int(10) unsigned DEFAULT '1',
  `address_id` int(10) unsigned DEFAULT NULL COMMENT 'Conditional foreign key to civicrm_address.id. We insert an address record for each contribution when we have associated billing name and address data.',
  `check_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign_id` int(10) unsigned DEFAULT NULL COMMENT 'The campaign for which this contribution has been triggered.',
  `creditnote_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'unique credit note id, system generated or passed in',
  `tax_amount` decimal(20,2) DEFAULT NULL COMMENT 'Total tax amount of this contribution.',
  `revenue_recognition_date` datetime DEFAULT NULL COMMENT 'Stores the date when revenue should be recognized.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_contrib_trxn_id` (`trxn_id`),
  UNIQUE KEY `UI_contrib_invoice_id` (`invoice_id`),
  KEY `UI_contrib_payment_instrument_id` (`payment_instrument_id`),
  KEY `index_total_amount_receive_date` (`total_amount`,`receive_date`),
  KEY `index_source` (`source`),
  KEY `index_contribution_status` (`contribution_status_id`),
  KEY `received_date` (`receive_date`),
  KEY `check_number` (`check_number`),
  KEY `index_creditnote_id` (`creditnote_id`),
  KEY `FK_civicrm_contribution_contact_id` (`contact_id`),
  KEY `FK_civicrm_contribution_financial_type_id` (`financial_type_id`),
  KEY `FK_civicrm_contribution_contribution_page_id` (`contribution_page_id`),
  KEY `FK_civicrm_contribution_contribution_recur_id` (`contribution_recur_id`),
  KEY `FK_civicrm_contribution_address_id` (`address_id`),
  KEY `FK_civicrm_contribution_campaign_id` (`campaign_id`),
  CONSTRAINT `FK_civicrm_contribution_address_id` FOREIGN KEY (`address_id`) REFERENCES `civicrm_address` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_contribution_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `civicrm_campaign` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_contribution_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_contribution_contribution_page_id` FOREIGN KEY (`contribution_page_id`) REFERENCES `civicrm_contribution_page` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_contribution_contribution_recur_id` FOREIGN KEY (`contribution_recur_id`) REFERENCES `civicrm_contribution_recur` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_contribution_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_contribution` WRITE;
/*!40000 ALTER TABLE `civicrm_contribution` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_contribution` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

