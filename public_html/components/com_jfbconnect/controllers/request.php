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

class JFBConnectControllerRequest extends JFBConnectController
{

    function display($cachable = false, $urlparams = false)
    {
        exit;
    }

    function requestSent()
    {
        $jfbcRequestId = JRequest::getInt('jfbcId');
        $fbRequestId = JRequest::getString('requestId');
        $inToList = JRequest::getVar('to');

        // Get the from user id from the request
        $to = $inToList[0];
        $requestInfo = JFBCFactory::provider('facebook')->api('/' . $fbRequestId . "_" . $to);
        $fbFrom = $requestInfo['from']['id'];

        // Not using the model, as we're doing a simple store.
        JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_jfbconnect/tables');
        $data = array();
        $data['fb_request_id'] = $fbRequestId;
        $data['fb_user_from'] = $fbFrom;
        $data['jfbc_request_id'] = $jfbcRequestId;
        $data['created'] = JFactory::getDate()->toSql();
        $data['modified'] = null;
        //        $data['destination_url'] = JRequest::getString('destinationUrl');

        foreach ($inToList as $fbTo)
        {
            $row = & JTable::getInstance('JFBConnectNotification', 'Table');
            $to = JFilterInput::clean($fbTo, 'ALNUM');
            $data['fb_user_to'] = $to;
            $row->save($data);

            $point = new JFBConnectPoint();
            $point->set('name', 'facebook.request.create');
            $point->set('key', $to);
            $point->award();
        }

        $app = JFactory::getApplication();
        $app->close();
    }
}
