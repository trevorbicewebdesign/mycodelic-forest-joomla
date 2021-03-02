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
use Joomla\CMS\HTML\HtmlHelper;
use Joomla\CMS\Language\Text;
use Weeblr\Wblib\V_SH4_4206\Factory as wblFactory;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

class Sh404sefViewAnalytics extends ShlMvcView_Base
{
	public function display($tpl = null)
	{
		// version prefix
		$userConfig                = Sh404sefFactory::getConfig();
		$this->joomlaVersionPrefix = Sh404sefHelperGeneral::getJoomlaVersionPrefix();
		$this->footerText          = JText::sprintf(
			'COM_SH404SEF_FOOTER_' . strtoupper(Sh404sefConfigurationEdition::$id),
			$userConfig->version, Sh404sefConfigurationEdition::$name, date('Y')
		);

		$this->data = array();

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
			$this->data['viewsList']   = $model->getViewsList();
			$this->data['options']     = $model->loadRequestOptions();
			$this->data['baseUrl']     = Uri::base(true);
			$this->data['sitename']    = Factory::getApplication()->get('sitename');
			$this->data['rootUrl']     = Uri::root();
			$this->data['accessKey']   = '';
			$this->data['currentPage'] = 'dashboard';
			$this->data['location']    = 'backend';
			$this->data['language']    = $wblFactory->getThe('helper.analytics')->getJsLanguageStrings();
		}
		catch (\Exception $e)
		{
			$this->data['errors'] = array(
				\JText::_('COM_SH404SEF_ERROR_CHECKING_ANALYTICS') . ' (' . $e->getMessage() . ')'
			);
		}

		// add all HTML and assets-related stuff
		$this->prepareView($tpl);

		parent::display($this->joomlaVersionPrefix);
	}

	/**
	 * Links all assets and build the toolbar
	 */
	private function prepareView($tpl)
	{
		$this->buildToolbar();

		$document = JFactory::getDocument();
		ShlHtml_Manager::getInstance($document)
		               ->addAssets($document)
		               ->addSpinnerAssets($document);

		// render submenu sidebar
		$this->sidebar = Sh404sefHelperHtml::renderSubmenu();

		// add custom css
		HtmlHelper::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/' . $this->joomlaVersionPrefix . '_list.css');

		// add modal css and js
		ShlHtmlBs_helper::addBootstrapCss(JFactory::getDocument());
		ShlHtmlBs_helper::addBootstrapJs(JFactory::getDocument());

		// add title
		JToolbarHelper::title('sh404SEF: ' . JText::_('COM_SH404SEF_ANALYTICS_MANAGER'), 'sh404sef-toolbar-title');

		// needed javascript
		jimport('joomla.html.html.bootstrap');
		HtmlHelper::_('formbehavior.chosen', 'select');

		// add Joomla calendar behavior, needed to input start and end dates
		if (
			!empty($this->data['options'])
			&&
			wbArrayGet($this->data['options'], 'showFilters', 'yes') == 'yes'
		)
		{
			HtmlHelper::_('behavior.calendar');
			if (version_compare(JVERSION, '3.7', 'ge'))
			{
				HtmlHelper::script('media/system/js/calendar-setup.js');
				HtmlHelper::stylesheet('media/system/css/calendar-jos.css');
			}
		}

		$this->injectAnalyticsConfig();

		// add our javascript
		HtmlHelper::script(Sh404sefHelperGeneral::getComponentUrl() . '/assets/js/' . $this->joomlaVersionPrefix . '_cp.' . Sh404sefConfigurationEdition::$id . '.js');

		// add our own css
		HtmlHelper::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/' . $this->joomlaVersionPrefix . '_cp.css');

		// analytics reports
		$assetsManager = wblFactory::get()->getThe('sh404sef.assetsManager');
		$analyticsCss  = $assetsManager->getHashedMediaLink(
			'analytics.css',
			array(
				'pathFromRoot' => 'css',
			)
		);
		Factory::getDocument()->addStyleSheet($analyticsCss);
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

	private function injectAnalyticsConfig()
	{
		// add quick control panel loader
		$jsonConfig = json_encode($this->data);
		$js         = <<<JS
window.weeblrApp  = window.weeblrApp || {};
window.weeblrApp.analyticsReportConfig = {$jsonConfig};
JS;
		JFactory::getDocument()->addScriptDeclaration($js);
	}

	/**
	 * Use Joomla API to build a toolbar.
	 */
	private function buildToolbar()
	{
		// Get the JComponent instance of JToolBar
		$bar = JToolBar::getInstance('toolbar');
		// prepare configuration button
		if (Sh404sefHelperAcl::userCan('sh404sef.view.configuration'))
		{
			$params                = array();
			$params['class']       = 'modaltoolbar btn-success';
			$params['size']        = Sh404sefFactory::getPConfig()->windowSizes['configuration'];
			$params['buttonClass'] = 'btn-success btn btn-small modal';
			$params['iconClass']   = 'icon-options';
			$url                   = 'index.php?option=com_sh404sef&tmpl=component&c=configuration&view=configuration&component=com_sh404sef&hidemainmenu=1';
			// prepare configuration button
			$bar->addButtonPath(SHLIB_ROOT_PATH . 'toolbarbutton');
			$bar
				->appendButton(
					'J3popuptoolbarbutton', 'configj3', JText::_('COM_SH404SEF_CONFIGURATION'), $url, $params['size']['x'],
					$params['size']['y'], $top = 0, $left = 0, $onClose = '', $title = '', $params
				);
		}

		// separator
		JToolBarHelper::spacer(20);

		// save progress div
		$html = '<div class="wbl-spinner-black" id="toolbar-sh404sef-spinner"></div>';
		$bar->appendButton('custom', $html, 'sh-progress-button-cpprogress');
	}
}
