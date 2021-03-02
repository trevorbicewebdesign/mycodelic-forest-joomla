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
 *
 */

namespace Weeblr\Sh404sef\Api;

use Weeblr\Wblib\V_SH4_4206\Api,
	Weeblr\Wblib\V_SH4_4206\System;

// no direct access
defined('WBLIB_EXEC') || die;

/**
 * API class, makes wbRedirect API available
 */
class Handler extends Api\Handler
{
	protected $namespace = 'sh404sef';
	protected $version   = 'v1';

	/**
	 * Custom authorization handler. Can override access denied
	 * if an access key is provided.
	 *
	 * @param Api\Request $apiRequest
	 * @param array       $authorization
	 *
	 * @return array
	 */
	public function accesKeyAuthorizer($apiRequest, $authorization)
	{
		if (wbArrayGet($authorization, 'status') != System\Http::RETURN_OK)
		{
			// maybe we authorize access with access key?
			$config = $this->factory->getThe('sh404sef.config');
			if (!empty($config->analyticsFrontendReportsAccessKey))
			{
				$accessKey = $apiRequest->getQuery(true) // unfiltered
				                        ->getAlnum('accessKey');
				if ($accessKey == $config->analyticsFrontendReportsAccessKey)
				{
					$authorization = array(
						'status' => System\Http::RETURN_OK
					);
				}
			}
		}

		return $authorization;
	}

	/**
	 * Register all routes with the API layer.
	 */
	public function register()
	{
		$this->api
			->get(
				$this->namespace,
				'/analytics/view/{viewId}/{subrequest}',
				array(
					$this,
					'getReportData'
				),
				$this->buildRouteOptions(
					array(
						'query_vars_whitelist' => array(
							'forced',
							'showFilters',
							'report',
							'groupBy',
							'dateRange',
							'startDate',
							'endDate',
							'accessKey'
						),
						'authorizations'       => array(
							array(
								'asset'  => 'com_sh404sef',
								'action' => 'sh404sef.view.analytics'
							)
						),
						// allow access with access key under some conditions
						'auth_callback'        => array(
							$this,
							'accesKeyAuthorizer'
						)
					)
				)
			);

		return $this;
	}

	/**
	 * Get analytics data for a requested report type.
	 *
	 * @param Weeblr\Wblib\V_SH4_4206\Api\Request $request
	 *
	 * @return Weeblr\Wblib\V_SH4_4206\Api\Request
	 * @throws \Exception
	 */
	public function getReportData($request)
	{
		$options = array_merge(
			$request->getParameters()->getArray(),
			$request->getQuery()->getArray()
		);

		$controller = $this->factory->getA(
			'\Weeblr\Sh404sef\Controller\Analytics'
		);

		$data = $controller->getReportData(
			$options
		);

		if ($data instanceof \Exception)
		{
			$request->addResponseErrors(
				array(
					'code'    => $data->getCode(),
					'message' => $data->getMessage()
				)
			)->addResponseMeta(
				array(
					'count' => 0,
					'total' => 0
				)
			);

			return $request;
		}

		$total = wbArrayGet($data, 'total', 0);

		$responseLinks = $this->getPagination(
			$request,
			$options,
			$total
		);

		$request
			->setResponseData(
				$data
			)->addResponseLinks(
				$responseLinks
			)->addResponseMeta(
				array(
					'count' => count($data),
					'total' => $total
				)
			);

		return $request;
	}
}
