
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
DROP TABLE IF EXISTS `jos_comprofiler_field_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_comprofiler_field_values` (
  `fieldvalueid` int(11) NOT NULL AUTO_INCREMENT,
  `fieldid` int(11) NOT NULL DEFAULT '0',
  `fieldtitle` varchar(255) NOT NULL DEFAULT '',
  `fieldlabel` varchar(255) NOT NULL DEFAULT '',
  `fieldgroup` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldvalueid`),
  KEY `fieldid_ordering` (`fieldid`,`ordering`),
  KEY `fieldtitle_id` (`fieldtitle`,`fieldid`),
  KEY `fieldlabel_id` (`fieldlabel`,`fieldid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_comprofiler_field_values` WRITE;
/*!40000 ALTER TABLE `jos_comprofiler_field_values` DISABLE KEYS */;
INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldlabel`, `fieldgroup`, `ordering`, `sys`) VALUES (16,55,'2016','2016',0,1,0);
INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldlabel`, `fieldgroup`, `ordering`, `sys`) VALUES (17,55,'2015','2015',0,2,0);
INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldlabel`, `fieldgroup`, `ordering`, `sys`) VALUES (18,55,'2014','2014',0,3,0);
INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldlabel`, `fieldgroup`, `ordering`, `sys`) VALUES (19,55,'2013','2013',0,4,0);
INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldlabel`, `fieldgroup`, `ordering`, `sys`) VALUES (20,55,'2012','2012',0,5,0);
INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldlabel`, `fieldgroup`, `ordering`, `sys`) VALUES (21,55,'2011','2011',0,6,0);
INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldlabel`, `fieldgroup`, `ordering`, `sys`) VALUES (22,55,'2010','2010',0,7,0);
/*!40000 ALTER TABLE `jos_comprofiler_field_values` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

