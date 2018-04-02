
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
DROP TABLE IF EXISTS `jos_jfbconnect_user_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_jfbconnect_user_map` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `j_user_id` int(11) NOT NULL,
  `provider_user_id` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `access_token` text,
  `authorized` tinyint(1) DEFAULT '1',
  `params` text,
  `provider` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `j_user_id` (`j_user_id`),
  KEY `provider_user_id` (`provider_user_id`),
  KEY `provider` (`provider`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_jfbconnect_user_map` WRITE;
/*!40000 ALTER TABLE `jos_jfbconnect_user_map` DISABLE KEYS */;
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (1,43,'10102933740507573','2017-02-19 06:15:54','2018-02-09 20:30:53','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10102933740507573\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/11659498_10101961604151623_6597664324272336877_n.jpg?oh=1c581e7d1bd55967f5f9db970e4466bb&oe=5B10E721\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (2,71,'893425166868','2017-02-21 05:38:02','2018-02-02 04:40:07','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/893425166868\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/26231013_966355558778_5847596262746680779_n.jpg?oh=4d5e7e8d573b715264accef2ce7fb06a&oe=5AEAB254\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (3,77,'10211810605522093','2017-02-22 02:31:30','2018-01-31 21:03:35','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10211810605522093\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/12039570_10207511230960416_3206983553005778004_n.jpg?oh=51f678b1217295e393f479f2359d7fd7&oe=5AE921DF\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (4,80,'10155052356359921','2017-02-23 05:59:07','2018-01-31 17:16:26','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10155052356359921\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/19989220_10155511263684921_3459998678036380308_n.jpg?oh=f32e872d8544cb68814052a62a96506b&oe=5AE9EEA1\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (5,756,'10154718338307025','2017-03-01 06:41:44','2017-03-03 03:32:44','\"EAAZAZBUnbmLy4BAJinlZChAVJdo1wOLl4HYsxHxS8IzUCSHnOp7dEjdrB7uRI0SjunCcMAnOnUeQ9PZAhEZCjyqHzIcK1trrZA2eBpgOXDObaBlpijygZA0IuZBJUi3ZAnfRqAMC6ZAPzFMZCBFce2OQDZBG\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10154718338307025\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/c7.0.50.50\\/p50x50\\/16649091_10154682741177025_6031839469167052070_n.jpg?oh=26f0fe2d4eeeaee38d2dc2173990d554&oe=593F25BD\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (6,75,'10212457468137604','2017-03-01 08:05:06','2017-07-25 03:21:52','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10212457468137604\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/20246507_10213905566259152_3873004464008440582_n.jpg?oh=0455cdeeab860e93fbd428087f17ebef&oe=5A024324\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (7,788,'1550440198353639','2017-06-29 21:14:41','2017-06-29 21:14:41','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/1550440198353639\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/16998897_1416020911795569_7609593862948784224_n.jpg?oh=7c9ae9c3721e9ca9d6bbd8caf37dba1d&oe=59D1407D\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (8,799,'10154803976310998','2017-07-14 10:59:25','2017-07-14 11:38:50','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10154803976310998\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/19905464_10154785208120998_3799833241205814782_n.jpg?oh=c80e9a05a644ec5b309227b544ee233e&oe=59CAF879\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (9,803,'10155775347715942','2017-07-16 20:01:48','2017-07-16 20:01:48','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10155775347715942\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/c50.50.621.621\\/s50x50\\/1002576_10152631026465942_2119076954_n.jpg?oh=a66228235f68878ca3b51952c24c7c6e&oe=5A105F89\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (10,805,'10155573760861465','2017-08-05 15:16:40','2017-08-05 15:16:40','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10155573760861465\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/17629669_10155154025451465_5780456489820751091_n.jpg?oh=b2022babdce92e9dc230251ddc4dfdba&oe=5A2CCAC6\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (11,806,'10209935677013015','2017-08-10 23:11:03','2017-08-10 23:11:03','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10209935677013015\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/c90.210.540.540\\/s50x50\\/14322718_10207253898890238_3394825086064890023_n.jpg?oh=720042a953ecf4be32e4cf6c44732338&oe=5A34C155\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (12,807,'134803470462999','2017-08-20 21:05:17','2017-08-20 21:05:17','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/134803470462999\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/19748644_120809311862415_7948709647811993893_n.jpg?oh=4dfda5c8085872dd5d9c63c6c9195377&oe=5A1EDC93\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (13,809,'10213646413371302','2017-09-21 21:46:59','2017-09-21 21:46:59','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/10213646413371302\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/p50x50\\/19756561_10212991120309385_4129913578942910453_n.jpg?oh=a830ada8328fce058c3ba16b12a8e9c3&oe=5A3DE847\"}','facebook');
INSERT INTO `jos_jfbconnect_user_map` (`id`, `j_user_id`, `provider_user_id`, `created_at`, `updated_at`, `access_token`, `authorized`, `params`, `provider`) VALUES (14,811,'1663367070373135','2017-12-05 03:30:01','2018-02-05 02:44:05','\"1827742507478830|6e77e9d26da0a3878feee799e54e64a9\"',1,'{\"profile_url\":\"https:\\/\\/www.facebook.com\\/app_scoped_user_id\\/1663367070373135\\/\",\"avatar_thumb\":\"https:\\/\\/scontent.xx.fbcdn.net\\/v\\/t1.0-1\\/c18.0.50.50\\/p50x50\\/26056046_1689356344440874_1804414984922379395_n.jpg?oh=e3a8ce0b130de0d1c0785453a0563aee&oe=5B12E246\"}','facebook');
/*!40000 ALTER TABLE `jos_jfbconnect_user_map` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

