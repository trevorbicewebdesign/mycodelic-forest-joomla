
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
DROP TABLE IF EXISTS `civicrm_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Event',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Event Title (e.g. Fall Fundraiser Dinner)',
  `summary` text COLLATE utf8_unicode_ci COMMENT 'Brief summary of event. Text and html allowed. Displayed on Event Registration form and can be used on other CMS pages which need an event summary.',
  `description` text COLLATE utf8_unicode_ci COMMENT 'Full description of event. Text and html allowed. Displayed on built-in Event Information screens.',
  `event_type_id` int(10) unsigned DEFAULT '0' COMMENT 'Event Type ID.Implicit FK to civicrm_option_value where option_group = event_type.',
  `participant_listing_id` int(10) unsigned DEFAULT '0' COMMENT 'Should we expose the participant list? Implicit FK to civicrm_option_value where option_group = participant_listing.',
  `is_public` tinyint(4) DEFAULT '1' COMMENT 'Public events will be included in the iCal feeds. Access to private event information may be limited using ACLs.',
  `start_date` datetime DEFAULT NULL COMMENT 'Date and time that event starts.',
  `end_date` datetime DEFAULT NULL COMMENT 'Date and time that event ends. May be NULL if no defined end date/time',
  `is_online_registration` tinyint(4) DEFAULT '0' COMMENT 'If true, include registration link on Event Info page.',
  `registration_link_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Text for link to Event Registration form which is displayed on Event Information screen when is_online_registration is true.',
  `registration_start_date` datetime DEFAULT NULL COMMENT 'Date and time that online registration starts.',
  `registration_end_date` datetime DEFAULT NULL COMMENT 'Date and time that online registration ends.',
  `max_participants` int(10) unsigned DEFAULT NULL COMMENT 'Maximum number of registered participants to allow. After max is reached, a custom Event Full message is displayed. If NULL, allow unlimited number of participants.',
  `event_full_text` text COLLATE utf8_unicode_ci COMMENT 'Message to display on Event Information page and INSTEAD OF Event Registration form if maximum participants are signed up. Can include email address/info about getting on a waiting list, etc. Text and html allowed.',
  `is_monetary` tinyint(4) DEFAULT '0' COMMENT 'If true, one or more fee amounts must be set and a Payment Processor must be configured for Online Event Registration.',
  `financial_type_id` int(10) unsigned DEFAULT NULL COMMENT 'Financial type assigned to paid event registrations for this event. Required if is_monetary is true.',
  `payment_processor` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Payment Processors configured for this Event (if is_monetary is true)',
  `is_map` tinyint(4) DEFAULT '0' COMMENT 'Include a map block on the Event Information page when geocode info is available and a mapping provider has been specified?',
  `is_active` tinyint(4) DEFAULT '0' COMMENT 'Is this Event enabled or disabled/cancelled?',
  `fee_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_show_location` tinyint(4) DEFAULT '1' COMMENT 'If true, show event location.',
  `loc_block_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Location Block ID',
  `default_role_id` int(10) unsigned DEFAULT '1' COMMENT 'Participant role ID. Implicit FK to civicrm_option_value where option_group = participant_role.',
  `intro_text` text COLLATE utf8_unicode_ci COMMENT 'Introductory message for Event Registration page. Text and html allowed. Displayed at the top of Event Registration form.',
  `footer_text` text COLLATE utf8_unicode_ci COMMENT 'Footer message for Event Registration page. Text and html allowed. Displayed at the bottom of Event Registration form.',
  `confirm_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title for Confirmation page.',
  `confirm_text` text COLLATE utf8_unicode_ci COMMENT 'Introductory message for Event Registration page. Text and html allowed. Displayed at the top of Event Registration form.',
  `confirm_footer_text` text COLLATE utf8_unicode_ci COMMENT 'Footer message for Event Registration page. Text and html allowed. Displayed at the bottom of Event Registration form.',
  `is_email_confirm` tinyint(4) DEFAULT '0' COMMENT 'If true, confirmation is automatically emailed to contact on successful registration.',
  `confirm_email_text` text COLLATE utf8_unicode_ci COMMENT 'text to include above standard event info on confirmation email. emails are text-only, so do not allow html for now',
  `confirm_from_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'FROM email name used for confirmation emails.',
  `confirm_from_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'FROM email address used for confirmation emails.',
  `cc_confirm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'comma-separated list of email addresses to cc each time a confirmation is sent',
  `bcc_confirm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'comma-separated list of email addresses to bcc each time a confirmation is sent',
  `default_fee_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_option_value.',
  `default_discount_fee_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_option_value.',
  `thankyou_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Title for ThankYou page.',
  `thankyou_text` text COLLATE utf8_unicode_ci COMMENT 'ThankYou Text.',
  `thankyou_footer_text` text COLLATE utf8_unicode_ci COMMENT 'Footer message.',
  `is_pay_later` tinyint(4) DEFAULT '0' COMMENT 'if true - allows the user to send payment directly to the org later',
  `pay_later_text` text COLLATE utf8_unicode_ci COMMENT 'The text displayed to the user in the main form',
  `pay_later_receipt` text COLLATE utf8_unicode_ci COMMENT 'The receipt sent to the user instead of the normal receipt text',
  `is_partial_payment` tinyint(4) DEFAULT '0' COMMENT 'is partial payment enabled for this event',
  `initial_amount_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Initial amount label for partial payment',
  `initial_amount_help_text` text COLLATE utf8_unicode_ci COMMENT 'Initial amount help text for partial payment',
  `min_initial_amount` decimal(20,2) DEFAULT NULL COMMENT 'Minimum initial amount for partial payment',
  `is_multiple_registrations` tinyint(4) DEFAULT '0' COMMENT 'if true - allows the user to register multiple participants for event',
  `max_additional_participants` int(10) unsigned DEFAULT '0' COMMENT 'Maximum number of additional participants that can be registered on a single booking',
  `allow_same_participant_emails` tinyint(4) DEFAULT '0' COMMENT 'if true - allows the user to register multiple registrations from same email address.',
  `has_waitlist` tinyint(4) DEFAULT NULL COMMENT 'Whether the event has waitlist support.',
  `requires_approval` tinyint(4) DEFAULT NULL COMMENT 'Whether participants require approval before they can finish registering.',
  `expiration_time` int(10) unsigned DEFAULT NULL COMMENT 'Expire pending but unconfirmed registrations after this many hours.',
  `allow_selfcancelxfer` tinyint(4) DEFAULT '0' COMMENT 'Allow self service cancellation or transfer for event?',
  `selfcancelxfer_time` int(10) unsigned DEFAULT '0' COMMENT 'Number of hours prior to event start date to allow self-service cancellation or transfer.',
  `waitlist_text` text COLLATE utf8_unicode_ci COMMENT 'Text to display when the event is full, but participants can signup for a waitlist.',
  `approval_req_text` text COLLATE utf8_unicode_ci COMMENT 'Text to display when the approval is required to complete registration for an event.',
  `is_template` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'whether the event has template',
  `template_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Event Template Title',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who created this event',
  `created_date` datetime DEFAULT NULL COMMENT 'Date and time that event was created.',
  `currency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '3 character string, value from config setting or input via user.',
  `campaign_id` int(10) unsigned DEFAULT NULL COMMENT 'The campaign for which this event has been created.',
  `is_share` tinyint(4) DEFAULT '1' COMMENT 'Can people share the event through social media?',
  `is_confirm_enabled` tinyint(4) DEFAULT '1' COMMENT 'If false, the event booking confirmation screen gets skipped',
  `parent_event_id` int(10) unsigned DEFAULT NULL COMMENT 'Implicit FK to civicrm_event: parent event',
  `slot_label_id` int(10) unsigned DEFAULT NULL COMMENT 'Subevent slot label. Implicit FK to civicrm_option_value where option_group = conference_slot.',
  `dedupe_rule_group_id` int(10) unsigned DEFAULT NULL COMMENT 'Rule to use when matching registrations for this event',
  `is_billing_required` tinyint(4) DEFAULT '0' COMMENT 'if true than billing block is required this event',
  PRIMARY KEY (`id`),
  KEY `index_event_type_id` (`event_type_id`),
  KEY `index_participant_listing_id` (`participant_listing_id`),
  KEY `index_parent_event_id` (`parent_event_id`),
  KEY `FK_civicrm_event_loc_block_id` (`loc_block_id`),
  KEY `FK_civicrm_event_created_id` (`created_id`),
  KEY `FK_civicrm_event_campaign_id` (`campaign_id`),
  KEY `FK_civicrm_event_dedupe_rule_group_id` (`dedupe_rule_group_id`),
  CONSTRAINT `FK_civicrm_event_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `civicrm_campaign` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_event_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_event_dedupe_rule_group_id` FOREIGN KEY (`dedupe_rule_group_id`) REFERENCES `civicrm_dedupe_rule_group` (`id`),
  CONSTRAINT `FK_civicrm_event_loc_block_id` FOREIGN KEY (`loc_block_id`) REFERENCES `civicrm_loc_block` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_event` WRITE;
/*!40000 ALTER TABLE `civicrm_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_event` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

