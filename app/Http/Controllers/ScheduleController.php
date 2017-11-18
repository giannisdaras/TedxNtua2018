<?php

namespace App\Http\Controllers;

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
				$times[] = $index[$i] < count($s[$keys[$i]]) ? $s[$keys[$i]][$index[$i]]["time"] : $max_value;
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

	public function index() {
		$schedule = array(
			"talks" => array(
				array(
					"time" => '11:00',
					"title" => 'Reception and registration',
					"subtitle" => '',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'Breakfast will be served and all workshops will be available.'
				),
				array(
					"time" => '13:30',
					"title" => '<a href="/speakers/nastazia-spyropoulou">Nastazia Spyropoulou</a><br><a href="/speakers/edward-perrello">Edward Perello</a><br><a href="/speakers/christos-raftogiannis">Christos Raftogiannis</a>',
					"subtitle" => 'Reapproaching The Established',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'These guys are the best, you should definitely be there.'
				),
				array(
					"time" => '15:00',
					"title" => 'Break',
					"subtitle" => '',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'Just chill bro, don\'t ask much.'
				),
				array(
					"time" => '16:30',
					"title" => '<a href="/speakers/john-kalogerakis">John Kalogerakis</a><br><a href="/speakers/sissy-nikolaou">Sissy Nikolaou</a><br><a href="/speakers/tilemachos-andrianopoulos">Tilemachos Andrianopoulos</a>',
					"subtitle" => 'Engineering What Matters',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'No offense, but who knows these guys?'
				)
			),
			"performances" => array(),
			"workshops" => array(
				array(
					"time" => '11:00',
					"title" => 'Collaborative Design Workshop',
					"subtitle" => '',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'I have no idea what this is about.'
				),
				array(
					"time" => '14:30',
					"title" => 'Global Prep Workshop',
					"subtitle" => '',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'Who is responsible for these workshops? WTH man!'
				),
				array(
					"time" => '15:00',
					"title" => 'All Workshops',
					"subtitle" => '',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'You get to choose where you go. Too difficult, huh?'
				),
				array(
					"time" => '16:30',
					"title" => 'TransLab Workshop',
					"subtitle" => '',
					"image" => 'http://via.placeholder.com/80x80',
					"more" => 'TransLab? What were you thinking?'
				)
			)
		);

		$rows = $this->convertToTable($schedule);
		$day = "2018-03-31";

		return view('schedule', compact('rows', 'day'));
	}
}
