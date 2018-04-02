
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
DROP TABLE IF EXISTS `civicrm_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Job Id',
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Which Domain is this scheduled job for',
  `run_frequency` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'Daily' COMMENT 'Scheduled job run frequency.',
  `last_run` timestamp NULL DEFAULT NULL COMMENT 'When was this cron entry last run',
  `scheduled_run_date` timestamp NULL DEFAULT NULL COMMENT 'When is this cron entry scheduled to run',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title of the job',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description of the job',
  `api_entity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Entity of the job api call',
  `api_action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Action of the job api call',
  `parameters` text COLLATE utf8_unicode_ci COMMENT 'List of parameters to the command.',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this job active?',
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_job_domain_id` (`domain_id`),
  CONSTRAINT `FK_civicrm_job_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_job` WRITE;
/*!40000 ALTER TABLE `civicrm_job` DISABLE KEYS */;
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (1,1,'Daily','2018-04-01 22:48:02',NULL,'CiviCRM Update Check','Checks for CiviCRM version updates. Important for keeping the database secure. Also sends anonymous usage statistics to civicrm.org to to assist in prioritizing ongoing development efforts.','job','version_check',NULL,1);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (2,1,'Always','2018-04-02 03:23:01',NULL,'Send Scheduled Mailings','Sends out scheduled CiviMail mailings','Job','process_mailing','',1);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (3,1,'Hourly',NULL,NULL,'Fetch Bounces','Fetches bounces from mailings and writes them to mailing statistics','job','fetch_bounces',NULL,0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (4,1,'Hourly',NULL,NULL,'Process Inbound Emails','Inserts activity for a contact or a case by retrieving inbound emails from a mail directory','job','fetch_activities',NULL,0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (5,1,'Daily',NULL,NULL,'Process Pledges','Updates pledge records and sends out reminders','job','process_pledge','send_reminders=[1 or 0] optional- 1 to send payment reminders',0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (6,1,'Daily',NULL,NULL,'Geocode and Parse Addresses','Retrieves geocodes (lat and long) and / or parses street addresses (populates street number, street name, etc.)','job','geocode','geocoding=[1 or 0] required\nparse=[1 or 0] required\nstart=[contact ID] optional-begin with this contact ID\nend=[contact ID] optional-process contacts with IDs less than this\nthrottle=[1 or 0] optional-1 adds five second sleep',0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (7,1,'Daily',NULL,NULL,'Update Greetings and Addressees','Goes through contact records and updates email and postal greetings, or addressee value','job','update_greeting','ct=[Individual or Household or Organization] required\ngt=[email_greeting or postal_greeting or addressee] required\nforce=[0 or 1] optional-0 update contacts with null value, 1 update all\nlimit=Number optional-Limit the number of contacts to update',0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (8,1,'Daily','2018-04-01 22:49:01',NULL,'Mail Reports','Generates and sends out reports via email','Job','mail_report','instanceId=[ID of report instance] required\r\nformat=[csv or print] optional-output CSV or print-friendly HTML, else PDF',1);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (9,1,'Daily','2018-04-01 06:18:01',NULL,'Send Scheduled Reminders','Sends out scheduled reminders via email','Job','send_reminder','',1);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (10,1,'Always',NULL,NULL,'Update Participant Statuses','Updates pending event participant statuses based on time','job','process_participant',NULL,0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (11,1,'Daily',NULL,NULL,'Update Membership Statuses','Updates membership statuses. WARNING: Membership renewal reminders have been migrated to the Schedule Reminders functionality, which supports multiple renewal reminders.','job','process_membership',NULL,0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (12,1,'Always',NULL,NULL,'Process Survey Respondents','Releases reserved survey respondents when they have been reserved for longer than the Release Frequency days specified for that survey.','job','process_respondent',NULL,0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (13,1,'Hourly',NULL,NULL,'Clean-up Temporary Data and Files','Removes temporary data and files, and clears old data from cache tables. Recommend running this job every hour to help prevent database and file system bloat.','job','cleanup',NULL,0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (14,1,'Always','2018-04-02 03:23:01',NULL,'Send Scheduled SMS','Sends out scheduled SMS','Job','process_sms','',1);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (15,1,'Always',NULL,NULL,'Rebuild Smart Group Cache','Rebuilds the smart group cache.','job','group_rebuild','limit=Number optional-Limit the number of smart groups rebuild',0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (16,1,'Daily',NULL,NULL,'Disable expired relationships','Disables relationships that have expired (ie. those relationships whose end date is in the past).','job','disable_expired_relationships',NULL,0);
INSERT INTO `civicrm_job` (`id`, `domain_id`, `run_frequency`, `last_run`, `scheduled_run_date`, `name`, `description`, `api_entity`, `api_action`, `parameters`, `is_active`) VALUES (17,1,'Daily',NULL,NULL,'Validate Email Address from Mailings.','Updates the reset_date on an email address to indicate that there was a valid delivery to this email address.','mailing','update_email_resetdate','minDays, maxDays=Consider mailings that have completed between minDays and maxDays',0);
/*!40000 ALTER TABLE `civicrm_job` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

