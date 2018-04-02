
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
DROP TABLE IF EXISTS `jos_pf_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_pf_projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Project ID',
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table',
  `catid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Category ID',
  `title` varchar(128) NOT NULL COMMENT 'Project title',
  `alias` varchar(128) NOT NULL COMMENT 'Title alias. Used in SEF URL''s',
  `description` text NOT NULL COMMENT 'Project description',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Project creation date',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Project owner',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Project modify date',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Last user to modify the project',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'User who is currently editing the project',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Check-out date and time',
  `attribs` text NOT NULL COMMENT 'Project attributes in JSON format',
  `access` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Project ACL access level ID',
  `state` tinyint(3) NOT NULL DEFAULT '0' COMMENT 'Project state: 1 = Active, 0 = Inactive, 2 = Archived, -2 = Trashed',
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Project start date',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Project end date',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_alias` (`alias`),
  KEY `idx_catid` (`catid`),
  KEY `idx_access` (`access`),
  KEY `idx_state` (`state`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_checkedout` (`checked_out`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Stores Projectfork project data';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_pf_projects` WRITE;
/*!40000 ALTER TABLE `jos_pf_projects` DISABLE KEYS */;
INSERT INTO `jos_pf_projects` (`id`, `asset_id`, `catid`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `start_date`, `end_date`) VALUES (1,471,16,'Evaptron','evaptron','','2017-03-03 21:38:42',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','{\"website\":false,\"email\":\"\",\"phone\":\"\",\"repo_dir\":2,\"project_color\":\"\",\"milestone_color\":\"\",\"tasklist_color\":\"\",\"task_color\":\"\",\"currency_code\":\"\",\"currency_sign\":\"\",\"currency_position\":\"\",\"decimal_delimiter\":\"\",\"thousands_delimiter\":\"\"}',1,-2,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `jos_pf_projects` (`id`, `asset_id`, `catid`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `start_date`, `end_date`) VALUES (2,479,0,'Burning Man 2017','burning-man-2017','','2017-03-03 21:40:02',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','{\"website\":false,\"email\":\"\",\"phone\":\"\",\"repo_dir\":3,\"project_color\":\"\",\"milestone_color\":\"\",\"tasklist_color\":\"\",\"task_color\":\"\",\"currency_code\":\"\",\"currency_sign\":\"\",\"currency_position\":\"\",\"decimal_delimiter\":\"\",\"thousands_delimiter\":\"\"}',1,1,'2017-03-01 21:39:47','2017-08-25 20:39:31');
INSERT INTO `jos_pf_projects` (`id`, `asset_id`, `catid`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `start_date`, `end_date`) VALUES (3,487,0,'Mycodelic Website','mycodelic-website','','2017-03-03 21:41:39',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','{\"website\":false,\"email\":\"\",\"phone\":\"\",\"repo_dir\":4,\"project_color\":\"\",\"milestone_color\":\"\",\"tasklist_color\":\"\",\"task_color\":\"\",\"currency_code\":\"\",\"currency_sign\":\"\",\"currency_position\":\"\",\"decimal_delimiter\":\"\",\"thousands_delimiter\":\"\"}',1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `jos_pf_projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

