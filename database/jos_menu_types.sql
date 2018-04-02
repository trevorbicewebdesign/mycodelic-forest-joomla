
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
DROP TABLE IF EXISTS `jos_menu_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_menu_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0',
  `menutype` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(48) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `client_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_menutype` (`menutype`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_menu_types` WRITE;
/*!40000 ALTER TABLE `jos_menu_types` DISABLE KEYS */;
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (1,0,'mainmenu','Main Menu','The main menu for the site',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (2,0,'usermenu','User Menu','A Menu for logged-in Users',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (3,0,'top-menu','Top Menu','Top Menu',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (4,0,'bottom-menu','Bottom Menu','Bottom Menu',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (5,0,'hidden-menu','Hidden Menu','Hidden Menu',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (6,0,'footer-menu','Footer Menu','Footer Menu',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (7,0,'kunenamenu','Kunena Menu','This is the default Kunena menu. It is used as the top navigation for Kunena. It can be publish in any module position. Simply unpublish items that are not required.',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (8,0,'communitybuilder','Community Builder','',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (9,0,'forum-menu','Forum Menu','Forum Menu',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (10,445,'form-success','Form Success','',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (11,454,'camp-menu','Camp Menu','Camp Menu',0);
INSERT INTO `jos_menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES (12,456,'projectfork','Projectfork','Projectfork Menu',0);
/*!40000 ALTER TABLE `jos_menu_types` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

