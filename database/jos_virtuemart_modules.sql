
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
DROP TABLE IF EXISTS `jos_virtuemart_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_virtuemart_modules` (
  `module_id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` char(255) DEFAULT NULL,
  `module_description` varchar(15359) DEFAULT NULL,
  `module_perms` char(255) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` enum('0','1') NOT NULL DEFAULT '0',
  `ordering` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`module_id`),
  KEY `module_name` (`module_name`),
  KEY `ordering` (`ordering`),
  KEY `published` (`published`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='VirtueMart Core Modules, not: Joomla modules';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_virtuemart_modules` WRITE;
/*!40000 ALTER TABLE `jos_virtuemart_modules` DISABLE KEYS */;
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (1,'product','Here you can administer your online catalog of products.  Categories , Products (view=product), Attributes, Product Types, Product Files (view=media), Inventory, Calculation Rules, Customer Reviews  ','storeadmin,admin',1,'',1);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (2,'order','View Order and Update Order Status:    Orders , Coupons , Revenue Report ,Shopper , Shopper Groups ','admin,storeadmin',1,'',2);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (3,'manufacturer','Manage the manufacturers of products in your store.','storeadmin,admin',1,'',3);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (4,'store','Store Configuration: Store Information, Payment Methods , Shipment, Shipment Rates','storeadmin,admin',1,'',4);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (5,'configuration','Configuration: shop configuration , currencies (view=currency), Credit Card List, Countries, userfields, order status  ','admin,storeadmin',1,'0',5);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (6,'msgs','This module is unprotected an used for displaying system messages to users.  We need to have an area that does not require authorization when things go wrong.','none',0,'',99);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (7,'shop','This is the Washupito store module.  This is the demo store included with the VirtueMart distribution.','none',1,'',99);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (8,'store','Store Configuration: Store Information, Payment Methods , Shipment, Shipment Rates','storeadmin,admin',1,'',4);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (9,'account','This module allows shoppers to update their account information and view previously placed orders.','shopper,storeadmin,admin,demo',1,'',99);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (10,'checkout','','none',0,'',99);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (11,'tools','Tools','admin',1,'0',8);
INSERT INTO `jos_virtuemart_modules` (`module_id`, `module_name`, `module_description`, `module_perms`, `published`, `is_admin`, `ordering`) VALUES (13,'zone','This is the zone-shipment module. Here you can manage your shipment costs according to Zones.','admin,storeadmin',0,'',11);
/*!40000 ALTER TABLE `jos_virtuemart_modules` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

