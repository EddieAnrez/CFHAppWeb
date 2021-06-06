<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceSubCategory;
use App\Models\ServiceCategory;

class SubCategoryServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
      $SubCategoriesServices = ServiceSubCategory::all();
      return view ('config.subCategoriesServices.index', compact('SubCategoriesServices')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories =ServiceCategory::pluck('name','id');

        return view ('config.subCategoriesServices.create',compact('categories'));
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
            'slug'=>'required|unique:service_sub_categories',
            'category_id' =>'required'
        ]);
       
        $SubCategoriesService = ServiceSubCategory::create($request->all());

        return redirect()->route('config.subCategoriesServices.index')->with('info','La Sub Categoría se Creó con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceSubCategory $SubCategoriesService)
    {
        $categories =ServiceCategory::pluck('name','id');
        return view ('config.subCategoriesServices.edit', compact('SubCategoriesService','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceSubCategory $SubCategoriesService)
    {
        $request->validate([
            'name'=>'required',
            
            "slug'=>'required|unique:service_sub_categories,'slug',$SubCategoriesService->id",
            'category_id' =>'required'
        ]);
        $SubCategoriesService->update($request->all());

        return redirect()->route('config.subCategoriesServices.index')->with('info','La Sub Categoría se Actualizó con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceSubCategory $SubCategoriesService)
    {
        $SubCategoriesService->delete();

        return redirect()->route('config.subCategoriesServices.index')->with('info','La Sub Categoría se Eliminó con Éxito');
    }
}
