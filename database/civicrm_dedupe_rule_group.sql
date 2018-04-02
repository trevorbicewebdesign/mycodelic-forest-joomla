
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
DROP TABLE IF EXISTS `civicrm_dedupe_rule_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_dedupe_rule_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique dedupe rule group id',
  `contact_type` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The type of contacts this group applies to',
  `threshold` int(11) NOT NULL COMMENT 'The weight threshold the sum of the rule weights has to cross to consider two contacts the same',
  `used` varchar(12) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Whether the rule should be used for cases where usage is Unsupervised, Supervised OR General(programatically)',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of the rule group',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Label of the rule group',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this a reserved rule - a rule group that has been optimized and cannot be changed by the admin',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_dedupe_rule_group` WRITE;
/*!40000 ALTER TABLE `civicrm_dedupe_rule_group` DISABLE KEYS */;
INSERT INTO `civicrm_dedupe_rule_group` (`id`, `contact_type`, `threshold`, `used`, `name`, `title`, `is_reserved`) VALUES (1,'Individual',20,'Supervised','IndividualSupervised','Name and Email (reserved)',1);
INSERT INTO `civicrm_dedupe_rule_group` (`id`, `contact_type`, `threshold`, `used`, `name`, `title`, `is_reserved`) VALUES (2,'Organization',10,'Supervised','OrganizationSupervised','Name and Email',0);
INSERT INTO `civicrm_dedupe_rule_group` (`id`, `contact_type`, `threshold`, `used`, `name`, `title`, `is_reserved`) VALUES (3,'Household',10,'Supervised','HouseholdSupervised','Name and Email',0);
INSERT INTO `civicrm_dedupe_rule_group` (`id`, `contact_type`, `threshold`, `used`, `name`, `title`, `is_reserved`) VALUES (4,'Individual',10,'Unsupervised','IndividualUnsupervised','Email (reserved)',1);
INSERT INTO `civicrm_dedupe_rule_group` (`id`, `contact_type`, `threshold`, `used`, `name`, `title`, `is_reserved`) VALUES (5,'Organization',10,'Unsupervised','OrganizationUnsupervised','Name and Email',0);
INSERT INTO `civicrm_dedupe_rule_group` (`id`, `contact_type`, `threshold`, `used`, `name`, `title`, `is_reserved`) VALUES (6,'Household',10,'Unsupervised','HouseholdUnsupervised','Name and Email',0);
INSERT INTO `civicrm_dedupe_rule_group` (`id`, `contact_type`, `threshold`, `used`, `name`, `title`, `is_reserved`) VALUES (7,'Individual',15,'General','IndividualGeneral','Name and Address (reserved)',1);
/*!40000 ALTER TABLE `civicrm_dedupe_rule_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

