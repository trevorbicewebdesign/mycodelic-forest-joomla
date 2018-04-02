
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
DROP TABLE IF EXISTS `jos_acymailing_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_acymailing_action` (
  `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `frequency` int(10) unsigned NOT NULL,
  `nextdate` int(10) unsigned NOT NULL,
  `description` text,
  `server` varchar(255) NOT NULL,
  `port` varchar(50) NOT NULL,
  `connection_method` varchar(10) NOT NULL DEFAULT '0',
  `secure_method` varchar(10) NOT NULL DEFAULT '0',
  `self_signed` tinyint(4) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userid` int(10) unsigned DEFAULT NULL,
  `conditions` text,
  `actions` text,
  `report` text,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `ordering` smallint(5) unsigned DEFAULT '0',
  `delete_wrong_emails` tinyint(4) NOT NULL DEFAULT '0',
  `senderfrom` tinyint(4) NOT NULL DEFAULT '0',
  `senderto` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_acymailing_action` WRITE;
/*!40000 ALTER TABLE `jos_acymailing_action` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_acymailing_action` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

