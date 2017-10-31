$(document).ready(function() {
	$(window).on('scroll', function() {

		var depth = $(this).scrollTop();
		var scrolled = false;

	    if(depth > 500 && scrolled == false ) {
	    	$('#hamburger').stop(true,true).removeClass('hamburger');
	    	$('#hamburger').stop(true,true).addClass('hamburger--scrolling');
	    	scrolled = true;
	    }

	    else {
	    	$('#hamburger').stop(true,true).addClass('hamburger');
	    	$('#hamburger').stop(true,true).removeClass('hamburger--scrolling');	    	
	    }


	});

})