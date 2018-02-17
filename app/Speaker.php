<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Speaker extends Model
{
	// other fields: id,img_src
    use HasTranslations;
	public $translatable = ['name','talk_title','talk_prev','bio'];
}
