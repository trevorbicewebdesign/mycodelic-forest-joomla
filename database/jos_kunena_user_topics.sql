
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
DROP TABLE IF EXISTS `jos_kunena_user_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_user_topics` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `topic_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `posts` mediumint(8) NOT NULL DEFAULT '0',
  `last_post_id` int(11) NOT NULL DEFAULT '0',
  `owner` tinyint(4) NOT NULL DEFAULT '0',
  `favorite` tinyint(4) NOT NULL DEFAULT '0',
  `subscribed` tinyint(4) NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  UNIQUE KEY `user_topic_id` (`user_id`,`topic_id`),
  KEY `topic_id` (`topic_id`),
  KEY `posts` (`posts`),
  KEY `owner` (`owner`),
  KEY `favorite` (`favorite`),
  KEY `subscribed` (`subscribed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_user_topics` WRITE;
/*!40000 ALTER TABLE `jos_kunena_user_topics` DISABLE KEYS */;
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,5,8,3,8,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,7,8,1,11,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,9,17,1,56,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,11,11,2,34,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,13,2,0,0,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,15,8,4,31,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,16,3,1,32,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,17,19,4,67,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,18,19,1,38,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,19,2,3,74,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,20,21,1,44,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,21,13,1,45,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,22,8,7,54,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,23,2,2,53,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,28,11,1,68,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,29,11,1,69,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,30,13,1,70,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,31,3,1,73,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,323,13,2,379,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,324,2,4,382,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,325,2,3,389,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,326,2,2,372,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,328,2,1,380,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (43,329,17,2,396,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,2,2,1,2,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,3,3,1,3,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,4,7,1,4,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,5,8,3,24,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,6,10,1,10,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,7,8,1,13,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,8,8,2,15,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,9,17,2,55,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,10,3,2,17,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,11,11,2,20,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,12,7,3,23,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,13,2,2,384,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,14,3,2,27,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,16,3,1,42,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,17,19,1,61,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,19,2,1,43,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,20,21,3,66,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,23,2,1,60,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,24,18,1,57,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,25,18,1,58,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,26,18,1,59,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,27,18,2,65,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,324,2,4,386,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,327,18,2,375,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,328,2,1,383,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,329,17,2,397,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,330,22,1,394,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,331,2,1,398,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (71,333,11,1,400,1,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (75,5,8,1,18,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (75,17,19,1,36,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (75,18,19,1,40,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (80,13,2,1,392,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (80,19,2,1,71,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (80,324,2,1,391,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (80,325,2,2,390,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (756,325,2,1,388,0,0,1,'');
INSERT INTO `jos_kunena_user_topics` (`user_id`, `topic_id`, `category_id`, `posts`, `last_post_id`, `owner`, `favorite`, `subscribed`, `params`) VALUES (810,334,2,0,0,1,0,1,'');
/*!40000 ALTER TABLE `jos_kunena_user_topics` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

