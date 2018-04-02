
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
DROP TABLE IF EXISTS `civicrm_price_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_price_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Price Field',
  `price_set_id` int(10) unsigned NOT NULL COMMENT 'FK to civicrm_price_set',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Variable name/programmatic handle for this field.',
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Text for form field label (also friendly name for administering this field).',
  `html_type` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `is_enter_qty` tinyint(4) DEFAULT '0' COMMENT 'Enter a quantity for this field?',
  `help_pre` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display before this field.',
  `help_post` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display after this field.',
  `weight` int(11) DEFAULT '1' COMMENT 'Order in which the fields should appear',
  `is_display_amounts` tinyint(4) DEFAULT '1' COMMENT 'Should the price be displayed next to the label for each option?',
  `options_per_line` int(10) unsigned DEFAULT '1' COMMENT 'number of options per line for checkbox and radio',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this price field active',
  `is_required` tinyint(4) DEFAULT '1' COMMENT 'Is this price field required (value must be > 1)',
  `active_on` datetime DEFAULT NULL COMMENT 'If non-zero, do not show this field before the date specified',
  `expire_on` datetime DEFAULT NULL COMMENT 'If non-zero, do not show this field after the date specified',
  `javascript` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional scripting attributes for field',
  `visibility_id` int(10) unsigned DEFAULT '1' COMMENT 'Implicit FK to civicrm_option_group with name = ''visibility''',
  PRIMARY KEY (`id`),
  KEY `index_name` (`name`),
  KEY `FK_civicrm_price_field_price_set_id` (`price_set_id`),
  CONSTRAINT `FK_civicrm_price_field_price_set_id` FOREIGN KEY (`price_set_id`) REFERENCES `civicrm_price_set` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_price_field` WRITE;
/*!40000 ALTER TABLE `civicrm_price_field` DISABLE KEYS */;
INSERT INTO `civicrm_price_field` (`id`, `price_set_id`, `name`, `label`, `html_type`, `is_enter_qty`, `help_pre`, `help_post`, `weight`, `is_display_amounts`, `options_per_line`, `is_active`, `is_required`, `active_on`, `expire_on`, `javascript`, `visibility_id`) VALUES (1,1,'contribution_amount','Contribution Amount','Text',0,NULL,NULL,1,1,1,1,1,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `civicrm_price_field` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

