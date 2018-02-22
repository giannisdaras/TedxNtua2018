var l = Lorenz({
	target: "lorenz",
	length: 1000,
	color: "#E62B1E",
	pointSize: 4,
	initial: {
		x: 30,
		y: 0,
		z: 400,
	},
	scale: {
		x: 15,
		y: 6,
		z: -8
	},
	project: "xz",
	velocity: 0.008,
	sigma: 10,
	rho: 28,
	beta: 8 / 3
})

$(document).ready(function(){

	let trX = parseInt($("#logo-animation").width() / 2),
		trY = parseInt($("#logo-animation").height() / 2),
		tr = $("#logo-animation .container").attr("transform")

	$("#logo-animation .container").attr("transform", "translate(" + trX + ", " + trY + ")" + tr)
	/* start animation */
	$("#logo-animation .container g").css("animation-play-state", "running")

	window.setTimeout(function() {
		l.run()
		$("#logo-animation").fadeOut(2000)
		$("#hero .section-content").addClass("slideIn")
	}, 5000)

})