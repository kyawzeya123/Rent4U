<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     protected $fillable =  [
     						'brand_name',
     						'logo',
     						'car_no',
     						'feeperhour',
     						'feeperday',
     						'status',
     						'category_id'
    					    ];
}
