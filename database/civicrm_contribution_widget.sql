
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
DROP TABLE IF EXISTS `civicrm_contribution_widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_contribution_widget` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Contribution Id',
  `contribution_page_id` int(10) unsigned DEFAULT NULL COMMENT 'The Contribution Page which triggered this contribution',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this property active?',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Widget title.',
  `url_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'URL to Widget logo',
  `button_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Button title.',
  `about` text COLLATE utf8_unicode_ci COMMENT 'About description.',
  `url_homepage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'URL to Homepage.',
  `color_title` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_button` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_bar` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_main_text` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_main` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_main_bg` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_bg` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_about_link` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_homepage_link` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_contribution_widget_contribution_page_id` (`contribution_page_id`),
  CONSTRAINT `FK_civicrm_contribution_widget_contribution_page_id` FOREIGN KEY (`contribution_page_id`) REFERENCES `civicrm_contribution_page` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_contribution_widget` WRITE;
/*!40000 ALTER TABLE `civicrm_contribution_widget` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_contribution_widget` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

