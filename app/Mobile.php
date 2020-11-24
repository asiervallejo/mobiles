<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
        protected $fillable = [
        'name', 'valuation', 'range_id','url_photo'
    ];

    public function links()
    {
    	return $this->hasMany('App\Link');
    }
    public function range()
    {
    	return $this->belongsTo('App\Range');
    }
}
