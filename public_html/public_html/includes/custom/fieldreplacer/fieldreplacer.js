var fieldReplacer = new Class({
	formElements: [],
	initialize: function(formId, formArray) {
		
		var detectForm = $$("#userForm input[name='form[formId]'][value='"+formId+"']")[0];
		// Might need to stick something here in case there are two of the same form on a page
		// Probably won't come up often
		this.form 			= detectForm.getParent('form');
		this.formArray 		= formArray;	
		this.formElements 	= new Array();	
		this.formElements 	= this.form.getElements('input, textarea');
				
		this.form.addEvent('submit', 	function(el) {		
			this.formElements.each( function(element) {
				
				for (var key in this.formArray) {
					if (this.formArray.hasOwnProperty(key)) {
						if(element.id == key) {
							if( element.value!='') {
								this.toggleVal( element,  this.formArray[key]);
							}	
						}
					}
				
				}
			}, this);
		}.bind(this));
				
		this.formElements.each( function(element) {
			// alert(element.get('id'));
			for (var key in this.formArray) {
				   if (this.formArray.hasOwnProperty(key)) {
					if(element.id == key) {
						if( element.value=='') {
							this.toggleVal( element,  this.formArray[key]);
						}
						
						element.addEvent('focus', 	function(el) {
							this.toggleVal( element,  this.formArray[element.id]);
						
						}.bind(this));
						
						element.addEvent('blur', 	function(el) {
							this.toggleVal( element,  this.formArray[element.id]);
						
						}.bind(this));

					}
				}
			
			}
		}, this);
	},
	toggleVal: function (el, value) {
		if(el.value == '') {
			el.value = value;
		}
		else if(value == el.value){
			el.value = '';
		}
	}
});