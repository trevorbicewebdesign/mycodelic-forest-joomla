
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
DROP TABLE IF EXISTS `jos_k2_tags_xref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_k2_tags_xref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tagID` (`tagID`),
  KEY `itemID` (`itemID`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_k2_tags_xref` WRITE;
/*!40000 ALTER TABLE `jos_k2_tags_xref` DISABLE KEYS */;
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (23,7,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (24,8,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (25,9,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (26,10,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (27,11,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (28,12,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (29,13,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (30,14,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (31,15,8);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (38,1,7);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (39,2,7);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (40,3,7);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (41,4,7);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (42,5,7);
INSERT INTO `jos_k2_tags_xref` (`id`, `tagID`, `itemID`) VALUES (43,6,7);
/*!40000 ALTER TABLE `jos_k2_tags_xref` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

