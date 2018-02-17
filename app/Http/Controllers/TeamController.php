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

		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('team', compact('isPjax', 'it'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('team', compact('it'));
	}
}
