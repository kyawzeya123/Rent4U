<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
     protected $fillable =  [
     						'car_id',
     						'user_id',
     						'driver_id',
     						'start_time',
     						'end_time',
     						'start_date',
     						'end_date'
    					    ];
}
