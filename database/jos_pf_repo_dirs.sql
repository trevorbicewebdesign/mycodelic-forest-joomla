
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
DROP TABLE IF EXISTS `jos_pf_repo_dirs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_pf_repo_dirs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Directory ID',
  `asset_id` int(10) unsigned NOT NULL COMMENT 'FK to the #__assets table',
  `project_id` int(10) unsigned NOT NULL COMMENT 'Parent project id',
  `title` varchar(56) NOT NULL COMMENT 'Directory title',
  `alias` varchar(56) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Title alias. Used in SEF URL''s',
  `description` varchar(128) NOT NULL COMMENT 'Directory description text',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Directory creation date',
  `created_by` int(10) unsigned NOT NULL COMMENT 'Directory author',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Directory modify date',
  `modified_by` int(10) unsigned NOT NULL COMMENT 'Last user to modify the directory',
  `checked_out` int(10) unsigned NOT NULL COMMENT 'User who is currently editing the directory',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Check-out date and time',
  `attribs` text NOT NULL COMMENT 'Directory attributes in JSON format',
  `access` int(10) unsigned NOT NULL COMMENT 'Directory ACL access level ID',
  `protected` tinyint(1) NOT NULL COMMENT 'If set to 1, directories cannot be deleted manually',
  `parent_id` int(10) unsigned NOT NULL COMMENT 'Adjacency List Reference ID',
  `lft` int(10) NOT NULL COMMENT 'Nested set lft.',
  `rgt` int(10) NOT NULL COMMENT 'Nested set rgt.',
  `level` int(10) unsigned NOT NULL COMMENT 'Nested directory level',
  `path` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Directory path',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_alias` (`alias`,`parent_id`),
  KEY `idx_projectid` (`project_id`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_checkedout` (`checked_out`),
  KEY `idx_parentid` (`parent_id`),
  KEY `idx_nested` (`lft`,`rgt`),
  KEY `idx_access` (`access`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Stores Projectfork repository directory information';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_pf_repo_dirs` WRITE;
/*!40000 ALTER TABLE `jos_pf_repo_dirs` DISABLE KEYS */;
INSERT INTO `jos_pf_repo_dirs` (`id`, `asset_id`, `project_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `protected`, `parent_id`, `lft`, `rgt`, `level`, `path`) VALUES (1,0,0,'Root','root','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,1,0,0,7,0,'');
INSERT INTO `jos_pf_repo_dirs` (`id`, `asset_id`, `project_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `protected`, `parent_id`, `lft`, `rgt`, `level`, `path`) VALUES (2,478,1,'Evaptron','evaptron','','2017-03-03 21:38:42',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','{}',1,1,1,1,2,1,'evaptron');
INSERT INTO `jos_pf_repo_dirs` (`id`, `asset_id`, `project_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `protected`, `parent_id`, `lft`, `rgt`, `level`, `path`) VALUES (3,486,2,'Burning Man 2017','burning-man-2017','','2017-03-03 21:40:02',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','{}',1,1,1,3,4,1,'burning-man-2017');
INSERT INTO `jos_pf_repo_dirs` (`id`, `asset_id`, `project_id`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `access`, `protected`, `parent_id`, `lft`, `rgt`, `level`, `path`) VALUES (4,494,3,'Mycodelic Website','mycodelic-website','','2017-03-03 21:41:39',43,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','{}',1,1,1,5,6,1,'mycodelic-website');
/*!40000 ALTER TABLE `jos_pf_repo_dirs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

