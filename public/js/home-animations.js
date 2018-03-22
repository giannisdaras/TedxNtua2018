/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 51);
/******/ })
/************************************************************************/
/******/ ({

/***/ 51:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(52);


/***/ }),

/***/ 52:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(53);

window.homeAnimations = function () {
	if ($("#lorenz").length > 0) {
		var l = Lorenz({
			target: "lorenz",
			length: 1000,
			color: "#E62B1E",
			pointSize: 4,
			initial: {
				x: 30,
				y: 0,
				z: 400
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
		});
	}

	if ($("#logo-animation").length > 0) {
		var trX = parseInt($("#logo-animation").width() / 2),
		    trY = parseInt($("#logo-animation").height() / 2),
		    tr = $("#logo-animation .container").attr("transform");

		$("#logo-animation .container").attr("transform", "translate(" + trX + ", " + trY + ")" + tr);
		/* start animation */
		$("#logo-animation .container g").css("animation-play-state", "running");

		window.setTimeout(function () {
			l.run();
			$("#logo-animation").fadeOut(2000);
			$("#hero .section-content").addClass("slideIn");
		}, 5000);
	}

	var testLiveVal = typeof window.URL === "function" ? new URL(location.href).searchParams.get("testLive") : undefined;

	var update = function update() {
		if ($("#live").length > 0) {
			$.ajax({
				type: "GET",
				url: "/currentEvent",
				dataType: "html",
				data: { testLive: testLiveVal },
				success: function success(data) {
					if (data != $("#hero .liveInfo").html()) {
						$("#hero .liveInfo").fadeOut(200, function () {
							$(this).html(data).fadeIn();
						});
					}
				},
				error: function error(xhr, textStatus, _error) {
					$("#hero .liveInfo").html("");
				}
			});
			liveWI = window.setTimeout(update, 10000);
		}
	};
	var liveWI = window.setTimeout(update, 400);
};

/***/ }),

/***/ 53:
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var Particle = function Particle() {
	var valid = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
	var x0 = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
	var y0 = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;
	var z0 = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 0;
	var v = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 0;
	var sigma = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 0;
	var rho = arguments.length > 6 && arguments[6] !== undefined ? arguments[6] : 0;
	var beta = arguments.length > 7 && arguments[7] !== undefined ? arguments[7] : 0;

	this.valid = valid;
	this.x = x0;
	this.y = y0;
	this.z = z0;
	this.v = v;
	this.sigma = sigma;
	this.rho = rho;
	this.beta = beta;
};

Particle.prototype.integrate = function (dt) {
	this.x += dt * this.v * this.sigma * (this.y - this.x);
	this.y += dt * this.v * (this.x * (this.rho - this.z) - this.y);
	this.z += dt * this.v * (this.x * this.y - this.beta * this.z);
};

Particle.prototype.getCopy = function () {
	return new Particle(this.valid, this.x, this.y, this.z, this.v, this.sigma, this.rho, this.beta);
};

var Lorenz = function Lorenz(params) {

	var option, value;
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
	};

	if ((typeof params === "undefined" ? "undefined" : _typeof(params)) === 'object') {
		for (option in params) {
			value = params[option];
			options[option] = value;
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
	    trailIndex = 0;

	var trX = W / 2,
	    trY = H / 2;
	if (project.charAt(0) == "z") {
		trX = 0;
	}
	if (project.charAt(1) == "z") {
		trY = H;
	}
	ctx.translate(trX, trY);
	trail.push(particle);
	for (var i = 1; i < length; ++i) {
		trail.push(new Particle());
	}

	function getOpacity(i) {
		return (i + 1) / length;
	}

	function addParticle(particle) {
		++trailIndex;
		trailIndex %= length;
		trail[trailIndex] = particle;
	}

	function nextParticle(dt) {
		particle.integrate(dt);
		return particle.getCopy();
	}

	function drawParticle(p, opacity) {
		ctx.fillStyle = "rgba(" + color.R + "," + color.G + "," + color.B + "," + opacity + ")";
		var a = scale[project.charAt(0)] * p[project.charAt(0)],
		    b = scale[project.charAt(1)] * p[project.charAt(1)];
		ctx.fillRect(a, b, pointSize, pointSize);
	}

	function drawParticles() {
		for (var i = 0; i < length; ++i) {
			var k = (i + trailIndex + 1) % length;
			if (trail[k].valid) {
				drawParticle(trail[k], getOpacity(i));
			}
		}
	}

	function _clear() {
		ctx.clearRect(-trX, -trY, W, H);
	}

	function render() {
		_clear();
		drawParticles();
	}

	function tick(timestamp) {
		if (canvas.offsetParent !== null) {
			// if canvas not hidden
			render();
			var p = nextParticle(1); // dt = 1 since we use requestAnimationFrame
			addParticle(p);
		}
		window.requestAnimationFrame(tick);
	}

	function _run() {
		window.requestAnimationFrame(tick);
	}

	return {
		run: function run() {
			_run();
		},
		clear: function clear() {
			_clear();
		}
	};
};

window.Lorenz = Lorenz;

/***/ })

/******/ });