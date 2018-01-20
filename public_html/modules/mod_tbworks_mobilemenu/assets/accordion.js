/* Trevor Bice Webdesign */
/* (C) 2013 webdesign.trevorbice.com */
var worksAccordion = new Class({
    initialize: function (togglers, elements, options) {
        this.setOptions({
            open: 				'first',
            allowMultipleOpen: 	false,
			initiallyOpen: 		1,
            transition: 		Fx.Transitions.linear,
            duration: 			400,
			onStart: function(el) {
				// Set the animation variable, this is set while the element animates
				var myindex = this.elements.indexOf(el);
				this.elementAnimated[myindex] = 1;		
				//$$('#debug #animated')[0].set('html', this.elementAnimated);
			}.bind(this),
			onComplete: function(el) {
				// Restore the animation variable, this is set while the element animates
				var myindex = this.elements.indexOf(el);
				this.elementAnimated[myindex] = 0;
				//$$('#debug #animated')[0].set('html', this.elementAnimated);				
			}.bind(this)
        }, options);
        this.togglers = togglers;
        this.elements = elements;
        this.elementFx = [];
        this.elementVisible = [];
		this.elementAnimated = [];
		this.animationInProgress = false;
		
        this.togglers.each(function (tog, i) {
			this.elementAnimated[i] = 0;
			this.elementVisible[i]	= 0;
            tog.addEvent('click', function (el) {	
				// Only activate if the user has allowed multiple open
				if (!this.options.allowMultipleOpen) {
					this.elementVisible.each(function(item,index) {
						if( this.elementVisible[index]==1 && i!=index ) {
							this.elementFx[index].cancel();
							this.slideOut(index);
						}
					}, this);
				}
				this.toggle(i);
            }.bind(this))
        }, this);

        this.elements.each(function (el, i) {
			// Activate the slide fx
            this.elementFx[i] = new Fx.Slide(el, this.options);
			// Only activate if the user has allowed multiple open	
            if (!(this.options.allowMultipleOpen && this.options.open == 'all')) {
				 this.hide(i);	
			}
        }, this);
        if (this.options.open == 'first')(function () {
            this.slideIn(0);
        }).delay(1, this)
    },
    toggle: function (i) {	
	
		// Disable toggle on this element if its animating to keep everything synched
		if(this.elementAnimated[i]==0) {
			// nifty method to toggle
			this.elementVisible[i] = (this.elementVisible[i] + 1) % 2;
			// toggle the active class
			if( this.elementVisible[i] == 1 ) {
				this.togglers[i].addClass('active');
			}
			else {
				this.togglers[i].removeClass('active');
			}	
			// Activate the slide toggle
			this.elementFx[i].toggle();
		}
		return true;
    },
    slideIn: function (i) {	
		this.elementVisible[i] = 1;	
		this.togglers[i].addClass('active');
		this.elementFx[i].slideIn().chain(function () {
		}.bind(this));
		return true;
    },
    slideOut: function (i) {	
		this.elementVisible[i] = 0;
		this.togglers[i].removeClass('active');
		this.elementFx[i].slideOut().chain(function() {
		}.bind(this));
		return true;
		//}
    },
    show: function (i) {    
		this.elementVisible[i] = 1;  
		this.togglers[i].addClass('active'); 
        this.elementFx[i].show();
		return true;
    },
    hide: function (i) {     
		this.elementVisible[i] = 0;  
		this.togglers[i].removeClass('active');
        this.elementFx[i].hide().chain(function () {
		});
		return true;
    }
});
worksAccordion.implement(new Options);