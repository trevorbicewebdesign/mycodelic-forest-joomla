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

namespace Weeblr\Sh404sef\Model;

use Weeblr\Wblib\V_SH4_4206\Base;
use Weeblr\Wblib\V_SH4_4206\System;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die;

/**
 * Handles fetching and caching analytics data from Google Analytics
 */
class Analytics extends Base\Base
{
	private $requestOptions     = null;
	private $userConfig         = null;
	private $httpClient         = null;
	private $cache              = null;
	private $accountId          = null;
	private $viewsList          = null;
	private $analyticsData      = null;
	private $managementEndPoint = 'https://www.googleapis.com/analytics/v3/';

	/**
	 * Prepare and HTTP client and a cache.
	 *
	 * @param object $userConfig
	 */
	public function __construct($userConfig)
	{
		parent::__construct();

		$this->userConfig = $userConfig;
		$this->httpClient = $this->platform->getHttpClient(
			array(
				'follow_location' => true
			)
		);

		$this->cache = $this->platform->getCache(
			'callback',
			array(
				'defaultgroup' => 'sh404sef_analytics',
				'lifetime'     => 60,
				'caching'      => 1,
			)
		);

		// load messages, for reports and in case of errors
		$this->platform->loadLanguageFile(
			'com_sh404sef',
			'admin'
		);
	}

	/**
	 * Extract request options.
	 *
	 * @return array|null
	 * @throws \Exception
	 */
	public function loadRequestOptions($options = array())
	{
		if (!empty($options))
		{
			$this->requestOptions = $options;
		}

		// default max number of results
		$this->requestOptions['max-results'] = '100';

		wbArrayKeyInit(
			$this->requestOptions,
			'viewId',
			$this->getDefaultViewId()
		);

		wbArrayKeyInit(
			$this->requestOptions,
			'groupBy',
			$this->getDefaultGroupBy()
		);

		if (wbArrayGet($this->requestOptions, 'showFilters', 'yes') != 'yes')
		{
			// if not showing the date range controls,
			// calculate dates based on backend settings if none provided.
			// end date is always yesterday
			$date                            = new \DateTime('yesterday');
			$this->requestOptions['endDate'] = $date->format('Y-m-d');

			// use config to find what date range we should display : week, month or year
			$date->modify('-1 ' . $this->userConfig->analyticsDashboardDateRange);
			$this->requestOptions['startDate'] = $date->format('Y-m-d');

			// calculate groupBy options
			$this->requestOptions['groupBy'] = $this->getDefaultGroupBy();
		}
		else
		{
			// showing date range controls, find out about start and endDate
			// if dateRange = custom, use startDate and endDate
			$dateRange = wbArrayGet($this->requestOptions, 'dateRange', 'last_30_days');
			if ('custom' == $dateRange)
			{
				if (empty($this->requestOptions['startDate']) || empty($this->requestOptions['endDate']))
				{
					// invalid date, reset to default
					$this->requestOptions['dateRange'] = 'last_30_days';
				}
			}
			if ('custom' != $dateRange)
			{
				// if dateRange != custom, use dateRange and set startDate and endDate accordingly
				$date                            = new \DateTime('yesterday');
				$this->requestOptions['endDate'] = $date->format('Y-m-d');
				switch ($dateRange)
				{
					case 'last_7_days':
						$date->modify('-7 day');
						$this->requestOptions['startDate'] = $date->format('Y-m-d');
						$this->requestOptions['groupBy']   = 'ga:year,ga:month,ga:day';
						break;
					case 'last_30_days':
						$date->modify('-30 day');
						$this->requestOptions['startDate'] = $date->format('Y-m-d');
						$this->requestOptions['groupBy']   = 'ga:year,ga:month,ga:week';
						break;
					case 'last_90_days':
						$date->modify('-90 day');
						$this->requestOptions['startDate'] = $date->format('Y-m-d');
						$this->requestOptions['groupBy']   = 'ga:year,ga:month,ga:week';
						break;
					case 'this_year':
						$date->setDate($date->format('Y'), 1, 1);
						$this->requestOptions['startDate'] = $date->format('Y-m-d');
						$this->requestOptions['groupBy']   = 'ga:year,ga:month';
						break;
				}
			}
		}

		return $this->requestOptions;
	}

	/**
	 * Extract the Analytics account id from the Web property id.
	 *
	 * @return string
	 * @throws \RuntimeException
	 */
	private function getAccountId()
	{
		if (!is_null($this->accountId))
		{
			return $this->accountId;
		}

		if (empty($this->userConfig->analyticsUgaId) && $this->userConfig->analyticsEdition == 'uga')
		{
			throw new \RuntimeException('Analytics: no universal analytics web property ID set!');
		}
		if ($this->userConfig->analyticsEdition == 'gtm' && empty($this->userConfig->analyticsUgaId))
		{
			throw new \RuntimeException('Analytics: using Google tags manager, but no universal web property ID set!');
		}

		// @TODO: handle gtm
		if (empty($this->userConfig->analyticsUgaId))
		{
			throw new \RuntimeException('Analytics: no analytics web property ID set!');
		}

		$accountIdBits = explode('-', trim($this->userConfig->analyticsUgaId));
		if (empty($accountIdBits) || count($accountIdBits) < 3)
		{
			$msg = $this->platform->t('COM_SH404SEF_ERROR_CHECKING_ANALYTICS') . '<br /><b>Invalid account Id fetching accounts list</b>';
			System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, $msg);
			throw new \RuntimeException($msg);
		}
		else
		{
			$this->accountId = $accountIdBits[1];
			System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: built account id: ' . $this->accountId);
		}

		return $this->accountId;
	}

	/**
	 * Fetch the list of views defined on the account from Google and cache them.
	 *
	 * @return array
	 * @throws \Exception
	 */
	public function getViewsList()
	{
		if (!is_null($this->viewsList))
		{
			return $this->viewsList;
		}
		$this->loadRequestOptions();
		$this->viewsList = $this->cache->get(
			array(
				$this,
				'getAndCacheViewList'
			),
			array(
				$this->requestOptions
			)
		);

		return $this->viewsList;
	}

	/**
	 * Actually performs fetching list of views. Should not be called
	 * directly, meant to be cached to avoid API overuse.
	 *
	 * @param array $options
	 *
	 * @return null
	 * @throws \Exception
	 */
	public function getAndCacheViewList($options)
	{
		// set target API url
		$uri = $this->managementEndPoint . 'management/accountSummaries';
		System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: fetching views list at: ' . $uri);

		// set headers required by Google Analytics
		$headers = array('GData-Version' => 2, 'Authorization' => 'Bearer ' . \Sh404sefHelperAnalytics_auth::getAccessToken());
		System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: fetching views list with headers: ' . print_r($headers, true));

		$rawResponse = null;

		// perform connect request
		try
		{
			$response = $this->httpClient->get(
				$uri,
				$headers,
				10
			);
		}
		catch (\Exception $e)
		{
			System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: fetching views list comm exception: ' . $e->getMessage());
			throw new \RuntimeException(
				$this->platform->tprintf(
					'COM_SH404SEF_ANALYTICS_RESPONSE_DUMP',
					print_r($e->getMessage(), true)
				)
			);
		}

		System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: fetched views list response: ' . print_r($response, true));

		// analyze response
		// check if authentified
		$this->factory->getA('Weeblr\Sh404sef\Helper\Analytics')->verifyAuthResponse($response);
		$json = json_decode($response->body);
		if ($json === false)
		{
			$msg = 'Analytics: fetching views list invalid JSON response.';
			System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, $msg);
			throw new \RuntimeException($msg);
		}
		$profileRecord = null;
		$accountId     = $this->getAccountId();
		foreach ($json->items as $item)
		{
			if ($item->id == $accountId)
			{
				foreach ($item->webProperties as $webProperty)
				{
					foreach ($webProperty->profiles as $profile)
					{
						$view              = new \stdClass();
						$view->id          = $profile->id;
						$view->title       = $webProperty->name . ' / ' . $profile->name;
						$view->websiteUrl  = $webProperty->websiteUrl;
						$this->viewsList[] = clone($view);
					}
				}

				break;
			}
		}

		System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: views list fetched from Google: ' . print_r($this->viewsList, true));

		// filter out other websites from the list by default
		$currentHost = $this->factory
			->getThe('helper.analytics')
			->getCurrentHost();

		/**
		 * Filter the list of hosts allowed in views list. Default only contains current host.
		 *
		 * @api
		 * @package sh4\filter\analytics
		 * @var sh4_analytics_filter_hosts_for_views
		 * @since   4.20.0
		 *
		 * @param array $allowedHosts List of hosts allowed in views list.
		 * @param array $viewList Views obtained from Google Analytics
		 *
		 * @return string
		 *
		 */
		$allowedHosts = $this->factory
			->getThe('hook')
			->filter(
				'sh4_analytics_filter_hosts_for_views',
				array(
					$currentHost
				),
				$this->viewsList
			);

		if (empty($allowedHosts) || empty($this->viewsList))
		{
			$this->viewsList = array();
		}
		else
		{
			$this->viewsList = array_filter(
				$this->viewsList,
				function ($view) use ($allowedHosts) {
					return wbContains($view->websiteUrl, $allowedHosts);
				}
			);
		}

		System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: filtered views list: ' . print_r($this->viewsList, true));

		return $this->viewsList;
	}

	/**
	 * Fetch the analytics data for a given set of options and cache them.
	 *
	 * @param array $options
	 *
	 * @return array
	 */
	public function getReportData($options)
	{
		if (!is_null($this->analyticsData))
		{
			return $this->analyticsData;
		}

		// build a cache ID as a hash of all options defining
		// the request.
		$cacheId = md5($this->userConfig->analyticsDashboardDataType . print_r($options, true));

		// If forcing an update or reports are disabled, clear any cached values.
		if (wbArrayGet($options, 'forced') || !$this->userConfig->analyticsReportsEnabled)
		{
			// clean our cache
			$this->cache->remove($cacheId);
		}

		$this->analyticsData = $this->cache->get(
			array(
				$this,
				'getAndCacheReportData'
			),
			array($options),
			$cacheId
		);

		return $this->analyticsData;
	}

	/**
	 * Initiate fetching the analytics data for a given set of options and cache them.
	 *
	 * @return \stdClass
	 * @throws \Exception
	 */
	public function getAndCacheReportData($options)
	{
		// prepare a default response object
		$response                = new \stdClass();
		$response->status        = true;
		$response->statusMessage = $this->platform->t('COM_SH404SEF_CLICK_TO_CHECK_ANALYTICS');
		$response->note          = '';
		$response->analyticsData = null;
		$response->reportTitle   = $this->factory->getA('Weeblr\Sh404sef\Helper\Analytics')->getReportTitle(
			$this->requestOptions['subrequest']
		);
		$response->xAxisTitle    = $this->getXAxisTitle();
		$response->yAxisTitle    = $this->getYAxisTitle();
		$response->dataFormat    = null;

		// check if allowed to auto check, w/o user clicking on button
		if (!$this->userConfig->autoCheckNewAnalytics && !$this->requestOptions['forced'])
		{
			return $response;
		}

		// allowed to actually fetch new data.
		try
		{
			$rawResponse = $this->fetchReportData();
		}
		catch (\Exception $e)
		{
			$response->status        = false;
			$response->statusMessage = $e->getMessage();
			return $response;
		}

		// return response
		$response->reportRows = wbArrayGet($rawResponse, 'data');
		$response->dataFormat = wbArrayGet($rawResponse, 'format');
		$response->dataMeta   = wbArrayGet($rawResponse, 'meta');

		// update date/time display
		$response->statusMessage = $this->platform->tprintf('COM_SH404SEF_UPDATED_ON', strftime('%c'));

		return $response;
	}

	/**
	 * Instantiate a report object that will fetch the data it needs from Google Analytics servers.
	 *
	 * @return \stdClass
	 * @throws \Exception
	 */
	protected function fetchReportData()
	{
		// fetch account list from supplier
		$this->getViewsList();

		// and find about which one to use (use first one is none selected from a previous request
		$this->requestOptions['viewId'] = empty($this->requestOptions['viewId']) ? $this->getDefaultViewId() : $this->requestOptions['viewId'];

		// check in case we don' have valid viewId ID
		if (empty($this->requestOptions['viewId']))
		{
			throw new \RuntimeException('Empty or invalid account ID to query analytics API. Contact admin.');
		}

		// create a report object
		$report = new Analyticsreports(
			$this->userConfig,
			$this->accountId
		);

		// ask it to perform API requests as needed,
		return $report->getData(
			$this->requestOptions
		);
	}

	private function getXAxisTitle()
	{
		switch ($this->requestOptions['groupBy'])
		{
			case 'ga:year,ga:month,ga:week,ga:day':
				$groupBy = 'JDAY';
				break;
			case 'ga:year,ga:month,ga:week':
				$groupBy = 'COM_SH404SEF_WEEK';
				break;
			case 'ga:year,ga:month':
				$groupBy = 'COM_SH404SEF_MONTH';
				break;
		}

		return empty($groupBy) ? '' : $this->platform->t($groupBy);
	}

	private function getYAxisTitle()
	{
		switch ($this->requestOptions['subrequest'])
		{
			case 'geo':
			case 'social':
				break;
			case 'visits':
				$title = array(
					$this->platform->t('COM_SH404SEF_ANALYTICS_DATA_PAGEVIEWS'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_DATA_VISITORS')
				);
				break;
			case 'perf':
				$title = array(
					$this->platform->t('COM_SH404SEF_ANALYTICS_LOAD_TIME')
				);
				break;
			case 'global':
				$title = array(
					$this->platform->t('COM_SH404SEF_ANALYTICS_DATA_VISITS'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_DATA_VISITORS'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_DATA_PAGEVIEWS'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_GLOBAL_AVG_PAGES_VISIT'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_GLOBAL_BOUNCE_RATE'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_GLOBAL_AVG_TIME_ON_SITE'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_GLOBAL_NEW_VISITS'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_GLOBAL_ORGANIC_SEARCHES'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_GLOBAL_AVG_LOAD_TIME'),
				);
				break;
			case 'sources':
				$title = array(
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_REF_SOURCE')
				);
				break;
			case 'devices':
				$title = array(
					$this->platform->t('COM_SH404SEF_ANALYTICS_DEVICES')
				);
				break;
			case 'topurls':
				$title = array(
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_URL'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_PAGEVIEWS'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_PAGEVIEWS_PERCENT'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_AVG_TIME_ON_PAGE')
				);
				break;
			case 'topreferrers':
				$title = array(
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_REF_SOURCE'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_REF_PATH'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_PAGEVIEWS'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_PAGEVIEWS_PERCENT'),
					$this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_AVG_TIME_ON_PAGE')
				);
				break;
		}

		return empty($title) ? '' : $title;
	}

	/**
	 * Builds the grouping GA query string for the configured reports.
	 *
	 * @return string
	 */
	private function getDefaultGroupBy()
	{
		switch ($this->userConfig->analyticsDashboardDateRange)
		{
			default:
			case 'week':
				$groupBy = 'ga:year,ga:month,ga:week,ga:day';
				break;
			case 'month':
				$groupBy = 'ga:year,ga:month,ga:week';
				break;
			case 'year':
				$groupBy = 'ga:year,ga:month';
				break;
		}

		return $groupBy;
	}

	/**
	 * Search for current site in views list, in order
	 * to find its Google id. If not found, defaults to
	 * first site in list
	 *
	 * @return int
	 */
	private function getDefaultViewId()
	{
		$id = 0;

		// search for current site
		$currentHost      = $this->factory
			->getThe('helper.analytics')
			->getCurrentHost();
		$currentHostNoWww = wbLTrim(
			$currentHost,
			'www.'
		);

		if (!empty($this->viewsList))
		{
			foreach ($this->viewsList as $view)
			{
				if (
					wbContains($view->websiteUrl, $currentHost)
					||
					wbContains($view->websiteUrl, $currentHostNoWww)
					||
					wbContains($view->title, $currentHost)
					||
					wbContains($view->title, $currentHostNoWww)
				)
				{
					$id = $view->id;
					break;
				}
			}
			// default to first account if no match found
			$id = empty($id) ? $this->viewsList[0]->id : $id;
		}

		/**
		 * Filter the Google Analytics default view id.
		 *
		 * @api
		 * @package sh4\filter\analytics
		 * @var sh4_analytics_default_view_id
		 * @since   4.20.0
		 *
		 * @param string $id The view id selected by sh404SEF based on the current site domain.
		 * @param array  $viewList Views obtained from Google Analytics
		 * @param string $currentHost The current host where the site is ran, as obtained from Joomla.
		 *
		 * @return string
		 *
		 */
		$id = $this->factory->getThe('hook')->filter(
			'sh4_analytics_default_view_id',
			$id,
			$this->viewsList,
			$currentHost
		);

		return $id;
	}

}

