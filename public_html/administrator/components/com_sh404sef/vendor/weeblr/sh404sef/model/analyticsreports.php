<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date        2020-06-26
 */

namespace Weeblr\Sh404sef\Model;

use Weeblr\Wblib\V_SH4_4206\Base;
use Weeblr\Wblib\V_SH4_4206\System;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die;

/**
 * Fetch report data from Google analytics reporting API v4.
 *
 */
class Analyticsreports extends Base\Base
{
	// a standard Joomla! HTTP client
	private $httpClient = null;

	// general SEF config, includes analytics details
	private $userConfig = null;

	// analytics account id to use
	private $accountId = null;

	// GA reporting API v4 endpoint
	private $dataEndpoint = 'https://analyticsreporting.googleapis.com/v4/reports:batchGet';

	// Current request options
	private $requestOptions = null;

	// raw data coming from Analytics, before formatting for display
	private $rawData = null;

	// raw meta data about the response (totals, min, max)
	private $rawDataMeta = null;

	// Formatted data
	private $formattedData = null;
	private $dataFormat    = null;

	/**
	 * Constructor.
	 *
	 * @param object   $userConfig
	 * @param          $accountId
	 */
	public function __construct($userConfig, $accountId)
	{
		parent::__construct();
		$this->userConfig = $userConfig;
		$this->accountId  = $accountId;
		$this->httpClient = $this->platform->getHttpClient(
			array(
				'follow_location' => true
			)
		);
	}

	/**
	 * Fetch analytics data from an endpoint
	 *
	 * @param array $options
	 *
	 * @return \stdClass
	 */
	public function getData($options)
	{
		// store parameters
		$this->requestOptions = $options;

		// clear response object
		$this->formattedData = new \stdClass();

		// read data from Google
		$this->fetchData()
		     ->formatData();

		// send back to caller
		return array(
			'data'   => $this->formattedData,
			'meta'   => $this->rawDataMeta,
			'format' => $this->dataFormat
		);
	}

	/**
	 * Make queries to Google API as needed
	 * to collect data required to build report
	 *
	 * The final report page is built using several ajax calls. The main dashboard template
	 * is first displayed, with only place holders for the various parts
	 * Then some javascript fired with the main dashboard display
	 * performs several requests, or "subrequests", each asking for a specific set
	 * of data or graphic
	 * Using several ajax calls allow doing all the requests in parallel, and the total time is
	 * not much longer than the time for the longest individual subrequest
	 * On the contrary, some delay between subrequests has been introduced
	 * as Google has/may refuse serving them if they exceed allowances, published as
	 * 4 concurrent requests max
	 * 10 req. per sec max
	 *
	 */
	private function fetchData()
	{
		// set headers required by Google Analytics
		$headers = array('GData-Version' => 2, 'Authorization' => 'Bearer ' . \Sh404sefHelperAnalytics_auth::getAccessToken());
		System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: preparing to fetch data with headers: ' . print_r($headers, true));

		// specific queries for each subrequest
		switch ($this->requestOptions['subrequest'])
		{
			case 'global':
				// build uri as needed to retrieve required data
				$dimensions = array();
				$metrics    = array('ga:pageviews', 'ga:sessions', 'ga:users', 'ga:bounces', 'ga:entrances', 'ga:sessionDuration', 'ga:newUsers', 'ga:organicSearches', 'ga:avgPageLoadTime');

				$query = array(
					'dimensions'   => $dimensions
					, 'metrics'    => $metrics
					, 'start-date' => $this->requestOptions['startDate']
					, 'end-date'   => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);
				System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: preparing to fetch data with query: ' . print_r($query, true));

				// perform query
				$this->query(
					'global',
					$requestData,
					$headers
				);

				$this->dataFormat = array(
					'number',
					'number',
					'number',
					'number',
					'number',
					'string',
					'number',
					'number',
					'number',
				);
				break;

			case 'visits':

				// build uri as needed to retrieve required data
				$dimensions = explode(',', $this->requestOptions['groupBy']);
				$metrics    = array('ga:pageviews', 'ga:users');

				$query = array(
					'dimensions'   => $dimensions
					, 'metrics'    => $metrics
					, 'start-date' => $this->requestOptions['startDate']
					, 'end-date'   => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'visits',
					$requestData,
					$headers
				);

				$this->dataFormat = array(
					'number',
					'number',
				);

				break;

			case 'perf':

				//$dimensions = array('ga:deviceCategory');
				$dimensions     = array('ga:deviceCategory');
				$metrics        = array('ga:avgPageLoadTime');
				$pivots         = array(
					//'dimensions' => array(
					//	'name' => 'ga:pageviews'
					//),
					//'maxGroupCount' => 3,
					//'startGroup'    => 3,
					//'metrics'       => array(
					//	"expression" => "ga:sessions"
					//)
				);
				$metricsFilters = array(
					//array(
					//	'metricName'      => 'ga:pageLoadTime',
					//	'operator'        => 'LESS_THAN',
					//	'comparisonValue' => '1500'
					//)
				);

				// build uri as needed to retrieve required data
				$query = array(
					'dimensions'            => $dimensions
					, 'metrics'             => $metrics
					, 'pivots'              => $pivots
					, 'metricFilterClauses' => $metricsFilters
					, 'start-date'          => $this->requestOptions['startDate']
					, 'end-date'            => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'perf',
					$requestData,
					$headers
				);

				$this->dataFormat = array(
					'number',
				);

				break;

			case 'sources':

				$dimensions = array('ga:medium');
				$metrics    = array('ga:sessions');

				// build uri as needed to retrieve required data
				$query = array(
					'dimensions'   => $dimensions
					, 'metrics'    => $metrics
					, 'start-date' => $this->requestOptions['startDate']
					, 'end-date'   => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'sources',
					$requestData,
					$headers
				);

				$this->dataFormat = array(
					'number',
				);

				break;

			case 'devices':

				$dimensions = array('ga:deviceCategory');
				$metrics    = array('ga:sessions');

				// build uri as needed to retrieve required data
				$query = array(
					'dimensions'   => $dimensions
					, 'metrics'    => $metrics
					, 'start-date' => $this->requestOptions['startDate']
					, 'end-date'   => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'devices',
					$requestData,
					$headers
				);

				$this->dataFormat = array(
					'number',
				);

				break;

			case 'geo':

				$dimensions = array('ga:country');
				$metrics    = array('ga:sessions');

				// build uri as needed to retrieve required data
				$query = array(
					'dimensions'   => $dimensions
					, 'metrics'    => $metrics
					, 'orderBy'    => '-ga:sessions'
					, 'start-date' => $this->requestOptions['startDate']
					, 'end-date'   => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'geo',
					$requestData,
					$headers
				);

				$this->dataFormat = array(
					'number',
				);

				break;

			case 'social':

				$dimensions = array('ga:socialNetwork');
				$metrics    = array('ga:sessions');

				// build uri as needed to retrieve required data
				$query = array(
					'dimensions'   => $dimensions
					, 'metrics'    => $metrics
					, 'orderBy'    => '-ga:sessions'
					, 'start-date' => $this->requestOptions['startDate']
					, 'end-date'   => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'social',
					$requestData,
					$headers
				);

				$this->dataFormat = array(
					'number',
				);

				break;

			case 'topurls':

				// build uri as needed to retrieve required data
				$dimensions = array('ga:pagePath');
				$metrics    = array('ga:pageviews', 'ga:timeOnPage');

				$query = array(
					'dimensions'    => $dimensions
					, 'metrics'     => $metrics
					, 'orderBy'     => '-ga:pageviews'
					, 'max-results' => $this->requestOptions['max-results']
					, 'start-date'  => $this->requestOptions['startDate']
					, 'end-date'    => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'topurls',
					$requestData,
					$headers
				);

				break;

			case 'topreferrers':

				// build uri as needed to retrieve required data
				$dimensions = array('ga:source', 'ga:referralPath');
				$metrics    = array('ga:pageviews', 'ga:sessions', 'ga:sessionDuration');

				$query = array(
					'dimensions'    => $dimensions
					, 'metrics'     => $metrics
					, 'orderBy'     => '-ga:pageviews'
					, 'max-results' => $this->requestOptions['max-results']
					, 'start-date'  => $this->requestOptions['startDate']
					, 'end-date'    => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'topreferrers',
					$requestData,
					$headers
				);

				break;

			case 'topsocialfb':

				// build uri as needed to retrieve required data
				$dimensions = array('ga:eventCategory', 'ga:eventLabel', 'ga:eventAction');
				$metrics    = array('ga:totalEvents', 'ga:pageviews', 'ga:timeOnPage');

				$query = array(
					'dimensions'    => $dimensions
					, 'metrics'     => $metrics
					, 'orderBy'     => '-' . 'ga:totalEvents'
					, 'filters'     => 'ga:eventCategory==sh404SEF_social_tracker_facebook'
					, 'max-results' => $this->requestOptions['max-top-referrers']
					, 'start-date'  => $this->requestOptions['startDate']
					, 'end-date'    => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'topSocialFB',
					$requestData,
					$headers
				);

				break;
			case 'topsocialtweeter':

				// build uri as needed to retrieve required data
				$dimensions = array('ga:eventCategory', 'ga:eventLabel', 'ga:eventAction');
				$metrics    = array('ga:totalEvents', 'ga:pageviews', 'ga:timeOnPage');

				$query = array(
					'dimensions'    => $dimensions
					, 'metrics'     => $metrics
					, 'orderBy'     => '-' . 'ga:totalEvents'
					, 'filters'     => 'ga:eventCategory==sh404SEF_social_tracker_tweeter'
					, 'max-results' => $this->requestOptions['max-top-referrers']
					, 'start-date'  => $this->requestOptions['startDate']
					, 'end-date'    => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'topSocialTweeter',
					$requestData,
					$headers
				);

				break;

			case 'topsocialpinterest':

				// build uri as needed to retrieve required data
				$metrics = array('ga:totalEvents', 'ga:pageviews', 'ga:timeOnPage');

				$query = array(
					'dimensions'    => array('ga:eventCategory', 'ga:eventLabel', 'ga:eventAction')
					, 'metrics'     => $metrics
					, 'orderBy'     => '-' . 'ga:totalEvents'
					, 'filters'     => 'ga:eventCategory==sh404SEF_social_tracker_pinterest'
					, 'max-results' => $this->requestOptions['max-top-referrers']
					, 'start-date'  => $this->requestOptions['startDate']
					, 'end-date'    => $this->requestOptions['endDate']
				);

				// use method to build the correct url
				$requestData = $this->buildQueryUri($query);

				// perform query
				$this->query(
					'topSocialPinterest',
					$requestData,
					$headers
				);

				break;
		}

		return $this;
	}

	/**
	 * Extract dimensions from a Google Analytics reporting API response
	 * when the dimension is a combination of year/month/week/date, building
	 * a string key based on the dimension.
	 *
	 * @param \stdClass $record
	 *
	 * @return string
	 */
	private function dimensionExtractorPerDate($record)
	{
		$day  = wbArrayGet($record->dimension, 'day', '');
		$week = wbArrayGet($record->dimension, 'week', '');
		if (empty($day))
		{
			$dimension = wbJoin(
				'-',
				wbArrayGet($record->dimension, 'year', ''),
				wbArrayGet($record->dimension, 'month', ''),
				empty($week) ? '' : ' (' . $week . ')'
			);
		}
		else
		{
			$dimension = wbJoin(
				'-',
				wbArrayGet($record->dimension, 'year', ''),
				wbArrayGet($record->dimension, 'month', ''),
				$day
			);
		}
		return $dimension;
	}

	/**
	 * Extract top urls display data from GA data.
	 *
	 * @TODO: php 5.3.29: can be anonymous function from php 5.4.0
	 *
	 * @param $data
	 * @param $record
	 * @param $dimension
	 *
	 * @return array
	 */
	protected function topurlsDataExtractor($data, $record, $dimension)
	{
		$percentage       = empty($this->rawDataMeta['totals'][0]->values[0]) ? 0 : $record->pageviews / $this->rawDataMeta['totals'][0]->values[0];
		$avgTimeOnPage    = empty($record->pageviews) ? 0 : $record->timeOnPage / $record->pageviews;
		$data[$dimension] =
			array(
				$dimension,
				(int) $record->pageviews,
				$percentage,
				$avgTimeOnPage,
			);
		return $data;
	}

	/**
	 * Extract top referrers display data from GA data.
	 *
	 * @TODO: php 5.3.29: can be anonymous function from php 5.4.0
	 *
	 * @param $data
	 * @param $record
	 * @param $dimension
	 *
	 * @return array
	 */
	protected function topreferrersDataExtractor($data, $record, $dimension)
	{
		$data[$dimension] =
			array(
				wbArrayGet($record->dimension, 'source', ''),
				wbArrayGet($record->dimension, 'referralPath', ''),
				(int) $record->pageviews,
				$record->pageviews / $this->rawDataMeta['totals'][0]->values[0],
				$record->sessionDuration / $record->sessions,
			);

		return $data;
	}

	/**
	 * Extracts data from a Google Analytics reporting API response
	 * by means of a dimension extractor function and a data extractor function.
	 *
	 * @param callable $dimensionExtractor
	 * @param callable $dataExtractor
	 *
	 * @return array
	 */
	private function buildDataArrayPerGrouping($dimensionExtractor, $dataExtractor)
	{
		$data = array();
		foreach ($this->rawData as $recordIndex => $record)
		{
			if (is_array($dimensionExtractor))
			{
				// @TODO: php 5.3.29
				$dimension = call_user_func(
					$dimensionExtractor,
					$record
				);
			}
			else
			{
				$dimension = $dimensionExtractor(
					$record
				);
			}

			$dimension = trim($dimension, '-');

			if (is_array($dataExtractor))
			{
				// @TODO: php 5.3.29
				$data = call_user_func(
					$dataExtractor,
					$data,
					$record,
					$dimension
				);
			}
			else
			{
				$data = $dataExtractor(
					$data,
					$record,
					$dimension
				);
			}
		}

		return $data;
	}

	/**
	 * Format data response from Google Analytics servers into
	 * something more easily used in our graphs and tables.
	 */
	private function formatData()
	{
		// specific queries for each subrequest
		switch ($this->requestOptions['subrequest'])
		{
			case 'global':
				$data = $this->buildDataArrayPerGrouping(
				// no dimension for global values
					function ($record) {
						return '';
					},
					function ($data, $record, $dimension) {
						$data = array(
							array(
								(int) $record->sessions,
								(int) $record->users,
								(int) $record->pageviews,
								$record->pageviews / $record->sessions,
								(int) $record->bounces / $record->entrances,
								$record->sessionDuration / $record->sessions,
								(int) $record->newUsers / $record->sessions,
								$record->organicSearches,
								$record->avgPageLoadTime
							)
						);
						return $data;
					}
				);
				break;

			case 'visits':

				$data = $this->buildDataArrayPerGrouping(
					array(
						$this,
						'dimensionExtractorPerDate'
					),
					function ($data, $record, $dimension) {
						if (wbArrayIsSet($data, $dimension))
						{
							$data[$dimension][0] = $data[$dimension][0] + $record->pageviews;
							$data[$dimension][1] = $data[$dimension][1] + $record->users;
						}
						else
						{
							$data[$dimension] = array(
								(int) $record->pageviews,
								(int) $record->users
							);
						}
						array_unshift(
							$data[$dimension],
							$dimension
						);

						return $data;
					}
				);

				break;

			case 'perf':

				$data = $this->buildDataArrayPerGrouping(
					function ($record) {
						return wbArrayGet($record->dimension, 'deviceCategory', '');
					},
					function ($data, $record, $dimension) {
						if (wbArrayIsSet($data, $dimension))
						{
							$data[$dimension][0] = $data[$dimension][0] + $record->avgPageLoadTime;
						}
						else
						{
							$data[$dimension] = array(
								1.0 * $record->avgPageLoadTime,
							);
						}
						array_unshift(
							$data[$dimension],
							$dimension
						);

						return $data;
					}
				);

				break;

			case 'sources':

				$data = $this->buildDataArrayPerGrouping(
					function ($record) {
						return wbArrayGet($record->dimension, 'medium', '');
					},
					function ($data, $record, $dimension) {
						if (wbArrayIsSet($data, $dimension))
						{
							$data[$dimension][0] = $data[$dimension][0] + $record->sessions;
						}
						else
						{
							$data[$dimension] = array(
								(int) $record->sessions,
							);
						}
						array_unshift(
							$data[$dimension],
							$dimension
						);

						return $data;
					}
				);

				break;

			case 'devices':

				$data = $this->buildDataArrayPerGrouping(
					function ($record) {
						return wbArrayGet($record->dimension, 'deviceCategory', '');
					},
					function ($data, $record, $dimension) {
						if (wbArrayIsSet($data, $dimension))
						{
							$data[$dimension][0] = $data[$dimension][0] + $record->sessions;
						}
						else
						{
							$data[$dimension] = array(
								(int) $record->sessions,
							);
						}
						array_unshift(
							$data[$dimension],
							$dimension
						);

						return $data;
					}
				);

				break;

			case 'geo':

				$data = $this->buildDataArrayPerGrouping(
					function ($record) {
						return wbArrayGet($record->dimension, 'country', '');
					},
					function ($data, $record, $dimension) {
						if (wbArrayIsSet($data, $dimension))
						{
							$data[$dimension][0] = $data[$dimension][0] + $record->sessions;
						}
						else
						{
							$data[$dimension] = array(
								(int) $record->sessions,
							);
						}
						array_unshift(
							$data[$dimension],
							$dimension
						);

						return $data;
					}
				);

				break;

			case 'social':

				$data = $this->buildDataArrayPerGrouping(
					function ($record) {
						return wbArrayGet($record->dimension, 'socialNetwork', '');
					},
					function ($data, $record, $dimension) {
						if (wbArrayIsSet($data, $dimension))
						{
							$data[$dimension][0] = $data[$dimension][0] + $record->sessions;
						}
						else
						{
							$data[$dimension] = array(
								(int) $record->sessions,
							);
						}
						array_unshift(
							$data[$dimension],
							$dimension
						);

						return $data;
					}
				);

				break;

			case 'topurls':

				$data = $this->buildDataArrayPerGrouping(
					function ($record) {
						return wbArrayGet($record->dimension, 'pagePath');
					},
					array(
						$this,
						'topurlsDataExtractor'
					)
				);
				break;

			case 'topreferrers':

				$data = $this->buildDataArrayPerGrouping(
					function ($record) {
						$source       = wbArrayGet($record->dimension, 'source', '');
						$referralPath = wbArrayGet($record->dimension, 'referralPath', '');
						return wbJoin('-', $source, $referralPath);
					},
					array(
						$this,
						'topreferrersDataExtractor'
					)
				);
				break;
		}

		$this->formattedData = array();
		if (!empty($data))
		{
			foreach ($data as $dimension => $values)
			{
				$this->formattedData[] = $values;
			}
		}
	}

	/**
	 * Builds an URI suitable to query Google Analytics API v4.
	 *
	 * @param array $query a set of query constraints (ie: dimensions, metrics, etc)
	 *
	 * @return array
	 */
	private function buildQueryUri($query)
	{
		// default values
		$defaultQuery = array(
			'ids'           => 'ga:' . $this->accountId
			, 'dimensions'  => array()
			, 'metrics'     => array()
			, 'orderBy'     => null
			, 'filters'     => null
			, 'segment'     => null
			, 'start-date'  => $this->requestOptions['startDate']
			, 'end-date'    => $this->requestOptions['endDate']
			, 'start-index' => null
		);
		$query        = array_merge(
			$defaultQuery,
			$query
		);

		$postData = new \stdClass;

		$reportRequest                   = new \stdClass;
		$reportRequest->viewId           = $this->requestOptions['viewId'];
		$reportRequest->pageSize         = $this->requestOptions['max-results'];
		$reportRequest->includeEmptyRows = 'true';

		$dateRange                 = new \stdClass;
		$dateRange->startDate      = $this->requestOptions['startDate'];
		$dateRange->endDate        = $this->requestOptions['endDate'];
		$reportRequest->dateRanges = array($dateRange);

		$reportRequest->metrics = array();
		foreach ($query['metrics'] as $key => $metric)
		{
			$t                        = new \stdClass;
			$t->expression            = $metric;
			$reportRequest->metrics[] = $t;
		}

		if (!empty($query['dimensions']))
		{
			$reportRequest->dimensions = array();
			foreach ($query['dimensions'] as $key => $dimension)
			{
				$t                           = new \stdClass;
				$t->name                     = $dimension;
				$reportRequest->dimensions[] = $t;
			}
		}

		if (!empty($query['pivots']))
		{
			$reportRequest->pivots = array();
			$pivots                = new \stdClass;
			foreach ($query['pivots'] as $key => $value)
			{
				switch ($key)
				{
					case 'dimensions':
						$pivots->dimensions = array();
						foreach ($value as $subKey => $dimension)
						{
							$t                    = new \stdClass;
							$t->name              = $dimension;
							$pivots->dimensions[] = $t;
						}
						break;
					case 'metrics':
						$pivots->metrics = array();
						foreach ($value as $subKey => $metric)
						{
							$t                 = new \stdClass;
							$t->expression     = $metric;
							$pivots->metrics[] = $t;
						}
						break;
					default:
						$pivots->{$key} = $value;
						break;
				}
			}
			$reportRequest->pivots[] = $pivots;
		}

		if (!empty($query['metricFilterClauses']))
		{
			$reportRequest->metricFilterClauses = array();
			foreach ($query['metricFilterClauses'] as $filter)
			{
				$t = new \stdClass;
				foreach ($filter as $subKey => $subValue)
				{
					$t->{$subKey} = $subValue;
				}
				$f                                    = new \stdClass;
				$f->filters                           = array(
					$t
				);
				$reportRequest->metricFilterClauses[] = $f;
			}
		}

		if (!empty($query['orderBy']))
		{
			$orderBy                 = new \stdClass;
			$orderBy->sortOrder      = substr($query['orderBy'], 0, 1) == '-' ? 'DESCENDING' : 'ASCENDING';
			$orderBy->fieldName      = wbLTrim($query['orderBy'], '-');
			$reportRequest->orderBys = array($orderBy);
		}

		// finally put it all together
		$postData->reportRequests = array($reportRequest);

		return array(
			'endpoint' => $this->dataEndpoint,
			'postData' => $postData
		);
	}

	/**
	 * Query Google Analytics reporting API v4.
	 *
	 * @param string $type
	 * @param array  $requestData
	 * @param array  $headers
	 * @param int    $timeout
	 *
	 * @throws \Exception
	 */
	private function query($type, $requestData, $headers, $timeout = 10)
	{
		$url      = wbArrayGet($requestData, 'endpoint');
		$postData = wbArrayGet($requestData, 'postData');
		System\Log::debug('sh404sef', ' % s:: % d: %s', __METHOD__, __LINE__, 'Analytics: Fetching data with request url: ' . $url . ', post data: ' . print_r($postData, true));

		//perform request
		$encodedData             = json_encode($postData);
		$headers['Content-Type'] = 'application/json';
		$response                = $this->httpClient->post(
			$url,
			$encodedData,
			$headers,
			$timeout
		);

		System\Log::debug('sh404sef', ' % s:: % d: %s', __METHOD__, __LINE__, 'Analytics: raw query response for data: ' . print_r($response, true));

		// check if authentified
		$this->factory->getA('Weeblr\Sh404sef\Helper\Analytics')->verifyAuthResponse($response);

		// analyze response
		$rawData = json_decode($response->body);
		if ($rawData === false)
		{
			$msg = 'Analytics: fetching views list invalid JSON response . ';
			System\Log::debug('sh404sef', ' % s:: % d: %s', __METHOD__, __LINE__, $msg);
			throw new \RuntimeException($msg);
		}
		$this->decodeJsonResponse($type, $rawData);
	}

	/**
	 * Extract useful data from API response json.
	 *
	 * @param string $type
	 * @param string $rawJson
	 */
	private function decodeJsonResponse($type, $rawJson)
	{
		$reports = empty($rawJson->reports) ? null : $rawJson->reports;
		if (empty($reports) || !is_array($reports) || empty($reports[0]))
		{
			$this->formattedData = null;
			return;
		}

		$data    = array();
		$rawJson = $reports[0];

		$r = new \stdClass();

		// collect dimensions and metrics
		$dimensions = array();
		if (!empty($rawJson->columnHeader) && !empty($rawJson->columnHeader->dimensions))
		{
			foreach ($rawJson->columnHeader->dimensions as $dimension)
			{
				$dimensions[] = wbLTrim($dimension, 'ga:');
			}
		}

		$metrics = array();
		if (!empty($rawJson->columnHeader) && !empty($rawJson->columnHeader->metricHeader) && !empty($rawJson->columnHeader->metricHeader->metricHeaderEntries))
		{
			foreach ($rawJson->columnHeader->metricHeader->metricHeaderEntries as $metric)
			{
				$metrics[] = wbLTrim($metric->name, 'ga:');
			}
		}

		// any row in report?
		if (empty($rawJson->data->rowCount))
		{
			$this->rawData       = $data;
			$this->formattedData = null;
			return;;
		}

		// no dimensions case (ie global values)
		$rows = empty($rawJson->data->rows) ? array() : $rawJson->data->rows;
		foreach ($rows as $row)
		{
			$rowKey = 0;
			foreach ($dimensions as $dimensionKey => $dimension)
			{
				$r->dimension[$dimension] = $row->dimensions[$rowKey];
				$rowKey++;
			}

			foreach ($metrics as $key => $metric)
			{
				$r->{$metric} = $row->metrics[0]->values[$key];
				$rowKey++;
			}

			$data[] = clone($r);
		}

		$this->rawData = $data;

		// meta data storage
		$this->rawDataMeta = array(
			'totals'        => empty($rawJson->data->totals) ? array() : $rawJson->data->totals,
			'minimums'      => empty($rawJson->data->minimums) ? array() : $rawJson->data->minimums,
			'maximums'      => empty($rawJson->data->maximums) ? array() : $rawJson->data->maximums,
			'rowCount'      => empty($rawJson->data->rowCount) ? array() : $rawJson->data->rowCount,
			'nextPageToken' => empty($rawJson->data->nextPageToken) ? array() : $rawJson->data->nextPageToken,
		);
	}
}
