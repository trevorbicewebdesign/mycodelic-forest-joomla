
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
DROP TABLE IF EXISTS `jos_joomgallery_countstop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_joomgallery_countstop` (
  `cspicid` int(11) NOT NULL DEFAULT '0',
  `csip` varchar(20) NOT NULL,
  `cssessionid` varchar(200) DEFAULT NULL,
  `cstime` datetime DEFAULT NULL,
  KEY `idx_cspicid` (`cspicid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_joomgallery_countstop` WRITE;
/*!40000 ALTER TABLE `jos_joomgallery_countstop` DISABLE KEYS */;
INSERT INTO `jos_joomgallery_countstop` (`cspicid`, `csip`, `cssessionid`, `cstime`) VALUES (81,'24.35.67.154','7mBjs7DceJvLtehQKVDM4sVpSaWlQg9J','2017-03-02 00:57:33');
INSERT INTO `jos_joomgallery_countstop` (`cspicid`, `csip`, `cssessionid`, `cstime`) VALUES (79,'24.35.67.154','7mBjs7DceJvLtehQKVDM4sVpSaWlQg9J','2017-03-02 00:59:00');
INSERT INTO `jos_joomgallery_countstop` (`cspicid`, `csip`, `cssessionid`, `cstime`) VALUES (80,'24.35.67.154','7mBjs7DceJvLtehQKVDM4sVpSaWlQg9J','2017-03-02 00:59:01');
/*!40000 ALTER TABLE `jos_joomgallery_countstop` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

