<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Category;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('backend.cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.cars.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //(1)black screen

        // Validation // 2
        $request->validate([
        "brand_name"=> 'required|min:5|max:191',
        "logo"      => 'required|mimes:jpeg,jpg,png',
        "car_no"    => 'required',
        "feeperhour"=> 'required',
        "feeperday" => 'required',
        
        "category_id"=> 'required'
        ]);
        //dd($request);


        // Upload // 3
        if ($request->hasfile('logo')){
            $logo = $request->file('logo');
            $upload_dir = public_path().'/storage/car/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($upload_dir,$name);
            $path = '/storage/car/'.$name;
        }
        // dd($request);
        // store data // 4

        $car           = new Car;
        $car->brand_name= request('brand_name');
        $car->logo     = $path;
        $car->car_no   = request('car_no');
        $car->feeperhour= request('feeperhour');
        $car->feeperday= request('feeperday');
        $car->status   = 0;
        $car->category_id= request('category_id');
        $car->save();


        // return redirected //5
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('backend.cars.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $categories = Category::all();
        return view('backend.cars.edit',compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request); //(1)black screen

        // Validation // 2

        // Upload // 3
        if ($request->hasfile('logo')){
            $logo = $request->file('logo');
            $upload_dir = public_path().'/storage/car/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($upload_dir,$name);
            $path = '/storage/car/'.$name;
        }else{
            $path = request('oldlogo');
        }

        // store data // 4
        $car  = Car::find($id);
        $car->brand_name= request('brand_name');
        $car->logo     = $path;
        $car->car_no   = request('car_no');
        $car->feeperhour= request('feeperhour');
        $car->feeperday= request('feeperday');
        $car->status   = 0;
        $car->category_id= request('category_id');
        $car->save();

        // return redirected //5
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index');
    }


    public function getData($id){
         
    
    }
}
