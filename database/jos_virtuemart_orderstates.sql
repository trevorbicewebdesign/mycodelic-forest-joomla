
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
DROP TABLE IF EXISTS `jos_virtuemart_orderstates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_virtuemart_orderstates` (
  `virtuemart_orderstate_id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `virtuemart_vendor_id` int(1) unsigned NOT NULL DEFAULT '1',
  `order_status_code` char(1) NOT NULL DEFAULT '',
  `order_status_name` varchar(64) DEFAULT NULL,
  `order_status_color` varchar(64) DEFAULT NULL,
  `order_status_description` varchar(15359) DEFAULT NULL,
  `order_stock_handle` char(1) NOT NULL DEFAULT 'A',
  `ordering` int(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(1) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(1) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`virtuemart_orderstate_id`),
  KEY `ordering` (`ordering`),
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `published` (`published`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='All available order statuses';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_virtuemart_orderstates` WRITE;
/*!40000 ALTER TABLE `jos_virtuemart_orderstates` DISABLE KEYS */;
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (1,1,'P','COM_VIRTUEMART_ORDER_STATUS_PENDING',NULL,'','R',1,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (2,1,'U','COM_VIRTUEMART_ORDER_STATUS_CONFIRMED_BY_SHOPPER',NULL,'','R',2,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (3,1,'C','COM_VIRTUEMART_ORDER_STATUS_CONFIRMED',NULL,'','R',3,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (4,1,'X','COM_VIRTUEMART_ORDER_STATUS_CANCELLED',NULL,'','A',4,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (5,1,'R','COM_VIRTUEMART_ORDER_STATUS_REFUNDED',NULL,'','A',5,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (6,1,'S','COM_VIRTUEMART_ORDER_STATUS_SHIPPED',NULL,'','O',6,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (7,1,'F','COM_VIRTUEMART_ORDER_STATUS_COMPLETED',NULL,'','R',7,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_orderstates` (`virtuemart_orderstate_id`, `virtuemart_vendor_id`, `order_status_code`, `order_status_name`, `order_status_color`, `order_status_description`, `order_stock_handle`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (8,1,'D','COM_VIRTUEMART_ORDER_STATUS_DENIED',NULL,'','A',8,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `jos_virtuemart_orderstates` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

