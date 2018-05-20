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

class JFBConnectProviderLinkedinWidgetFollowcompany extends JFBConnectWidget
{
    var $name = "Follow Company";
    var $systemName = "followcompany";
    var $className = "jlinkedFollowCompany";
    var $tagName = array("jlinkedfollowcompany","sclinkedinfollowcompany");
    var $examples = array (
        '{SCLinkedInFollowCompany companyid=365848}',
        '{SCLinkedInFollowCompany companyid=365848 counter=right}'
    );

    protected function getTagHtml()
    {
        $tag = '<script type="IN/FollowCompany"';
        $tag .= $this->getField('companyid', null, null, '', 'data-id');
        $tag .= $this->getField('counter', null, null, 'none', 'data-counter');
        $tag .= '></script>';
        return $tag;
    }
}
