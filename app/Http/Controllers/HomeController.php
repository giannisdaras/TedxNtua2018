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
		$now = date("Y-m-d H:i");
		$isToday = $request->testLive == "yes" || ($now >= "2018-03-24 10:30" && $now <= "2018-03-24 23:59");

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('home', compact('isPjax', 'isToday', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('home', compact('speakers', 'isToday'));
	}

}
