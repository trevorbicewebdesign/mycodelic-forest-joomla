
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
DROP TABLE IF EXISTS `jos_usergroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_usergroups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Adjacency List Reference Id',
  `lft` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set rgt.',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_usergroup_parent_title_lookup` (`parent_id`,`title`),
  KEY `idx_usergroup_title_lookup` (`title`),
  KEY `idx_usergroup_adjacency_lookup` (`parent_id`),
  KEY `idx_usergroup_nested_set_lookup` (`lft`,`rgt`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_usergroups` WRITE;
/*!40000 ALTER TABLE `jos_usergroups` DISABLE KEYS */;
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (1,0,1,22,'Public');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (2,1,12,19,'Registered');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (3,2,13,18,'Author');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (4,3,14,17,'Editor');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (5,4,15,16,'Publisher');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (6,1,8,11,'Manager');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (7,6,9,10,'Administrator');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (8,1,20,21,'Super Users');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (11,1,4,5,'Camp Members');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (12,1,2,3,'Camp Alumni');
INSERT INTO `jos_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES (13,1,6,7,'Guest');
/*!40000 ALTER TABLE `jos_usergroups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

