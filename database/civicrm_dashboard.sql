
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
DROP TABLE IF EXISTS `civicrm_dashboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_dashboard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Domain for dashboard',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Internal name of dashlet.',
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'dashlet title',
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'url in case of external dashlet',
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Permission for the dashlet',
  `permission_operator` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Permission Operator',
  `fullscreen_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'fullscreen url for dashlet',
  `is_active` tinyint(4) DEFAULT '0' COMMENT 'Is this dashlet active?',
  `is_reserved` tinyint(4) DEFAULT '0' COMMENT 'Is this dashlet reserved?',
  `cache_minutes` int(10) unsigned NOT NULL DEFAULT '60' COMMENT 'Number of minutes to cache dashlet content in browser localStorage.',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_dashboard_domain_id` (`domain_id`),
  CONSTRAINT `FK_civicrm_dashboard_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_dashboard` WRITE;
/*!40000 ALTER TABLE `civicrm_dashboard` DISABLE KEYS */;
INSERT INTO `civicrm_dashboard` (`id`, `domain_id`, `name`, `label`, `url`, `permission`, `permission_operator`, `fullscreen_url`, `is_active`, `is_reserved`, `cache_minutes`) VALUES (1,1,'blog','CiviCRM News','civicrm/dashlet/blog?reset=1','access CiviCRM',NULL,'civicrm/dashlet/blog?reset=1&context=dashletFullscreen',1,1,1440);
INSERT INTO `civicrm_dashboard` (`id`, `domain_id`, `name`, `label`, `url`, `permission`, `permission_operator`, `fullscreen_url`, `is_active`, `is_reserved`, `cache_minutes`) VALUES (2,1,'getting-started','CiviCRM Resources','civicrm/dashlet/getting-started?reset=1','access CiviCRM',NULL,'civicrm/dashlet/getting-started?reset=1&context=dashletFullscreen',1,1,7200);
INSERT INTO `civicrm_dashboard` (`id`, `domain_id`, `name`, `label`, `url`, `permission`, `permission_operator`, `fullscreen_url`, `is_active`, `is_reserved`, `cache_minutes`) VALUES (3,1,'activity','Activities','civicrm/dashlet/activity?reset=1','access CiviCRM',NULL,'civicrm/dashlet/activity?reset=1&context=dashletFullscreen',1,1,7200);
INSERT INTO `civicrm_dashboard` (`id`, `domain_id`, `name`, `label`, `url`, `permission`, `permission_operator`, `fullscreen_url`, `is_active`, `is_reserved`, `cache_minutes`) VALUES (4,1,'myCases','My Cases','civicrm/dashlet/myCases?reset=1','access my cases and activities',NULL,'civicrm/dashlet/myCases?reset=1&context=dashletFullscreen',1,1,60);
INSERT INTO `civicrm_dashboard` (`id`, `domain_id`, `name`, `label`, `url`, `permission`, `permission_operator`, `fullscreen_url`, `is_active`, `is_reserved`, `cache_minutes`) VALUES (5,1,'allCases','All Cases','civicrm/dashlet/allCases?reset=1','access all cases and activities',NULL,'civicrm/dashlet/allCases?reset=1&context=dashletFullscreen',1,1,60);
INSERT INTO `civicrm_dashboard` (`id`, `domain_id`, `name`, `label`, `url`, `permission`, `permission_operator`, `fullscreen_url`, `is_active`, `is_reserved`, `cache_minutes`) VALUES (6,1,'casedashboard','Case Dashboard Dashlet','civicrm/dashlet/casedashboard?reset=1','access my cases and activities,access all cases and activities','OR','civicrm/dashlet/casedashboard?reset=1&context=dashletFullscreen',1,1,60);
/*!40000 ALTER TABLE `civicrm_dashboard` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

