$(function() {

	/*
		speed: The speed/duration of the effect in milliseconds
		scrollPercentage: The scroll point after which the effect begins
	*/
	var speed = 250, scrollPercentage = 0.56

	$(window).on("scroll", _.debounce(function() {

		let wh = $(window).height()

		$(".typewriter:not(.typed):not(.typing)").each(function() {

			let scrollHeight = this.getBoundingClientRect().top
			if(scrollHeight <= scrollPercentage * wh) {
				/* trigger the effect */
				$(this).addClass("typing").after('<span class="cursor">|</span>')
				let i = 0, txt = $(this).attr("data-text"), el = this
				let timer = window.setInterval(function() {
					if(i < txt.length) {
						el.innerHTML += txt.charAt(i++)
					} else {
						$(el).parent().find(".cursor").remove()
						$(el).removeClass("typing").addClass("typed")
						clearInterval(timer)
					}
				}, speed)
			}

		})

	}))

})