<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
     protected $fillable =  [
     						'name',
     						'email',
     						'phone',
     						'address',
     						'avatar',
     						'age',
     						'nrc',
                'experience'
    					    ];

    public function categories($value='')
  	{
  		 return $this->belongsToMany('App\Category')->withTimestamps();
  	}
}
