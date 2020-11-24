<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
       protected $fillable = ['name'];

       public function mobiles()
    {
    	return $this->hasMany('App\Mobile');
    }
}
