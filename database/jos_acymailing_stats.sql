
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
DROP TABLE IF EXISTS `jos_acymailing_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_acymailing_stats` (
  `mailid` mediumint(8) unsigned NOT NULL,
  `senthtml` int(10) unsigned NOT NULL DEFAULT '0',
  `senttext` int(10) unsigned NOT NULL DEFAULT '0',
  `senddate` int(10) unsigned NOT NULL,
  `openunique` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `opentotal` int(10) unsigned NOT NULL DEFAULT '0',
  `bounceunique` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `fail` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `clicktotal` int(10) unsigned NOT NULL DEFAULT '0',
  `clickunique` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `unsub` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forward` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `bouncedetails` text,
  PRIMARY KEY (`mailid`),
  KEY `senddateindex` (`senddate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_acymailing_stats` WRITE;
/*!40000 ALTER TABLE `jos_acymailing_stats` DISABLE KEYS */;
INSERT INTO `jos_acymailing_stats` (`mailid`, `senthtml`, `senttext`, `senddate`, `openunique`, `opentotal`, `bounceunique`, `fail`, `clicktotal`, `clickunique`, `unsub`, `forward`, `bouncedetails`) VALUES (11,8,0,1459849979,6,17,0,0,0,0,0,0,NULL);
INSERT INTO `jos_acymailing_stats` (`mailid`, `senthtml`, `senttext`, `senddate`, `openunique`, `opentotal`, `bounceunique`, `fail`, `clicktotal`, `clickunique`, `unsub`, `forward`, `bouncedetails`) VALUES (12,4,0,1488234397,4,16,0,0,0,0,0,0,NULL);
INSERT INTO `jos_acymailing_stats` (`mailid`, `senthtml`, `senttext`, `senddate`, `openunique`, `opentotal`, `bounceunique`, `fail`, `clicktotal`, `clickunique`, `unsub`, `forward`, `bouncedetails`) VALUES (13,0,12,1495409875,0,0,0,0,0,0,0,0,NULL);
INSERT INTO `jos_acymailing_stats` (`mailid`, `senthtml`, `senttext`, `senddate`, `openunique`, `opentotal`, `bounceunique`, `fail`, `clicktotal`, `clickunique`, `unsub`, `forward`, `bouncedetails`) VALUES (14,0,12,1496089969,0,0,0,0,0,0,0,0,NULL);
/*!40000 ALTER TABLE `jos_acymailing_stats` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

