<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;

class BlogController extends Controller {

	public function index(Request $request) {
		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('blog', compact('isPjax'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('blog');
	}
}
