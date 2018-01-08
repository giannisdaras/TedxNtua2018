<?php

namespace App\Http\Controllers;
use App\Http\Controllers\View;
use Illuminate\Support\Facades\DB;
use App\Speaker;
use Illuminate\Http\Request;
use LaravelLocalization;

class SpeakersController extends Controller {

	public function speakerindex(Request $request, $speaker) {
		// TODO fetch things from db

		$tmp=Speaker::where('id',2)->value('name');
		$data['speaker'] = $speaker;
		$data['name'] =$tmp;
		$data['img_src'] = "https://pi.tedcdn.com/r/pe.tedcdn.com/images/ted/0ef62e4df27b4ba7294de889fdbc33e476a08ec9_254x191.jpg?";
		$data['cv'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 	voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
		$data['talk'] = "How to live before you die";

		$data['isPjax'] = $request->header('X-PJAX');
		if($data['isPjax']) {
			return response()->view('speaker', $data, 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('speaker', $data);
	}

	public function index(Request $request) {
		// TODO fetch from db
		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('speakers', compact('isPjax'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('speakers');
	}
}