<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Schedule extends Model
{
	// other fields: time,img_src,type
	// type: workshop or talk
    use HasTranslations;
	public $translatable = ['event_title','event_prev','subtitle'];
}