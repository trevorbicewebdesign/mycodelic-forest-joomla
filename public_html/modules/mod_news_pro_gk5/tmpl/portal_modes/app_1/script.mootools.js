window.addEvent('domready', function() {
	document.getElements('.gkNspPM-App_1').each(function(module) {
		if(!module.hasClass('active')) {
			module.addClass('active');
		}
	});
});

// EOF