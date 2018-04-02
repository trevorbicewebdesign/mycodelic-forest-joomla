
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
DROP TABLE IF EXISTS `jos_virtuemart_userfield_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_virtuemart_userfield_values` (
  `virtuemart_userfield_value_id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `virtuemart_userfield_id` int(1) unsigned NOT NULL DEFAULT '0',
  `fieldtitle` varchar(255) NOT NULL DEFAULT '',
  `fieldvalue` varchar(255) NOT NULL DEFAULT '',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  `ordering` int(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(1) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(1) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`virtuemart_userfield_value_id`),
  KEY `virtuemart_userfield_id` (`virtuemart_userfield_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='Holds the different values for dropdown and radio lists';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_virtuemart_userfield_values` WRITE;
/*!40000 ALTER TABLE `jos_virtuemart_userfield_values` DISABLE KEYS */;
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (1,23,'COM_VIRTUEMART_SHOPPER_TITLE_MR','Mr',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (2,23,'COM_VIRTUEMART_SHOPPER_TITLE_MRS','Mrs',0,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (3,51,'None','',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (4,51,'Non-resident (Canada)','R',0,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (5,51,'Federal government (United States)','A',0,1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (6,51,'State government (United States)','B',0,2,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (7,51,'Tribe / Status Indian / Indian Band (both)','C',0,3,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (8,51,'Foreign diplomat (both)','D',0,4,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (9,51,'Charitable or benevolent org (both)','E',0,5,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (10,51,'Religious or educational org (both)','F',0,6,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (11,51,'Resale (both)','G',0,7,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (12,51,'Commercial agricultural production (both)','H',0,8,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (13,51,'Industrial production / manufacturer (both)','I',0,9,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (14,51,'Direct pay permit (United States)','J',0,10,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (15,51,'Direct mail (United States)','K',0,11,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (16,51,'Other (both)','L',0,12,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (17,51,'Local government (United States)','N',0,13,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (18,51,'Commercial aquaculture (Canada)','P',0,14,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
INSERT INTO `jos_virtuemart_userfield_values` (`virtuemart_userfield_value_id`, `virtuemart_userfield_id`, `fieldtitle`, `fieldvalue`, `sys`, `ordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES (19,51,'Commercial Fishery (Canada)','Q',0,15,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `jos_virtuemart_userfield_values` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

