<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Speaker;

class HomeController extends Controller {

	public function index(Request $request) {

		if(env('SHOW_HIDDEN_ENTRIES', false) == true) {
			$query = new Speaker;
		} else {
			$query = Speaker::where('visible', true);
		}

		$speakers = $query->orderBy('name')->get();

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('home', compact('isPjax', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('home', compact('speakers'));
	}

}
