<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Schedule;

class CurrentEventController extends Controller {

	private $now;

	private function getCurr($events) {
		$coll = $events -> where('hour', '<=', $this->now);
		$last = $coll -> pop();
		$prevToLast = $coll -> last();
		# if there are many events happening at the exact same time, choose the one that is not a general event
		while(!is_null($last) && $coll -> isNotEmpty() && $last -> hour == $prevToLast -> hour) {
			if($last -> type != "general" && $prevToLast -> type == "general") {
				$coll -> pop();
				$coll -> push($last);
			}
			$last = $coll -> pop();
			$prevToLast = $coll -> last();
		}
		return $last;
	}

	private function getNext($events) {
		$next = $events -> where('hour', '>', $this->now) -> whereIn('type', ['talk', 'performance']) -> first();
		return $next;
	}

	public function __construct() {
		$this->now = date('H:i');
	}

	public function index(Request $request) {

		if(env('SHOW_HIDDEN_ENTRIES', false) == true) {
			$where = [];
		} else {
			$where = [['visible', true]];
		}

		if(date('Y-m-d') == '2018-03-24') {
			$events = Schedule :: where(array_merge($where, [['type', '!=', 'workshop']]))
							   -> orderBy('hour', 'asc')
							   -> get();
		} else {
			$events = collect([]);
		}

		$curr = $this->getCurr($events);
		$next = $this->getNext($events);
		return view('api/currentEvent', compact('curr', 'next'));

	}

}
