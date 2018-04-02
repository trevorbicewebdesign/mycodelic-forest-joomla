
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
DROP TABLE IF EXISTS `civicrm_domain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_domain` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Domain ID',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of Domain / Organization',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description of Domain.',
  `config_backend` text COLLATE utf8_unicode_ci COMMENT 'Backend configuration.',
  `version` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The civicrm version this instance is running',
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID. This is specifically not an FK to avoid circular constraints',
  `locales` text COLLATE utf8_unicode_ci COMMENT 'list of locales supported by the current db state (NULL for single-lang install)',
  `locale_custom_strings` text COLLATE utf8_unicode_ci COMMENT 'Locale specific string overrides',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`),
  KEY `FK_civicrm_domain_contact_id` (`contact_id`),
  CONSTRAINT `FK_civicrm_domain_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_domain` WRITE;
/*!40000 ALTER TABLE `civicrm_domain` DISABLE KEYS */;
INSERT INTO `civicrm_domain` (`id`, `name`, `description`, `config_backend`, `version`, `contact_id`, `locales`, `locale_custom_strings`) VALUES (1,'Default Domain Name',NULL,NULL,'4.7.29',1,NULL,'a:1:{s:5:\"en_US\";a:0:{}}');
/*!40000 ALTER TABLE `civicrm_domain` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

