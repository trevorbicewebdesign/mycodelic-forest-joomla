<?php
/**
 * Shlib - programming library
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier 2020
 * @package      shlib
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      0.4.0.711
 * @date                2020-06-26
 */

use Joomla\String\StringHelper;

// no direct access
defined('_JEXEC') or die;

/**
 * Provide a few string manipulation methods
 *
 * @since    0.2.1
 *
 */
class ShlSystem_Strings
{
	const NONE = 'none';
	const LOWERCASE = 'lowercase';
	const UPPERCASE = 'uppercase';
	const UCFIRST = 'ucfirst';

	/**
	 * Performs a preg_replace, wrapping it to catch errors
	 * caused by bad characters or otherwise
	 *
	 * @param string $pattern RegExp pattern
	 * @param string $replace RegExp replacement
	 * @param string $subject RegExp subject
	 * @param string $ref Optional reference, to be logged in case of error
	 *
	 * @return    string    the result of preg_replace operation
	 */
	public static function pr($pattern, $replace, $subject, $ref = '')
	{
		static $pageUrl = null;

		$tmp = preg_replace($pattern, $replace, $subject);
		if (is_null($tmp))
		{
			$pageUrl = is_null($pageUrl) ? (empty($_SERVER['REQUEST_URI']) ? '' : ' on page ' . $_SERVER['REQUEST_URI']) : $pageUrl;
			ShlSystem_Log::error(
				'shlib', '%s::%s::%d: %s', __CLASS__, __METHOD__, __LINE__,
				'RegExp failed: invalid character' . $pageUrl . (empty($ref) ? '' : ' (' . $ref . ')')
			);
			return $subject;
		}
		else
		{
			return $tmp;
		}
	}

	/**
	 * Format into K and M for large number
	 * 0 -> 9999 : literral
	 * 10 000 -> 999999 : 10K -> 999,9K (max one decimal)
	 * > 1000 000 : 1M -> 1,9M (max 1 decimals)
	 *
	 * @param $n
	 * @param $format
	 */
	public static function formatIntForTitle($n)
	{
		if ($n < 10000)
		{
			return (int) $n;
		}
		else if ($n < 1000000)
		{
			$n = $n / 100.0;
			$n = floor($n) / 10;
			$n = sprintf('%.1f', $n) . 'K';
		}
		else
		{
			$n = $n / 100000;
			$n = floor($n) / 10;
			$n = sprintf('%.1f', $n) . 'M';
		}

		return $n;
	}

	/**
	 * Explode a string about a delimiter, then store each part
	 * into an array, after trimming characters at both ends
	 * Only non-empty cleaned items are added to the returned array
	 *
	 * @param        $string
	 * @param string $delimiter
	 * @param string $caseHandling none | lowercase | uppercase | ufcirst
	 *
	 * @return array
	 */
	public static function stringToCleanedArray($string, $delimiter = ',', $caseHandling = self::NONE)
	{
		$output = array();
		$bits   = explode($delimiter, $string);
		if (!empty($bits))
		{
			foreach ($bits as $bit)
			{
				$cleaned = StringHelper::trim($bit);
				if (strlen($cleaned) != 0)
				{
					switch ($caseHandling)
					{
						case self::LOWERCASE:
							$output[] = StringHelper::strtolower($cleaned);
							break;
						case self::UPPERCASE:
							$output[] = StringHelper::strtoupper($cleaned);
							break;
						case self::UCFIRST:
							$output[] = StringHelper::ucfirst($cleaned);
							break;
						default:
							$output[] = $cleaned;
							break;
					}
				}
			}
		}

		return $output;
	}

	/**
	 * Escape a string for HTML display.
	 *
	 * @param string $string
	 * @param int    $flags
	 * @param string $charset
	 *
	 * @return string
	 */
	public static function escape($string, $flags = ENT_COMPAT, $charset = 'UTF-8')
	{
		return htmlspecialchars($string, $flags, $charset);
	}

	/**
	 * Escape a string and make sure it's usable inside of an HTML element attribute
	 * by processing any double-quotes with one of 3 methods.
	 *
	 * @param string  $string
	 * @param string $method encode_double_quotes | replace_with_single | remove
	 *
	 * @return string|string[]
	 */
	public static function escapeAttr($string, $method = 'encode_double_quotes', $flags = ENT_COMPAT, $charset = 'UTF-8')
	{
		$string = self::escape($string, $flags, $charset);

		switch ($method)
		{
			case 'replace_with_single':
				$output = str_replace(
					'"',
					'\'',
					$string
				);
				break;
			case 'remove':
				$output = str_replace(
					'"',
					'',
					$string
				);
				break;
			default:
				$output = str_replace(
					'"',
					'&quot;',
					$string
				);
				break;
		}

		return $output;
	}

	/**
	 * Make a string safe to use as an HTML id attribute
	 *
	 * @param string $id
	 *
	 * @return string
	 */
	public static function asHtmlId($id)
	{
		$id = str_replace(array('[', ']'), '', self::escapeAttr($id, 'remove'));
		$id = str_replace(array('/', '\\', '.'), '_', $id);

		return $id;
	}
}
