<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 *
 * 2020-06-26
 *
 */

namespace Weeblr\Wblib\V_SH4_4206\System;

use Weeblr\Wblib\V_SH4_4206\Factory;

/* Security check to ensure this file is being included by a parent file. */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Simple hook system
 *
 */
class Hook
{
	/**
	 * Look for, and include_once if found, a functions file that can
	 * contains user provided code.
	 *
	 * Default search path is the one obtained from the platform.
	 *
	 * If a path is provided and/or a file name are provided, they are used instead, as in:
	 * {provided_full_path}/{provided_filed_name}
	 *
	 * @param string $fileName Optional file name to include instead of wblib_functions.php.
	 * @param string $path Root path to search for the functions file.
	 *
	 * @return bool
	 */
	public static function load($fileName = 'wblib_functions.php', $path = '')
	{
		if (empty($path))
		{
			$path = Factory::get()->getThe('platform')->getHooksPath();
		}
		$path     = rtrim($path, '/\\');
		$fullPath = $path . '/' . $fileName;
		if (file_exists($fullPath))
		{
			include_once $fullPath;
			return true;
		}

		return false;
	}

	/**
	 * Add a hook, identified by an id (wblib.some_name),
	 * a callback and a priority
	 *
	 * @param string   $id Unique identifier for the hook
	 * @param Callable $callback Callback that was passed to add method
	 * @param int      $priority Higher priorities are executed first. Default to 100.
	 *
	 * @return bool True if hook was added
	 **/
	public static function add($id, $callback, $priority = 100)
	{
		return Factory::get()->getThe('platform')->addHook($id, $callback, $priority);
	}

	/**
	 * Remove a callback for a given hook
	 *
	 * @param string   $id Dot-joined unique identifier for the hook
	 * @param Callable $callback Callback that was passed to add method
	 * @param int|null $priority Optional param to restrict removal to a given priority level
	 *
	 * @return bool True if hook was removed
	 **/
	public static function remove($id, $callback, $priority = null)
	{
		return Factory::get()->getThe('platform')->removeHook($id, $callback, $priority);

		return $removed;
	}

	/**
	 * Execute all callbacks registered for a hook id
	 * in order of priority
	 * Params can be modified by the callback, if so defined
	 * Execution can return values
	 *
	 * @return mixed|null
	 */
	public static function run()
	{
		self::execute(false, func_get_args());
	}

	/**
	 * Execute all callbacks registered for a hook id
	 * in order of priority
	 * A value must be returned, which will normally be assigned
	 * by caller to replace current value
	 *
	 * @return mixed
	 */
	public static function filter()
	{
		return self::execute(true, func_get_args());
	}

	/**
	 * Execute all callbacks registered for a hook id
	 * in order of priority
	 * A value must be returned, which will normally be assigned
	 * by caller to replace current value
	 *
	 * @param       $filter
	 * @param array $params
	 *
	 * @return mixed
	 */
	private static function execute($filter, $params)
	{
		if ($filter)
		{
			return Factory::get()->getThe('platform')->executeHook($filter, $params);
		}
		else
		{
			Factory::get()->getThe('platform')->executeHook($filter, $params);
		}
	}

	/**
	 * Whether a given hook has callbacks registered.
	 *
	 * @param string $id
	 *
	 * @return bool
	 */
	public static function hasHook($id)
	{
		return Factory::get()->getThe('platform')->hasHook($id);
	}
}
