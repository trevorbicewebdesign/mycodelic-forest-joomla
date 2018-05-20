<?php
/**
* @file
* @brief    boxplus: a lightweight pop-up window engine for MooTools
* @author   Levente Hunyadi
* @version  0.9.4
* @remarks  Copyright (C) 2009-2011 Levente Hunyadi
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://hunyadi.info.hu/projects/boxplus
*/

/*
* boxplus: a lightweight pop-up window engine for MooTools
* Copyright 2011 Levente Hunyadi
*
* boxplus is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* boxplus is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with boxplus.  If not, see <http://www.gnu.org/licenses/>.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgSystemIlightbox extends JPlugin {
	
	function __construct( &$subject, $config ) {
		parent::__construct( $subject, $config );
	}

	
	function onBeforeRender() {
		$app = JFactory::getApplication();
		if( $app->isAdmin() ) {
			return;
		}
		
		//JHtml::_('jquery.framework');
		
		$document = JFactory::getDocument();
		$document->addScript(JURI::base(true).'/plugins/system/ilightbox/js/jquery.requestAnimationFrame.js');
		$document->addScript(JURI::base(true).'/plugins/system/ilightbox/js/jquery.mousewheel.js');
		$document->addScript(JURI::base(true).'/plugins/system/ilightbox/js/ilightbox.packed.js');
		
		$document->addStyleSheet(JURI::base(true).'/plugins/system/ilightbox/css/ilightbox.css');

		
	}

}