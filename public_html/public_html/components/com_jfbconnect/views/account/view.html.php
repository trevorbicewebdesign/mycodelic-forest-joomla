<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2018 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.2.5
 * @build-date      2018/03/13
 */

// No direct access
if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

jimport('joomla.application.component.view');
jimport('joomla.user.helper');

class JFBConnectViewAccount extends JViewLegacy
{
    function display($tpl = null)
    {
        $user = JFactory::getUser();
        $providers = JFBCFactory::getAllProviders();
        $providerData = array();
        foreach ($providers as $provider)
        {
            if($provider->appId && $provider->secretKey)
            {
                $userModel = JFBConnectModelUserMap::getUser($user->get('id'), $provider->systemName);
                $userData = $userModel->getData();

                $providerInfo = new stdClass();
                $providerInfo->profileUrl = $userData->params->get('data.profile_url');
                if(empty($providerInfo->profileUrl)) //JOOMLA 2.5
                    $providerInfo->profileUrl = $userData->params->get('profile_url');
                $providerInfo->isMapped = $userData->provider != null;
                $providerInfo->name = $provider->name;
                $providerInfo->provider = $provider;
                $providerInfo->systemName = $provider->systemName;

                $providerData[$provider->name] = $providerInfo;
            }
        }

        $this->providerData = $providerData;

        JFBCFactory::addStylesheet('jfbconnect.css');

        parent::display($tpl);
    }

}
