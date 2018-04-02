
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
DROP TABLE IF EXISTS `jos_virtuemart_customs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_virtuemart_customs` (
  `virtuemart_custom_id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `custom_parent_id` int(1) unsigned NOT NULL DEFAULT '0',
  `virtuemart_vendor_id` int(1) unsigned NOT NULL DEFAULT '1',
  `custom_jplugin_id` int(1) NOT NULL DEFAULT '0',
  `custom_element` varchar(50) NOT NULL DEFAULT '',
  `admin_only` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:Display in admin only',
  `custom_title` varchar(255) NOT NULL DEFAULT '' COMMENT 'field title',
  `show_title` tinyint(1) NOT NULL DEFAULT '1',
  `custom_tip` varchar(255) NOT NULL DEFAULT '' COMMENT 'tip',
  `custom_value` varchar(4095) DEFAULT NULL COMMENT 'default value',
  `custom_desc` varchar(4095) DEFAULT NULL COMMENT 'description or unit',
  `field_type` varchar(2) NOT NULL DEFAULT '0' COMMENT 'S:string,I:int,P:parent, B:bool,D:date,T:time,H:hidden',
  `is_list` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'list of values',
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:hidden',
  `is_cart_attribute` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Add attributes to cart',
  `is_input` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Add input to cart',
  `searchable` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Available as search filter',
  `layout_pos` varchar(24) DEFAULT NULL COMMENT 'Layout Position',
  `custom_params` text NOT NULL,
  `shared` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'valid for all vendors?',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(1) NOT NULL DEFAULT '0',
  `ordering` int(1) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(1) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`virtuemart_custom_id`),
  KEY `custom_parent_id` (`custom_parent_id`),
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `custom_element` (`custom_element`),
  KEY `field_type` (`field_type`),
  KEY `is_cart_attribute` (`is_cart_attribute`),
  KEY `is_input` (`is_input`),
  KEY `searchable` (`searchable`),
  KEY `shared` (`shared`),
  KEY `published` (`published`),
  KEY `ordering` (`ordering`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='custom fields definition';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_virtuemart_customs` WRITE;
/*!40000 ALTER TABLE `jos_virtuemart_customs` DISABLE KEYS */;
INSERT INTO `jos_virtuemart_customs` (`virtuemart_custom_id`, `custom_parent_id`, `virtuemart_vendor_id`, `custom_jplugin_id`, `custom_element`, `admin_only`, `custom_title`, `show_title`, `custom_tip`, `custom_value`, `custom_desc`, `field_type`, `is_list`, `is_hidden`, `is_cart_attribute`, `is_input`, `searchable`, `layout_pos`, `custom_params`, `shared`, `published`, `created_on`, `created_by`, `ordering`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (1,0,0,0,'0',0,'COM_VIRTUEMART_RELATED_PRODUCTS',1,'COM_VIRTUEMART_RELATED_PRODUCTS_TIP','related_products','COM_VIRTUEMART_RELATED_PRODUCTS_DESC','R',0,0,0,0,0,'related_products','wPrice=\"1\"|wImage=\"1\"|wDescr=\"1\"|',0,1,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_customs` (`virtuemart_custom_id`, `custom_parent_id`, `virtuemart_vendor_id`, `custom_jplugin_id`, `custom_element`, `admin_only`, `custom_title`, `show_title`, `custom_tip`, `custom_value`, `custom_desc`, `field_type`, `is_list`, `is_hidden`, `is_cart_attribute`, `is_input`, `searchable`, `layout_pos`, `custom_params`, `shared`, `published`, `created_on`, `created_by`, `ordering`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (2,0,0,0,'0',0,'COM_VIRTUEMART_RELATED_CATEGORIES',1,'COM_VIRTUEMART_RELATED_CATEGORIES_TIP','related_categories','COM_VIRTUEMART_RELATED_CATEGORIES_DESC','Z',0,0,0,0,0,'related_categories','wImage=\"1\"|wDescr=\"1\"|',0,1,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `jos_virtuemart_customs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

