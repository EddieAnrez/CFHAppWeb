<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_L;

class Category_LController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $locationCategories = Category_L::all();
        return view ('config.locationCategories.index', compact('locationCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('config.locationCategories.create');
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
            'name'=>'required',
            'slug'=>'required|unique:category__l_s'
        ]);
       
        $locationCategory = Category_L::create($request->all());

        return redirect()->route('config.locationCategories.index')->with('info','La Categoría se Creó con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category_L $locationCategory) 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_L $locationCategory)
    {
        return view ('config.locationCategories.edit', compact('locationCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_L $locationCategory)
    {
        $request->validate([
            'name'=>'required',
            "slug'=>'required|unique:category__l_s,'slug',$locationCategory->id"
        ]);

        $locationCategory->update($request->all());

        return redirect()->route('config.locationCategories.index')->with('info','La Categoría se Actualizó con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_L $locationCategory)
    {
        $locationCategory->delete();

        return redirect()->route('config.locationCategories.index')->with('info','La Categoría se Eliminó con Éxito');
    }
}
