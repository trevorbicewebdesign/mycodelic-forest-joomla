
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
DROP TABLE IF EXISTS `civicrm_action_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_action_schedule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of the action(reminder)',
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title of the action(reminder)',
  `recipient` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Recipient',
  `limit_to` tinyint(4) DEFAULT NULL COMMENT 'Is this the recipient criteria limited to OR in addition to?',
  `entity_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity value',
  `entity_status` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity status',
  `start_action_offset` int(10) unsigned DEFAULT NULL COMMENT 'Reminder Interval.',
  `start_action_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Time units for reminder.',
  `start_action_condition` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Reminder Action',
  `start_action_date` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity date',
  `is_repeat` tinyint(4) DEFAULT '0',
  `repetition_frequency_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Time units for repetition of reminder.',
  `repetition_frequency_interval` int(10) unsigned DEFAULT NULL COMMENT 'Time interval for repeating the reminder.',
  `end_frequency_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Time units till repetition of reminder.',
  `end_frequency_interval` int(10) unsigned DEFAULT NULL COMMENT 'Time interval till repeating the reminder.',
  `end_action` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Reminder Action till repeating the reminder.',
  `end_date` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity end date',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this option active?',
  `recipient_manual` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contact IDs to which reminder should be sent.',
  `recipient_listing` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'listing based on recipient field.',
  `body_text` longtext COLLATE utf8_unicode_ci COMMENT 'Body of the mailing in text format.',
  `body_html` longtext COLLATE utf8_unicode_ci COMMENT 'Body of the mailing in html format.',
  `sms_body_text` longtext COLLATE utf8_unicode_ci COMMENT 'Content of the SMS text.',
  `subject` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Subject of mailing',
  `record_activity` tinyint(4) DEFAULT NULL COMMENT 'Record Activity for this reminder?',
  `mapping_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name/ID of the mapping to use on this table',
  `group_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Group',
  `msg_template_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to the message template.',
  `sms_template_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to the message template.',
  `absolute_date` date DEFAULT NULL COMMENT 'Date on which the reminder be sent.',
  `from_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name in "from" field',
  `from_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Email address in "from" field',
  `mode` varchar(128) COLLATE utf8_unicode_ci DEFAULT 'Email' COMMENT 'Send the message as email or sms or both.',
  `sms_provider_id` int(10) unsigned DEFAULT NULL,
  `used_for` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Used for repeating entity',
  `filter_contact_language` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Used for multilingual installation',
  `communication_language` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Used for multilingual installation',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_action_schedule_group_id` (`group_id`),
  KEY `FK_civicrm_action_schedule_msg_template_id` (`msg_template_id`),
  KEY `FK_civicrm_action_schedule_sms_template_id` (`sms_template_id`),
  KEY `FK_civicrm_action_schedule_sms_provider_id` (`sms_provider_id`),
  CONSTRAINT `FK_civicrm_action_schedule_group_id` FOREIGN KEY (`group_id`) REFERENCES `civicrm_group` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_action_schedule_msg_template_id` FOREIGN KEY (`msg_template_id`) REFERENCES `civicrm_msg_template` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_action_schedule_sms_provider_id` FOREIGN KEY (`sms_provider_id`) REFERENCES `civicrm_sms_provider` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_action_schedule_sms_template_id` FOREIGN KEY (`sms_template_id`) REFERENCES `civicrm_msg_template` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_action_schedule` WRITE;
/*!40000 ALTER TABLE `civicrm_action_schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_action_schedule` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

