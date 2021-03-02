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

namespace Weeblr\Wblib\V_SH4_4206\Platform;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 */
abstract class Platform implements Platforminterface
{
	// platforms
	const JOOMLA = 'joomla';
	const WORDPRESS = 'wordpress';

	protected $_name = '';

	// store current platform name and implementation
	private static $platformName = null;

	/**
	 * @var \Weeblr\Wblib\V_SH4_4206\System\ConfigInterface
	 */
	protected $_config = null;

	/**
	 * Whether we are on Joomla
	 *
	 * @return bool
	 */
	public function isJoomla()
	{
		return self::JOOMLA == self::$platformName;
	}

	/**
	 * Whether we are on WordPress
	 *
	 * @return bool
	 */
	public function isWordpress()
	{
		return self::WORDPRESS == self::$platformName;
	}

	/**
	 * Getter for platform name
	 *
	 * @return string
	 */
	public function getName()
	{
		return self::$platformName;
	}

}
