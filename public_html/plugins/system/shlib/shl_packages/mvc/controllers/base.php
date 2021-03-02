<?php
/**
 * Shlib - programming library
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier 2020
 * @package     shlib
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     0.4.0.711
 * @date				2020-06-26
 */

// Security check to ensure this file is being included by a parent file.
if (!defined('_JEXEC')) die('Direct Access to this location is not allowed.');

if(version_compare(JVERSION, '3', 'ge')) {

  Class ShlMvcController_Base extends \JControllerLegacy {
  }

} else {

  jimport( 'joomla.application.component.controller' );
  Class ShlMvcController_Base extends \JController {
  }

}
