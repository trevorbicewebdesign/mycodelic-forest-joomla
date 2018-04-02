
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
DROP TABLE IF EXISTS `civicrm_membership_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_membership_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Membership Id',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name for Membership Status',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'FK to civicrm_contribution_page.id',
  `membership_types` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Membership types to be exposed by this block',
  `membership_type_default` int(10) unsigned DEFAULT NULL COMMENT 'Optional foreign key to membership_type',
  `display_min_fee` tinyint(4) DEFAULT '1' COMMENT 'Display minimum membership fee',
  `is_separate_payment` tinyint(4) DEFAULT '1' COMMENT 'Should membership transactions be processed separately',
  `new_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title to display at top of block',
  `new_text` text COLLATE utf8_unicode_ci COMMENT 'Text to display below title',
  `renewal_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title for renewal',
  `renewal_text` text COLLATE utf8_unicode_ci COMMENT 'Text to display for member renewal',
  `is_required` tinyint(4) DEFAULT '0' COMMENT 'Is membership sign up optional',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this membership_block enabled',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_membership_block_entity_id` (`entity_id`),
  KEY `FK_civicrm_membership_block_membership_type_default` (`membership_type_default`),
  CONSTRAINT `FK_civicrm_membership_block_entity_id` FOREIGN KEY (`entity_id`) REFERENCES `civicrm_contribution_page` (`id`),
  CONSTRAINT `FK_civicrm_membership_block_membership_type_default` FOREIGN KEY (`membership_type_default`) REFERENCES `civicrm_membership_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_membership_block` WRITE;
/*!40000 ALTER TABLE `civicrm_membership_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_membership_block` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

