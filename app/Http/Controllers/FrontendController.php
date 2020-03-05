<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Car;
use App\Driver;

class FrontendController extends Controller
{
    public function dashboard($value='')
    {
        return view('frontend.dashboard');
    }
    public function services($value='')
    {
    	$category = Category::all();
      	return view('frontend.services',compact('category'));
    }
    public function abouts($value='')
    {
        return view('frontend.abouts');
    }
    public function contacts($value='')
    {
        return view('frontend.contacts');
    }

     public function Fcars($id)
    {

    	$car = Car::Where('category_id',$id)->get();
      return view('frontend.cars',compact('car',));
    }

     public function details(Request $request)
    {
      //dd(request('catid'));
      $id=request('id');
      $cid=request('catid');
      $car = Car::find($id);

      //dd($car);
      $driver = Category::find($cid)->drivers;
        return view('frontend.car_detail',compact('car','driver'));
    }

    public function main($value='')
      {
        
        $car = Car::paginate(8);
        return view('frontend.main',compact('car'));
      }   


}
