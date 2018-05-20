<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2018 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.2.5
 * @build-date      2018/03/13
 */

defined('JPATH_PLATFORM') or die;

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldChannelOutboundProviders extends JFormFieldList
{
    public $type = 'ChannelOutboundProviders';

    protected function getOptions()
    {
        $options = array();
        $options[] = JHtml::_('select.option', "--", "-- Select a Provider --");

        $providers = JFBCFactory::getAllProviders();
        foreach ($providers as $p)
        {
            $channels = $p->getChannelsOutbound();
            if (count($channels) > 0)
                $options[] = JHtml::_('select.option', strtolower($p->name), $p->name);
        }

        return $options;
    }
}
