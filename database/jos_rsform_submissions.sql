
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
DROP TABLE IF EXISTS `jos_rsform_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_submissions` (
  `SubmissionId` int(11) NOT NULL AUTO_INCREMENT,
  `FormId` int(11) NOT NULL DEFAULT '0',
  `DateSubmitted` datetime NOT NULL,
  `UserIp` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL DEFAULT '',
  `UserId` text NOT NULL,
  `Lang` varchar(255) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `SubmissionHash` varchar(32) NOT NULL,
  PRIMARY KEY (`SubmissionId`),
  KEY `FormId` (`FormId`),
  KEY `SubmissionId` (`SubmissionId`,`FormId`,`DateSubmitted`),
  KEY `SubmissionHash` (`SubmissionHash`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_submissions` WRITE;
/*!40000 ALTER TABLE `jos_rsform_submissions` DISABLE KEYS */;
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (2,3,'2016-08-20 22:38:45','201.149.254.34','','0','en-GB',1,'');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (9,3,'2017-04-19 08:09:07','182.68.136.54','','0','en-GB',1,'');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (10,3,'2017-06-29 22:10:11','181.229.206.244','sebmuro','789','en-GB',1,'');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (11,7,'2018-01-31 17:04:15','47.208.120.224','','0','en-GB',1,'81070bfd39c464dc3175a74468a0c106');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (15,8,'2018-02-12 00:05:32','107.142.33.65','','0','en-GB',1,'8c9078539f68f34bf12fd2dffb68a7e8');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (14,8,'2018-02-12 00:04:50','107.142.33.65','','0','en-GB',1,'d8b796f1d242d608c55e0756c4e83902');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (16,8,'2018-02-12 07:52:00','107.201.228.94','','0','en-GB',1,'c70c105378242ba672bd24af9327130f');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (17,8,'2018-02-12 20:52:40','174.65.126.2','','0','en-GB',1,'d1004d53f59a205110695924ebf18766');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (18,8,'2018-02-12 22:30:18','154.5.161.73','','0','en-GB',1,'b5245080cdc06677d9636ece2a473fbb');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (19,3,'2018-02-12 22:31:58','154.5.161.73','','0','en-GB',1,'38cee7d54fe2bb13c778981c40843065');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (20,8,'2018-03-04 06:39:18','47.208.116.2','','0','en-GB',1,'f567053d920b3cbf65c705c410b52648');
INSERT INTO `jos_rsform_submissions` (`SubmissionId`, `FormId`, `DateSubmitted`, `UserIp`, `Username`, `UserId`, `Lang`, `confirmed`, `SubmissionHash`) VALUES (21,3,'2018-03-19 23:09:40','172.56.41.62','','0','en-GB',1,'8dc8407fa23b9a38d07310d623a8719d');
/*!40000 ALTER TABLE `jos_rsform_submissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

