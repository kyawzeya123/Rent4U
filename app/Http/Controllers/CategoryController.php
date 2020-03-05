<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Driver;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = Driver::all();
        return view('backend.categories.create',compact('driver'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request); //(1)black screen

        // Validation // 2
        $request->validate([
        "name"      => 'required|min:5|max:191',
        "logo"      => 'required|mimes:jpeg,jpg,png',
    

        ]);

        // Upload // 3
        if ($request->hasfile('logo')){
            $logo = $request->file('logo');
            $upload_dir = public_path().'/storage/category/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($upload_dir,$name);
            $path = '/storage/category/'.$name;
        }

        // store data // 4
        $category           = new Category;
        $category->name     = request('name');
        $category->logo     = $path;
        $category->save();

        $category->drivers()->attach(request('driver'));

        // return redirected //5
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('backend.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.edit',compact('category'));
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
        $request->validate([
        "name"      => 'required|min:5|max:191',
        "logo"      => 'required|mimes:jpeg,jpg,png'

        ]);

        // Upload // 3
        if ($request->hasfile('logo')){
            $logo = $request->file('logo');
            $upload_dir = public_path().'/storage/category/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($upload_dir,$name);
            $path = '/storage/category/'.$name;
        }else{
            $path = request('oldlogo');
        }

        // store data // 4
        $category           = Category::find($id);
        $category->name     = request('name');
        $category->logo     = $path;
        $category->save();

        // return redirected //5
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
