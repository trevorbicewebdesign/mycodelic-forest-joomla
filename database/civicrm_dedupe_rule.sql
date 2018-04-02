
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
DROP TABLE IF EXISTS `civicrm_dedupe_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_dedupe_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique dedupe rule id',
  `dedupe_rule_group_id` int(10) unsigned NOT NULL COMMENT 'The id of the rule group this rule belongs to',
  `rule_table` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the table this rule is about',
  `rule_field` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the field of the table referenced in rule_table',
  `rule_length` int(10) unsigned DEFAULT NULL COMMENT 'The length of the matching substring',
  `rule_weight` int(11) NOT NULL COMMENT 'The weight of the rule',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_dedupe_rule_dedupe_rule_group_id` (`dedupe_rule_group_id`),
  CONSTRAINT `FK_civicrm_dedupe_rule_dedupe_rule_group_id` FOREIGN KEY (`dedupe_rule_group_id`) REFERENCES `civicrm_dedupe_rule_group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_dedupe_rule` WRITE;
/*!40000 ALTER TABLE `civicrm_dedupe_rule` DISABLE KEYS */;
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (1,1,'civicrm_contact','first_name',NULL,5);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (2,1,'civicrm_contact','last_name',NULL,7);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (3,1,'civicrm_email','email',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (4,2,'civicrm_contact','organization_name',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (5,2,'civicrm_email','email',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (6,3,'civicrm_contact','household_name',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (7,3,'civicrm_email','email',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (8,4,'civicrm_email','email',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (9,5,'civicrm_contact','organization_name',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (10,5,'civicrm_email','email',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (11,6,'civicrm_contact','household_name',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (12,6,'civicrm_email','email',NULL,10);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (13,7,'civicrm_contact','first_name',NULL,5);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (14,7,'civicrm_contact','last_name',NULL,5);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (15,7,'civicrm_address','street_address',NULL,5);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (16,7,'civicrm_contact','middle_name',NULL,1);
INSERT INTO `civicrm_dedupe_rule` (`id`, `dedupe_rule_group_id`, `rule_table`, `rule_field`, `rule_length`, `rule_weight`) VALUES (17,7,'civicrm_contact','suffix_id',NULL,1);
/*!40000 ALTER TABLE `civicrm_dedupe_rule` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

