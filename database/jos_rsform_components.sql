
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
DROP TABLE IF EXISTS `jos_rsform_components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_components` (
  `ComponentId` int(11) NOT NULL AUTO_INCREMENT,
  `FormId` int(11) NOT NULL DEFAULT '0',
  `ComponentTypeId` int(11) NOT NULL DEFAULT '0',
  `Order` int(11) NOT NULL DEFAULT '0',
  `Published` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `ComponentId` (`ComponentId`),
  KEY `ComponentTypeId` (`ComponentTypeId`),
  KEY `FormId` (`FormId`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_components` WRITE;
/*!40000 ALTER TABLE `jos_rsform_components` DISABLE KEYS */;
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (23,3,1,1,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (24,3,1,3,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (25,3,1,2,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (28,3,2,4,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (29,3,13,5,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (42,7,1,0,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (43,7,1,1,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (44,7,5,4,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (45,7,5,5,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (46,7,5,10,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (47,7,1,3,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (48,7,5,6,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (49,7,5,7,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (51,7,1,8,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (52,7,5,11,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (53,7,1,2,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (54,7,5,12,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (55,7,3,14,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (56,7,1,15,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (57,7,1,9,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (58,7,5,13,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (59,7,13,16,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (60,8,1,0,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (61,8,1,1,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (62,8,1,3,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (63,8,1,5,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (64,8,1,6,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (65,8,1,8,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (66,8,3,7,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (67,8,1,9,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (68,8,5,2,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (69,8,13,11,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (70,8,1,10,1);
INSERT INTO `jos_rsform_components` (`ComponentId`, `FormId`, `ComponentTypeId`, `Order`, `Published`) VALUES (71,8,1,4,1);
/*!40000 ALTER TABLE `jos_rsform_components` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

