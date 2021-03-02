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

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

/**
 * Implement Google analytics handling
 *
 * @author shumisha
 *
 */
class Sh404sefAdapterAnalyticsga extends Sh404sefClassBaseanalytics
{
	/**
	 * Get tracking snippet
	 *
	 */
	public function getSnippet()
	{
		// should we insert tracking code snippet ?
		if (!$this->_shouldInsertSnippet())
		{
			return '';
		}

		switch (Sh404sefFactory::getConfig()->analyticsEdition)
		{
			case 'uga':
				$snippet = $this->_getSnippetUga() . "\n";
				break;
			case 'gtm':
				$snippet = $this->_getSnippetGtm();
				break;
			default:
				$snippet = '';
				break;
		}

		return $snippet;
	}

	/**
	 * Get Universal Analytics tracking snippet
	 *
	 */
	protected function _getSnippetUga()
	{
		// get config
		$config   = Sh404sefFactory::getConfig();
		$pageInfo = Sh404sefFactory::getPageInfo();

		// in case of 404, we use a custom page url so that 404s can also be tracked in GA
		$customUrl = !empty($pageInfo->httpStatus) && $pageInfo->httpStatus == 404 ? '/__404__' : '';

		$displayData                              = array();
		$displayData['tracking_code']             = trim($config->analyticsUgaId);
		$displayData['custom_domain']             = 'auto';
		$displayData['options']                   = array();
		$displayData['custom_url']                = $customUrl;
		$displayData['anonymize']                 = !empty($config->analyticsEnableAnonymization);
		$displayData['enable_display_features']   = !empty($config->analyticsEnableDisplayFeatures);
		$displayData['enable_enhanced_link_attr'] = !empty($config->analyticsEnableEnhancedLinkAttr);

		/**
		 * Filter the list of variables passed to the Universal Analytics JLayout.
		 *
		 * @api
		 * @package sh404SEF\filter\analytics
		 * @var sh404sef_universal_analytics_data
		 * @since   4.11
		 *
		 * @param array $displayData Associative array of analytics vars.
		 *
		 * @return array
		 */
		$displayData = ShlHook::filter(
			'sh404sef_universal_analytics_data',
			$displayData
		);

		$snippet = ShlMvcLayout_Helper::render('com_sh404sef.analytics.snippet_uga', $displayData);

		return $snippet;
	}

	/**
	 * Get Google Tags manager snippet
	 *
	 */
	protected function _getSnippetGtm()
	{
		// get config
		$config = Sh404sefFactory::getConfig();

		$displayData                  = array();
		$displayData['tracking_code'] = trim($config->analyticsGtmId);

		// finalize snippet : add user tracking code
		return array(
			'body' => ShlMvcLayout_Helper::render('com_sh404sef.analytics.snippet_gtm_body', $displayData),
			'head' => ShlMvcLayout_Helper::render('com_sh404sef.analytics.snippet_gtm_head', $displayData)
		);
	}
}
