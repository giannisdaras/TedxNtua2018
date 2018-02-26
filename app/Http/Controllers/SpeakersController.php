<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Speaker;

class SpeakersController extends Controller {

	public function index(Request $request) {
		$visible = env('SHOW_HIDDEN_ENTRIES', false) == true ? '*' : true;
		$speakers = Speaker::where('visible', $visible)->orderBy('name')->get();

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('speakers', compact('isPjax', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}

		return view('speakers', compact('speakers'));
	}

}
