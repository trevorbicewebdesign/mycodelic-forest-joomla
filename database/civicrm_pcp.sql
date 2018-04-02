
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
DROP TABLE IF EXISTS `civicrm_pcp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_pcp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Personal Campaign Page ID',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact ID',
  `status_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro_text` text COLLATE utf8_unicode_ci,
  `page_text` text COLLATE utf8_unicode_ci,
  `donate_link_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_id` int(10) unsigned NOT NULL COMMENT 'The Contribution or Event Page which triggered this pcp',
  `page_type` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'contribute' COMMENT 'The type of PCP this is: contribute or event',
  `pcp_block_id` int(10) unsigned NOT NULL COMMENT 'The pcp block that this pcp page was created from',
  `is_thermometer` int(10) unsigned DEFAULT '0',
  `is_honor_roll` int(10) unsigned DEFAULT '0',
  `goal_amount` decimal(20,2) DEFAULT NULL COMMENT 'Goal amount of this Personal Campaign Page.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `is_active` tinyint(4) DEFAULT '0' COMMENT 'Is Personal Campaign Page enabled/active?',
  `is_notify` tinyint(4) DEFAULT '0' COMMENT 'Notify owner via email when someone donates to page?',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_pcp_contact_id` (`contact_id`),
  CONSTRAINT `FK_civicrm_pcp_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_pcp` WRITE;
/*!40000 ALTER TABLE `civicrm_pcp` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_pcp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

