
function clipContent() {
	var siteWidth = window.getSize().x;
	//alert(siteWidth);
	if(siteWidth < 1004) {
		//alert("0");
		$$('#rt-clip')[0].setStyle('width', siteWidth + 'px');
		$$('#rt-clip')[0].setStyle('overflow', 'hidden');	
		// $$('#rt-main')[0].setStyle('background-position', '0px 100%');
	}
	else {
		//alert("1");
		$$('#rt-clip')[0].setStyle('width', siteWidth + 'px');
		$$('#rt-clip')[0].setStyle('overflow', 'hidden');	
	}
}
function fixMenu(ul_element, width) {
	// Snag the Parent Element
	var parent 		= ul_element.getParent('div');
	// Then grab all the li elements
	var liElements	= ul_element.getChildren('li');
	// Check how many there are
	var length 		= liElements.length;
	// If the user didn't provide the width, grab it from the parent element
	if(width==null) {
		width = parent.getSize().x;
	}
	else {
		ul_element.setStyle('width', (width)+"px");	
	}
	var currentWidth = 0;
	for(i=0;i<length;i++) {	
		// Measure the actual width of all the li elements and reset them to make sure we are measuring the root width
		liElements[i].setStyle('width', "auto");
		currentWidth = currentWidth + parseFloat(liElements[i].getSize().x);
	}
	// Lets keep that measurement for later
	var origWidth = parseInt(Math.round(currentWidth));
	currentWidth = width - origWidth;
	var liWidth = Math.floor(currentWidth / length);
	// Get the amount of padding to be placed on each element
	liWidth = parseInt(Math.floor(liWidth / 2));
	// Check how many pixels we have left over
	var leftoverpix = parseInt(width - origWidth) - (liWidth * 2 * length);
	for(i=0;i<length;i++) {
		// If there are leftover pixels, apply them to the left padding
		if(leftoverpix>0) {
			liElements[i].setStyle('padding-left', liWidth+1 + "px");
			leftoverpix--;
		}
		else {
			liElements[i].setStyle('padding-left', liWidth + "px");
		}
		// If there are leftover pixels, apply them to the right padding
		if(leftoverpix>0) {
			liElements[i].setStyle('padding-right', liWidth+1 + "px");
			leftoverpix--;
		}
		else {
			liElements[i].setStyle('padding-right', liWidth + "px");
		}	
		//liElements[i].setStyle('background', "red");
	}
	liElements[length-1].setStyle('background', "none");
	liElements[length-1].setStyle('border', "none");
}

function fixMainBottom() {
	// Fix the sidebars
	var modules 		= $$('#rt-mainbottom .rt-grid-12, #rt-mainbottom .rt-grid-6, #rt-mainbottom .rt-grid-4, #rt-mainbottom .rt-grid-3');
	// alert(modules.length);
	var size			= 1004 - ((modules.length-1) * 4);
	var width = Math.round(size/modules.length);
	for(i=0;i<modules.length;i++){
		modules[i].setStyle('width', width+"px");
	}
}
function clipContent() {
	var siteWidth = window.getSize().x;
	
	$$('#rt-clip')[0].setStyle('width', (siteWidth) + 'px');
	$$('#rt-clip')[0].setStyle('overflow', 'hidden');	
}
function contentAddBorder() {
	$$( "#rt-main > .rt-container" ).each( function(item, index) {
		
		var wrapper = new Element('div.rt-wrapper2').wraps( item );
		var wrapper2 = new Element('div.rt-wrapper').wraps( wrapper );
		var maincontainer = new Element('div.rt-maincontainer').wraps( wrapper2 );
		var container = new Element('div.rt-container').wraps( maincontainer );
		//alert('test');
	});
}
function setPageClasses() {
	if( $$('#rt-mainbody .item-page, #rt-mainbody .rt-blog')[0] ) {
		var template_container = $$('.rt-container');
		var custom_class = $$('#rt-mainbody .item-page, #rt-mainbody .rt-blog')[0].getProperty('class').replace(/item-page /, '').replace(/rt-blog /, '');
		if(custom_class) {
			for(i=0;i<template_container.length;i++) {
				template_container[i].getParent('div').addClass(custom_class);
			}
		}
	}
}

