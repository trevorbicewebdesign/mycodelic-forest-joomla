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
 *
 */

namespace Weeblr\Wblib\V_SH4_4206\Api;

use Weeblr\Wblib\V_SH4_4206\Base;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Base API class, used by clients to interface with userland models.
 *
 * Specifying routes/handlers is done in the register() method.
 * General syntax:
 * $this->api
 *   ->get(
 *     $this->namespace,
 *     path,
 *     callback,
 *     $options
 * )
 *   ->post()
 *   ->put()
 *   ->delete()
 *   ->patch()
 *
 * namespace: string
 * path: string, with named variables ie: /pages, /pages/{id}, /pages/{id}/meta/{description}
 * callback: function/method to call when the route is triggered, multiple syntaxes:
 *   - function: $callbackName: called directly
 *   - string: 'callbackName': called directly
 *   - array: [$object, 'methodName']: called directly
 *   - array: [ 'className', 'methodName']: the className is supposed to be a descendant of Controller.
 *     With that syntax, the className:methodName is not instantiated and called directly. Instead, an instance of a
 * Helper is created and the Helper method handle($controllerName, $methodName, $request) is called. The
 * Handler::handle() method manages most boilerplate for the Request and Response objects and the Controller method
 * only needs to return the data array. This data array will be wrapped in a Response object by the Helper and the
 * Controller does not need to concern itself with this, it only needs to fetch/manage the data.
 *
 * When called directly (ie not through the Helper::handle() method, the callback is passed a Request object
 * and must return an updated Request object, likely containing a Response object.
 *
 */
abstract class Handler extends Base\Base
{
	/**
	 * @var Api The unique api object.
	 */
	protected $api;

	/**
	 * @var string Namespace fo the client.
	 */
	protected $namespace = '';

	/**
	 * @var string API version the client.
	 */
	protected $version = 'v1';

	/**
	 * \ShlApi_Handler constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->api = $this->factory->getThe('api');
	}

	/**
	 * Register all routes with the API layer.
	 */
	abstract public function register();

	/**
	 * A lits of standard options for a route, that should always be present.
	 *
	 * @return array
	 */
	protected function getDefaultRouteOptions()
	{
		return array(
			'version'   => $this->version,
			'auth_type' => Authorizer::AUTH_LOG_IN,
		);
	}

	/**
	 * Build a list of options for a router, merging default options and passed ones.
	 *
	 * @param array $routeOptions
	 *
	 * @return array
	 */
	protected function buildRouteOptions($routeOptions = array())
	{
		return wbArrayMerge(
			$this->getDefaultRouteOptions(),
			$routeOptions
		);
	}

	/**
	 * Computes an array holding links to current, next, prev, first and last
	 * pages of a list.
	 *
	 * @param Request $request
	 * @param array   $options Parameters passed in request.
	 * @param int     $total Total number of items existing.
	 *
	 * @return array
	 * @deprecated Use Helper::getPagination()
	 */
	protected function getPagination($request, $options, $total)
	{
		return $this->factory->getA('Weeblr\Wblib\V_SH4_4206\Api\Helper')->getPagination($request, $options, $total);
	}

	/**
	 * Set this function as the "auth_callback" parameter
	 * when add a router handler to bypass authorization.
	 * DANGEROUS: only use for dev!
	 *
	 * @param Request $apiRequest
	 * @param array   $authorization
	 *
	 * @return array
	 */
	public function bypassAuthorization($apiRequest, $authorization)
	{
		$authorization = array(
			'status' => System\Http::RETURN_OK
		);

		return $authorization;
	}

	/**
	 * Set this function as the "auth_callback" parameter
	 * when add a router handler to deny authorization.
	 *
	 * @param Request $apiRequest
	 * @param array   $authorization
	 *
	 * @return array
	 */
	public function denyAuthorization($apiRequest, $authorization)
	{
		$authorization = array(
			'status' => System\Http::RETURN_UNAUTHORIZED
		);

		return $authorization;
	}
}
