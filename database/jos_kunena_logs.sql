
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
DROP TABLE IF EXISTS `jos_kunena_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `topic_id` int(11) NOT NULL DEFAULT '0',
  `target_user` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(40) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  `operation` varchar(40) NOT NULL,
  `data` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `category_id` (`category_id`),
  KEY `topic_id` (`topic_id`),
  KEY `target_user` (`target_user`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_logs` WRITE;
/*!40000 ALTER TABLE `jos_kunena_logs` DISABLE KEYS */;
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (1,3,0,0,0,0,'24.35.67.154',1488340910,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Call to a member function getTime() on a non-object\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/template\\/crypsisb3\\/layouts\\/user\\/profile\\/default.php\",\"line\":57}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (2,3,0,0,0,0,'24.35.67.154',1488340915,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Call to a member function getTime() on a non-object\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/template\\/crypsisb3\\/layouts\\/user\\/profile\\/default.php\",\"line\":57}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (3,3,0,0,0,0,'24.35.67.154',1488340938,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Call to a member function getTime() on a non-object\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/template\\/crypsisb3\\/layouts\\/user\\/profile\\/default.php\",\"line\":57}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (4,3,0,0,0,0,'24.35.67.154',1488340941,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Call to a member function getTime() on a non-object\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/template\\/crypsisb3\\/layouts\\/user\\/profile\\/default.php\",\"line\":57}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (5,3,0,0,0,0,'24.35.67.154',1488341638,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Call to a member function getTime() on a non-object\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/template\\/crypsisb3\\/layouts\\/user\\/profile\\/default.php\",\"line\":55}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (6,3,0,0,0,0,'24.35.67.154',1488342833,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Call to a member function getTime() on a non-object\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/template\\/crypsisb3\\/layouts\\/user\\/profile\\/default.php\",\"line\":57}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (7,3,0,0,0,0,'24.35.67.154',1488343220,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Call to a member function getTime() on a non-object\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/template\\/crypsisb3\\/layouts\\/user\\/profile\\/default.php\",\"line\":59}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (8,3,43,0,0,0,'24.35.67.154',1488362573,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (9,3,43,0,0,0,'24.35.67.154',1488362575,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (10,3,43,0,0,0,'24.35.67.154',1488362611,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (11,3,43,0,0,0,'24.35.67.154',1488362663,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (12,3,43,0,0,0,'24.35.67.154',1488362665,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (13,3,43,0,0,0,'24.35.67.154',1488362666,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (14,3,43,0,0,0,'24.35.67.154',1488362809,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (15,3,43,0,0,0,'24.35.67.154',1488362917,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (16,3,43,0,0,0,'24.35.67.154',1488362921,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (17,3,43,0,0,0,'24.35.67.154',1488362951,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (18,3,43,0,0,0,'24.35.67.154',1488363000,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (19,3,43,0,0,0,'24.35.67.154',1488363003,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (20,3,43,0,0,0,'24.35.67.154',1488363004,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (21,3,43,0,0,0,'24.35.67.154',1488363078,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (22,3,43,0,0,0,'24.35.67.154',1488363081,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (23,3,43,0,0,0,'24.35.67.154',1488363146,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (24,3,43,0,0,0,'24.35.67.154',1488363148,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (25,3,43,0,0,0,'24.35.67.154',1488363180,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (26,3,43,0,0,0,'24.35.67.154',1488363182,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (27,3,43,0,0,0,'24.35.67.154',1488363219,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (28,3,43,0,0,0,'24.35.67.154',1488363233,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (29,3,43,0,0,0,'24.35.67.154',1488363240,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (30,3,43,0,0,0,'24.35.67.154',1488363242,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (31,3,43,0,0,0,'24.35.67.154',1488363252,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (32,3,43,0,0,0,'24.35.67.154',1488363254,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (33,3,43,0,0,0,'24.35.67.154',1488363260,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (34,3,43,0,0,0,'24.35.67.154',1488363261,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (35,3,43,0,0,0,'24.35.67.154',1488363296,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (36,3,43,0,0,0,'24.35.67.154',1488363382,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (37,3,43,0,0,0,'24.35.67.154',1488363390,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (38,3,43,0,0,0,'24.35.67.154',1488363392,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (39,3,43,0,0,0,'24.35.67.154',1488363423,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (40,3,43,0,0,0,'24.35.67.154',1488363424,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (41,3,43,0,0,0,'24.35.67.154',1488364207,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (42,3,43,0,0,0,'24.35.67.154',1488364273,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (43,3,43,0,0,0,'24.35.67.154',1488364427,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (44,3,43,0,0,0,'24.35.67.154',1488364657,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (45,3,43,0,0,0,'24.35.67.154',1488364658,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (46,3,43,0,0,0,'24.35.67.154',1488364766,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (47,3,43,0,0,0,'24.35.67.154',1488364768,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (48,3,43,0,0,0,'24.35.67.154',1488365190,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (49,3,43,0,0,0,'24.35.67.154',1488365235,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":85}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (50,3,43,0,0,0,'24.35.67.154',1488365418,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (51,3,43,0,0,0,'24.35.67.154',1488365421,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (52,3,43,0,0,0,'24.35.67.154',1488365538,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (53,3,43,0,0,0,'24.35.67.154',1488365542,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (54,3,43,0,0,0,'24.35.67.154',1488365706,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (55,3,43,0,0,0,'24.35.67.154',1488365743,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (56,3,43,0,0,0,'24.35.67.154',1488365744,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (57,3,43,0,0,0,'24.35.67.154',1488365753,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (58,3,43,0,0,0,'24.35.67.154',1488365793,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (59,3,43,0,0,0,'24.35.67.154',1488365818,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (60,3,43,0,0,0,'24.35.67.154',1488365881,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
INSERT INTO `jos_kunena_logs` (`id`, `type`, `user_id`, `category_id`, `topic_id`, `target_user`, `ip`, `time`, `operation`, `data`) VALUES (61,3,43,0,0,0,'24.35.67.154',1488365886,'LOG_ERROR_FATAL','{\"type\":1,\"message\":\"Class \'KunenaSpamRecaptcha\' not found\",\"file\":\"\\/home\\/trevorbi\\/mycodelicforest.org\\/public_html\\/components\\/com_kunena\\/controller\\/message\\/item\\/actions\\/display.php\",\"line\":86}');
/*!40000 ALTER TABLE `jos_kunena_logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
