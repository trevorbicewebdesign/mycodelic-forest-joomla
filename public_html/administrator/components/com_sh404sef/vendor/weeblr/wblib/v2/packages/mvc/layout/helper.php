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

namespace Weeblr\Wblib\V_SH4_4206\Mvc;

/** ensure this file is being included by a parent file */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

Class LayoutHelper
{
	public static $defaultBasePath = '';

	public static function render($layoutFile, $__data = null, $basePath = '', $theme = '')
	{
		$basePath       = empty($basePath) ? self::$defaultBasePath : $basePath;
		$layoutFile     = wbDotJoin(
			$theme,
			$layoutFile
		);
		$layout         = new LayoutFile($layoutFile, $basePath);
		$renderedLayout = $layout->render($__data);

		return $renderedLayout;
	}

	/**
	 * Check if a layout file exist
	 *
	 * @param string $layoutFile
	 * @param string $basePath
	 *
	 * @return bool
	 */
	public static function layoutExists($layoutFile, $basePath = '')
	{
		$basePath = empty($basePath) ? self::$defaultBasePath : $basePath;
		$layout   = new LayoutFile($layoutFile, $basePath);

		return $layout->exists();
	}

	/**
	 * Iterate over a list of layout files, and returns the name
	 * of the first that exists
	 *
	 * @param array  $layoutFiles
	 * @param string $basePath
	 *
	 * @return string
	 */
	public static function getExistingLayout($layoutFiles, $basePath = '')
	{
		if (empty($layoutFiles))
		{
			return '';
		}

		$layoutFiles = (array) $layoutFiles;
		foreach ($layoutFiles as $layoutFile)
		{
			if (self::layoutExists($layoutFile, $basePath))
			{
				return $layoutFile;
			}
		}

		return '';
	}
}
