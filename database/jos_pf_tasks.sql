
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
DROP TABLE IF EXISTS `jos_pf_tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_pf_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Task ID',
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Parent project ID',
  `list_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Parent task list ID',
  `milestone_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Parent milestone ID',
  `title` varchar(128) NOT NULL COMMENT 'Task title',
  `alias` varchar(128) NOT NULL COMMENT 'Title alias. Used in SEF URL''s',
  `description` text NOT NULL COMMENT 'Task description',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Task creation date',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Task author',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Task modify date',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Last user to modify the task',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'User who is currently editing the task',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Check-out date and time',
  `attribs` text NOT NULL COMMENT 'Task attributes in JSON format',
  `access` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Task ACL access level ID',
  `state` tinyint(3) NOT NULL DEFAULT '0' COMMENT 'Task state: 1 = Active, 0 = Inactive, 2 = Archived, -2 = Trashed ',
  `priority` tinyint(3) NOT NULL DEFAULT '0' COMMENT 'Task priority ID',
  `complete` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Task complete state',
  `completed` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Task completition date',
  `completed_by` int(10) unsigned NOT NULL COMMENT 'The user who completed the task',
  `ordering` int(10) NOT NULL DEFAULT '0' COMMENT 'Task ordering in a task list',
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Task start date',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Task end date',
  `rate` decimal(5,2) NOT NULL COMMENT 'Hourly rate',
  `estimate` int(10) unsigned NOT NULL COMMENT 'Estimated time required for this task to complete',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_alias` (`project_id`,`milestone_id`,`list_id`,`alias`),
  KEY `idx_projectid` (`project_id`),
  KEY `idx_listid` (`list_id`),
  KEY `idx_milestone` (`milestone_id`),
  KEY `idx_access` (`access`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_checkedout` (`checked_out`),
  KEY `idx_priority` (`priority`),
  KEY `idx_complete` (`complete`),
  KEY `idx_state` (`state`),
  KEY `idx_completedby` (`completed_by`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Stores Projectfork task data';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_pf_tasks` WRITE;
/*!40000 ALTER TABLE `jos_pf_tasks` DISABLE KEYS */;
INSERT INTO `jos_pf_tasks` (`id`, `asset_id`, `project_id`, `list_id`, `milestone_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `priority`, `complete`, `completed`, `completed_by`, `ordering`, `start_date`, `end_date`, `rate`, `estimate`) VALUES (1,495,3,0,0,'Change Photo Gallery Pagination','change-photo-gallery-pagination','<p>Photo Gallery pagination needs to be changed into something more usable. This should order perhaps by days? Ex: Saturday, Sunday, Monday ect. It could also work a little like facebook with the Days being anchor points.</p>','2017-03-03 21:45:57',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,2,0,'0000-00-00 00:00:00',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,60);
INSERT INTO `jos_pf_tasks` (`id`, `asset_id`, `project_id`, `list_id`, `milestone_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `priority`, `complete`, `completed`, `completed_by`, `ordering`, `start_date`, `end_date`, `rate`, `estimate`) VALUES (2,496,2,0,1,'Submit Placement Questionare','submit-placement-questionare','','2017-03-03 21:47:45',43,'2017-03-06 03:37:58',43,0,'0000-00-00 00:00:00','',1,1,1,0,'0000-00-00 00:00:00',0,3,'2017-03-01 21:39:47','2017-04-27 00:00:00',0.00,60);
INSERT INTO `jos_pf_tasks` (`id`, `asset_id`, `project_id`, `list_id`, `milestone_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `priority`, `complete`, `completed`, `completed_by`, `ordering`, `start_date`, `end_date`, `rate`, `estimate`) VALUES (3,498,2,0,1,'Draft the Camp Layout','draft-the-camp-layout','','2017-03-06 03:36:04',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,1,0,'0000-00-00 00:00:00',0,2,'2017-03-01 21:39:47','2017-04-27 19:00:00',0.00,60);
INSERT INTO `jos_pf_tasks` (`id`, `asset_id`, `project_id`, `list_id`, `milestone_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `priority`, `complete`, `completed`, `completed_by`, `ordering`, `start_date`, `end_date`, `rate`, `estimate`) VALUES (4,499,2,0,1,'Prepare Questionare Information','prepare-questionare-information','<p>Compile all the information necessary for the Placement Questionare so that it can be quickly submitted.</p>','2017-03-06 03:41:33',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,1,0,'0000-00-00 00:00:00',0,1,'2017-03-01 21:39:47','2017-04-27 19:00:00',0.00,60);
INSERT INTO `jos_pf_tasks` (`id`, `asset_id`, `project_id`, `list_id`, `milestone_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `priority`, `complete`, `completed`, `completed_by`, `ordering`, `start_date`, `end_date`, `rate`, `estimate`) VALUES (5,500,2,0,1,'Draft the Camp Description','draft-the-camp-description','<p>Camp description has a 400 word max.</p>','2017-03-06 03:47:17',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,1,0,'0000-00-00 00:00:00',0,0,'2017-03-01 21:39:47','2017-04-27 19:00:00',0.00,60);
INSERT INTO `jos_pf_tasks` (`id`, `asset_id`, `project_id`, `list_id`, `milestone_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `priority`, `complete`, `completed`, `completed_by`, `ordering`, `start_date`, `end_date`, `rate`, `estimate`) VALUES (6,503,2,0,3,'Register for Mail Sale','register-for-mail-sale','','2017-03-06 05:12:19',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,1,0,'0000-00-00 00:00:00',0,0,'2017-03-22 07:00:00','2017-03-24 07:00:00',0.00,60);
INSERT INTO `jos_pf_tasks` (`id`, `asset_id`, `project_id`, `list_id`, `milestone_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `priority`, `complete`, `completed`, `completed_by`, `ordering`, `start_date`, `end_date`, `rate`, `estimate`) VALUES (7,504,3,0,0,'Smaller screen Sizes sidebar is behaving strangely','smaller-screen-sizes-sidebar-is-behaving-strangely','<p><img src=\"images/website_edits/3-7-2017_1-33-21_PM.jpg\" alt=\"3 7 2017 1 33 21 PM\" /></p>','2017-03-07 21:35:55',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,3,0,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,60);
/*!40000 ALTER TABLE `jos_pf_tasks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

