<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author                  Yannick Gaultier
 * @copyright               (c) Yannick Gaultier - Weeblr llc - 2020
 * @package                 sh404SEF
 * @license                 http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version                 4.21.0.4206
 *
 * 2020-06-26
 */

use Weeblr\Wblib\V_SH4_4206\Factory;
use Weeblr\Wblib\V_SH4_4206\System;
use Weeblr\Wblib\V_SH4_4206\Joomla\StringHelper\StringHelper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * A set of timesaving php functions
 *
 * @author  weeblr
 */

if (!function_exists('wbArrayGet'))
{
	/**
	 * Get a value by key from an array, defaulting to
	 * a provided value if key doesn't exist.
	 * Key can be an array of keys, which are then
	 * traversed
	 *
	 * @param array $array
	 * @param       $keys
	 * @param mixed $default
	 *
	 * @return mixed
	 */
	function wbArrayGet($array, $keys, $default = null)
	{
		if (empty($keys) && $keys !== 0)
		{
			return $array;
		}

		if (!is_array($array))
		{
			return $default;
		}

		if (!is_array($keys) && isset($array[$keys]))
		{
			return $array[$keys];
		}

		if (is_array($keys))
		{
			$current = $array;
			foreach ($keys as $key)
			{
				if (!is_array($current) || !array_key_exists($key, $current))
				{
					return $default;
				}

				$current = $current[$key];
			}

			return $current;
		}

		return $default;
	}
}

if (!function_exists('wbArraySet'))
{
	/**
	 * Set a value by key from an array.
	 * Key can be an array of keys, which are then
	 * traversed
	 *
	 * @param array $array
	 * @param mixed $keys
	 * @param mixed $value
	 *
	 * @return mixed
	 */
	function wbArraySet($array, $keys, $value)
	{
		if (!is_array($array))
		{
			$array = array();
		}

		if (is_scalar($keys))
		{
			// end recursion
			$array[$keys] = $value;

			return $array;
		}
		if (!is_array($keys))
		{
			// objects?
			return $array;
		}

		// current iteration key
		$key = array_shift($keys);

		if (!empty($keys))
		{
			if (!isset($array[$key]) || !is_array($array[$key]))
			{
				$array[$key] = array();
			}
			$array[$key] = wbArraySet($array[$key], $keys, $value);
		}
		else
		{
			$array[$key] = $value;
		}

		return $array;
	}
}

if (!function_exists('wbArrayIsSet'))
{
	/**
	 * Find if an array has a specifi key.
	 * Key can be an array of keys, which are then
	 * traversed
	 *
	 * @param array $array
	 * @param mixed $keys
	 *
	 * @return bool
	 */
	function wbArrayIsSet($array, $keys)
	{
		if (empty($keys) && $keys !== 0)
		{
			return false;
		}

		if (!is_array($array))
		{
			return false;
		}

		if (!is_array($keys) && isset($array[$keys]))
		{
			return true;
		}

		if (is_array($keys))
		{
			$current = $array;
			foreach ($keys as $key)
			{
				if (!array_key_exists($key, $current))
				{
					return false;
				}

				$current = $current[$key];
			}

			return true;
		}

		return false;
	}
}

if (!function_exists('wbArrayIsEmpty'))
{
	/**
	 * Get a value by key from an array and check if it is empty.
	 *
	 * @param array $array
	 * @param       $keys
	 *
	 * @return bool
	 */
	function wbArrayIsEmpty($array, $keys)
	{
		$value = wbArrayGet($array, $keys, null);

		return empty($value);
	}
}

if (!function_exists('wbArrayIsEqual'))
{
	/**
	 * Get a value by key from an array and check if it is equal to a given value
	 *
	 * @param array $array
	 * @param       $keys
	 * @param mixed $value
	 * @param bool  $strict
	 *
	 * @return bool
	 */
	function wbArrayIsEqual($array, $keys, $value, $strict = false)
	{
		$actualValue = wbArrayGet($array, $keys, null);

		return $strict ? $actualValue === $value : $actualValue == $value;
	}
}

if (!function_exists('wbArrayKeyAppend'))
{
	/**
	 * Append a string to an array member
	 * If not existing, the array member is created
	 *
	 * @param array  $array
	 * @param mixed  $key
	 * @param string $value
	 *
	 * @param string $glue
	 *
	 * @return mixed
	 * @throws Exception
	 */
	function wbArrayKeyAppend(&$array, $key, $value, $glue = '')
	{
		if (empty($key))
		{
			return;
		}
		if (!is_array($array) && !empty($array))
		{
			wbThrow(new \InvalidArgumentException('Trying to initialize an array key, while not an array and not empty'));
		}
		else if (!is_array($array))
		{
			wbThrow(new \InvalidArgumentException('Trying to initialize an array key, while not an array'));
		}

		$array[$key] = empty($array[$key]) ? $value : $array[$key] . $glue . $value;
	}
}

if (!function_exists('wbArrayKeyInit'))
{
	/**
	 * Set initial value of an array member
	 * only if it doesn't exist already
	 * Replaces:
	 * $array['key'] = isset($array['key'] ? $array['key'] : "some value";
	 *
	 * @param array $array
	 * @param mixed $key
	 * @param mixed $default
	 *
	 * @return mixed
	 * @throws Exception
	 */
	function wbArrayKeyInit(&$array, $key, $default)
	{
		if (empty($key) || isset($array[$key]))
		{
			return;
		}
		if (!is_array($array) && !empty($array))
		{
			wbThrow(new \InvalidArgumentException('Trying to initialize an array key, while not an array and not empty'));
		}
		else if (!is_array($array))
		{
			$array = array();
		}

		$array[$key] = $default;
	}
}

if (!function_exists('wbArrayKeyMerge'))
{
	/**
	 * Merges an array with one of the values of an associative array
	 * initializing it if that key doesn't exists already
	 *
	 * Replaces:
	 * $array['key'] = isset($array['key'] ? array_merge($array['key'], $newArray) : $newArray;
	 *
	 * Note: if the key exists, but doesn't contain an array, its value is casted to an array
	 * Note: if the passed "$array" is actually not an array, it's left untouched
	 *
	 * @param array $array
	 * @param mixed $key
	 * @param array $toMerge
	 */
	function wbArrayKeyMerge(&$array, $key, $toMerge)
	{
		$array = empty($array) ? array() : $array;
		if (is_array($array))
		{
			$array[$key] = empty($array[$key]) ? (array) $toMerge : array_merge((array) $array[$key], (array) $toMerge);
		}
	}
}

if (!function_exists('wbArrayFilterByKey'))
{
	/**
	 * Filter an associative array, returning only keys listed
	 * in the second parameter
	 *
	 * @param array $data
	 * @param array $keyList
	 *
	 * @return array
	 */
	function wbArrayFilterByKey($data, $keyList)
	{
		// return untouched if invalid params
		if (!is_array($data) || !is_array($keyList))
		{
			return $data;
		}

		$filtered = array();
		foreach ($data as $key => $value)
		{
			if (in_array($key, $keyList))
			{
				$filtered[$key] = $value;
			}
		}

		return $filtered;
	}
}

if (!function_exists('wbArrayMerge'))
{
	/**
	 * Merges  arrays, checking that they are indeed arrays
	 *
	 * @param [array, array, ...]
	 *
	 * @return array
	 */
	function wbArrayMerge()
	{
		$args   = func_get_args();
		$merged = array();
		foreach ($args as $array)
		{
			$merged = array_merge($merged, (array) $array);
		}

		return $merged;
	}
}

if (!function_exists('wbArrayEnsure'))
{
	/**
	 * Ensure a variable is an array.
	 *
	 * @param mixed
	 *
	 * @return array
	 */
	function wbArrayEnsure($thing)
	{
		return is_array($thing) ? $thing : array($thing);
	}
}

if (!function_exists('wbInitEmpty'))
{
	/**
	 * Return passed value if not empty, default otherwise
	 *
	 * @param mixed $value
	 * @param mixed $default
	 *
	 * @return mixed
	 */
	function wbInitEmpty($value, $default)
	{
		return empty($value) ? $default : $value;
	}
}

if (!function_exists('wbDump'))
{
	function wbDump($value, $name = '', $asString = false, $newLine = '<br />', $codeWrapper = '<pre>%s</pre>')
	{
		$back = debug_backtrace(false);
		if (count($back) > 1)
		{
			$caller = wbArrayGet($back[1], 'class', '-') . ' | ' . wbArrayGet($back[1], 'function', '-') . ' | ' . wbArrayGet($back[0], 'line', '-');
		}
		else
		{
			$caller = '';
		}
		$output = '';
		$name   = empty($name) ? 'Var dump' : $name;
		$output .= $newLine . '<b>' . $name . ': </b><small>(' . $caller . ')</small>' . $newLine;
		$output .= sprintf($codeWrapper, is_null($value) ? 'null' : print_r($value, true));
		$output .= $newLine;

		echo $asString ? null : $output;

		return $output;
	}
}

if (!function_exists('wbLog'))
{
	function wbLog($message, $includeBacktrace = null, $newLine = '<br />', $codeWrapper = '<pre>%s</pre>')
	{
		if (!defined('WBLIB_LOG_TO_SCREEN') || WBLIB_LOG_TO_SCREEN === false)
		{
			return;
		}

		// include backtrace if globally set, or based on call argument
		if (defined('WBLIB_LOG_TO_SCREEN_INCLUDE_BACKTRACE') && WBLIB_LOG_TO_SCREEN_INCLUDE_BACKTRACE !== false && $includeBacktrace !== false)
		{
			$includeBacktrace = true;
		}

		if ($includeBacktrace)
		{
			$back    = debug_backtrace(false);
			$message .= $newLine . sprintf($codeWrapper, print_r($back, true));
		}

		echo $message . $newLine;
	}
}

if (!function_exists('wbThrow'))
{
	function wbThrow(Exception $exception, $log = true)
	{
		// logging globally disabled
		if (defined('WBLIB_LOG_EXCEPTIONS') && WBLIB_LOG_EXCEPTIONS !== true)
		{
			$log = false;
		}

		if ($log)
		{
			// build log message ourselves rather than relying on (string) $exception
			// the latter uses php built-in display of stack trace, which cuts off
			// long values
			$logMsg = 'Exception ' . get_class($exception) . ' with message "' . $exception->getMessage() . '" in ' . $exception->getFile() . ':'
				. $exception->getLine();
			$logMsg .= "\nStack trace:\n";
			$logMsg .= print_r($exception->getTrace(), true);

			System\Log::error('wblib', $logMsg);
		}

		throw $exception;
	}
}

if (!function_exists('wbContains'))
{
	function wbContains($haystack, $needles)
	{
		if (is_string($needles))
		{
			return !empty($needles) && StringHelper::strpos($haystack, $needles) !== false;
		}
		else if (is_array($needles))
		{
			foreach ($needles as $needle)
			{
				if (!empty($needle) && StringHelper::strpos($haystack, $needle) !== false)
				{
					return true;
				}
			}
		}

		return false;
	}
}

if (!function_exists('wbStartsWith'))
{
	function wbStartsWith($haystack, $needles)
	{
		if (is_string($needles))
		{
			return !empty($needles) && 0 === StringHelper::strpos($haystack, $needles);
		}
		else if (is_array($needles))
		{
			foreach ($needles as $needle)
			{
				if (!empty($needle) && 0 === StringHelper::strpos($haystack, $needle))
				{
					return true;
				}
			}
		}

		return false;
	}
}

if (!function_exists('wbEndsWith'))
{
	function wbEndsWith($haystack, $needles)
	{
		if (is_string($needles))
		{
			return !empty($needles) && StringHelper::substr($haystack, -StringHelper::strlen($needles)) == $needles;
		}
		else if (is_array($needles))
		{
			foreach ($needles as $needle)
			{
				if (!empty($needle) && StringHelper::substr($haystack, -StringHelper::strlen($needle)) == $needle)
				{
					return true;
				}
			}
		}

		return false;
	}
}

if (!function_exists('wbRTrim'))
{
	function wbRTrim($string, $toTrim)
	{
		if (wbEndsWith($string, $toTrim))
		{
			$string = StringHelper::substr($string, 0, -StringHelper::strlen($toTrim));
		}

		return $string;
	}
}

if (!function_exists('wbLTrim'))
{
	function wbLTrim($string, $toTrim)
	{
		if (wbStartsWith($string, $toTrim))
		{
			$string = StringHelper::substr($string, StringHelper::strlen($toTrim));
		}

		return $string;
	}
}

if (!function_exists('wbJoin'))
{
	/**
	 * Join hopefully strings with a glue string
	 * Warning: empty strings are removed prior to joining
	 *
	 * @param string $glue the string to use to glue things
	 * @param mixed variable numbers or aguments te be joined
	 *
	 * @return mixed
	 */
	function wbJoin($glue)
	{
		$args = func_get_args();

		// get glue out
		array_shift($args);

		return join($glue, array_filter($args));
	}
}

if (!function_exists('wbDotJoin'))
{
	/**
	 * Join (hopefully) strings with dots
	 * Warning: empty strings are removed prior to joining
	 *
	 * @param string    $glue the string to use to glue things
	 * @param \variable $mixed numbers or aguments te be joined
	 *
	 * @return mixed
	 */
	function wbDotJoin()
	{
		$args = func_get_args();

		return join('.', array_filter($args));
	}
}

if (!function_exists('wbSlashJoin'))
{
	/**
	 * Join (hopefully) strings with dots
	 * Warning: empty strings are removed prior to joining
	 *
	 * @param string    $glue the string to use to glue things
	 * @param \variable $mixed numbers or aguments te be joined
	 *
	 * @return mixed
	 */
	function wbSlashJoin()
	{
		$args = func_get_args();

		return join('/', array_filter($args));
	}
}

if (!function_exists('wbDot2Slash'))
{
	/**
	 * Replace dots with slashes in a string
	 *
	 * @param $string
	 *
	 * @return mixed
	 */
	function wbDot2Slash($string)
	{
		return str_replace('.', '/', $string);
	}
}

if (!function_exists('wbWith'))
{
	/**
	 * Returns the object passed.
	 * Allow creating and using an object in one go
	 * as in:
	 *
	 * wbWith(new Someclass())->someMethod();
	 *
	 * @param $object
	 *
	 * @return mixed
	 */
	function wbWith($object)
	{
		return $object;
	}
}

if (!function_exists('wbAbridge'))
{
	/**
	 * @package     Joomla.Platform
	 * @subpackage  HTML
	 *
	 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
	 * @license     GNU General Public License version 2 or later; see LICENSE
	 */
	/**
	 * HTML helper class for rendering manipulated strings.
	 *
	 * @package     Joomla.Platform
	 * @subpackage  HTML
	 * @since       11.1
	 */
	/**
	 * Abridges text strings over the specified character limit. The
	 * behavior will insert an ellipsis into the text replacing a section
	 * of variable size to ensure the string does not exceed the defined
	 * maximum length. This method is UTF-8 safe.
	 *
	 * For example, it transforms "Really long title" to "Really...title".
	 *
	 * Note that this method does not scan for HTML tags so will potentially break them.
	 *
	 * @param string  $text The text to abridge.
	 * @param integer $length The maximum length of the text (default is 50).
	 * @param integer $intro The maximum length of the intro text (default is 30).
	 * @param string  $bridge the string to use to bridge
	 *
	 * @return  string   The abridged text.
	 *
	 * @since   11.1
	 */
	function wbAbridge($text, $length = 50, $intro = 30, $bridge = '...')
	{
		// Abridge the item text if it is too long.
		if (StringHelper::strlen($text) > $length)
		{
			// Determine the remaining text length.
			$remainder = $length - ($intro + StringHelper::strlen($bridge));

			// Extract the beginning and ending text sections.
			$beg = StringHelper::substr($text, 0, $intro);
			$end = StringHelper::substr($text, StringHelper::strlen($text) - $remainder);

			// Build the resulting string.
			$text = $beg . $bridge . $end;
		}

		return $text;
	}
}

if (!function_exists('wbGetFactory'))
{
	/**
	 * Wrapper to get wbLib factory. To use in hooks files or in places
	 * where adding a use clause is not feasible due to wbLib namespace
	 * changing with each new version of extensions using it.
	 *
	 * @return \Weeblr\Wblib\V_SH4_4206\Factory
	 */
	function wbGetFactory()
	{
		return Factory::get();
	}
}

if (!function_exists('wbGetPlatform'))
{
	/**
	 * Wrapper to get wbLib platform. To use in hooks files or in places
	 * where adding a use clause is not feasible due to wbLib namespace
	 * changing with each new version of extensions using it.
	 *
	 * @return \Weeblr\Wblib\V_SH4_4206\Platform\Platform
	 */
	function wbGetPlatform()
	{
		return Factory::get()->getThe('platform');
	}
}

if (!function_exists('wbAddHook'))
{
	/**
	 * Add a hook, identified by an id (wblib.some_name),
	 * a callback and a priority
	 *
	 * @param string   $hookName Unique identifier for the hook
	 * @param Callable $hookHandler Callback to execute
	 * @param int      $priority Higher priorities are executed first. Default to 100.
	 */
	function wbAddHook($hookName, $hookHandler, $priority = 100)
	{
		Factory::get()->getThe('hook')->add(
			$hookName,
			$hookHandler,
			$priority
		);
	}
}
