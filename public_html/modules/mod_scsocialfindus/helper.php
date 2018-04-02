<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2014-2018 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.2.5
 * @build-date      2018/03/13
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

class modSCSocialFindUsHelper
{
    function addPxToString($amount)
    {
        if(strpos($amount, "px")===false)
            $amount .= "px";
        return $amount;
    }
}