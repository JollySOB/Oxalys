	//Variable initialization and constants
	// the $ prefix denotes a JQuery object
	var $FIRST_SLIDE = $("#slide1");
	var $LAST_SLIDE = $("#slide3");
	var $FIRST_INDICATOR = $(".carousel-indicators li:first-child");
	var $LAST_INDICATOR = $(".carousel-indicators li:last-child");
	var CAROUSEL_INDICATOR_SLIDE_ID_INDEX = 1;
	var $currentSlide = $FIRST_SLIDE;
	var $currentIndicator = $FIRST_INDICATOR;
	
	//Functions
	var updateHomeLink = function(currentSlide) {
			var newHomeLink= "#" + currentSlide.attr("id");
			$("#home-link").removeAttr('href');
			$("#home-link").attr("href", newHomeLink);
		}
	
	var slideContent = function(currentSlide) {
		currentSlide.children().slideDown(1000);
		currentSlide.children().attr("id", "active-content");
	}
	
	var clearPrevContent = function(currentSlide) {
		currentSlide.children().removeAttr("id");
		currentSlide.children().attr("style", "display: none");
	}
	
	var left_nav_logic = function() {
		
		$currentIndicator.removeClass("active");
		
		//Left navigation edge case
		if ($currentSlide.attr("id") == $FIRST_SLIDE.attr("id")) {
			$currentSlide.next().fadeOut();
			$currentSlide.fadeOut(600);
			//Why do I need to override an auto-generated (or so it seems) inline style with my own?
			clearPrevContent($currentSlide);
			$LAST_SLIDE.fadeIn(600);
			$currentSlide = $LAST_SLIDE;
			$LAST_INDICATOR.addClass("active");
			$currentIndicator = $LAST_INDICATOR;
		}
		else {
			$currentSlide.fadeOut(600);
			clearPrevContent($currentSlide);
			$currentSlide.prev().fadeIn(600);
			$currentSlide = $currentSlide.prev();
			$currentIndicator.prev().addClass("active");
			$currentIndicator = $currentIndicator.prev();
		}
		
		slideContent($currentSlide);
		updateHomeLink($currentSlide);
	}
	
	var right_nav_logic = function() {
	
		$currentIndicator.removeClass("active");
	
		//Right navigation edge case
		if ($currentSlide.attr("id") == $LAST_SLIDE.attr("id")) {
			$currentSlide.fadeOut(600);
			clearPrevContent($currentSlide);
			$FIRST_SLIDE.fadeIn(600);
			$currentSlide = $FIRST_SLIDE;
			$FIRST_INDICATOR.addClass("active");
			$currentIndicator = $FIRST_INDICATOR;
		}
		else {
			$currentSlide.fadeOut(600);
			$currentSlide.next().fadeIn(600);
			clearPrevContent($currentSlide);
			$currentSlide = $currentSlide.next();
			$currentIndicator.next().addClass("active");
			$currentIndicator = $currentIndicator.next();
		}
		
		slideContent($currentSlide);
		updateHomeLink($currentSlide);
		
	}
	
	//Carousel arrow click event handlers
	$("#left-nav").click(left_nav_logic);
	$("#right-nav").click(right_nav_logic);
	
	//Logic for switching slides via carousel indicators
	$(".carousel-indicators li").click(function() {
		var $destinationSlide = $("#slide" + $(this).attr("id").charAt(CAROUSEL_INDICATOR_SLIDE_ID_INDEX));
		$currentSlide.fadeOut(600);
		$destinationSlide.fadeIn(600);
		
		clearPrevContent($currentSlide);
		$currentSlide = $destinationSlide; 
		slideContent($currentSlide);
		updateHomeLink($currentSlide);
		
		$currentIndicator.removeClass("active");
		$(this).addClass("active");
		$currentIndicator = $(this);
	})
	