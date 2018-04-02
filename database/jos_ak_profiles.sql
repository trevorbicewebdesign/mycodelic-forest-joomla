
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
DROP TABLE IF EXISTS `jos_ak_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_ak_profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `configuration` longtext COLLATE utf8mb4_unicode_ci,
  `filters` longtext COLLATE utf8mb4_unicode_ci,
  `quickicon` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_ak_profiles` WRITE;
/*!40000 ALTER TABLE `jos_ak_profiles` DISABLE KEYS */;
INSERT INTO `jos_ak_profiles` (`id`, `description`, `configuration`, `filters`, `quickicon`) VALUES (1,'Default Backup Profile','###AES128###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','',1);
INSERT INTO `jos_ak_profiles` (`id`, `description`, `configuration`, `filters`, `quickicon`) VALUES (2,'Github',NULL,'a:2:{s:5:\"files\";a:1:{s:10:\"[SITEROOT]\";a:11:{i:0;s:9:\".ftpquota\";i:2;s:15:\"CONTRIBUTING.md\";i:3;s:11:\"LICENSE.txt\";i:4;s:9:\"README.md\";i:5;s:10:\"README.txt\";i:7;s:26:\"configuration.php-original\";i:8;s:12:\"htaccess.txt\";i:9;s:9:\"index.php\";i:11;s:10:\"robots.txt\";i:12;s:15:\"robots.txt.dist\";i:13;s:14:\"web.config.txt\";}}s:11:\"directories\";a:1:{s:10:\"[SITEROOT]\";a:19:{i:0;s:11:\".well-known\";i:1;s:13:\"administrator\";i:2;s:3:\"bin\";i:3;s:5:\"cache\";i:4;s:3:\"cli\";i:5;s:10:\"components\";i:6;s:4:\"home\";i:8;s:8:\"includes\";i:9;s:16:\"installation-bak\";i:10;s:8:\"language\";i:11;s:7:\"layouts\";i:12;s:9:\"libraries\";i:13;s:4:\"logs\";i:14;s:5:\"media\";i:15;s:7:\"modules\";i:16;s:7:\"plugins\";i:17;s:9:\"t3-assets\";i:18;s:9:\"templates\";i:19;s:3:\"tmp\";}}}',1);
/*!40000 ALTER TABLE `jos_ak_profiles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

