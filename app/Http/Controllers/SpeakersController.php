<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Speaker;

class SpeakersController extends Controller {

	public function index(Request $request) {

		if(env('SHOW_HIDDEN_ENTRIES', false) == true) {
			$query = new Speaker;
		} else {
			$query = Speaker::where('visible', true);
		}

		$speakers = $query->orderBy('name')->get();

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('speakers', compact('isPjax', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}

		return view('speakers', compact('speakers'));

	}

	public function speaker(Request $request) {
        $crawlers = [
            'facebookexternalhit/1.1',
            'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',
            'Facebot',
        ];

        $userAgent = $request->header('User-Agent');

        if (str_contains($userAgent, $crawlers)) {
            $speaker = Speaker::where('sid', $request->sid)->first();
            return view('public/speaker', compact('speaker'));
        } else {
        	return redirect('/speakers#' . $request->sid);
        }
	}

}
