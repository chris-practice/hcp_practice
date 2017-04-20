(function($) {
  Drupal.behaviors.common_functions = {
    attach: function(context, settings) {
	  // Drupal.settings.common_functions.facet_settings an class array passed from module
	  // Iterating through every class
	  $.each(Drupal.settings.common_functions.facet_settings, function( index, value ) {
		// Hidding block from page
		$('.' + value).hide();
	  });
	  
	  // Search page pager
	  // Hidding all the rows at start
      jQuery('.pag-row').hide();
      var res_per_page = $('select#edit-items-per-page option:selected').val();
      var total_res = $('.pag-row').length;
      jQuery(".pag-row").each(function(index) {
        var clss = 'pag_row_n_' + index;
        jQuery(this).addClass(clss);
      });
      show_res_per_page(res_per_page);
      show_pagination(total_res, res_per_page);
      jQuery('.items_per_page').click(function() {
        var res_per_pag = $(this).val();
        var total_res = $('.pag-row').length;
        jQuery('.pag-row').hide();
		jQuery('.items_per_page').val(res_per_pag);
        show_res_per_page(res_per_pag);
        show_pagination(total_res, res_per_pag);
      });
      $("body").on("click", ".pagn", function(e) {
		// If pager item is alrady active do nothing
        if ($(this).hasClass('active')) {
		  e.preventDefault();
        } else {
          var n = $(this).attr('name');
          var res_per_page = $('select#edit-items-per-page option:selected').val();
          var pages = res_per_page * n;
          var str_pages = pages - res_per_page;
          jQuery('.pag-row').hide();
          for (i = str_pages; i < pages; i++) {
            jQuery('.pag_row_n_' + i).show();
          }
          // Remove all the active classes from pager elements
          $('.pagn').removeClass('active');
          // Add active class for the selected element
          $(this).addClass('active');
        }
      });
		
    }
  }
})(jQuery);

function show_res_per_page(res_per_page) {
  for (i = 0; i < res_per_page; i++) {
    jQuery('.pag_row_n_' + i).show();
  }
}

function show_pagination(total_res, res_per_page) {
  var numPages = Math.ceil(total_res / res_per_page);
  var pag_html = '';
  for (i = 1; i <= numPages; i++) {
    if (i == 1) {
      pag_html += '<span class="pagn active" name ="' + i + '">' + i + '</span>';
    } else {
      pag_html += '<span class="pagn" name ="' + i + '">' + i + '</span>';
    }
  }
  $('.search-pager').html(pag_html);
}