jQuery(document).ready(function($) {

  var windowSize = $(window).width();
  $(window).on('resize', function(){
    windowSize = $(window).width();
  });

	jQuery(document).find('.gkNspPM-Fit_1').each(function(i, module) {
		module = jQuery(module);

    // Equal Height
		var ehArray = ehArray2 = [],
    i = 0;

    if (windowSize >= 768) {
      $('.gkNspPM-Fit_1 .equal-height').each (function(){
        var $ehc = $(this);
        if ($ehc.has ('.gkNspPM-Fit_1 .equal-height')) {
          ehArray2[ehArray2.length] = $ehc;
        } else {
          ehArray[ehArray.length] = $ehc;
        }
      });

      for (i = ehArray2.length -1; i >= 0; i--) {
        ehArray[ehArray.length] = ehArray2[i];
      }

      var equalHeight = function() {
        for (i = 0; i < ehArray.length; i++) {
          var $cols = ehArray[i].children().filter('.col'),
            maxHeight = 0,
            equalChildHeight = ehArray[i].hasClass('equal-height-child');

          // reset min-height
          if (equalChildHeight) {
            $cols.each(function(){$(this).children().first().css('min-height', 0)});
          } else {
            $cols.css('min-height', 0);
          }
          $cols.each (function() {
            maxHeight = Math.max(maxHeight, equalChildHeight ? $(this).children().first().innerHeight() : $(this).innerHeight());
          });
          if (equalChildHeight) {
            $cols.each(function(){$(this).children().first().css('min-height', maxHeight)});
          } else {
            $cols.css('min-height', maxHeight);
          }
        }
        // store current size
        $('.gkNspPM-Fit_1 .equal-height > .col').each (function(){
          var $col = $(this);
          $col.data('old-width', $col.width()).data('old-height', $col.innerHeight());
        });
      };

      equalHeight();

      // monitor col width and fire equalHeight
      setInterval(function() {
        $('.gkNspPM-Fit_1 .equal-height > .col').each(function(){
          var $col = $(this);
          if (($col.data('old-width') && $col.data('old-width') != $col.width()) ||
              ($col.data('old-height') && $col.data('old-height') != $col.innerHeight())) {
            equalHeight();
            // break each loop
            return false;
          }
        });
      }, 500);
    }
	});
});

// EOF