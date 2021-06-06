<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('can::config.tags.index')->only('index');
        $this->middleware('can::config.tags.create')->only('create','Store');
        $this->middleware('can::config.tags.edit')->only('edit','update');
        $this->middleware('can::config.tags.destroy')->only('destroy');
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view ('config.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors=[
            'red' => 'Color Rojo',
            'yellow'=> 'Color Amarillo',
            'green' => 'Color Verde',
            'blue' => 'Color Azul',
            'indigo' => 'Color Indigo',
            'purple' => 'Color Morado',
            'pink' => 'Color Rosa'
        ];
        return view ('config.tags.create',compact('colors'));
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
            'name' => 'required',
        'slug' => 'required|unique:tags',
        'color'=>'required'


        ]);
        $tag = Tag::create($request->all());

        return redirect()->route('config.tags.edit', compact('tag'))->with('info','La etiqueta se creo con exito');
               
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $colors=[
            'red' => 'Color Rojo',
            'yellow'=> 'Color Amarillo',
            'green' => 'Color Verde',
            'blue' => 'Color Azul',
            'indigo' => 'Color Indigo',
            'purple' => 'Color Morado',
            'pink' => 'Color Rosa'
        ];
        return view ('config.tags.edit',compact('tag','colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
        'name' => 'required',
        'slug' => "required|unique:tags,slug,$tag->id",
        'color'=>'required',
        ]);
        $tag->update($request->all());
        return redirect()->route('config.tags.edit',$tag)->with('info','La etiqueta se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('config.tags.index')->with('info','La etiqueta de elimino con exito');
    }
}
