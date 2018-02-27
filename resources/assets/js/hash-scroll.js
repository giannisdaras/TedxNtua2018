$(function() {

	var navOffsetY = 68

	let scrollToHash = function(hash) {
		let target = $(hash)
		  
		if (target.length) {

			let off = target.offset().top - parseInt(target.css("padding-top"))

			if(off > navOffsetY) {
				$("header").addClass("scrolled")
			} else {
				$("header").removeClass("scrolled")
			}

			let	headerHeight = $("header").height() + 17

			$("html, body").animate({
				scrollTop: off - headerHeight
			}, 500)

		}
	}

	scrollToHash(location.hash)

	$(document).on("click", "a[href^='#']", function(e) {

		e.preventDefault()
		scrollToHash(this.hash)

	})

})