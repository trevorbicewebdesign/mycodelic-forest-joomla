<?php
/**
 * Shlib - programming library
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier 2020
 * @package     shlib
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     0.4.0.711
 * @date		2020-06-26
 */

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die;

/**
 * Interface to handle display layout
 *
 * @package     Joomla.Libraries
 * @subpackage  Layout
 * @since       3.0
 */
interface ShlMvcLayout
{

	/**
	 * Method to render the layout.
	 *
	 * @param   object  $displayData  Object which properties are used inside the layout file to build displayed output
	 *
	 * @return  string  The rendered layout.
	 *
	 * @since   3.0
	 */
	public function render($displayData);
}
