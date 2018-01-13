$(document).ready(function() {

	var navOffsetY = 68

	/* IMPORTANT: Use debounce with scroll events for better performance */

	$(window).on("scroll", _.debounce(function() {

		if($(".navbar-toggler").hasClass("collapsed")) {

			if($(window).scrollTop() > navOffsetY) {

				$("body > header, main > article").addClass("scrolled")

			} else {

				$("header.scrolled, article.scrolled").removeClass("scrolled")

			}

		}

	}))

})