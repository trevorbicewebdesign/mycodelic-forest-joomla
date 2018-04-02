
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
DROP TABLE IF EXISTS `civicrm_phone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_phone` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Phone ID',
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID',
  `location_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Which Location does this phone belong to.',
  `is_primary` tinyint(4) DEFAULT '0' COMMENT 'Is this the primary phone for this contact and location.',
  `is_billing` tinyint(4) DEFAULT '0' COMMENT 'Is this the billing?',
  `mobile_provider_id` int(10) unsigned DEFAULT NULL COMMENT 'Which Mobile Provider does this phone belong to.',
  `phone` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Complete phone number.',
  `phone_ext` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional extension for a phone number.',
  `phone_numeric` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Phone number stripped of all whitespace, letters, and punctuation.',
  `phone_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Which type of phone does this number belongs.',
  PRIMARY KEY (`id`),
  KEY `index_location_type` (`location_type_id`),
  KEY `index_is_primary` (`is_primary`),
  KEY `index_is_billing` (`is_billing`),
  KEY `UI_mobile_provider_id` (`mobile_provider_id`),
  KEY `index_phone_numeric` (`phone_numeric`),
  KEY `FK_civicrm_phone_contact_id` (`contact_id`),
  CONSTRAINT `FK_civicrm_phone_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_phone` WRITE;
/*!40000 ALTER TABLE `civicrm_phone` DISABLE KEYS */;
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (1,4,1,1,0,NULL,'(415) 572-2076',NULL,'4155722076',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (2,3,1,1,0,NULL,'(707) 845-2328',NULL,'7078452328',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (3,2,1,1,0,NULL,'(707) 880-0156',NULL,'7078800156',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (4,6,1,1,0,NULL,'(707) 267-5701',NULL,'7072675701',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (5,11,1,1,0,NULL,'(707) 499-4179',NULL,'7074994179',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (6,71,3,1,0,NULL,'(415) 717-2113',NULL,'4157172113',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (7,5,3,1,0,NULL,'(925) 567-3045',NULL,'9255673045',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (8,82,3,1,0,NULL,'(707) 362-7239',NULL,'7073627239',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (9,26,3,1,0,NULL,'(707) 867-2815',NULL,'7078672815',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (10,68,3,1,0,NULL,'(707) 407-8227',NULL,'7074078227',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (11,56,3,1,0,NULL,'(707) 407-9725',NULL,'7074079725',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (12,7,3,1,0,NULL,'(707) 489-5028',NULL,'7074895028',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (13,47,3,1,0,NULL,'(707) 273-2910',NULL,'7072732910',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (14,83,3,1,0,NULL,'(707) 502-7064',NULL,'7075027064',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (15,66,3,1,0,NULL,'(630) 768-5148',NULL,'6307685148',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (16,81,3,1,0,NULL,'(469) 585-6596',NULL,'4695856596',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (17,85,3,1,0,NULL,'(321) 347-6230',NULL,'3213476230',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (18,55,3,1,0,NULL,'(250) 816-1818',NULL,'2508161818',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (19,13,3,1,0,NULL,'‭(619) 201-4751‬',NULL,'6192014751',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (20,23,3,1,0,NULL,'404-556-2066',NULL,'4045562066',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (21,80,3,1,0,NULL,'(312) 722-4632',NULL,'3127224632',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (22,77,3,1,0,NULL,'(530) 353-1558',NULL,'5303531558',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (23,86,3,1,0,NULL,'(707) 499-9344',NULL,'7074999344',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (24,28,3,1,0,NULL,'(707) 382-2437',NULL,'7073822437',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (25,88,3,1,0,NULL,'(971) 241-2013',NULL,'9712412013',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (26,43,3,1,0,NULL,'(760) 815-0458',NULL,'7608150458',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (27,54,1,1,0,NULL,'(530) 354-6395',NULL,'5303546395',1);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (28,45,3,1,0,NULL,'(925) 963-1013',NULL,'9259631013',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (29,12,3,1,0,NULL,'(707) 364-9631',NULL,'7073649631',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (30,97,3,1,0,NULL,'(702) 326-6559',NULL,'7023266559',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (31,64,3,1,0,NULL,'(503) 407-0798',NULL,'5034070798',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (32,51,3,1,0,NULL,'(707) 601 5805',NULL,'7076015805',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (33,98,3,1,0,NULL,'(415) 818-0287',NULL,'4158180287',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (34,99,3,1,0,NULL,'(808) 728-3358',NULL,'8087283358',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (35,96,3,1,0,NULL,'(780) 668-6438',NULL,'7806686438',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (36,95,3,1,0,NULL,'(978) 807-5119',NULL,'9788075119',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (37,20,3,1,0,NULL,'(858) 248-9296',NULL,'8582489296',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (38,100,3,1,0,NULL,'(860) 933 6724',NULL,'8609336724',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (39,102,3,1,0,NULL,'707-364-3558',NULL,'7073643558',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (40,103,1,1,0,NULL,'415-374-1270',NULL,'4153741270',2);
INSERT INTO `civicrm_phone` (`id`, `contact_id`, `location_type_id`, `is_primary`, `is_billing`, `mobile_provider_id`, `phone`, `phone_ext`, `phone_numeric`, `phone_type_id`) VALUES (41,104,3,1,0,NULL,'603-401-2025',NULL,'6034012025',2);
/*!40000 ALTER TABLE `civicrm_phone` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_phone_before_insert before insert ON civicrm_phone FOR EACH ROW BEGIN  
SET NEW.phone_numeric = civicrm_strip_non_numeric(NEW.phone);
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_phone_after_insert after insert ON civicrm_phone FOR EACH ROW BEGIN  
UPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.contact_id;
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_phone_before_update before update ON civicrm_phone FOR EACH ROW BEGIN  
SET NEW.phone_numeric = civicrm_strip_non_numeric(NEW.phone);
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_phone_after_update after update ON civicrm_phone FOR EACH ROW BEGIN  
UPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.contact_id;
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_phone_after_delete after delete ON civicrm_phone FOR EACH ROW BEGIN  
UPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = OLD.contact_id;
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

