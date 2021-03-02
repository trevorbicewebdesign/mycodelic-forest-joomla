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

namespace Weeblr\Wblib\V_SH4_4206\Mvc;

use Weeblr\Wblib\V_SH4_4206\Base;

/** ensure this file is being included by a parent file */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Updates to a standard HTML page, which has an AMP version
 */
abstract class ControllerController extends Base\Base
{
	protected $options = array();

	/**
	 * Constructor
	 *
	 * @param array $options An array of options.
	 */
	public function __construct($options = array())
	{
		parent::__construct();
		$this->options = $options;
	}

	/**
	 * Builds a view and render it with the provided data.
	 */
	public abstract function render($data);

	/**
	 * Builds up an array of data for use in layouts output.
	 *
	 * @param array $incomingData
	 *
	 * @return array
	 */
	protected function getData($incomingData = array())
	{
		$data = wbArrayMerge(
			array(),
			$incomingData
		);

		return $data;
	}
}
