
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
DROP TABLE IF EXISTS `civicrm_participant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_participant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Participant Id',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact ID',
  `event_id` int(10) unsigned NOT NULL COMMENT 'FK to Event ID',
  `status_id` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'Participant status ID. FK to civicrm_participant_status_type. Default of 1 should map to status = Registered.',
  `role_id` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Participant role ID. Implicit FK to civicrm_option_value where option_group = participant_role.',
  `register_date` datetime DEFAULT NULL COMMENT 'When did contact register for event?',
  `source` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Source of this event registration.',
  `fee_level` text COLLATE utf8_unicode_ci COMMENT 'Populate with the label (text) associated with a fee level for paid events with multiple levels. Note that\n      we store the label value and not the key\n    ',
  `is_test` tinyint(4) DEFAULT '0',
  `is_pay_later` tinyint(4) DEFAULT '0',
  `fee_amount` decimal(20,2) DEFAULT NULL COMMENT 'actual processor fee if known - may be 0.',
  `registered_by_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Participant ID',
  `discount_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Discount ID',
  `fee_currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value derived from config setting.',
  `campaign_id` int(10) unsigned DEFAULT NULL COMMENT 'The campaign for which this participant has been registered.',
  `discount_amount` int(10) unsigned DEFAULT NULL COMMENT 'Discount Amount',
  `cart_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_event_carts',
  `must_wait` int(11) DEFAULT NULL COMMENT 'On Waiting List',
  `transferred_to_contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID',
  PRIMARY KEY (`id`),
  KEY `index_status_id` (`status_id`),
  KEY `index_role_id` (`role_id`),
  KEY `FK_civicrm_participant_contact_id` (`contact_id`),
  KEY `FK_civicrm_participant_event_id` (`event_id`),
  KEY `FK_civicrm_participant_registered_by_id` (`registered_by_id`),
  KEY `FK_civicrm_participant_discount_id` (`discount_id`),
  KEY `FK_civicrm_participant_campaign_id` (`campaign_id`),
  KEY `FK_civicrm_participant_cart_id` (`cart_id`),
  KEY `FK_civicrm_participant_transferred_to_contact_id` (`transferred_to_contact_id`),
  CONSTRAINT `FK_civicrm_participant_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `civicrm_campaign` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_participant_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `civicrm_event_carts` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_participant_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_participant_discount_id` FOREIGN KEY (`discount_id`) REFERENCES `civicrm_discount` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_participant_event_id` FOREIGN KEY (`event_id`) REFERENCES `civicrm_event` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_participant_registered_by_id` FOREIGN KEY (`registered_by_id`) REFERENCES `civicrm_participant` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_participant_status_id` FOREIGN KEY (`status_id`) REFERENCES `civicrm_participant_status_type` (`id`),
  CONSTRAINT `FK_civicrm_participant_transferred_to_contact_id` FOREIGN KEY (`transferred_to_contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_participant` WRITE;
/*!40000 ALTER TABLE `civicrm_participant` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_participant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

