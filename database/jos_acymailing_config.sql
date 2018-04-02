
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
DROP TABLE IF EXISTS `jos_acymailing_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_acymailing_config` (
  `namekey` varchar(200) NOT NULL,
  `value` text,
  PRIMARY KEY (`namekey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_acymailing_config` WRITE;
/*!40000 ALTER TABLE `jos_acymailing_config` DISABLE KEYS */;
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('acyrss_description','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('acyrss_element','20');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('acyrss_format','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('acyrss_name','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('acyrss_order','senddate');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('add_names','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('allowedfiles','zip,doc,docx,pdf,xls,txt,gzip,rar,jpg,jpeg,gif,xlsx,pps,csv,bmp,ico,odg,odp,ods,odt,png,ppt,swf,xcf,mp3,wma');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('allow_modif','data');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('allow_visitor','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('autosub','None');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('bootstrap_frontend','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('bounce_action_lists_maxtry','4');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('bounce_action_maxtry','noaction');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('bounce_email','trevorbicewebdesign@gmail.com');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('Business','2');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('charset','UTF-8');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('comments_feature','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('confirmation_message','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('confirm_message','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('confirm_redirect','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_frequency','900');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_fromip','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_fullreport','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_last','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_next','1496090088');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_report','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_savepath','media/com_acymailing/logs/report{year}_{month}.log');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_savereport','2');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_sendreport','2');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('cron_sendto','webmaster@burners.mycodelicforest.org');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('css_backend','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('css_frontend','default');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('css_module','default');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('description_business','Joomla!® Mailing Extension');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('description_enterprise','Joomla!® E-mail Marketing');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('description_essential','Joomla!® E-mail Marketing');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('description_sidekick','Joomla!® Mailing Extension');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('description_starter','Joomla!® Marketing Campaign');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('disqus_shortname','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('editor','acyeditor');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('elasticemail_password','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('elasticemail_port','rest');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('elasticemail_username','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('email_botscout','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('email_botscout_key','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('email_checkdomain','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('email_iptimecheck','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('email_stopforumspam','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('embed_files','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('embed_images','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('encoding_format','8bit');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('Enterprise','3');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('Essential','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('expirationdate','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('forward','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('from_email','info@mycodelicforest.org');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('from_name','Mycodelic Forest');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('frontend_print','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('frontend_subject','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('generate_name','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('hostname','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('indexFollow','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('installcomplete','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('itemid','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('lastlicensecheck','1516997133');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('last_maxexec_check','1488235167');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('latestversion','5.9.1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('level','Starter');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('mailer_method','phpmail');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('max_execution_time','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('mediafolder','media/com_acymailing/upload');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('modif_redirect','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('module_redirect','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('multiple_part','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_accept','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_confirm','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_contact','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_contact_menu','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_created','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_refuse','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_unsub','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('notification_unsuball','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('open_popup','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('pluginNeedUpdate','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('popup_height','550');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('popup_width','750');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('priority_followup','2');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('priority_newsletter','3');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('queue_nbmail','40');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('queue_nbmail_auto','70');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('queue_pause','120');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('queue_try','3');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('queue_type','auto');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('reply_email','info@mycodelicforest.org');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('reply_name','Mycodelic Forest');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('require_confirmation','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('security_key','BjI03O7EblYmEmKFrXZWBGVONEZBsm');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('sendmail_path','/usr/sbin/sendmail');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('sendorder','subid,ASC');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('show_description','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('show_filter','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('show_order','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('show_senddate','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('Sidekick','4');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('smtp_auth','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('smtp_host','localhost');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('smtp_keepalive','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('smtp_password','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('smtp_port','25');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('smtp_secured','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('smtp_username','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('special_chars','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('ssl_links','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('Starter','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('subscription_message','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('sub_redirect','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsubscription_message','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsub_dispoptions','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsub_dispothersubs','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsub_intro','UNSUB_INTRO');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsub_message','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsub_reasons','a:2:{i:0;s:21:\"UNSUB_SURVEY_FREQUENT\";i:1;s:21:\"UNSUB_SURVEY_RELEVANT\";}');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsub_redirect','');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('unsub_survey','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('uploadfolder','media/com_acymailing/upload');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('use_sef','0');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('version','5.9.1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('website','http://mycodelicforest.org/');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('welcome_message','1');
INSERT INTO `jos_acymailing_config` (`namekey`, `value`) VALUES ('word_wrapping','150');
/*!40000 ALTER TABLE `jos_acymailing_config` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

