
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
DROP TABLE IF EXISTS `jos_sh404sef_aliases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_sh404sef_aliases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newurl` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `type` tinyint(3) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `target_type` tinyint(3) NOT NULL DEFAULT '0',
  `state` tinyint(3) NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `newurl` (`newurl`),
  KEY `alias` (`alias`),
  KEY `type` (`type`),
  KEY `target_type` (`target_type`),
  KEY `state` (`state`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_sh404sef_aliases` WRITE;
/*!40000 ALTER TABLE `jos_sh404sef_aliases` DISABLE KEYS */;
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (3,'index.php?option=com_kunena&Itemid=425&lang=en&mode=replies&view=topics','Recent-Topics.html',0,345,0,1,1);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (8,'index.php?option=com_kunena&Itemid=535&catid=1&lang=en&view=category','Main-Forum.html',0,0,0,1,13);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (9,'index.php?option=com_kunena&Itemid=423&catid=2&lang=en&view=category','Forum/welcome-mat.html',0,0,0,1,14);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (11,'index.php?option=com_kunena&Itemid=536&catid=2&lang=en&view=category','Welcome-Mat.html',0,348,0,1,15);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (12,'index.php?option=com_kunena&Itemid=537&catid=3&lang=en&layout=list&view=category','Suggestion-Box.html',0,0,0,1,16);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (13,'index.php?option=com_kunena&Itemid=429&lang=en&userid=43&view=user','Profile/43-trevorbice.html',0,0,0,1,17);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (14,'index.php?option=com_kunena&Itemid=423&catid=21&lang=en&view=category','Forum/2016-events.html',0,0,0,1,18);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (15,'index.php?option=com_joomgallery&Itemid=200&lang=en&view=gallery','joomgallery.html',0,0,0,1,19);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (17,'index.php?option=com_joomgallery&catid=3&lang=en&view=category','burning-man-2015.html',0,8,0,1,20);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (18,'index.php?option=com_joomgallery&Itemid=200&lang=en&view=upload','upload.html',0,0,0,1,12);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (21,'index.php?option=com_joomgallery&Itemid=200&catid=4&lang=en&view=category','burning-man-2016.html',0,14,0,1,11);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (22,'index.php?option=com_joomgallery&Itemid=643&lang=en&view=userpanel','userpanel.html',0,0,0,1,10);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (23,'index.php?option=com_k2&Itemid=186&lang=en&layout=category&view=itemlist','blog.html',0,0,0,1,2);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (25,'index.php?option=com_comprofiler&Itemid=445&lang=en&view=userprofile','View-user-profile.html',0,2,0,1,3);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (27,'index.php?option=com_comprofiler&Itemid=725&lang=en&view=logout','Log-out.html',0,2,0,1,4);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (28,'index.php?option=com_comprofiler&Itemid=725&lang=en&view=logout','Logout.htm',0,0,0,1,5);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (29,'index.php?option=com_users&Itemid=724&lang=en&view=login','Log-yourself-in.html',0,34,0,1,6);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (30,'index.php?option=com_users&Itemid=724&lang=en&view=login','Log-in.html',0,962,0,1,7);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (31,'index.php?option=com_kunena&Itemid=424&lang=en&layout=list&view=category','Forum.html',0,4,0,1,8);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (32,'index.php?option=com_kunena&Itemid=424&lang=en&layout=list&view=category','component/comprofiler/userprofile.html',0,29,0,1,9);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (33,'index.php?option=com_comprofiler&lang=en&view=registers','Create-an-account.html',0,566,0,1,21);
INSERT INTO `jos_sh404sef_aliases` (`id`, `newurl`, `alias`, `type`, `hits`, `target_type`, `state`, `ordering`) VALUES (34,'index.php?option=com_content&Itemid=927&id=26&lang=en&view=article','2018-rsvp.html',0,3,0,1,22);
/*!40000 ALTER TABLE `jos_sh404sef_aliases` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

