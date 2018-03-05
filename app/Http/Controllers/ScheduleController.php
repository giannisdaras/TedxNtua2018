<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Schedule;

class ScheduleController extends Controller {

	private function convertToTable($s) {

		/* 

			Converts the schedule to a table form, where events of different categories are grouped by event time
			$s is an associative array with three categories: talks, performances and workshops
			Each category is associated to an array of events of that category, sorted by time
			The function convertToTable keeps three indices corresponding to each category and iterates through $s, each time adding to an array the event (of any category) with the smallest event time and any other events that happen at the same time, thus grouping them together.

		*/

		$keys = array("talks", "performances", "workshops");
		$index = array(0, 0, 0);

		# times are of the form "14:30", so "zzzzz" will always be greater than these values
		$max_value = "zzzzz";

		$rows = array();

		while(	$index[0] < count($s["talks"])
			||	$index[1] < count($s["performances"])
			||	$index[2] < count($s["workshops"])
		) {

			$times = array();
			for($i = 0; $i < 3; ++$i) {
				$times[] = $index[$i] < count($s[$keys[$i]]) ? $s[$keys[$i]][$index[$i]]["hour"] : $max_value;
			}

			$min_time = min($times);
			$row = array("time" => $min_time, "events" => array());

			for($i = 0; $i < 3; ++$i) {
				if($times[$i] == $min_time) {
					$el = $s[$keys[$i]][$index[$i]];
					/* associative array addition in PHP merges the array keys and their values */
					$row["events"][] = $el + array("empty" => false);
					++$index[$i];
				} else {
					$row["events"][] = array("empty" => true);
				}
			}
			$rows[] = $row;

		}

		return $rows;

	}

	public function index(Request $request) {

		if(env('SHOW_HIDDEN_ENTRIES', false) == true) {
			$events = new Schedule;
		} else {
			$events = Schedule::where('visible', true);
		}

		$talks = $events -> where('type', 'talk')
						 -> orderBy('hour', 'asc')
						 -> get() -> toArray();

		$performances = $events -> where('type', 'performance')
								-> orderBy('hour', 'asc')
								-> get() -> toArray();

		$workshops = $events -> where('type', 'workshop')
							 -> orderBy('hour', 'asc')
							 -> get() -> toArray();

		$schedule = compact('talks', 'performances', 'workshops');
		$counts = [count($talks), count($performances), count($workshops)];

		$rows = $this->convertToTable($schedule);
		$day = "2018-03-24";
		$isPjax = $request->header('X-PJAX');
		if($isPjax) {
			return response()->view('schedule', compact('rows', 'day', 'isPjax'), 200)
							 ->header('X-PJAX-URL', LaravelLocalization::getLocalizedURL());
		}
		return view('schedule', compact('rows', 'day', 'counts'));

	}
}
