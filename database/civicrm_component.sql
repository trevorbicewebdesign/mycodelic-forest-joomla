
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
DROP TABLE IF EXISTS `civicrm_component`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_component` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Component ID',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of the component.',
  `namespace` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Path to components main directory in a form of a class\n      namespace.\n    ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_component` WRITE;
/*!40000 ALTER TABLE `civicrm_component` DISABLE KEYS */;
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (1,'CiviEvent','CRM_Event');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (2,'CiviContribute','CRM_Contribute');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (3,'CiviMember','CRM_Member');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (4,'CiviMail','CRM_Mailing');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (5,'CiviGrant','CRM_Grant');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (6,'CiviPledge','CRM_Pledge');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (7,'CiviCase','CRM_Case');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (8,'CiviReport','CRM_Report');
INSERT INTO `civicrm_component` (`id`, `name`, `namespace`) VALUES (9,'CiviCampaign','CRM_Campaign');
/*!40000 ALTER TABLE `civicrm_component` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

