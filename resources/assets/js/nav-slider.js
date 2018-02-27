$(function() {

	let scrollTimer

	let	scrollHelper = function(container) {
		scrollTimer = null
		// snap scroll

		// get item closer to the center of the container view
		let w = container.width(),
			minDist = w / 2,
			minDist_i = -1,
			items = container.children(),
			items_n = items.length

		items.each(function(i, el) {
			let pos = $(this).position().left,
				itemw = $(this).width(),
				d = Math.abs((pos + itemw / 2) - w / 2)
			/* special checks for first and last items */
			if(
				(i == 0 && pos > -itemw / 2) ||
				(i == items_n - 1 && w - pos > itemw / 2)
			  ) {
				d = 0
			}
			if(d < minDist) {
				minDist = d
				minDist_i = i
			}
		})

		let el = container.children().eq(minDist_i)
		selectTab(container, el)
	}

	let selectTab = function(container, el) {
		let elLink = el.find("a"),
			cw = container.width(),
			newScrollPos = container.scrollLeft() + el.position().left + el.width() / 2 - cw / 2

		let activeEl = container.find(".active")
		if(activeEl.attr("id") != elLink.attr("id")) {
			activeEl.removeClass("active")
			elLink.tab("show")
			elLink.addClass("active")
		}
		container.animate({
			scrollLeft: newScrollPos
		}, 100)
	}

	document.addEventListener("scroll", _.debounce(function(e) {

		let container = $(e.target)
		if(!container.hasClass("nav-slider")) return

		if(scrollTimer) {
			clearTimeout(scrollTimer)
		}

		scrollTimer = setTimeout(function() {
			scrollHelper(container)
		}, 250)

	}), true)

	$(document).on("click", ".nav-slider .nav-item a", function(e) {
		e.preventDefault()
		selectTab($(this).parents(".nav-slider"), $(this).parent())
	})

})