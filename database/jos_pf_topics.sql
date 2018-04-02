
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
DROP TABLE IF EXISTS `jos_pf_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_pf_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Topic ID',
  `asset_id` int(10) NOT NULL COMMENT 'FK to the #__assets table',
  `project_id` int(10) unsigned NOT NULL COMMENT 'Parent project ID',
  `title` varchar(124) NOT NULL COMMENT 'Topic title',
  `alias` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Title alias. Used in SEF URL''s',
  `description` text NOT NULL COMMENT 'Topic content text',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Topic creation date',
  `created_by` int(10) unsigned NOT NULL COMMENT 'Topic author',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Topic modify date',
  `modified_by` int(10) unsigned NOT NULL COMMENT 'Last user to modify the topic',
  `checked_out` int(10) unsigned NOT NULL COMMENT 'User who is currently editing the topic',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Check-out date and time',
  `attribs` text NOT NULL COMMENT 'Topic attributes in JSON format',
  `access` int(10) unsigned NOT NULL COMMENT 'Topic ACL access level ID',
  `state` tinyint(3) NOT NULL COMMENT 'Topic state: 1 = Active, 0 = Inactive, 2 = Archived, -2 = Trashed',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_alias` (`project_id`,`alias`),
  KEY `idx_projectid` (`project_id`),
  KEY `idx_access` (`access`),
  KEY `idx_state` (`state`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_checkedout` (`checked_out`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores Projectfork discussion topics';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_pf_topics` WRITE;
/*!40000 ALTER TABLE `jos_pf_topics` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_pf_topics` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

