<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller {

	public function index(Request $request) {

		// $it = DB::table('people')->where('team_type', 'it')->get();
    $it = [];

		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('team', compact('isPjax', 'it'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('team', compact('it'));
	}
}
