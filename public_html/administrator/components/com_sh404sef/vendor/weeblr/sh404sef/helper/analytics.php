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

namespace Weeblr\Sh404sef\Helper;

use Weeblr\Wblib\V_SH4_4206\Base;
use Weeblr\Wblib\V_SH4_4206\Factory;
use Weeblr\Wblib\V_SH4_4206\System;
use Weeblr\Wblib\V_SH4_4206\Mvc\LayoutHelper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die;

Class Analytics extends Base\Base
{
	/**
	 * Check the http status code of a response from analytics servers.
	 *
	 * @param stdClass $response
	 *
	 * @throws \RuntimeException
	 */
	public function verifyAuthResponse($response)
	{
		// check if valid response http code
		if (
			empty($response->code)
			||
			$response->code != 200
		)
		{
			$decodedResponse = json_decode(
				$response->body
			);
			$msg             = $this->platform->t('COM_SH404SEF_ERROR_AUTH_ANALYTICS');
			$code            = 404;
			if (!empty($decodedResponse->error))
			{
				$msg  = $decodedResponse->error->message . ' (' . $decodedResponse->error->code . ')';
				$code = (int) $decodedResponse->error->code;
			}
			System\Log::debug('sh404sef', '%s::%d: %s', __METHOD__, __LINE__, 'Analytics: HTTP error in analytics endpoint comm, response:' . print_r($response, true));
			throw new \RuntimeException($msg, $code);
		}
	}

	/**
	 * Build a translatable report title.
	 *
	 * @param string $subrequest
	 *
	 * @return string
	 */
	public function getReportTitle($subrequest)
	{
		switch ($subrequest)
		{
			case 'visits':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_DATA_PAGEVIEWS') . ' / ' . $this->platform->t('COM_SH404SEF_ANALYTICS_DATA_VISITORS');
				break;
			case 'perf':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_PERF');
				break;
			case 'global':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_GLOBAL_DATA');
				break;
			case 'traffic':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_TRAFFIC');
				break;
			case 'sources':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_SOURCES');
				break;
			case 'devices':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_DEVICES');
				break;
			case 'geo':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_GEO');
				break;
			case 'social':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_SOCIAL');
				break;
			case 'topurls':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_PAGES');
				break;
			case 'topreferrers':
				$titleString = $this->platform->t('COM_SH404SEF_ANALYTICS_TOP5_REFERRERS');
				break;
		}

		return empty($titleString) ? '' : $titleString;
	}

	/**
	 * Display the analytics full frontend report.
	 */
	public function displayFrontend()
	{
		$data = array();

		$model = $this->factory->getA(
			'\Weeblr\Sh404sef\Model\Analytics',
			$this->factory->getThe('sh404sef.config')
		);

		// load messages, for reports and in case of errors
		$this->platform->loadLanguageFile(
			'com_sh404sef',
			'admin'
		);

		$data['baseUrl']     = $this->platform->getBaseUrl(true);
		$data['sitename']    = $this->platform->getSitename();
		$data['rootUrl']     = $this->platform->getRootUrl(false);
		$data['currentPage'] = 'dashboard';
		$data['location']    = 'frontend';
		$data['accessKey']   = '';
		$data['language']    = $this->getJsLanguageStrings();

		try
		{
			$data['viewsList'] = $model->getViewsList();
			$data['options']   = $model->loadRequestOptions();
		}
		catch (\Exception $e)
		{
			$data['errors'] = array(
				$this->platform->t('COM_SH404SEF_ERROR_CHECKING_ANALYTICS') . ' (' . $e->getMessage() . ')'
			);
		}

		// render the reports
		$content = LayoutHelper::render(
			'com_sh404sef.analytics.frontend',
			$data,
			SH404SEF_LAYOUTS_PATH
		);

		// render the full page and exit
		System\Http::render(
			System\Http::RETURN_OK,
			$content,
			'text/html',
			array(
				'Made-With' => 'sh404SEF'
			)
		);
	}

	/**
	 * Get the host for the current request.
	 *
	 * @return string
	 */
	public function getCurrentHost()
	{
		static $host = null;

		if (is_null($host))
		{
			$host = Factory::get()
			               ->getA(
				               'Weeblr\Wblib\V_SH4_4206\Joomla\Uri\Uri',
				               Factory::get()
				                      ->getThe('platform')
				                      ->getRootUrl(false)
			               )->getHost();
		}

		return $host;
	}

	/**
	 * Build an array of strings to be inserted in HTML and
	 * be used by javascript.
	 *
	 * @return array
	 */
	public function getJsLanguageStrings()
	{
		return array(
			'previous'                    => $this->platform->t('JPREVIOUS'),
			'next'                        => $this->platform->t('JNEXT'),
			'others'                      => $this->platform->t('COM_SH404SEF_ANALYTICS_REF_LABEL_OTHER'),
			'report_perf_title'           => $this->platform->t('COM_SH404SEF_ANALYTICS_LOAD_TIME'),
			'report_perf_x_axis_title'    => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_LOAD_TIME_AXIS'),
			'traffic_sources_title'       => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_SOURCES'),
			'traffic_devices_title'       => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_DEVICES'),
			'traffic_geo_title'           => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_GEO'),
			'traffic_geo_x_axis_title'    => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_VISITS_ONLY'),
			'traffic_social_title'        => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_SOCIAL'),
			'traffic_social_x_axis_title' => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_VISITS_ONLY'),
			'error_no_view'               => $this->platform->t('COM_SH404SEF_ANALYTICS_REPORT_ERROR_NO_VIEW'),
		);
	}
}
