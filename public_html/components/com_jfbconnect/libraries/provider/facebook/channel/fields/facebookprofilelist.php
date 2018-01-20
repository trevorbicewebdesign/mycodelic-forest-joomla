<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

defined('JPATH_PLATFORM') or die;

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldFacebookProfileList extends JFormFieldList
{
    public $type = 'FacebookProfileList';

    protected function getOptions()
    {
        return null;
    }

    function getInput()
    {
        $jid = $this->form->getValue('attribs.user_id');
        if ($jid)
        {
            $uid = JFBCFactory::usermap()->getProviderUserId($jid, 'facebook');
            if ($uid)
            {
                if (!JFBCFactory::provider('facebook')->hasScope($uid, 'user_posts'))
                    return '<div class="jfbc-error">'.JText::sprintf('COM_JFBCONNECT_CHANNEL_FACEBOOK_PERM_ERROR_LABEL','user_posts').'</div>';
                else if ($this->form->getValue('attribs.allow_posts') && !JFBCFactory::provider('facebook')->hasScope($uid, 'publish_pages')
                    && !JFBCFactory::provider('facebook')->hasScope($uid, 'publish_actions'))
                    return '<div class="jfbc-error">'.JText::sprintf('COM_JFBCONNECT_CHANNEL_FACEBOOK_PERM_ERROR_LABEL','publish_actions').'</div>';
                else
                    return '';
            }
            else
            {
                return '<div class="jfbc-error">'.JText::_('COM_JFBCONNECT_CHANNEL_FACEBOOK_PERM_PAGE_USER_AUTH_ERROR_LABEL').'</div>';
            }

        }
        else
            return '<div class="jfbc-error">'.JText::_('COM_JFBCONNECT_CHANNEL_SELECT_USER_ERROR_LABEL').'</div>';
    }
 }