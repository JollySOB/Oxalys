//Variable initialization
var $FIRST_SLIDE = $("#slide1");
var $LAST_SLIDE = $("#slide3");
var $currentSlide = $("#slide1");

//Left nav logic
$("#left-nav").click(function() {
	$currentSlide.removeClass("active-slide");
	if ($currentSlide.attr("id") == $FIRST_SLIDE.attr("id")) {
		$LAST_SLIDE.addClass("active-slide");
		$currentSlide = $LAST_SLIDE;
	}
	else {
		$currentSlide.prev().addClass("active-slide");
		$currentSlide = $currentSlide.prev();
	}
});

//Right nav logic
$("#right-nav").click(function() {
	$currentSlide.removeClass("active-slide");
	if ($currentSlide.attr("id") == $LAST_SLIDE.attr("id")) {
		$FIRST_SLIDE.addClass("active-slide");
		$currentSlide = $FIRST_SLIDE;
	}
	else {
		$currentSlide.next().addClass("active-slide");
		$currentSlide = $currentSlide.next();
	}
	
});
