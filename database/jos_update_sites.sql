
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
DROP TABLE IF EXISTS `jos_update_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_update_sites` (
  `update_site_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `location` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` int(11) DEFAULT '0',
  `last_check_timestamp` bigint(20) DEFAULT '0',
  `extra_query` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`update_site_id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Update Sites';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_update_sites` WRITE;
/*!40000 ALTER TABLE `jos_update_sites` DISABLE KEYS */;
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (1,'Joomla Core','collection','https://update.joomla.org/core/list.xml',1,1522638376,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (2,'Joomla Extension Directory','collection','http://update.joomla.org/jed/list.xml',1,1522638376,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (3,'Accredited Joomla! Translations','collection','http://update.joomla.org/language/translationlist_3.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (5,'WebInstaller Update Site','extension','http://appscdn.joomla.org/webapps/jedapps/webinstaller.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (7,'','collection','http://update.joomlart.com/service/tracking/list.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (8,'RocketTheme Update Directory','collection','http://updates.rockettheme.com/joomla/updates.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (9,'Xmap Update Site','extension','https://raw.github.com/guilleva/Xmap/master/xmap-update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (10,'K2 Updates','extension','http://getk2.org/update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (11,'jHackGuard Updates','extension','http://download.siteground.com/jhackguard.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (12,'Grid GK5 Updates','extension','https://www.gavick.com/update_server/joomla25/grid_gk5.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (13,'News Show Pro GK5 Updates','extension','https://www.gavick.com/update_server/joomla30/nsp_gk5.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (14,'Tabs GK5 Updates','extension','https://www.gavick.com/update_server/joomla30/tabs_gk5.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (15,'Social GK5 Updates','extension','https://www.gavick.com/update_server/joomla30/social_gk5.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (17,'VirtueMart plg_vmpayment_standard Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_standard_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (18,'VirtueMart plg_vmpayment_klarna Update Site','extension','VirtueMart plg_vmpayment_klarna Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (19,'VirtueMart plg_vmpayment_klarnacheckout Update Site','extension','VirtueMart plg_vmpayment_klarnacheckout Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (20,'VirtueMart plg_vmpayment_sofort Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_sofort_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (21,'VirtueMart plg_vmpayment_paypal Update Site','extension','VirtueMart plg_vmpayment_paypal Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (22,'VirtueMart plg_vmpayment_heidelpay Update Site','extension','VirtueMart plg_vmpayment_heidelpay Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (23,'VirtueMart plg_vmpayment_paybox Update Site','extension','VirtueMart plg_vmpayment_paybox Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (24,'VirtueMart plg_vmpayment_realex_hpp_api Update Site','extension','VirtueMart plg_vmpayment_realex_hpp_api Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (25,'VirtueMart plg_vmuserfield_realex_hpp_api Update Site','extension','\n            http://virtuemart.net/releases/vm3/plg_vmuserfield_realex_hpp_api_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (26,'VirtueMart3 plg_vmpayment_skrill Update Site','extension','VirtueMart3 plg_vmpayment_skrill Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (27,'VirtueMart plg_vmpayment_authorizenet Update Site','extension','VirtueMart plg_vmpayment_authorizenet Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (28,'VirtueMart plg_vmpayment_sofort_ideal Update Site','extension','VirtueMart plg_vmpayment_sofort_ideal Update Site',0,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (29,'VirtueMart3 plg_vmshipment_weight_countries Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmshipment_weight_countries_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (30,'VirtueMart3 plg_vmcustom_textinput Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmcustom_textinput_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (31,'VirtueMart3 plg_vmcustom_specification Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmcustom_specification_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (32,'VirtueMart3 plg_vmcalculation_avalara Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmcalculation_avalara_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (41,'VirtueMart3 AIO Update Site','extension','http://virtuemart.net/releases/vm3/virtuemart_aio_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (42,'JCE MediaBox Updates','extension','https://www.joomlacontenteditor.net/index.php?option=com_updates&view=update&format=xml&id=3&file=extension.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (43,'JoomGallery Update Service','collection','http://www.en.joomgallery.net/components/com_newversion/xml/extensions3.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (44,'JoomGallery Update Service','collection','http://www.joomgallery.net/components/com_newversion/xml/extensions3.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (45,'T3 Framework Update','extension','http://www.t3-framework.org/update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (46,'Joomla! Update Component Update Site','extension','http://update.joomla.org/core/extensions/com_joomlaupdate.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (48,'VirtueMart plg_vmpayment_klickandpay Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_klikandpay_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (49,'jHackGuard Component Updates','extension','http://www.jhackguard.com/updates/com_jhackguard.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (50,'jHackGuard Plugin Updates','extension','http://www.jhackguard.com/updates/plg_jhackguard.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (52,'Weblinks Update Site','extension','https://raw.githubusercontent.com/joomla-extensions/weblinks/master/manifest.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (53,'VirtueMart plg_vmpayment_amazon Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_amazon_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (54,'VirtueMart plg_system_amazon Update Site','extension','http://virtuemart.net/releases/vm3/plg_system_amazon_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (55,'JCH Optimize Updates','extension','https://www.jch-optimize.net/index.php?option=com_ars&view=update&task=stream&format=xml&id=1&file=extension.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (56,'jSGCache Updates','extension','http://download.siteground.com/jsgcache.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (57,'sh404SEF updates','extension','http://u1.weeblr.com/public/direct/sh404sef/update/com_sh404sef_full.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (58,'SCLogin Updates','extension','http://www.sourcecoast.com/updates/sclogin.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (59,'JFBConnect Updates','extension','http://www.sourcecoast.com/updates/jfbconnect.xml',1,0,'dlid=63ec650a516cf283e333b4908de9ec3b');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (60,'Kunena 4.0 Update Site','collection','http://update.kunena.org/4.0/list.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (63,'K2 Updates','extension','http://getk2.org/app/update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (64,'VirtueMart3 plg_vmpayment_tco Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_tco_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (65,'AcyMailing','extension','http://www.acyba.com/component/updateme/updatexml/component-acymailing/level-Starter/file-extension.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (69,'JCE MediaBox Updates','extension','https://www.joomlacontenteditor.net/index.php?option=com_updates&view=update&format=xml&file=jcemediabox.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (70,'Joomla! Update Component Update Site','extension','https://update.joomla.org/core/extensions/com_joomlaupdate.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (71,'RSFirewall!','extension','https://www.rsjoomla.com/updates/com_rsfirewall/Component/com_rsfirewall.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (74,'RSForm! Pro','extension','https://www.rsjoomla.com/updates/com_rsform/Component/com_rsform.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (75,'Community Builder Package Update Site','collection','https://update.joomlapolis.net/versions/pkg-communitybuilder-list.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (76,'sh404SEF updates','extension','https://u1.weeblr.com/public/direct/sh404sef/update/com_sh404sef_j3_full.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (77,'Kunena 5.0 Update Site','collection','https://update.kunena.org/5.0/list.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (78,'jQuery Easy auto updater','extension','http://www.barejoomlatemplates.com/autoupdates/jqueryeasy/jqueryeasy-update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (79,'Projectfork 4 Update','extension','http://projectfork.net/index.php?option=com_ars&view=update&task=stream&format=xml&id=1&dummy=extension.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (80,'','extension','http://update.joomlart.com/service/tracking/j16/plg_system_t3.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (82,'WebInstaller Update Site','extension','https://appscdn.joomla.org/webapps/jedapps/webinstaller.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (83,'Mothership Update Site','extension','https://raw.github.com/trevorbicewebdesign/Mothership-Tracking/master/updates.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (86,'Mothership Update Site','extension','https://raw.githubusercontent.com/trevorbicewebdesign/Mothership-Tracking/master/updates.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (88,'Akeeba Backup Core','extension','https://cdn.akeebabackup.com/updates/pkgakeebacore.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (89,'FOF 3.x','extension','http://cdn.akeebabackup.com/updates/fof3.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (90,'JCH Optimize Updates','extension','https://www.jch-optimize.net/index.php?option=com_ars&view=update&task=stream&format=xml&id=4&file=extension.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (92,'VirtueMart plg_vmpayment_standard Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_standard_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (93,'VirtueMart plg_vmpayment_klarna Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_klarna_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (94,'VirtueMart plg_vmpayment_klarnacheckout Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_klarnacheckout_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (95,'VirtueMart plg_vmpayment_sofort Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_sofort_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (96,'VirtueMart plg_vmpayment_paypal Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_paypal_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (97,'VirtueMart plg_vmpayment_heidelpay Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_heidelpay_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (98,'VirtueMart plg_vmpayment_paybox Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_paybox_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (99,'VirtueMart3 plg_vmpayment_tco Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_tco_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (100,'VirtueMart plg_vmpayment_amazon Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_amazon_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (101,'VirtueMart plg_vmpayment_realex_hpp_api Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_realex_hpp_api_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (102,'VirtueMart plg_vmuserfield_realex_hpp_api Update Site','extension','\n            http://virtuemart.net/releases/vm3/plg_vmuserfield_realex_hpp_api_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (103,'VirtueMart3 plg_vmpayment_skrill Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_skrill_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (104,'VirtueMart plg_vmpayment_authorizenet Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_authorisenet_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (106,'VirtueMart plg_vmpayment_klikandpay Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmpayment_klikandpay_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (107,'VirtueMart3 plg_vmshipment_weight_countries Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmshipment_weight_countries_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (108,'VirtueMart3 plg_vmcustom_textinput Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmcustom_textinput_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (109,'VirtueMart3 plg_vmcustom_specification Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmcustom_specification_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (110,'VirtueMart3 plg_vmcalculation_avalara Update Site','extension','http://virtuemart.net/releases/vm3/plg_vmcalculation_avalara_update.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (120,'RSForm! Pro - System Plugin','extension','https://www.rsjoomla.com/updates/com_rsform/Plugins/plg_rsform.xml',1,0,'');
INSERT INTO `jos_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES (121,'Community Builder Package Update Site','collection','https://update.joomlapolis.net/versions/pkg-communitybuilder-list.xml',1,0,'');
/*!40000 ALTER TABLE `jos_update_sites` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

