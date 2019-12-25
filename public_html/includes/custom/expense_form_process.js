jQuery( document ).ready(function() {
    jQuery( "#item_amount_1,#item_amount_2,#item_amount_3,#item_amount_4,#item_amount_5,#item_amount_6,#item_amount_7,#item_amount_8,#item_amount_9,#item_amount_10, #,#tax" ).keyup(function() {
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