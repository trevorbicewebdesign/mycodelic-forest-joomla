<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2018 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.2.5
 * @build-date      2018/03/13
 */

// Check to ensure this file is included in Joomla!
if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

class JFBConnectProviderVk extends JFBConnectProvider
{
    function __construct()
    {
        $this->name = "VK";
        $this->usernamePrefix = "vk_";

        parent::__construct();
    }

    function setupAuthentication()
    {
        $options = new JRegistry();
        $options->set('authurl', 'https://oauth.vk.com/authorize?v=5.21');
        $options->set('tokenurl', 'https://oauth.vk.com/access_token');
        $options->set('authmethod', 'get');

        $options->set('scope', 'email');

        $this->client = new JFBConnectAuthenticationOauth2($options);

        $token = JFactory::getApplication()->getUserState('com_jfbconnect.' . strtolower($this->name) . '.token', null);
        if ($token)
        {
            $token = (array)json_decode($token);
            $this->client->setToken($token);
        }
        $this->client->initialize($this);
    }

    /* getProviderUserId
    * Gets the provider User Id from the provider. This is regardless of whether they are mapped to an
    *  existing Joomla account.
    */
    function getProviderUserId()
    {
        $token = $this->client->getToken();
        $userId = isset($token['user_id']) ? $token['user_id'] : null;
        return $userId;
    }

    function getHeadData()
    {
        $head = '';
        if ($this->needsJavascript)
        {
            $head .=
                <<<EOT
            <script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>
            <script type="text/javascript">
                VK.init({apiId: {$this->appId}, onlyWidgets: true});
            </script>
EOT;
        }

        return $head;
    }
}