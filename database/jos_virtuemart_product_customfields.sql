
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
DROP TABLE IF EXISTS `jos_virtuemart_product_customfields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_virtuemart_product_customfields` (
  `virtuemart_customfield_id` int(1) unsigned NOT NULL AUTO_INCREMENT COMMENT 'field id',
  `virtuemart_product_id` int(1) NOT NULL DEFAULT '0',
  `virtuemart_custom_id` int(1) NOT NULL DEFAULT '1' COMMENT 'custom group id',
  `customfield_value` varchar(2500) DEFAULT NULL COMMENT 'field value',
  `customfield_price` decimal(15,6) DEFAULT NULL COMMENT 'price',
  `disabler` int(1) unsigned NOT NULL DEFAULT '0',
  `override` int(1) unsigned NOT NULL DEFAULT '0',
  `customfield_params` text COMMENT 'Param for Plugins',
  `product_sku` varchar(64) DEFAULT NULL,
  `product_gtin` varchar(64) DEFAULT NULL,
  `product_mpn` varchar(64) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(1) unsigned NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(1) unsigned NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(1) unsigned NOT NULL DEFAULT '0',
  `ordering` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`virtuemart_customfield_id`),
  KEY `virtuemart_product_id` (`virtuemart_product_id`,`ordering`),
  KEY `virtuemart_custom_id` (`virtuemart_custom_id`),
  KEY `published` (`published`),
  KEY `ordering` (`ordering`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='custom fields';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_virtuemart_product_customfields` WRITE;
/*!40000 ALTER TABLE `jos_virtuemart_product_customfields` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_virtuemart_product_customfields` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

