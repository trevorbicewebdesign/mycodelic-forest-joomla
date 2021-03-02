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
class ViewHtml extends ViewView
{
	protected $headers = array(
		'Content-Type'           => 'text/html; charset=utf-8',
		'X-Content-Type-Options' => 'nosniff',
		'x-wblib_version'        => 'v1'
	);

	/**
	 * Renders the view content, returning it in a string and
	 * optionally echoing it
	 */
	protected function doRender()
	{
		return LayoutHelper::render(
			WbDotJoin($this->theme, $this->layout),
			$this->data,
			$this->baseLayoutPath
		);
	}
}
