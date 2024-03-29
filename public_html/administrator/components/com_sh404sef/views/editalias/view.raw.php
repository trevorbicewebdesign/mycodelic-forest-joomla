<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date        2020-06-26
 */

// Security check to ensure this file is being included by a parent file.
if (!defined('_JEXEC')) die('Direct Access to this location is not allowed.');

class Sh404sefViewEditalias extends ShlMvcView_Base
{
	public function display($tpl = null)
	{
		// declare docoument mime type
		$document = JFactory::getDocument();
		$document->setMimeEncoding('text/xml');

		$this->refreshAfter = JFactory::getApplication()->input->getCmd('refreshafter');

		// call helper to prepare response xml file content
		$response = Sh404sefHelperGeneral::prepareAjaxResponse($this);

		// echo it
		echo $response;
	}
}
