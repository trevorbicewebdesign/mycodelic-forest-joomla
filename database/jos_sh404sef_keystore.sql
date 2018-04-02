
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
DROP TABLE IF EXISTS `jos_sh404sef_keystore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_sh404sef_keystore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(50) NOT NULL DEFAULT 'default',
  `key` varchar(255) NOT NULL DEFAULT '',
  `value` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `format` tinyint(3) NOT NULL DEFAULT '1',
  `modified_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `main` (`scope`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_sh404sef_keystore` WRITE;
/*!40000 ALTER TABLE `jos_sh404sef_keystore` DISABLE KEYS */;
INSERT INTO `jos_sh404sef_keystore` (`id`, `scope`, `key`, `value`, `user_id`, `format`, `modified_at`) VALUES (1,'default','com_sh404sef.errors.404.en-GB','s:624:\"<h1>Bad karma: we can\'t find that page!</h1><p>You asked for <strong>{%sh404SEF_404_URL%}</strong>, but despite our computers looking very hard, we could not find it. What happened ?</p><ul><li>the link you clicked to arrive here has a typo in it</li><li>or somehow we removed that page, or gave it another name</li><li>or, quite unlikely for sure, maybe you typed it yourself and there was a little mistake ?</li></ul><h4>{sh404sefSimilarUrlsCommentStart}It\'s not the end of everything though : you may be interested in the following pages on our site:{sh404sefSimilarUrlsCommentEnd}</h4><p>{sh404sefSimilarUrls}</p><p></p>\";',43,0,'2017-02-20 02:45:16');
/*!40000 ALTER TABLE `jos_sh404sef_keystore` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

