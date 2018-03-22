$(function(){

	/* IMPORTANT: Use debounce with scroll events for better performance */

	var sT, liveOffsetY, liveH

	$(window).on("scroll resize", _.debounce(function() {

		if($("#hero.live").length > 0) {

			sT = $(window).scrollTop()

			if(!$("#hero.live").hasClass("popup")) {
				liveOffsetY = $("#live").offset().top,
				liveH = $("#live").height()
			}

			if(!$("#hero.live").hasClass("popup")
			&& !$("#hero.live").hasClass("no-popup")
			&& sT > liveOffsetY + liveH / 2) {

				$("#hero.live .liveInfo").css("padding-bottom", liveH)
				$("#hero.live").addClass("popup")

			} else if($("#hero.live").hasClass("popup")
				   && sT <= liveOffsetY + liveH / 2) {

				$("#hero.live .liveInfo").css("padding-bottom", 0)
				$("#hero.live").removeClass("popup")

			}

		}

	}))

	$(document).on("click", ".live-container button.close", function(e) {

		if($("#hero.live").hasClass("popup")) {

			$("#hero.live .liveInfo").css("padding-bottom", 0)
			$("#hero.live").removeClass("popup").addClass("no-popup")

		}

	})

    $(document).on("mouseover", "#hero .info a", function(e){

        $(this).addClass("blink")

    }).on("mouseout", "#hero .info a", function(e) {

        $(this).removeClass("blink")

    })

	if($("article.home").length > 0) {

		/* trigger home animations */
		homeAnimations()

		$("body > header").addClass("home")

	}

});
