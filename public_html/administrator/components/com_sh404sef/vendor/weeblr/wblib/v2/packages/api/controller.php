<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      ${str.version}
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Api;

use Weeblr\Wblib\V_SH4_4206\Base;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Standard controller used to respond to an api request. To be extended by api response producers.
 *
 * @package Weeblr\Wblib\V_SH4_4206\Api
 */
class Controller extends Base\Base
{
	/**
	 * Builds up an array of data for use in API response. Format:
	 *
	 * $data = array(
	 *  'data'  => array(
	 *      'enabled'     => true,
	 *      'seo_enabled' => true,
	 *      'site name'   => 'Site name set in PHP',
	 *      'ogp_id'      => 123456798
	 *  ),
	 *  'count' => 4,
	 *  'total' => 4
	 * );
	 *
	 * $data['data'] will be the payload returned.
	 * count and total are optionals, will be set to zero if missing.
	 *
	 * @param Request $request
	 * @param array   $options
	 *
	 * @return array
	 */
	public function get($request, $options)
	{
		return array();
	}

	public function put($request, $options)
	{
		return array();
	}

	public function patch($request, $options)
	{
		return array();
	}

	public function delete($request, $options)
	{
		return array();
	}
}
