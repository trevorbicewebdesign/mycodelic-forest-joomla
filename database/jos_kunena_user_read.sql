
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
DROP TABLE IF EXISTS `jos_kunena_user_read`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_user_read` (
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  UNIQUE KEY `user_topic_id` (`user_id`,`topic_id`),
  KEY `category_user_id` (`category_id`,`user_id`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_user_read` WRITE;
/*!40000 ALTER TABLE `jos_kunena_user_read` DISABLE KEYS */;
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,2,2,2,1442976924);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,3,3,3,1459150821);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,4,7,4,1442980123);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,5,8,24,1459109707);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,6,10,10,1443162291);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,7,8,13,1459067249);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,9,17,56,1488369250);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,11,11,34,1459391184);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,12,7,23,1459724502);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,13,2,392,1488923876);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,14,3,27,1459150802);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,15,8,31,1459137170);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,16,3,42,1459532225);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,17,19,67,1467858833);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,18,19,40,1467856455);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,19,2,74,1487585621);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,20,21,44,1459724387);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,21,13,45,1487578275);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,22,8,54,1467667515);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,23,2,53,1460229620);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,28,11,68,1468040771);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,29,11,69,1468040835);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,30,13,70,1487578231);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,31,3,73,1470793458);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,323,13,379,1488368148);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,324,2,386,1488488191);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,325,2,390,1488661135);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,326,2,372,1487891557);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,327,18,375,1488250482);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,328,2,383,1488369325);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,329,17,397,1490583351);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,330,22,394,1488922894);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (43,331,2,398,1494233976);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,2,2,2,1442976532);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,3,3,3,1443145739);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,4,7,4,1442977266);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,5,8,24,1458099964);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,6,10,10,1443145989);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,7,8,13,1444150484);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,8,8,15,1444578829);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,9,17,56,1460494354);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,10,3,17,1457496719);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,11,11,34,1459524960);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,12,7,23,1458067909);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,13,2,392,1499438098);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,14,3,27,1499438029);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,15,8,31,1459538805);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,16,3,42,1459524682);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,17,19,61,1467319046);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,18,19,40,1461810268);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,19,2,43,1459524941);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,20,21,66,1467316996);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,21,13,45,1460144404);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,22,8,54,1467758406);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,23,2,60,1461085429);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,24,18,57,1463364021);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,25,18,58,1463364044);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,26,18,59,1463363409);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,27,18,65,1463344835);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,323,13,366,1487656792);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,324,2,386,1488339368);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,327,18,375,1499437973);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,328,2,383,1488298710);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,329,17,397,1488940545);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,330,22,394,1488862171);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,331,2,398,1491233073);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,333,11,400,1499444046);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (71,334,2,401,1512456298);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (75,5,8,18,1457496970);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (75,10,3,17,1457496770);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (75,17,19,61,1467785475);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (75,18,19,40,1467785508);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (77,323,13,366,1487731059);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (80,13,2,392,1490591762);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (80,19,2,71,1470703416);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (80,23,2,60,1470703458);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (80,323,13,379,1488660767);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (80,324,2,391,1488660702);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (80,325,2,390,1490591825);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (80,328,2,383,1488660611);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (102,12,7,23,1469148702);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (102,13,2,25,1469148561);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (102,19,2,43,1469148517);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (102,23,2,60,1469148603);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (756,325,2,388,1488512112);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (788,331,2,398,1498770984);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (799,13,2,392,1500032494);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (799,325,2,390,1500032560);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (808,325,2,390,1503453599);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (810,334,2,401,1510557266);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (811,10,3,17,1512682346);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (811,13,2,392,1512682697);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (811,31,3,73,1512682640);
INSERT INTO `jos_kunena_user_read` (`user_id`, `topic_id`, `category_id`, `message_id`, `time`) VALUES (811,331,2,398,1512680626);
/*!40000 ALTER TABLE `jos_kunena_user_read` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

