<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Person extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    protected $table = 'people';
}
