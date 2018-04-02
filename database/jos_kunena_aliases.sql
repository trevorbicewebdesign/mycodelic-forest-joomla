
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
DROP TABLE IF EXISTS `jos_kunena_aliases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_aliases` (
  `alias` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `item` varchar(32) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  UNIQUE KEY `alias` (`alias`),
  KEY `state` (`state`),
  KEY `item` (`item`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_aliases` WRITE;
/*!40000 ALTER TABLE `jos_kunena_aliases` DISABLE KEYS */;
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('2016-events','catid','21',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('2017-events','catid','24',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('announcement','view','announcement',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('art','catid','9',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('budget','catid','19',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('camp-events','catid','20',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('category','view','category',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('category/create','layout','category.create',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('category/default','layout','category.default',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('category/edit','layout','category.edit',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('category/manage','layout','category.manage',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('category/moderate','layout','category.moderate',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('category/user','layout','category.user',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('common','view','common',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('create','layout','category.create',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('credits','view','credits',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('default','layout','category.default',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('edit','layout','category.edit',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('enter-the-burn','catid','23',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('evaptron','catid','4',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('exodus','catid','5',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('gear-suggestions','catid','18',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('general-discussion','catid','22',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('general-site-changes','catid','8',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('general-website-changes','catid','8',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('home','view','home',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('installation','catid','10',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('leadership','catid','16',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('main-forum','catid','1',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('manage','layout','category.manage',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('misc','view','misc',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('moderate','layout','category.moderate',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('open-discussion','catid','2',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('organization','catid','17',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('other','catid','11',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('playa-stories','catid','15',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('search','view','search',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('solutions','catid','7',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('statistics','view','statistics',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('suggestion-box','catid','3',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('ticket-questions','catid','13',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('tickets','catid','12',0);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('topic','view','topic',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('topics','view','topics',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('user','view','user',1);
INSERT INTO `jos_kunena_aliases` (`alias`, `type`, `item`, `state`) VALUES ('website-changes','catid','6',0);
/*!40000 ALTER TABLE `jos_kunena_aliases` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

