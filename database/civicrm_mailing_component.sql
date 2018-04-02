
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
DROP TABLE IF EXISTS `civicrm_mailing_component`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_mailing_component` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The name of this component',
  `component_type` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Type of Component.',
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body_html` text COLLATE utf8_unicode_ci COMMENT 'Body of the component in html format.',
  `body_text` text COLLATE utf8_unicode_ci COMMENT 'Body of the component in text format.',
  `is_default` tinyint(4) DEFAULT '0' COMMENT 'Is this the default component for this component_type?',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this property active?',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_mailing_component` WRITE;
/*!40000 ALTER TABLE `civicrm_mailing_component` DISABLE KEYS */;
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (1,'Mailing Header','Header','Descriptive Title for this Header','Sample Header for HTML formatted content.','Sample Header for TEXT formatted content.',1,1);
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (2,'Mailing Footer','Footer','Descriptive Title for this Footer.','Sample Footer for HTML formatted content<br/><a href=\"{action.optOutUrl}\">Unsubscribe</a>  <br/> {domain.address}','to unsubscribe: {action.optOutUrl}\n{domain.address}',1,1);
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (3,'Subscribe Message','Subscribe','Subscription Confirmation Request','You have a pending subscription to the {subscribe.group} mailing list. To confirm this subscription, reply to this email or click <a href=\"{subscribe.url}\">here</a>.','You have a pending subscription to the {subscribe.group} mailing list. To confirm this subscription, reply to this email or click on this link: {subscribe.url}',1,1);
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (4,'Welcome Message','Welcome','Your Subscription has been Activated','Welcome. Your subscription to the {welcome.group} mailing list has been activated.','Welcome. Your subscription to the {welcome.group} mailing list has been activated.',1,1);
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (5,'Unsubscribe Message','Unsubscribe','Un-subscribe Confirmation','You have been un-subscribed from the following groups: {unsubscribe.group}. You can re-subscribe by mailing {action.resubscribe} or clicking <a href=\"{action.resubscribeUrl}\">here</a>.','You have been un-subscribed from the following groups: {unsubscribe.group}. You can re-subscribe by mailing {action.resubscribe} or clicking ',1,1);
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (6,'Resubscribe Message','Resubscribe','Re-subscribe Confirmation','You have been re-subscribed to the following groups: {resubscribe.group}. You can un-subscribe by mailing {action.unsubscribe} or clicking <a href=\"{action.unsubscribeUrl}\">here</a>.','You have been re-subscribed to the following groups: {resubscribe.group}. You can un-subscribe by mailing {action.unsubscribe} or clicking {action.unsubscribeUrl}',1,1);
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (7,'Opt-out Message','OptOut','Opt-out Confirmation','Your email address has been removed from {domain.name} mailing lists.','Your email address has been removed from {domain.name} mailing lists.',1,1);
INSERT INTO `civicrm_mailing_component` (`id`, `name`, `component_type`, `subject`, `body_html`, `body_text`, `is_default`, `is_active`) VALUES (8,'Auto-responder','Reply','Please Send Inquiries to Our Contact Email Address','This is an automated reply from an un-attended mailbox. Please send any inquiries to the contact email address listed on our web-site.','This is an automated reply from an un-attended mailbox. Please send any inquiries to the contact email address listed on our web-site.',1,1);
/*!40000 ALTER TABLE `civicrm_mailing_component` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

