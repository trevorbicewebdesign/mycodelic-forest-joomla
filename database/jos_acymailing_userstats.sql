
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
DROP TABLE IF EXISTS `jos_acymailing_userstats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_acymailing_userstats` (
  `mailid` mediumint(8) unsigned NOT NULL,
  `subid` int(10) unsigned NOT NULL,
  `html` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `sent` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `senddate` int(10) unsigned NOT NULL,
  `open` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `opendate` int(11) NOT NULL,
  `bounce` tinyint(4) NOT NULL DEFAULT '0',
  `fail` tinyint(4) NOT NULL DEFAULT '0',
  `ip` varchar(100) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `browser_version` tinyint(3) unsigned DEFAULT NULL,
  `is_mobile` tinyint(3) unsigned DEFAULT NULL,
  `mobile_os` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `bouncerule` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mailid`,`subid`),
  KEY `senddateindex` (`senddate`),
  KEY `subidindex` (`subid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_acymailing_userstats` WRITE;
/*!40000 ALTER TABLE `jos_acymailing_userstats` DISABLE KEYS */;
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (11,1,1,1,1459849979,2,1459852188,0,0,'66.249.85.199','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (11,2,1,1,1459849979,2,1459877695,0,0,'66.102.6.131','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (11,3,1,1,1459849979,2,1459868408,0,0,'66.102.6.187','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (11,4,1,1,1459849979,2,1460743241,0,0,'66.249.85.199','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (11,6,1,1,1459849979,1,1459917096,0,0,'66.102.6.187','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (11,8,1,1,1459849979,8,1460493375,0,0,'75.111.70.34','Apple Mail',255,1,'iOS','mozilla/5.0 (iphone; cpu iphone os 9_3_1 like mac os x) applewebkit/601.1.46 (khtml, like gecko) mobile/13e238',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (11,9,1,1,1459849979,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (12,1,1,1,1488234397,2,1488235764,0,0,'66.249.84.28','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (12,8,1,1,1488234397,7,1497316875,0,0,'66.249.84.62','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (12,12,1,1,1488234397,3,1490579556,0,0,'2601:0647:0001:c2b5:61fe:b164:3b99:bba7','Apple Mail',255,0,'','mozilla/5.0 (macintosh; intel mac os x 10_12_3) applewebkit/602.4.8 (khtml, like gecko)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (12,690,1,1,1488234397,4,1488393913,0,0,'66.249.84.26','Firefox',11,0,'','mozilla/5.0 (windows nt 5.1; rv:11.0) gecko firefox/11.0 (via ggpht.com googleimageproxy)',NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (13,697,0,4,1495409875,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (13,698,0,4,1495409875,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (13,699,0,4,1495409875,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (14,697,0,2,1496089969,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (14,698,0,2,1496089969,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (14,699,0,2,1496089969,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (14,700,0,2,1496089969,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (14,701,0,2,1496089969,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (14,702,0,1,1496089969,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `jos_acymailing_userstats` (`mailid`, `subid`, `html`, `sent`, `senddate`, `open`, `opendate`, `bounce`, `fail`, `ip`, `browser`, `browser_version`, `is_mobile`, `mobile_os`, `user_agent`, `bouncerule`) VALUES (14,703,0,1,1496089969,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `jos_acymailing_userstats` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

