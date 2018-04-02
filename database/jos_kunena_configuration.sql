
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
DROP TABLE IF EXISTS `jos_kunena_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_kunena_configuration` (
  `id` int(11) NOT NULL DEFAULT '0',
  `params` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_kunena_configuration` WRITE;
/*!40000 ALTER TABLE `jos_kunena_configuration` DISABLE KEYS */;
INSERT INTO `jos_kunena_configuration` (`id`, `params`) VALUES (1,'{\"board_title\":\"The Mycodelic Forest Forum :: Burning Man :: Discussions\",\"email\":\"webmaster@burners.mycodelicforest.org\",\"board_offline\":\"0\",\"offline_message\":\"The Forum is currently offline for maintenance.\\r\\nCheck back soon!\",\"enablerss\":\"1\",\"threads_per_page\":\"20\",\"messages_per_page\":\"24\",\"messages_per_page_search\":\"15\",\"showhistory\":\"1\",\"historylimit\":\"6\",\"shownew\":\"1\",\"disemoticons\":\"0\",\"template\":\"crypsisb3\",\"showannouncement\":\"1\",\"avataroncat\":\"0\",\"catimagepath\":\"category_images\",\"showchildcaticon\":\"1\",\"rtewidth\":\"450\",\"rteheight\":\"300\",\"enableforumjump\":\"0\",\"reportmsg\":\"1\",\"username\":\"1\",\"askemail\":\"0\",\"showemail\":\"0\",\"showuserstats\":\"1\",\"showkarma\":\"1\",\"useredit\":\"1\",\"useredittime\":\"0\",\"useredittimegrace\":\"600\",\"editmarkup\":\"1\",\"allowsubscriptions\":\"1\",\"subscriptionschecked\":\"1\",\"allowfavorites\":\"1\",\"maxsubject\":\"50\",\"maxsig\":\"300\",\"regonly\":\"0\",\"pubwrite\":\"0\",\"floodprotection\":\"0\",\"mailmod\":\"0\",\"mailadmin\":\"0\",\"captcha\":\"-1\",\"mailfull\":\"1\",\"allowavatarupload\":\"1\",\"allowavatargallery\":\"1\",\"avatarquality\":\"75\",\"avatarsize\":\"2048\",\"imageheight\":\"800\",\"imagewidth\":\"800\",\"imagesize\":\"150\",\"filetypes\":\"txt,rtf,pdf,zip,tar.gz,tgz,tar.bz2\",\"filesize\":\"120\",\"showranking\":\"1\",\"rankimages\":\"1\",\"userlist_rows\":\"30\",\"userlist_online\":\"1\",\"userlist_avatar\":\"1\",\"userlist_posts\":\"1\",\"userlist_karma\":\"0\",\"userlist_email\":\"0\",\"userlist_joindate\":\"1\",\"userlist_lastvisitdate\":\"1\",\"userlist_userhits\":\"1\",\"latestcategory\":\"\",\"showstats\":\"1\",\"showwhoisonline\":\"1\",\"showgenstats\":\"1\",\"showpopuserstats\":\"0\",\"popusercount\":\"5\",\"showpopsubjectstats\":\"1\",\"popsubjectcount\":\"5\",\"showspoilertag\":\"1\",\"showvideotag\":\"1\",\"showebaytag\":\"1\",\"trimlongurls\":\"1\",\"trimlongurlsfront\":\"40\",\"trimlongurlsback\":\"20\",\"autoembedyoutube\":\"1\",\"autoembedebay\":\"1\",\"ebaylanguagecode\":\"en-us\",\"sessiontimeout\":\"1800\",\"highlightcode\":\"0\",\"rss_type\":\"topic\",\"rss_timelimit\":\"month\",\"rss_limit\":\"100\",\"rss_included_categories\":\"\",\"rss_excluded_categories\":\"\",\"rss_specification\":\"rss2.0\",\"rss_allow_html\":\"1\",\"rss_author_format\":\"name\",\"rss_author_in_title\":\"1\",\"rss_word_count\":\"0\",\"rss_old_titles\":\"1\",\"rss_cache\":\"900\",\"defaultpage\":\"recent\",\"default_sort\":\"asc\",\"sef\":\"1\",\"showimgforguest\":\"1\",\"showfileforguest\":\"1\",\"pollnboptions\":\"4\",\"pollallowvoteone\":\"1\",\"pollenabled\":\"1\",\"poppollscount\":\"5\",\"showpoppollstats\":\"1\",\"polltimebtvotes\":\"00:15:00\",\"pollnbvotesbyuser\":\"100\",\"pollresultsuserslist\":\"1\",\"maxpersotext\":\"50\",\"ordering_system\":\"mesid\",\"post_dateformat\":\"ago\",\"post_dateformat_hover\":\"datetime\",\"hide_ip\":\"1\",\"imagetypes\":\"jpg,jpeg,gif,png\",\"checkmimetypes\":\"1\",\"imagemimetypes\":\"image\\/jpeg,image\\/jpg,image\\/gif,image\\/png\",\"imagequality\":\"50\",\"thumbheight\":\"32\",\"thumbwidth\":\"32\",\"hideuserprofileinfo\":\"put_empty\",\"boxghostmessage\":\"0\",\"userdeletetmessage\":\"0\",\"latestcategory_in\":\"1\",\"topicicons\":\"1\",\"debug\":\"0\",\"catsautosubscribed\":0,\"showbannedreason\":\"0\",\"showthankyou\":\"1\",\"showpopthankyoustats\":\"1\",\"popthankscount\":\"5\",\"mod_see_deleted\":\"0\",\"bbcode_img_secure\":\"text\",\"listcat_show_moderators\":\"0\",\"lightbox\":\"1\",\"show_list_time\":\"720\",\"show_session_type\":\"2\",\"show_session_starttime\":\"1800\",\"userlist_allowed\":\"1\",\"userlist_count_users\":\"1\",\"enable_threaded_layouts\":\"0\",\"category_subscriptions\":\"post\",\"topic_subscriptions\":\"every\",\"pubprofile\":\"1\",\"thankyou_max\":\"10\",\"email_recipient_count\":\"0\",\"email_recipient_privacy\":\"bcc\",\"email_visible_address\":\"\",\"captcha_post_limit\":\"0\",\"image_upload\":\"registered\",\"file_upload\":\"registered\",\"topic_layout\":\"flat\",\"time_to_create_page\":\"1\",\"show_imgfiles_manage_profile\":\"1\",\"hold_newusers_posts\":\"0\",\"hold_guest_posts\":\"0\",\"attachment_limit\":\"8\",\"pickup_category\":\"0\",\"article_display\":\"intro\",\"send_emails\":\"1\",\"fallback_english\":\"1\",\"cache\":\"1\",\"cache_time\":\"60\",\"ebay_affiliate_id\":\"5337089937\",\"iptracking\":\"1\",\"stopforumspam_key\":\"\",\"rss_feedburner_url\":\"\",\"autolink\":\"1\",\"access_component\":\"1\",\"statslink_allowed\":\"0\",\"superadmin_userlist\":\"0\",\"legacy_urls\":\"1\",\"attachment_protection\":\"0\",\"categoryicons\":1,\"avatarresizemethod\":\"1\",\"avatarcrop\":\"0\",\"user_report\":\"1\",\"searchtime\":\"365\",\"teaser\":\"0\",\"ebay_language\":\"0\",\"ebay_api_key\":\"\",\"twitter_consumer_key\":\"\",\"twitter_consumer_secret\":\"\",\"allow_change_subject\":\"0\",\"max_links\":\"6\",\"read_only\":\"0\",\"ratingenabled\":\"0\",\"url_subject_topic\":\"0\",\"log_moderation\":\"0\",\"attach_start\":\"0\",\"attach_end\":\"14\",\"google_map_api_key\":\"\",\"attachment_utf8\":\"1\",\"autoembedsoundcloud\":\"1\",\"emailheader\":\"\\/media\\/kunena\\/email\\/hero-wide.png\",\"user_status\":\"1\",\"plain_email\":\"0\",\"recaptcha_publickey\":\"\",\"recaptcha_privatekey\":\"\",\"recaptcha_theme\":\"white\",\"keywords\":0,\"userkeywords\":0,\"plugins\":[]}');
/*!40000 ALTER TABLE `jos_kunena_configuration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

