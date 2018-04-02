
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
DROP TABLE IF EXISTS `civicrm_action_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_action_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'FK to id of the entity that the action was performed on. Pseudo - FK.',
  `entity_table` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'name of the entity table for the above id, e.g. civicrm_activity, civicrm_participant',
  `action_schedule_id` int(10) unsigned NOT NULL COMMENT 'FK to the action schedule that this action originated from.',
  `action_date_time` datetime DEFAULT NULL COMMENT 'date time that the action was performed on.',
  `is_error` tinyint(4) DEFAULT '0' COMMENT 'Was there any error sending the reminder?',
  `message` text COLLATE utf8_unicode_ci COMMENT 'Description / text in case there was an error encountered.',
  `repetition_number` int(10) unsigned DEFAULT NULL COMMENT 'Keeps track of the sequence number of this repetition.',
  `reference_date` date DEFAULT NULL COMMENT 'Stores the date from the entity which triggered this reminder action (e.g. membership.end_date for most membership renewal reminders)',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_action_log_contact_id` (`contact_id`),
  KEY `FK_civicrm_action_log_action_schedule_id` (`action_schedule_id`),
  CONSTRAINT `FK_civicrm_action_log_action_schedule_id` FOREIGN KEY (`action_schedule_id`) REFERENCES `civicrm_action_schedule` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_action_log_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_action_log` WRITE;
/*!40000 ALTER TABLE `civicrm_action_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_action_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

