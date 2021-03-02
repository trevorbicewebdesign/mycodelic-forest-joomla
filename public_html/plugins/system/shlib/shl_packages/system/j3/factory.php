<?php
/**
 * Shlib - programming library
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier 2020
 * @package     shlib
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     0.4.0.711
 * @date		2020-06-26
 */

// no direct access
defined('_JEXEC') or die;

/**
 * Provides compatible calls for various Joomla! base objects
 *
 * @since	0.2.8
 *
 */
class ShlSystem_Factory
{
	public static function dispatcher()
	{
		if (version_compare(JVERSION, '3', 'ge'))
		{
			$dispatcher = JEventDispatcher::getInstance();
		}
		else
		{
			$dispatcher = JDispatcher::getInstance();
		}
		return $dispatcher;
	}
}
