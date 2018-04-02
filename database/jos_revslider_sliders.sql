
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
DROP TABLE IF EXISTS `jos_revslider_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_revslider_sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_revslider_sliders` WRITE;
/*!40000 ALTER TABLE `jos_revslider_sliders` DISABLE KEYS */;
INSERT INTO `jos_revslider_sliders` (`id`, `title`, `alias`, `params`) VALUES (1,'Home Slideshow','homeslideshow','{\"title\":\"Home Slideshow\",\"alias\":\"homeslideshow\",\"shortcode\":\"[rev_slider homeslideshow]\",\"source_type\":\"gallery\",\"post_types\":\"post\",\"post_category\":\"\",\"post_sortby\":\"ID\",\"posts_sort_direction\":\"DESC\",\"max_slider_posts\":\"30\",\"excerpt_limit\":\"55\",\"slider_template_id\":\"\",\"posts_list\":\"\",\"slider_type\":\"fullwidth\",\"fullscreen_offset_container\":\"\",\"fullscreen_offset_size\":\"\",\"fullscreen_min_height\":\"\",\"full_screen_align_force\":\"on\",\"auto_height\":\"off\",\"force_full_width\":\"off\",\"min_height\":\"0\",\"width\":\"960\",\"height\":\"500\",\"responsitive_w1\":\"940\",\"responsitive_sw1\":\"770\",\"responsitive_w2\":\"780\",\"responsitive_sw2\":\"500\",\"responsitive_w3\":\"510\",\"responsitive_sw3\":\"310\",\"responsitive_w4\":\"0\",\"responsitive_sw4\":\"0\",\"responsitive_w5\":\"0\",\"responsitive_sw5\":\"0\",\"responsitive_w6\":\"0\",\"responsitive_sw6\":\"0\",\"delay\":\"9000\",\"shuffle\":\"off\",\"lazy_load\":\"off\",\"enable_static_layers\":\"off\",\"next_slide_on_window_focus\":\"off\",\"simplify_ie8_ios4\":\"off\",\"stop_slider\":\"off\",\"stop_after_loops\":0,\"stop_at_slide\":2,\"show_timerbar\":\"hide\",\"loop_slide\":\"loop\",\"position\":\"center\",\"margin_top\":0,\"margin_bottom\":0,\"margin_left\":0,\"margin_right\":0,\"shadow_type\":\"0\",\"padding\":0,\"background_color\":\"#E9E9E9\",\"background_dotted_overlay\":\"none\",\"show_background_image\":\"false\",\"background_image\":\"\",\"bg_fit\":\"cover\",\"bg_repeat\":\"no-repeat\",\"bg_position\":\"center top\",\"stop_on_hover\":\"on\",\"keyboard_navigation\":\"off\",\"navigation_style\":\"round\",\"navigaion_type\":\"bullet\",\"navigation_arrows\":\"solo\",\"navigaion_always_on\":\"false\",\"hide_thumbs\":200,\"navigaion_align_hor\":\"center\",\"navigaion_align_vert\":\"bottom\",\"navigaion_offset_hor\":\"0\",\"navigaion_offset_vert\":20,\"leftarrow_align_hor\":\"left\",\"leftarrow_align_vert\":\"center\",\"leftarrow_offset_hor\":20,\"leftarrow_offset_vert\":0,\"rightarrow_align_hor\":\"right\",\"rightarrow_align_vert\":\"center\",\"rightarrow_offset_hor\":20,\"rightarrow_offset_vert\":0,\"thumb_width\":100,\"thumb_height\":50,\"thumb_amount\":5,\"use_spinner\":\"0\",\"spinner_color\":\"#FFFFFF\",\"use_parallax\":\"off\",\"disable_parallax_mobile\":\"off\",\"parallax_type\":\"mouse\",\"parallax_bg_freeze\":\"off\",\"parallax_level_1\":\"5\",\"parallax_level_2\":\"10\",\"parallax_level_3\":\"15\",\"parallax_level_4\":\"20\",\"parallax_level_5\":\"25\",\"parallax_level_6\":\"30\",\"parallax_level_7\":\"35\",\"parallax_level_8\":\"40\",\"parallax_level_9\":\"45\",\"parallax_level_10\":\"50\",\"touchenabled\":\"on\",\"swipe_velocity\":0.7,\"swipe_min_touches\":1,\"drag_block_vertical\":\"false\",\"disable_on_mobile\":\"off\",\"disable_kenburns_on_mobile\":\"off\",\"hide_slider_under\":0,\"hide_defined_layers_under\":0,\"hide_all_layers_under\":0,\"hide_arrows_on_mobile\":\"off\",\"hide_bullets_on_mobile\":\"off\",\"hide_thumbs_on_mobile\":\"off\",\"hide_thumbs_under_resolution\":0,\"hide_thumbs_delay_mobile\":1500,\"start_with_slide\":\"1\",\"first_transition_active\":\"false\",\"first_transition_type\":\"fade\",\"first_transition_duration\":300,\"first_transition_slot_amount\":7,\"reset_transitions\":\"\",\"reset_transition_duration\":0,\"0\":\"<xecute settings on all slides\",\"load_googlefont\":\"false\",\"google_font\":[\"<link href=\'http:\\/\\/fonts.googleapis.com\\/css?family=PT+Sans+Narrow:400,700\' rel=\'stylesheet\' type=\'text\\/css\'>\"],\"template\":\"false\"}');
/*!40000 ALTER TABLE `jos_revslider_sliders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

