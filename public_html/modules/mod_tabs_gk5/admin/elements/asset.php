<?php

/**
* Tabs GK5 - main PHP file
* @package Joomla!
* @Copyright (C) 2009-2012 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @ version $Revision: GK5 1.0 $
**/

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

if (version_compare(JVERSION, '4.0', 'lt')) {
	JHtml::_('behavior.framework', true);
}

class JFormFieldAsset extends JFormField {
	protected $type = 'Asset';

	protected function getInput() {
    	// get the handler for the back-end document
		$doc = JFactory::getDocument();
		// include the prefixfree for less work with CSS code
		$doc->addScript(JURI::root().$this->element['path'].'prefixfree.js');
		// include the back-end styles
		$doc->addStyleSheet(JURI::root().$this->element['path'].'style.css');

		if (version_compare(JVERSION, '4.0', 'ge')) {
			$doc->addStyleSheet(JURI::root().$this->element['path'].'style_j4.css');
		}
		// include the back-end scripts
		if (version_compare(JVERSION, '4.0', 'ge')) {
			return '
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="'.JURI::root().$this->element['path'].'script_j4.js"></script>';
		} else {
			return '<script src="'.JURI::root().$this->element['path'].'script.js"></script>';
		}
	}
}

// EOF