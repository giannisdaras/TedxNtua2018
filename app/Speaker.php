<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Speaker extends Model
{
	// other fields: id, img_src, schedule_id;
    use HasTranslations;
	public $translatable = ['name','bio'];
	public $timestamps = false;

	// speakers are linked to talks (Schedule class) with the schedule_id field
	// example:
	// $speaker = App\Speaker::find(1);
	// $talk = $speaker->talk;
	// the last command will return the talk object along with its attributes (e.g. $talk->event_name, $talk->event_title, etc.)
	public function talk() {
		return $this->hasOne('App\Schedule');
	}
}
