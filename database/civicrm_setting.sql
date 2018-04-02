
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
DROP TABLE IF EXISTS `civicrm_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Unique name for setting',
  `value` text COLLATE utf8_unicode_ci COMMENT 'data associated with this group / name combo',
  `domain_id` int(10) unsigned NOT NULL COMMENT 'Which Domain is this menu item for',
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID if the setting is localized to a contact',
  `is_domain` tinyint(4) DEFAULT NULL COMMENT 'Is this setting a contact specific or site wide setting?',
  `component_id` int(10) unsigned DEFAULT NULL COMMENT 'Component that this menu item belongs to',
  `created_date` datetime DEFAULT NULL COMMENT 'When was the setting created',
  `created_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to civicrm_contact, who created this setting',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_domain_contact_name` (`domain_id`,`contact_id`,`name`),
  KEY `FK_civicrm_setting_contact_id` (`contact_id`),
  KEY `FK_civicrm_setting_component_id` (`component_id`),
  KEY `FK_civicrm_setting_created_id` (`created_id`),
  CONSTRAINT `FK_civicrm_setting_component_id` FOREIGN KEY (`component_id`) REFERENCES `civicrm_component` (`id`),
  CONSTRAINT `FK_civicrm_setting_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_civicrm_setting_created_id` FOREIGN KEY (`created_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_setting_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_setting` WRITE;
/*!40000 ALTER TABLE `civicrm_setting` DISABLE KEYS */;
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (1,'resCacheCode','s:5:\"HEI03\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (2,'installed','i:1;',1,NULL,1,NULL,'2018-01-22 01:02:45',NULL);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (3,'site_id','s:32:\"5a3b5b3e65ad72acf8a96ac694d67197\";',1,NULL,1,NULL,'2018-01-21 23:02:57',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (4,'systemStatusCheckResult','i:3;',1,NULL,1,NULL,'2018-04-01 19:52:27',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (5,'navigation','s:8:\"9cnOwhBp\";',1,2,0,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (6,'navigation','s:8:\"9cnOwhBp\";',1,3,0,NULL,'2018-01-22 21:39:50',3);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (8,'languageLimit',NULL,1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (9,'contact_default_language','s:9:\"*default*\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (10,'countryLimit','a:0:{}',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (11,'customTranslateFunction',NULL,1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (12,'defaultContactCountry','s:4:\"1228\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (13,'defaultContactStateProvince',NULL,1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (14,'defaultCurrency','s:3:\"USD\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (15,'fieldSeparator','s:1:\",\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (16,'inheritLocale','s:1:\"0\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (17,'lcMessages','s:5:\"en_US\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (18,'legacyEncoding','s:12:\"Windows-1252\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (19,'monetaryThousandSeparator','s:1:\",\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (20,'monetaryDecimalPoint','s:1:\".\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (21,'moneyformat','s:5:\"%c %a\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (22,'moneyvalueformat','s:3:\"%!i\";',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (23,'provinceLimit','a:0:{}',1,NULL,1,NULL,'2018-03-02 18:42:54',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (24,'mailing_backend','a:10:{s:15:\"outBound_option\";s:1:\"3\";s:5:\"qfKey\";s:36:\"b6c133cc4a4e841afee19dd28740d568_815\";s:8:\"entryURL\";s:132:\"https://mycodelicforest.org/administrator/?option=com_civicrm&amp;task=civicrm/admin/setting/smtp&amp;option=com_civicrm&amp;reset=1\";s:13:\"sendmail_path\";s:0:\"\";s:13:\"sendmail_args\";s:0:\"\";s:10:\"smtpServer\";s:25:\"ssl://mycodelicforest.org\";s:8:\"smtpPort\";s:3:\"465\";s:8:\"smtpAuth\";s:1:\"1\";s:12:\"smtpUsername\";s:28:\"no-reply@mycodelicforest.org\";s:12:\"smtpPassword\";s:44:\"Bgc0Qu8BlTBRNlF6EDymieImeXwIjp09cM49L94m9wo=\";}',1,NULL,1,NULL,'2018-03-02 19:13:59',2);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (25,'navigation','s:8:\"9cnOwhBp\";',1,11,0,NULL,'2018-02-11 19:26:30',11);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (26,'navigation','s:8:\"9cnOwhBp\";',1,4,0,NULL,'2018-02-11 19:33:37',4);
INSERT INTO `civicrm_setting` (`id`, `name`, `value`, `domain_id`, `contact_id`, `is_domain`, `component_id`, `created_date`, `created_id`) VALUES (27,'navigation','s:8:\"9cnOwhBp\";',1,26,0,NULL,'2018-03-06 15:44:33',26);
/*!40000 ALTER TABLE `civicrm_setting` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

