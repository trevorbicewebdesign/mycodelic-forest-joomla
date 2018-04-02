
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
DROP TABLE IF EXISTS `civicrm_loc_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_loc_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique ID',
  `address_id` int(10) unsigned DEFAULT NULL,
  `email_id` int(10) unsigned DEFAULT NULL,
  `phone_id` int(10) unsigned DEFAULT NULL,
  `im_id` int(10) unsigned DEFAULT NULL,
  `address_2_id` int(10) unsigned DEFAULT NULL,
  `email_2_id` int(10) unsigned DEFAULT NULL,
  `phone_2_id` int(10) unsigned DEFAULT NULL,
  `im_2_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_loc_block_address_id` (`address_id`),
  KEY `FK_civicrm_loc_block_email_id` (`email_id`),
  KEY `FK_civicrm_loc_block_phone_id` (`phone_id`),
  KEY `FK_civicrm_loc_block_im_id` (`im_id`),
  KEY `FK_civicrm_loc_block_address_2_id` (`address_2_id`),
  KEY `FK_civicrm_loc_block_email_2_id` (`email_2_id`),
  KEY `FK_civicrm_loc_block_phone_2_id` (`phone_2_id`),
  KEY `FK_civicrm_loc_block_im_2_id` (`im_2_id`),
  CONSTRAINT `FK_civicrm_loc_block_address_2_id` FOREIGN KEY (`address_2_id`) REFERENCES `civicrm_address` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_loc_block_address_id` FOREIGN KEY (`address_id`) REFERENCES `civicrm_address` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_loc_block_email_2_id` FOREIGN KEY (`email_2_id`) REFERENCES `civicrm_email` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_loc_block_email_id` FOREIGN KEY (`email_id`) REFERENCES `civicrm_email` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_loc_block_im_2_id` FOREIGN KEY (`im_2_id`) REFERENCES `civicrm_im` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_loc_block_im_id` FOREIGN KEY (`im_id`) REFERENCES `civicrm_im` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_loc_block_phone_2_id` FOREIGN KEY (`phone_2_id`) REFERENCES `civicrm_phone` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_loc_block_phone_id` FOREIGN KEY (`phone_id`) REFERENCES `civicrm_phone` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_loc_block` WRITE;
/*!40000 ALTER TABLE `civicrm_loc_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `civicrm_loc_block` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

