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
defined('_JEXEC') || die;

defined('WBLIB_EXEC') or define('WBLIB_EXEC', true);

if (file_exists(__DIR__ . '/dev_defines.php'))
{
	include_once(__DIR__ . '/dev_defines.php');
}
else if (file_exists(__DIR__ . '/defines.php'))
{
	include_once(__DIR__ . '/defines.php');
}

if (!defined('SH404SEF_APP_PATH'))
{
	return;
}

// init library
$wbLibRootFile = WBLIB_V_SH4_4206_ROOT_PATH . '/wblib.php';
if (!file_exists($wbLibRootFile))
{
	return;
}

include_once($wbLibRootFile);
$wbLib = new \Weeblr\Wblib\V_SH4_4206\Wblib;
$wbLib->boot();
