<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Sponsor extends Model
{
	// other fields: url,img_src,type
	// type: grand, partners,supporter,media
    use HasTranslations;
	public $translatable = ['name'];
}