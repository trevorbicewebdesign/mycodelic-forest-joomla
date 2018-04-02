
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
DROP TABLE IF EXISTS `civicrm_cxn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_cxn` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Connection ID',
  `app_guid` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Application GUID',
  `app_meta` text COLLATE utf8_unicode_ci COMMENT 'Application Metadata (JSON)',
  `cxn_guid` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Connection GUID',
  `secret` text COLLATE utf8_unicode_ci COMMENT 'Shared secret',
  `perm` text COLLATE utf8_unicode_ci COMMENT 'Permissions approved for the service (JSON)',
  `options` text COLLATE utf8_unicode_ci COMMENT 'Options for the service (JSON)',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is connection currently enabled?',
  `created_date` timestamp NULL DEFAULT NULL COMMENT 'When was the connection was created.',
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'When the connection was created or modified.',
  `fetched_date` timestamp NULL DEFAULT NULL COMMENT 'The last time the application metadata was fetched.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_appid` (`app_guid`),
  UNIQUE KEY `UI_keypair_cxnid` (`cxn_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_cxn` WRITE;
/*!40000 ALTER TABLE `civicrm_cxn` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_cxn` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

