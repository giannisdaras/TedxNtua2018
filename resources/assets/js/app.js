
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const WOW = require('wowjs');
window.WOW = new WOW.WOW({ live: false });


window.WOW.init();

/* INSTAFEED */

var Instafeed = require('instafeed.js');

var feed = new Instafeed({

	get: 'user',
	userId: 1544110047,
	accessToken: '1544110047.1677ed0.14517c0f428f4215ba4e784825b8fc40',
	limit: 12,
	template: '<a href="{{link}}" class="{{type}}" target="_blank"><img src="{{image}}" /><i class="fa fa-play" aria-hidden="true"></i></a>',

})

feed.run()

/* DISABLE Vue.js until it is needed

window.Vue = require('vue');

 **
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 *

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

*/
require('./typewriter')
require('./home');
require('./jquery.pjax');
require('./ajax-navigation');
require('./nav-scroll');
require('./contact');
require('./lang-switch');
require('./eu-cookie');
require('./tooltip');