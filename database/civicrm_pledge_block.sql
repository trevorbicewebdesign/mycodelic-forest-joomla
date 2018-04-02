
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
DROP TABLE IF EXISTS `civicrm_pledge_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_pledge_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Pledge ID',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'physical tablename for entity being joined to pledge, e.g. civicrm_contact',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'FK to entity table specified in entity_table column.',
  `pledge_frequency_unit` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Delimited list of supported frequency units',
  `is_pledge_interval` tinyint(4) DEFAULT '0' COMMENT 'Is frequency interval exposed on the contribution form.',
  `max_reminders` int(10) unsigned DEFAULT '1' COMMENT 'The maximum number of payment reminders to send for any given payment.',
  `initial_reminder_day` int(10) unsigned DEFAULT '5' COMMENT 'Send initial reminder this many days prior to the payment due date.',
  `additional_reminder_day` int(10) unsigned DEFAULT '5' COMMENT 'Send additional reminder this many days after last one sent, up to maximum number of reminders.',
  `pledge_start_date` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The date the first scheduled pledge occurs.',
  `is_pledge_start_date_visible` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'If true - recurring start date is shown.',
  `is_pledge_start_date_editable` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'If true - recurring start date is editable.',
  PRIMARY KEY (`id`),
  KEY `index_entity` (`entity_table`,`entity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_pledge_block` WRITE;
/*!40000 ALTER TABLE `civicrm_pledge_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_pledge_block` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

