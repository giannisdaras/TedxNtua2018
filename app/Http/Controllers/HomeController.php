<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use LaravelLocalization;
use App\Speaker;

class HomeController extends Controller {

	public function index(Request $request) {
		Collection::macro('sortByAppearance', function() {
			return $this->sortBy(function($item) {
				/* $item->talk->hour will automatically return the hour attribute of the talk linked to the speaker */
				return $item->talk->hour;
			});
		});

		if(env('SHOW_HIDDEN_ENTRIES', false) == true) {
			$query = new Speaker;
		} else {
			$query = Speaker::where('visible', true);
		}

		$speakers = $query->get()->sortByAppearance();

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('home', compact('isPjax', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('home', compact('speakers'));
	}

}
