
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
DROP TABLE IF EXISTS `jos_campinventory_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_campinventory_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short_desc` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `condition` int(11) DEFAULT NULL,
  `owned_by` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `checked_out` int(11) NOT NULL DEFAULT '0',
  `checked_out_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_campinventory_items` WRITE;
/*!40000 ALTER TABLE `jos_campinventory_items` DISABLE KEYS */;
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (1,'Chicago Generator 3500-4000 Watt				',22,1,0,'43','','','',90,'item',43,'2017-05-25 08:37:34');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (2,'Duracell AAA Rechargable NiCad Batteries',NULL,16,3,'trevor',NULL,NULL,NULL,0.1,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (3,'Playa Tech Mushroom Bottom Part',22,8,4,'Camp','','','',11,NULL,43,'2017-05-22 03:36:04');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (4,'Playa Tech Mushroom Top Part',22,2,4,'Camp','','','',26,NULL,43,'2017-05-22 03:38:11');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (5,'Bar - Front				',22,1,4,'Camp','','','',34,NULL,43,'2017-05-22 03:52:25');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (6,'Bar - Shelf front				',22,1,4,'Camp','','','',19,NULL,43,'2017-05-22 03:52:36');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (7,'Bar - Back				',22,1,4,'Camp','','','',20,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (8,'Bar - Top',22,1,4,'Camp','','','',25,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (9,'Bar - Lower Side				',22,2,4,'Camp','','','',9,NULL,43,'2016-08-25 08:02:35');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (10,'Bar - Upper Side				',22,2,4,'Camp','','','',11,NULL,43,'2016-08-25 08:02:35');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (11,'Mushroom Stool',22,4,4,'Camp','','','',8.75,NULL,43,'2016-08-25 08:02:35');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (12,'Stove - Front',22,1,4,'Camp','','','',10,NULL,43,'2016-08-25 08:02:35');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (13,'Stove - Side',22,2,4,'Camp','','','',12,NULL,43,'2016-08-25 08:02:35');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (14,'Stove - Top',22,1,4,'Camp','','','',9,NULL,43,'2016-08-25 08:02:35');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (15,'Stove - Back',22,1,4,'Camp','','','',11,NULL,43,'2016-08-25 08:02:35');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (16,'Heavy Duty Yellow 50 Foot Extension Cord',25,3,5,'Camp','50','','',7,NULL,43,'2017-05-22 04:08:40');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (17,'18\' Indoor/Outdoor Rope Light',24,1,5,'Camp','18','','',1,NULL,43,'2017-05-22 04:06:08');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (18,'Mega Par Floodlight',24,2,5,'Camp','','','',9.5,NULL,43,'2017-05-22 04:06:31');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (19,'Timer outlets',25,3,5,'Camp','','','',1.666,NULL,43,'2017-05-22 04:10:30');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (20,'Mycodelic Forest Theme Tapestry',23,1,4,'Camp','','','',1,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (21,'\'Hi\' Pin',23,1,5,'Camp','','','',0,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (22,'Metal Street Sign \'Yonder ->\'',23,1,4,'Camp','','','',1.25,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (23,'Yellow Extension Cord				',22,3,1,'','50','','',7,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (24,'Theme Tent Poles #1				',26,25,2,'Camp','','','',3.25,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (25,'Theme Tent Roof',26,1,3,'','','','',17,NULL,43,'2017-05-22 04:15:27');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (26,'Theme Tent Connectors',26,1,3,'Camp','','','',20,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (27,'Theme Tent Walls',26,1,2,'Camp','','','',14,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (28,'10x20 White Tarp',26,1,2,'','20','10','',7,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (29,'11x9 Blue Tarp',26,1,3,'','137','112','',0,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (30,'Lag Bolts',26,53,5,'Camp','','','',0.66,NULL,0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (31,'Carport Connectors',26,5,3,'0','','','',22,'',43,'2017-05-25 08:42:23');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (32,'Carport Walls & Roof',26,5,3,'0','','','',40,'item',43,'2017-05-25 08:42:33');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (33,'Carport Poles Short x8',26,5,3,'0','','','',32,'item',43,'2017-05-25 08:42:41');
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (34,'Carport Poles Long x8',22,5,4,'0','','','',32,'',0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (35,'Carport Poles Long x8',26,5,3,'0','','','',32,'',0,NULL);
INSERT INTO `jos_campinventory_items` (`id`, `short_desc`, `category`, `quantity`, `condition`, `owned_by`, `length`, `width`, `height`, `weight`, `type`, `checked_out`, `checked_out_time`) VALUES (36,'30 Galllon Grey Water Resevoir',22,0,4,'0','','','',25,'',0,NULL);
/*!40000 ALTER TABLE `jos_campinventory_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

