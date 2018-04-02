
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
DROP TABLE IF EXISTS `jos_pf_milestones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_pf_milestones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Milestone ID',
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Parent project ID',
  `title` varchar(128) NOT NULL COMMENT 'Milestone title',
  `alias` varchar(128) NOT NULL COMMENT 'Title alias. Used in SEF URL''s',
  `description` varchar(255) NOT NULL COMMENT 'Milestone description',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Milestone creation date',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Milestone author',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Milestone modify date',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Last user to modify the milestone',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'User who is currently editing the milestone',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Check-out date and time',
  `attribs` text NOT NULL COMMENT 'Milestone attributes in JSON format',
  `access` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Milestone ACL access level ID',
  `state` tinyint(3) NOT NULL DEFAULT '0' COMMENT 'Milestone state: 1 = Active, 0 = Inactive, 2 = Archived, -2 = Trashed ',
  `ordering` int(10) NOT NULL DEFAULT '0' COMMENT 'Milestone ordering',
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Milestone start date',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Milestone end date',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_alias` (`alias`,`project_id`),
  KEY `idx_projectid` (`project_id`),
  KEY `idx_access` (`access`),
  KEY `idx_state` (`state`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_checkedout` (`checked_out`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Stores Projectfork milestone data';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_pf_milestones` WRITE;
/*!40000 ALTER TABLE `jos_pf_milestones` DISABLE KEYS */;
INSERT INTO `jos_pf_milestones` (`id`, `asset_id`, `project_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `ordering`, `start_date`, `end_date`) VALUES (1,497,2,'Placement Questionare','placement-questionare','','2017-03-06 03:30:46',43,'2017-03-06 03:31:22',43,0,'0000-00-00 00:00:00','',1,1,0,'2017-03-01 21:39:47','2017-04-27 19:00:00');
INSERT INTO `jos_pf_milestones` (`id`, `asset_id`, `project_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `ordering`, `start_date`, `end_date`) VALUES (2,501,2,'Directed Group Sale','directed-group-sale','','2017-03-06 05:07:25',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,0,'2017-03-01 21:39:47','2017-08-25 20:39:31');
INSERT INTO `jos_pf_milestones` (`id`, `asset_id`, `project_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `state`, `ordering`, `start_date`, `end_date`) VALUES (3,502,2,'Main Sale','main-sale','','2017-03-06 05:07:40',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,0,'2017-03-01 21:39:47','2017-08-25 20:39:31');
/*!40000 ALTER TABLE `jos_pf_milestones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

