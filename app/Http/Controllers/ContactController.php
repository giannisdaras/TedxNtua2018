<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\Recaptcha;
use Mail;
use LaravelLocalization;

class ContactController extends Controller {

	public function index(Request $request) {
		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('contact', compact('isPjax'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('contact');
	}

	// post method to submit form
	public function submit(Request $request) {
		https://www.google.com/recaptcha/api/siteverify

		$this->validate($request, [
			'email' => 'required|email',
			'g-recaptcha-response' => ['required', new Recaptcha],
			'subject' => 'min:3',
			'message' => 'min:10',
			'name' => 'min:3',
		]);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message,
			'sender' => $request->name,
		);

		try {
			Mail::send('emails.contact', $data, function ($message) use ($data) {
				$message->from($data['email'], $data['sender']);
				$message->to('info@tedxntua.com');
				$message->subject($data['subject']);
			});
		} catch(\Exception $e) {
			return response()->json([
				'errors' => [
					'submit' => [trans('general.contact.msg.failure')],
				]
			], 422);
		}

		if($request->ajax()) {
			return response()->json([
				'status' => 'success',
				'message' => trans('general.contact.msg.success'),
			]);
		}

		return redirect()->url('/');
	}

}
