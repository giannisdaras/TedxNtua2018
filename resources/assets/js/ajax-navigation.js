$(document).ready(function(){

	$(document).pjax("a:not(.flagLink)", "main", {
		fragment: "main"
	})

	$(document).on("pjax:complete", function() {

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

		$("nav li.active").removeClass("active")

	    $("nav a.nav-link").each(function() {
	        if($(this).attr("href").length <= current.length && $(this).attr("href").indexOf(current) !== -1) {
	            $(this).parent().addClass("active")
	        }
	    })

	    /* update locale changer URLs */
	    $("a.flagLink.en").attr("href", $("head link[hreflang='en']").attr("href"))
	    $("a.flagLink.el").attr("href", $("head link[hreflang='el']").attr("href"))

	    /* if in homepage, update nav to use home style */
		if($("article.home").length > 0) {

			$("body > header").addClass("home")

		} else {
	
			$("header.home").removeClass("home")

		}

	})

})