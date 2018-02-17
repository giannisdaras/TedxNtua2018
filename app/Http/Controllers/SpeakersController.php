<?php

namespace App\Http\Controllers;
use App\Http\Controllers\View;
use App\Speaker;
use Illuminate\Http\Request;
use LaravelLocalization;

class SpeakersController extends Controller {

	public function index(Request $request) {
		$mdl=new Speaker();
		$speakers=$mdl::all(); 
		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('speakers', compact('isPjax', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}

		return view('speakers', compact('speakers'));
	}

}
