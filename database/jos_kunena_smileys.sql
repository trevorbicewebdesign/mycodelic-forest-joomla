
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
DROP TABLE IF EXISTS `jos_kunena_smileys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_smileys` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) NOT NULL DEFAULT '',
  `location` varchar(50) NOT NULL DEFAULT '',
  `greylocation` varchar(60) NOT NULL DEFAULT '',
  `emoticonbar` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_smileys` WRITE;
/*!40000 ALTER TABLE `jos_kunena_smileys` DISABLE KEYS */;
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (1,'B)','cool.png','cool-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (2,'8)','cool.png','cool-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (3,'8-)','cool.png','cool-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (4,':-(','sad.png','sad-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (5,':(','sad.png','sad-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (6,':sad:','sad.png','sad-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (7,':cry:','sad.png','sad-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (8,':)','smile.png','smile-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (9,':-)','smile.png','smile-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (10,':cheer:','cheerful.png','cheerful-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (11,';)','wink.png','wink-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (12,';-)','wink.png','wink-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (13,':wink:','wink.png','wink-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (14,';-)','wink.png','wink-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (15,':P','tongue.png','tongue-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (16,':p','tongue.png','tongue-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (17,':-p','tongue.png','tongue-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (18,':-P','tongue.png','tongue-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (19,':razz:','tongue.png','tongue-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (20,':angry:','angry.png','angry-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (21,':mad:','angry.png','angry-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (22,':unsure:','unsure.png','unsure-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (23,':o','shocked.png','shocked-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (24,':-o','shocked.png','shocked-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (25,':O','shocked.png','shocked-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (26,':-O','shocked.png','shocked-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (27,':eek:','shocked.png','shocked-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (28,':ohmy:','shocked.png','shocked-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (29,':huh:','wassat.png','wassat-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (30,':?','confused.png','confused-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (31,':-?','confused.png','confused-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (32,':???','confused.png','confused-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (33,':dry:','ermm.png','ermm-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (34,':ermm:','ermm.png','ermm-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (35,':lol:','grin.png','grin-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (36,':X','sick.png','sick-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (37,':x','sick.png','sick-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (38,':sick:','sick.png','sick-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (39,':silly:','silly.png','silly-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (40,':y32b4:','silly.png','silly-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (41,':blink:','blink.png','blink-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (42,':blush:','blush.png','blush-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (43,':oops:','blush.png','blush-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (44,':kiss:','kissing.png','kissing-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (45,':rolleyes:','blink.png','blink-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (46,':roll:','blink.png','blink-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (47,':woohoo:','w00t.png','w00t-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (48,':side:','sideways.png','sideways-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (49,':S','dizzy.png','dizzy-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (50,':s','dizzy.png','dizzy-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (51,':evil:','devil.png','devil-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (52,':twisted:','devil.png','devil-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (53,':whistle:','whistling.png','whistling-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (54,':pinch:','pinch.png','pinch-grey.png',1);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (55,':D','laughing.png','laughing-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (56,':-D','laughing.png','laughing-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (57,':grin:','laughing.png','laughing-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (58,':laugh:','laughing.png','laughing-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (59,':|','neutral.png','neutral-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (60,':-|','neutral.png','neutral-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (61,':neutral:','neutral.png','neutral-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (62,':mrgreen:','mrgreen.png','mrgreen-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (63,':?:','question.png','question-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (64,':!:','exclamation.png','exclamation-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (65,':arrow:','arrow.png','arrow-grey.png',0);
INSERT INTO `jos_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES (66,':idea:','idea.png','idea-grey.png',0);
/*!40000 ALTER TABLE `jos_kunena_smileys` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

