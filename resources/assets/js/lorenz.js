var Particle = function(valid = false, x0 = 0, y0 = 0, z0 = 0, h = 0, a = 0, b = 0, c = 0) {
	this.valid = valid
	this.x = x0
	this.y = y0
	this.z = z0
	this.h = h
	this.a = a
	this.b = b
	this.c = c
}

Particle.prototype.integrate = function(dt) {
	this.x += dt * this.h * this.a * (this.y - this.x)
	this.y += dt * this.h * (this.x * (this.b - this.z) - this.y)
	this.z += this.h * (this.x * this.y - this.c * this.z)
}

Particle.prototype.getCopy = function() {
	return new Particle(this.valid, this.x, this.y, this.z, this.h, this.a, this.b, this.c)
}

var Lorenz = function(params) {

	var option, value
	var options = {
		target: "lorenz",
		length: 1000,
		color: "#FFFFFF",
		pointSize: 3,
		initial: {
			x: 0,
			y: 10,
			z: 10
		},
		scale: {
			x: 10,
			y: 10
		},
		h: 0.008,
		a: 10,
		b: 38,
		c: 8 / 3
	}

	if(typeof params === 'object') {
		for(option in params) {
			value = params[option]
			options[option] = value
		}
	}

	var canvas = document.getElementById(options.target),
		W = canvas.clientWidth,
		H = canvas.clientHeight,
		ctx = canvas.getContext("2d"),
		length = options.length,
		pointSize = options.pointSize,
		scale = options.scale,
		color = {
			R: parseInt(options.color.substring(1, 3), 16),
			G: parseInt(options.color.substring(3, 5), 16),
			B: parseInt(options.color.substring(5, 7), 16)
		},
		particle = new Particle(true, options.initial.x, options.initial.y, options.initial.z, options.h, options.a, options.b, options.c),
		trail = [],
		trailIndex = 0

	ctx.translate(W / 2, H / 2)
	trail.push(particle)
	for(var i = 1; i < length; ++i) {
		trail.push(new Particle())
	}

	function getOpacity(i) {
		return (i + 1) / length
	}

	function addParticle(particle) {
		++trailIndex
		trailIndex %= length
		trail[trailIndex] = particle
	}

	function nextParticle(dt) {
		particle.integrate(dt)
		return particle.getCopy()
	}

	function drawParticle(p, opacity) {
		ctx.fillStyle = "rgba(" + color.R + "," + color.G + "," + color.B + "," + opacity + ")"
		ctx.fillRect(scale.x * p.x,scale.y * p.y, pointSize, pointSize)
	}

	function drawParticles() {
		for(var i = 0; i < length; ++i) {
			let k = (i + trailIndex + 1) % length
			if(trail[k].valid) {
				drawParticle(trail[k], getOpacity(i))
			}
		}
	}

	function _clear() {
		ctx.clearRect(-W / 2, -H / 2, W, H)
	}

	function render() {
		_clear()
		drawParticles()
	}

	function tick(timestamp) {
		render()
		let p = nextParticle(1) // dt = 1 for simplicity
		addParticle(p)
		window.requestAnimationFrame(tick)
	}

	function _run() {
		window.requestAnimationFrame(tick)
	}

	return {
		run: function() {
			_run()
		},
		clear: function() {
			_clear()
		}
	}

}

window.Lorenz = Lorenz