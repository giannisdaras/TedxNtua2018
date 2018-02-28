var homeAnimations = function() {
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


	// following code tells the browser that we want to perform an animation
	window.requestAnimFrame = (function(){
	return  window.requestAnimationFrame       ||
		window.webkitRequestAnimationFrame ||
		window.mozRequestAnimationFrame    ||
		window.oRequestAnimationFrame      ||
		window.msRequestAnimationFrame     ||
		function( callback ){
			window.setTimeout(callback, 1000 / 60);
		};
	})();


	var canvas = document.getElementById("canvas"),
			ctx = canvas.getContext("2d"),
			keyword = "TEDxNTUA CHAOS",
			imageData,
			density = 9, //density of pixels
			mouse = {},
			hovered = false,
			colors = ["250,250,250","230,43,30"], 	//pixel colors
			minDist = 70, //minimum distance
			bounceFactor = 0.8; // when it increases they are getting more jump height

	var W = window.innerWidth,
	H = window.innerHeight;

	canvas.width = W;
	canvas.height = H;

	document.addEventListener("mousemove", function(e) {
		mouse.x = e.pageX;
		mouse.y = e.pageY;
	}, false);

	// Particle Object
	var Particle = function() {
		this.size = Math.random() * 10.5;
		this.x = -W;
		this.y = -H;
		this.free = false;

		this.vy = -5 + parseInt(Math.random() * 10) / 2;
		this.vx = -4 + parseInt(Math.random() * 8);

		// Color
		this.a = Math.random();
		this.color = colors[parseInt(Math.random()*colors.length)];

		this.setPosition = function(x, y) {
			this.x = x;
			this.y = y;
		};

		this.draw = function() {
			ctx.fillStyle = "rgba("+this.color+","+this.a+")";
			ctx.fillRect(this.x, this.y,  this.size,  this.size);
		}
	};

	var particles = [];

	// Draw the text
	function drawText() {
		ctx.clearRect(0, 0, W, H);
		ctx.fillStyle = "#000000";
		ctx.font = "100px 'Arial', sans-serif";
		ctx.textAlign = "center";
		ctx.fillText(keyword, W/2, H/2,W);
	}

	// Clear the canvas
	function clear() {
		ctx.clearRect(0, 0, W, H);
	}

	// Get pixel positions
	function positionParticles() {
		// Get the data
		imageData = ctx.getImageData(0, 0, W, W);
		data = imageData.data;

		// Iterate each row and column
		for (var i = 0; i < imageData.height; i += density) {
			for (var j = 0; j < imageData.width; j += density) {

				// Get the color of the pixel
				var color = data[((j * ( imageData.width * 4)) + (i * 4)) - 1];

				// If the color is black, draw pixels
				if (color == 255) {
					particles.push(new Particle());
					particles[particles.length - 1].setPosition(i, j);
				}
			}
		}
	}

	drawText();
	positionParticles();


	// Update
	function update() {
		clear();
		var flag=true;

		for(i = 0; i < particles.length; i++) {
			var p = particles[i];
			if (p.free!=true){
				flag=false;
			}

			if (Math.abs(mouse.x-p.x)<=p.size && Math.abs(mouse.y-p.y)<=p.size){
				hovered=true;
			}

			if(hovered == true) {
				var dist = Math.sqrt((p.x - mouse.x)*(p.x - mouse.x) + (p.y - mouse.y)*(p.y - mouse.y));

				if(dist <= minDist)
					p.free = true;

				if(p.free == true) {
					p.y += p.vy;
					p.vy += 0.15;
					p.x += p.vx;

					// Collision Detection
					if(p.y + p.size > H) {
						p.y = H - p.size;
						p.vy *= -bounceFactor;

						// Friction applied when on the floor
						if(p.vx > 0)
							p.vx -= 0.1;
						else
							p.vx += 0.1;
					}

					if(p.x + p.size > W) {
						p.x = W - p.size;
						p.vx *= -bounceFactor;
					}

					if(p.x < 0) {
						p.x = 0;
						p.vx *= -0.5;
					}
				}
			}

			ctx.globalCompositeOperation = "lighter";
			p.draw();
		}
		if (flag==true){
			// ctx.clearRect(0, 0, W, H);
			ctx.fillStyle = "#FAFAFA";
			ctx.font = "80px 'Alegreya Sans', sans-serif";
			ctx.textAlign = "center";
			ctx.fillText("TEDxNTUA Chaos", W/2, H/2,W);
		}
	}


	(function animloop(){
		requestAnimFrame(animloop);
		update();
	})();
}