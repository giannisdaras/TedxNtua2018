$(document).ready(function(){

    $(document).on("mouseover", "#hero .info a", function(e){

        $(this).addClass("blink")

    }).on("mouseout", "#hero .info a", function(e) {

        $(this).removeClass("blink")

    })

    /*	checking $("article.home").length won't work by itself, since it runs on page load
		thus, AJAX navigation to home would not trigger the script
	 */
	$(window).on("scroll", _.debounce(function() {

		if($('.typewriter').length > 0) {

			var sh = $('.typewriter')[0].getBoundingClientRect().top;
			if (sh<=0.56*$(window).height() && !($('.typewriter').hasClass('animated'))) {
				$('.typewriter').addClass('animated');
				typeWriter();
			}

		}

	}))

	if($("article.home").length > 0) {

		$("body > header").addClass("home")

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
