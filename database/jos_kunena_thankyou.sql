
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
DROP TABLE IF EXISTS `jos_kunena_thankyou`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_thankyou` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `targetuserid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  UNIQUE KEY `postid` (`postid`,`userid`),
  KEY `userid` (`userid`),
  KEY `targetuserid` (`targetuserid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_thankyou` WRITE;
/*!40000 ALTER TABLE `jos_kunena_thankyou` DISABLE KEYS */;
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (5,71,43,'2015-09-23 03:08:58');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (43,43,71,'2016-04-05 10:53:35');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (56,71,43,'2016-04-09 05:06:49');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (377,71,43,'2017-02-28 05:59:33');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (383,43,71,'2017-03-01 11:55:24');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (386,43,71,'2017-03-01 06:26:39');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (390,43,80,'2017-03-04 20:58:49');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (394,43,71,'2017-03-07 06:36:13');
INSERT INTO `jos_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES (398,811,71,'2017-12-07 21:03:46');
/*!40000 ALTER TABLE `jos_kunena_thankyou` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

