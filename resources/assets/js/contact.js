$(document).ready(function(){

	$(document).on("submit", "#contactForm", function(e) {

		e.preventDefault()

		$("small.error").each(function(i, v){
			$(this).text($(this).attr("data-initial") || "")
		})

		$(".error").removeClass("error")

		if(grecaptcha.getResponse() == '') {
			$(".g-recaptcha").addClass("error")
			return false;
		}

		$.ajax({

			type: "POST",
			url: $("#contactForm").attr("action"),
			data: $("#contactForm").serialize(),
			success: function(data) {
				if(data.status == "success") {
					$("#successMessage").text(data.message)
					$(".form-container").fadeOut(400, function(){
						$(".success-container").fadeIn()
					})
				}
				grecaptcha.reset()
			},
			error: function(xhr, textStatus, error) {
				for (var err in xhr.responseJSON.errors) {
					let msg = xhr.responseJSON.errors[err][0]
					for (var i = 1; i < xhr.responseJSON.errors[err].length; ++i) {
						msg += " " + xhr.responseJSON.errors[err][i]
					}
					$("#" + err).addClass("error")
					$("#" + err + "Help").fadeOut(400, function(){
						$(this).addClass("error").text(msg).fadeIn()
					})
				}
				$(".form-control.error").first().focus()
				grecaptcha.reset()
			}

		})

	})

})
