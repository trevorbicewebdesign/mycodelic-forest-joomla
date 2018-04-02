
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
DROP TABLE IF EXISTS `civicrm_uf_match`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_uf_match` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'System generated ID.',
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Which Domain is this match entry for',
  `uf_id` int(10) unsigned NOT NULL COMMENT 'UF ID',
  `uf_name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'UF Name',
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID',
  `language` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'UI language preferred by the given user/contact',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_uf_name_domain_id` (`uf_name`,`domain_id`),
  UNIQUE KEY `UI_contact_domain_id` (`contact_id`,`domain_id`),
  KEY `I_civicrm_uf_match_uf_id` (`uf_id`),
  KEY `FK_civicrm_uf_match_domain_id` (`domain_id`),
  CONSTRAINT `FK_civicrm_uf_match_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_uf_match_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_uf_match` WRITE;
/*!40000 ALTER TABLE `civicrm_uf_match` DISABLE KEYS */;
INSERT INTO `civicrm_uf_match` (`id`, `domain_id`, `uf_id`, `uf_name`, `contact_id`, `language`) VALUES (1,1,43,'trevor.bice@burningman.org',2,'en_US');
INSERT INTO `civicrm_uf_match` (`id`, `domain_id`, `uf_id`, `uf_name`, `contact_id`, `language`) VALUES (2,1,77,'rachaelkfales@gmail.com',3,NULL);
INSERT INTO `civicrm_uf_match` (`id`, `domain_id`, `uf_id`, `uf_name`, `contact_id`, `language`) VALUES (4,1,71,'sanmannor@gmail.com',11,NULL);
INSERT INTO `civicrm_uf_match` (`id`, `domain_id`, `uf_id`, `uf_name`, `contact_id`, `language`) VALUES (5,1,80,'kate.benediktsson@gmail.com',4,NULL);
INSERT INTO `civicrm_uf_match` (`id`, `domain_id`, `uf_id`, `uf_name`, `contact_id`, `language`) VALUES (6,1,1610,'cronjob@mycodelicforest.org',89,NULL);
INSERT INTO `civicrm_uf_match` (`id`, `domain_id`, `uf_id`, `uf_name`, `contact_id`, `language`) VALUES (7,1,73,'davidRC707@gmail.com',26,NULL);
/*!40000 ALTER TABLE `civicrm_uf_match` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

