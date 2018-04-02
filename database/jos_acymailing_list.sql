
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
DROP TABLE IF EXISTS `jos_acymailing_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_acymailing_list` (
  `name` varchar(250) NOT NULL,
  `description` text,
  `ordering` smallint(5) unsigned DEFAULT '0',
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `published` tinyint(4) DEFAULT NULL,
  `userid` int(10) unsigned DEFAULT NULL,
  `alias` varchar(250) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `welmailid` mediumint(9) DEFAULT NULL,
  `unsubmailid` mediumint(9) DEFAULT NULL,
  `type` enum('list','campaign') NOT NULL DEFAULT 'list',
  `access_sub` varchar(250) NOT NULL DEFAULT 'all',
  `access_manage` varchar(250) NOT NULL DEFAULT 'none',
  `languages` varchar(250) NOT NULL DEFAULT 'all',
  `startrule` varchar(50) NOT NULL DEFAULT '0',
  `category` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`listid`),
  KEY `typeorderingindex` (`type`,`ordering`),
  KEY `useridindex` (`userid`),
  KEY `typeuseridindex` (`type`,`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_acymailing_list` WRITE;
/*!40000 ALTER TABLE `jos_acymailing_list` DISABLE KEYS */;
INSERT INTO `jos_acymailing_list` (`name`, `description`, `ordering`, `listid`, `published`, `userid`, `alias`, `color`, `visible`, `welmailid`, `unsubmailid`, `type`, `access_sub`, `access_manage`, `languages`, `startrule`, `category`) VALUES ('Newsletters','Receive our latest news',5,1,1,43,'mailing_list','#3366ff',1,NULL,NULL,'list','all','none','all','0','');
INSERT INTO `jos_acymailing_list` (`name`, `description`, `ordering`, `listid`, `published`, `userid`, `alias`, `color`, `visible`, `welmailid`, `unsubmailid`, `type`, `access_sub`, `access_manage`, `languages`, `startrule`, `category`) VALUES ('Mycodelic Forest 2016','',4,2,1,43,'mycodelic-forest-2016','#ECE649',1,NULL,0,'list','all','none','all','0','');
INSERT INTO `jos_acymailing_list` (`name`, `description`, `ordering`, `listid`, `published`, `userid`, `alias`, `color`, `visible`, `welmailid`, `unsubmailid`, `type`, `access_sub`, `access_manage`, `languages`, `startrule`, `category`) VALUES ('Mycodelic Forest 2017','',3,3,1,43,'mycodelic-forest-2017','#ECE649',1,NULL,0,'list','all','none','all','0','');
INSERT INTO `jos_acymailing_list` (`name`, `description`, `ordering`, `listid`, `published`, `userid`, `alias`, `color`, `visible`, `welmailid`, `unsubmailid`, `type`, `access_sub`, `access_manage`, `languages`, `startrule`, `category`) VALUES ('DGS Tickets','',2,4,1,43,'dgs-tickets','#157D69',1,NULL,0,'list','all','none','all','0','');
INSERT INTO `jos_acymailing_list` (`name`, `description`, `ordering`, `listid`, `published`, `userid`, `alias`, `color`, `visible`, `welmailid`, `unsubmailid`, `type`, `access_sub`, `access_manage`, `languages`, `startrule`, `category`) VALUES ('Mycodelic Forest 2017 Text Message','',1,5,1,43,'mycodelic-forest-2017-text-message','#157D69',1,NULL,0,'list','all','none','all','0','');
/*!40000 ALTER TABLE `jos_acymailing_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

