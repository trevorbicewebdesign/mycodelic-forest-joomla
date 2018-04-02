
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
DROP TABLE IF EXISTS `jos_comprofiler_tabs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_comprofiler_tabs` (
  `tabid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `ordering_edit` int(11) NOT NULL DEFAULT '10',
  `ordering_register` int(11) NOT NULL DEFAULT '10',
  `width` varchar(10) NOT NULL DEFAULT '.5',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `pluginclass` varchar(255) DEFAULT NULL,
  `pluginid` int(11) DEFAULT NULL,
  `fields` tinyint(1) NOT NULL DEFAULT '1',
  `params` mediumtext,
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  `displaytype` varchar(255) NOT NULL DEFAULT '',
  `position` varchar(255) NOT NULL DEFAULT '',
  `viewaccesslevel` int(10) unsigned NOT NULL DEFAULT '0',
  `cssclass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tabid`),
  KEY `pluginclass` (`pluginclass`),
  KEY `enabled_position_ordering` (`enabled`,`position`,`ordering`),
  KEY `orderreg_enabled_pos_order` (`enabled`,`ordering_register`,`position`,`ordering`),
  KEY `orderedit_enabled_pos_order` (`enabled`,`ordering_edit`,`position`,`ordering`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_comprofiler_tabs` WRITE;
/*!40000 ALTER TABLE `jos_comprofiler_tabs` DISABLE KEYS */;
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (6,'USER_STATISTICS_TITLE','',1,10,10,'.5',1,'getStatsTab',1,1,NULL,1,'html','canvas_stats',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (7,'USER_CANVAS_TITLE','',1,11,11,'1',1,'getCanvasTab',1,1,NULL,1,'html','canvas_background',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (8,'BLOGS_TITLE','',3,10,10,'1',1,'cbblogsTab',19,0,NULL,1,'menu','canvas_main_middle',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (9,'FORUMS_TITLE','',4,10,10,'1',0,'cbforumsTab',18,0,NULL,1,'menu','canvas_main_middle',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (10,'ARTICLES_TITLE','',2,10,10,'1',1,'cbarticlesTab',17,0,NULL,1,'menu','canvas_main_middle',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (11,'_UE_CONTACT_INFO_HEADER','',1,10,10,'1',1,'getContactTab',1,1,NULL,1,'menu','canvas_main_middle',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (15,'_UE_CONNECTION','',5,10,10,'1',1,'getConnectionTab',2,0,NULL,1,'menunested','canvas_main_middle',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (17,'_UE_MENU','',1,10,10,'1',1,'getMenuTab',14,0,NULL,1,'html','canvas_menu',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (18,'_UE_CONNECTIONPATHS','',1,10,10,'1',1,'getConnectionPathsTab',2,0,NULL,1,'html','cb_head',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (19,'_UE_PROFILE_PAGE_TITLE','',1,10,10,'1',1,'getPageTitleTab',1,1,NULL,1,'html','canvas_title',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (20,'_UE_PORTRAIT','',1,11,11,'1',1,'getPortraitTab',1,1,NULL,1,'html','canvas_photo',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (21,'_UE_USER_STATUS','',1,10,10,'.5',1,'getStatusTab',14,1,NULL,1,'html','canvas_main_right',1,NULL);
INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_edit`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `cssclass`) VALUES (22,'_UE_PMSTAB','',6,10,10,'.5',0,'getmypmsproTab',15,0,NULL,1,'menunested','canvas_main_middle',1,NULL);
/*!40000 ALTER TABLE `jos_comprofiler_tabs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

