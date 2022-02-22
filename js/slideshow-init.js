jQuery(document).ready(function($) {
	// Begin the slide timer
		gmuj_set_slide_timer();

	// Enable swiping
		$(".gmuj-slide").swipe( {
			//Generic swipe handler for all directions
			swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
				if (direction=='left') {gmuj_slide_back();}
				if (direction=='right') {gmuj_slide_forward();}
			},
			//Default is 75px, set to 0 for demo so any distance triggers swipe
			threshold:75
		});

});
