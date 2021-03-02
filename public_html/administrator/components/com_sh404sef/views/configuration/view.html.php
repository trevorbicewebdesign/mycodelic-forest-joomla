<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 * @date  2020-06-26
 */

use Joomla\CMS\Factory;
use Weeblr\Wblib\V_SH4_4206\Factory as wblFactory;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') or die;

class Sh404sefViewConfiguration extends ShlMvcView_Base
{
	public function display($tpl = null)
	{
		// version prefix
		$this->joomlaVersionPrefix = Sh404sefHelperGeneral::getJoomlaVersionPrefix();
		$this->refreshAfter        = JFactory::getApplication()->input->getCmd('refreshafter');

		if ($this->getLayout() != 'close')
		{
			switch (Sh404sefConfigurationEdition::$id)
			{
				case 'community':
				case 'lite':
					$this->byComponentItemsCount = 4;
					JHtml::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/configuration.community.css');
					break;
				default:
					$this->byComponentItemsCount = 7;
			}

			// get model
			$model = $this->getModel();
			// ask for the form
			$this->form = $model->getForm();

			// prepare layouts objects, to be used by sub-layouts
			$this->layoutRenderer             = array();
			$this->layoutRenderer['default']  = new ShlMvcLayout_File('com_sh404sef.configuration.fields.default', sh404SEF_LAYOUTS);
			$this->layoutRenderer['shlegend'] = new ShlMvcLayout_File('com_sh404sef.configuration.fields.legend', sh404SEF_LAYOUTS);
			$this->layoutRenderer['Rules']    = new ShlMvcLayout_File('com_sh404sef.configuration.fields.rules', sh404SEF_LAYOUTS);

			$document = Factory::getDocument();

			// insert custom stylesheet
			JHtml::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/configuration.css');

			ShlHtmlBs_helper::addBootstrapCss($document);
			ShlHtmlBs_helper::addBootstrapJs($document);

			JHtml::styleSheet(Sh404sefHelperGeneral::getComponentUrl() . '/assets/css/j3_list.css');

			// insert bootstrap theme
			ShlHtml_Manager::getInstance()->addAssets($document);

			ShlHtml_Manager::getInstance($document)
			               ->addAssets($document)
			               ->addSpinnerAssets($document);

			// add ga_auth js and css, in case we open configuration
			$analyticsCss = wblFactory::get()->getThe('sh404sef.assetsManager')->getHashedMediaLink(
				'wb_gaauth.min.css',
				array(
					'pathFromRoot' => 'css',
				)
			);
			Factory::getDocument()->addStyleSheet($analyticsCss);

			$analyticsScript = wblFactory::get()->getThe('sh404sef.assetsManager')->getHashedMediaLink(
				'wb_gaauth_' . $this->joomlaVersionPrefix . '.js',
				array(
					'pathFromRoot' => 'js',
				)
			);
			Factory::getDocument()->addScript($analyticsScript);

			JHtml::script(Sh404sefHelperGeneral::getComponentUrl() . '/assets/js/permissions.js');
			JHtml::script(Sh404sefHelperGeneral::getComponentUrl() . '/assets/js/purge.js');
		}

		parent::display($this->joomlaVersionPrefix);
	}

}
