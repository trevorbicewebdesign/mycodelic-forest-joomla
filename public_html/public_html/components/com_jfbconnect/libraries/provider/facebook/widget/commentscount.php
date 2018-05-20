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

class JFBConnectProviderFacebookWidgetCommentscount extends JFBConnectProviderFacebookWidget
{
    var $name = "Comments Count";
    var $systemName = "commentscount";
    var $className = "jfbccomments_count";
    var $tagName = array("jfbccommentscount","scfacebookcommentscount");
    var $examples = array (
        '{SCFacebookCommentsCount}',
        '{SCFacebookCommentsCount href=http://www.sourcecoast.com}'
    );

    protected function getTagHtml()
    {
        //Get the Comments Count string
        $tagString = '<div class="fb-comments-count"';
        $tagString .= $this->getField('href', 'url', null, JFBConnectUtilities::getStrippedUrl(), 'data-href');
        $tagString .= '></div>';

        JFBConnectUtilities::loadLanguage('com_jfbconnect');

        $tag = JText::sprintf('COM_JFBCONNECT_COMMENTS_COUNT', $tagString);
        return $tag;
    }
}
