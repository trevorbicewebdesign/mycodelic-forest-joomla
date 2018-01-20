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

class JFBConnectProviderFacebookWidgetFollow extends JFBConnectProviderFacebookWidget
{
    var $name = "Follow";
    var $systemName = "follow";
    var $className = "jfbcfollow";
    var $tagName = array("jfbcfollow","scfacebookfollow");
    var $examples = array (
        '{SCFacebookFollow}',
        '{SCFacebookFollow href=https://www.facebook.com/zuck layout=standard show_faces=true width=300 height=75 colorscheme=light kid_directed_site=true}'
    );

    protected function getTagHtml()
    {
        $tag = '<div class="fb-follow"';
        $tag .= $this->getField('href', 'url', null, '', 'data-href');
        $tag .= $this->getField('show_faces', null, 'boolean', 'true', 'data-show-faces');
        $tag .= $this->getField('layout', null, null, '', 'data-layout');
        $tag .= $this->getField('width', null, null, '', 'data-width');
        $tag .= $this->getField('height', null, null, '', 'data-height');
        $tag .= $this->getField('size', null, null, '', 'data-size');
        $tag .= $this->getField('colorscheme', null, null, '', 'data-colorscheme');
        $tag .= $this->getField('kid_directed_site', null, 'boolean', 'false', 'data-kid-directed-site');
        $tag .= '></div>';
        return $tag;
    }
}
