jQuery(document).ready(function ($) {
$(window).on('resize', function() {
    if ( $(window).width() > 992) { 
	    x = $(".benefits").outerHeight();
	    // console.log (x);
	    $(".no-title").css("height", x);
    }
    else {
  		$(".no-title").css("height", "auto");
	}
}).trigger('resize');
});