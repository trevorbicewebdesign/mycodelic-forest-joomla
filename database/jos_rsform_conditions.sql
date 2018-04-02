
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
DROP TABLE IF EXISTS `jos_rsform_conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_conditions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL,
  `action` varchar(16) NOT NULL,
  `block` tinyint(1) NOT NULL,
  `component_id` int(11) NOT NULL,
  `condition` varchar(16) NOT NULL,
  `lang_code` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `form_id` (`form_id`),
  KEY `component_id` (`component_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_conditions` WRITE;
/*!40000 ALTER TABLE `jos_rsform_conditions` DISABLE KEYS */;
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (1,7,'show',1,48,'all','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (2,7,'show',1,49,'all','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (3,7,'show',1,49,'all','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (4,7,'show',1,55,'all','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (5,7,'show',1,45,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (6,7,'show',1,51,'all','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (7,7,'show',1,46,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (8,7,'show',1,52,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (9,7,'show',1,54,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (10,8,'show',1,62,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (11,8,'show',1,63,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (12,8,'show',1,64,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (13,8,'show',1,65,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (14,8,'show',1,66,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (15,8,'show',1,67,'any','en-GB');
INSERT INTO `jos_rsform_conditions` (`id`, `form_id`, `action`, `block`, `component_id`, `condition`, `lang_code`) VALUES (16,8,'show',1,70,'any','en-GB');
/*!40000 ALTER TABLE `jos_rsform_conditions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

