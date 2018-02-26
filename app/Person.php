<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Person extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
	public $timestamps = false;
    protected $table = 'people';

    /* Team names should have a linebreak between name and surname in mobile screens */
    public function getFormattedNameAttribute() {
    	return str_replace(' ', ' <br>', trim($this->name));
    }
}
