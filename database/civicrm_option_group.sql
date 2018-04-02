
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
DROP TABLE IF EXISTS `civicrm_option_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_option_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Option Group ID',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Option group name. Used as selection key by class properties which lookup options in civicrm_option_value.',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Option Group title.',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Option group description.',
  `data_type` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Option group description.',
  `is_reserved` tinyint(4) DEFAULT '1' COMMENT 'Is this a predefined system option group (i.e. it can not be deleted)?',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this option group active?',
  `is_locked` tinyint(4) DEFAULT NULL COMMENT 'A lock to remove the ability to add new options via the UI.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_option_group` WRITE;
/*!40000 ALTER TABLE `civicrm_option_group` DISABLE KEYS */;
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (1,'preferred_communication_method','Preferred Communication Method',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (2,'activity_type','Activity Type',NULL,'Integer',1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (3,'gender','Gender',NULL,'Integer',1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (4,'instant_messenger_service','Instant Messenger (IM) screen-names',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (5,'mobile_provider','Mobile Phone Providers',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (6,'individual_prefix','Individual contact prefixes',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (7,'individual_suffix','Individual contact suffixes',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (8,'acl_role','ACL Role',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (9,'accept_creditcard','Accepted Credit Cards',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (10,'payment_instrument','Payment Methods',NULL,'Integer',1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (11,'contribution_status','Contribution Status',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (12,'pcp_status','PCP Status',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (13,'pcp_owner_notify','PCP owner notifications',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (14,'participant_role','Participant Role',NULL,'Integer',1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (15,'event_type','Event Type',NULL,'Integer',1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (16,'contact_view_options','Contact View Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (17,'contact_smart_group_display','Contact Smart Group View Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (18,'contact_edit_options','Contact Edit Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (19,'advanced_search_options','Advanced Search Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (20,'user_dashboard_options','User Dashboard Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (21,'address_options','Addressing Options',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (22,'group_type','Group Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (23,'grant_status','Grant status',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (24,'grant_type','Grant Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (25,'custom_search','Custom Search',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (26,'activity_status','Activity Status',NULL,'Integer',1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (27,'case_type','Case Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (28,'case_status','Case Status',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (29,'participant_listing','Participant Listing',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (30,'safe_file_extension','Safe File Extension',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (31,'from_email_address','From Email Address',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (32,'mapping_type','Mapping Type',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (33,'wysiwyg_editor','WYSIWYG Editor',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (34,'recur_frequency_units','Recurring Frequency Units',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (35,'phone_type','Phone Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (36,'custom_data_type','Custom Data Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (37,'visibility','Visibility',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (38,'mail_protocol','Mail Protocol',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (39,'priority','Priority',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (40,'redaction_rule','Redaction Rule',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (41,'report_template','Report Template',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (42,'email_greeting','Email Greeting Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (43,'postal_greeting','Postal Greeting Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (44,'addressee','Addressee Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (45,'contact_autocomplete_options','Autocomplete Contact Search',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (46,'contact_reference_options','Contact Reference Autocomplete Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (47,'website_type','Website Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (48,'tag_used_for','Tag Used For',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (50,'event_badge','Event Name Badge',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (51,'note_privacy','Privacy levels for notes',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (52,'campaign_type','Campaign Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (53,'campaign_status','Campaign Status',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (54,'system_extensions','CiviCRM Extensions',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (55,'mail_approval_status','CiviMail Approval Status',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (56,'engagement_index','Engagement Index',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (57,'cg_extend_objects','Objects a custom group extends to',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (58,'paper_size','Paper Size',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (59,'pdf_format','PDF Page Format',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (60,'label_format','Mailing Label Format',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (61,'activity_contacts','Activity Contacts',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (62,'account_relationship','Account Relationship',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (63,'event_contacts','Event Recipients',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (64,'conference_slot','Conference Slot',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (65,'batch_type','Batch Type',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (66,'batch_mode','Batch Mode',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (67,'batch_status','Batch Status',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (68,'sms_api_type','Api Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (69,'sms_provider_name','Sms Provider Internal Name',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (70,'auto_renew_options','Auto Renew Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (71,'financial_account_type','Financial Account Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (72,'financial_item_status','Financial Item Status',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (73,'label_type','Label Type',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (74,'name_badge','Name Badge Format',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (75,'communication_style','Communication Style',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (76,'msg_mode','Message Mode',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (77,'contact_date_reminder_options','Contact Date Reminder Options',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (78,'wysiwyg_presets','WYSIWYG Editor Presets',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (79,'relative_date_filters','Relative Date Filters',NULL,NULL,1,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (80,'pledge_status','Pledge Status',NULL,NULL,1,1,1);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (81,'environment','Environment',NULL,NULL,0,1,0);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (82,'languages','Languages','List of Languages',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (83,'encounter_medium','Encounter Medium','Encounter medium for case activities (e.g. In Person, By Phone, etc.)',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (84,'msg_tpl_workflow_case','Message Template Workflow for Cases','Message Template Workflow for Cases',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (85,'msg_tpl_workflow_contribution','Message Template Workflow for Contributions','Message Template Workflow for Contributions',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (86,'msg_tpl_workflow_event','Message Template Workflow for Events','Message Template Workflow for Events',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (87,'msg_tpl_workflow_friend','Message Template Workflow for Tell-a-Friend','Message Template Workflow for Tell-a-Friend',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (88,'msg_tpl_workflow_membership','Message Template Workflow for Memberships','Message Template Workflow for Memberships',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (89,'msg_tpl_workflow_meta','Message Template Workflow for Meta Templates','Message Template Workflow for Meta Templates',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (90,'msg_tpl_workflow_pledge','Message Template Workflow for Pledges','Message Template Workflow for Pledges',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (91,'msg_tpl_workflow_uf','Message Template Workflow for Profiles','Message Template Workflow for Profiles',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (92,'msg_tpl_workflow_petition','Message Template Workflow for Petition','Message Template Workflow for Petition',NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (93,'soft_credit_type','Soft Credit Types',NULL,NULL,1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (94,'playa_years_20180128154143','Playa Years',NULL,'String',1,1,NULL);
INSERT INTO `civicrm_option_group` (`id`, `name`, `title`, `description`, `data_type`, `is_reserved`, `is_active`, `is_locked`) VALUES (97,'currencies_enabled','currencies_enabled',NULL,NULL,1,1,NULL);
/*!40000 ALTER TABLE `civicrm_option_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

