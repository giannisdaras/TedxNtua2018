<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Speaker;

class HomeController extends Controller {

	public function index(Request $request) {
		$speakers = Speaker::all();

		$sessions = [
			['from' => '10:30', 'to' => '12:30'],
			['from' => '13:00', 'to' => '15:00'],
			['from' => '15:30', 'to' => '17:30']
		];

		/* Contains three arrays, one for each session */
		$speakersBySession = [[], [], []];

		foreach($speakers as $speaker) {
			$talk = $speaker->talk;
			foreach($sessions as $i => $session) {
				if($talk->hour >= $session['from'] && $talk->hour <= $session['to']) {
					$speakersBySession[$i][] = $speaker;
					break;
				}
			}
		}

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('home', compact('isPjax', 'sessions', 'speakersBySession'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('home', compact('sessions', 'speakersBySession'));
	}

}
