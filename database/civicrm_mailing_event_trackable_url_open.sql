
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
DROP TABLE IF EXISTS `civicrm_mailing_event_trackable_url_open`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mailing_event_trackable_url_open` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_queue_id` int(10) unsigned NOT NULL COMMENT 'FK to EventQueue',
  `trackable_url_id` int(10) unsigned NOT NULL COMMENT 'FK to TrackableURL',
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'When this trackable URL open occurred.',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_mailing_event_trackable_url_open_event_queue_id` (`event_queue_id`),
  KEY `FK_civicrm_mailing_event_trackable_url_open_trackable_url_id` (`trackable_url_id`),
  CONSTRAINT `FK_civicrm_mailing_event_trackable_url_open_event_queue_id` FOREIGN KEY (`event_queue_id`) REFERENCES `civicrm_mailing_event_queue` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_mailing_event_trackable_url_open_trackable_url_id` FOREIGN KEY (`trackable_url_id`) REFERENCES `civicrm_mailing_trackable_url` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mailing_event_trackable_url_open` WRITE;
/*!40000 ALTER TABLE `civicrm_mailing_event_trackable_url_open` DISABLE KEYS */;
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (1,30,1,'2018-03-04 21:05:30');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (2,34,1,'2018-03-04 21:14:18');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (3,31,1,'2018-03-04 21:15:14');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (4,31,1,'2018-03-04 21:15:27');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (5,43,1,'2018-03-04 21:16:59');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (6,40,1,'2018-03-04 21:42:38');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (7,37,1,'2018-03-04 21:57:41');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (8,37,1,'2018-03-04 21:57:47');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (9,32,1,'2018-03-04 22:00:10');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (10,32,1,'2018-03-04 22:00:15');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (11,37,1,'2018-03-04 22:00:31');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (12,36,1,'2018-03-04 22:05:41');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (13,40,1,'2018-03-04 22:12:42');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (14,40,1,'2018-03-04 22:14:02');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (15,39,1,'2018-03-04 22:17:17');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (16,39,1,'2018-03-04 22:46:35');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (17,122,2,'2018-03-18 21:05:44');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (18,122,2,'2018-03-18 21:09:06');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (19,123,2,'2018-03-18 21:24:55');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (20,123,2,'2018-03-18 21:25:27');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (21,103,2,'2018-03-18 21:28:30');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (22,105,2,'2018-03-18 21:29:10');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (23,105,2,'2018-03-18 21:36:46');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (24,120,2,'2018-03-18 21:38:48');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (25,120,2,'2018-03-18 21:39:32');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (26,120,2,'2018-03-18 21:39:36');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (27,120,2,'2018-03-18 21:39:39');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (28,105,2,'2018-03-18 21:42:36');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (29,125,2,'2018-03-18 21:46:39');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (30,101,2,'2018-03-18 21:57:39');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (31,101,2,'2018-03-18 21:57:43');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (32,131,3,'2018-03-18 22:01:29');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (33,150,3,'2018-03-18 22:01:45');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (34,150,3,'2018-03-18 22:02:42');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (35,151,3,'2018-03-18 22:03:55');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (36,142,3,'2018-03-18 22:21:44');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (37,142,3,'2018-03-18 22:21:44');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (38,142,3,'2018-03-18 22:21:44');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (39,137,3,'2018-03-18 23:46:18');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (40,137,3,'2018-03-18 23:46:19');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (41,142,3,'2018-03-19 11:46:22');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (42,142,3,'2018-03-19 12:01:55');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (43,154,4,'2018-03-19 19:33:13');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (44,162,4,'2018-03-19 19:33:44');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (45,161,4,'2018-03-19 19:39:31');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (46,161,4,'2018-03-19 19:39:32');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (47,160,4,'2018-03-19 21:39:45');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (48,160,4,'2018-03-19 21:39:46');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (49,161,4,'2018-03-20 00:58:08');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (50,161,4,'2018-03-20 00:58:27');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (51,161,4,'2018-03-20 01:00:30');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (52,161,4,'2018-03-21 17:37:55');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (53,161,4,'2018-03-21 17:38:43');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (54,142,3,'2018-03-21 18:04:19');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (55,181,5,'2018-03-21 19:00:30');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (56,171,5,'2018-03-21 19:00:49');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (57,173,5,'2018-03-21 19:00:51');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (58,175,5,'2018-03-21 19:00:59');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (59,175,5,'2018-03-21 19:00:59');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (60,176,5,'2018-03-21 19:02:07');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (61,176,5,'2018-03-21 19:02:07');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (62,176,5,'2018-03-21 19:02:14');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (63,169,5,'2018-03-21 19:11:40');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (64,174,5,'2018-03-21 19:18:50');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (65,182,5,'2018-03-21 19:23:41');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (66,177,5,'2018-03-21 19:29:53');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (67,164,4,'2018-03-23 04:58:39');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (68,179,5,'2018-03-23 05:31:27');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (69,179,5,'2018-03-23 05:48:57');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (70,239,6,'2018-03-28 17:01:48');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (71,231,6,'2018-03-28 17:01:55');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (72,239,6,'2018-03-28 17:02:53');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (73,239,6,'2018-03-28 17:06:58');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (74,237,6,'2018-03-28 17:08:54');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (75,238,6,'2018-03-28 17:09:53');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (76,232,6,'2018-03-28 17:11:45');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (77,231,6,'2018-03-28 17:33:55');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (78,231,6,'2018-03-28 17:34:45');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (79,235,6,'2018-03-28 17:49:16');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (80,235,6,'2018-03-28 17:49:43');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (81,237,6,'2018-03-28 17:57:04');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (82,235,6,'2018-03-28 17:58:27');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (83,237,6,'2018-03-28 18:00:43');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (84,237,6,'2018-03-28 18:09:24');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (85,229,6,'2018-03-28 18:10:18');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (86,239,6,'2018-03-28 18:22:59');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (87,239,6,'2018-03-28 18:23:10');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (88,232,6,'2018-03-28 18:24:14');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (89,237,6,'2018-03-28 18:32:55');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (90,237,6,'2018-03-28 18:59:21');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (91,171,5,'2018-03-30 17:39:53');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (92,171,5,'2018-03-30 17:39:53');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (93,171,5,'2018-03-30 17:40:04');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (94,293,7,'2018-04-02 01:52:40');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (95,293,7,'2018-04-02 01:52:47');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (96,292,7,'2018-04-02 01:55:22');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (97,295,7,'2018-04-02 01:57:49');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (98,295,7,'2018-04-02 01:57:49');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (99,295,7,'2018-04-02 01:57:56');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (100,294,7,'2018-04-02 02:00:43');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (101,294,7,'2018-04-02 02:02:22');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (102,293,7,'2018-04-02 02:03:00');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (103,293,7,'2018-04-02 02:03:35');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (104,293,7,'2018-04-02 02:04:01');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (105,295,7,'2018-04-02 02:04:20');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (106,296,7,'2018-04-02 03:04:00');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (107,296,7,'2018-04-02 03:04:00');
INSERT INTO `civicrm_mailing_event_trackable_url_open` (`id`, `event_queue_id`, `trackable_url_id`, `time_stamp`) VALUES (108,296,7,'2018-04-02 03:04:07');
/*!40000 ALTER TABLE `civicrm_mailing_event_trackable_url_open` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

