
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
DROP TABLE IF EXISTS `civicrm_pledge_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_pledge_payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pledge_id` int(10) unsigned NOT NULL COMMENT 'FK to Pledge table',
  `contribution_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to contribution table.',
  `scheduled_amount` decimal(20,2) NOT NULL COMMENT 'Pledged amount for this payment (the actual contribution amount might be different).',
  `actual_amount` decimal(20,2) DEFAULT NULL COMMENT 'Actual amount that is paid as the Pledged installment amount.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `scheduled_date` datetime NOT NULL COMMENT 'The date the pledge payment is supposed to happen.',
  `reminder_date` datetime DEFAULT NULL COMMENT 'The date that the most recent payment reminder was sent.',
  `reminder_count` int(10) unsigned DEFAULT '0' COMMENT 'The number of payment reminders sent.',
  `status_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_contribution_pledge` (`contribution_id`,`pledge_id`),
  KEY `index_status` (`status_id`),
  KEY `FK_civicrm_pledge_payment_pledge_id` (`pledge_id`),
  CONSTRAINT `FK_civicrm_pledge_payment_contribution_id` FOREIGN KEY (`contribution_id`) REFERENCES `civicrm_contribution` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_pledge_payment_pledge_id` FOREIGN KEY (`pledge_id`) REFERENCES `civicrm_pledge` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_pledge_payment` WRITE;
/*!40000 ALTER TABLE `civicrm_pledge_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_pledge_payment` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

