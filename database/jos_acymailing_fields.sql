
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
DROP TABLE IF EXISTS `jos_acymailing_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_acymailing_fields` (
  `fieldid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(250) NOT NULL,
  `namekey` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `value` text NOT NULL,
  `published` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `ordering` smallint(5) unsigned DEFAULT '99',
  `options` text,
  `core` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `required` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `backend` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `frontcomp` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `frontform` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `default` text,
  `listing` tinyint(3) unsigned DEFAULT NULL,
  `frontlisting` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `frontjoomlaprofile` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `frontjoomlaregistration` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `joomlaprofile` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access` varchar(250) NOT NULL DEFAULT 'all',
  `fieldcat` int(11) NOT NULL DEFAULT '0',
  `listingfilter` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `frontlistingfilter` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldid`),
  UNIQUE KEY `namekey` (`namekey`),
  KEY `orderingindex` (`published`,`ordering`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_acymailing_fields` WRITE;
/*!40000 ALTER TABLE `jos_acymailing_fields` DISABLE KEYS */;
INSERT INTO `jos_acymailing_fields` (`fieldid`, `fieldname`, `namekey`, `type`, `value`, `published`, `ordering`, `options`, `core`, `required`, `backend`, `frontcomp`, `frontform`, `default`, `listing`, `frontlisting`, `frontjoomlaprofile`, `frontjoomlaregistration`, `joomlaprofile`, `access`, `fieldcat`, `listingfilter`, `frontlistingfilter`) VALUES (1,'NAMECAPTION','name','text','',1,1,'',1,1,1,1,1,'',1,1,0,0,0,'all',0,0,0);
INSERT INTO `jos_acymailing_fields` (`fieldid`, `fieldname`, `namekey`, `type`, `value`, `published`, `ordering`, `options`, `core`, `required`, `backend`, `frontcomp`, `frontform`, `default`, `listing`, `frontlisting`, `frontjoomlaprofile`, `frontjoomlaregistration`, `joomlaprofile`, `access`, `fieldcat`, `listingfilter`, `frontlistingfilter`) VALUES (2,'EMAILCAPTION','email','text','',1,2,'',1,1,1,1,1,'',1,1,0,0,0,'all',0,0,0);
INSERT INTO `jos_acymailing_fields` (`fieldid`, `fieldname`, `namekey`, `type`, `value`, `published`, `ordering`, `options`, `core`, `required`, `backend`, `frontcomp`, `frontform`, `default`, `listing`, `frontlisting`, `frontjoomlaprofile`, `frontjoomlaregistration`, `joomlaprofile`, `access`, `fieldcat`, `listingfilter`, `frontlistingfilter`) VALUES (3,'RECEIVE','html','radio','0::JOOMEXT_TEXT\n1::HTML',1,3,'',1,1,1,1,1,'1',1,0,0,0,0,'all',0,0,0);
/*!40000 ALTER TABLE `jos_acymailing_fields` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

