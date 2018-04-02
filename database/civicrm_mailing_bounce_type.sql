
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
DROP TABLE IF EXISTS `civicrm_mailing_bounce_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mailing_bounce_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Type of bounce',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'A description of this bounce type',
  `hold_threshold` int(10) unsigned NOT NULL COMMENT 'Number of bounces of this type required before the email address is put on bounce hold',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mailing_bounce_type` WRITE;
/*!40000 ALTER TABLE `civicrm_mailing_bounce_type` DISABLE KEYS */;
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (1,'AOL','AOL Terms of Service complaint',1);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (2,'Away','Recipient is on vacation',30);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (3,'Dns','Unable to resolve recipient domain',3);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (4,'Host','Unable to deliver to destintation mail server',3);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (5,'Inactive','User account is no longer active',1);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (6,'Invalid','Email address is not valid',1);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (7,'Loop','Mail routing error',3);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (8,'Quota','User inbox is full',3);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (9,'Relay','Unable to reach destination mail server',3);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (10,'Spam','Message caught by a content filter',1);
INSERT INTO `civicrm_mailing_bounce_type` (`id`, `name`, `description`, `hold_threshold`) VALUES (11,'Syntax','Error in SMTP transaction',3);
/*!40000 ALTER TABLE `civicrm_mailing_bounce_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

