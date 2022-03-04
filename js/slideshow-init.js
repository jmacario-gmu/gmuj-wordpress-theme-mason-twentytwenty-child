jQuery(document).ready(function($) {
	// Begin the slide timer
		gmuj_set_slide_timer();

	// Enable swiping
		$(".gmuj-slide").swipe( {
			//Set left and right swipe functions
			swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
				gmuj_slide_back();
			},
			swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
				gmuj_slide_forward();
			},
			//Default threshold is 75px, set to 0 for demo so any distance triggers swipe
			threshold:75
		});
});
