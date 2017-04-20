(function($) {
  Drupal.behaviors.find_your_centrum = {
    attach: function(context, settings) {
	  $.fn.mystep2 = function(data) {
        console.log('mystep2');
      }
	  $.fn.mystep3 = function(data) {
        console.log('mystep3');
      }
	}
  }
 }(jQuery));