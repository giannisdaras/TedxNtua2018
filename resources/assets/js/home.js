$(document).ready(function(){

    $(document).on("mouseover", "#hero .info a", function(e){

        $(this).addClass("blink")

    }).on("mouseout", "#hero .info a", function(e) {

        $(this).removeClass("blink")

    })

	if($("article.home").length > 0) {

		$(window).on("scroll", _.debounce(function() {

		var sh = $('.typewriter')[0].getBoundingClientRect().top;
		if (sh<=0.56*$(window).height() && !($('.typewriter').hasClass('animated'))) {
			$('.typewriter').addClass('animated');
			typeWriter();
		}


		}))

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


});

var i = 0;
var txt = '_What is '; /* The text */
var speed = 250; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typer").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
