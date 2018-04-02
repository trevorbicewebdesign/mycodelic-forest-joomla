
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
DROP TABLE IF EXISTS `civicrm_participant_status_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_participant_status_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique participant status type id',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'non-localized name of the status type',
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'localized label for display of this status type',
  `class` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'the general group of status type this one belongs to',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'whether this is a status type required by the system',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'whether this status type is active',
  `is_counted` tinyint(4) DEFAULT NULL COMMENT 'whether this status type is counted against event size limit',
  `weight` int(10) unsigned NOT NULL COMMENT 'controls sort order',
  `visibility_id` int(10) unsigned DEFAULT NULL COMMENT 'whether the status type is visible to the public, an implicit foreign key to option_value.value related to the `visibility` option_group',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_participant_status_type` WRITE;
/*!40000 ALTER TABLE `civicrm_participant_status_type` DISABLE KEYS */;
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (1,'Registered','Registered','Positive',1,1,1,1,1);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (2,'Attended','Attended','Positive',0,1,1,2,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (3,'No-show','No-show','Negative',0,1,0,3,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (4,'Cancelled','Cancelled','Negative',1,1,0,4,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (5,'Pending from pay later','Pending (pay later)','Pending',1,1,1,5,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (6,'Pending from incomplete transaction','Pending (incomplete transaction)','Pending',1,1,0,6,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (7,'On waitlist','On waitlist','Waiting',1,0,0,7,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (8,'Awaiting approval','Awaiting approval','Waiting',1,0,1,8,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (9,'Pending from waitlist','Pending from waitlist','Pending',1,0,1,9,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (10,'Pending from approval','Pending from approval','Pending',1,0,1,10,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (11,'Rejected','Rejected','Negative',1,0,0,11,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (12,'Expired','Expired','Negative',1,1,0,12,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (13,'Pending in cart','Pending in cart','Pending',1,1,0,13,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (14,'Partially paid','Partially paid','Positive',1,1,1,14,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (15,'Pending refund','Pending refund','Positive',1,1,1,15,2);
INSERT INTO `civicrm_participant_status_type` (`id`, `name`, `label`, `class`, `is_reserved`, `is_active`, `is_counted`, `weight`, `visibility_id`) VALUES (16,'Transferred','Transferred','Negative',1,1,0,16,2);
/*!40000 ALTER TABLE `civicrm_participant_status_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

