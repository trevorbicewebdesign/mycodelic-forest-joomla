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

class JFBConnectProviderFacebookWidgetSave extends JFBConnectProviderFacebookWidget
{
    var $name = "Save";
    var $systemName = "save";
    var $className = "sc_facebooksave";
    var $tagName = array("jfbcsave","scfacebooksave");
    var $examples = array (
        '{SCFacebookSave}',
        '{SCFacebookSave href=http://www.sourcecoast.com size=large}'
    );

    protected function getTagHtml()
    {
        $tag = '<div class="fb-save"';
        $tag .= $this->getField('href', 'uri', null, JFBConnectUtilities::getStrippedUrl(), 'data-uri');
        $tag .= $this->getField('size', null, null, '', 'data-size');
        $tag .= '></div>';
        return $tag;
    }
}
