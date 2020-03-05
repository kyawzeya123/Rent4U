<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;
use App\Car;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function rents(Request $request)
    {
    	 $carid=request('cid');
    	 $driver_id=request('did');
    	 $start_date=request('strdate');
    	 $end_date=request('enddate');
    	 $start_time=request('strtime');
    	 $end_time=request('endtime');

    	 $rent = new Rent;

    	$rent->car_id=$carid;
    	$rent->user_id=1;
        $rent->driver_id= $driver_id;
        $rent->start_date=$start_date;
        $rent->end_date=$end_date;
        $rent->start_time=$start_time;
        $rent->end_time=$end_time;

        $rent->save();



        $car =DB::table('cars')
              ->where('id', $rent->car_id)
              ->update(['status' => 1]); 

        return $rent;

    	
    }

    public function allrent(Request $request)
    {
        $allrent = Rent::all();
        return view('backend.rents.index',compact('allrent'));
    }

}