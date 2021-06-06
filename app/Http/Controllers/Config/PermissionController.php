<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permisssion;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('config.permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.permissions.create');
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
            'slug'=>'required|unique:permisssions',
            'desc'=>'required',
            'url'=>'required'
            
        ]);
       
        $rpermisssion=Permisssion::create($request->all()); 
        return redirect()->route('config.permissions.index')->with('info', 'El Trámite/Permiso se creó con exito'); 
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
    public function edit(Permisssion $permission)
    {
        return view ('config.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permisssion $permission)
    {
        $request->validate([
            'name'=>'required',
            "slug'=>'required|unique:permisssions,'slug',$permission->id",
            'desc'=>'required',
            'url'=>'required'
            
        ]);
        
        $permission->update($request->all());

        return redirect()->route('config.permissions.index')->with('info','El Trámite/Permiso se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permisssion $permission)
    {
        $permission->delete();

        return redirect()->route('config.permissions.index')->with('info', 'El Trámite/Permiso se eliminó con éxito');
    }
}
