$(document).ready(function(){

    $(document).on("mouseover", "#hero .info a", function(e){

        $(this).addClass("blink")

    }).on("mouseout", "#hero .info a", function(e) {

        $(this).removeClass("blink")

    })

	if($("article.home").length > 0) {

		$("body > header").addClass("home")

	}

})