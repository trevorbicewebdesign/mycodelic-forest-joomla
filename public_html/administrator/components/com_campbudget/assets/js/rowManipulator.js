// JavaScript Document
(function ($) {
  $.rowManipulator = function (el, options) {
    // To avoid scope issues, use 'base' instead of 'this'
    // to reference this class from internal events and functions.

    var base = this;
    base.$el = $(el);
    base.el = el;

    base.init = function () {
      base.$menu = base.$el;
      base.$parent = base.$el.parent();

      base.options = $.extend({}, $.rowManipulator.defaults, options);
      base.$table = base.$el.parents("table");

      base.$el.sortable({ revert: true });
      base.$table.find(".icon-move").click(function (element) {
        jQuery(element).draggable({
          connectToSortable: base.el,
          helper: "clone",
          revert: "invalid",
        });
      });
      base.$el
        .find("> tr input[type=text], > tr input[type=hidden], > tr textarea")
        .each(function (index, element) {
          var name = $(element).attr("name");
          //alert( base.$el.attr('id') );
          $(element).attr("name", base.$el.attr("id") + "[" + name + "][]");
        });

      base.$table.find(".removeItem").click(base.removeRow);
      base.$table.find(".addRow").click(function (element) {
        base.addNewRow($(element));
      });
      base.$table.find(".moveUp").click(base.moveRowUp);
      base.$table.find(".moveDown").click(base.moveRowDown);

      base.$table.find(".calculateValues").click(base.calculateValues);
      base.$table.find(".calculateTotal").click(base.calculateTotal);
    };
    base.calculateValues = function (element) {
      var parent = $(this).parent().parent();
      var quantity = $(parent).find("input[type=text].quantity").val();
      var rate = $(parent).find("input[type=text].rate").val();

      $(parent)
        .find("input[type=text].subtotal")
        .val((quantity * rate).toFixed(2));
    };
    base.calculateTotal = function (element) {
      var rows = $(this).closest("table").find("tbody tr");
      var subtotal = 0;
      $(rows).each(function (index, element) {
        subtotal += parseFloat(
          $(this).find("td").find("input[type=text].subtotal").val()
        );
      });
      $("#jform_total").val(subtotal.toFixed(2));
    };
    base.addNewRow = function (element) {
      var row = base.$el.find("> tr").eq(0).clone();

      $(row).find(".removeItem").click(base.removeRow);
      $(row).find(".moveUp").click(base.moveRowUp);
      $(row).find(".moveDown").click(base.moveRowDown);
      $(row).find("input").val("");
      $(row).find("textarea").val("");

      /*
			
			$(row).find('.item-id').attr(			'name', 'items[' + ($('table.table tbody tr').length+1) + '][id]');
			$(row).find('.item-name').attr(		'name', 'items[' + ($('table.table tbody tr').length+1) + '][name]');
			$(row).find('.item-description').attr(	'name', 'items[' + ($('table.table tbody tr').length+1) + '][description]');
			$(row).find('.item-quantity').attr(	'name', 'items[' + ($('table.table tbody tr').length+1) + '][quantity]');
			$(row).find('.item-rate').attr(		'name', 'items[' + ($('table.table tbody tr').length+1) + '][rate]');
			$(row).find('.item-price').attr(		'name', 'items[' + ($('table.table tbody tr').length+1) + '][price]');
			
			*/

      base.$el
        .find("> tr")
        .eq(base.$el.find("> tr").length - 1)
        .after(row);
      //$('table.table tbody tr').eq( ($('table.table tbody tr').length-1) ).find('.removeItem').click(removeRow);
    };
    base.removeRow = function (element) {
      if (!confirm("Are you sure you want to delete this item?")) {
        return false;
      }
      $(this).parent().parent().remove();
    };
    base.moveRowUp = function (element) {
      $(this).parent().parent().prev().before($(this).parent().parent());
    };
    base.moveRowDown = function (element) {
      $(this).parent().parent().next().after($(this).parent().parent());
    };
    base.init();
  };
  $.rowManipulator.defaults = {};
  $.fn.rowManipulator = function (options) {
    if (typeof options == "object") {
      return this.each(function (i) {
        new $.rowManipulator(this, options);
      });
    }
  };
})(jQuery);
