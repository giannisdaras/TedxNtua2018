<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\View;
use App\Person;

class TeamController extends Controller {

	public function index(Request $request) {
		/* Collection helper to sort *translated* names */
		Collection::macro('sortByTeamName', function() {
			return $this->sortBy(function($item) {
				/* $item->name will automatically return the translation corresponding to the current locale */
				return $item->name;
			});
		});

		$it = Person::where('team_type', 'it')->get()->sortByTeamName();
		$experience = Person::where('team_type', 'experience')->get()->sortByTeamName();
		$fr = Person::where('team_type', 'fr')->get()->sortByTeamName();
		$venue_production = Person::where('team_type', 'venue')->get()->sortByTeamName();
		$speakers = Person::where('team_type', 'speakers')->get()->sortByTeamName();
		$media = Person::where('team_type', 'media')->get()->sortByTeamName();
		$graphics = Person::where('team_type', 'graphics')->get()->sortByTeamName();
		$teams = compact('experience', 'fr', 'graphics', 'it', 'media', 'speakers', 'venue_production');

		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('team', compact('isPjax', 'teams'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('team', compact('teams'));
	}
}
