<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Speaker extends Model
{
	// other fields: id,img_src,schedule_id;
    use HasTranslations;
	public $translatable = ['name','bio','talk_title','talk_prev'];
	public $timestamps = false;

	public function talk() {
		return $this->hasOne('App\Schedule');
	}
}
