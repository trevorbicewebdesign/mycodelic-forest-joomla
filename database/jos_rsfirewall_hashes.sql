
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
DROP TABLE IF EXISTS `jos_rsfirewall_hashes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsfirewall_hashes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  `hash` varchar(32) NOT NULL,
  `type` varchar(64) NOT NULL,
  `flag` varchar(1) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=839 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsfirewall_hashes` WRITE;
/*!40000 ALTER TABLE `jos_rsfirewall_hashes` DISABLE KEYS */;
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (249,'administrator/components/com_joomlaupdate/controller.php','3ad249904e9fcc48e914dfcd3f2cecbf','ignore','','2017-05-22 00:07:31');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (250,'administrator/components/com_joomlaupdate/controllers/update.php','32de3c2c7dae0c99090ed06989f18002','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (251,'administrator/components/com_joomlaupdate/joomlaupdate.php','256233c8769e6d82fc06a5ee6325da8a','ignore','','2017-05-22 00:07:31');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (252,'administrator/components/com_joomlaupdate/joomlaupdate.xml','70d765665be7895a901e25cf23809780','ignore','','2017-05-22 00:07:31');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (253,'administrator/components/com_joomlaupdate/models/default.php','8266fdb5af192c200284f803c176dd4a','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (254,'administrator/components/com_joomlaupdate/restore.php','bfba27c5c64ba0b3fd6cfea97b0d15b9','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (255,'administrator/components/com_joomlaupdate/views/default/tmpl/default.php','e592aa9dae0683f21db88a930b514bf5','ignore','','2017-05-22 00:07:31');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (256,'administrator/components/com_joomlaupdate/views/default/view.html.php','19d6bfda9a6f10a1c60d08ecab8c7139','ignore','','2017-05-22 00:07:31');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (257,'administrator/components/com_joomlaupdate/views/update/view.html.php','91d0bb33b87bbd9d15f6bcb2074d8835','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (258,'administrator/components/com_joomlaupdate/views/upload/tmpl/captive.php','147d73b6d49c0f57cd3e1a10369c97a0','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (259,'administrator/language/en-GB/en-GB.com_joomlaupdate.ini','c31fb4c8add46e562a00ff3c4ac0388c','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (260,'administrator/logs/index.html','','ignore','M','2017-02-19 06:40:06');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (261,'images/banners/osmbanner1.png','3944addf1af64676030ca0e53c423fe4','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (262,'images/banners/osmbanner2.png','262f033d9561626684a824e15c214bd4','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (263,'images/banners/shop-ad-books.jpg','d1914ab3a198f7a440ea747b696bdde9','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (264,'images/banners/shop-ad.jpg','3e5dd0ce614ef5e6b23b82cf2b0ac72f','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (265,'images/banners/white.png','4325ecb647d3eb732115dd9f783a5d6d','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (266,'images/headers/blue-flower.jpg','2a7ba79c74ffe947d8dacaf6c972cf03','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (267,'images/headers/maple.jpg','c46aff407ae0ec26e40bf6029daf5f7f','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (268,'images/headers/raindrops.jpg','af523a00fcf84aaf598ef4a3b05c6808','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (269,'images/headers/walden-pond.jpg','fa8c5e0d87dafd0eca94ef49150cc4b7','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (270,'images/headers/windows.jpg','13083f2c98fb3250eac89f83dc137272','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (271,'images/powered_by.png','8c8e30b13ee9febba347dff3fd64295d','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (272,'images/sampledata/fruitshop/apple.jpg','0ba9caeaf01f00e03a2e985c62ca63b2','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (273,'images/sampledata/fruitshop/bananas_2.jpg','f2706fe29cbf18c19de727182959fee9','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (274,'images/sampledata/fruitshop/tamarind.jpg','b7a4cd805ad1672f57a8a1b97ab24f50','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (275,'images/sampledata/parks/animals/180px_koala_ag1.jpg','4d17275a45c35a1ccf372673ce0f7745','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (276,'images/sampledata/parks/animals/180px_wobbegong.jpg','f7deb4298f64df44207f1d72239f0bdc','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (277,'images/sampledata/parks/animals/200px_phyllopteryx_taeniolatus1.jpg','3670568afc495974528303f4d6c0a2e5','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (278,'images/sampledata/parks/animals/220px_spottedquoll_2005_seanmcclean.jpg','2b05ecb3050ce5f42bd027610a8fabe4','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (279,'images/sampledata/parks/animals/789px_spottedquoll_2005_seanmcclean.jpg','f74a54ebbdb67feae9ca2250bcab5604','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (280,'images/sampledata/parks/animals/800px_koala_ag1.jpg','76ac7b4f7b30192557798fd918d55e25','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (281,'images/sampledata/parks/animals/800px_phyllopteryx_taeniolatus1.jpg','eed6c1a4d0e8cb0bb8d2c6495d5afbca','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (282,'images/sampledata/parks/animals/800px_wobbegong.jpg','765bd3bd2a134a426a8a98e4cf8e23d3','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (283,'images/sampledata/parks/banner_cradle.jpg','29e9d3307b4672032b797c9ea3376567','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (284,'images/sampledata/parks/landscape/120px_pinnacles_western_australia.jpg','30292ebec47ae493f66f99d582f7556b','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (285,'images/sampledata/parks/landscape/120px_rainforest_bluemountainsnsw.jpg','63ec15f62b59899c29f3ad656ff8c690','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (286,'images/sampledata/parks/landscape/180px_ormiston_pound.jpg','84594a2cde32c8e91f0be090cc86866b','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (287,'images/sampledata/parks/landscape/250px_cradle_mountain_seen_from_barn_bluff.jpg','8e0a091774f4ada36f5592711c64252f','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (288,'images/sampledata/parks/landscape/727px_rainforest_bluemountainsnsw.jpg','8cc7a0fa7e74e96c986468e1e5f5a8a5','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (289,'images/sampledata/parks/landscape/800px_cradle_mountain_seen_from_barn_bluff.jpg','681696247b906cdeb70a8ee096fdf563','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (290,'images/sampledata/parks/landscape/800px_ormiston_pound.jpg','17aac57a54b451b24936a21b23471eb8','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (291,'images/sampledata/parks/landscape/800px_pinnacles_western_australia.jpg','50d47132c7fd578719fc87a473028448','ignore','','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (292,'images/joomla_black.png','','ignore','M','2017-02-19 06:40:06');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (833,'administrator/index.php','305bc33e7a896251c5012998fa5595f3','3.8.3','','');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (834,'index.php','898aa0ff256f99e6b45e9bc5f7bc995e','3.8.3','','');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (835,'plugins/authentication/joomla/joomla.php','229656e45a0c84ce66e9931949065eac','3.8.3','','');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (836,'plugins/user/joomla/joomla.php','75690d0d9d2b9fb8f69806fe5ff3d4b0','3.8.3','','');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (837,'cache/index.html','','ignore','M','2018-01-21 03:43:56');
INSERT INTO `jos_rsfirewall_hashes` (`id`, `file`, `hash`, `type`, `flag`, `date`) VALUES (838,'language/index.html','2f6bd69fbfc575e98504d79a30fe5f8f','ignore','','2018-01-21 03:43:56');
/*!40000 ALTER TABLE `jos_rsfirewall_hashes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

