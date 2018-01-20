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

class JFBConnectProviderTwitterWidgetFollow extends JFBConnectWidget
{
    var $name = "Follow";
    var $systemName = "follow";
    var $className = "sc_twitterfollow";
    var $tagName = "sctwitterfollow";
    var $examples = array (
        '{SCTwitterFollow}',
        '{SCTwitterFollow username=twitterapi lang=fr width=300px show-screen-name=false size=medium show-count=true dnt=false}'
    );

    protected function getTagHtml()
    {
        $username = $this->getParamValueEx('username', null, null, '');
        $tag = '<a href="https://twitter.com/' . $username . '" class="twitter-follow-button"';

        //NOTE: vertical count is not yet supported in twitter follow
        if($this->fields->exists('layout'))
            $tag .= JFBCFactory::easytags()->getShareButtonLayout('twitter', $this->fields->get('layout'), '"');
        else
            $tag .= $this->getField('size', null, null, '', 'data-size');

        $tag .= $this->getField('lang', null, null, '', 'data-lang');
        $tag .= $this->getField('width', null, null, '', 'data-width');
        $tag .= $this->getField('align', null, null, '', 'data-align');
        $tag .= $this->getField('show-screen-name', null, 'boolean', '', 'data-show-screen-name');
        $tag .= $this->getField('show-count', null, 'boolean', 'false', 'data-show-count');
        $tag .= $this->getField('dnt', null, 'boolean', 'false', 'data-dnt');
        $tag .= '>Follow @' . $username . '</a>';

        return $tag;
       
    }
}
