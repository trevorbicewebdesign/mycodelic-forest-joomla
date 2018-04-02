
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
DROP TABLE IF EXISTS `civicrm_pledge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_pledge` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Pledge ID',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'Foreign key to civicrm_contact.id .',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type',
  `contribution_page_id` int(10) unsigned DEFAULT NULL COMMENT 'The Contribution Page which triggered this contribution',
  `amount` decimal(20,2) NOT NULL COMMENT 'Total pledged amount.',
  `original_installment_amount` decimal(20,2) NOT NULL COMMENT 'Original amount for each of the installments.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `frequency_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'month' COMMENT 'Time units for recurrence of pledge payments.',
  `frequency_interval` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'Number of time units for recurrence of pledge payments.',
  `frequency_day` int(10) unsigned NOT NULL DEFAULT '3' COMMENT 'Day in the period when the pledge payment is due e.g. 1st of month, 15th etc. Use this to set the scheduled dates for pledge payments.',
  `installments` int(10) unsigned DEFAULT '1' COMMENT 'Total number of payments to be made.',
  `start_date` datetime NOT NULL COMMENT 'The date the first scheduled pledge occurs.',
  `create_date` datetime NOT NULL COMMENT 'When this pledge record was created.',
  `acknowledge_date` datetime DEFAULT NULL COMMENT 'When a pledge acknowledgement message was sent to the contributor.',
  `modified_date` datetime DEFAULT NULL COMMENT 'Last updated date for this pledge record.',
  `cancel_date` datetime DEFAULT NULL COMMENT 'Date this pledge was cancelled by contributor.',
  `end_date` datetime DEFAULT NULL COMMENT 'Date this pledge finished successfully (total pledge payments equal to or greater than pledged amount).',
  `max_reminders` int(10) unsigned DEFAULT '1' COMMENT 'The maximum number of payment reminders to send for any given payment.',
  `initial_reminder_day` int(10) unsigned DEFAULT '5' COMMENT 'Send initial reminder this many days prior to the payment due date.',
  `additional_reminder_day` int(10) unsigned DEFAULT '5' COMMENT 'Send additional reminder this many days after last one sent, up to maximum number of reminders.',
  `status_id` int(10) unsigned DEFAULT NULL COMMENT 'Implicit foreign key to civicrm_option_values in the pledge_status option group.',
  `is_test` tinyint(4) DEFAULT '0',
  `campaign_id` int(10) unsigned DEFAULT NULL COMMENT 'The campaign for which this pledge has been initiated.',
  PRIMARY KEY (`id`),
  KEY `index_status` (`status_id`),
  KEY `FK_civicrm_pledge_contact_id` (`contact_id`),
  KEY `FK_civicrm_pledge_financial_type_id` (`financial_type_id`),
  KEY `FK_civicrm_pledge_contribution_page_id` (`contribution_page_id`),
  KEY `FK_civicrm_pledge_campaign_id` (`campaign_id`),
  CONSTRAINT `FK_civicrm_pledge_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `civicrm_campaign` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_pledge_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_pledge_contribution_page_id` FOREIGN KEY (`contribution_page_id`) REFERENCES `civicrm_contribution_page` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_pledge_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_pledge` WRITE;
/*!40000 ALTER TABLE `civicrm_pledge` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_pledge` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

