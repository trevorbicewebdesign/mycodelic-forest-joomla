
jQuery( document ).ready(function() {
    /*
     jQuery( "#item_amount_1,#item_amount_2,#item_amount_3,#item_amount_4" ).change(function() {
         var total = addAmountFields();
         jQuery("#item_total").val(  total.toFixed(2) );
         //jQuery(this).val(total.toFixed(2));
     });
*/
     jQuery( "#item_amount_1,#item_amount_2,#item_amount_3,#item_amount_4,#tax" ).keyup(function() {
         var total = addAmountFields();
         jQuery("#item_total").val( total.toFixed(2) );
     });
});
function addAmountFields(){
    var sum = 0;
    
    sum += parseFloat(jQuery( "#item_amount_1").val())?parseFloat(jQuery( "#item_amount_1").val()):0;
    sum += parseFloat(jQuery( "#item_amount_2").val())?parseFloat(jQuery( "#item_amount_2").val()):0;
    sum += parseFloat(jQuery( "#item_amount_3").val())?parseFloat(jQuery( "#item_amount_3").val()):0;
    sum += parseFloat(jQuery( "#item_amount_4").val())?parseFloat(jQuery( "#item_amount_4").val()):0;
    sum += parseFloat(jQuery( "#tax").val())?parseFloat(jQuery( "#tax").val()):0;
    
    return sum;
}