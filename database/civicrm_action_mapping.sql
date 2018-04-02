
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
DROP TABLE IF EXISTS `civicrm_action_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_action_mapping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entity` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity for which the reminder is created',
  `entity_value` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity value',
  `entity_value_label` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity value label',
  `entity_status` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity status',
  `entity_status_label` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity status label',
  `entity_date_start` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity date',
  `entity_date_end` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity date',
  `entity_recipient` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity recipient',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_action_mapping` WRITE;
/*!40000 ALTER TABLE `civicrm_action_mapping` DISABLE KEYS */;
INSERT INTO `civicrm_action_mapping` (`id`, `entity`, `entity_value`, `entity_value_label`, `entity_status`, `entity_status_label`, `entity_date_start`, `entity_date_end`, `entity_recipient`) VALUES (1,'civicrm_activity','activity_type','Activity Type','activity_status','Activity Status','activity_date_time',NULL,'activity_contacts');
INSERT INTO `civicrm_action_mapping` (`id`, `entity`, `entity_value`, `entity_value_label`, `entity_status`, `entity_status_label`, `entity_date_start`, `entity_date_end`, `entity_recipient`) VALUES (2,'civicrm_participant','event_type','Event Type','civicrm_participant_status_type','Participant Status','event_start_date','event_end_date','event_contacts');
INSERT INTO `civicrm_action_mapping` (`id`, `entity`, `entity_value`, `entity_value_label`, `entity_status`, `entity_status_label`, `entity_date_start`, `entity_date_end`, `entity_recipient`) VALUES (3,'civicrm_participant','civicrm_event','Event Name','civicrm_participant_status_type','Participant Status','event_start_date','event_end_date','event_contacts');
INSERT INTO `civicrm_action_mapping` (`id`, `entity`, `entity_value`, `entity_value_label`, `entity_status`, `entity_status_label`, `entity_date_start`, `entity_date_end`, `entity_recipient`) VALUES (4,'civicrm_membership','civicrm_membership_type','Membership Type','auto_renew_options','Auto Renew Options','membership_join_date','membership_end_date',NULL);
INSERT INTO `civicrm_action_mapping` (`id`, `entity`, `entity_value`, `entity_value_label`, `entity_status`, `entity_status_label`, `entity_date_start`, `entity_date_end`, `entity_recipient`) VALUES (5,'civicrm_participant','event_template','Event Template','civicrm_participant_status_type','Participant Status','event_start_date','event_end_date','event_contacts');
INSERT INTO `civicrm_action_mapping` (`id`, `entity`, `entity_value`, `entity_value_label`, `entity_status`, `entity_status_label`, `entity_date_start`, `entity_date_end`, `entity_recipient`) VALUES (6,'civicrm_contact','civicrm_contact','Date Field','contact_date_reminder_options','Annual Options','date_field',NULL,NULL);
/*!40000 ALTER TABLE `civicrm_action_mapping` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

