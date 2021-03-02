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

namespace Weeblr\Wblib\V_SH4_4206\Platform\Joomla;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

class Config implements \Weeblr\Wblib\V_SH4_4206\System\ConfigInterface
{
	/**
	 * @var \JRegistry
	 */
	private $joomlaConfig = null;

	/**
	 * Config constructor. Stores Joomla config object
	 *
	 * @param \JRegistry $joomlaConfig
	 */
	public function __construct($joomlaConfig)
	{
		$this->joomlaConfig = $joomlaConfig;
	}

	/**
	 * Get a specific configuration key
	 *
	 * @param string $key The config option name
	 * @param mixed  $default Optional default value if config not set
	 */
	public function get($key, $default = null)
	{
		return $this->joomlaConfig->get($key, $default);
	}

	/**
	 * Check if there exists a specific configuration key definition
	 *
	 * @param string $key
	 */
	public function hasConfigKey($key)
	{
		return $this->joomlaConfig->exists($key);
	}
}
