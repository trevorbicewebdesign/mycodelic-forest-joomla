
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
DROP TABLE IF EXISTS `civicrm_discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_discount` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'physical tablename for entity being joined to discount, e.g. civicrm_event',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'FK to entity table specified in entity_table column.',
  `price_set_id` int(10) unsigned NOT NULL COMMENT 'FK to civicrm_price_set',
  `start_date` date DEFAULT NULL COMMENT 'Date when discount starts.',
  `end_date` date DEFAULT NULL COMMENT 'Date when discount ends.',
  PRIMARY KEY (`id`),
  KEY `index_entity` (`entity_table`,`entity_id`),
  KEY `index_entity_option_id` (`entity_table`,`entity_id`,`price_set_id`),
  KEY `FK_civicrm_discount_price_set_id` (`price_set_id`),
  CONSTRAINT `FK_civicrm_discount_price_set_id` FOREIGN KEY (`price_set_id`) REFERENCES `civicrm_price_set` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_discount` WRITE;
/*!40000 ALTER TABLE `civicrm_discount` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_discount` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

