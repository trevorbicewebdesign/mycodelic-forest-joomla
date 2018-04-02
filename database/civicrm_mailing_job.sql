
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
DROP TABLE IF EXISTS `civicrm_mailing_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mailing_job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mailing_id` int(10) unsigned NOT NULL COMMENT 'The ID of the mailing this Job will send.',
  `scheduled_date` timestamp NULL DEFAULT NULL COMMENT 'date on which this job was scheduled.',
  `start_date` timestamp NULL DEFAULT NULL COMMENT 'date on which this job was started.',
  `end_date` timestamp NULL DEFAULT NULL COMMENT 'date on which this job ended.',
  `status` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The state of this job',
  `is_test` tinyint(4) DEFAULT '0' COMMENT 'Is this job for a test mail?',
  `job_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Type of mailling job: null | child ',
  `parent_id` int(10) unsigned DEFAULT NULL COMMENT 'Parent job id',
  `job_offset` int(11) DEFAULT '0' COMMENT 'Offset of the child job',
  `job_limit` int(11) DEFAULT '0' COMMENT 'Queue size limit for each child job',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_mailing_job_mailing_id` (`mailing_id`),
  KEY `FK_civicrm_mailing_job_parent_id` (`parent_id`),
  CONSTRAINT `FK_civicrm_mailing_job_mailing_id` FOREIGN KEY (`mailing_id`) REFERENCES `civicrm_mailing` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_mailing_job_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `civicrm_mailing_job` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mailing_job` WRITE;
/*!40000 ALTER TABLE `civicrm_mailing_job` DISABLE KEYS */;
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (9,4,'2018-03-03 21:25:47','2018-03-03 22:20:25','2018-03-03 22:20:27','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (10,4,'2018-03-03 21:25:47','2018-03-03 22:20:25','2018-03-03 22:20:27','Complete',0,'child',9,0,4);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (19,6,'2018-03-03 23:03:41',NULL,NULL,'Scheduled',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (26,8,'2018-03-03 23:19:59',NULL,NULL,'Scheduled',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (29,9,'2018-03-04 05:09:32','2018-03-04 05:13:28','2018-03-04 05:13:31','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (30,9,'2018-03-04 05:09:32','2018-03-04 05:13:28','2018-03-04 05:13:31','Complete',0,'child',29,0,12);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (31,10,'2018-03-04 05:21:24','2018-03-04 05:21:41','2018-03-04 05:21:44','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (32,10,'2018-03-04 05:21:24','2018-03-04 05:21:41','2018-03-04 05:21:44','Complete',0,'child',31,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (38,12,'2018-03-04 21:03:49','2018-03-04 21:04:08','2018-03-04 21:04:12','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (39,12,'2018-03-04 21:03:49','2018-03-04 21:04:08','2018-03-04 21:04:12','Complete',0,'child',38,0,18);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (44,15,'2018-03-05 05:18:18',NULL,NULL,'Scheduled',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (45,16,'2018-03-17 03:17:46','2018-03-17 03:18:01','2018-03-17 03:18:08','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (46,16,'2018-03-17 03:17:46','2018-03-17 03:18:01','2018-03-17 03:18:08','Complete',0,'child',45,0,25);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (47,17,'2018-03-18 00:00:31','2018-03-18 00:01:01','2018-03-18 00:01:13','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (48,17,'2018-03-18 00:00:31','2018-03-18 00:01:01','2018-03-18 00:01:13','Complete',0,'child',47,0,26);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (49,18,'2018-03-18 21:03:37','2018-03-18 21:04:02','2018-03-18 21:04:12','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (50,18,'2018-03-18 21:03:37','2018-03-18 21:04:02','2018-03-18 21:04:12','Complete',0,'child',49,0,28);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (51,19,'2018-03-18 22:00:11','2018-03-18 22:01:02','2018-03-18 22:01:09','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (52,19,'2018-03-18 22:00:11','2018-03-18 22:01:02','2018-03-18 22:01:09','Complete',0,'child',51,0,27);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (53,20,'2018-03-19 19:32:23','2018-03-19 19:33:02','2018-03-19 19:33:09','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (54,20,'2018-03-19 19:32:23','2018-03-19 19:33:02','2018-03-19 19:33:09','Complete',0,'child',53,0,15);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (55,21,'2018-03-21 19:00:00','2018-03-21 19:00:02','2018-03-21 19:00:10','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (56,21,'2018-03-21 19:00:00','2018-03-21 19:00:02','2018-03-21 19:00:10','Complete',0,'child',55,0,15);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (57,23,'2018-03-23 18:24:00','2018-03-23 18:24:01','2018-03-23 18:24:10','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (58,23,'2018-03-23 18:24:00','2018-03-23 18:24:01','2018-03-23 18:24:10','Complete',0,'child',57,0,15);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (61,24,'2018-03-27 05:30:09','2018-03-27 05:30:09','2018-03-27 05:30:10','Complete',1,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (70,25,'2018-03-27 05:54:17',NULL,NULL,'Scheduled',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (74,26,'2018-03-27 06:18:57','2018-03-27 06:18:57','2018-03-27 06:18:57','Complete',1,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (75,26,'2018-03-27 06:22:00',NULL,NULL,'Scheduled',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (78,27,'2018-03-27 20:19:06','2018-03-27 20:20:02','2018-03-27 20:20:07','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (79,27,'2018-03-27 20:19:06','2018-03-27 20:20:02','2018-03-27 20:20:07','Complete',0,'child',78,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (80,28,'2018-03-27 20:58:00','2018-03-27 20:58:01','2018-03-27 20:58:04','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (81,28,'2018-03-27 20:58:00','2018-03-27 20:58:01','2018-03-27 20:58:04','Complete',0,'child',80,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (82,30,'2018-03-28 17:00:37','2018-03-28 17:01:02','2018-03-28 17:01:09','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (83,30,'2018-03-28 17:00:37','2018-03-28 17:01:02','2018-03-28 17:01:09','Complete',0,'child',82,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (84,31,'2018-03-28 17:49:34','2018-03-28 17:50:01','2018-03-28 17:50:05','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (85,31,'2018-03-28 17:49:34','2018-03-28 17:50:01','2018-03-28 17:50:05','Complete',0,'child',84,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (86,32,'2018-03-28 18:30:00','2018-03-28 18:30:02','2018-03-28 18:30:06','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (87,33,'2018-03-28 18:50:00','2018-03-28 18:50:02','2018-03-28 18:50:09','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (88,32,'2018-03-28 18:30:00','2018-03-28 18:30:02','2018-03-28 18:30:06','Complete',0,'child',86,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (89,33,'2018-03-28 18:50:00','2018-03-28 18:50:02','2018-03-28 18:50:09','Complete',0,'child',87,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (90,34,'2018-03-28 19:00:27','2018-03-28 19:01:01','2018-03-28 19:01:05','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (91,34,'2018-03-28 19:00:27','2018-03-28 19:01:01','2018-03-28 19:01:05','Complete',0,'child',90,0,13);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (92,35,'2018-04-02 01:49:16','2018-04-02 01:50:01','2018-04-02 01:50:04','Complete',0,NULL,NULL,0,0);
INSERT INTO `civicrm_mailing_job` (`id`, `mailing_id`, `scheduled_date`, `start_date`, `end_date`, `status`, `is_test`, `job_type`, `parent_id`, `job_offset`, `job_limit`) VALUES (93,35,'2018-04-02 01:49:16','2018-04-02 01:50:01','2018-04-02 01:50:04','Complete',0,'child',92,0,5);
/*!40000 ALTER TABLE `civicrm_mailing_job` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

