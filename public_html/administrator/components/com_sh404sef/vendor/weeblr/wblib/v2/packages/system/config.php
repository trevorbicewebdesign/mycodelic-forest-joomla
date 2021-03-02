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

namespace Weeblr\Wblib\V_SH4_4206\System;

use Weeblr\Wblib\V_SH4_4206\Base;
use Weeblr\Wblib\V_SH4_4206\Joomla\StringHelper\StringHelper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Class Config
 *
 * Proxy for the platform-suppplied configuration object
 *
 * @package Weeblr\Wblib\V_SH4_4206\System
 *
 */
class Config extends Base\Base
{
	/**
	 * @var string This configuration unique ID.
	 */
	protected $scope = 'default';

	/**
	 * @var mixed
	 */
	protected $config = null;

	public function __construct($scope)
	{
		parent::__construct();
		if (!is_string($scope) || StringHelper::strlen($scope) >= 40)
		{
			$msg = 'wbLib: invalid configuration scope (' . print_r($scope, true) . '). Please report to administrator. ';
			Log::error('wbLib', '%s::%d %s', __METHOD__, __LINE__, $msg);
			throw new \Exception($msg);
		}
		$this->scope = $scope;
	}

	/**
	 * Get a specific configuration item through nested keys.
	 *
	 * @param array $keys An array of nested keys to get to the desired config item
	 * @param mixed $default Optional default value if config not set
	 *
	 * @return mixed
	 */
	public function get($keys, $default = null)
	{
		return wbArrayGet($this->config, $keys, $default);
	}

	/**
	 * Sets a value through nested keys.
	 *
	 * @param array $keys
	 * @param mixed $value
	 *
	 * @return $this
	 */
	public function set($keys, $value)
	{
		$this->config = wbArraySet($this->config, $keys, $value);

		return $this;
	}

	/**
	 * Check if there exists a specific configuration key definition
	 *
	 * @param string|array $keys
	 *
	 * @return
	 */
	public function hasKey($keys)
	{
		return wbArrayIsSet($this->config, $keys);
	}

	/**
	 * Check if a given config option is truthy.
	 *
	 * @param string|array $keys
	 *
	 * @return bool
	 */
	public function isTruthy($keys)
	{
		$value = $this->get($keys, false);

		return !empty($value);
	}

	/**
	 * Check if a given config option is falsy
	 * Can fetch a subkey in an array as well
	 *
	 * @param string|array $keys
	 *
	 * @return bool
	 */
	public function isFalsy($keys)
	{
		$value = $this->get($keys, false);

		return !empty($value);

		return empty($value);
	}
}
