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

use Weeblr\Wblib\V_SH4_4206\Base,
	Weeblr\Wblib\V_SH4_4206\System,
	Weeblr\Wblib\V_SH4_4206\Joomla\StringHelper\StringHelper;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Simple api system.
 *
 * GET/POST/DELETE to ?{api_slug}=/{namespace}/{vn}/{path}[?query_string]
 *
 * {path}:
 *   /items
 *   /items/{named_param}
 *   /items/{named_param}/other_items/{other_named_param}
 *
 *
 * Response: enveloped json
 *
 * response =
 * {
 *   "data":
 *     {
 *        ...
 *     },
 *    "links": {
 *      "self: "https://domain.tld/.../?wbl_api=/namespace/v1/something/2?page=1&per_page=10",
 *    }
 *    "meta": {
 *      "count": 10,
 *      "total": 62,
 *      "id": "fkjsdhfkdsjfhsdkjf"
 *   }
 * }
 *
 * Routes and handlers are specified in Handler::register().
 *
 */
class Api extends Base\Base
{
	/**
	 * @var array Version of this API.
	 */
	private $apiVersion = 'v2';

	/**
	 * @var array Stores the routes registered by clients.
	 */
	protected $routes = array();

	/**
	 * @var string Stores the URL api slug.
	 */
	private $apiSlug = 'wbl_api';

	/**
	 * Stores a GET route definition.
	 * @TODO: dedupe: compute a signature and check it.
	 *
	 * @param string   $namespace Unique ID for the router supplier.
	 * @param string   $route Route starting with a /, without the version.
	 * @param Callable $callback
	 * @param array    $options A series of options as an array:
	 *                            int priority Execution priority, higher get executed first, default to 0.
	 *                            string version Version string for the supplier API.
	 *                            Callable auth_callback An authorization callback.
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function get($namespace, $route, $callback, $options = array())
	{
		return $this->storeRoute(
			'get',
			$namespace,
			$route,
			$callback,
			$options
		);
	}

	/**
	 * Stores a POST route definition.
	 * @TODO: dedupe: compute a signature and check it.
	 *
	 * @param string   $namespace Unique ID for the router supplier.
	 * @param string   $route Route starting with a /, without the version.
	 * @param Callable $callback
	 * @param array    $options A series of options as an array:
	 *                            int priority Execution priority, higher get executed first, default to 0.
	 *                            string version Version string for the supplier API.
	 *                            Callable auth_callback An authorization callback.
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function post($namespace, $route, $callback, $options = array())
	{
		return $this->storeRoute(
			'post',
			$namespace,
			$route,
			$callback,
			$options
		);
	}

	/**
	 * Stores a PUT route definition.
	 * @TODO: dedupe: compute a signature and check it.
	 *
	 * @param string   $namespace Unique ID for the router supplier.
	 * @param string   $route Route starting with a /, without the version.
	 * @param Callable $callback
	 * @param array    $options A series of options as an array:
	 *                            int priority Execution priority, higher get executed first, default to 0.
	 *                            string version Version string for the supplier API.
	 *                            Callable auth_callback An authorization callback.
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function put($namespace, $route, $callback, $options = array())
	{
		return $this->storeRoute(
			'put',
			$namespace,
			$route,
			$callback,
			$options
		);
	}

	/**
	 * Stores a Delete route definition.
	 * @TODO: dedupe: compute a signature and check it.
	 *
	 * @param string   $namespace Unique ID for the router supplier.
	 * @param string   $route Route starting with a /, without the version.
	 * @param Callable $callback
	 * @param array    $options A series of options as an array:
	 *                            int priority Execution priority, higher get executed first, default to 0.
	 *                            string version Version string for the supplier API.
	 *                            Callable auth_callback An authorization callback.
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function delete($namespace, $route, $callback, $options = array())
	{
		return $this->storeRoute(
			'delete',
			$namespace,
			$route,
			$callback,
			$options
		);
	}

	/**
	 * Stores a patch route definition.
	 * @TODO: dedupe: compute a signature and check it.
	 *
	 * @param string   $namespace Unique ID for the router supplier.
	 * @param string   $route Route starting with a /, without the version.
	 * @param Callable $callback
	 * @param array    $options A series of options as an array:
	 *                            int priority Execution priority, higher get executed first, default to 0.
	 *                            string version Version string for the supplier API.
	 *                            Callable auth_callback An authorization callback.
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function patch($namespace, $route, $callback, $options = array())
	{
		return $this->storeRoute(
			'patch',
			$namespace,
			$route,
			$callback,
			$options
		);
	}

	/**
	 * Route a public API request url.
	 *
	 * @param string $url
	 * @param array  $query Associative array of query variables.
	 *
	 * return string
	 *
	 * @return string
	 */
	public function routeLink($url, $query = array())
	{
		if (System\Route::isFullyQualified($url))
		{
			return $url;
		}
		if (!wbStartsWith($url, '/'))
		{
			return $url;
		}

		// prepend root URL, root path, api_prefix
		if (!empty($query))
		{
			$query = '&' . http_build_query($query, null, '&', PHP_QUERY_RFC3986);
		}
		else
		{
			$query = '';
		}
		$url =
			wbSlashJoin(
				SringHelper::trim(
					$this->platform->getRootUrl($pathOnly = false),
					'/'
				),
				'?' . $this->apiSlug . '=',
				StringHelper::ltrim(
					$url,
					'/'
				)
			)
			. $query;

		return $url;
	}

	/**
	 * Execute an API request, defined with:
	 *
	 * array(
	 *     string $url
	 *     array  $data
	 *     array  $headers
	 *     string $method
	 *   )
	 *
	 * Returns an array of data.
	 *
	 * @param array $requestDef Optional request def, when called from PHP.
	 *
	 * @return array
	 */
	public function execute($requestDef)
	{
		$requestDef = array_merge(
			$requestDef,
			array(
				'secure' => true
			)
		);
		return $this->processRequest(
			$requestDef,
			false
		);
	}

	/**
	 * Proxy for platform router hook-up.
	 */
	public function handleRequest()
	{
		$this->processRequest();
	}

	/**
	 * Handle a request. Either the current HTTP request, or a passed request definition.
	 *
	 * array(
	 *     string $url
	 *     array  $data
	 *     array  $headers
	 *     string $method
	 *   )
	 *
	 * Either render and Returns an array of data.
	 *
	 * @param array $requestDef Optional request def, when called from PHP.
	 * @param bool  $respond If true, an HTTP response is output and processing ended.
	 *
	 * @return void|array
	 */
	public function processRequest($requestDef = null, $respond = true)
	{
		try
		{
			// is it an API request?
			if (!$this->isApiRequest($requestDef))
			{
				// not an api request
				return;
			}

			// bail early: must start with /{api_slug}/{namespace}
			$namespace = $this->getNamespaceIfValid(
				$requestDef
			);
			if (empty($namespace))
			{
				return $this->outputResponse(
					$respond,
					System\Http::RETURN_NOT_FOUND,
					array(
						'Namespace not found'
					)
				);
			}

			// which version is targeted?
			$version = $this->getVersionIfValid(
				$requestDef,
				$namespace
			);
			if (empty($version))
			{
				// api request, but not current version
				return $this->outputResponse(
					$respond,
					System\Http::RETURN_BAD_REQUEST,
					array(
						'Unsupported API version'
					)
				);
			}

			$processedRequest = $this->dispatchRequest(
				new Request(
					$requestDef,
					$this->apiSlug . '/' . $namespace . '/' . $version,
					$namespace,
					$version
				),
				$namespace
			);

			if (!empty($processedRequest) && $processedRequest instanceof Request)
			{
				if ($respond)
				{
					$processedRequest->respond();
				}
				else
				{
					return $processedRequest->getResponse();
				}
			}

			return $this->outputResponse(
				$respond,
				System\Http::RETURN_NOT_FOUND,
				array(
					'No route matched.'
				)
			);
		}
		catch (\Exception $e)
		{
			// @TODO: log exception
			return $this->outputResponse(
				$respond,
				System\Http::RETURN_INTERNAL_ERROR,
				array(
					'Internal error. Please try again later or contact this site administrator for assistance.'
				)
			);
		}
	}

	/**
	 * Dispatch an API request to a registered handler, if any. Returns the processed request.
	 *
	 * @param Request $request The request inforrmation.
	 * @param string  $namespace Specific namespace of the request.
	 *
	 * @return Request
	 */
	protected function dispatchRequest($request, $namespace)
	{
		$processedRequest = null;
		foreach ($this->routes[$namespace] as $priority => $routes)
		{
			foreach ($routes as $route)
			{
				// returns a processed request if match,
				// null otherwise.
				$processedRequest = $route->processRequest(
					$request
				);
				if (
					!empty($processedRequest)
					&&
					$processedRequest instanceof Request
				)
				{
					return $processedRequest;
				}
			}
		}

		return $processedRequest;
	}

	/**
	 * Stores a route definition.
	 *
	 * @param string   $method The method this route can be used with.
	 * @param string   $namespace Unique ID for the router supplier.
	 * @param string   $route Route starting with a /, without the version.
	 * @param Callable $callback
	 * @param array    $options A series of options as an array:
	 *                            int priority Execution priority, higher get executed first, default to 0.
	 *                            string version Version string for the supplier API.
	 *                            Callable auth_callback An authorization callback.
	 *
	 * @return $this
	 * @throws \Exception
	 */
	protected function storeRoute($method, $namespace, $route, $callback, $options)
	{
		// store
		$priority = wbArrayGet($options, 'priority', 0);
		wbArrayKeyInit($this->routes, $namespace, array());
		wbArrayKeyInit($this->routes[$namespace], $priority, array());

		try
		{
			// create route and store it
			$this->routes[$namespace][$priority][] =
				new Route(
					array_merge(
						array(
							'method'    => $method,
							'namespace' => $namespace,
							'route'     => $route,
							'callback'  => $callback,
						),
						$options
					)
				);

			// resort routes for this namespaces
			krsort(
				$this->routes[$namespace]
			);
		}
		catch (Exception $e)
		{
			System\Log::error(
				'wblib',
				$e->getMessage()
			);
		}

		return $this;
	}

	/**
	 * Checks whether this is an API request, based on first path segment.
	 *
	 * @param array $request Optional request def, when called from PHP.
	 *
	 * @return bool Whether request is for this API.
	 * @throws \Exception
	 */
	private function isApiRequest($request = null)
	{
		// is it an API request?
		$request = new Request(
			$request
		);
		return $request->getPathSegment() == $this->apiSlug;
	}

	/**
	 * Extract the namespace from the request, and find whether there are some
	 * candidate routes for it.
	 *
	 * @param array $request Optional request def, when called from PHP.
	 *
	 * @return string The request namespace.
	 * @throws \Exception
	 */
	private function getNamespaceIfValid($request = null)
	{
		$request   = new Request(
			$request,
			$this->apiSlug
		);
		$namespace = $request->getPathSegment();

		if (
			empty($namespace)
			||
			!array_key_exists(
				$namespace,
				$this->routes
			)
		)
		{
			return '';
		};

		return $namespace;
	}

	/**
	 * Check whether the request is for an API version that can be handled.
	 *
	 * @param array  $requestDef Optional request def, when called from PHP.
	 * @param string $namespace The namespace that was identified in a previous step.
	 *
	 * @return string|bool False if invalid version, the version otherwise.
	 * @throws \Exception
	 */
	private function getVersionIfValid($requestDef, $namespace)
	{
		$request = new Request(
			$requestDef,
			$this->apiSlug . '/' . $namespace
		);

		$requestedVersion = $request->getPathSegment();
		if (empty($requestedVersion))
		{
			return false;
		}

		// get all registered route for this namespace
		// and see if there's a handler registered for this version
		foreach ($this->routes[$namespace] as $priority => $routeDefs)
		{
			foreach ($routeDefs as $routeDef)
			{
				if ($requestedVersion == $routeDef->version)
				{
					return $requestedVersion;
				}
			}
		}

		return false;
	}

	/**
	 * Used only to output a direct response, ie in case of error for instance.
	 *
	 * @param bool  $respond If true, response should be ouput, else returned.
	 * @param int   $status The HTTP status to use.
	 * @param array $errors Array of errors descriptors.
	 * @param array $data Data required to build the desired response
	 * @param array $meta Arbitrary meta data about the response.
	 * @param array $links List of links.
	 *
	 * @return array
	 */
	private function outputResponse($respond, $status, $errors = null, $data = null, $meta = null, $links = null)
	{
		if ($respond)
		{
			$request = new Request();
			$request
				->setResponseStatus($status)
				->addResponseErrors($errors)
				->setResponseData($data)
				->addResponseMeta($meta)
				->addResponseLinks($links)
				->respond();
		}
		else
		{
			return array(
				'status' => $status,
				'data'   => $data,
				'error'  => $errors,
				'meta'   => $meta
			);
		}
	}

}
