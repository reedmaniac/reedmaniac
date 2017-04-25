
(function($) {
    "use strict"; // Start of use strict

	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a.page-scroll').click(function() {
	    $('.navbar-toggle:visible').click();
	});

})(jQuery); // End of use strict
