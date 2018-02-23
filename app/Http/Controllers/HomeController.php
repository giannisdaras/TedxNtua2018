<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Speaker;

class HomeController extends Controller {

	public function index(Request $request) {
		$speakers = Speaker::orderBy('name')->get();

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('home', compact('isPjax', 'sessions', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('home', compact('sessions', 'speakers'));
	}

}
