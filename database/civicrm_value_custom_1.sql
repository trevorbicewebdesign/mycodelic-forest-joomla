
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
DROP TABLE IF EXISTS `civicrm_value_custom_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_value_custom_1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Default MySQL primary key',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'Table that this extends',
  `playa_years_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_entity_id` (`entity_id`),
  CONSTRAINT `FK_civicrm_value_custom_1_entity_id` FOREIGN KEY (`entity_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_value_custom_1` WRITE;
/*!40000 ALTER TABLE `civicrm_value_custom_1` DISABLE KEYS */;
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (1,2,'20172016201520142013');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (3,18,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (4,19,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (5,20,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (6,21,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (7,4,'20172016');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (8,22,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (9,23,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (10,24,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (11,5,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (12,25,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (13,26,'2016201520142013');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (14,27,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (15,28,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (16,29,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (17,30,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (18,31,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (19,32,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (20,33,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (21,34,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (22,3,'2017201620152014');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (23,35,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (24,36,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (25,37,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (26,38,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (27,39,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (28,6,'20142013');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (29,40,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (30,7,'2017');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (31,41,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (32,42,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (33,8,'2016');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (34,43,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (35,44,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (36,45,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (37,46,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (38,47,'2016');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (39,48,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (40,49,'20172015');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (41,50,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (42,51,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (43,52,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (44,53,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (45,54,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (46,55,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (47,56,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (48,9,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (49,57,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (50,10,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (51,58,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (52,59,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (53,60,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (54,61,'2017');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (55,62,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (56,63,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (57,64,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (58,65,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (59,66,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (60,67,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (61,68,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (62,69,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (63,11,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (64,70,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (65,71,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (66,72,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (67,73,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (68,74,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (69,75,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (70,12,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (71,13,'2017');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (72,76,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (73,77,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (74,78,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (75,79,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (76,80,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (77,81,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (78,82,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (79,83,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (80,84,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (81,85,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (82,86,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (83,87,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (84,88,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (85,90,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (86,91,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (87,92,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (88,93,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (89,94,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (90,95,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (91,96,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (92,97,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (93,98,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (94,99,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (95,100,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (96,102,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (97,103,'');
INSERT INTO `civicrm_value_custom_1` (`id`, `entity_id`, `playa_years_1`) VALUES (98,104,'');
/*!40000 ALTER TABLE `civicrm_value_custom_1` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_value_custom_1_after_insert after insert ON civicrm_value_custom_1 FOR EACH ROW BEGIN  
UPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.entity_id;


UPDATE civicrm_mailing SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.entity_id;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_value_custom_1_after_update after update ON civicrm_value_custom_1 FOR EACH ROW BEGIN  
UPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.entity_id;


UPDATE civicrm_mailing SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.entity_id;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`trevorbi_mycode`@`localhost`*/ /*!50003 TRIGGER civicrm_value_custom_1_after_delete after delete ON civicrm_value_custom_1 FOR EACH ROW BEGIN  
UPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = OLD.entity_id;


UPDATE civicrm_mailing SET modified_date = CURRENT_TIMESTAMP WHERE id = OLD.entity_id;
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

