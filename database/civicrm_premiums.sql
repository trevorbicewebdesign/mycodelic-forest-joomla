
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
DROP TABLE IF EXISTS `civicrm_premiums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_premiums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entity_table` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Joins these premium settings to another object. Always civicrm_contribution_page for now.',
  `entity_id` int(10) unsigned NOT NULL,
  `premiums_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Is the Premiums feature enabled for this page?',
  `premiums_intro_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title for Premiums section.',
  `premiums_intro_text` text COLLATE utf8_unicode_ci COMMENT 'Displayed in <div> at top of Premiums section of page. Text and HTML allowed.',
  `premiums_contact_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'This email address is included in receipts if it is populated and a premium has been selected.',
  `premiums_contact_phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'This phone number is included in receipts if it is populated and a premium has been selected.',
  `premiums_display_min_contribution` tinyint(4) NOT NULL COMMENT 'Boolean. Should we automatically display minimum contribution amount text after the premium descriptions.',
  `premiums_nothankyou_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Label displayed for No Thank-you option in premiums block (e.g. No thank you)',
  `premiums_nothankyou_position` int(10) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_premiums` WRITE;
/*!40000 ALTER TABLE `civicrm_premiums` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_premiums` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

