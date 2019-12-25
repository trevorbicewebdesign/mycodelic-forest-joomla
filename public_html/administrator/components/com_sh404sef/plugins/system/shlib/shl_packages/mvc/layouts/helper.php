<?php
/**
 * Shlib - programming library
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier 2018
 * @package     shlib
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     0.4.0.685
 * @date		2019-04-25
 */

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die;

Class ShlMvcLayout_Helper
{
	public static $defaultBasePath = '';

	public static function render($layoutFile, $displayData = null, $basePath = '')
	{
		$basePath = empty($basePath) ? self::$defaultBasePath : $basePath;
		$layout = new \ShlMvcLayout_File($layoutFile, $basePath);
		$renderedLayout = $layout->render($displayData);

		return $renderedLayout;
	}
}
