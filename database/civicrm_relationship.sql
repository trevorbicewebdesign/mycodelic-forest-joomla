
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
DROP TABLE IF EXISTS `civicrm_relationship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_relationship` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Relationship ID',
  `contact_id_a` int(10) unsigned NOT NULL COMMENT 'id of the first contact',
  `contact_id_b` int(10) unsigned NOT NULL COMMENT 'id of the second contact',
  `relationship_type_id` int(10) unsigned NOT NULL COMMENT 'id of the relationship',
  `start_date` date DEFAULT NULL COMMENT 'date when the relationship started',
  `end_date` date DEFAULT NULL COMMENT 'date when the relationship ended',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'is the relationship active ?',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional verbose description for the relationship.',
  `is_permission_a_b` tinyint(4) DEFAULT '0' COMMENT 'is contact a has permission to view / edit contact and\n      related data for contact b ?\n    ',
  `is_permission_b_a` tinyint(4) DEFAULT '0' COMMENT 'is contact b has permission to view / edit contact and\n      related data for contact a ?\n    ',
  `case_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_case',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_relationship_contact_id_a` (`contact_id_a`),
  KEY `FK_civicrm_relationship_contact_id_b` (`contact_id_b`),
  KEY `FK_civicrm_relationship_relationship_type_id` (`relationship_type_id`),
  KEY `FK_civicrm_relationship_case_id` (`case_id`),
  CONSTRAINT `FK_civicrm_relationship_case_id` FOREIGN KEY (`case_id`) REFERENCES `civicrm_case` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_relationship_contact_id_a` FOREIGN KEY (`contact_id_a`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_relationship_contact_id_b` FOREIGN KEY (`contact_id_b`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_relationship_relationship_type_id` FOREIGN KEY (`relationship_type_id`) REFERENCES `civicrm_relationship_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_relationship` WRITE;
/*!40000 ALTER TABLE `civicrm_relationship` DISABLE KEYS */;
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (1,2,3,3,NULL,NULL,1,'',1,1,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (2,22,48,3,NULL,NULL,1,'',1,1,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (3,23,71,3,NULL,NULL,1,'',1,1,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (4,29,75,3,NULL,NULL,1,'',1,1,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (5,33,34,2,NULL,NULL,1,'',1,1,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (6,38,3,4,NULL,NULL,1,'',0,0,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (7,2,11,4,NULL,NULL,1,'',0,0,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (8,47,51,3,NULL,NULL,1,'',1,1,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (9,49,11,2,NULL,NULL,1,'',1,1,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (10,56,2,4,NULL,NULL,1,'',0,0,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (11,56,11,4,NULL,NULL,1,'',0,0,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (12,81,68,3,NULL,NULL,1,'',0,0,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (13,86,87,3,NULL,NULL,1,'',0,0,NULL);
INSERT INTO `civicrm_relationship` (`id`, `contact_id_a`, `contact_id_b`, `relationship_type_id`, `start_date`, `end_date`, `is_active`, `description`, `is_permission_a_b`, `is_permission_b_a`, `case_id`) VALUES (14,93,91,2,NULL,NULL,1,'',0,0,NULL);
/*!40000 ALTER TABLE `civicrm_relationship` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

