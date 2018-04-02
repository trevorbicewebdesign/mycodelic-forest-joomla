
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
DROP TABLE IF EXISTS `civicrm_membership_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_membership_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Membership Id',
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name for Membership Status',
  `label` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Label for Membership Status',
  `start_event` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Event when this status starts.',
  `start_event_adjust_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Unit used for adjusting from start_event.',
  `start_event_adjust_interval` int(11) DEFAULT NULL COMMENT 'Status range begins this many units from start_event.',
  `end_event` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Event after which this status ends.',
  `end_event_adjust_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Unit used for adjusting from the ending event.',
  `end_event_adjust_interval` int(11) DEFAULT NULL COMMENT 'Status range ends this many units from end_event.',
  `is_current_member` tinyint(4) DEFAULT NULL COMMENT 'Does this status aggregate to current members (e.g. New, Renewed, Grace might all be TRUE... while Unrenewed, Lapsed, Inactive would be FALSE).',
  `is_admin` tinyint(4) DEFAULT NULL COMMENT 'Is this status for admin/manual assignment only.',
  `weight` int(11) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL COMMENT 'Assign this status to a membership record if no other status match is found.',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this membership_status enabled.',
  `is_reserved` tinyint(4) DEFAULT '0' COMMENT 'Is this membership_status reserved.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_membership_status` WRITE;
/*!40000 ALTER TABLE `civicrm_membership_status` DISABLE KEYS */;
INSERT INTO `civicrm_membership_status` (`id`, `name`, `label`, `start_event`, `start_event_adjust_unit`, `start_event_adjust_interval`, `end_event`, `end_event_adjust_unit`, `end_event_adjust_interval`, `is_current_member`, `is_admin`, `weight`, `is_default`, `is_active`, `is_reserved`) VALUES (1,'New','New','join_date',NULL,NULL,'join_date','month',3,1,0,1,0,1,0);
INSERT INTO `civicrm_membership_status` (`id`, `name`, `label`, `start_event`, `start_event_adjust_unit`, `start_event_adjust_interval`, `end_event`, `end_event_adjust_unit`, `end_event_adjust_interval`, `is_current_member`, `is_admin`, `weight`, `is_default`, `is_active`, `is_reserved`) VALUES (2,'Current','Current','start_date',NULL,NULL,'end_date',NULL,NULL,1,0,2,1,1,0);
INSERT INTO `civicrm_membership_status` (`id`, `name`, `label`, `start_event`, `start_event_adjust_unit`, `start_event_adjust_interval`, `end_event`, `end_event_adjust_unit`, `end_event_adjust_interval`, `is_current_member`, `is_admin`, `weight`, `is_default`, `is_active`, `is_reserved`) VALUES (3,'Grace','Grace','end_date',NULL,NULL,'end_date','month',1,1,0,3,0,1,0);
INSERT INTO `civicrm_membership_status` (`id`, `name`, `label`, `start_event`, `start_event_adjust_unit`, `start_event_adjust_interval`, `end_event`, `end_event_adjust_unit`, `end_event_adjust_interval`, `is_current_member`, `is_admin`, `weight`, `is_default`, `is_active`, `is_reserved`) VALUES (4,'Expired','Expired','end_date','month',1,NULL,NULL,NULL,0,0,4,0,1,0);
INSERT INTO `civicrm_membership_status` (`id`, `name`, `label`, `start_event`, `start_event_adjust_unit`, `start_event_adjust_interval`, `end_event`, `end_event_adjust_unit`, `end_event_adjust_interval`, `is_current_member`, `is_admin`, `weight`, `is_default`, `is_active`, `is_reserved`) VALUES (5,'Pending','Pending','join_date',NULL,NULL,'join_date',NULL,NULL,0,0,5,0,1,1);
INSERT INTO `civicrm_membership_status` (`id`, `name`, `label`, `start_event`, `start_event_adjust_unit`, `start_event_adjust_interval`, `end_event`, `end_event_adjust_unit`, `end_event_adjust_interval`, `is_current_member`, `is_admin`, `weight`, `is_default`, `is_active`, `is_reserved`) VALUES (6,'Cancelled','Cancelled','join_date',NULL,NULL,'join_date',NULL,NULL,0,0,6,0,1,1);
INSERT INTO `civicrm_membership_status` (`id`, `name`, `label`, `start_event`, `start_event_adjust_unit`, `start_event_adjust_interval`, `end_event`, `end_event_adjust_unit`, `end_event_adjust_interval`, `is_current_member`, `is_admin`, `weight`, `is_default`, `is_active`, `is_reserved`) VALUES (7,'Deceased','Deceased',NULL,NULL,NULL,NULL,NULL,NULL,0,1,7,0,1,1);
/*!40000 ALTER TABLE `civicrm_membership_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

