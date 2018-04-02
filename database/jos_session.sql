
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
DROP TABLE IF EXISTS `jos_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_session` (
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `client_id` tinyint(3) unsigned DEFAULT NULL,
  `guest` tinyint(4) unsigned DEFAULT '1',
  `time` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `data` mediumtext COLLATE utf8mb4_unicode_ci,
  `userid` int(11) DEFAULT '0',
  `username` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`session_id`),
  KEY `userid` (`userid`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_session` WRITE;
/*!40000 ALTER TABLE `jos_session` DISABLE KEYS */;
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('0210191adbc697d076cd0ba86cd48d22',0,1,'1522638336',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('02fb6ea62cd83aa42cf3578beca0624f',0,1,'1522638336',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('0c3f540dca8a1688e5e81d29601c767c',0,1,'1522639140',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('13745c43e67fe07146b75a42ea6410f8',0,1,'1522639454',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('201deba908b94ad4c3720aebad5ec8a1',1,1,'1522638301',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('22f24394d4c95edc69f4b18b6c36c3b7',1,1,'1522638361',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('245f7cb8f88c32730ef59b0206e4274c',0,1,'1522638247',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('2891fb8cdfb4798dcd66f665be018f23',1,1,'1522638661',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('2e3fb00859c18c7a86a38a299082871f',1,1,'1522638901',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('31360ff438ba8f87a6a990f2ba531c28',1,1,'1522638601',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('3775cfa531001f9f85e52cd4a3e43008',1,1,'1522639005',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('3c3a0e252eb691a2419225c66960269e',1,1,'1522639141',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('41f52f543474a91247ad38601e4ce064',0,1,'1522639454',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('54dffaec1c4caf49eb9d22647c67f8d6',0,1,'1522638334',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('5aa117c327e9fe75393707d28539f227',1,1,'1522639321',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('695dae06146231877dd2a37c2ebf8910',0,1,'1522639134',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('706b7862699fe45df1606569fb13f2cf',0,1,'1522638686',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('7770a02b98be2d7050951edd0fd0f7e9',1,1,'1522638781',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('867e21d39bd7bcc6b1a9d66695bda2e3',0,1,'1522639136',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('8763017a573cdfe4ae0155fc402f83b8',0,1,'1522639581',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('8b22c65e352a868e8db350539f1fb223',1,1,'1522638421',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('8cd7b4444baffce8530d19d94b051687',0,1,'1522639887',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('97e16643a9a346e8c47818f2c9212b22',1,1,'1522638241',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('995de5adfc840ae801355059cd4ec0f3',1,1,'1522639202',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('9a2e8ff1b17b26031c837ca24e287efe',1,1,'1522638481',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('9d7a4c8f612ad2e040c26d69b887362d',1,1,'1522639261',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('9e9f2ab95ca55c98a6764e4b4d35dc3d',0,1,'1522638338',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('b48f475772fdb88ca092fbb4c4f0e242',0,1,'1522638341',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('b8d3c54b7fed42e819f0232474402d39',1,1,'1522638721',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('c2da165e24e32f9f798b2311a145b01e',1,1,'1522638841',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('c347520fb41ea0dd57e06699ca09b40c',1,1,'1522638542',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('d4a93784667200e1cdcca03065bce9a0',0,1,'1522638327',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('d8ec583cba07c22495993acdb3d289c4',0,1,'1522639137',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('e18cf02561c646fa3bcd3a68a2ae3958',1,1,'1522639081',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('e7b704e20aa8e24139e7ee3ad52f73e4',1,1,'1522638961',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('ef7e4f8bfedf29d602feee104cf5ffca',1,1,'1522639381',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('f0456b72d9fbb911fda77534d5e58278',1,1,'1522639021',NULL,0,'');
INSERT INTO `jos_session` (`session_id`, `client_id`, `guest`, `time`, `data`, `userid`, `username`) VALUES ('fa3d9a170e5f0a57bd26a250202f8184',1,0,'1522637511',NULL,43,'Trailblazer');
/*!40000 ALTER TABLE `jos_session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

