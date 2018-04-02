
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
DROP TABLE IF EXISTS `civicrm_case_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_case_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Autoincremented type id',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Machine name for Case Type',
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Natural language name for Case Type',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description of the Case Type',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this entry active?',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this case type a predefined system type?',
  `weight` int(11) NOT NULL DEFAULT '1' COMMENT 'Ordering of the case types',
  `definition` blob COMMENT 'xml definition of case type',
  PRIMARY KEY (`id`),
  UNIQUE KEY `case_type_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_case_type` WRITE;
/*!40000 ALTER TABLE `civicrm_case_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_case_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

