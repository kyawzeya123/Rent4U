<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver=Driver::all();
        return view('backend.drivers.index',compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        "name"=>'required|min:5/max:191',
        "avatar"=>'required|mimes:jpeg,jpg,png',
        "email"=>'required',
        "address"=>'required',
        "phone"=>'required',
         "age"=>'required',
         "nrc"=>'required',
         "experience" =>'required'
      
        ]);

        //file-->upload 3

        if ($request->hasfile('avatar')){

            $avatar=$request->file('avatar');
            $upload_dir=public_path().'/storage/driver/';
            $name=time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path='/storage/driver/'.$name;
        }


        //store data --4
        $driver=new Driver;
        $driver->name=request('name');
        $driver->avatar=$path;
        $driver->address=request('address');
        $driver->email=request('email');
        $driver->phone=request('phone');
        $driver->age=request('age'); 
        $driver->nrc=request('nrc');
        $driver->experience=request('experience');

        $driver->save();

        



        //return --.5

        return redirect()->route('drivers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver  = Driver::find($id);
        return view('backend.drivers.show',compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('backend.drivers.edit',compact('driver'));
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
        
         $request->validate([
        "name"=>'required|min:5/max:191',
        "avatar"=>'sometimes|mimes:jpeg,jpg,png',
        "email"=>'required',
        "address"=>'required',
        "phone"=>'required',
         "age"=>'required',
         "nrc"=>'required'
        ]);

        //file-->upload 3

        if ($request->hasfile('avatar')){

            $avatar=$request->file('avatar');
            $upload_dir=public_path().'/storage/driver/';
            $name=time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path='/storage/driver/'.$name;
        }else

        {
            $path=request('oldlogo');
        };


        //store data --4
        $driver = Driver::find($id);
        $driver->name=request('name');
        $driver->avatar=$path;
        $driver->address=request('address');
        $driver->email=request('email');
        $driver->phone=request('phone');
        $driver->age=request('age'); 
        $driver->nrc=request('nrc'); 

        $driver->save();

        //return --.5

        return redirect()->route('drivers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver=Driver::find($id);
        $driver->delete();
        return redirect()->route('drivers.index');
    }
}
