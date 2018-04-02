
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
DROP TABLE IF EXISTS `jos_rsfirewall_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsfirewall_configuration` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(16) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsfirewall_configuration` WRITE;
/*!40000 ALTER TABLE `jos_rsfirewall_configuration` DISABLE KEYS */;
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('abusive_ips','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('active_scanner_status','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('active_scanner_status_backend','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('admin_users','80\n75\n73\n72\n77\n71\n43','array-int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('autoban_attempts','10','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('backend_captcha','3','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('backend_password','','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('backend_password_enabled','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('blocked_countries','','array-text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('capture_backend_login','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('capture_backend_password','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('check_proxy_ip_headers','HTTP_X_REAL_IP\nHTTP_CLIENT_IP\nHTTP_TRUE_CLIENT_IP\nHTTP_X_FWD_IP_ADDR\nHTTP_X_FORWARDED_FOR\nHTTP_X_FORWARDED\nHTTP_FORWARDED_FOR\nHTTP_FORWARDED\nHTTP_VIA\nHTTP_X_COMING_FROM\nHTTP_COMING_FROM','array-text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('code','','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('deny_referer','','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('disable_installer','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('disable_new_admin_users','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('enable_autoban','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('enable_autoban_login','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('enable_backend_captcha','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('enable_extra_logging','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('enable_js_for','post','array-text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('enable_php_for','get','array-text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('enable_sql_for','get','array-text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('file_permissions','644','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('filter_js','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('filter_uploads','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('folder_permissions','755','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('google_safebrowsing_api_key','','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('grade','86','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('ipv4_whois','http://whois.domaintools.com/{ip}','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('ipv6_whois','','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('lfi','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_alert_level','','array-text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_emails','trevorbicewebdesign@gmail.com','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_emails_count','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_emails_send_after','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_history','30','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_hour_limit','50','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_overview','5','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('log_system_check','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('monitor_core','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('monitor_users','','array-int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('offset','300','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('request_timeout','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('rfi','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('system_check_last_run','2018-01-21 03:55:06','text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('verify_agents','perl\ncurl\njava','array-text');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('verify_emails','0','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('verify_generator','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('verify_multiple_exts','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('verify_upload','1','int');
INSERT INTO `jos_rsfirewall_configuration` (`name`, `value`, `type`) VALUES ('verify_upload_blacklist_exts','pht\r\nphp\r\njs\r\nexe\r\ncom\r\nbat\r\ncmd\r\nmp3','text');
/*!40000 ALTER TABLE `jos_rsfirewall_configuration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

