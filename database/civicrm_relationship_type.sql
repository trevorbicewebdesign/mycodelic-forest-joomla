
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
DROP TABLE IF EXISTS `civicrm_relationship_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_relationship_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `name_a_b` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'name for relationship of contact_a to contact_b.',
  `label_a_b` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'label for relationship of contact_a to contact_b.',
  `name_b_a` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional name for relationship of contact_b to contact_a.',
  `label_b_a` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional label for relationship of contact_b to contact_a.',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional verbose description of the relationship type.',
  `contact_type_a` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'If defined, contact_a in a relationship of this type must be a specific contact_type.',
  `contact_type_b` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'If defined, contact_b in a relationship of this type must be a specific contact_type.',
  `contact_sub_type_a` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'If defined, contact_sub_type_a in a relationship of this type must be a specific contact_sub_type.\n    ',
  `contact_sub_type_b` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'If defined, contact_sub_type_b in a relationship of this type must be a specific contact_sub_type.\n    ',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this relationship type a predefined system type (can not be changed or de-activated)?',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this relationship type currently active (i.e. can be used when creating or editing relationships)?\n    ',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name_a_b` (`name_a_b`),
  UNIQUE KEY `UI_name_b_a` (`name_b_a`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_relationship_type` WRITE;
/*!40000 ALTER TABLE `civicrm_relationship_type` DISABLE KEYS */;
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (1,'Child of','Child of','Parent of','Parent of','Parent/child relationship.','Individual','Individual',NULL,NULL,0,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (2,'Spouse of','Spouse of','Spouse of','Spouse of','Spousal relationship.','Individual','Individual',NULL,NULL,0,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (3,'Partner of','Partner of','Partner of','Partner of','Partner relationship.','Individual','Individual',NULL,NULL,0,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (4,'Sibling of','Sibling of','Sibling of','Sibling of','Sibling relationship.','Individual','Individual',NULL,NULL,0,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (5,'Employee of','Employee of','Employer of','Employer of','Employment relationship.','Individual','Organization',NULL,NULL,1,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (6,'Volunteer for','Volunteer for','Volunteer is','Volunteer is','Volunteer relationship.','Individual','Organization',NULL,NULL,0,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (7,'Head of Household for','Head of Household for','Head of Household is','Head of Household is','Head of household.','Individual','Household',NULL,NULL,1,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (8,'Household Member of','Household Member of','Household Member is','Household Member is','Household membership.','Individual','Household',NULL,NULL,1,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (9,'Case Coordinator is','Case Coordinator is','Case Coordinator','Case Coordinator','Case Coordinator','Individual','Individual',NULL,NULL,0,1);
INSERT INTO `civicrm_relationship_type` (`id`, `name_a_b`, `label_a_b`, `name_b_a`, `label_b_a`, `description`, `contact_type_a`, `contact_type_b`, `contact_sub_type_a`, `contact_sub_type_b`, `is_reserved`, `is_active`) VALUES (10,'Supervised by','Supervised by','Supervisor','Supervisor','Immediate workplace supervisor','Individual','Individual',NULL,NULL,0,1);
/*!40000 ALTER TABLE `civicrm_relationship_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

