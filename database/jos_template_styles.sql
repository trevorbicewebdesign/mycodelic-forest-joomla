
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
DROP TABLE IF EXISTS `jos_template_styles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_template_styles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `template` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `client_id` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `home` char(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `params` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_template` (`template`),
  KEY `idx_home` (`home`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_template_styles` WRITE;
/*!40000 ALTER TABLE `jos_template_styles` DISABLE KEYS */;
INSERT INTO `jos_template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES (8,'isis',1,'1','isis - Default','{\"templateColor\":\"\",\"logoFile\":\"\"}');
INSERT INTO `jos_template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES (10,'source3',0,'0','Source3 - Default','{\"tpl_article_info_datetime_format\":\"d M Y\",\"t3_template\":\"1\",\"devmode\":\"1\",\"themermode\":\"1\",\"legacy_css\":\"0\",\"responsive\":\"1\",\"non_responsive_width\":\"970px\",\"build_rtl\":\"0\",\"t3-assets\":\"\\/t3-assets\",\"t3-rmvlogo\":\"0\",\"minify\":\"0\",\"minify_js\":\"0\",\"minify_js_tool\":\"jsmin\",\"minify_exclude\":null,\"link_titles\":null,\"theme\":\"sourcedefault\",\"logotype\":\"image\",\"sitename\":\"The Mycodelic Forest\",\"slogan\":\"A Burning Man Theme Camp\",\"logoimage\":\"\",\"enable_logoimage_sm\":\"0\",\"logoimage_sm\":\"\",\"mainlayout\":\"default\",\"sublayout\":\"\",\"mm_type\":\"top-menu\",\"navigation_trigger\":\"hover\",\"navigation_type\":\"megamenu\",\"navigation_animation\":\"slide\",\"navigation_animation_duration\":\"400\",\"mm_config\":null,\"navigation_collapse_enable\":\"1\",\"addon_offcanvas_enable\":\"1\",\"addon_offcanvas_effect\":\"off-canvas-effect-7\",\"snippet_open_head\":null,\"snippet_close_head\":null,\"snippet_open_body\":null,\"snippet_close_body\":null,\"snippet_debug\":\"0\",\"theme_extras_mod_tbworks_mobilemenu\":[\"-1\"],\"theme_extras_com_community\":null,\"theme_extras_com_easyblog\":null,\"theme_extras_com_easydiscuss\":null,\"theme_extras_com_easysocial\":null,\"theme_extras_com_kunena\":null,\"theme_extras_com_mijoshop\":null,\"theme_extras_layout_glossary\":null}');
INSERT INTO `jos_template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES (13,'source3',0,'1','Source3 - Home','{\"tpl_article_info_datetime_format\":\"d M Y\",\"t3_template\":\"1\",\"devmode\":\"1\",\"themermode\":\"1\",\"legacy_css\":\"0\",\"responsive\":\"1\",\"non_responsive_width\":\"970px\",\"build_rtl\":\"0\",\"t3-assets\":\"\\/t3-assets\",\"t3-rmvlogo\":\"0\",\"minify\":\"0\",\"minify_js\":\"0\",\"minify_js_tool\":\"jsmin\",\"minify_exclude\":null,\"link_titles\":null,\"theme\":\"\",\"logotype\":\"image\",\"sitename\":\"The Mycodelic Forest\",\"slogan\":\"A Burning Man Theme Camp\",\"logoimage\":\"\",\"enable_logoimage_sm\":\"0\",\"logoimage_sm\":\"\",\"mainlayout\":\"home\",\"sublayout\":\"\",\"mm_type\":\"top-menu\",\"navigation_trigger\":\"hover\",\"navigation_type\":\"megamenu\",\"navigation_animation\":\"slide\",\"navigation_animation_duration\":\"400\",\"mm_config\":null,\"navigation_collapse_enable\":\"1\",\"addon_offcanvas_enable\":\"1\",\"addon_offcanvas_effect\":\"off-canvas-effect-7\",\"snippet_open_head\":null,\"snippet_close_head\":null,\"snippet_open_body\":null,\"snippet_close_body\":null,\"snippet_debug\":\"0\",\"theme_extras_mod_tbworks_mobilemenu\":[\"-1\"],\"theme_extras_com_community\":null,\"theme_extras_com_easyblog\":null,\"theme_extras_com_easydiscuss\":null,\"theme_extras_com_easysocial\":null,\"theme_extras_com_kunena\":null,\"theme_extras_com_mijoshop\":null,\"theme_extras_layout_glossary\":null}');
INSERT INTO `jos_template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES (14,'source3',0,'0','Source3 - Forum','{\"tpl_article_info_datetime_format\":\"d M Y\",\"t3_template\":\"1\",\"devmode\":\"1\",\"themermode\":\"1\",\"legacy_css\":\"0\",\"responsive\":\"1\",\"non_responsive_width\":\"970px\",\"build_rtl\":\"0\",\"t3-assets\":\"\\/t3-assets\",\"t3-rmvlogo\":\"0\",\"minify\":\"0\",\"minify_js\":\"0\",\"minify_js_tool\":\"jsmin\",\"minify_exclude\":null,\"link_titles\":null,\"theme\":\"\",\"logotype\":\"image\",\"sitename\":\"The Mycodelic Forest\",\"slogan\":\"A Burning Man Theme Camp\",\"logoimage\":\"\",\"enable_logoimage_sm\":\"0\",\"logoimage_sm\":\"\",\"mainlayout\":\"forum\",\"sublayout\":\"\",\"mm_type\":\"top-menu\",\"navigation_trigger\":\"hover\",\"navigation_type\":\"megamenu\",\"navigation_animation\":\"slide\",\"navigation_animation_duration\":\"400\",\"mm_config\":null,\"navigation_collapse_enable\":\"1\",\"addon_offcanvas_enable\":\"1\",\"addon_offcanvas_effect\":\"off-canvas-effect-7\",\"snippet_open_head\":null,\"snippet_close_head\":null,\"snippet_open_body\":null,\"snippet_close_body\":null,\"snippet_debug\":\"0\",\"theme_extras_mod_tbworks_mobilemenu\":[\"-1\"],\"theme_extras_com_community\":null,\"theme_extras_com_easyblog\":null,\"theme_extras_com_easydiscuss\":null,\"theme_extras_com_easysocial\":null,\"theme_extras_com_kunena\":null,\"theme_extras_com_mijoshop\":null,\"theme_extras_layout_glossary\":null}');
INSERT INTO `jos_template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES (16,'source3',0,'0','Source3 - Reccomendations','{\"tpl_article_info_datetime_format\":\"d M Y\",\"t3_template\":\"1\",\"devmode\":\"1\",\"themermode\":\"1\",\"legacy_css\":\"0\",\"responsive\":\"1\",\"non_responsive_width\":\"970px\",\"build_rtl\":\"0\",\"t3-assets\":\"\\/t3-assets\",\"t3-rmvlogo\":\"0\",\"minify\":\"0\",\"minify_js\":\"0\",\"minify_js_tool\":\"jsmin\",\"minify_exclude\":null,\"link_titles\":null,\"theme\":\"sourcedefault\",\"logotype\":\"image\",\"sitename\":\"The Mycodelic Forest\",\"slogan\":\"A Burning Man Theme Camp\",\"logoimage\":\"\",\"enable_logoimage_sm\":\"0\",\"logoimage_sm\":\"\",\"mainlayout\":\"reccomendations\",\"sublayout\":\"\",\"mm_type\":\"top-menu\",\"navigation_trigger\":\"hover\",\"navigation_type\":\"megamenu\",\"navigation_animation\":\"slide\",\"navigation_animation_duration\":\"400\",\"mm_config\":null,\"navigation_collapse_enable\":\"1\",\"addon_offcanvas_enable\":\"1\",\"addon_offcanvas_effect\":\"off-canvas-effect-7\",\"snippet_open_head\":null,\"snippet_close_head\":null,\"snippet_open_body\":null,\"snippet_close_body\":null,\"snippet_debug\":\"0\",\"theme_extras_mod_tbworks_mobilemenu\":[\"-1\"],\"theme_extras_com_community\":null,\"theme_extras_com_easyblog\":null,\"theme_extras_com_easydiscuss\":null,\"theme_extras_com_easysocial\":null,\"theme_extras_com_kunena\":null,\"theme_extras_com_mijoshop\":null,\"theme_extras_layout_glossary\":null}');
INSERT INTO `jos_template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES (17,'source3',0,'0','Source3 - Photo Gallery','{\"tpl_article_info_datetime_format\":\"d M Y\",\"t3_template\":\"1\",\"devmode\":\"1\",\"themermode\":\"1\",\"legacy_css\":\"0\",\"responsive\":\"1\",\"non_responsive_width\":\"970px\",\"build_rtl\":\"0\",\"t3-assets\":\"\\/t3-assets\",\"t3-rmvlogo\":\"0\",\"minify\":\"0\",\"minify_js\":\"0\",\"minify_js_tool\":\"jsmin\",\"minify_exclude\":\"\",\"link_titles\":\"\",\"theme\":\"sourcedefault\",\"logotype\":\"image\",\"sitename\":\"The Mycodelic Forest\",\"slogan\":\"A Burning Man Theme Camp\",\"logoimage\":\"\",\"enable_logoimage_sm\":\"0\",\"logoimage_sm\":\"\",\"mainlayout\":\"reccomendations\",\"sublayout\":\"\",\"mm_type\":\"top-menu\",\"navigation_trigger\":\"hover\",\"navigation_type\":\"megamenu\",\"navigation_animation\":\"slide\",\"navigation_animation_duration\":\"400\",\"mm_config\":\"\",\"navigation_collapse_enable\":\"1\",\"addon_offcanvas_enable\":\"1\",\"addon_offcanvas_effect\":\"off-canvas-effect-7\",\"snippet_open_head\":\"\",\"snippet_close_head\":\"\",\"snippet_open_body\":\"\",\"snippet_close_body\":\"\",\"snippet_debug\":\"0\",\"theme_extras_mod_tbworks_mobilemenu\":[\"-1\"]}');
/*!40000 ALTER TABLE `jos_template_styles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
