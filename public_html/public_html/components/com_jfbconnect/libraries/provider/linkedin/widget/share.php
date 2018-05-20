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

class JFBConnectProviderLinkedinWidgetShare extends JFBConnectWidget
{
    var $name = "Share";
    var $systemName = "share";
    var $className = "jlinkedShare";
    var $tagName = array("jlinkedshare","sclinkedinshare");
    var $examples = array(
        '{SCLinkedInShare}',
        '{SCLinkedInShare href=http://www.sourcecoast.com/jlinked/}'
    );

    protected function getTagHtml()
    {
        JFBCFactory::addStylesheet('jfbconnect.css');
        $tag = '<script type="IN/Share"';
        $tag .= $this->getField('href', 'url', null, JFBConnectUtilities::getStrippedUrl(), 'data-url');
        $tag .= ' data-onsuccess="jfbc.social.linkedin.share"';
        $tag .= '></script>';
        return $tag;
    }
}
