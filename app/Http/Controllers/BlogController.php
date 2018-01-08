<?php

namespace App\Http\Controllers;
use App\Http\Controllers\View;
use Illuminate\Http\Request;
use LaravelLocalization;

class BlogController extends Controller {

	public function index(Request $request) {
		$isPjax = $request->header('X-PJAX');
		if ($isPjax) {
			return response()->view('blog_overview', compact('isPjax'), 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('blog_overview');
	}

	public function postindex(Request $request, $id) {
		// TODO fetch things from db

		// $tmp = Speaker::where('id', 2)->value('name');
		$data['title'] = 'This is a blog post';
		$data['date'] = '1st JANUARY, 2018';
		$data['hashtags'] = '#tedxntua, #chaos';
		$data['img_src'] = "http://www.apostleschurch.org/wp-content/uploads/2014/04/ws_Outer_Space_Colors_1280x800.jpg";
		$data['content'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 	voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

		$data['isPjax'] = $request->header('X-PJAX');
		if ($data['isPjax']) {
			return response()->view('blog', $data, 200)
				->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('blog', $data);
	}
}
