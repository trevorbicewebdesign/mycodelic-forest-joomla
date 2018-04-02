
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
DROP TABLE IF EXISTS `jos_kunena_user_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_user_categories` (
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `allreadtime` int(11) NOT NULL DEFAULT '0',
  `subscribed` tinyint(4) NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  PRIMARY KEY (`user_id`,`category_id`),
  KEY `category_subscribed` (`category_id`,`subscribed`),
  KEY `role` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_user_categories` WRITE;
/*!40000 ALTER TABLE `jos_kunena_user_categories` DISABLE KEYS */;
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (43,0,1,1441767033,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (71,0,1,1441766698,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (72,0,0,1441852177,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (75,0,0,1454030352,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (76,0,0,1457833346,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (77,0,0,1457846275,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (80,0,0,1469493690,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (102,0,0,1467938868,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (121,0,0,1471319076,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (124,0,0,1474597487,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (125,0,0,1474587954,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (126,0,0,1474588586,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (127,0,0,1475269115,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (330,0,0,1481142246,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (331,0,0,1481131160,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (383,0,0,1483395227,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (396,0,0,1483518324,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (399,0,0,1483549139,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (463,0,0,1484569925,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (473,0,0,1485079469,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (474,0,0,1486179632,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (478,0,0,1484395078,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (484,0,0,1484836379,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (486,0,0,1484704420,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (493,0,0,1485079418,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (551,0,0,1485493297,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (576,0,0,1485842961,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (600,0,0,1485921670,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (631,0,0,1486118313,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (645,0,0,1486275550,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (755,0,0,1486521091,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (756,0,0,1487140905,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (757,0,0,1487145909,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (758,0,0,1490864125,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (761,0,0,1495667156,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (779,0,0,1496527335,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (788,0,0,1497561353,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (799,0,0,1498820433,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (802,0,0,1499013699,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (808,0,0,1502243872,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (810,0,0,1509347586,0,'');
INSERT INTO `jos_kunena_user_categories` (`user_id`, `category_id`, `role`, `allreadtime`, `subscribed`, `params`) VALUES (811,0,0,1511235194,0,'');
/*!40000 ALTER TABLE `jos_kunena_user_categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

