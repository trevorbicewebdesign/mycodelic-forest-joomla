window.addEvent('domready', function(){
	var index = $$('#jformparamsdatatype')[0].selectedIndex;
	$$('select[id=jformparamscatid]').each(function(item, index) {
		item.setStyle('display','none');
	});		
	$$('select[id=jformparamscatid]')[index].setStyle('display', 'block');
	$$('#jformparamsdatatype')[0].addEvent('change', function(el){
		$$('select[id=jformparamscatid]').each(function(item, index) {
			item.getElements('option').each(function(item, index) {
				item.selected = '';
			});
			item.setStyle('display','none');
		});
		$$('select[id=jformparamscatid]')[$$('#jformparamsdatatype')[0].selectedIndex].setStyle('display', 'block');
	});
});