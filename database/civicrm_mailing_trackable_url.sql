
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
DROP TABLE IF EXISTS `civicrm_mailing_trackable_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mailing_trackable_url` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'The URL to be tracked.',
  `mailing_id` int(10) unsigned NOT NULL COMMENT 'FK to the mailing',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_mailing_trackable_url_mailing_id` (`mailing_id`),
  CONSTRAINT `FK_civicrm_mailing_trackable_url_mailing_id` FOREIGN KEY (`mailing_id`) REFERENCES `civicrm_mailing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mailing_trackable_url` WRITE;
/*!40000 ALTER TABLE `civicrm_mailing_trackable_url` DISABLE KEYS */;
INSERT INTO `civicrm_mailing_trackable_url` (`id`, `url`, `mailing_id`) VALUES (1,'https://meet.google.com/gvx-qirk-mce',12);
INSERT INTO `civicrm_mailing_trackable_url` (`id`, `url`, `mailing_id`) VALUES (2,'https://meet.google.com/gvx-qirk-mce',18);
INSERT INTO `civicrm_mailing_trackable_url` (`id`, `url`, `mailing_id`) VALUES (3,'https://meet.google.com/gvx-qirk-mce',19);
INSERT INTO `civicrm_mailing_trackable_url` (`id`, `url`, `mailing_id`) VALUES (4,'https://profiles.burningman.org/participate/register/',20);
INSERT INTO `civicrm_mailing_trackable_url` (`id`, `url`, `mailing_id`) VALUES (5,'https://profiles.burningman.org/',21);
INSERT INTO `civicrm_mailing_trackable_url` (`id`, `url`, `mailing_id`) VALUES (6,'https://meet.google.com/gvx-qirk-mce',30);
INSERT INTO `civicrm_mailing_trackable_url` (`id`, `url`, `mailing_id`) VALUES (7,'https://meet.google.com/gvx-qirk-mce',35);
/*!40000 ALTER TABLE `civicrm_mailing_trackable_url` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

