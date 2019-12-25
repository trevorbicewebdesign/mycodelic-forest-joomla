jQuery( document ).ready(function() {
    var i = 1;
    while(jQuery( "#item_amount_"+i).length>0){
        console.log(i);
        jQuery( "#item_amount_"+i ).keyup(function() {
            var total = addAmountFields();
            jQuery("#item_total").val( total.toFixed(2) );
        });  
        i++;
    }
    jQuery( "#tax" ).keyup(function() {
        var total = addAmountFields();
        jQuery("#item_total").val( total.toFixed(2) );
    }); 
    
});
function addAmountFields(){
    var sum = 0;

    var i = 0;
    while( amount = parseFloat(jQuery( "#item_amount_"+i).val() ) ) {
        sum += parseFloat(jQuery( "#item_amount_"+i).val())?parseFloat(jQuery( "#item_amount_"+i).val()):0;
        i++;
    }

    sum += parseFloat(jQuery( "#tax").val())?parseFloat(jQuery( "#tax").val()):0;
    
    return sum;
}