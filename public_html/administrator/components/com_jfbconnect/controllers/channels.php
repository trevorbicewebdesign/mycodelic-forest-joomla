<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2018 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.2.5
 * @build-date      2018/03/13
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

jimport('joomla.application.component.controlleradmin');
class JFBConnectControllerChannels extends JControllerAdmin
{
    public function getModel($name = 'Channel', $prefix = 'JFBConnectModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;
    }

    public function deletePost()
    {
        $pks = JRequest::getVar('cid', 0, '', 'array');
        $apModel = JModelLegacy::getInstance('Autopost', 'JFBConnectModel');

        // Iterate the items to delete each one.
        foreach ($pks as $i => $pk)
        {
            $apModel->deleteActivity($pk);
        }

        $this->setRedirect('index.php?option=com_jfbconnect&view=channels&layout=activity');
    }
}