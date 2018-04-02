
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
DROP TABLE IF EXISTS `jos_joomgallery_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_joomgallery_votes` (
  `voteid` int(11) NOT NULL AUTO_INCREMENT,
  `picid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `userip` varchar(15) NOT NULL DEFAULT '0',
  `datevoted` datetime NOT NULL,
  `vote` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`voteid`),
  KEY `idx_picid` (`picid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_joomgallery_votes` WRITE;
/*!40000 ALTER TABLE `jos_joomgallery_votes` DISABLE KEYS */;
INSERT INTO `jos_joomgallery_votes` (`voteid`, `picid`, `userid`, `userip`, `datevoted`, `vote`) VALUES (1,7,71,'107.200.44.224','2015-09-23 15:08:30',5);
INSERT INTO `jos_joomgallery_votes` (`voteid`, `picid`, `userid`, `userip`, `datevoted`, `vote`) VALUES (2,18,71,'107.200.44.224','2015-09-23 15:08:44',5);
INSERT INTO `jos_joomgallery_votes` (`voteid`, `picid`, `userid`, `userip`, `datevoted`, `vote`) VALUES (3,17,71,'107.200.44.224','2015-09-23 15:08:52',5);
INSERT INTO `jos_joomgallery_votes` (`voteid`, `picid`, `userid`, `userip`, `datevoted`, `vote`) VALUES (4,21,71,'107.200.44.224','2015-09-24 02:46:10',5);
INSERT INTO `jos_joomgallery_votes` (`voteid`, `picid`, `userid`, `userip`, `datevoted`, `vote`) VALUES (5,19,71,'107.200.44.224','2015-09-24 02:46:45',5);
INSERT INTO `jos_joomgallery_votes` (`voteid`, `picid`, `userid`, `userip`, `datevoted`, `vote`) VALUES (6,20,71,'107.200.44.224','2015-09-24 02:47:08',5);
/*!40000 ALTER TABLE `jos_joomgallery_votes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

