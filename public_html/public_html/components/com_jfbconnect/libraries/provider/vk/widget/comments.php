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

class JFBConnectProviderVkWidgetComments extends JFBConnectWidget
{
    var $name = "Comments";
    var $systemName = "comments";
    var $className = "sc_vkcomments";
    var $tagName = "scvkcomments";
    var $examples = array (
        '{SCVkComments}',
        '{SCVkComments limit=10 mini=auto width=665 autopublish=true norealtime=false}'
    );

    protected function getTagHtml()
    {
        $options = array();
        $options[] = 'limit: ' . $this->getParamValue('limit');
        $options[] = 'width: ' . $this->getParamValue('width');
        $options[] = 'height: ' . $this->getParamValue('height');
        $options[] = 'autoPublish: ' . $this->getParamValue('autopublish');
        $options[] = 'norealtime: ' . $this->getParamValue('norealtime');
        $options[] = 'mini: "' . $this->getParamValue('mini').'"';

        $url = $this->getParamValue('url');
        if($this->getParamValue('autopublish') && !empty($url))
            $options[] = 'pageUrl: "' . $this->getParamValue('url').'"';

        $media = $this->getParamValue('media');
        if(empty($media))
            $attach = 'false';
        elseif(count($media) == 5)
            $attach = '"*"';
        else{
            $attach = '"'.implode(',', $media).'"';
        }

        $options[] = 'attach: ' . $attach;
        $option_txt = implode(',', $options);

        $tag = '<div id="vk_comments"></div>';
        $tag .= '<script type="text/javascript">';
        $tag .= 'VK.Widgets.Comments(\'vk_comments\', {'.$option_txt.'});';
        $tag .= '</script>';
        return $tag;
    }
}
