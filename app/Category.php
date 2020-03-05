<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable =  [
     						'name',
     						'logo'
       					    ];

     public function drivers($value='')
  	{
  		 return $this->belongsToMany('App\Driver')
  		 			->withTimestamps();
  	}
}
