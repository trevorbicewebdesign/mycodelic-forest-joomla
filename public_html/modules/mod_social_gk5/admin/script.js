/*
 *
 * Main Social GK5 back-end script
 *
 */

(function($) {

	// DOMContentLoaded event
	$(window).on('load', function() {
		// initialize the configuration manager
		var configManager = new SocialGK5ConfigManager();
		
		// check Joomla! version and add suffix
		if (parseFloat((jQuery('#gk_about_us').data('jversion')).substr(0, 3)) >= '4') {
	    jQuery('#module-form').addClass('j32 j4');
	  } else if (parseFloat((jQuery('#gk_about_us').data('jversion')).substr(0, 3)) >= '3.2') {
	    jQuery('#module-form').addClass('j32 j32-least');
	    jQuery('.j32 .switcher').addClass('btn-group btn-group-yesno');

			// Turn radios into btn-group
			jQuery('.radio.btn-group label').addClass('btn');

			jQuery('fieldset.btn-group').each(function () {
				// Handle disabled, prevent clicks on the container, and add disabled style to each button
				if (jQuery(this).prop('disabled')) {
					jQuery(this).css('pointer-events', 'none').off('click');
					jQuery(this).find('.btn').addClass('disabled');
				}
			});

			jQuery('.btn-group label:not(.active)').off().unbind().click(function ()
			{
				var label = jQuery(this);
				var input = jQuery('#' + label.attr('for'));

				if (!input.prop('checked'))
				{
					label.closest('.btn-group').find('label').removeClass('active btn-success btn-danger btn-primary');

					if (label.closest('.btn-group').hasClass('btn-group-reversed'))
					{
						if (input.val() == '')
						{
							label.addClass('active btn-primary');
						} else if (input.val() == 0)
						{
							label.addClass('active btn-success');
						} else
						{
							label.addClass('active btn-danger');
						}
					} else
					{
						if (input.val() == '')
						{
							label.addClass('active btn-primary');
						} else if (input.val() == 0)
						{
							label.addClass('active btn-danger');
						} else
						{
							label.addClass('active btn-success');
						}

					}
					input.prop('checked', true);
					input.trigger('change');
				}
			});
			jQuery('.btn-group input[checked=checked]').each(function ()
			{
				var $self = jQuery(this);
				var attrId = $self.attr('id');

				if ($self.parent().hasClass('btn-group-reversed'))
				{
					if ($self.val() == '')
					{
						jQuery('label[for=' + attrId + ']').addClass('active btn-primary');
					} else if ($self.val() == 0)
					{
						jQuery('label[for=' + attrId + ']').addClass('active btn-success');
					} else
					{
						jQuery('label[for=' + attrId + ']').addClass('active btn-danger');
					}
				} else
				{
					if ($self.val() == '')
					{
						jQuery('label[for=' + attrId + ']').addClass('active btn-primary');
					} else if ($self.val() == 0)
					{
						jQuery('label[for=' + attrId + ']').addClass('active btn-danger');
					} else
					{
						jQuery('label[for=' + attrId + ']').addClass('active btn-success');
					}
				}
			});
	  }
		
		// initialize the main class
		var settings = new SocialGK5Settings();
		jQuery('.j32-least .input-pixels').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-prepend\">" + el.parent().html() + "<span class=\"add-on\">px</span></div>");});
		jQuery('.j32-least .input-ms').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-prepend\">" + el.parent().html() + "<span class=\"add-on\">ms</span></div>");});
		jQuery('.j32-least .input-percents').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-prepend\">" + el.parent().html() + "<span class=\"add-on\">%</span></div>");});
		jQuery('.j32-least .input-minutes').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-prepend\">" + el.parent().html() + "<span class=\"add-on\">minutes</span></div>");});
		jQuery('.j32-least .input-gplus').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-prepend\"><span class=\"add-on\">http://plus.google.com/</span>" + el.parent().html() + "</div>");});
		jQuery('.j4 .input-pixels').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-group\">" + el.parent().html() + "<span class=\"input-group-addon input-group-text\">px</span></div>");});
		jQuery('.j4 .input-ms').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-group\">" + el.parent().html() + "<span class=\"input-group-addon input-group-text\">ms</span></div>");});
		jQuery('.j4 .input-percents').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-group\">" + el.parent().html() + "<span class=\"input-group-addon input-group-text\">%</span></div>");});
		jQuery('.j4 .input-minutes').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-group\">" + el.parent().html() + "<span class=\"input-group-addon input-group-text\">minutes</span></div>");});
		jQuery('.j4 .input-gplus').each(function(i, el){el = jQuery(el); el.parent().html("<div class=\"input-group\"><span class=\"input-group-addon input-group-text\">http://plus.google.com/</span>" + el.parent().html() + "</div>");});
		jQuery('#config_manager_form').parent().css('margin-left', '0px');
	});

	/*
	 *
	 * Main class
	 *
	 */
	function SocialGK5Settings() {
	 	this.init();
	}

	SocialGK5Settings.prototype.init = function() {
		// binding
		var $this = this;
		// columns/rows view
		var merge = jQuery('#jform_params_twitter_columns-lbl').parent();
		var rows = jQuery('#jform_params_twitter_rows-lbl').parent();
		var columns = merge.html();
		merge.css('display', 'none');
		rows.html(rows.html() + columns);
		merge.remove();
		
		// current mode
		var sourceMode = jQuery('#jform_params_module_data_source').val();
		if(sourceMode == 'fb') {
			jQuery('#jform_params_module_data_source').attr('class', '');
			jQuery('#jform_params_module_data_source').addClass('form-control custom-select fb');
			jQuery('#myTabTabs li a').each(function(index, item){
				item = jQuery(item);
				if(item.html().indexOf('Twitter') >= 0 || item.html().indexOf('Google') >= 0){
					item.parent().addClass('hidden');
				} else {
					item.parent().removeClass('hidden');
				}
			});
		} else if (sourceMode == 'gplus') {
			jQuery('#jform_params_module_data_source').attr('class', '');
			jQuery('#jform_params_module_data_source').attr('gplus', '');
			jQuery('#myTabTabs li a').each(function(index, item){
				item = jQuery(item);
				if(item.html().indexOf('Facebook') >= 0 || item.html().indexOf('Twitter') >= 0){
					item.parent().addClass('hidden');
				} else {
					item.parent().removeClass('hidden');
				}
			});
		} else {
			jQuery('#jform_params_module_data_source').attr('class', '');
			jQuery('#jform_params_module_data_source').addClass('form-control custom-select twitter');
			jQuery('#myTabTabs li a').each(function(index, item){
				item = jQuery(item);
				if(item.html().indexOf('Facebook') >= 0 || item.html().indexOf('Google') >= 0){
					item.parent().addClass('hidden');
				} else {
					item.parent().removeClass('hidden');
				}
			});
		}
		
		// hide one of unnecessary tabs
		jQuery('#jform_params_module_data_source').on('change blur', function() {
			var sourceMode = jQuery('#jform_params_module_data_source').val();
			if(sourceMode == 'fb') {
				jQuery('#jform_params_module_data_source').attr('class', '');
				jQuery('#jform_params_module_data_source').addClass('form-control custom-select fb');
				jQuery('#myTabTabs li a').each(function(index, item){
					item = jQuery(item);
					if(item.html().indexOf('Twitter') >= 0 || item.html().indexOf('Google') >= 0){
						item.parent().addClass('hidden');
					} else {
						item.parent().removeClass('hidden');
					}
				});
			} else if (sourceMode == 'gplus') {
				jQuery('#jform_params_module_data_source').attr('class', '');
				jQuery('#jform_params_module_data_source').addClass('form-control custom-select gplus');
				jQuery('#myTabTabs li a').each(function(index, item){
					item = jQuery(item);
					if(item.html().indexOf('Facebook') >= 0 || item.html().indexOf('Twitter') >= 0){
						item.parent().addClass('hidden');
					} else {
						item.parent().removeClass('hidden');
					}
				});
			} else {
				jQuery('#jform_params_module_data_source').attr('class', '');
				jQuery('#jform_params_module_data_source').addClass('form-control custom-select twitter');
				jQuery('#myTabTabs li a').each(function(index, item){
					item = jQuery(item);
					if(item.html().indexOf('Facebook') >= 0 || item.html().indexOf('Google') >= 0){
						item.parent().addClass('hidden');
					} else {
						item.parent().removeClass('hidden');
					}
				});
			}
		});
	} 

	function SocialGK5ConfigManager() {
		this.init();
	}

	SocialGK5ConfigManager.prototype.init = function() {
		// create additional variable to avoid problems with the scopes
		$obj = this;
		// button load
		jQuery('#config_manager_load').click( function(e) {
			e.stopPropagation();
			e.preventDefault();
		    $obj.operation('load');
		});
		// button save
		jQuery('#config_manager_save').click( function(e) {
			e.stopPropagation();
			e.preventDefault();
		   	$obj.operation('save');
		});
		// button delete
		jQuery('#config_manager_delete').click( function(e) {
			e.stopPropagation();
			e.preventDefault();
		   	$obj.operation('delete');
		});
	}

	SocialGK5ConfigManager.prototype.operation = function(type) {

		var current_url = window.location;
		// check if the current url has no hashes
		if((current_url + '').indexOf('#', 0) === -1) {
			// if no - put the variables
		    current_url = current_url + '&gk_module_task='+type+'&gk_module_file=' + document.id('config_manager_'+type+'_filename').get('value');    
		} else {
			// if the url has hashes - remove the hash 
		    current_url = current_url.substr(0, (current_url + '').indexOf('#', 0) - 1);
		    // and put the variables
		    current_url = current_url + '&gk_module_task='+type+'&gk_module_file=' + document.id('config_manager_'+type+'_filename').get('value');
		}
		// redirect to the url with variables
		window.location = current_url;
	}

})(jQuery);