<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 * @date        2020-06-26
 */

namespace Weeblr\Sh404sef;

use Weeblr\Wblib\V_SH4_4206\Base;
use Weeblr\Wblib\V_SH4_4206\System;

// no direct access
defined('WBLIB_EXEC') || die;

/**
 * Bootstrap app, called from higher up.
 */
class Sh404sefApp extends Base\App
{
	protected $id        = 'sh404sef';
	protected $namespace = '\Weeblr\Sh404sef';

	public function __construct($options = array())
	{
		parent::__construct($options);

		// include sh4 factory to extend wbLib factory.
		include_once 'factory.php';

		// register local platform code with the autoloader
		// for instance J3 or J4 specific code
		$this->factory->getThe('autoloader')
		              ->registerNamespace(
			              '\Weeblr\Sh404sef\Platform',
			              SH404SEF_APP_PLATFORM_PATH . '/platform'
		              );

		// register the API handler with the wbLib API manager.
		$registered = $this->factory
			->getA('\Weeblr\Sh404sef\Api\Handler')
			->register();
		if (!$registered)
		{
			$this->enabled = false;
			$msg           = 'Failed registering sh404SEF API with wbLib, aborting.';
			System\Log::error('sh404sef', $msg);
			throw new \RuntimeException($msg);
		}

		// load the local platform api hooks, if any
		$apiHooks = $this->factory->getA('\Weeblr\Sh404sef\Api\Hooks');
		if (!empty($apiHooks))
		{
			$apiHooks->add();
		}

		// load the local platform api hooks, if any
		$appHooks = $this->factory->getA('\Weeblr\Sh404sef\Platform\Hooks');
		if (!empty($appHooks))
		{
			$appHooks->add();
		}

		// finally register a version object
		$this->setVersionInfo();
	}

	/**
	 * Builds a version information object and store it with wbLib.
	 *
	 * @throws \Exception
	 */
	private function setVersionInfo()
	{
		static $version = null;

		if (is_null($version))
		{
			if (false === strpos('${str.version}', '_version_'))
			{
				$versionInfo = array(
					'package'           => 'sh404SEF',
					'platform'          => 'joomla',
					'package_title'     => 'sh404SEF - SEO extension for Joomla!',
					'version'           => '${str.version}',
					'version_full'      => '4.21.0.4206',
					'date'              => '2020-06-26',
					'license'           => 'http://www.gnu.org/copyleft/gpl.html GNU/GPL',
					'copyright'         => '(c) Yannick Gaultier - Weeblr llc - 2020',
					'author'            => 'Yannick Gaultier',
					'url'               => 'https://weeblr.com',
					'edition'           => 'full',
					'documentation_url' => 'https://weeblr.com/9k',
					'php'               => array(
						'min' => '5.6.0',
						'max' => ''
					),
					'platform_version'  => array(
						'min' => '3.9.0',
						'max' => '4.0'
					)
				);
			}
			else
			{
				$versionInfo = array(
					'package'           => 'sh404sef',
					'platform'          => 'joomla',
					'package_title'     => 'sh404SEF',
					'version'           => '4.20.0',
					'version_full'      => '4.20.0.1234',
					'date'              => '2020-02-20',
					'license'           => 'GPL Version 2',
					'copyright'         => '(c) WeeblrPress - Weeblr,llc - 2020',
					'author'            => 'Weeblr',
					'url'               => 'https://weeblr.com',
					'edition'           => 'full',
					'documentation_url' => 'https://weeblr.com/9k',
					'php'               => array(
						'min' => '5.3',
						'max' => '7.5'
					),
					'platform_version'  => array(
						'min' => '3.6',
						'max' => '4'
					)
				);
			}

			$version = new System\Version($versionInfo);
		}
	}
}

