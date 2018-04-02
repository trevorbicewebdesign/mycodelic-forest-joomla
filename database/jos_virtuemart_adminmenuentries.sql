
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
DROP TABLE IF EXISTS `jos_virtuemart_adminmenuentries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_virtuemart_adminmenuentries` (
  `id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT 'The ID of the VM Module, this Item is assigned to',
  `parent_id` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` char(64) NOT NULL DEFAULT '0',
  `link` char(64) NOT NULL DEFAULT '0',
  `depends` char(64) NOT NULL DEFAULT '' COMMENT 'Names of the Parameters, this Item depends on',
  `icon_class` char(96) DEFAULT NULL,
  `ordering` int(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `tooltip` char(128) DEFAULT NULL,
  `view` char(32) DEFAULT NULL,
  `task` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `module_id` (`module_id`),
  KEY `published` (`published`),
  KEY `ordering` (`ordering`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='Administration Menu Items';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_virtuemart_adminmenuentries` WRITE;
/*!40000 ALTER TABLE `jos_virtuemart_adminmenuentries` DISABLE KEYS */;
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (1,1,0,'COM_VIRTUEMART_CATEGORY_S','','','vmicon vmicon-16-folder_camera',1,1,'','category','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (2,1,0,'COM_VIRTUEMART_PRODUCT_S','','','vmicon vmicon-16-camera',2,1,'','product','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (3,1,0,'COM_VIRTUEMART_PRODUCT_CUSTOM_FIELD_S','','','vmicon vmicon-16-document_move',5,1,'','custom','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (4,1,0,'COM_VIRTUEMART_PRODUCT_INVENTORY','','','vmicon vmicon-16-price_watch',7,1,'','inventory','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (5,1,0,'COM_VIRTUEMART_CALC_S','','','vmicon vmicon-16-calculator',8,1,'','calc','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (6,1,0,'COM_VIRTUEMART_REVIEW_RATE_S','','','vmicon vmicon-16-comments',9,1,'','ratings','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (7,2,0,'COM_VIRTUEMART_ORDER_S','','','vmicon vmicon-16-page_white_stack',1,1,'','orders','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (8,2,0,'COM_VIRTUEMART_COUPON_S','','','vmicon vmicon-16-shopping',10,1,'','coupon','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (9,2,0,'COM_VIRTUEMART_REPORT','','','vmicon vmicon-16-chart_bar',3,1,'','report','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (10,2,0,'COM_VIRTUEMART_USER_S','','','vmicon vmicon-16-user',4,1,'','user','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (11,2,0,'COM_VIRTUEMART_SHOPPERGROUP_S','','','vmicon vmicon-16-user-group',5,1,'','shoppergroup','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (12,3,0,'COM_VIRTUEMART_MANUFACTURER_S','','','vmicon vmicon-16-wrench_orange',1,1,'','manufacturer','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (13,3,0,'COM_VIRTUEMART_MANUFACTURER_CATEGORY_S','','','vmicon vmicon-16-folder_wrench',2,1,'','manufacturercategories','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (14,4,0,'COM_VIRTUEMART_STORE','','','vmicon vmicon-16-reseller_account_template',1,1,'','user','editshop');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (15,4,0,'COM_VIRTUEMART_MEDIA_S','','','vmicon vmicon-16-pictures',2,1,'','media','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (16,4,0,'COM_VIRTUEMART_SHIPMENTMETHOD_S','','','vmicon vmicon-16-lorry',3,1,'','shipmentmethod','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (17,4,0,'COM_VIRTUEMART_PAYMENTMETHOD_S','','','vmicon vmicon-16-creditcards',4,1,'','paymentmethod','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (18,5,0,'COM_VIRTUEMART_CONFIGURATION','','','vmicon vmicon-16-config',1,1,'','config','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (19,5,0,'COM_VIRTUEMART_USERFIELD_S','','','vmicon vmicon-16-participation_rate',2,1,'','userfields','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (20,5,0,'COM_VIRTUEMART_ORDERSTATUS_S','','','vmicon vmicon-16-document_editing',3,1,'','orderstatus','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (21,5,0,'COM_VIRTUEMART_CURRENCY_S','','','vmicon vmicon-16-coins',5,1,'','currency','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (22,5,0,'COM_VIRTUEMART_COUNTRY_S','','','vmicon vmicon-16-globe',6,1,'','country','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (23,11,0,'COM_VIRTUEMART_MIGRATION_UPDATE','','','vmicon vmicon-16-installer_box',0,1,'','updatesmigration','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (24,11,0,'COM_VIRTUEMART_ABOUT','','','vmicon vmicon-16-info',10,1,'','about','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (25,11,0,'COM_VIRTUEMART_HELP_TOPICS','http://docs.virtuemart.net/','','vmicon vmicon-16-help',5,1,'','','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (26,11,0,'COM_VIRTUEMART_COMMUNITY_FORUM','http://forum.virtuemart.net/','','vmicon vmicon-16-reseller_programm',7,1,'','','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (27,11,0,'COM_VIRTUEMART_STATISTIC_SUMMARY','','','vmicon vmicon-16-info',1,1,'','virtuemart','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (28,11,0,'COM_VIRTUEMART_LOG','','','vmicon vmicon-16-info',2,1,'','log','');
INSERT INTO `jos_virtuemart_adminmenuentries` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`, `view`, `task`) VALUES (29,11,0,'COM_VIRTUEMART_SUPPORT','','','vmicon vmicon-16-help',3,1,'','support','');
/*!40000 ALTER TABLE `jos_virtuemart_adminmenuentries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

