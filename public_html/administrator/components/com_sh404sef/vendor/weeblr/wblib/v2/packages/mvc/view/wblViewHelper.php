<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 *
 * 2020-06-26
 */

/** ensure this file is being included by a parent file */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

use Weeblr\Wblib\V_SH4_4206\Mvc;

/**
 * A set of syntactic sugar for outputting content.
 *
 */

if (!function_exists('wblGetLayoutOutput'))
{
	/**
	 * Wrapper around the Layout helper.
	 *
	 * @param string $layoutFile
	 * @param mixed  $__data
	 * @param string $basePath
	 * @param string $theme
	 *
	 * @return string
	 */
	function wblGetLayout($layoutFile, $__data = null, $basePath = '', $theme = '')
	{
		return Mvc\LayoutHelper::render(
			$layoutFile,
			$__data,
			$basePath,
			$theme
		);
	}
}

if (!function_exists('wblEchoLayoutOutput'))
{
	/**
	 * Wrapper around the Layout helper.
	 *
	 * @param string $layoutFile
	 * @param mixed  $__data
	 * @param string $basePath
	 * @param string $theme
	 */
	function wblEchoLayout($layoutFile, $__data = null, $basePath = '', $theme = '')
	{
		echo Mvc\LayoutHelper::render(
			$layoutFile,
			$__data,
			$basePath,
			$theme
		);
	}
}
