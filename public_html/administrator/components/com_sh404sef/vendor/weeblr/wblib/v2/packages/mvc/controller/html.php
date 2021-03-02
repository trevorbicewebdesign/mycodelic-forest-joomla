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

/** ensure this file is being included by a parent file */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Updates to a standard HTML page, which has an AMP version
 */
class ControllerHtml extends ControllerController
{
	/**
	 * Builds a view and render it with the provided data.
	 */
	public function render($data)
	{
		try
		{
			$view = new Mvc\ViewHtml(
				$this->options
			);

			$view->setDisplayData(
				$this->getData($data)
			)->outputHeaders()
			     ->render();
		}
		catch (\Exception $e)
		{
			System\Log::error('wblib', '%s::%d %s', __METHOD__, __LINE__, $e->getMessage());
		}
	}
}
