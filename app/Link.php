<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
            protected $fillable = [
        'mobile_id', 'n_opinion', 'opinion_url','opinion_web'
    ];
        public function mobile()
    {
    	return $this->belongsTo('App\Mobile');
    }
}
