var menuFixer = new Class({

	initialize: function(menuTarget) {
		
		this.menuTarget	= menuTarget;
		if( !$$(this.menuTarget)[0] ) {
			return;	
		}
		this.menu			= $$(this.menuTarget)[0];
		this.menuSize 		= Math.floor(this.menu.getSize().x);
		this.width 		= Math.floor(this.menu.getParent('.t3-mainnav ').getSize().x);
		this.origWidth		= this.menuSize;
		
		// alert(this.menuSize + " " + this.width + " - " + this.menu.getParent('div.rt-container').getSize().x);
		
		this.menuElements 	= this.menu.getElements('> li');
		
		this.menulength	= this.menuElements.length;
		this.origMenu		= new Array();
		
		this.initialWidth	= 0;
		this.adjustment 	= 0;
		this.measureWidths();
		//alert(this.origMenu);
		this.setWidths();
		window.addEvent('load', function(){
			//this.measureWidths();
			//this.setWidths();
		}.bind(this));
		window.addEvent('resize', function(){
			this.measureWidths();
			this.setWidths();
			
		}.bind(this));

	},
	measureWidths: function () {
		this.menuSize 	= Math.floor(this.menu.getSize().x);
		
		this.width 		= Math.floor(this.menu.getParent('.t3-mainnav').getSize().x);
		//alert(this.width);
		var counter = 0; 
		var dimensions = 0;
		this.menuElements.each(function (element, index) {
			//alert( this.menuElements[index].getComputedSize("totalWidth") + " " + element);
			dimensions = this.menuElements[index].getSize();
			this.initialWidth += dimensions.x;
			
			//dimensions = this.menuElements[index].getComputedSize();
			//this.initialWidth += dimensions.totalSize;
			
			//alert(thisWidth);
			if(!this.origMenu[counter]) {
				this.origMenu[counter] = dimensions;
			}
			
			counter++;
		}, this);
		
	},
	setWidths: function () {
		var difference 		= this.width - this.menuSize;
		this.adjustment 		= Math.round(difference / this.menulength);
		var modulus			= difference % this.menulength;
		var leftoverpix		= modulus;
		// alert(this.adjustment);
		var dimensions		= 0 ;
		this.menuElements.each(function(element, index) {

			//dimensions = element.getComputedSize();
			
			dimensions = this.menuElements[index].getSize();
			var elementwidth 	= dimensions.x;
			// var percent		= Math.round((elementwidth / this.menuSize) * 100);
			
			//element.setStyle('width', percent + '%');
			
			
			if(leftoverpix>0) {
				element.setStyle('width', elementwidth + this.adjustment - 1 + 'px');
				leftoverpix--;
			}
			else {
				element.setStyle('width', elementwidth + this.adjustment + 'px');
			}
			
		}, this);
	}
});
var footerFixer = new Class({
	initialize: function(footerTarget) {
		this.footer			= footerTarget;
		this.minHeight		= parseInt(this.footer.getSize().y);
		this.setSizes();
		this.adjust();
		window.addEvent('resize', function(){
			this.setSizes();
			this.adjust();
		}.bind(this));
	},
	setSizes: function() {
		this.bodysize		= parseInt($$('body')[0].getSize().y);
		this.docsize		= parseInt($$('#rt-clip')[0].getSize().y);
		this.widowsize		= parseInt(window.getSize().y);
		this.footerpadding	= parseInt(this.footer.getStyle('padding-top').match(/[0-9]?[0-9]?[0-9]/));
		this.footersize		= parseInt(this.footer.getSize().y - this.footerpadding);
	},
	adjust: function() {
		this.difference = this.widowsize - this.docsize;
		var newSize = this.footersize + this.difference;
		if(newSize <= this.minHeight) {
			this.footer.setStyle('height', this.minHeight+'px');
		}
		else {
			this.footer.setStyle('height', newSize+'px');
		}
	}
});


function fixSidebars() {
	// Fix the sidebars
	var sidebars = $$('#rt-main .rt-container .rt-grid-3');
	var modules = 0;
	for(i=0;i<sidebars.length;i++){
		if(sidebars[i].getElement('#rt-sidebar-b')) {
			sidebars[i].addClass('sidebar-b');
			modules = modules + 5;
		}
		else if(sidebars[i].getElement('#rt-sidebar-a')) {
			sidebars[i].addClass('sidebar-a');
			modules = modules + 1;
		}
	}
	// Only sidebar-a is enabled
	if(modules==1) {
		$$('#rt-main .rt-container .sidebar-a')[0].setStyle('left', '-'+ ($$('#rt-main .rt-container .rt-grid-9')[0].getSize().x )+'px');
		$$('#rt-main .rt-container .rt-grid-9')[0].setStyle('left', ($$('#rt-main .rt-container .sidebar-a')[0].getSize().x )+'px');
	}
	// Only sidebar-b is enabled
	if(modules==5) {
		$$('#rt-main .rt-container .rt-grid-9')[0].setStyle('float', 'left');
	}
	else if(modules==6) {
		$$('.sidebar-b')[0].setStyle('float', 'right');
		var sidebarwidth = $$('.sidebar-a')[0].getSize().x;
		var mainwidth = $$('#rt-main .rt-container .rt-grid-6')[0].getSize().x;
		$$('#rt-main .rt-container .rt-grid-6')[0].setStyle('left', sidebarwidth+'px');
		$$('.sidebar-a')[0].setStyle('margin-left', "-"+mainwidth+'px');
	}
}
function fixTopMenu(ul_element, width) {
	
	//alert(width);
	var parent 		= ul_element.getParent('div');
	var liElements		= ul_element.getChildren('li');
	var length 		= liElements.length;
	var currentWidth 	= 0;
	
	for(i=0;i<length;i++) {
		liElements[i].setStyle('font-family', "'PT Sans Narrow', sans-serif");
		currentWidth = currentWidth + parseFloat(liElements[i].getSize().x);
	}
	// Lets keep that measurement for later
	var origWidth = parseInt(Math.round(currentWidth));
	// alert(origWidth);
	currentWidth = width - origWidth;
	var liWidth = Math.floor(currentWidth / length);
	// Get the amount of padding to be placed on each element
	liWidth = parseInt(Math.floor(liWidth / 2));
	// Check how many pixels we have left over
	var leftoverpix = parseInt(width - origWidth) - (liWidth * 2 * length);
	liElements[0].addClass('first');
	for(i=0;i<length;i++) {
		// If there are leftover pixels, apply them to the left padding
		if(leftoverpix>0) {
			liElements[i].getElement('span').setStyle('padding-left', liWidth+1 + "px");
			leftoverpix--;
		}
		else {
			liElements[i].getElement('span').setStyle('padding-left', liWidth + "px");
		}
		// If there are leftover pixels, apply them to the right padding
		if(leftoverpix>0) {
			liElements[i].getElement('span').setStyle('padding-right', liWidth+1 + "px");
			leftoverpix--;
		}
		else {
			liElements[i].getElement('span').setStyle('padding-right', liWidth + "px");
		}	
		if(liElements[i].hasClass('active')) {
			if(liElements[(i+1)]) {
				liElements[(i+1)].getElement('a').addClass('nexttoactive');
			}
		}	
	}
	// liElements[length-1].setStyle('border-right', "1px solid red");
}
var responsiveSubnav = new Class({
	initialize: function(menuTarget) {		
		this.menuTarget		= menuTarget;
		this.menu				= $$(this.menuTarget)[0];
		this.width 			= new Array();
		this.paddingWidth		= 60;
		this.marginWidth		= 0;
		this.newMarginWidth		= 0;
		//this.borderWidth		= 1;
		
		if( this.menu ) {
			this.contentWidth		= this.menu.getParent('.gkTabsWrap').getComputedSize();
			this.menuWidth			= this.menu.getComputedSize();
			
			this.totalWidth	= 0;
			var i = 0;
			
			this.itemNums 		= this.menu.getElements('li').length;
			//var totalMargins 	= ( (this.itemNums - 1 ) * this.marginWidth);
			//alert( totalMargins );
			
			origMenuWidth		= this.menuWidth.totalWidth;
			
			this.newMarginWidth = this.marginWidth;
			
			this.menu.getElements('li').each(function(element) {
				
				this.width[i] = element.getComputedSize();
				//alert( this.width[i].width + " " + this.width[i].totalWidth );
				//this.paddingWidth = this.width[i].totalWidth - this.width[i].width;
				//alert( this.width[i].width + " " + this.paddingWidth + " " + this.marginWidth );
				this.totalWidth += this.width[i].totalWidth + this.paddingWidth + this.newMarginWidth;
				
				if( i >= (this.itemNums - 1)) {
					this.newMarginWidth = 0;
				}
				element.getElements('> *')[0].setStyle('width', (this.width[i].totalWidth + this.paddingWidth + this.newMarginWidth) + "px");

				i++;
			
			}.bind(this));
			
			this.totalWidth = this.totalWidth - this.marginWidth;
			
			window.addEvent('domready', function(){
				this.adjustStuff();
			}.bind(this));
			window.addEvent('resize', function(){
				this.adjustStuff();
			}.bind(this));
		}
	},
	adjustStuff: function () {
		this.contentWidth		= this.menu.getParent('.gkTabsWrap').getComputedSize();
		this.menuWidth			= this.menu.getComputedSize();
		i = 0;

		// alert( this.totalWidth + " " + this.contentWidth.totalWidth);
		//if( ( this.totalWidth + ( (this.itemNums - 1) * this.marginWidth ) ) >= ( this.contentWidth.totalWidth )) {
		if( ( this.totalWidth ) >= ( this.contentWidth.totalWidth - 8 )) {
			this.menu.addClass("mobile");
			this.menu.getElements('li').each(function(element) {
				var itemPercent 	= ( ( this.width[i].totalWidth + this.paddingWidth ) / this.totalWidth)*100;
				
				element.setStyle("width", itemPercent+"%");
				
				var spanDim		= element.getElements('span')[0].getComputedSize();
				var elDim			= element.getComputedSize();
				//alert('test');
				if((spanDim.totalWidth + 20) >= (( (elDim.totalWidth) /100)* (this.contentWidth.totalWidth))) {
					if(this.menu.hasClass("mobile") && this.menu.hasClass("smallfont")) {
					// if( this.menu.hasClass("mobile") ) {
						this.menu.addClass("stacked")
					}
					else {
						this.menu.removeClass("stacked");	
					}
					this.menu.addClass("smallfont");
					//alert(spanDim.totalWidth + " " + ( (elDim.totalWidth/100)* this.contentWidth.totalWidth));
				}
				else {
					//this.menu.removeClass("smallfont");
					this.menu.removeClass("stacked");
				}
				//alert(itemPercent.toFixed(3));
				i++;
			}.bind(this));
		}
		else if( this.totalWidth < this.contentWidth.totalWidth) {
			this.menu.removeClass("mobile");
			
			//this.menu.addClass("smallfont");
			this.menu.getElements('li').each(function(element) {
				element.set('style', '');
				var spanDim		= element.getElements('span')[0].getComputedSize();
				var elDim			= element.getComputedSize();	
				if( (spanDim.totalWidth + 20 ) >= (( (elDim.totalWidth) /100)* (this.contentWidth.totalWidth))) {
					if(this.menu.hasClass("mobile") && this.menu.hasClass("smallfont")) {
					//if( this.menu.hasClass("mobile") ) {
						this.menu.addClass("stacked")
					}
					else {
						this.menu.removeClass("stacked");	
					}
					this.menu.addClass("smallfont");
					//alert(spanDim.totalWidth + " " + ( (elDim.totalWidth/100)* this.contentWidth.totalWidth));
				}
				else {
					this.menu.removeClass("smallfont");
					this.menu.removeClass("stacked");
				}
				
			}.bind(this));
		}
		
	}
});
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

