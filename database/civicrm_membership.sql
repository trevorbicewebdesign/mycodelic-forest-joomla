
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
DROP TABLE IF EXISTS `civicrm_membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_membership` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Membership Id',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact ID',
  `membership_type_id` int(10) unsigned NOT NULL COMMENT 'FK to Membership Type',
  `join_date` date DEFAULT NULL COMMENT 'Beginning of initial membership period (member since...).',
  `start_date` date DEFAULT NULL COMMENT 'Beginning of current uninterrupted membership period.',
  `end_date` date DEFAULT NULL COMMENT 'Current membership period expire date.',
  `source` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(10) unsigned NOT NULL COMMENT 'FK to Membership Status',
  `is_override` tinyint(4) DEFAULT NULL COMMENT 'Admin users may set a manual status which overrides the calculated status. When this flag is true, automated status update scripts should NOT modify status for the record.',
  `owner_membership_id` int(10) unsigned DEFAULT NULL COMMENT 'Optional FK to Parent Membership.',
  `max_related` int(11) DEFAULT NULL COMMENT 'Maximum number of related memberships (membership_type override).',
  `is_test` tinyint(4) DEFAULT '0',
  `is_pay_later` tinyint(4) DEFAULT '0',
  `contribution_recur_id` int(10) unsigned DEFAULT NULL COMMENT 'Conditional foreign key to civicrm_contribution_recur id. Each membership in connection with a recurring contribution carries a foreign key to the recurring contribution record. This assumes we can track these processor initiated events.',
  `campaign_id` int(10) unsigned DEFAULT NULL COMMENT 'The campaign for which this membership is attached.',
  PRIMARY KEY (`id`),
  KEY `index_owner_membership_id` (`owner_membership_id`),
  KEY `FK_civicrm_membership_contact_id` (`contact_id`),
  KEY `FK_civicrm_membership_membership_type_id` (`membership_type_id`),
  KEY `FK_civicrm_membership_status_id` (`status_id`),
  KEY `FK_civicrm_membership_contribution_recur_id` (`contribution_recur_id`),
  KEY `FK_civicrm_membership_campaign_id` (`campaign_id`),
  CONSTRAINT `FK_civicrm_membership_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `civicrm_campaign` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_membership_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_membership_contribution_recur_id` FOREIGN KEY (`contribution_recur_id`) REFERENCES `civicrm_contribution_recur` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_membership_membership_type_id` FOREIGN KEY (`membership_type_id`) REFERENCES `civicrm_membership_type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_membership_owner_membership_id` FOREIGN KEY (`owner_membership_id`) REFERENCES `civicrm_membership` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_membership_status_id` FOREIGN KEY (`status_id`) REFERENCES `civicrm_membership_status` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_membership` WRITE;
/*!40000 ALTER TABLE `civicrm_membership` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_membership` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

