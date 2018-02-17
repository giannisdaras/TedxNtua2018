<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;

class HomeController extends Controller {

	public function index(Request $request) {
		// $speakers = DB::table('speakers')->get();

		$data['name'] = 'Big Shaq';
		$data['short_description'] = "Enterpreneur computer engineer and white hat hacker";
		$data['id'] = 'jobs';
		$data['img_src'] = 'https://i1.sndcdn.com/artworks-000241864958-t7ad44-t500x500.jpg';
		$speakers = array($data, $data, $data);

		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('home', compact('isPjax', 'speakers'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('home', compact('speakers'));
	}

}
