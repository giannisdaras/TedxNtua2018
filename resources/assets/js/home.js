$(document).ready(function(){

    $(document).on("mouseover", "#hero .info a", function(e){

        $(this).addClass("blink")

    }).on("mouseout", "#hero .info a", function(e) {

        $(this).removeClass("blink")

    })

	if($("article.home").length > 0) {

		$("body > header").addClass("home")

		var l = Lorenz({
			target: "canvas",
			length: 1000,
			color: "#E62B1E",
			pointSize: 4,
			initial: {
				x: 0,
				y: 10,
				z: 10,
			},
			scale: {
				x: 15,
				y: 6
			},
			h: 0.008,
			a: 10,
			b: 38,
			c: 8 / 3
		})
		l.run()

	}

})