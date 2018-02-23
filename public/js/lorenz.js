var Particle = function(valid = false, x0 = 0, y0 = 0, z0 = 0, v = 0, sigma = 0, rho = 0, beta = 0) {
	this.valid = valid
	this.x = x0
	this.y = y0
	this.z = z0
	this.v = v
	this.sigma = sigma
	this.rho = rho
	this.beta = beta
}

Particle.prototype.integrate = function(dt) {
	this.x += dt * this.v * this.sigma * (this.y - this.x)
	this.y += dt * this.v * (this.x * (this.rho - this.z) - this.y)
	this.z += dt * this.v * (this.x * this.y - this.beta * this.z)
}

Particle.prototype.getCopy = function() {
	return new Particle(this.valid, this.x, this.y, this.z, this.v, this.sigma, this.rho, this.beta)
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
			y: 10,
			z: 10
		},
		project: "xz",
		velocity: 0.008,
		sigma: 10,
		rho: 38,
		beta: 8 / 3
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
		project = options.project,
		color = {
			R: parseInt(options.color.substring(1, 3), 16),
			G: parseInt(options.color.substring(3, 5), 16),
			B: parseInt(options.color.substring(5, 7), 16)
		},
		particle = new Particle(true, options.initial.x, options.initial.y, options.initial.z, options.velocity, options.sigma, options.rho, options.beta),
		trail = [],
		trailIndex = 0

	let trX = W / 2,
		trY = H / 2
	if(project.charAt(0) == "z") {
		trX = 0
	}
	if(project.charAt(1) == "z") {
		trY = H
	}
	ctx.translate(trX, trY)
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
		let a = scale[project.charAt(0)] * p[project.charAt(0)],
			b = scale[project.charAt(1)] * p[project.charAt(1)]
		ctx.fillRect(a, b, pointSize, pointSize)
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
		ctx.clearRect(-trX, -trY, W, H)
	}

	function render() {
		_clear()
		drawParticles()
	}

	function tick(timestamp) {
		render()
		let p = nextParticle(1) // dt = 1 since we use requestAnimationFrame
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