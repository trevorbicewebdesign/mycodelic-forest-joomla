<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 * @date        2020-06-26
 */

// no direct access
defined('WBLIB_EXEC') || die;

/**
 * Bootstrap app, called from higher up.
 */

// definitions
defined('WBLIB_V_SH4_4206_OP_MODE') or define(
	'WBLIB_V_SH4_4206_OP_MODE',
	'prod'
);

defined('WBLIB_V_SH4_4206_ROOT_PATH') or define(
	'WBLIB_V_SH4_4206_ROOT_PATH',
	JPATH_ADMINISTRATOR . '/components/com_sh404sef/vendor/weeblr/wblib/v2'
);
defined('SH404SEF_APP_PATH') or define(
	'SH404SEF_APP_PATH',
	JPATH_ADMINISTRATOR . '/components/com_sh404sef/vendor/weeblr/sh404sef'
);
defined('SH404SEF_APP_PLATFORM_PATH') or define(
	'SH404SEF_APP_PLATFORM_PATH',
	JPATH_ADMINISTRATOR . '/components/com_sh404sef/vendor/weeblr/platform'
);
defined('SH404SEF_LAYOUTS_PATH') or define(
	'SH404SEF_LAYOUTS_PATH',
	SH404SEF_APP_PATH . '/layouts'
);

