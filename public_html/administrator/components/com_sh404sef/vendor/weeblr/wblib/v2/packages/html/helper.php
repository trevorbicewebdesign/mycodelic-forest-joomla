<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 * @date         2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Html;

use Weeblr\Wblib\V_SH4_4206\Base,
	Weeblr\Wblib\V_SH4_4206\System,
	Weeblr\Wblib\V_SH4_4206\Joomla\StringHelper\StringHelper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * HTML output helper.
 *
 */
class Helper
{
	private static $escapeAttrMapKeys   = array(
		'`'
	);
	private static $escapeAttrMapValues = array(
		'&#x60;'
	);

	/**
	 * Escape a string before use as an HTML attribute.
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public static function escapeAttr($string)
	{
		return self::escape(
			str_replace(
				self::$escapeAttrMapKeys,
				self::$escapeAttrMapValues,
				$string
			),
			ENT_QUOTES,
			'UTF-8'
		);
	}

	/**
	 * Escape a string before display. Wrapper around htmlspecialchars.
	 *
	 * @param string $string
	 * @param int    $flags
	 * @param string $encoding
	 *
	 * @return string
	 */
	public static function escape($string, $flags = ENT_COMPAT, $encoding = 'UTF-8')
	{
		return htmlspecialchars(
			$string,
			$flags,
			$encoding
		);
	}

	/**
	 * Expand an associative array into an html string of attributes
	 *
	 * @param array $attributes
	 *
	 * @return string
	 */
	public static function attrToHtml($attributes)
	{
		$output = '';
		if (!is_array($attributes))
		{
			return $output;
		}

		foreach ($attributes as $key => $value)
		{
			$output .= ' ' . $key . '="' . self::escapeAttr($value) . '"';
		}

		return $output;
	}

	/**
	 * Wraps a list of items in an unordered list
	 *
	 * @param array  $items list of strings
	 * @param string $ulClass
	 * @param string $liClass
	 *
	 * @return string
	 */
	public static function makeList($items, $ulClass = '', $liClass = '')
	{
		if (!empty($ulClass))
		{
			$ulClass = self::attrToHtml(array('class' => $ulClass));
		}
		if (!empty($liClass))
		{
			$liClass = self::attrToHtml(array('class' => $liClass));
		}
		$items  = is_array($items) ? $items : (array) $items;
		$output = "<ul{$ulClass}><li{$liClass}>" . implode("</li><li{$liClass}>", $items) . '</li></ul>';

		return $output;
	}

	/**
	 * Returns and optionally echo a block of HTML, surrounded by comments
	 * built with provided title
	 *
	 * @param string $html
	 * @param string $title
	 * @param bool   $echo
	 *
	 * @return string
	 */
	public static function printHtmlBlock($html, $title, $echo = false)
	{
		$printedBlock = "\t" . '<!-- ' . $title . ' -->';
		$printedBlock .= "\n" . $html;
		$printedBlock .= "\t" . '<!-- ' . $title . ' -->' . "\n";

		if ($echo)
		{
			echo $printedBlock;
		}

		return $printedBlock;
	}
}
