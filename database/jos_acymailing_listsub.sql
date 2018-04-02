
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
DROP TABLE IF EXISTS `jos_acymailing_listsub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_acymailing_listsub` (
  `listid` smallint(5) unsigned NOT NULL,
  `subid` int(10) unsigned NOT NULL,
  `subdate` int(10) unsigned DEFAULT NULL,
  `unsubdate` int(10) unsigned DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`listid`,`subid`),
  KEY `subidindex` (`subid`),
  KEY `listidstatusindex` (`listid`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_acymailing_listsub` WRITE;
/*!40000 ALTER TABLE `jos_acymailing_listsub` DISABLE KEYS */;
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (1,1,1459839187,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (1,2,1459839187,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (1,3,1459839187,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (1,4,1459839187,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (1,6,1459839187,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (1,8,1459839187,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (1,9,1459839187,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,1,1459839403,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,2,1459839403,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,3,1459839403,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,4,1459839403,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,6,1459839403,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,8,1459839403,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,9,1459839403,1488233708,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,34,1488247590,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (2,691,1488247659,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,1,1488228751,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,2,1495399780,1488233650,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,3,1488228751,1488233670,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,4,1488228751,1488233628,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,6,1488228751,1488233682,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,8,1488228751,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,9,1488228751,1488233708,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,12,1488228751,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,34,1488228751,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,690,1488233730,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,691,1488247659,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,692,1488247716,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,693,1488247897,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (3,694,1488247935,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,1,1488228751,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,2,1488228751,1488233650,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,3,1488228751,1488233670,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,4,1488228751,1488233628,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,6,1488228751,1488233682,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,8,1488228751,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,9,1488228751,1488233708,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,12,1488228751,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,34,1488228751,1488233696,-1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (4,690,1488233730,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,697,1495399854,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,698,1495399880,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,699,1495401724,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,700,1495413680,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,701,1495413942,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,702,1496089370,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,703,1496089476,NULL,1);
INSERT INTO `jos_acymailing_listsub` (`listid`, `subid`, `subdate`, `unsubdate`, `status`) VALUES (5,704,1496102900,NULL,1);
/*!40000 ALTER TABLE `jos_acymailing_listsub` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

