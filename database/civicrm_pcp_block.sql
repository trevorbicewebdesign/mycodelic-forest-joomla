
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
DROP TABLE IF EXISTS `civicrm_pcp_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_pcp_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'PCP block Id',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_id` int(10) unsigned NOT NULL COMMENT 'FK to civicrm_contribution_page.id OR civicrm_event.id',
  `target_entity_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'contribute' COMMENT 'The type of entity that this pcp targets',
  `target_entity_id` int(10) unsigned NOT NULL COMMENT 'The entity that this pcp targets',
  `supporter_profile_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_uf_group.id. Does Personal Campaign Page require manual activation by administrator? (is inactive by default after setup)?',
  `owner_notify_id` int(10) unsigned DEFAULT '0' COMMENT 'FK to civicrm_option_group with name = PCP owner notifications',
  `is_approval_needed` tinyint(4) DEFAULT NULL COMMENT 'Does Personal Campaign Page require manual activation by administrator? (is inactive by default after setup)?',
  `is_tellfriend_enabled` tinyint(4) DEFAULT NULL COMMENT 'Does Personal Campaign Page allow using tell a friend?',
  `tellfriend_limit` int(10) unsigned DEFAULT NULL COMMENT 'Maximum recipient fields allowed in tell a friend',
  `link_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Link text for PCP.',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is Personal Campaign Page Block enabled/active?',
  `notify_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'If set, notification is automatically emailed to this email-address on create/update Personal Campaign Page',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_pcp_block_supporter_profile_id` (`supporter_profile_id`),
  CONSTRAINT `FK_civicrm_pcp_block_supporter_profile_id` FOREIGN KEY (`supporter_profile_id`) REFERENCES `civicrm_uf_group` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_pcp_block` WRITE;
/*!40000 ALTER TABLE `civicrm_pcp_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_pcp_block` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

