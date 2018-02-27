$(function() {

	let el = $("article:not(.home)")
	if(el.length) {
		el = el.first()
		let rand = Math.round(Math.random())
		if(rand == 0) {
			el.css("background-position", "right")
		}
	}

})