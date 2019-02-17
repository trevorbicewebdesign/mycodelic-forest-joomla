<?php
/**
 * Shlib - programming library
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier 2018
 * @package      shlib
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      0.4.0.678
 * @date        2018-08-02
 */

Use Joomla\Event\Dispatcher;

// no direct access
defined('_JEXEC') or die;

/**
 * Provides compatible calls for various Joomla! base objects
 *
 * @since    0.4.0
 *
 */
class ShlSystem_Factory
{
	public static function dispatcher()
	{
		return new Dispatcher();
	}
}
