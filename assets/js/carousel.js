	//Variable initialization and constants
	// the $ prefix denotes a JQuery object
	var $FIRST_SLIDE = $("#slide1");
	var $LAST_SLIDE = $("#slide3");
	var $FIRST_INDICATOR = $(".carousel-indicators li:first-child");
	var $LAST_INDICATOR = $(".carousel-indicators li:last-child");
	var CAROUSEL_INDICATOR_SLIDE_ID_INDEX = 1;
	var FADE_SPEED = 500;
	var FIRST_ITERATION = 1;
	var $currentSlide = $FIRST_SLIDE;
	var $currentIndicator = $FIRST_INDICATOR;
	
	var slideContent = function(currentSlide) {
		currentSlide.children().slideDown(1000);
		currentSlide.children().attr("id", "active-content");
	}
	
	var clearPrevContent = function(currentSlide) {
		currentSlide.children().removeAttr("id");
		//To override auto generated block display style
		currentSlide.children().attr("style", "display: none");
	}
	
	var left_nav_logic = function() {
		
		$currentIndicator.removeClass("active");
		
		//Left navigation edge case
		if ($currentSlide.attr("id") == $FIRST_SLIDE.attr("id")) {
			$currentSlide.next().fadeOut(100);
			$currentSlide.fadeOut(FADE_SPEED);
			clearPrevContent($currentSlide);
			$LAST_SLIDE.fadeIn(FADE_SPEED);
			$currentSlide = $LAST_SLIDE;
			$LAST_INDICATOR.addClass("active");
			$currentIndicator = $LAST_INDICATOR;
		}
		else {
			$currentSlide.prev().fadeIn(FADE_SPEED);
			$currentSlide.fadeOut(FADE_SPEED);
			clearPrevContent($currentSlide);
			$currentSlide = $currentSlide.prev();
			$currentIndicator.prev().addClass("active");
			$currentIndicator = $currentIndicator.prev();
		}
		
		slideContent($currentSlide);
	}
	
	var right_nav_logic = function() {
	
		$currentIndicator.removeClass("active");
	
		//Right navigation edge case
		if ($currentSlide.attr("id") == $LAST_SLIDE.attr("id")) {
			$FIRST_SLIDE.fadeIn(FADE_SPEED);
			$currentSlide.fadeOut(FADE_SPEED);
			clearPrevContent($currentSlide);
			$currentSlide = $FIRST_SLIDE;
			$FIRST_INDICATOR.addClass("active");
			$currentIndicator = $FIRST_INDICATOR;
		}
		else {
			$currentSlide.next().fadeIn(FADE_SPEED);
			$currentSlide.fadeOut(FADE_SPEED);
			clearPrevContent($currentSlide);
			$currentSlide = $currentSlide.next();
			$currentIndicator.next().addClass("active");
			$currentIndicator = $currentIndicator.next();
		}
		
		slideContent($currentSlide);	
	}
	
	//Carousel arrow click event handlers
	$("#left-nav").click(left_nav_logic);
	$("#right-nav").click(right_nav_logic);
	$("#right-nav-ie").click(right_nav_logic);
	
	//Logic for switching slides via carousel indicators
	$(".carousel-indicators li").click(function() {
		var $destinationSlide = $("#slide" + $(this).attr("id").charAt(CAROUSEL_INDICATOR_SLIDE_ID_INDEX));
		if (!$(this).hasClass('active')) {
			//Try to find a better solution when I have time
			if (FIRST_ITERATION == 1) {
				$("#slide2").attr("style", "display: none");
				FIRST_ITERATION = 0;
			}
			$currentSlide.fadeOut(FADE_SPEED);
			$destinationSlide.fadeIn(FADE_SPEED);
			
			clearPrevContent($currentSlide);
			$currentSlide = $destinationSlide; 
			slideContent($currentSlide);
			
			$currentIndicator.removeClass("active");
			$(this).addClass("active");
			$currentIndicator = $(this);
		}
	})
	
	//Footer slide logic
	
	