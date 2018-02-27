$(function() {

	$(document).on("mouseenter", "[data-tooltip]", function() {

		var y = $(this)[0].getBoundingClientRect().top,
			wh = $(window).height(),
			ww = $(window).width(),
			elh = $(this).outerHeight()
		/* enable only on < md screens */
		if(ww < 768 && y + elh / 2 < wh / 2) {
			$(this).removeClass("tooltip-top").addClass("tooltip-bottom")
		} else {
			$(this).removeClass("tooltip-bottom").addClass("tooltip-top")
		}

	})

})