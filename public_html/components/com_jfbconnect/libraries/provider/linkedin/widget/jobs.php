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

class JFBConnectProviderLinkedinWidgetJobs extends JFBConnectWidget
{
    var $name = "Jobs";
    var $systemName = "jobs";
    var $className = "jlinkedJobs";
    var $tagName = array("jlinkedjobs","sclinkedinjobs");
    var $examples = array (
        '{SCLinkedInJobs}',
        '{SCLinkedInJobs companyid=365848}'
    );

    protected function getTagHtml()
    {
        $tag = '<script type="IN/JYMBII"';
        $tag .= $this->getField('companyid', null, null, '', 'data-companyid');
        $tag .= ' data-format="inline"';
        $tag .= '></script>';
        return $tag;
    }
}
