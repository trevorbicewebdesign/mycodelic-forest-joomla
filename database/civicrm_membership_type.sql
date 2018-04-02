
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
DROP TABLE IF EXISTS `civicrm_membership_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_membership_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Membership Id',
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Which Domain is this match entry for',
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of Membership Type',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description of Membership Type',
  `member_of_contact_id` int(10) unsigned NOT NULL COMMENT 'Owner organization for this membership type. FK to Contact ID',
  `financial_type_id` int(10) unsigned NOT NULL COMMENT 'If membership is paid by a contribution - what financial type should be used. FK to civicrm_financial_type.id',
  `minimum_fee` decimal(18,9) DEFAULT '0.000000000' COMMENT 'Minimum fee for this membership (0 for free/complimentary memberships).',
  `duration_unit` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Unit in which membership period is expressed.',
  `duration_interval` int(11) DEFAULT NULL COMMENT 'Number of duration units in membership period (e.g. 1 year, 12 months).',
  `period_type` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Rolling membership period starts on signup date. Fixed membership periods start on fixed_period_start_day.',
  `fixed_period_start_day` int(11) DEFAULT NULL COMMENT 'For fixed period memberships, month and day (mmdd) on which subscription/membership will start. Period start is back-dated unless after rollover day.',
  `fixed_period_rollover_day` int(11) DEFAULT NULL COMMENT 'For fixed period memberships, signups after this day (mmdd) rollover to next period.',
  `relationship_type_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'FK to Relationship Type ID',
  `relationship_direction` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `max_related` int(11) DEFAULT NULL COMMENT 'Maximum number of related memberships.',
  `visibility` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `receipt_text_signup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Receipt Text for membership signup',
  `receipt_text_renewal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Receipt Text for membership renewal',
  `auto_renew` tinyint(4) DEFAULT '0' COMMENT '0 = No auto-renew option; 1 = Give option, but not required; 2 = Auto-renew required;',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this membership_type enabled',
  PRIMARY KEY (`id`),
  KEY `index_relationship_type_id` (`relationship_type_id`),
  KEY `FK_civicrm_membership_type_domain_id` (`domain_id`),
  KEY `FK_civicrm_membership_type_member_of_contact_id` (`member_of_contact_id`),
  KEY `FK_civicrm_membership_type_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_membership_type_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`),
  CONSTRAINT `FK_civicrm_membership_type_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`),
  CONSTRAINT `FK_civicrm_membership_type_member_of_contact_id` FOREIGN KEY (`member_of_contact_id`) REFERENCES `civicrm_contact` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_membership_type` WRITE;
/*!40000 ALTER TABLE `civicrm_membership_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_membership_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

