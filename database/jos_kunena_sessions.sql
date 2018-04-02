
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
DROP TABLE IF EXISTS `jos_kunena_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_sessions` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `allowed` text,
  `lasttime` int(11) NOT NULL DEFAULT '0',
  `readtopics` text,
  `currvisit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  KEY `currvisit` (`currvisit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_sessions` WRITE;
/*!40000 ALTER TABLE `jos_kunena_sessions` DISABLE KEYS */;
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (43,'na',1495699139,'0',1516594330);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (71,'na',1516719778,'0',1517183130);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (72,'na',1443061799,'0',1459199577);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (75,'na',1467785508,'0',1500953017);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (76,'na',1457833346,'0',1459043174);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (77,'na',1459067951,'0',1487731118);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (80,'na',1490592213,'0',1519847156);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (102,'na',1467938868,'0',1469148715);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (121,'na',1472846336,'0',1472991054);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (124,'na',1474597487,'0',1475807091);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (125,'na',1474587954,'0',1475797558);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (126,'na',1474588586,'0',1475798189);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (127,'na',1475269115,'0',1476478718);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (330,'na',1483331113,'0',1483417038);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (331,'na',1483399945,'0',1483428852);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (383,'na',1483395227,'0',1484604832);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (396,'na',1487004425,'0',1487022581);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (399,'na',1483549139,'0',1484758745);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (463,'na',1484569925,'0',1485779531);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (473,'na',1486966905,'0',1487329873);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (474,'na',1487389237,'0',1487568746);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (478,'na',1487410698,'0',1487413225);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (484,'na',1486045982,'0',1486085431);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (486,'na',1484704420,'0',1485914020);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (493,'na',1485079418,'0',1486289018);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (551,'na',1486702903,'0',1486799943);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (576,'na',1485842961,'0',1487052625);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (600,'na',1485921670,'0',1487131278);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (631,'na',1487327920,'0',1487422082);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (645,'na',1486275550,'0',1487485488);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (755,'na',1486521091,'0',1487730691);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (756,'na',1488381871,'0',1488512112);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (757,'na',1487145909,'0',1488355509);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (758,'na',1492073919,'0',1492077108);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (761,'na',1495667156,'0',1496876768);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (779,'na',1496527335,'0',1497736948);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (788,'na',1497561353,'0',1498770984);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (799,'na',1500030304,'0',1500032625);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (802,'na',1499013699,'0',1500223312);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (808,'na',1502243872,'0',1503453599);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (810,'na',1509347586,'0',1510557266);
INSERT INTO `jos_kunena_sessions` (`userid`, `allowed`, `lasttime`, `readtopics`, `currvisit`) VALUES (811,'na',1512682697,'0',1517796990);
/*!40000 ALTER TABLE `jos_kunena_sessions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

