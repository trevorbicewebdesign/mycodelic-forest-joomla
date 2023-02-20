window.addEvent('domready', function() {
	document.getElements('.gkNspPM-Fit_3').each(function(module) {
		if(!module.hasClass('active')) {
			module.addClass('active');
		}
	});
});

// EOF