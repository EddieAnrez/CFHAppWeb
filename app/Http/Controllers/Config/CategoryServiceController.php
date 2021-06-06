<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class CategoryServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $categoriesServices = ServiceCategory::all();
        return view ('config.categoriesServices.index', compact('categoriesServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('config.categoriesServices.create'); 
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
            'slug'=>'required|unique:service_categories'
        ]);
       
        $categoriesService = ServiceCategory::create($request->all());

        return redirect()->route('config.categoriesServices.index')->with('info','La Categoría se Creó con Éxito');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCategory $categoriesService) 
    {
       return view ('config.categoriesServices.edit', compact('categoriesService'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCategory $categoriesService)
    {
        $request->validate([
            'name'=>'required',
            "slug'=>'required|unique:service_categories,'slug',$categoriesService->id"
        ]);

        $categoriesService->update($request->all());

        return redirect()->route('config.categoriesServices.index')->with('info','La Categoría se Actualizó con Éxito');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCategory $categoriesService)
    {
        $categoriesService->delete();

        return redirect()->route('config.categoriesServices.index')->with('info','La Categoría se Eliminó con Éxito');
    }
}