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
		$it = $person::where('team_type', 'it')->orderBy('name')->get();
		$experience = $person::where('team_type', 'experience')->orderBy('name')->get();
		$fr = $person::where('team_type', 'fr')->orderBy('name')->get();
		$venue = $person::where('team_type', 'venue')->orderBy('name')->get();
		$speakers = $person::where('team_type', 'speakers')->orderBy('name')->get();
		$media = $person::where('team_type', 'media')->orderBy('name')->get();
		$graphics = $person::where('team_type', 'graphics')->orderBy('name')->get();

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
