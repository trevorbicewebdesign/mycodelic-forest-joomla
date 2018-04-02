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

class JFBConnectToolbarButtonClose extends JFBConnectToolbarButton
{
    var $order = '1000';
    var $displayName = "X";
    var $systemName = "close";

    protected function generateJavascript()
    {
        return "display: function ()
                    {
                        jfbcJQuery('#social-toolbar').hide();
                    }";
    }

}