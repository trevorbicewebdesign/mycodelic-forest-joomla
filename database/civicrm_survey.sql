
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
DROP TABLE IF EXISTS `civicrm_survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_survey` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Survey id.',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Title of the Survey.',
  `campaign_id` int(10) unsigned DEFAULT NULL COMMENT 'Foreign key to the Campaign.',
  `activity_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Implicit FK to civicrm_option_value where option_group = activity_type',
  `recontact_interval` text COLLATE utf8_unicode_ci COMMENT 'Recontact intervals for each status.',
  `instructions` text COLLATE utf8_unicode_ci COMMENT 'Script instructions for volunteers to use for the survey.',
  `release_frequency` int(10) unsigned DEFAULT NULL COMMENT 'Number of days for recurrence of release.',
  `max_number_of_contacts` int(10) unsigned DEFAULT NULL COMMENT 'Maximum number of contacts to allow for survey.',
  `default_number_of_contacts` int(10) unsigned DEFAULT NULL COMMENT 'Default number of contacts to allow for survey.',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this survey enabled or disabled/cancelled?',
  `is_default` tinyint(4) DEFAULT '0' COMMENT 'Is this default survey?',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who created this Survey.',
  `created_date` datetime DEFAULT NULL COMMENT 'Date and time that Survey was created.',
  `last_modified_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who recently edited this Survey.',
  `last_modified_date` datetime DEFAULT NULL COMMENT 'Date and time that Survey was edited last time.',
  `result_id` int(10) unsigned DEFAULT NULL COMMENT 'Used to store option group id.',
  `bypass_confirm` tinyint(4) DEFAULT '0' COMMENT 'Bypass the email verification.',
  `thankyou_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title for Thank-you page (header title tag, and display at the top of the page).',
  `thankyou_text` text COLLATE utf8_unicode_ci COMMENT 'text and html allowed. displayed above result on success page',
  `is_share` tinyint(4) DEFAULT '1' COMMENT 'Can people share the petition through social media?',
  PRIMARY KEY (`id`),
  KEY `UI_activity_type_id` (`activity_type_id`),
  KEY `FK_civicrm_survey_campaign_id` (`campaign_id`),
  KEY `FK_civicrm_survey_created_id` (`created_id`),
  KEY `FK_civicrm_survey_last_modified_id` (`last_modified_id`),
  CONSTRAINT `FK_civicrm_survey_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `civicrm_campaign` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_survey_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_survey_last_modified_id` FOREIGN KEY (`last_modified_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_survey` WRITE;
/*!40000 ALTER TABLE `civicrm_survey` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_survey` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

