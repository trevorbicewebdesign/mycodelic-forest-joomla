
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
DROP TABLE IF EXISTS `jos_rsform_condition_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_condition_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `condition_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `operator` varchar(16) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `condition_id` (`condition_id`),
  KEY `component_id` (`component_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_condition_details` WRITE;
/*!40000 ALTER TABLE `jos_rsform_condition_details` DISABLE KEYS */;
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (1,1,45,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (2,2,45,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (3,2,48,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (4,3,45,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (5,3,48,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (6,4,54,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (7,5,44,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (8,5,44,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (9,5,44,'is','Probably Not');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (10,6,49,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (12,7,44,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (13,7,44,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (14,7,44,'is','Probably Not');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (15,8,44,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (16,8,44,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (17,8,44,'is','Probably Not');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (18,9,44,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (19,9,44,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (20,9,44,'is','Probably Not');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (21,10,68,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (22,10,68,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (23,11,68,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (24,11,68,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (25,12,68,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (26,12,68,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (27,13,68,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (28,13,68,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (29,14,68,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (30,14,68,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (31,15,68,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (32,15,68,'is','Maybe');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (33,16,68,'is','Yes');
INSERT INTO `jos_rsform_condition_details` (`id`, `condition_id`, `component_id`, `operator`, `value`) VALUES (34,16,68,'is','Maybe');
/*!40000 ALTER TABLE `jos_rsform_condition_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

