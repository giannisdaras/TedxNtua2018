$(document).ready(function() {

	$(document).on("click", "#lang-switch", function(e) {

		e.preventDefault()
		$($(this).attr("aria-controls")).fadeToggle()

	})

})