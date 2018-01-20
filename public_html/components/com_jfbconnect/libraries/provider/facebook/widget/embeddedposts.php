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

class JFBConnectProviderFacebookWidgetEmbeddedposts extends JFBConnectProviderFacebookWidget
{
    var $name = "Embedded Posts";
    var $systemName = "embeddedposts";
    var $className = "jfbcembeddedposts";
    var $tagName = array("jfbcembeddedposts","scfacebookembeddedposts");
    var $examples = array (
        '{SCFacebookEmbeddedPosts}',
        '{SCFacebookEmbeddedPosts href=https://www.facebook.com/FacebookDevelopers/posts/10151471074398553}'
    );

    protected function getTagHtml()
    {
        $tag = '';
        $href = $this->getField('href', 'url', null, '', 'data-href');

        if($href)
        {
            $tag = '<div class="fb-post"' . $href;
            $tag .= $this->getField('width', null, null, '', 'data-width');
            $tag .= $this->getField('include_full_post', null, 'boolean', 'false', 'data-show-text');
            $tag .= '></div>';
        }

        return $tag;
    }
}
