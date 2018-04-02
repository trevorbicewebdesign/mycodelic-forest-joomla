
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
DROP TABLE IF EXISTS `jos_joomgallery_catg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_joomgallery_catg` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(2048) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `lft` int(11) NOT NULL DEFAULT '0',
  `rgt` int(11) NOT NULL DEFAULT '0',
  `level` int(1) unsigned NOT NULL DEFAULT '0',
  `description` text,
  `access` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `in_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL DEFAULT '',
  `owner` int(11) DEFAULT '0',
  `thumbnail` int(11) DEFAULT NULL,
  `img_position` int(10) DEFAULT '0',
  `catpath` varchar(2048) NOT NULL,
  `params` text NOT NULL,
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `exclude_toplists` int(1) NOT NULL,
  `exclude_search` int(1) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `idx_parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_joomgallery_catg` WRITE;
/*!40000 ALTER TABLE `jos_joomgallery_catg` DISABLE KEYS */;
INSERT INTO `jos_joomgallery_catg` (`cid`, `asset_id`, `name`, `alias`, `parent_id`, `lft`, `rgt`, `level`, `description`, `access`, `published`, `hidden`, `in_hidden`, `password`, `owner`, `thumbnail`, `img_position`, `catpath`, `params`, `metakey`, `metadesc`, `exclude_toplists`, `exclude_search`) VALUES (1,0,'ROOT','root',0,0,6,0,NULL,1,1,0,0,'',0,NULL,0,'','','','',0,0);
INSERT INTO `jos_joomgallery_catg` (`cid`, `asset_id`, `name`, `alias`, `parent_id`, `lft`, `rgt`, `level`, `description`, `access`, `published`, `hidden`, `in_hidden`, `password`, `owner`, `thumbnail`, `img_position`, `catpath`, `params`, `metakey`, `metadesc`, `exclude_toplists`, `exclude_search`) VALUES (3,157,'Burning Man 2015','burning-man-2015',1,3,4,1,'',2,1,0,0,'',0,23,-1,'burning_man_2015_3','','','',0,0);
INSERT INTO `jos_joomgallery_catg` (`cid`, `asset_id`, `name`, `alias`, `parent_id`, `lft`, `rgt`, `level`, `description`, `access`, `published`, `hidden`, `in_hidden`, `password`, `owner`, `thumbnail`, `img_position`, `catpath`, `params`, `metakey`, `metadesc`, `exclude_toplists`, `exclude_search`) VALUES (4,207,'Burning Man 2016','burning-man-2016',1,1,2,1,'',2,1,0,0,'',0,54,-1,'burning_man_2016_4','','','',0,0);
/*!40000 ALTER TABLE `jos_joomgallery_catg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

