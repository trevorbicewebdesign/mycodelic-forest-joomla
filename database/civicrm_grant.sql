
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
DROP TABLE IF EXISTS `civicrm_grant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_grant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Grant id',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'Contact ID of contact record given grant belongs to.',
  `application_received_date` date DEFAULT NULL COMMENT 'Date on which grant application was received by donor.',
  `decision_date` date DEFAULT NULL COMMENT 'Date on which grant decision was made.',
  `money_transfer_date` date DEFAULT NULL COMMENT 'Date on which grant money transfer was made.',
  `grant_due_date` date DEFAULT NULL COMMENT 'Date on which grant report is due.',
  `grant_report_received` tinyint(4) DEFAULT NULL COMMENT 'Yes/No field stating whether grant report was received by donor.',
  `grant_type_id` int(10) unsigned NOT NULL COMMENT 'Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.',
  `amount_total` decimal(20,2) NOT NULL COMMENT 'Requested grant amount, in default currency.',
  `amount_requested` decimal(20,2) DEFAULT NULL COMMENT 'Requested grant amount, in original currency (optional).',
  `amount_granted` decimal(20,2) DEFAULT NULL COMMENT 'Granted amount, in default currency.',
  `currency` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT '3 character string, value from config setting or input via user.',
  `rationale` text COLLATE utf8_unicode_ci COMMENT 'Grant rationale.',
  `status_id` int(10) unsigned NOT NULL COMMENT 'Id of Grant status.',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Financial Type.',
  PRIMARY KEY (`id`),
  KEY `index_grant_type_id` (`grant_type_id`),
  KEY `index_status_id` (`status_id`),
  KEY `FK_civicrm_grant_contact_id` (`contact_id`),
  KEY `FK_civicrm_grant_financial_type_id` (`financial_type_id`),
  CONSTRAINT `FK_civicrm_grant_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_grant_financial_type_id` FOREIGN KEY (`financial_type_id`) REFERENCES `civicrm_financial_type` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_grant` WRITE;
/*!40000 ALTER TABLE `civicrm_grant` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_grant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

