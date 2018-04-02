
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
DROP TABLE IF EXISTS `jos_comprofiler_plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_comprofiler_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `element` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) DEFAULT '',
  `folder` varchar(100) DEFAULT '',
  `viewaccesslevel` int(10) unsigned NOT NULL DEFAULT '0',
  `backend_menu` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(3) NOT NULL DEFAULT '0',
  `iscore` tinyint(3) NOT NULL DEFAULT '0',
  `client_id` tinyint(3) NOT NULL DEFAULT '0',
  `checked_out` int(11) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `element` (`element`),
  KEY `folder` (`folder`),
  KEY `idx_folder` (`published`,`client_id`,`viewaccesslevel`,`folder`),
  KEY `type_pub_order` (`type`,`published`,`ordering`)
) ENGINE=MyISAM AUTO_INCREMENT=500 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_comprofiler_plugin` WRITE;
/*!40000 ALTER TABLE `jos_comprofiler_plugin` DISABLE KEYS */;
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (1,'CB Core','cb.core','user','plug_cbcore',1,'',1,1,1,0,0,'0000-00-00 00:00:00','{\"name_style\":\"1\",\"name_format\":\"3\",\"date_format\":\"m\\/d\\/Y\",\"time_format\":\"H:i:s\",\"calendar_type\":\"2\",\"allow_email_display\":\"3\",\"allow_email_public\":\"0\",\"allow_email_replyto\":\"1\",\"allow_email\":\"1\",\"allow_website\":\"1\",\"allow_onlinestatus\":\"1\",\"icons_display\":\"3\",\"login_type\":\"0\",\"reg_admin_allowcbregistration\":\"0\",\"emailpass\":\"0\",\"reg_admin_approval\":\"1\",\"reg_confirmation\":\"1\",\"reg_username_checker\":\"1\",\"reg_ipaddress\":\"1\",\"reg_show_login_on_page\":\"0\",\"reg_email_name\":\"REGISTRATION_EMAIL_FROM_NAME\",\"reg_email_from\":\"no-reply@burners.mycodelicforest.org\",\"reg_email_replyto\":\"webmaster@burners.mycodelicforest.org\",\"reg_email_html\":\"1\",\"reg_pend_appr_sub\":\"YOUR_REGISTRATION_IS_PENDING_APPROVAL_SUBJECT\",\"reg_pend_appr_msg\":\"YOUR_REGISTRATION_IS_PENDING_APPROVAL_MESSAGE\",\"reg_welcome_sub\":\"YOUR_REGISTRATION_IS_APPROVED_SUBJECT\",\"reg_welcome_msg\":\"YOUR_REGISTRATION_IS_APPROVED_MESSAGE\",\"reg_layout\":\"flat\",\"reg_show_icons_explain\":\"0\",\"reg_title_img\":\"general\",\"reg_intro_msg\":\"If you are a member of The Mycodelic Forest and\\/or plan on camping with us this year please Register for our new website! We will be using our Forum software for most camp communications.\",\"reg_conclusion_msg\":\"\",\"reg_first_visit_url\":\"index.php?option=com_comprofiler&view=userprofile\",\"usernameedit\":\"1\",\"usernamefallback\":\"name\",\"adminrequiredfields\":\"1\",\"profile_viewaccesslevel\":\"2\",\"maxEmailsPerHr\":\"10\",\"profile_recordviews\":\"1\",\"minHitsInterval\":\"60\",\"templatedir\":\"default\",\"use_divs\":\"1\",\"left2colsWidth\":\"40\",\"left3colsWidth\":\"32\",\"right3colsWidth\":\"32\",\"showEmptyTabs\":\"1\",\"showEmptyFields\":\"1\",\"emptyFieldsText\":\"-\",\"frontend_userparams\":\"1\",\"profile_edit_layout\":\"tabbed\",\"profile_edit_show_icons_explain\":\"0\",\"html_filter_allowed_tags\":\"\",\"conversiontype\":\"4\",\"avatarResizeAlways\":\"1\",\"avatarHeight\":\"500\",\"avatarWidth\":\"200\",\"avatarSize\":\"2000\",\"thumbHeight\":\"86\",\"thumbWidth\":\"60\",\"avatarMaintainRatio\":\"1\",\"moderator_viewaccesslevel\":\"3\",\"allowModUserApproval\":\"1\",\"moderatorEmail\":\"1\",\"allowUserReports\":\"1\",\"avatarUploadApproval\":\"1\",\"allowModeratorsUserEdit\":\"0\",\"allowUserBanning\":\"1\",\"allowConnections\":\"1\",\"connectionDisplay\":\"0\",\"connectionPath\":\"1\",\"useMutualConnections\":\"1\",\"conNotifyType\":\"0\",\"autoAddConnections\":\"1\",\"connection_categories\":\"Friend\\r\\nCo Worker\\r\\nFamily\",\"translations_debug\":\"0\",\"enableSpoofCheck\":\"1\",\"noVersionCheck\":\"0\",\"pluginVersionCheck\":\"1\",\"installFromWeb\":\"1\",\"sendemails\":\"1\",\"templateBootstrap\":\"1\",\"templateFontawesme\":\"1\",\"jsJquery\":\"1\",\"jsJqueryMigrate\":\"1\"}');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (2,'CB Connections','cb.connections','user','plug_cbconnections',1,'',3,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (7,'Default','default','templates','default',1,'',1,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (13,'Default language (English)','default_language','language','default_language',1,'',1,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (14,'CB Menu','cb.menu','user','plug_cbmenu',1,'',2,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (15,'Private Message System','pms.mypmspro','user','plug_pms_mypmspro',1,'',8,0,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (17,'CB Articles','cbarticles','user','plug_cbarticles',1,'',8,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (18,'CB Forums','cbforums','user','plug_cbforums',1,'',9,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `viewaccesslevel`, `backend_menu`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (19,'CB Blogs','cbblogs','user','plug_cbblogs',1,'',10,1,1,0,0,'0000-00-00 00:00:00','');
/*!40000 ALTER TABLE `jos_comprofiler_plugin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

