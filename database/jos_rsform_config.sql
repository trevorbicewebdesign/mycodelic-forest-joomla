
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
DROP TABLE IF EXISTS `jos_rsform_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_config` (
  `SettingName` varchar(64) NOT NULL DEFAULT '',
  `SettingValue` text NOT NULL,
  PRIMARY KEY (`SettingName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_config` WRITE;
/*!40000 ALTER TABLE `jos_rsform_config` DISABLE KEYS */;
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('global.register.code','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('global.debug.mode','0');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('global.iis','0');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('global.editor','1');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('global.codemirror','0');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('auto_responsive','1');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('global.date_mask','Y-m-d H:i:s');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('global.filtering','joomla');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('calculations.thousands',',');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('calculations.decimal','.');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('calculations.nodecimals','2');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('payment.currency','USD');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('payment.thousands',',');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('payment.decimal','.');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('payment.nodecimals','2');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('payment.mask','{product} - {price} {currency}');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('payment.totalmask','{price} {currency}');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('paypal.email','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('paypal.return','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('paypal.test','0');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('paypal.cancel','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('paypal.language','US');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('paypal.tax.type','1');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('paypal.tax.value','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('google.code','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('recaptcha.private.key','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('recaptcha.public.key','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('recaptcha.theme','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('cc.username','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('cc.password','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('cc.key','');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('request_timeout','0');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('backup.mask','backup-{domain}-{date}');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('allow_unsafe','0');
INSERT INTO `jos_rsform_config` (`SettingName`, `SettingValue`) VALUES ('google.api_key','');
/*!40000 ALTER TABLE `jos_rsform_config` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

