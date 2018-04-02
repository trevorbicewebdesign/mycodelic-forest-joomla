
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
DROP TABLE IF EXISTS `civicrm_payment_processor_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_payment_processor_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Payment Processor Type ID',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Payment Processor Name.',
  `title` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Payment Processor Name.',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Payment Processor Description.',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this processor active?',
  `is_default` tinyint(4) DEFAULT NULL COMMENT 'Is this processor the default?',
  `user_name_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_site_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_api_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_recur_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_button_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_site_test_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_api_test_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_recur_test_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_button_test_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_mode` int(10) unsigned NOT NULL COMMENT 'Billing Mode (deprecated)',
  `is_recur` tinyint(4) DEFAULT NULL COMMENT 'Can process recurring contributions',
  `payment_type` int(10) unsigned DEFAULT '1' COMMENT 'Payment Type: Credit or Debit (deprecated)',
  `payment_instrument_id` int(10) unsigned DEFAULT '1' COMMENT 'Payment Instrument ID',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_payment_processor_type` WRITE;
/*!40000 ALTER TABLE `civicrm_payment_processor_type` DISABLE KEYS */;
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (1,'PayPal_Standard','PayPal - Website Payments Standard',NULL,1,0,'Merchant Account Email',NULL,NULL,NULL,'Payment_PayPalImpl','https://www.paypal.com/',NULL,'https://www.paypal.com/',NULL,'https://www.sandbox.paypal.com/',NULL,'https://www.sandbox.paypal.com/',NULL,4,1,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (2,'PayPal','PayPal - Website Payments Pro',NULL,1,0,'User Name','Password','Signature',NULL,'Payment_PayPalImpl','https://www.paypal.com/','https://api-3t.paypal.com/','https://www.paypal.com/','https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif','https://www.sandbox.paypal.com/','https://api-3t.sandbox.paypal.com/','https://www.sandbox.paypal.com/','https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif',3,1,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (3,'PayPal_Express','PayPal - Express',NULL,1,0,'User Name','Password','Signature',NULL,'Payment_PayPalImpl','https://www.paypal.com/','https://api-3t.paypal.com/',NULL,'https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif','https://www.sandbox.paypal.com/','https://api-3t.sandbox.paypal.com/',NULL,'https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif',2,1,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (4,'AuthNet','Authorize.Net',NULL,1,0,'API Login','Payment Key','MD5 Hash',NULL,'Payment_AuthorizeNet','https://secure2.authorize.net/gateway/transact.dll',NULL,'https://api2.authorize.net/xml/v1/request.api',NULL,'https://test.authorize.net/gateway/transact.dll',NULL,'https://apitest.authorize.net/xml/v1/request.api',NULL,1,1,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (5,'PayJunction','PayJunction',NULL,1,0,'User Name','Password',NULL,NULL,'Payment_PayJunction','https://payjunction.com/quick_link',NULL,NULL,NULL,'https://www.payjunctionlabs.com/quick_link',NULL,NULL,NULL,1,1,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (6,'eWAY','eWAY (Single Currency)',NULL,1,0,'Customer ID',NULL,NULL,NULL,'Payment_eWAY','https://www.eway.com.au/gateway_cvn/xmlpayment.asp',NULL,NULL,NULL,'https://www.eway.com.au/gateway_cvn/xmltest/testpage.asp',NULL,NULL,NULL,1,0,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (7,'Payment_Express','DPS Payment Express',NULL,1,0,'User ID','Key','Mac Key - pxaccess only',NULL,'Payment_PaymentExpress','https://www.paymentexpress.com/pleaseenteraurl',NULL,NULL,NULL,'https://www.paymentexpress.com/pleaseenteratesturl',NULL,NULL,NULL,4,0,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (8,'Dummy','Dummy Payment Processor',NULL,1,1,'User Name',NULL,NULL,NULL,'Payment_Dummy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (9,'Elavon','Elavon Payment Processor','Elavon / Nova Virtual Merchant',1,0,'SSL Merchant ID ','SSL User ID','SSL PIN',NULL,'Payment_Elavon','https://www.myvirtualmerchant.com/VirtualMerchant/processxml.do',NULL,NULL,NULL,'https://www.myvirtualmerchant.com/VirtualMerchant/processxml.do',NULL,NULL,NULL,1,0,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (10,'Realex','Realex Payment',NULL,1,0,'Merchant ID','Password',NULL,'Account','Payment_Realex','https://epage.payandshop.com/epage.cgi',NULL,NULL,NULL,'https://epage.payandshop.com/epage-remote.cgi',NULL,NULL,NULL,1,0,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (11,'PayflowPro','PayflowPro',NULL,1,0,'Vendor ID','Password','Partner (merchant)','User','Payment_PayflowPro','https://Payflowpro.paypal.com',NULL,NULL,NULL,'https://pilot-Payflowpro.paypal.com',NULL,NULL,NULL,1,0,1,1);
INSERT INTO `civicrm_payment_processor_type` (`id`, `name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`, `payment_instrument_id`) VALUES (12,'FirstData','FirstData (aka linkpoint)','FirstData (aka linkpoint)',1,0,'Store name','certificate path',NULL,NULL,'Payment_FirstData','https://secure.linkpt.net',NULL,NULL,NULL,'https://staging.linkpt.net',NULL,NULL,NULL,1,NULL,1,1);
/*!40000 ALTER TABLE `civicrm_payment_processor_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

