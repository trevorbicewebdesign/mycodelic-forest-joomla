
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
DROP TABLE IF EXISTS `jos_wblib_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_wblib_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(50) NOT NULL DEFAULT '',
  `sub_type` varchar(150) NOT NULL DEFAULT '',
  `display_type` tinyint(3) NOT NULL DEFAULT '0',
  `uid` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(512) DEFAULT NULL,
  `body` varchar(2048) NOT NULL DEFAULT '',
  `action` tinyint(3) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `acked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hide_after` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hide_until` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `scope` (`scope`),
  KEY `type_index` (`type`,`sub_type`),
  KEY `acked_on` (`acked_on`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_wblib_messages` WRITE;
/*!40000 ALTER TABLE `jos_wblib_messages` DISABLE KEYS */;
INSERT INTO `jos_wblib_messages` (`id`, `scope`, `type`, `sub_type`, `display_type`, `uid`, `title`, `body`, `action`, `created_on`, `acked_on`, `hide_after`, `hide_until`) VALUES (1,'com_sh404sef','sh404sef.general','welcome',0,'72c50e0e3566d928457eb9ff21391670c4cb9a69','Welcome to sh404SEF!','To enable it for your site, use the main <i>Enable URL optimization</i> Yes/No selector and press the <strong>Save</strong> button. sh404SEF will start with its default settings, suitable in most cases.<br/><br /><a href=\'https://weeblr.com/documentation\' target=\'_blank\' title=\'sh404sef Documentation\'>Please check out the documentation</a>',0,'2017-02-20 02:45:23','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `jos_wblib_messages` (`id`, `scope`, `type`, `sub_type`, `display_type`, `uid`, `title`, `body`, `action`, `created_on`, `acked_on`, `hide_after`, `hide_until`) VALUES (2,'com_sh404sef','sh404sef.config','analytics_configuration_issue',3,'db49a202c784c755557b320b479525043cce10f4','Google Analytics is not properly configured.','If you enabled Analytics data collection, check that you entered a valid Google property ID. If you have enabled Google Analytics reports display, be sure to complete the authorization procedure. For more information, please see <a target=_blank href=https://weeblr.com/q6k>this page.</a>',7,'2017-02-20 02:45:23','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `jos_wblib_messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

