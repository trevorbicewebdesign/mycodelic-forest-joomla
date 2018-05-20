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

class JFBConnectProviderLinkedinWidgetAlumni extends JFBConnectWidget
{
    var $name = "Alumni";
    var $systemName = "alumni";
    var $className = "jlinkedAlumni";
    var $tagName = array("jlinkedalumni","sclinkedinalumni");
    var $examples = array (
        '{SCLinkedInAlumni}',
        '{SCLinkedInAlumni schoolid=18483}'
    );

    protected function getTagHtml()
    {
        $this->provider->extraJS = array_merge($this->provider->extraJS, array("extensions: 'AlumniFacet@//www.linkedin.com/edu/alumni-facet-extension-js'"));
        $tag = '<script type="IN/AlumniFacet"';
        $tag .= $this->getField('schoolid', null, null, '', 'data-linkedin-schoolid');
        $tag .= '></script>';
        return $tag;
    }
}
