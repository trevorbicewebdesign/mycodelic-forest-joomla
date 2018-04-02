
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
DROP TABLE IF EXISTS `jos_pf_ref_observer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_pf_ref_observer` (
  `user_id` int(10) unsigned NOT NULL COMMENT 'The observing user',
  `item_type` varchar(50) NOT NULL COMMENT 'The observed item type',
  `item_id` int(10) unsigned NOT NULL COMMENT 'The observed item ID',
  `project_id` int(10) unsigned NOT NULL COMMENT 'Project ID to which the item belongs',
  UNIQUE KEY `idx_observing` (`item_type`,`item_id`,`user_id`),
  KEY `idx_project` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores Projectfork notification settings';
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_pf_ref_observer` WRITE;
/*!40000 ALTER TABLE `jos_pf_ref_observer` DISABLE KEYS */;
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfprojects.project',1,1);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfrepo.directory',2,1);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfmilestones.milestone',1,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfmilestones.milestone',2,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfmilestones.milestone',3,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfprojects.project',2,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfrepo.directory',3,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pftasks.task',2,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pftasks.task',3,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pftasks.task',4,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pftasks.task',5,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pftasks.task',6,2);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfprojects.project',3,3);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pfrepo.directory',4,3);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pftasks.task',1,3);
INSERT INTO `jos_pf_ref_observer` (`user_id`, `item_type`, `item_id`, `project_id`) VALUES (43,'com_pftasks.task',7,3);
/*!40000 ALTER TABLE `jos_pf_ref_observer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

