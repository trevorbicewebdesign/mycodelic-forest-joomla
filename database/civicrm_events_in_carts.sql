
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
DROP TABLE IF EXISTS `civicrm_events_in_carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_events_in_carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Event In Cart Id',
  `event_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Event ID',
  `event_cart_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Event Cart ID',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_events_in_carts_event_id` (`event_id`),
  KEY `FK_civicrm_events_in_carts_event_cart_id` (`event_cart_id`),
  CONSTRAINT `FK_civicrm_events_in_carts_event_cart_id` FOREIGN KEY (`event_cart_id`) REFERENCES `civicrm_event_carts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_events_in_carts_event_id` FOREIGN KEY (`event_id`) REFERENCES `civicrm_event` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_events_in_carts` WRITE;
/*!40000 ALTER TABLE `civicrm_events_in_carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_events_in_carts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

