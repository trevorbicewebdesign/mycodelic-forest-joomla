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

namespace Weeblr\Sh404sef;

use Weeblr\Wblib\V_SH4_4206\Factory;
use Weeblr\Wblib\V_SH4_4206\System;
use Weeblr\Wblib\V_SH4_4206\Html;
use Weeblr\Sh404sef\Helper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die;

/**
 * Extends the standard factory, builds a few specific objects
 */
wbAddHook(
	'wblib_factory_build_object_filter',
	function ($object, $factory, $method, $class, $args, $key) {

		switch ($class)
		{
			case 'helper.analytics':
				$factory->enforceSingleton(
					$class,
					$method
				);

				return new Helper\Analytics();

				break;

			// gather all versions info
			case 'sh404sef.version_info':
				$factory->enforceSingleton(
					$class,
					$method
				);

				return System\Version::get('sh404sef');

				break;

			// get sh404SEF configuration object
			case 'sh404sef.config':
				$factory->enforceSingleton(
					$class,
					$method
				);

				return \Sh404sefFactory::getConfig();

				break;

			case 'sh404sef.assetsManager':
				$factory->enforceSingleton(
					$class,
					$method
				);

				return new Html\Assetsmanager(
					array(
						'filesPath' => '/media/com_sh404sef/assets'
					)
				);

				break;
		}

		return $object;
	}
);

