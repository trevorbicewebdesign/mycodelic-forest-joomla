
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
DROP TABLE IF EXISTS `civicrm_status_pref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_status_pref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Status Preference ID',
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Which Domain is this Status Preference for',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of the status check this preference references.',
  `hush_until` date DEFAULT NULL COMMENT 'expires ignore_severity.  NULL never hushes.',
  `ignore_severity` int(10) unsigned DEFAULT '1' COMMENT 'Hush messages up to and including this severity.',
  `prefs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'These settings are per-check, and can''t be compared across checks.',
  `check_info` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'These values are per-check, and can''t be compared across checks.',
  PRIMARY KEY (`id`),
  KEY `UI_status_pref_name` (`name`),
  KEY `FK_civicrm_status_pref_domain_id` (`domain_id`),
  CONSTRAINT `FK_civicrm_status_pref_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_status_pref` WRITE;
/*!40000 ALTER TABLE `civicrm_status_pref` DISABLE KEYS */;
INSERT INTO `civicrm_status_pref` (`id`, `domain_id`, `name`, `hush_until`, `ignore_severity`, `prefs`, `check_info`) VALUES (1,1,'checkLastCron',NULL,0,NULL,'1522639381');
/*!40000 ALTER TABLE `civicrm_status_pref` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

