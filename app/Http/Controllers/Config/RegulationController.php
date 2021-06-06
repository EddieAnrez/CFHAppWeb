<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regulation;

class RegulationController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('config.regulations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.regulations.create');
        
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
            'slug'=>'required|unique:regulations',
            'desc'=>'required',
            'url'=>'required'
            
        ]);
       
        $regulation=Regulation::create($request->all()); 
        return redirect()->route('config.regulations.index')->with('info', 'La Ley/Regulación se creó con exito'); 
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
    public function edit(Regulation $regulation)
    {
        return view ('config.regulations.edit', compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regulation $regulation)
    {
        $request->validate([
            'name'=>'required',
            "slug'=>'required|unique:regulations,'slug',$regulation->id",
            'desc'=>'required',
            'url'=>'required'
            
        ]);
        
        $regulation->update($request->all());

        return redirect()->route('config.regulations.index')->with('info','La  Ley/Regulación se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regulation $regulation)
    {
        $regulation->delete();

        return redirect()->route('config.regulations.index')->with('info', 'La Ley/Regulación se eliminó con éxito');
    }
}
