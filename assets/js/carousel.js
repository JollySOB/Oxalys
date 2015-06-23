	//Variable initialization
	var $FIRST_SLIDE = $("#slide1");
	var $LAST_SLIDE = $("#slide3");
	var $currentSlide = $FIRST_SLIDE;

	//Left nav logic
	$("#left-nav").click(function() {
		$currentSlide.children().removeClass("active-content");
		if ($currentSlide.attr("id") == $FIRST_SLIDE.attr("id")) {
			$currentSlide.next().fadeOut();
			$currentSlide.fadeOut(600);
			$currentSlide.children().removeAttr("id");
			//Why do I need to override an auto-generated (or so it seems) inline style with my own?
			$currentSlide.children().attr("style", "display: none");
			$LAST_SLIDE.fadeIn(600);
			$currentSlide = $LAST_SLIDE;
		}
		else {
			$currentSlide.fadeOut();
			$currentSlide.children().removeAttr("id");
			$currentSlide.children().attr("style", "display: none");
			$currentSlide.prev().fadeIn(600);
			$currentSlide = $currentSlide.prev();
		}
		
		//Slide in currently visible content
		$currentSlide.children().slideDown(1000);
		$currentSlide.children().attr("id", "active-content");
		
		//Update home link check for way to remove duplication in right nav later
		var newHomeLink= "#" + $currentSlide.attr("id");
		$("#home-link").removeAttr('href');
		$("#home-link").attr("href", newHomeLink);
	});

	//Right nav logic
	$("#right-nav").click(function() {
		if ($currentSlide.attr("id") == $LAST_SLIDE.attr("id")) {
			$currentSlide.fadeOut(600);
			$currentSlide.children().removeAttr("id");
			$currentSlide.children().attr("style", "display: none");
			$FIRST_SLIDE.fadeIn(600);
			$currentSlide = $FIRST_SLIDE;
		}
		else {
			$currentSlide.fadeOut(600);
			$currentSlide.next().fadeIn(600);
			$currentSlide.children().removeAttr("id");
			$currentSlide.children().attr("style", "display: none");
			$currentSlide = $currentSlide.next();
		}
		
		//Slide in currently visible content
		$currentSlide.children().slideDown(1000);
		$currentSlide.children().attr("id", "active-content")
		
		//Update home link
		var newHomeLink= "#" + $currentSlide.attr("id");
		$("#home-link").removeAttr('href');
		$("#home-link").attr("href", newHomeLink);
		
	});
	