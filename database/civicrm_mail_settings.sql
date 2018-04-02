
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
DROP TABLE IF EXISTS `civicrm_mail_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mail_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Which Domain is this match entry for',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'name of this group of settings',
  `is_default` tinyint(4) DEFAULT NULL COMMENT 'whether this is the default set of settings for this domain',
  `domain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'email address domain (the part after @)',
  `localpart` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'optional local part (like civimail+ for addresses like civimail+s.1.2@example.com)',
  `return_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'contents of the Return-Path header',
  `protocol` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'name of the protocol to use for polling (like IMAP, POP3 or Maildir)',
  `server` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'server to use when polling',
  `port` int(10) unsigned DEFAULT NULL COMMENT 'port to use when polling',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'username to use when polling',
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'password to use when polling',
  `is_ssl` tinyint(4) DEFAULT NULL COMMENT 'whether to use SSL or not',
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'folder to poll from when using IMAP, path to poll from when using Maildir, etc.',
  `activity_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of status to use when creating email to activity.',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_mail_settings_domain_id` (`domain_id`),
  CONSTRAINT `FK_civicrm_mail_settings_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mail_settings` WRITE;
/*!40000 ALTER TABLE `civicrm_mail_settings` DISABLE KEYS */;
INSERT INTO `civicrm_mail_settings` (`id`, `domain_id`, `name`, `is_default`, `domain`, `localpart`, `return_path`, `protocol`, `server`, `port`, `username`, `password`, `is_ssl`, `source`, `activity_status`) VALUES (1,1,'default',1,'EXAMPLE.ORG',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `civicrm_mail_settings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

