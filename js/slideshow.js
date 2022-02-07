function gmuj_slide_forward() {

	gmuj_slide_switch();

}

function gmuj_slide_back() {

	gmuj_slide_switch('back');

}

function gmuj_slide_switch(var_direction='forward') {

	//alert('switch slide '+var_direction);

	// Get active slide, next slide, and first slide
	var $active_slide = jQuery('.gmuj-slide-active');
	var $previous_slide = jQuery('.gmuj-slide-active').prev('.gmuj-slide');
	var $next_slide = jQuery('.gmuj-slide-active').next('.gmuj-slide');
	var $first_slide = jQuery('.gmuj-slideshow').children('.gmuj-slide').first();
	var $last_slide = jQuery('.gmuj-slideshow').children('.gmuj-slide').last();

	// Remove class from current active slide
	$active_slide.removeClass('gmuj-slide-active');

	if (var_direction=='forward') {
		// Make the next slide active. If there is no next slide, instead make the first slide again active
		if ($next_slide.length > 0) {
			// Use next slide
			$next_slide.addClass('gmuj-slide-active');
		} else {
			// Use first slide
			$first_slide.addClass('gmuj-slide-active');
		}		
	}

	if (var_direction=='back') {
		// Make the previous slide active. If there is no previous slide, instead make the last slide active
		if ($previous_slide.length > 0) {
			// Use previous slide
			$previous_slide.addClass('gmuj-slide-active');
		} else {
			// Use first slide
			$last_slide.addClass('gmuj-slide-active');
		}		
	}

}