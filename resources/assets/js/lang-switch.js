$(document).ready(function() {

	$(document).on("click", "#lang-switch", function(e) {

		e.preventDefault()
		$("#lang").fadeToggle()

	})

	$(document).on("click", function(e) {
		if($("#lang").is(":visible") && $(e.target).closest("#lang").length == 0 && $(e.target).closest("#lang-switch").length == 0) {
			$("#lang").fadeOut()
		}
	})

	$(window).on("keydown", function(e) {
		if($("#lang").is(":visible") && e.keyCode == 27) {
			$("#lang").fadeOut()
		} 
	})

})