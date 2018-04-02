
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
DROP TABLE IF EXISTS `civicrm_sms_provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_sms_provider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'SMS Provider ID',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Provider internal name points to option_value of option_group sms_provider_name',
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Provider name visible to user',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_type` int(10) unsigned NOT NULL COMMENT 'points to value in civicrm_option_value for group sms_api_type',
  `api_url` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_params` text COLLATE utf8_unicode_ci COMMENT 'the api params in xml, http or smtp format',
  `is_default` tinyint(4) DEFAULT '0',
  `is_active` tinyint(4) DEFAULT '0',
  `domain_id` int(10) unsigned DEFAULT NULL COMMENT 'Which Domain is this sms provider for',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_sms_provider_domain_id` (`domain_id`),
  CONSTRAINT `FK_civicrm_sms_provider_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_sms_provider` WRITE;
/*!40000 ALTER TABLE `civicrm_sms_provider` DISABLE KEYS */;
INSERT INTO `civicrm_sms_provider` (`id`, `name`, `title`, `username`, `password`, `api_type`, `api_url`, `api_params`, `is_default`, `is_active`, `domain_id`) VALUES (1,'org.civicrm.sms.twilio','Twillo','AC7dab6b08735f18f6466332f2c5ee9293','e8a3ae06c40f7eb4e0b633609eed9edc',1,'https://api.twilio.com/','From=+14158180287\nmo=1',1,1,1);
/*!40000 ALTER TABLE `civicrm_sms_provider` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

