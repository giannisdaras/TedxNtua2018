$(document).ready(function(){

	$(document).pjax("a:not(.flagLink)", "main")

	$(document).on("pjax:complete", function() {

		/* transition between page loading */
		$("main").fadeTo(0, 0.9, function(){
			$(this).fadeTo(400, 1)
		})

		/* change active menu item */
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

	})

})