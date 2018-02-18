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
	public $timestamps = false;

	public function speaker() {
		return $this->belongsTo('App\Speaker')->withDefault();
	}

	/* 	So that toArray() method in Schedule controller returns the translated value of each attribute
		and also returns the event title link mutator attribute */
	public function toArray() {
        $attributes = parent::toArray();
        
        foreach ($this->getTranslatableAttributes() as $name) {
            $attributes[$name] = $this->getTranslation($name, app()->getLocale());
        }
        $attributes["event_title_link"] = $this->event_title_link;
        
        return $attributes;
    }

    public function getEventTitleLinkAttribute() {
    	if($this->type == "talk") {
    		return '<a href="/speakers#' . $this->speaker->sid . '">' . $this->speaker->name . '</a>';
    	} else {
    		return $this->event_title;
    	}
    }
}