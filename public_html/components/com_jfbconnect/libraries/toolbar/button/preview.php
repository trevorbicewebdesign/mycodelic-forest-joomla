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

class JFBConnectToolbarButtonPreview extends JFBConnectToolbarButton
{
    var $order = '20';
    var $displayName = "Preview";
    var $systemName = "preview";

    protected function generateJavascript()
    {
        return "display: function() {
                window.open('http://socialdebug.com/results?url=' + encodeURIComponent(document.location), '_blank');
            }";
    }

}