
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
DROP TABLE IF EXISTS `jos_virtuemart_vmusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_virtuemart_vmusers` (
  `virtuemart_user_id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `virtuemart_vendor_id` int(1) unsigned NOT NULL DEFAULT '0',
  `user_is_vendor` tinyint(1) NOT NULL DEFAULT '0',
  `customer_number` varchar(32) DEFAULT NULL,
  `virtuemart_paymentmethod_id` int(1) unsigned DEFAULT NULL,
  `virtuemart_shipmentmethod_id` int(1) unsigned DEFAULT NULL,
  `agreed` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(1) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(1) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`virtuemart_user_id`),
  UNIQUE KEY `u_virtuemart_user_id` (`virtuemart_user_id`,`virtuemart_vendor_id`),
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `user_is_vendor` (`user_is_vendor`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COMMENT='Holds the unique user data';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_virtuemart_vmusers` WRITE;
/*!40000 ALTER TABLE `jos_virtuemart_vmusers` DISABLE KEYS */;
INSERT INTO `jos_virtuemart_vmusers` (`virtuemart_user_id`, `virtuemart_vendor_id`, `user_is_vendor`, `customer_number`, `virtuemart_paymentmethod_id`, `virtuemart_shipmentmethod_id`, `agreed`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (43,1,1,'0',0,0,0,'0000-00-00 00:00:00',0,'2018-01-26 19:27:31',43,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `jos_virtuemart_vmusers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

