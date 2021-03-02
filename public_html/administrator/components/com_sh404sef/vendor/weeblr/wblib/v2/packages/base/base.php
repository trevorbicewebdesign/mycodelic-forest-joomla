<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Base;

use Weeblr\Wblib\V_SH4_4206\Factory;
use Weeblr\Wblib\V_SH4_4206\Platform\Platform;

/** ensure this file is being included by a parent file */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Base class to access the factory.
 *
 */
class Base
{
	/**
	 * @var Factory Unique instance of the factory.
	 */
	protected $factory = null;

	/**
	 * @var Platform The platform instance.
	 */
	protected $platform = null;

	/**
	 * Stores factory instance.
	 *
	 */
	public function __construct()
	{
		$this->factory  = Factory::get();
		$this->platform = $this->factory->getThe('platform');
	}
}
