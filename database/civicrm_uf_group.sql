
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
DROP TABLE IF EXISTS `civicrm_uf_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_uf_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique table ID',
  `is_active` tinyint(4) DEFAULT '1' COMMENT 'Is this form currently active? If false, hide all related fields for all sharing contexts.',
  `group_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'This column will store a comma separated list of the type(s) of profile fields.',
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Form title.',
  `description` text COLLATE utf8_unicode_ci COMMENT 'Optional verbose description of the profile.',
  `help_pre` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display before fields in form.',
  `help_post` text COLLATE utf8_unicode_ci COMMENT 'Description and/or help text to display after fields in form.',
  `limit_listings_group_id` int(10) unsigned DEFAULT NULL COMMENT 'Group id, foreign key from civicrm_group',
  `post_URL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Redirect to URL.',
  `add_to_group_id` int(10) unsigned DEFAULT NULL COMMENT 'foreign key to civicrm_group_id',
  `add_captcha` tinyint(4) DEFAULT '0' COMMENT 'Should a CAPTCHA widget be included this Profile form.',
  `is_map` tinyint(4) DEFAULT '0' COMMENT 'Do we want to map results from this profile.',
  `is_edit_link` tinyint(4) DEFAULT '0' COMMENT 'Should edit link display in profile selector',
  `is_uf_link` tinyint(4) DEFAULT '0' COMMENT 'Should we display a link to the website profile in profile selector',
  `is_update_dupe` tinyint(4) DEFAULT '0' COMMENT 'Should we update the contact record if we find a duplicate',
  `cancel_URL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Redirect to URL when Cancle button clik .',
  `is_cms_user` tinyint(4) DEFAULT '0' COMMENT 'Should we create a cms user for this profile ',
  `notify` text COLLATE utf8_unicode_ci,
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this group reserved for use by some other CiviCRM functionality?',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of the UF group for directly addressing it in the codebase',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who created this UF group',
  `created_date` datetime DEFAULT NULL COMMENT 'Date and time this UF group was created.',
  `is_proximity_search` tinyint(4) DEFAULT '0' COMMENT 'Should we include proximity search feature in this profile search form?',
  `cancel_button_text` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Custom Text to display on the Cancel button when used in create or edit mode',
  `submit_button_text` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Custom Text to display on the submit button on profile edit/create screens',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`),
  KEY `FK_civicrm_uf_group_limit_listings_group_id` (`limit_listings_group_id`),
  KEY `FK_civicrm_uf_group_add_to_group_id` (`add_to_group_id`),
  KEY `FK_civicrm_uf_group_created_id` (`created_id`),
  CONSTRAINT `FK_civicrm_uf_group_add_to_group_id` FOREIGN KEY (`add_to_group_id`) REFERENCES `civicrm_group` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_uf_group_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_uf_group_limit_listings_group_id` FOREIGN KEY (`limit_listings_group_id`) REFERENCES `civicrm_group` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_uf_group` WRITE;
/*!40000 ALTER TABLE `civicrm_uf_group` DISABLE KEYS */;
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (1,1,'Individual,Contact','Name and Address',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,0,'name_and_address',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (2,1,'Individual,Contact','Supporter Profile',NULL,NULL,'<p><strong>The information you provide will NOT be shared with any third party organisations.</strong></p><p>Thank you for getting involved in our campaign!</p>',NULL,NULL,NULL,0,0,0,0,0,NULL,2,NULL,0,'supporter_profile',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (3,1,'Participant','Participant Status',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'participant_status',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (4,1,'Individual,Contact','New Individual',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'new_individual',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (5,1,'Organization,Contact','New Organization',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'new_organization',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (6,1,'Household,Contact','New Household',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'new_household',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (7,1,'Contact','Summary Overlay',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'summary_overlay',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (8,1,'Contact','Shared Address',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'shared_address',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (9,1,'Contact,Organization','On Behalf Of Organization',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'on_behalf_organization',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (10,1,'Contribution','Contribution Bulk Entry',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'contribution_batch_entry',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (11,1,'Membership','Membership Bulk Entry',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'membership_batch_entry',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (12,1,'Individual,Contact','Your Registration Info',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,0,'event_registration',NULL,NULL,0,NULL,NULL);
INSERT INTO `civicrm_uf_group` (`id`, `is_active`, `group_type`, `title`, `description`, `help_pre`, `help_post`, `limit_listings_group_id`, `post_URL`, `add_to_group_id`, `add_captcha`, `is_map`, `is_edit_link`, `is_uf_link`, `is_update_dupe`, `cancel_URL`, `is_cms_user`, `notify`, `is_reserved`, `name`, `created_id`, `created_date`, `is_proximity_search`, `cancel_button_text`, `submit_button_text`) VALUES (13,1,'Individual,Contact','Honoree Individual',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,NULL,0,NULL,1,'honoree_individual',NULL,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `civicrm_uf_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

