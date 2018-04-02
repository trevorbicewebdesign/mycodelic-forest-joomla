
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
DROP TABLE IF EXISTS `civicrm_contribution_soft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_contribution_soft` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Soft Contribution ID',
  `contribution_id` int(10) unsigned NOT NULL COMMENT 'FK to contribution table.',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact ID',
  `amount` decimal(20,2) NOT NULL COMMENT 'Amount of this soft contribution.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `pcp_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_pcp.id',
  `pcp_display_in_roll` tinyint(4) DEFAULT '0',
  `pcp_roll_nickname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pcp_personal_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soft_credit_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Soft Credit Type ID.Implicit FK to civicrm_option_value where option_group = soft_credit_type.',
  PRIMARY KEY (`id`),
  KEY `index_id` (`pcp_id`),
  KEY `FK_civicrm_contribution_soft_contribution_id` (`contribution_id`),
  KEY `FK_civicrm_contribution_soft_contact_id` (`contact_id`),
  CONSTRAINT `FK_civicrm_contribution_soft_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_contribution_soft_contribution_id` FOREIGN KEY (`contribution_id`) REFERENCES `civicrm_contribution` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_contribution_soft_pcp_id` FOREIGN KEY (`pcp_id`) REFERENCES `civicrm_pcp` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_contribution_soft` WRITE;
/*!40000 ALTER TABLE `civicrm_contribution_soft` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_contribution_soft` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

