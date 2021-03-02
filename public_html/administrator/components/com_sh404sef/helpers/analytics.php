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

use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Language;
use Joomla\CMS\Language\Text;

use Joomla\String\StringHelper;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

class Sh404sefHelperAnalytics
{
	// store whether doing a forced update. Reason to store it
	// is to keep _doCheck() method w/o any parameters
	// as this would otherwise prevent caching from operating
	// normally
	private static $_options = false;

	/**
	 * Figure out if analytics collection is enabled
	 *
	 */
	public static function isEnabled()
	{
		$config = Sh404sefFactory::getConfig();
		return $config->analyticsEdition != 'none';
	}

	/**
	 * Build the full URL to the front end analytics stats
	 * page, including the secret access key if any is available.
	 *
	 * @return string
	 */
	public static function getFrontendStatsUrl()
	{
		$accessKey = Sh404sefFactory::getConfig()->analyticsFrontendReportsAccessKey;
		$statsLink = StringHelper::rtrim(Uri::root(), '/')
			. '/'
			. self::getFrontendStatsSlug()
			. (empty($accessKey) ? '' : '?' . $accessKey);

		return $statsLink;
	}

	/**
	 * Filter and return the frontend analytics URL slug.
	 * Default to "stats".
	 *
	 * @return string
	 */
	public static function getFrontendStatsSlug()
	{
		/**
		 * Filter the URL slug used to access frontend analytics reports.
		 *
		 * @api
		 * @package sh404SEF\filter\output
		 * @var sh404sef_frontend_analytics_slug
		 * @since   4.20.0
		 *
		 * @param string $slug
		 *
		 * @return string
		 */
		$analyticsSlug = ShlHook::filter(
			'sh404sef_frontend_analytics_slug',
			'stats'
		);

		return StringHelper::trim($analyticsSlug, '/');
	}

	/**
	 * Decides whether current request should trigger the display of
	 * the analytics reports frontend version.
	 *
	 * @param $uri
	 * @param $jRouter
	 *
	 * @return bool
	 * @throws Exception
	 */
	public static function shouldDisplayFrontend(&$uri, $jRouter)
	{
		$shouldDisplayFrontend = false;
		$app                   = Factory::getApplication();
		if (
			!$app->isClient('site')
			||
			!self::isEnabled()
			||
			// @TODO: use wbLib config access
			empty(Sh404sefFactory::getConfig()->analyticsReportsEnabled)
			||
			empty(Sh404sefFactory::getConfig()->analyticsEnableFrontendAccess)
		)
		{
			return $shouldDisplayFrontend;
		}

		$analyticsSlug = self::getFrontendStatsSlug();
		if (empty($analyticsSlug))
		{
			return $shouldDisplayFrontend;
		}

		// detect stats slug, possibly on different languages
		$contentLanguages = JLanguageHelper::getLanguages('lang_code');
		$possibleSlugs    = array();
		foreach ($contentLanguages as $langCode => $langDef)
		{
			$possibleSlugs[$langDef->sef . '/' . $analyticsSlug] = $langDef;
		}
		// add default slug
		$possibleSlugs[$analyticsSlug] = null;

		// check current request path against slug(s)
		$currentSlug = wbLTrim($uri->getPath(), Uri::base(true));
		$currentSlug = ltrim($currentSlug, '/');
		if (!array_key_exists($currentSlug, $possibleSlugs))
		{
			return $shouldDisplayFrontend;
		}

		// set language if found
		if (!empty($possibleSlugs[$currentSlug]))
		{
			$newLanguageDef = $contentLanguages[$possibleSlugs[$currentSlug]->lang_code];
			$uri->setVar(
				'lang',
				$newLanguageDef->sef
			);

			$app->input->set('language', $newLanguageDef->lang_code);
			$app->set('language', $newLanguageDef->lang_code);
			$language = Factory::getLanguage();

			if ($language->getTag() !== $newLanguageDef->lang_code)
			{
				$newLanguageObject = Language::getInstance(
					$newLanguageDef->lang_code
				);
				Factory::$language = $newLanguageObject;
				$app->loadLanguage($newLanguageObject);
			}
		}

		// authentification: either Joomla ACL based on user or direct access through a secret key passed in
		// URL: example.com/stats?dfd213245sdf
		$config           = Sh404sefFactory::getConfig();
		$keyAccessAllowed = !empty($config->analyticsEnableFrontendAccessWithKey);
		$keyName          = $config->analyticsFrontendReportsAccessKey;
		if (
			$keyAccessAllowed
			&&
			!empty($keyName)
		)
		{
			// access per key is allowed, do we have a key?
			$urlKey = null;
			if (!empty($keyName))
			{
				$urlKey = $uri->getVar($keyName, null);
			}
			// is that key the one we expect?
			$keyAccessAllowed = !is_null($urlKey);
		}

		if (!$keyAccessAllowed)
		{
			$user = Factory::getUser();
			// authorization
			if (!$user->authorise('sh404sef.view.analytics', 'com_sh404sef'))
			{
				if ($user->guest)
				{
					// guests need to login first
					$return   = base64_encode(Uri::getInstance());
					$loginUrl = JRoute::_('index.php?option=com_users&view=login&return=' . $return);
					Factory::getApplication()->enqueueMessage(Text::_('JERROR_ALERTNOAUTHOR'), 'notice');
					Factory::getApplication()->redirect($loginUrl, 403);
				}
				throw new \Exception(Text::_('JERROR_ALERTNOAUTHOR'), 403);
			}
		}

		// all clear, display
		return true;
	}

	/**
	 * Check the http status code of a response from analytics servers.
	 *
	 * @param stdClass $response
	 *
	 * @throws Sh404sefExceptionDefault
	 */
	public static function verifyAuthResponse($response)
	{
		// check if valid response http code
		$status = $response->code;
		if ($status != 200)
		{
			$decodedResponse = json_decode($response->body);
			$msg             = Text::_('COM_SH404SEF_ERROR_AUTH_ANALYTICS');
			$code            = 404;
			if (!empty($decodedResponse->error))
			{
				$msg  = $decodedResponse->error->message . ' (' . $decodedResponse->error->code . ')';
				$code = (int) $decodedResponse->error->code;
			}
			ShlSystem_Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: HTTP error in analytics endpoint comm, response:' . print_r($response, true));
			throw new Sh404sefExceptionDefault($msg, $code);
		}
	}

	/**
	 * prepare html filters to allow user to select the way she likes
	 * to view reports
	 *
	 * @param $options
	 * @param $viewList
	 * @param $position
	 *
	 * @return array
	 */
	public static function prepareReportsFilters($options, $viewList, $position)
	{
		// array to hold various filters
		$filters = array();

		// find if we must display all filters. On dashboard, only a reduced set
		$allFilters            = wbArrayGet($options, 'showFilters', 'yes') == 'yes';
		$customSelectSubmit    = ' onchange="window.weeblrApp.analytics.update({' . ($allFilters ? '' : 'showFilters:\'no\'') . '});"';
		$dateRangeSelectSubmit = ' onchange="window.weeblrApp.analytics.updateDateRange();"';

		if ('bottom' == $position)
		{
			$select    = '<div class="sh404sef-analytics-filters-element">';
			$select    .= '<label for="viewId">' . Text::_('COM_SH404SEF_ANALYTICS_REPORT') . '</label>';
			$select    .= Sh404sefHelperHtml::buildSelectList(
				$viewList, $options['viewId'], 'viewId', $autoSubmit = false,
				$addSelectAll = false, $selectAllTitle = '', ''
			);
			$select    .= '</div>';
			$filters[] = $select;

			// select groupBy (day, week, month)
			$select    = '<div class="sh404sef-analytics-filters-element">';
			$select    .= '<label for="groupBy">' . Text::_('COM_SH404SEF_ANALYTICS_GROUP_BY') . '</label>';
			$select    .= Sh404sefHelperAnalytics::buildAnalyticsGroupBySelectList(
				$options['groupBy'], 'groupBy', $autoSubmit = false,
				$addSelectAll = false, $selectAllTitle = '', $customSelectSubmit
			);
			$select    .= '</div>';
			$filters[] = $select;

			// add a click to update link
			$filters[] = '<div class="sh404sef-analytics-filters-element sh404sef-analytics-filters-update-button">' . ShlHtmlBs_Helper::button(
					Text::_('COM_SH404SEF_CHECK_ANALYTICS'), 'primary', '', 'javascript: window.weeblrApp.analytics.update({forced:1'
					                                       . ($allFilters ? '' : ',showFilters:\'no\'') . '});'
				) . '</div>';
		}

		// dashboard only has view selection, no room for anything else
		// only shows main selection drop downs on analytics view
		if ('top' == $position)
		{
			$select    = '<div class="sh404sef-analytics-filters-element">';
			$select    .= '<label for="dateRange">' . Text::_('COM_SH404SEF_ANALYTICS_DASHBOARD_DATE_RANGE') . '</label>';
			$select    .= Sh404sefHelperHtml::buildSelectList(
				array(
					array('id' => 'last_7_days', 'title' => 'Last 7 days'),
					array('id' => 'last_30_days', 'title' => 'Last 30 days'),
					array('id' => 'last_90_days', 'title' => 'Last 90 days'),
					array('id' => 'this_year', 'title' => 'This year'),
					array('id' => 'custom', 'title' => 'Custom...'),
				),
				wbArrayGet($options, 'dateRange', 'last_30_days'),
				'dateRange',
				$autoSubmit = true,
				$addSelectAll = false,
				$selectAllTitle = '',
				$dateRangeSelectSubmit
			);
			$select    .= '</div>';
			$filters[] = $select;

			$select    = '<div class="sh404sef-analytics-filters-element">';
			$select    .= '<label for="startDate">' . Text::_('COM_SH404SEF_ANALYTICS_START_DATE') . '</label>';
			$select    .= JHTML::_('calendar', $options['startDate'], 'startDate', 'startDate', '%Y-%m-%d');
			$select    .= '</div>';
			$filters[] = $select;

			$select    = '<div class="sh404sef-analytics-filters-element">';
			$select    .= '<label for="endDate">' . Text::_('COM_SH404SEF_ANALYTICS_END_DATE') . '</label>';
			$select    .= JHTML::_('calendar', $options['endDate'], 'endDate', 'endDate', '%Y-%m-%d');
			$select    .= '</div>';
			$filters[] = $select;

			// add a click to update link
			$filters[] = self::updateButton($allFilters);
		}

		// use layout to render
		return $filters;
	}

	/**
	 * @param $allFilters
	 *
	 * @return string
	 */
	public static function updateButton($allFilters)
	{
		return '<div class="sh404sef-analytics-filters-element sh404sef-analytics-filters-update-button">'
			. ShlHtmlBs_Helper::button(
				Text::_('COM_SH404SEF_CHECK_ANALYTICS'),
				'primary',
				'',
				'javascript: window.weeblrApp.analytics.update({forced:1'
				. ($allFilters ? '' : ',showFilters:\'no\'') . '});'
			)
			. '</div>';
	}

	/**
	 * Get this web site name, w/o scheme, port, etc
	 *
	 */
	public static function getWebsiteName()
	{
		static $site;

		// Get the scheme
		if (!isset($site))
		{
			$uri  = JURI::getInstance(JURI::base());
			$site = $uri->toString(array('host'));
		}

		return $site;
	}

	/**
	 * Format an array of date strings for display as abscise
	 * of a graphic
	 *
	 * @param array of object $entries
	 * @param array $options
	 *
	 * @return array
	 */
	public static function formatAbciseDates($entries, $options)
	{
		// array to receive X labels
		$formattedDates = array();

		// various cases of dimensions requested
		switch ($options['groupBy'])
		{
			case 'ga:year,ga:month,ga:week,ga:day':
				// date string represents a day. we use : mm/dd
				foreach ($entries as $entry)
				{
					$formattedDates[] = self::_getShortMonthString($entry->dimension['month']) . ' ' . $entry->dimension['day'];
				}
				break;
			// date string represents a week number
			case 'ga:year,ga:month,ga:week':
				foreach ($entries as $entry)
				{
					$formattedDates[] = self::_getWeekPeriodString($entry->dimension);
				}
				break;
			case 'ga:year,ga:month':
				// date string is a month number
				foreach ($entries as $entry)
				{
					$formattedDates[] = self::_getShortMonthString($entry->dimension['month']) . ' ' . substr($entry->dimension['year'], 2, 2);
				}
				break;
		}

		return $formattedDates;
	}

	protected static function _getShortMonthString($month)
	{
		switch ($month)
		{
			case 1:
				$m = Text::_('JANUARY_SHORT');
				break;
			case 2:
				$m = Text::_('FEBRUARY_SHORT');
				break;
			case 3:
				$m = Text::_('MARCH_SHORT');
				break;
			case 4:
				$m = Text::_('APRIL_SHORT');
				break;
			case 5:
				$m = Text::_('MAY_SHORT');
				break;
			case 6:
				$m = Text::_('JUNE_SHORT');
				break;
			case 7:
				$m = Text::_('JULY_SHORT');
				break;
			case 8:
				$m = Text::_('AUGUST_SHORT');
				break;
			case 9:
				$m = Text::_('SEPTEMBER_SHORT');
				break;
			case 10:
				$m = Text::_('OCTOBER_SHORT');
				break;
			case 11:
				$m = Text::_('NOVEMBER_SHORT');
				break;
			case 12:
				$m = Text::_('DECEMBER_SHORT');
				break;
		}

		return $m;
	}

	protected static function _getWeekPeriodString($dimension)
	{

		// start jan 1st of that year
		$date = new DateTime ($dimension['year'] . '-01-01');

		// what day of week is that ?
		$janFirst = $date->format('w');

		// if not a Sunday, we have at partial first week of year
		if ($janFirst != 0)
		{
			// jan first is not a Sunday, first add days for this first partial week
			$days = 6 - $janFirst;

			// then add days corresponding to the remaining number of weeks
			if ($dimension['week'] > 1)
			{
				$days += 7 * ($dimension['week'] - 1);
			}
		}
		else
		{
			// jan first is a sunday, we add 7 x number of weeks to jan first
			// to find date of LAST day of week #XX
			$days = 7 * $dimension['week'] - 1;
		}

		// add as many days as required to find LAST day of week
		$date->modify('+' . $days . ' days');

		// then format result as needed
		$string = self::_getShortMonthString($date->format('m')) . ' ' . $date->format('d');

		return $string;
	}

	/**
	 * Calculates a displayable label for Google raw medium type
	 */
	public static function getReferralLabel($rawReferralType)
	{

		switch ($rawReferralType)
		{

			case '(none)':
				$label = Text::_('COM_SH404SEF_ANALYTICS_REF_LABEL_DIRECT');
				break;
			case 'organic':
				$label = Text::_('COM_SH404SEF_ANALYTICS_REF_LABEL_ORGANIC');
				break;
			case 'referral':
				$label = Text::_('COM_SH404SEF_ANALYTICS_REF_LABEL_REFERRAL');
				break;
			default:
				$label = $rawReferralType;
				break;
		}

		return $label;
	}

	/**
	 * Method to create a select list of possible analytics reports
	 *
	 * @access  public
	 *
	 * @param int ID of current item
	 * @param string name of select list
	 * @param boolean if true, changing selected item will submit the form (assume is an "adminForm")
	 * @param boolean , if true, a line 'Select all' is inserted at the start of the list
	 * @param string the "Select all" to be displayed, if $addSelectAll is true
	 *
	 * @return  string HTML output
	 */
	public static function buildAnalyticsReportSelectList($current, $name, $autoSubmit = false, $addSelectAll = false, $selectAllTitle = '', $customSubmit = '')
	{
		// available reports, should not be hardcoded though !
		$data = array(
			array('id' => 'dashboard', 'title' => Text::_('COM_SH404SEF_ANALYTICS_REPORT_DASHBOARD'))
			, array('id' => 'visits', 'title' => Text::_('COM_SH404SEF_ANALYTICS_REPORT_VISITS'))
			, array('id' => 'sources', 'title' => Text::_('COM_SH404SEF_ANALYTICS_REPORT_SOURCES'))
			, array('id' => 'keywords', 'title' => Text::_('COM_SH404SEF_ANALYTICS_REPORT_KEYWORDS'))
			, array('id' => 'urls', 'title' => Text::_('COM_SH404SEF_ANALYTICS_REPORT_URLS'))
			, array('id' => 'equipment', 'title' => Text::_('COM_SH404SEF_ANALYTICS_REPORT_VISITORS_EQUIPMENT'))
		);

		// use helper to build html
		return Sh404sefHelperHtml::buildSelectList($data, $current, $name, $autoSubmit, $addSelectAll, $selectAllTitle, $customSubmit);
	}

	/**
	 * Method to create a select list of possible ways to group data on analytics reports
	 *
	 * @access  public
	 *
	 * @param int ID of current item
	 * @param string name of select list
	 * @param boolean if true, changing selected item will submit the form (assume is an "adminForm")
	 * @param boolean , if true, a line 'Select all' is inserted at the start of the list
	 * @param string the "Select all" to be displayed, if $addSelectAll is true
	 *
	 * @return  string HTML output
	 */
	public static function buildAnalyticsGroupBySelectList($current, $name, $autoSubmit = false, $addSelectAll = false, $selectAllTitle = '', $customSubmit = '')
	{
		// available reports, should not be hardcoded though !
		$data = array(
			array('id' => 'ga:year,ga:month,ga:week,ga:day', 'title' => Text::_('Day'))
			, array('id' => 'ga:year,ga:month,ga:week', 'title' => Text::_('Week'))
			, array('id' => 'ga:year,ga:month', 'title' => Text::_('Month'))
		);

		// use helper to build html
		return Sh404sefHelperHtml::buildSelectList($data, $current, $name, $autoSubmit, $addSelectAll, $selectAllTitle, $customSubmit);
	}

	/**
	 * Encode a time value, in seconds
	 * to predefined numerical codes
	 * using 6 bits (64 values)
	 *
	 * @param float $time
	 *
	 * @return false|float|int
	 */
	public static function classifyTime($time)
	{
		// default
		$time = floatval($time);

		// break it down to classes
		if ($time < 4.95)
		{  // max value for that case is going to be 49
			// convert to 1/10th of second
			$time = round($time * 10); // ie 1.9 sec becomes 19
		}
		else if ($time < 6.0)
		{
			$time = 50;
		}
		else if ($time < 7)
		{
			$time = 51;
		}
		else if ($time < 8)
		{
			$time = 52;
		}
		else if ($time < 9)
		{
			$time = 53;
		}
		else if ($time < 10)
		{
			$time = 54;
		}
		else if ($time < 11)
		{
			$time = 55;
		}
		else if ($time < 12)
		{
			$time = 56;
		}
		else if ($time < 13)
		{
			$time = 57;
		}
		else if ($time < 14)
		{
			$time = 58;
		}
		else if ($time < 15)
		{
			$time = 59;
		}
		else if ($time < 20)
		{
			$time = 60;
		}
		else if ($time < 25)
		{
			$time = 61;
		}
		else if ($time < 30)
		{
			$time = 62;
		}
		else
		{
			$time = 63;
		}

		return $time;
	}

	/**
	 * Revert classification of page creation time
	 * to get back approximate time from value range
	 * encoded in analytics data
	 *
	 * @param integer $time code as per classification function
	 *
	 * @return float|int
	 */
	public static function declassifyTime($time)
	{
		// break it down to classes
		if ($time < 50)
		{  // actual time in 1/10th of sec
			// convert back to secondd
			$time = $time / 10; // ie 1.9 sec becomes 19
		}
		else if ($time == 50)
		{  //
			$time = 5.5;
		}
		else if ($time == 51)
		{  //
			$time = 6.5;
		}
		else if ($time == 52)
		{  //
			$time = 7.5;
		}
		else if ($time == 53)
		{  //
			$time = 8.5;
		}
		else if ($time == 54)
		{  //
			$time = 9.5;
		}
		else if ($time == 55)
		{  //
			$time = 10.5;
		}
		else if ($time == 56)
		{  //
			$time = 11.5;
		}
		else if ($time == 57)
		{  //
			$time = 12.5;
		}
		else if ($time == 58)
		{  //
			$time = 13.5;
		}
		else if ($time == 59)
		{  //
			$time = 14.5;
		}
		else if ($time == 60)
		{  //
			$time = 17.5;
		}
		else if ($time == 61)
		{  //
			$time = 22.5;
		}
		else if ($time == 62)
		{  //
			$time = 27.5;
		}
		else
		{
			$time = 40.0; // default value if time exceeds 30 seconds
		}

		return $time;
	}

	/**
	 * Classify memory consumption into predefined
	 * value ranges, to encode it into only 16 values
	 *
	 * @param float $ram ram used up by page creation
	 *
	 * @return float|int
	 */
	public static function classifyMemory($ram)
	{
		// default
		$ram = floatval($ram);

		// break it down to classes
		if ($ram < 6)
		{
			$ram = 0;
		}
		else if ($ram < 8)
		{
			$ram = 1;
		}
		else if ($ram < 10)
		{
			$ram = 2;
		}
		else if ($ram < 12)
		{
			$ram = 3;
		}
		else if ($ram < 14)
		{
			$ram = 4;
		}
		else if ($ram < 16)
		{
			$ram = 5;
		}
		else if ($ram < 18)
		{
			$ram = 6;
		}
		else if ($ram < 20)
		{
			$ram = 7;
		}
		else if ($ram < 22)
		{
			$ram = 8;
		}
		else if ($ram < 24)
		{
			$ram = 9;
		}
		else if ($ram < 28)
		{
			$ram = 10;
		}
		else if ($ram < 32)
		{
			$ram = 11;
		}
		else if ($ram < 48)
		{
			$ram = 12;
		}
		else if ($ram < 64)
		{
			$ram = 13;
		}
		else if ($ram < 128)
		{
			$ram = 14;
		}
		else
		{
			$ram = 15;
		}

		return $ram;
	}

	/**
	 * Revert classification of ram consumption
	 * to get back approximate memory from value range
	 * encoded in analytics data
	 *
	 * @param integer $ram code as per classification function
	 *
	 * @return int|mixed
	 */
	public static function declassifyMemory($ram)
	{
		$ramValues = array(3, 7, 9, 11, 13, 15, 17, 19, 21, 23, 26, 30, 40, 56, 96, 128);

		if (isset($ramValues[$ram]))
		{
			$ram = $ramValues[$ram];
		}
		else
		{
			$ram = 0;
		}

		return $ram;
	}

}
