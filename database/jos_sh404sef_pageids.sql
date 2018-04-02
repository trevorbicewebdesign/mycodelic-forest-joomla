
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
DROP TABLE IF EXISTS `jos_sh404sef_pageids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_sh404sef_pageids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newurl` varchar(255) NOT NULL DEFAULT '',
  `pageid` varchar(255) NOT NULL DEFAULT '',
  `type` tinyint(3) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `newurl` (`newurl`),
  KEY `alias` (`pageid`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_sh404sef_pageids` WRITE;
/*!40000 ALTER TABLE `jos_sh404sef_pageids` DISABLE KEYS */;
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (1,'index.php?option=com_content&Itemid=205&id=13&lang=en&view=article','kk',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (2,'index.php?option=com_content&Itemid=147&id=4&lang=en&view=article','k3',1,28);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (3,'index.php?option=com_content&Itemid=148&id=5&lang=en&view=article','ka',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (4,'index.php?option=com_content&Itemid=149&id=6&lang=en&view=article','kx',1,41);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (5,'index.php?option=com_content&Itemid=101&catid=8&id=2&lang=en&view=article','k9',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (6,'index.php?option=com_content&Itemid=101&id=0&lang=en&view=category','kw',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (7,'index.php?option=com_content&Itemid=101&catid=11&id=3&lang=en&view=article','ku',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (8,'index.php?option=com_content&Itemid=202&id=9&lang=en&layout=blog&view=category','k6',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (9,'index.php?option=com_content&Itemid=202&format=feed&id=9&lang=en&type=atom&view=category','k8',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (10,'index.php?option=com_content&Itemid=202&format=feed&id=9&lang=en&type=rss&view=category','kd',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (11,'index.php?option=com_content&Itemid=202&catid=9&id=8&lang=en&view=article','k4',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (12,'index.php?option=com_content&Itemid=202&catid=9&id=9&lang=en&view=article','kh',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (13,'index.php?option=com_content&Itemid=202&catid=9&id=7&lang=en&view=article','kq',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (14,'index.php?option=com_content&Itemid=202&format=feed&id=9&lang=en&layout=blog&type=rss&view=category','kr',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (15,'index.php?option=com_content&Itemid=202&format=feed&id=9&lang=en&layout=blog&type=atom&view=category','kf',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (16,'index.php?option=com_content&Itemid=147&lang=en&view=categories','ky',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (17,'index.php?option=com_content&Itemid=209&id=8&lang=en&view=article','kc',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (18,'index.php?option=com_content&Itemid=202&id=9&lang=en&view=category','3p',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (19,'index.php?option=com_content&Itemid=641&id=12&lang=en&layout=blog&view=category','3k',1,23);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (20,'index.php?option=com_content&Itemid=641&format=feed&id=12&lang=en&layout=blog&type=rss&view=category','33',1,6);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (21,'index.php?option=com_content&Itemid=641&format=feed&id=12&lang=en&layout=blog&type=atom&view=category','3a',1,6);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (22,'index.php?option=com_content&Itemid=641&catid=12&id=23&lang=en&view=article','3x',1,14);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (23,'index.php?option=com_content&Itemid=641&catid=12&id=22&lang=en&view=article','39',1,10);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (24,'index.php?option=com_content&Itemid=641&catid=12&id=20&lang=en&view=article','3w',1,12);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (25,'index.php?option=com_content&Itemid=641&catid=12&id=21&lang=en&view=article','3u',1,12);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (26,'index.php?option=com_content&Itemid=641&catid=12&id=19&lang=en&view=article','36',1,16);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (27,'index.php?option=com_content&Itemid=641&catid=12&id=18&lang=en&view=article','38',1,14);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (28,'index.php?option=com_content&Itemid=641&catid=12&id=17&lang=en&view=article','3d',1,16);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (29,'index.php?option=com_content&Itemid=641&catid=12&id=16&lang=en&view=article','34',1,16);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (30,'index.php?option=com_content&Itemid=641&catid=12&id=15&lang=en&view=article','3h',1,19);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (31,'index.php?option=com_content&Itemid=641&id=12&lang=en&layout=blog&limit=5&limitstart=5&view=category','3q',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (32,'index.php?option=com_content&Itemid=641&catid=12&id=14&lang=en&view=article','3r',1,14);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (33,'index.php?option=com_content&Itemid=101&id=8&lang=en&view=category','3f',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (34,'index.php?option=com_content&Itemid=101&id=10&lang=en&view=category','3y',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (35,'index.php?option=com_content&Itemid=101&id=11&lang=en&view=category','3c',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (36,'index.php?option=com_content&Itemid=641&id=12&lang=en&view=category','ap',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (37,'index.php?option=com_content&format=feed&lang=en&type=rss','ak',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (38,'index.php?option=com_content&Itemid=149&catid=11&id=6&lang=en&view=article','a3',1,11);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (39,'index.php?option=com_content&Itemid=702&id=24&lang=en&view=article','aa',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (40,'index.php?option=com_content&Itemid=702&catid=14&id=24&lang=en&view=article','ax',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (41,'index.php?option=com_content&Itemid=101&id=14&lang=en&view=category','a9',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (42,'index.php?option=com_content&Itemid=743&id=25&lang=en&view=article','7w',1,21);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (43,'index.php?option=com_content&Itemid=103&id=9&lang=en&view=article','7u',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (44,'index.php?option=com_content&Itemid=927&id=26&lang=en&view=article','a6',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (45,'index.php?option=com_content&Itemid=927&catid=2&id=26&lang=en&view=article','a8',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (46,'index.php?option=com_content&Itemid=928&id=27&lang=en&view=article','7d',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (47,'index.php?option=com_content&Itemid=928&catid=14&id=27&lang=en&view=article','a4',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (48,'index.php','ah',2,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (49,'index.php?option=com_content&Itemid=209&id=22&lang=en&view=article','7q',1,0);
INSERT INTO `jos_sh404sef_pageids` (`id`, `newurl`, `pageid`, `type`, `hits`) VALUES (50,'index.php?option=com_content&Itemid=212&id=25&lang=en&view=article','7r',1,0);
/*!40000 ALTER TABLE `jos_sh404sef_pageids` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

