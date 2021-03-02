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

use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HtmlHelper;
use Joomla\CMS\Language\Text;
use Weeblr\Wblib\V_SH4_4206\Factory as wblFactory;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

class Sh404sefViewDefault extends ShlMvcView_Base
{

	public function display($tpl = null)
	{
		// version prefix
		$this->joomlaVersionPrefix = Sh404sefHelperGeneral::getJoomlaVersionPrefix();
		$this->footerText          = Text::sprintf(
			'COM_SH404SEF_FOOTER_' . strtoupper(Sh404sefConfigurationEdition::$id),
			Sh404sefFactory::getConfig()->version, Sh404sefConfigurationEdition::$name, date('Y')
		);

		// required assets for the messages manager
		$document = Factory::getDocument();
		ShlMsg_Manager::getInstance()->addAssets($document);
		ShlHtml_Manager::getInstance()
		               ->addAssets($document)
		               ->addSpinnerAssets($document);

		// prepare the view, based on layout
		$method = 'makeView' . ucfirst($this->getLayout());
		if (is_callable(array($this, $method)))
		{
			$this->$method();
		}

		HtmlHelper::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/' . $this->joomlaVersionPrefix . '_list.css');

		parent::display($this->joomlaVersionPrefix);
	}

	/**
	 * Attach css, js and create toolbar for default view
	 *
	 * @param mixed $params
	 *
	 * @throws Exception
	 */
	private function makeViewDefault($params = null)
	{
		// prepare database stats, etc
		$this->prepareControlPanelData();

		// Get the JComponent instance of JToolBar
		$bar = JToolBar::getInstance('toolbar');

		// render submenu sidebar
		$this->sidebar = JHtmlSidebar::render();

		// add modal css and js
		ShlHtmlBs_helper::addBootstrapCss(Factory::getDocument());
		ShlHtmlBs_helper::addBootstrapJs(Factory::getDocument());

		// add title
		JToolbarHelper::title('sh404SEF: ' . Text::_('COM_SH404SEF_CONTROL_PANEL'), 'sh404sef-toolbar-title');

		// prepare configuration button
		if (Sh404sefHelperAcl::userCan('sh404sef.view.configuration'))
		{
			$bar->addButtonPath(SHLIB_ROOT_PATH . 'toolbarbutton');
			$params                = array();
			$params['class']       = 'modaltoolbar btn-success';
			$params['size']        = Sh404sefFactory::getPConfig()->windowSizes['configuration'];
			$params['buttonClass'] = 'btn-success btn btn-small modal';
			$params['iconClass']   = 'icon-options';
			$url                   = 'index.php?option=com_sh404sef&tmpl=component&c=configuration&view=configuration&component=com_sh404sef&hidemainmenu=1';
			$bar
				->appendButton(
					'J3popuptoolbarbutton', 'configj3', Text::_('COM_SH404SEF_CONFIGURATION'), $url, $params['size']['x'],
					$params['size']['y'], $top = 0, $left = 0, $onClose = '', $title = '', $params
				);

			// separator
			JToolBarHelper::spacer(20);

			// edit home page button
			$params                       = array();
			$params['size']               = Sh404sefFactory::getPConfig()->windowSizes['editurl'];
			$params['buttonClass']        = 'btn btn-small';
			$params['iconClass']          = 'icon-home';
			$params['checkListSelection'] = false;
			$url                          = 'index.php?option=com_sh404sef&c=editurl&task=edit&home=1&tmpl=component';
			$bar
				->appendButton(
					'J3popuptoolbarbutton', 'home', Text::_('COM_SH404SEF_HOME_PAGE_ICON'), $url, $params['size']['x'], $params['size']['y'],
					$top = 0, $left = 0, $onClose = '', $title = Text::_('COM_SH404SEF_HOME_PAGE_EDIT_TITLE'), $params
				);

			// separator
			JToolBarHelper::spacer(20);

			// add purge buttons
			$params                       = array();
			$params['size']               = Sh404sefFactory::getPConfig()->windowSizes['confirm'];
			$params['buttonClass']        = 'btn btn-small btn-danger';
			$params['iconClass']          = 'shl-icon-remove-sign';
			$params['checkListSelection'] = false;
			$url                          = 'index.php?option=com_sh404sef&c=urls&task=confirmpurge404&tmpl=component';
			$bar
				->appendButton(
					'J3popuptoolbarbutton', 'purge', Text::_('COM_SH404SEF_PURGE404'), $url, $params['size']['x'], $params['size']['y'],
					$top = 0, $left = 0, $onClose = '', $title = Text::_('COM_SH404SEF_CONFIRM_TITLE'), $params
				);

			// separator
			if (Factory::getApplication()->input->getInt('purge', 0) == 1)
			{
				JToolBarHelper::spacer(20);

				// add purge buttons
				$params                       = array();
				$params['size']               = Sh404sefFactory::getPConfig()->windowSizes['confirm'];
				$params['buttonClass']        = 'btn btn-small btn-danger';
				$params['iconClass']          = 'shl-icon-remove-sign';
				$params['checkListSelection'] = false;
				$url                          = 'index.php?option=com_sh404sef&c=urls&task=confirmpurge&tmpl=component';
				$bar
					->appendButton(
						'J3popuptoolbarbutton', 'purge404', Text::_('COM_SH404SEF_PURGE'), $url, $params['size']['x'], $params['size']['y'],
						$top = 0, $left = 0, $onClose = '', $title = Text::_('COM_SH404SEF_CONFIRM_TITLE'), $params
					);
			}
		}

		$html = '<div class="wbl-spinner-black" id="toolbar-sh404sef-spinner"></div>';
		$bar->appendButton('custom', $html, 'sh-progress-button-cpprogress');

		// add analytics and other ajax calls loader
		$sefConfig          = Sh404sefFactory::getConfig();
		$analyticsBootstrap = $sefConfig->analyticsReportsEnabled ? 'shSetupAnalytics({report:"dashboard",showFilters:"no"});' : '';
		$js                 = 'jQuery(document).ready(function(){ ' . $analyticsBootstrap . '  shSetupQuickControl(); shSetupSecStats(); shSetupUpdates();});';
		$document           = Factory::getDocument();
		$document->addScriptDeclaration($js);

		// add our javascript
		HtmlHelper::script(Sh404sefHelperGeneral::getComponentUrl() . '/assets/js/' . $this->joomlaVersionPrefix . '_cp.' . Sh404sefConfigurationEdition::$id . '.js');
		// add our own css
		HtmlHelper::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/' . $this->joomlaVersionPrefix . '_cp.css');

		$this->prepareAnalyticsView();
	}

	/**
	 * Attach css, js and create toolbar for Info view
	 * (actually linked as Documentation)
	 *
	 * @param midxed $params
	 *
	 * @throws Exception
	 */
	private function makeViewInfo($params = null)
	{
		// add our own css
		HtmlHelper::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/list.css');

		// decide on help file language
		$languageCode = Sh404sefHelperLanguage::getFamily();
		$basePath     = JPATH_ROOT . '/administrator/components/com_sh404sef/language/%s.readme.php';
		// fall back to english if language readme does not exist
		jimport('joomla.filesystem.file');
		if (!JFile::exists(sprintf($basePath, $languageCode)))
		{
			$languageCode = 'en';
		}
		$this->readmeFilename = sprintf($basePath, $languageCode);

		// render submenu sidebar
		$this->sidebar = JHtmlSidebar::render();

		// add modal css and js
		ShlHtmlBs_helper::addBootstrapCss(Factory::getDocument());
		ShlHtmlBs_helper::addBootstrapJs(Factory::getDocument());

		JToolbarHelper::title(Text::_('COM_SH404SEF_TITLE_SUPPORT'), 'sh404sef-toolbar-title');

		// Analytics reports
		if (Sh404sefHelperAcl::userCan('sh404sef.view.analytics') && Sh404sefFactory::getConfig()->analyticsReportsEnabled)
		{
			HtmlHelper::_('stylesheet', 'media/com_sh404sef/assets/css/analytics.css', array('relative' => false, 'detectBrowser' => false, 'pathOnly' => true));
			HtmlHelper::_('script', 'https://www.gstatic.com/charts/loader.js');
			HtmlHelper::_('script', 'media/com_sh404sef/assets/js6/dist/analytics.js', array('relative' => false, 'detectBrowser' => false, 'pathOnly' => true));
		}
	}

	private function prepareControlPanelData()
	{
		$sefConfig       = Sh404sefFactory::getConfig();
		$this->sefConfig = $sefConfig;

		// get currently store
		$this->messageList = ShlMsg_Manager::getInstance()->get(array('scope' => 'com_sh404sef', 'acknowledged' => false));

		// update information
		$versionsInfo  = Sh404sefHelperUpdates::getUpdatesInfos();
		$this->updates = $versionsInfo;

		// url databases stats
		$database          = ShlDbHelper::getDb();
		$this->cpStats     = array();
		$this->cpStatsMore = array();
		try
		{
			// URLS -------------------
			$sql                  = 'SELECT count(*) FROM #__sh404sef_urls WHERE ';
			$this->cpStats['URL'] = array();
			$database->setQuery($sql . "`newurl` <> '' and `rank` = 0");
			$value                                                       = $database->loadResult();
			$sefCount                                                    = $value;
			$this->cpStats['URL'][Text::_('COM_SH404SEF_CP_TOTAL_URLS')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=urls&layout=default&view=urls'
			);

			$database->setQuery($sql . "`newurl` <> '' and `cpt` <> 0 and `rank` = 0");
			$value                                                    = $database->loadResult();
			$this->cpStats['URL'][Text::_('COM_SH404SEF_CP_VISITED')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=urls&layout=default&view=urls&filter_requested_urls=1'
			);

			$database->setQuery($sql . "`newurl` <> '' and `cpt` = 0 and `rank` = 0");
			$value                                                          = $database->loadResult();
			$this->cpStats['URL'][Text::_('COM_SH404SEF_CP_NEVER_VISITED')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=urls&layout=default&view=urls&filter_requested_urls=2'
			);

			// Joomla 2 B/C
			$database->setQuery($sql . "`dateadd` > '0000-00-00' and `newurl` != '' ");
			$customCount = $database->loadResult();

			// 404 -------------------
			$this->cpStats['404s'] = array();
			$database->setQuery($sql . "`newurl` = '' ");
			$value                                                       = $database->loadResult();
			$count404                                                    = $value;
			$this->cpStats['404s'][Text::_('COM_SH404SEF_CP_TOTAL_404')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=urls&layout=view404&view=urls'
			);

			$database->setQuery($sql . "`dateadd` > '0000-00-00' and `newurl` = '' and `referrer_type` = " . Sh404sefHelperUrl::IS_INTERNAL);
			$value                                                      = $database->loadResult();
			$this->cpStats['404s'][Text::_('COM_SH404SEF_CP_INTERNAL')] = array(
				'value' => $value, 'flag' => (empty($value) ? '' : 'wbl-flag-warning'),
				'link'  => 'index.php?option=com_sh404sef&c=urls&layout=view404&view=urls&filter_hit_type=' . Sh404sefHelperUrl::IS_INTERNAL
			);

			$database->setQuery($sql . "`dateadd` > '0000-00-00' and `newurl` = '' and (`referrer_type` = " . Sh404sefHelperUrl::IS_EXTERNAL . " OR `referrer_type` = " . Sh404sefHelperUrl::IS_UNKNOWN . ")");
			$value                                                      = $database->loadResult();
			$this->cpStats['404s'][Text::_('COM_SH404SEF_CP_EXTERNAL')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=urls&layout=view404&view=urls&filter_hit_type=' . Sh404sefHelperUrl::IS_EXTERNAL
			);

			// Aliases ---------------
			$sql                          = 'SELECT count(*) FROM #__sh404sef_aliases';
			$this->cpStatsMore['Aliases'] = array();
			$database->setQuery($sql);
			$value                                                                  = $database->loadResult();
			$this->cpStatsMore['Aliases'][Text::_('COM_SH404SEF_CP_TOTAL_ALIASES')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=aliases&layout=default&view=aliases'
			);

			$database->setQuery($sql . " where `hits` <> 0");
			$value                                                         = $database->loadResult();
			$this->cpStatsMore['Aliases'][Text::_('COM_SH404SEF_CP_USED')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=aliases&layout=default&view=aliases&filter_requested_urls=' . Sh404sefHelperGeneral::SHOW_REQUESTED
			);

			$database->setQuery($sql . " where `hits` = 0");
			$value                                                               = $database->loadResult();
			$this->cpStatsMore['Aliases'][Text::_('COM_SH404SEF_CP_NEVER_USED')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=aliases&layout=default&view=aliases&filter_requested_urls=' . Sh404sefHelperGeneral::SHOW_NOT_REQUESTED
			);

			// shURLs ----------------
			$sql                         = 'SELECT count(*) FROM #__sh404sef_pageids as s join #__sh404sef_urls as u';
			$sql                         .= ' on s.`newurl` = u.`newurl` where u.`newurl` <> \'\'';
			$this->cpStatsMore['shURLs'] = array();
			$database->setQuery($sql);
			$value                                                                = $database->loadResult();
			$this->cpStatsMore['shURLs'][Text::_('COM_SH404SEF_CP_TOTAL_SHURLS')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=pageids&layout=default&view=pageids'
			);

			$database->setQuery($sql . " and s.`hits` <> 0");
			$value                                                        = $database->loadResult();
			$this->cpStatsMore['shURLs'][Text::_('COM_SH404SEF_CP_USED')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=pageids&layout=default&view=pageids&filter_requested_urls=' . Sh404sefHelperGeneral::SHOW_REQUESTED
			);

			$database->setQuery($sql . " and s.`hits` = 0");
			$value                                                              = $database->loadResult();
			$this->cpStatsMore['shURLs'][Text::_('COM_SH404SEF_CP_NEVER_USED')] = array(
				'value' => $value, 'flag' => '',
				'link'  => 'index.php?option=com_sh404sef&c=pageids&layout=default&view=pageids&filter_requested_urls=' . Sh404sefHelperGeneral::SHOW_NOT_REQUESTED
			);
		}
		catch (\Exception $e)
		{
			ShlSystem_Log::error('sh404sef', '%s::%s::%d: %s', __CLASS__, __METHOD__, __LINE__, $e->getMessage());
			$sefCount    = 0;
			$count404    = 0;
			$customCount = 0;
		}

		$this->sefCount    = $sefCount;
		$this->Count404    = $count404;
		$this->customCount = $customCount;

		$this->prepareAnalyticsData();
	}

	/**
	 * Builds the data set required to display admin home page analytics subset.
	 */
	private function prepareAnalyticsData()
	{
		$this->analyticsData = array();

		//$model = new Sh404sefModelAnalyticsreports($userConfig);
		$wblFactory = wblFactory::get();
		$model      = $wblFactory->getA(
			'\Weeblr\Sh404sef\Model\Analytics',
			$wblFactory->getThe('sh404sef.config')
		);

		// prepare the view, based on request
		// do we force reading updates from server ?
		try
		{
			$this->analyticsData['viewsList']   = $model->getViewsList();
			$adminhomeOptions                   = array(
				'showFilters' => 'no',
				'dateRange'   => 'custom'
			);
			$this->analyticsData['options']     = $model->loadRequestOptions(
				$adminhomeOptions
			);
			$this->analyticsData['baseUrl']     = Uri::base(true);
			$this->analyticsData['sitename']    = Factory::getApplication()->get('sitename');
			$this->analyticsData['rootUrl']     = Uri::root();
			$this->analyticsData['accessKey']   = '';
			$this->analyticsData['currentPage'] = 'backend.home';
			$this->analyticsData['location']    = 'backend';
			$this->analyticsData['language']    = $wblFactory->getThe('helper.analytics')->getJsLanguageStrings();
		}
		catch (\Exception $e)
		{
			$this->analyticsData['errors'] = array(
				Text::_('COM_SH404SEF_ERROR_CHECKING_ANALYTICS') . ' (' . $e->getMessage() . ')'
			);
		}
	}

	/**
	 * Add assets required to display the admin home page analytics subset.
	 */
	private function prepareAnalyticsView()
	{
		$assetsManager = wblFactory::get()->getThe('sh404sef.assetsManager');
		$analyticsCss  = $assetsManager->getHashedMediaLink(
			'analytics.css',
			array(
				'pathFromRoot' => 'css',
			)
		);
		// add quick control panel loader
		$jsonConfig = json_encode($this->analyticsData);
		$js         = <<<JS
window.weeblrApp  = window.weeblrApp || {};
window.weeblrApp.analyticsReportConfig = {$jsonConfig};
JS;

		Factory::getDocument()
		       ->addStyleSheet($analyticsCss)
		       ->addScriptDeclaration($js);

		if (
			empty($this->data['errors'])
			&&
			Sh404sefHelperAcl::userCan('sh404sef.view.analytics')
			&&
			Sh404sefFactory::getConfig()->analyticsReportsEnabled
		)
		{
			HtmlHelper::_('script', 'https://www.gstatic.com/charts/loader.js');
			$analyticsScript = $assetsManager->getHashedMediaLink(
				'analytics.js',
				array(
					'pathFromRoot' => 'js6',
				)
			);
			Factory::getDocument()->addScript($analyticsScript);
		}
	}
}
