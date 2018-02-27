$(function(){

	var navOffsetY = 68

	$(document).pjax("a:not(.flagLink)", "main", {
		fragment: "main"
	})

	$(document).on("pjax:complete", function() {

		ga("set", "page", location.pathname)
		ga("send", "pageview")

		/* hide hotdog menu */
		$("#navbarHotdog").collapse("hide")

		/* transition between page loading */
		$("main").fadeTo(0, 0.9, function(){
			$(this).fadeTo(400, 1)
		})

		/* update active menu item */
		var current = window.location.pathname
		current = current.replace("/en/", "/")
		current = current.replace("/el/", "/")
		if(current.length == 3) {
			current = "/"
		}

		$("nav a.active").removeClass("active")

	    $("nav a.nav-link").each(function() {
	        if($(this).attr("href").length <= current.length && $(this).attr("href").indexOf(current) !== -1) {
	            $(this).addClass("active")
	        }
	    })
		
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

	    /* update locale changer URLs */
	    $("a.flagLink.en").attr("href", $("head link[hreflang='en']").attr("href"))
	    $("a.flagLink.el").attr("href", $("head link[hreflang='el']").attr("href"))

	    /* if in homepage, update nav to use home style */
		if($("article.home").length > 0) {

			$("body > header").addClass("home")

			/* trigger home animations */
			homeAnimations()

		} else {

			$("header.home").removeClass("home")
			/* random background position */
			let el = $("article:not(.home)")
			if(el.length) {
				el = el.first()
				let rand = Math.round(Math.random())
				if(rand == 0) {
					el.css("background-position", "right")
				}
			}

		}

		if($("article.contact").length > 0) {
			grecaptcha.render("recaptcha", {}, true)
			grecaptcha.reset()
		}

	})

})
