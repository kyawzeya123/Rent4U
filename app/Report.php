<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
     protected $fillable =  [
     						'rent_id',
     						'driver_id',
     						'description',
     						'fee'    						
    					    ];
}
