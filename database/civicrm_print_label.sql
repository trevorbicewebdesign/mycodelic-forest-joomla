
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
DROP TABLE IF EXISTS `civicrm_print_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_print_label` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'User title for for this label layout',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'variable name/programmatic handle for this field.',
  `description` text COLLATE utf8_unicode_ci COMMENT 'Description of this label layout',
  `label_format_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'This refers to name column of civicrm_option_value row in name_badge option group',
  `label_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Implicit FK to civicrm_option_value row in NEW label_type option group',
  `data` longtext COLLATE utf8_unicode_ci COMMENT 'contains json encode configurations options',
  `is_default` tinyint(4) DEFAULT '1' COMMENT 'Is this default?',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this option active?',
  `is_reserved` tinyint(4) DEFAULT '1' COMMENT 'Is this reserved label?',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who created this label layout',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_print_label_created_id` (`created_id`),
  CONSTRAINT `FK_civicrm_print_label_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_print_label` WRITE;
/*!40000 ALTER TABLE `civicrm_print_label` DISABLE KEYS */;
INSERT INTO `civicrm_print_label` (`id`, `title`, `name`, `description`, `label_format_name`, `label_type_id`, `data`, `is_default`, `is_active`, `is_reserved`, `created_id`) VALUES (1,'Annual Conference Hanging Badge (Avery 5395)','Annual_Conference_Hanging_Badge','For our annual conference','Avery 5395',1,'{\"title\":\"Annual Conference Hanging Badge (Avery 5395)\",\"label_format_name\":\"Avery 5395\",\"description\":\"For our annual conference\",\"token\":{\"1\":\"{event.title}\",\"2\":\"{contact.display_name}\",\"3\":\"{contact.current_employer}\",\"4\":\"{event.start_date}\"},\"font_name\":{\"1\":\"dejavusans\",\"2\":\"dejavusans\",\"3\":\"dejavusans\",\"4\":\"dejavusans\"},\"font_size\":{\"1\":\"9\",\"2\":\"20\",\"3\":\"15\",\"4\":\"9\"},\"font_style\":{\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\"},\"text_alignment\":{\"1\":\"L\",\"2\":\"C\",\"3\":\"C\",\"4\":\"R\"},\"barcode_type\":\"barcode\",\"barcode_alignment\":\"R\",\"image_1\":\"\",\"image_2\":\"\",\"is_default\":\"1\",\"is_active\":\"1\",\"is_reserved\":\"1\",\"_qf_default\":\"Layout:next\",\"_qf_Layout_refresh\":\"Save and Preview\"}',1,1,1,NULL);
/*!40000 ALTER TABLE `civicrm_print_label` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

