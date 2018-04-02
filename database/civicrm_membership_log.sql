
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
DROP TABLE IF EXISTS `civicrm_membership_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_membership_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `membership_id` int(10) unsigned NOT NULL COMMENT 'FK to Membership table',
  `status_id` int(10) unsigned NOT NULL COMMENT 'New status assigned to membership by this action. FK to Membership Status',
  `start_date` date DEFAULT NULL COMMENT 'New membership period start date',
  `end_date` date DEFAULT NULL COMMENT 'New membership period expiration date.',
  `modified_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID of person under whose credentials this data modification was made.',
  `modified_date` date DEFAULT NULL COMMENT 'Date this membership modification action was logged.',
  `membership_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Membership Type.',
  `max_related` int(11) DEFAULT NULL COMMENT 'Maximum number of related memberships.',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_membership_log_membership_id` (`membership_id`),
  KEY `FK_civicrm_membership_log_status_id` (`status_id`),
  KEY `FK_civicrm_membership_log_modified_id` (`modified_id`),
  KEY `FK_civicrm_membership_log_membership_type_id` (`membership_type_id`),
  CONSTRAINT `FK_civicrm_membership_log_membership_id` FOREIGN KEY (`membership_id`) REFERENCES `civicrm_membership` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_membership_log_membership_type_id` FOREIGN KEY (`membership_type_id`) REFERENCES `civicrm_membership_type` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_membership_log_modified_id` FOREIGN KEY (`modified_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_membership_log_status_id` FOREIGN KEY (`status_id`) REFERENCES `civicrm_membership_status` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_membership_log` WRITE;
/*!40000 ALTER TABLE `civicrm_membership_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_membership_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

