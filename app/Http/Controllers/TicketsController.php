<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;

class TicketsController extends Controller {

	public function index(Request $request) {
        $crawlers = [
            'facebookexternalhit/1.1',
            'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',
            'Facebot',
        ];

        $userAgent = $request->header('User-Agent');

        if (str_contains($userAgent, $crawlers)) {
            return view('public/tickets');
        } else {
        	return redirect('https://goo.gl/tQJf8a');
        }
	}

}
