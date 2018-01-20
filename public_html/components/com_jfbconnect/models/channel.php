<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

jimport('joomla.application.component.model');

class JFBConnectModelChannel extends JModelLegacy
{
    public function getChannels()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*')
            ->from($this->_db->qn('#__jfbconnect_channel'))
            ->where($this->_db->qn('published') . '=' . $this->_db->q('1'));
        $this->_db->setQuery($query);
        return $this->_db->loadObjectList();
    }
}