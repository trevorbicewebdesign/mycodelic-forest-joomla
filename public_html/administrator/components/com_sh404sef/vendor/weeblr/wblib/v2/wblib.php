<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author           Yannick Gaultier
 * @copyright        (c) Yannick Gaultier - Weeblr llc - 2020
 * @package          sh404SEF
 * @license          http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version          4.21.0.4206
 *
 * 2020-06-26
 *
 */

namespace Weeblr\Wblib\V_SH4_4206;

// no direct access
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

Class Wblib
{
	/**
	 * @var \Weeblr\Wblib\V_SH4_4206\Factory Stores singleton of wbLib factory
	 */
	private $factory = null;

	/**
	 * Setup db tables and other items as needed
	 */
	public function activate()
	{
		// db setup
		$this->updateDbSchema();

		return $this;
	}

	/**
	 * Remove db tables and any leftovers
	 */
	public function uninstall()
	{
		$this->removeDbSchema();

		return $this;
	}

	/**
	 * Run time init
	 */
	public function boot()
	{
		// path to layouts
		defined('WBLIB_V_SH4_4206_LAYOUTS_PATH') or define('WBLIB_V_SH4_4206_LAYOUTS_PATH', WBLIB_V_SH4_4206_ROOT_PATH . '/layouts');
		defined('WBLIB_V_SH4_4206_PACKAGES_PATH') or define('WBLIB_V_SH4_4206_PACKAGES_PATH', WBLIB_V_SH4_4206_ROOT_PATH . '/packages');
		// assets path from the PLUGIN root
		defined('WBLIB_V_SH4_4206_ASSETS_PATH') or define('WBLIB_V_SH4_4206_ASSETS_PATH', WBLIB_V_SH4_4206_ROOT_PATH . '/assets');

		// global flags
		defined('WBLIB_V_SH4_4206_LOG_EXCEPTIONS') or define('WBLIB_V_SH4_4206_LOG_EXCEPTIONS', true);

		// load code from Joomla Framework
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/string/src/phputf8/utf8.php';
		if (!function_exists('utf8_ltrim'))
		{
			include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/string/src/phputf8/trim.php';
		}
		if (!function_exists('utf8_ucfirst'))
		{
			include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/string/src/phputf8/ucfirst.php';
		}
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/string/src/StringHelper.php';
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/utilities/src/ArrayHelper.php';
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/registry/src/Registry.php';
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/uri/src/UriInterface.php';
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/uri/src/AbstractUri.php';
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/uri/src/UriHelper.php';
		include_once WBLIB_V_SH4_4206_ROOT_PATH . '/vendor/joomla/uri/src/Uri.php';

		// load php shortcuts functions, not autoloaded
		$file = WBLIB_V_SH4_4206_PACKAGES_PATH . '/system/php_shortcuts.php';
		if (file_exists($file))
		{
			include_once $file;
		}
		else
		{
			throw new \RuntimeException('wbLib: cannot initialize php_shortcuts, php_shortcuts file is missing');
		}

		$factoryFile = WBLIB_V_SH4_4206_PACKAGES_PATH . '/factory.php';
		if (file_exists($factoryFile))
		{
			include_once $factoryFile;
			$this->factory = Factory::get();
		}
		if (empty($this->factory))
		{
			wbThrow(new \RuntimeException('wbLib: unable to build factory.'));
		}

		// fetch the autoloader once, this will create and initialize it.
		$this->factory->getThe('autoloader');

		/**
		 * Filter wether the API system should be enabled.
		 *
		 * @api
		 * @package wbLib\filter\config
		 * @var wblib_enable_api
		 * @since   0.0.1
		 *
		 * @param bool $shouldEnableApi
		 *
		 * @return bool
		 */
		if ($this->factory->getThe('hook')->filter(
			'wblib_enable_api',
			true
		))
		{
			// Register our API handler with the appropriate hook.
			$this->factory->getThe('hook')->add(
				'wblib_api_process_request',
				array(
					$this->factory->getThe('api'),
					'handleRequest'
				)
			);
		}

		defined('WBLIB_VERSION') or define('WBLIB_VERSION', 'V_SH4_4206');

		return $this;
	}

	/**
	 * @TODO: move to own class
	 */
	private function updateDbSchema()
	{
		return $this;
	}

	/**
	 * @TODO: move to own class
	 */
	private function removeDbSchema()
	{

		return $this;
	}

	/**
	 * @TODO: move to own class
	 */
	private function _runQueries($queries)
	{

		return $this;
	}
}
