
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
DROP TABLE IF EXISTS `jos_comprofiler_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_comprofiler_fields` (
  `fieldid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `tablecolumns` text NOT NULL,
  `table` varchar(50) NOT NULL DEFAULT '#__comprofiler',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `maxlength` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `required` tinyint(4) DEFAULT '0',
  `tabid` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `cols` int(11) DEFAULT NULL,
  `rows` int(11) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `default` mediumtext,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `registration` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `profile` tinyint(1) NOT NULL DEFAULT '1',
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `searchable` tinyint(1) NOT NULL DEFAULT '0',
  `calculated` tinyint(1) NOT NULL DEFAULT '0',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  `pluginid` int(11) NOT NULL DEFAULT '0',
  `cssclass` varchar(255) DEFAULT NULL,
  `params` mediumtext,
  PRIMARY KEY (`fieldid`),
  KEY `tabid_pub_prof_order` (`tabid`,`published`,`profile`,`ordering`),
  KEY `readonly_published_tabid` (`readonly`,`published`,`tabid`),
  KEY `registration_published_order` (`registration`,`published`,`ordering`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_comprofiler_fields` WRITE;
/*!40000 ALTER TABLE `jos_comprofiler_fields` DISABLE KEYS */;
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (17,'canvas','canvas,canvasapproved,canvasposition','#__comprofiler','USER_CANVAS_IMAGE_TITLE','','image',NULL,NULL,0,7,1,NULL,NULL,NULL,NULL,1,0,1,4,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (24,'connections','','#__comprofiler','_UE_CONNECTION','','connections',NULL,NULL,0,6,1,NULL,NULL,NULL,NULL,1,0,0,2,1,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (25,'hits','hits','#__comprofiler','_UE_HITS','_UE_HITS_DESC','counter',NULL,NULL,0,6,2,NULL,NULL,NULL,NULL,1,0,0,2,1,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (26,'onlinestatus','','#__comprofiler','_UE_ONLINESTATUS','','status',NULL,NULL,0,20,2,NULL,NULL,NULL,NULL,1,0,0,4,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (27,'lastvisitDate','lastvisitDate','#__users','_UE_LASTONLINE','','datetime',NULL,NULL,0,21,2,NULL,NULL,NULL,NULL,1,0,0,2,1,0,1,1,1,NULL,'field_display_by=2');
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (28,'registerDate','registerDate','#__users','_UE_MEMBERSINCE','','datetime',NULL,NULL,0,21,1,NULL,NULL,NULL,NULL,1,0,0,2,1,0,1,1,1,NULL,'field_display_by=6');
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (29,'avatar','avatar,avatarapproved','#__comprofiler','_UE_IMAGE','','image',NULL,NULL,0,20,1,NULL,NULL,NULL,NULL,1,0,1,4,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (41,'name','name','#__users','_UE_NAME','_UE_REGWARN_NAME','predefined',NULL,NULL,1,11,2,NULL,NULL,NULL,NULL,1,1,1,0,0,1,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (42,'username','username','#__users','_UE_UNAME','_UE_VALID_UNAME','predefined',NULL,NULL,1,11,6,NULL,NULL,NULL,NULL,1,1,1,0,0,1,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (44,'acceptedterms','acceptedterms','#__comprofiler','USER_TERMS_AND_CONDITIONS_TITLE','','terms',NULL,NULL,0,11,12,NULL,NULL,NULL,NULL,1,0,0,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (45,'formatname','','#__comprofiler','_UE_FORMATNAME','','formatname',NULL,NULL,0,11,1,NULL,NULL,NULL,NULL,1,0,0,1,1,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (46,'firstname','firstname','#__comprofiler','_UE_YOUR_FNAME','_UE_REGWARN_FNAME','predefined',NULL,NULL,1,11,3,NULL,NULL,NULL,NULL,0,1,1,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (47,'middlename','middlename','#__comprofiler','_UE_YOUR_MNAME','_UE_REGWARN_MNAME','predefined',NULL,NULL,0,11,4,NULL,NULL,NULL,NULL,0,1,1,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (48,'lastname','lastname','#__comprofiler','_UE_YOUR_LNAME','_UE_REGWARN_LNAME','predefined',NULL,NULL,1,11,5,NULL,NULL,NULL,NULL,0,1,1,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (49,'lastupdatedate','lastupdatedate','#__comprofiler','_UE_LASTUPDATEDON','','datetime',NULL,NULL,0,21,3,NULL,NULL,NULL,NULL,1,0,0,2,1,0,1,1,1,NULL,'field_display_by=2');
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (50,'email','email','#__users','_UE_EMAIL','_UE_REGWARN_MAIL','primaryemailaddress',NULL,NULL,1,11,7,NULL,NULL,NULL,NULL,1,1,1,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (51,'password','password','#__users','_UE_PASS','_UE_VALID_PASS','password',50,NULL,1,11,9,NULL,NULL,NULL,NULL,1,1,1,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (52,'params','params','#__users','_UE_USERPARAMS','','userparams',NULL,NULL,0,11,10,NULL,NULL,NULL,NULL,1,0,1,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (53,'pm','','#__comprofiler','_UE_PM','','pm',NULL,NULL,0,11,11,NULL,NULL,NULL,NULL,1,0,0,0,0,0,1,1,1,NULL,NULL);
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (54,'cb_playaname','cb_playaname','#__comprofiler','Playa name','<p>Don\'t worry if you don\'t know what this is!</p>','text',0,0,0,11,13,NULL,NULL,NULL,'',1,1,1,1,0,0,0,0,1,'','{\"fieldLayout\":\"\",\"fieldLayoutEdit\":\"\",\"fieldLayoutList\":\"\",\"fieldLayoutSearch\":\"\",\"fieldLayoutRegister\":\"\",\"fieldLayoutContentPlugins\":\"0\",\"fieldLayoutIcons\":\"\",\"fieldPlaceholder\":\"\",\"fieldMinLength\":\"0\",\"fieldValidateExpression\":\"\",\"pregexp\":\"\\/^.*$\\/\",\"pregexperror\":\"Not a valid input\",\"fieldValidateForbiddenList_register\":\"http:,https:,mailto:,\\/\\/.[url],<a,<\\/a>,&#\",\"fieldValidateForbiddenList_edit\":\"\"}');
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (55,'cb_yearsattended','cb_yearsattended','#__comprofiler','Years Attended','','multiselect',0,0,0,11,14,NULL,NULL,NULL,'',1,1,1,1,0,0,0,0,1,'','{\"fieldLayout\":\"\",\"fieldLayoutEdit\":\"\",\"fieldLayoutList\":\"\",\"fieldLayoutSearch\":\"\",\"fieldLayoutRegister\":\"\",\"fieldLayoutContentPlugins\":\"0\",\"fieldLayoutIcons\":\"\",\"field_display_style\":\"0\",\"field_display_class\":\"\",\"fieldMinLength\":\"0\"}');
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (56,'cb_phone','cb_phone','#__comprofiler','Phone','<p>Current phone number</p>','text',0,0,0,11,15,NULL,NULL,NULL,'',1,1,1,1,0,0,0,0,1,'','{\"fieldLayout\":\"\",\"fieldLayoutEdit\":\"\",\"fieldLayoutList\":\"\",\"fieldLayoutRegister\":\"\",\"fieldLayoutContentPlugins\":\"0\",\"fieldLayoutIcons\":\"\",\"fieldPlaceholder\":\"\",\"fieldMinLength\":\"0\",\"fieldValidateExpression\":\"\",\"pregexp\":\"\\/^.*$\\/\",\"pregexperror\":\"Not a valid input\",\"fieldValidateForbiddenList_register\":\"http:,https:,mailto:,\\/\\/.[url],<a,<\\/a>,&#\",\"fieldValidateForbiddenList_edit\":\"\"}');
INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `edit`, `profile`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `cssclass`, `params`) VALUES (57,'alias','alias','#__comprofiler','YOUR_PROFILE_URL','YOUR_PROFILE_URL_DESC','predefined',NULL,NULL,0,11,8,NULL,NULL,NULL,NULL,1,0,0,0,0,0,1,1,1,NULL,NULL);
/*!40000 ALTER TABLE `jos_comprofiler_fields` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

