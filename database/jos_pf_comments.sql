
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
DROP TABLE IF EXISTS `jos_pf_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_pf_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Comment ID',
  `asset_id` int(10) unsigned NOT NULL COMMENT 'FK to the #__assets table',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Parent project ID',
  `item_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Parent item ID',
  `context` varchar(50) NOT NULL COMMENT 'Context reference',
  `title` varchar(128) NOT NULL COMMENT 'The context item title',
  `alias` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text NOT NULL COMMENT 'Comment content',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Comment creation date',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Comment author',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Comment modify date',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Last user to modify the comment',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'User who is currently editing the comment',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Check-out date and time',
  `attribs` text NOT NULL COMMENT 'Comment attributes in JSON format',
  `state` tinyint(3) NOT NULL DEFAULT '0' COMMENT 'Comment state: 1 = Active, 0 = Inactive, 2 = Archived, -2 = Trashed ',
  `parent_id` int(10) unsigned NOT NULL COMMENT 'Adjacency List Reference ID',
  `lft` int(11) NOT NULL COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL COMMENT 'Nested set rgt.',
  `level` int(10) unsigned NOT NULL COMMENT 'Nested comment level',
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_projectid` (`project_id`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_checkedout` (`checked_out`),
  KEY `idx_contextitemid` (`context`,`item_id`),
  KEY `idx_state` (`state`),
  KEY `idx_parentid` (`parent_id`),
  KEY `idx_nested` (`lft`,`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Stores Projectfork item comments';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_pf_comments` WRITE;
/*!40000 ALTER TABLE `jos_pf_comments` DISABLE KEYS */;
INSERT INTO `jos_pf_comments` (`id`, `asset_id`, `project_id`, `item_id`, `context`, `title`, `alias`, `description`, `created`, `created_by`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `attribs`, `state`, `parent_id`, `lft`, `rgt`, `level`, `path`) VALUES (1,0,0,0,'system','ROOT','root','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','',1,0,0,1,0,'');
/*!40000 ALTER TABLE `jos_pf_comments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

