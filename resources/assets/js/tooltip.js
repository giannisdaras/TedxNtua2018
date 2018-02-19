$(document).ready(function() {

	$(document).on("mouseover", "[data-tooltip]", function() {

		var y = $(this)[0].getBoundingClientRect().top,
			wh = $(window).height(),
			elh = $(this).outerHeight()
		if(y + elh / 2 < wh / 2) {
			$(this).removeClass("tooltip-top").addClass("tooltip-bottom")
		} else {
			$(this).removeClass("tooltip-bottom").addClass("tooltip-top")
		}

	})

})