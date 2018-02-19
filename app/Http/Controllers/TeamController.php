<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\View;
use App\Person;

class TeamController extends Controller {

	public function index(Request $request) {
		$person = new Person();
		$it = $person::where('team_type', 'it')->get();
		$experience = $person::where('team_type', 'experience')->get();
		$fr = $person::where('team_type', 'fr')->get();
		$venue = $person::where('team_type', 'venue')->get();
		$speakers = $person::where('team_type', 'speakers')->get();
		$media = $person::where('team_type', 'media')->get();
		$graphics = $person::where('team_type', 'graphics')->get();

		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('team', compact('isPjax', 'it', 'experience',
			 'fr', 'media', 'venue', 'speakers', 'graphics'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('team', compact('it', 'experience',
		 'fr', 'media', 'venue', 'speakers', 'graphics'));
	}
}
