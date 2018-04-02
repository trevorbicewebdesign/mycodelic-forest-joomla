
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
DROP TABLE IF EXISTS `civicrm_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_note` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Note ID',
  `entity_table` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of table where item being referenced is stored.',
  `entity_id` int(10) unsigned NOT NULL COMMENT 'Foreign key to the referenced item.',
  `note` text COLLATE utf8_unicode_ci COMMENT 'Note and/or Comment.',
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID creator',
  `modified_date` date DEFAULT NULL COMMENT 'When was this note last modified/edited',
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'subject of note description',
  `privacy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Foreign Key to Note Privacy Level (which is an option value pair and hence an implicit FK)',
  PRIMARY KEY (`id`),
  KEY `index_entity` (`entity_table`,`entity_id`),
  KEY `FK_civicrm_note_contact_id` (`contact_id`),
  CONSTRAINT `FK_civicrm_note_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_note` WRITE;
/*!40000 ALTER TABLE `civicrm_note` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_note` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

