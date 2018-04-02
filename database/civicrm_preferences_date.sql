
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
DROP TABLE IF EXISTS `civicrm_preferences_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_preferences_date` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The meta name for this date (fixed in code)',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description of this date type.',
  `start` int(11) NOT NULL COMMENT 'The start offset relative to current year',
  `end` int(11) NOT NULL COMMENT 'The end offset relative to current year, can be negative',
  `date_format` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The date type',
  `time_format` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'time format',
  PRIMARY KEY (`id`),
  KEY `index_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_preferences_date` WRITE;
/*!40000 ALTER TABLE `civicrm_preferences_date` DISABLE KEYS */;
INSERT INTO `civicrm_preferences_date` (`id`, `name`, `description`, `start`, `end`, `date_format`, `time_format`) VALUES (1,'activityDate','Date for activities including contributions: receive, receipt, cancel. membership: join, start, renew. case: start, end.',20,10,'','');
INSERT INTO `civicrm_preferences_date` (`id`, `name`, `description`, `start`, `end`, `date_format`, `time_format`) VALUES (2,'activityDateTime','Date and time for activity: scheduled. participant: registered.',20,10,'','1');
INSERT INTO `civicrm_preferences_date` (`id`, `name`, `description`, `start`, `end`, `date_format`, `time_format`) VALUES (3,'birth','Birth and deceased dates. Only year, month and day fields are supported.',100,0,'','');
INSERT INTO `civicrm_preferences_date` (`id`, `name`, `description`, `start`, `end`, `date_format`, `time_format`) VALUES (4,'creditCard','Month and year only for credit card expiration.',0,10,'M Y','');
INSERT INTO `civicrm_preferences_date` (`id`, `name`, `description`, `start`, `end`, `date_format`, `time_format`) VALUES (5,'custom','Uses date range passed in by form field. Can pass in a posix date part parameter. Start and end offsets defined here are ignored.',20,20,'','');
INSERT INTO `civicrm_preferences_date` (`id`, `name`, `description`, `start`, `end`, `date_format`, `time_format`) VALUES (6,'mailing','Date and time. Used for scheduling mailings.',0,1,'','');
INSERT INTO `civicrm_preferences_date` (`id`, `name`, `description`, `start`, `end`, `date_format`, `time_format`) VALUES (7,'searchDate','Used in search forms and for relationships.',20,20,'','');
/*!40000 ALTER TABLE `civicrm_preferences_date` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

