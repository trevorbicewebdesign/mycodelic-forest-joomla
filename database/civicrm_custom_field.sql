
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
DROP TABLE IF EXISTS `civicrm_custom_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_custom_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Custom Field ID',
  `custom_group_id` int(10) unsigned NOT NULL COMMENT 'FK to civicrm_custom_group.',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Variable name/programmatic handle for this group.',
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Text for form field label (also friendly name for administering this custom property).',
  `data_type` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Controls location of data storage in extended_data table.',
  `html_type` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'HTML types plus several built-in extended types.',
  `default_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Use form_options.is_default for field_types which use options.',
  `is_required` tinyint(4) DEFAULT NULL COMMENT 'Is a value required for this property.',
  `is_searchable` tinyint(4) DEFAULT NULL COMMENT 'Is this property searchable.',
  `is_search_range` tinyint(4) DEFAULT '0' COMMENT 'Is this property range searchable.',
  `weight` int(11) NOT NULL DEFAULT '1' COMMENT 'Controls field display order within an extended property group.',
  `help_pre` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display before this field.',
  `help_post` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display after this field.',
  `mask` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional format instructions for specific field types, like date types.',
  `attributes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Store collection of type-appropriate attributes, e.g. textarea  needs rows/cols attributes',
  `javascript` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional scripting attributes for field.',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this property active?',
  `is_view` tinyint(4) DEFAULT NULL COMMENT 'Is this property set by PHP Code? A code field is viewable but not editable',
  `options_per_line` int(10) unsigned DEFAULT NULL COMMENT 'number of options per line for checkbox and radio',
  `text_length` int(10) unsigned DEFAULT NULL COMMENT 'field length if alphanumeric',
  `start_date_years` int(11) DEFAULT NULL COMMENT 'Date may be up to start_date_years years prior to the current date.',
  `end_date_years` int(11) DEFAULT NULL COMMENT 'Date may be up to end_date_years years after the current date.',
  `date_format` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'date format for custom date',
  `time_format` int(10) unsigned DEFAULT NULL COMMENT 'time format for custom date',
  `note_columns` int(10) unsigned DEFAULT NULL COMMENT ' Number of columns in Note Field ',
  `note_rows` int(10) unsigned DEFAULT NULL COMMENT ' Number of rows in Note Field ',
  `column_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of the column that holds the values for this field.',
  `option_group_id` int(10) unsigned DEFAULT NULL COMMENT 'For elements with options, the option group id that is used',
  `filter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Stores Contact Get API params contact reference custom fields. May be used for other filters in the future.',
  `in_selector` tinyint(4) DEFAULT '0' COMMENT 'Should the multi-record custom field values be displayed in tab table listing',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_label_custom_group_id` (`label`,`custom_group_id`),
  UNIQUE KEY `UI_name_custom_group_id` (`name`,`custom_group_id`),
  KEY `FK_civicrm_custom_field_custom_group_id` (`custom_group_id`),
  CONSTRAINT `FK_civicrm_custom_field_custom_group_id` FOREIGN KEY (`custom_group_id`) REFERENCES `civicrm_custom_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_custom_field` WRITE;
/*!40000 ALTER TABLE `civicrm_custom_field` DISABLE KEYS */;
INSERT INTO `civicrm_custom_field` (`id`, `custom_group_id`, `name`, `label`, `data_type`, `html_type`, `default_value`, `is_required`, `is_searchable`, `is_search_range`, `weight`, `help_pre`, `help_post`, `mask`, `attributes`, `javascript`, `is_active`, `is_view`, `options_per_line`, `text_length`, `start_date_years`, `end_date_years`, `date_format`, `time_format`, `note_columns`, `note_rows`, `column_name`, `option_group_id`, `filter`, `in_selector`) VALUES (1,1,'Playa_Years','Playa Years','String','CheckBox',NULL,0,0,0,1,NULL,NULL,NULL,NULL,NULL,1,0,NULL,255,NULL,NULL,NULL,NULL,60,4,'playa_years_1',94,NULL,0);
/*!40000 ALTER TABLE `civicrm_custom_field` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

