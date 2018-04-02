
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
DROP TABLE IF EXISTS `civicrm_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_email` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Email ID',
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID',
  `location_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Which Location does this email belong to.',
  `email` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Email address',
  `is_primary` tinyint(4) DEFAULT '0' COMMENT 'Is this the primary?',
  `is_billing` tinyint(4) DEFAULT '0' COMMENT 'Is this the billing?',
  `on_hold` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Is this address on bounce hold?',
  `is_bulkmail` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Is this address for bulk mail ?',
  `hold_date` datetime DEFAULT NULL COMMENT 'When the address went on bounce hold',
  `reset_date` datetime DEFAULT NULL COMMENT 'When the address bounce status was last reset',
  `signature_text` text COLLATE utf8_unicode_ci COMMENT 'Text formatted signature for the email.',
  `signature_html` text COLLATE utf8_unicode_ci COMMENT 'HTML formatted signature for the email.',
  PRIMARY KEY (`id`),
  KEY `index_location_type` (`location_type_id`),
  KEY `UI_email` (`email`),
  KEY `index_is_primary` (`is_primary`),
  KEY `index_is_billing` (`is_billing`),
  KEY `FK_civicrm_email_contact_id` (`contact_id`),
  CONSTRAINT `FK_civicrm_email_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_email` WRITE;
/*!40000 ALTER TABLE `civicrm_email` DISABLE KEYS */;
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (1,1,1,'fixme.domainemail@example.org',0,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (2,2,1,'trevor.bice@burningman.org',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (3,3,1,'rachaelkfales@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (4,4,1,'kate.benediktsson@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (5,5,1,'a.brougher@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (6,6,4,'matheus-707@hotmail.com',0,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (7,7,1,'haut_oiseau@hotmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (8,8,1,'jwlaboucane@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (9,9,1,'fredy@muksentertainment.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (10,10,3,'newman_alejandro@yahoo.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (11,11,1,'sanmannor@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (12,12,1,'bobbyjovalentine@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (13,13,1,'bioinspireme@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (15,45,1,'alindt.ca@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (16,47,1,'droopyfat@outlook.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (17,49,1,'kdmcabee@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (18,51,1,'nicolemccollum707@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (19,55,1,'yougoglencoco_@hotmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (20,58,1,'micahochej@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (21,59,1,'jimoconno@comcast.net',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (22,64,1,'alr56@humboldt.edu',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (23,71,1,'thea.s.sutton@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (24,80,1,'psypunkst@hotmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (25,26,3,'davidrc707@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (26,54,3,'jordanalexm@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (27,77,3,'bryanbruiser@yahoo.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (28,23,3,'john.h.boger@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (29,66,3,'mike.roesslein@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (30,6,3,'matfoolsgold707@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (31,68,3,'kristenshep@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (32,82,3,'michelle.dobosh@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (33,89,1,'cronjob@mycodelicforest.org',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (34,20,3,'aalvarez687@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (35,81,3,'corkrang@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (36,85,3,'lukegoller02@yahoo.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (37,86,1,'stocumlife@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (38,56,3,'talia.moss@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (39,28,3,'gaelondavis@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (40,88,3,'david1904white@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (41,43,3,'eric.leonhard@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (42,97,1,'dell_kelley@yahoo.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (43,99,1,'ksyoza@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (44,96,3,'gevenich@ualberta.ca',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (45,100,3,'donna.mckusick@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (46,101,1,'trevorbicewebdesign@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (47,102,1,'bridgetzapata@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (48,103,1,'mstoupnikova@gmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
INSERT INTO `civicrm_email` (`id`, `contact_id`, `location_type_id`, `email`, `is_primary`, `is_billing`, `on_hold`, `is_bulkmail`, `hold_date`, `reset_date`, `signature_text`, `signature_html`) VALUES (49,104,1,'dcoles1@hotmail.com',1,0,0,0,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `civicrm_email` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_email_after_insert after insert ON civicrm_email FOR EACH ROW BEGIN  
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
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_email_after_update after update ON civicrm_email FOR EACH ROW BEGIN  
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
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_email_after_delete after delete ON civicrm_email FOR EACH ROW BEGIN  
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

