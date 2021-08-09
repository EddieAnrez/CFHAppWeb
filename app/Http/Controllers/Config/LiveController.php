<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Live;

class LiveController extends Controller 
{
   



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.live.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = auth()->user()->id;
        $request->validate([
            'descripcion'=>'required',
            'id_youtube'=>'required',
            'website'=>'required',
            'user_id'=>'required',
            'link'=>'required'
            
        ]);
       
         


        $live = Live::create($request->all());
        return redirect()->route('config.live.index')->with('info', 'La Configuración de Transmisión se Creó con Exitó');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Live $live)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Live $live)
    {
        return view ('config.live.edit', compact('live')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Live $live)
    {
        $request['user_id'] = auth()->user()->id;
        $request->validate([
            'descripcion'=>'required',
            'id_youtube'=>'required',
            'website'=>'required',
            'user_id'=>'required',
            'link'=>'required'
        ]);

            


        $live->update($request->all());
        return redirect()->route('config.live.edit',compact('live'))->with('info', 'La Información de Transmisión se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Live $live)
    {
        $live->delete();

        return redirect()->route('config.live.index')->with('info', 'La Información de Transmisión se eliminó con éxito');
    }
}
