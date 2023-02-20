window.addEvent('domready', function() {
	document.getElements('.gkNspPM-Fit_2').each(function(module) {
		if(!module.hasClass('active')) {
			module.addClass('active');
		}
	});
});

// EOF