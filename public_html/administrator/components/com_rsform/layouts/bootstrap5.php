<?php
/**
* @package RSForm! Pro
* @copyright (C) 2007-2019 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/* @var $formId int Form ID
 * @var $formOptions object Form options
 * @var $requiredMarker string Required marker
 * @var $showFormTitle int Form title parameters: 0 - hide, 1 - show
 */

require_once __DIR__ . '/grid/bootstrap5.php';

$grid = new RSFormProGridBootstrap5($this->_form->GridLayout, $formId, $formOptions, $requiredMarker, $showFormTitle);
echo $grid->generate();