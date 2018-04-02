
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
DROP TABLE IF EXISTS `civicrm_dashboard_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_dashboard_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dashboard_id` int(10) unsigned NOT NULL COMMENT 'Dashboard ID',
  `contact_id` int(10) unsigned NOT NULL COMMENT 'Contact ID',
  `column_no` tinyint(4) DEFAULT '0' COMMENT 'column no for this widget',
  `is_active` tinyint(4) DEFAULT '0' COMMENT 'Is this widget active?',
  `weight` int(11) DEFAULT '0' COMMENT 'Ordering of the widgets.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_dashboard_id_contact_id` (`dashboard_id`,`contact_id`),
  KEY `FK_civicrm_dashboard_contact_contact_id` (`contact_id`),
  CONSTRAINT `FK_civicrm_dashboard_contact_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_dashboard_contact_dashboard_id` FOREIGN KEY (`dashboard_id`) REFERENCES `civicrm_dashboard` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_dashboard_contact` WRITE;
/*!40000 ALTER TABLE `civicrm_dashboard_contact` DISABLE KEYS */;
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (1,1,2,1,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (2,2,2,0,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (3,1,3,1,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (4,2,3,0,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (7,1,11,1,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (8,2,11,0,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (9,1,4,1,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (10,2,4,0,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (11,1,26,1,1,0);
INSERT INTO `civicrm_dashboard_contact` (`id`, `dashboard_id`, `contact_id`, `column_no`, `is_active`, `weight`) VALUES (12,2,26,0,1,0);
/*!40000 ALTER TABLE `civicrm_dashboard_contact` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

