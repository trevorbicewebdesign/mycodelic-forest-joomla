
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
DROP TABLE IF EXISTS `jos_sh404sef_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_sh404sef_metas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newurl` varchar(255) NOT NULL DEFAULT '',
  `metadesc` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakey` varchar(255) DEFAULT '',
  `metatitle` varchar(255) DEFAULT '',
  `metalang` varchar(30) DEFAULT '',
  `metarobots` varchar(30) DEFAULT '',
  `canonical` varchar(255) DEFAULT '',
  `og_enable` tinyint(3) NOT NULL DEFAULT '2',
  `og_type` varchar(30) DEFAULT '',
  `og_image` varchar(255) DEFAULT '',
  `og_enable_description` tinyint(3) NOT NULL DEFAULT '2',
  `og_enable_site_name` tinyint(3) NOT NULL DEFAULT '2',
  `og_site_name` varchar(255) DEFAULT '',
  `fb_admin_ids` varchar(255) DEFAULT '',
  `og_enable_location` tinyint(3) NOT NULL DEFAULT '2',
  `og_latitude` varchar(30) DEFAULT '',
  `og_longitude` varchar(30) DEFAULT '',
  `og_street_address` varchar(255) DEFAULT '',
  `og_locality` varchar(255) DEFAULT '',
  `og_postal_code` varchar(30) DEFAULT '',
  `og_region` varchar(255) DEFAULT '',
  `og_country_name` varchar(255) DEFAULT '',
  `og_enable_contact` tinyint(3) NOT NULL DEFAULT '2',
  `og_email` varchar(255) DEFAULT '',
  `og_phone_number` varchar(255) DEFAULT '',
  `og_fax_number` varchar(255) DEFAULT '',
  `og_enable_fb_admin_ids` tinyint(3) NOT NULL DEFAULT '2',
  `twittercards_enable` tinyint(3) NOT NULL DEFAULT '2',
  `twittercards_site_account` varchar(100) DEFAULT '',
  `twittercards_creator_account` varchar(100) DEFAULT '',
  `google_authorship_enable` tinyint(3) NOT NULL DEFAULT '2',
  `google_authorship_author_profile` varchar(255) DEFAULT '',
  `google_authorship_author_name` varchar(255) DEFAULT '',
  `google_publisher_enable` tinyint(3) NOT NULL DEFAULT '2',
  `google_publisher_url` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `newurl` (`newurl`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_sh404sef_metas` WRITE;
/*!40000 ALTER TABLE `jos_sh404sef_metas` DISABLE KEYS */;
INSERT INTO `jos_sh404sef_metas` (`id`, `newurl`, `metadesc`, `metakey`, `metatitle`, `metalang`, `metarobots`, `canonical`, `og_enable`, `og_type`, `og_image`, `og_enable_description`, `og_enable_site_name`, `og_site_name`, `fb_admin_ids`, `og_enable_location`, `og_latitude`, `og_longitude`, `og_street_address`, `og_locality`, `og_postal_code`, `og_region`, `og_country_name`, `og_enable_contact`, `og_email`, `og_phone_number`, `og_fax_number`, `og_enable_fb_admin_ids`, `twittercards_enable`, `twittercards_site_account`, `twittercards_creator_account`, `google_authorship_enable`, `google_authorship_author_profile`, `google_authorship_author_name`, `google_publisher_enable`, `google_publisher_url`) VALUES (2,'index.php?option=com_joomgallery&Itemid=200&lang=en&view=userpanel','This is a collection of all our camp member\'s photos. We have password restricted this content so that only our camp members and close friends can access.','','Our Photos :: Mycodelic Forest','','','',2,'2','',2,2,'','',2,'','','','','','','',2,'','','',2,2,'','',2,'','',2,'');
/*!40000 ALTER TABLE `jos_sh404sef_metas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

