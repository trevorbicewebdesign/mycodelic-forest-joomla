<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date		2020-06-26
 */

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

include str_replace('.php', '.' . Sh404sefConfigurationEdition::$id . '.php', basename(__FILE__));
