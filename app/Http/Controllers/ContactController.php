<?php

namespace App\Http\Controllers;

class ContactController extends Controller {

	public function index() {
		return view('contact');
	}

	public function submit() {
		return 1;
	}

}
