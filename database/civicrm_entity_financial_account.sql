
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
DROP TABLE IF EXISTS `civicrm_entity_financial_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_entity_financial_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Links to an entity_table like civicrm_financial_type',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'Links to an id in the entity_table, such as vid in civicrm_financial_type',
  `account_relationship` int(10) unsigned NOT NULL COMMENT 'FK to a new civicrm_option_value (account_relationship)',
  `financial_account_id` int(10) unsigned NOT NULL COMMENT 'FK to the financial_account_id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_entity_id_entity_table_account_relationship` (`entity_id`,`entity_table`,`account_relationship`),
  KEY `FK_civicrm_entity_financial_account_financial_account_id` (`financial_account_id`),
  CONSTRAINT `FK_civicrm_entity_financial_account_financial_account_id` FOREIGN KEY (`financial_account_id`) REFERENCES `civicrm_financial_account` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_entity_financial_account` WRITE;
/*!40000 ALTER TABLE `civicrm_entity_financial_account` DISABLE KEYS */;
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (1,'civicrm_financial_type',1,1,1);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (2,'civicrm_financial_type',1,5,5);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (3,'civicrm_financial_type',1,3,7);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (4,'civicrm_financial_type',1,7,9);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (5,'civicrm_financial_type',2,1,2);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (6,'civicrm_financial_type',2,5,5);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (7,'civicrm_financial_type',2,3,7);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (8,'civicrm_financial_type',2,7,9);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (9,'civicrm_financial_type',2,12,14);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (10,'civicrm_financial_type',3,1,3);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (11,'civicrm_financial_type',3,5,5);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (12,'civicrm_financial_type',3,3,7);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (13,'civicrm_financial_type',3,7,9);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (14,'civicrm_financial_type',4,5,5);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (15,'civicrm_financial_type',4,3,7);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (16,'civicrm_financial_type',4,1,4);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (17,'civicrm_financial_type',4,12,13);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (18,'civicrm_financial_type',4,7,9);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (19,'civicrm_option_value',92,6,6);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (20,'civicrm_option_value',93,6,6);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (21,'civicrm_option_value',94,6,6);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (22,'civicrm_option_value',90,6,12);
INSERT INTO `civicrm_entity_financial_account` (`id`, `entity_table`, `entity_id`, `account_relationship`, `financial_account_id`) VALUES (23,'civicrm_option_value',91,6,12);
/*!40000 ALTER TABLE `civicrm_entity_financial_account` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

