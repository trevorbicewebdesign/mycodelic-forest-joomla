<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

// Check to ensure this file is included in Joomla!
if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

jimport('joomla.application.component.view');
jimport('sourcecoast.adminHelper');

class JFBConnectViewUpdates extends JViewLegacy
{
    var $versionChecker;

    function display($tpl = null)
    {
        $model = JFBCFactory::model('updates');
        $downloadId = JFBCFactory::config()->get('sc_download_id');

        $xmlElement = simplexml_load_file(JPATH_ADMINISTRATOR.'/components/com_jfbconnect/jfbconnect.xml');
        if($xmlElement)
            $jfbcVersion = (string) $xmlElement->version;
        else
            $jfbcVersion = "Unknown. XML Manifest could not be read.";


        $jfbcUpdateSite = $model->getUpdateSite();
        if (is_object($jfbcUpdateSite) && $jfbcUpdateSite->enabled)
            $jfbcUpdateSiteEnabled = true;
        else
            $jfbcUpdateSiteEnabled = false;

        $jfbcUpdate = $model->getJfbconnectUpdateId();

        $this->jfbcUpdateSiteEnabled = $jfbcUpdateSiteEnabled;
        $this->jfbcVersion = $jfbcVersion;
        $this->jfbcUpdate = $jfbcUpdate;

        $this->addToolbar();

        parent::display($tpl);
    }

    function addToolbar()
    {
        JToolBarHelper::title('JFBConnect', 'jfbconnect.png');
        SCAdminHelper::addAutotuneToolbarItem();
    }
}
